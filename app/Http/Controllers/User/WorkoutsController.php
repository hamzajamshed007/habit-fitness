<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\FeaturedWorkout;

class WorkoutsController extends Controller
{
    public function index()
    {
        $pageTitle = "Workouts";
        $workouts = FeaturedWorkout::all();
        return view('workouts', compact('pageTitle', 'workouts'));
    }

    public function show($id)
    {
        $pageTitle = "Workout Detail";
        $workoutDetail = FeaturedWorkout::findOrFail($id);
        return view('workoutsDetail', compact('pageTitle', 'workoutDetail'));
    }
}
