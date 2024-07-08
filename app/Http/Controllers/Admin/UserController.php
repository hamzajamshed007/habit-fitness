<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $pageTitle  = 'Users';
        $users = User::all();
        return view('admin.users.index', compact('pageTitle', 'users'));
    }

    public function show($id)
    {
        $pageTitle = 'User Status';
        $user = User::where('id',$id)->first();
        if($user){
            return view('admin.users.detail', compact('pageTitle', 'user'));
        }else{
            abort(404);
        }
    }

    public function userStatus(Request $request){
        $user = User::where('id',$request->user_id)->first();
        $user->is_blocked = $request->is_blocked;
        $user->save();
        return response()->json(['message' => 'success']);
    }

}
