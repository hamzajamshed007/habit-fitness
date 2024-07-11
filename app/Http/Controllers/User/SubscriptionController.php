<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SubscriptionController extends Controller
{
    public function index()
    {
        $pageTitle      = 'Subscription';
        $session_course = Session::get('user_course');

        if(empty($session_course)){
            $notify[] = ['success', 'Please select the course first!'];
            return back()->withNotify($notify);
        }

        $courses        = Course::where([['category_id',$session_course['category_id']],['id','!=',$session_course['id']]])->get();
        return view('user.subscription.index', compact('pageTitle','courses'));
    }
}
