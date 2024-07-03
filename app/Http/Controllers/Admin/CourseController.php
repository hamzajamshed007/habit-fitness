<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $pageTitle  = 'Courses';
        $courses    = Course::all();
        return view('admin.course.index', compact('pageTitle','courses'));
    }

    public function create()
    {
        $pageTitle = 'Add Course';
        return view('admin.course.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'         => ['required', 'image', 'mimes:jpg,jpeg,png'],
            'name'          => ['required', 'max:50'],
            'title'         => ['required', 'max:50'],
            'experience'    => ['required', 'numeric'],
        ]);

        if ($request->hasFile('image')) {
            $image = fileUploader($request->image, getFilePath('trainerProfile'));
        }

        Course::create([
            'name'          => $request->name,
            'title'         => $request->title,
            'image'         => $image??NULL,
            'experience'    => $request->experience,
        ]);

        $notify[] = ['success','Trainer Added Successfully'];
        return to_route('admin.trainers.index')->withNotify($notify);
    }

    public function show()
    {
        return 'test';
    }
}
