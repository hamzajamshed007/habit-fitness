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

    public function show()
    {
        return 'test';
    }
}
