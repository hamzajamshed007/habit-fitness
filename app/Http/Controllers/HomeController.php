<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pageTitle = 'Habit Fitness';
        return view('home', compact('pageTitle'));
    }

    public function groupClasses()
    {
        $pageTitle  = 'Group Classes';
        $category   = CourseCategory::where('title','Group Classes')->first();
        $courses    = Course::where('category_id',$category->id)->get();
        return view('user.category.group-classes' , compact('pageTitle','category','courses'));
    }
}
