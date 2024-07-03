<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        $pageTitle = 'Dashboard | Habit Fitness';
        return view('admin.dashboard', compact('pageTitle'));
    }
}
