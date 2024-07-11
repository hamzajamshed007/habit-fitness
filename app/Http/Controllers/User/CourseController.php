<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    public function courseDetail($id)
    {
        $pageTitle  = 'Course Detail';
        $course     = Course::with('accordions')->where('id',$id)->firstOrFail();
        $courses    = Course::where([['category_id',$course->category_id],['id','!=',$course->id]])->get();
        Session::put('user_course',$course);
        return view('user.course.detail', compact('pageTitle','course','courses'));
    }
}
