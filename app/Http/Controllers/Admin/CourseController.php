<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{
    Course,
    CourseAccordion,
    CourseCategory,
    CourseSlot,
    Trainer
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $pageTitle  = 'Courses';
        $courses    = Course::with('category')->get();
        return view('admin.course.index', compact('pageTitle','courses'));
    }

    public function create()
    {
        $pageTitle  = 'Add Course';
        $trainers   = Trainer::all();
        $categories = CourseCategory::all();
        return view('admin.course.create', compact('pageTitle','trainers','categories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'         => ['required', 'image', 'mimes:jpg,jpeg,png'],
            'title'         => ['required', 'max:50'],
            'description'   => ['required', 'max:300'],
            'category_id'   => ['required'],
        ]);

        $rules = [
            'day.*'                     => ['required', 'in:monday,tuesday,wednesday,thursday,friday,saturday,sunday'],
            'start_time.*'              => ['required', 'date_format:H:i'],
            'end_time.*'                => ['required', 'date_format:H:i'],
            'trainer_id.*'              => ['required', 'exists:trainers,id'],
            'accordion_title.*'         => ['nullable', 'max:255'],
            'accordion_description.*'   => ['nullable', 'max:300'],
        ];
       
        // Validate the request
        $validator = Validator::make($request->all(), $rules);
        
        // Custom validation for end_time > start_time
        $validator->after(function ($validator) use ($request) {
            foreach ($request->start_time as $key => $startTime) {
                if (isTimeOk($startTime,$request->end_time[$key])) {
                    $validator->errors()->add('end_time.' . $key, 'The end time must be after the start time.');
                }
            }
        });
        // Check if validation fails
        if ($validator->fails()) {
            $notify[] = ['error',$validator->errors()->first()];
            return back()->withNotify($notify);
        }

        try{
            DB::beginTransaction();
            
            if ($request->hasFile('image')) {
                $image = fileUploader($request->image, getFilePath('courseImage'));
            }

            $course = Course::create([
                'category_id'   => $request->category_id,
                'title'         => $request->title,
                'description'   => $request->description,
                'image'         => $image??NULL,
            ]);
    
            // Process and save each slot
            foreach ($request->day as $key => $day) {
                CourseSlot::create([
                    'course_id'  => $course->id,
                    'day'        => $day,
                    'start_time' => $request->start_time[$key],
                    'end_time'   => $request->end_time[$key],
                    'trainer_id' => $request->trainer_id[$key],
                ]);
            }
    
            // Process and save each accordion
            if ($request->has('accordion_title') && $request->has('accordion_description')) {
                foreach ($request->accordion_title as $key => $title) {
                    // Skip empty accordion titles and descriptions
                    if (!empty($title) || !empty($request->accordion_description[$key])) {
                        CourseAccordion::create([
                            'course_id'             => $course->id,
                            'title'                 => $title,
                            'description'           => $request->accordion_description[$key],
                        ]);
                    }
                }
            }

            DB::commit();
    
            $notify[] = ['success','Course Added Successfully'];
            return to_route('admin.courses.index')->withNotify($notify);
        
        }catch(\Exception $e){
            
            DB::rollBack();
            $notify[] = ['success',$e->getMessage()];
            return to_route('admin.courses.index')->withNotify($notify);
        }

    }

    public function show()
    {
        return 'test';
    }
}
