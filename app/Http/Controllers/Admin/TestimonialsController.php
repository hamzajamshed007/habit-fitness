<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        $pageTitle  = 'Testimonials';
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('pageTitle', 'testimonials'));
    }

    public function create()
    {
        $pageTitle = 'Add Testimonial';
        return view('admin.testimonials.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'         => ['required', 'max:50'],
            'designation'         => ['required', 'max:50'],
            'description'          => ['required', 'max:500'],
            'user_image'         => ['required', 'image', 'mimes:jpg,jpeg,png'],
            'testimonial_image'         => ['required', 'image', 'mimes:jpg,jpeg,png'],
        ]);

        if ($request->hasFile('user_image')) {
            $user_image = fileUploader($request->user_image, getFilePath('testimonialImage'));
        }

        if ($request->hasFile('testimonial_image')) {
            $testimonial_image = fileUploader($request->testimonial_image, getFilePath('testimonialImage'));
        }

        Testimonial::create([
            'name'         => $request->name,
            'designation'         => $request->designation,
            'description'   => $request->description,
            'user_image'         => $user_image??NULL,
            'testimonial_image'         => $testimonial_image??NULL,
        ]);

        $notify[] = ['success','Testimonial Added Successfully'];
        return to_route('admin.testimonials.index')->withNotify($notify);
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Testimonial';
        $testimonial =  Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('pageTitle', 'testimonial'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name'         => ['required', 'max:50'],
            'designation'         => ['required', 'max:50'],
            'description'          => ['required', 'max:500'],
            'user_image'         => ['image', 'mimes:jpg,jpeg,png'],
            'testimonial_image'         => ['image', 'mimes:jpg,jpeg,png'],
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $oldUserImage = $testimonial->user_image;
        $oldTestimonialImage = $testimonial->testimonial_image;

        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->description = $request->description;

        if ($request->hasFile('user_image')) {
            try {
                $testimonial->user_image = fileUploader($request->user_image, getFilePath('testimonialImage'), null, $oldUserImage);
            } catch (\Exception$e) {
                $notify[] = ['error', 'Could not upload the Image.'];
                return back()->withNotify($notify);
            }
        }

        if ($request->hasFile('testimonial_image')) {
            try {
                $testimonial->testimonial_image = fileUploader($request->testimonial_image, getFilePath('testimonialImage'), null, $oldTestimonialImage);
            } catch (\Exception$e) {
                $notify[] = ['error', 'Could not upload the Image.'];
                return back()->withNotify($notify);
            }
        }

        $testimonial->save();

        $notify[] = ['success','Testimonial updated successfully'];
        return to_route('admin.testimonials.index')->withNotify($notify);
    }

    public function delete(Request $request)
    {
        $testimonial =  Testimonial::find($request->id);
        if (!$testimonial) {
            return response()->json(['error' => false, 'message' => 'Testimonial record not found.'], 404);
        }
        $testimonial->delete();
    }

}
