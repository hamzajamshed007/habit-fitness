<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::namespace('Auth')->group( function(){
    Route::controller('ForgotPasswordController')->group( function(){
        Route::get('password/reset', 'showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'sendResetLinkEmail')->name('password.email');
    });

    Route::controller('ResetPasswordController')->group( function(){
        Route::get('password/reset/{token}', 'showResetForm')->name('password.reset');
        Route::post('password/reset','reset')->name('password.update');
    });
});

Route::controller('HomeController')->group( function(){
    Route::get('/', 'index')->name('home');
});

