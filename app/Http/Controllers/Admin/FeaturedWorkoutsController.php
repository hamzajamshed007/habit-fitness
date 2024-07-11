<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeaturedWorkout;
use Illuminate\Http\Request;

class FeaturedWorkoutsController extends Controller
{
    public function index()
    {
        $pageTitle  = 'Featured Workouts';
        $featuredWorkouts = FeaturedWorkout::all();
        return view('admin.featuredWorkouts.index', compact('pageTitle','featuredWorkouts'));
    }

    public function create()
    {
        $pageTitle = 'Add Featured Workout';
        return view('admin.featuredWorkouts.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'         => ['required', 'max:50'],
            'description'          => ['required', 'max:500'],
            'image'         => ['required', 'image', 'mimes:jpg,jpeg,png'],
        ]);

        if ($request->hasFile('image')) {
            $image = fileUploader($request->image, getFilePath('featuredWorkoutImage'));
        }

        FeaturedWorkout::create([
            'title'         => $request->title,
            'description'   => $request->description,
            'image'         => $image??NULL,
        ]);

        $notify[] = ['success','Featured Workout Added Successfully'];
        return to_route('admin.featuredWorkouts.index')->withNotify($notify);
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Featured Workout';
        $featuredWorkout =  FeaturedWorkout::findOrFail($id);
        return view('admin.featuredWorkouts.edit', compact('pageTitle', 'featuredWorkout'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => ['required', 'max:50'],
            'description' => ['required', 'max:500'],
            'image' => ['image', 'mimes:jpg,jpeg,png'],
        ]);

        $featuredWorkout = FeaturedWorkout::findOrFail($id);
        $oldImage = $featuredWorkout->image;

        $featuredWorkout->title = $request->title;
        $featuredWorkout->description = $request->description;

        if ($request->hasFile('image')) {
            try {
                $featuredWorkout->image = fileUploader($request->image, getFilePath('featuredWorkoutImage'), null, $oldImage);
            } catch (\Exception$e) {
                $notify[] = ['error', 'Could not upload the Image.'];
                return back()->withNotify($notify);
            }
        }

        $featuredWorkout->save();

        $notify[] = ['success','Featured Workout updated successfully'];
        return to_route('admin.featuredWorkouts.index')->withNotify($notify);
    }

    // public function show()
    // {
    //     return 'test';
    // }

    public function delete(Request $request)
    {
        $featuredWorkout =  FeaturedWorkout::find($request->id);
        if (!$featuredWorkout) {
            return response()->json(['success' => false, 'message' => 'Feature workout record not found.'], 404);
        }
        $featuredWorkout->delete();
    }
}
