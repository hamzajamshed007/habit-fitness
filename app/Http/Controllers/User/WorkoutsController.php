<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\FeaturedWorkout;
use App\Models\Testimonial;

class WorkoutsController extends Controller
{
    public function index()
    {
        $pageTitle = "Workouts";
        $workouts = FeaturedWorkout::all();
        $testimonials = Testimonial::all();
        return view('workouts', compact('pageTitle', 'workouts', 'testimonials'));
    }

    public function show($id)
    {
        $pageTitle = "Workout Detail";
        $workoutDetail = FeaturedWorkout::findOrFail($id);
        $testimonials = Testimonial::all();
        return view('workoutsDetail', compact('pageTitle', 'workoutDetail', 'testimonials'));
    }
}
