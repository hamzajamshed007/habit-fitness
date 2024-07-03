<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
|
*/

Route::namespace ('Auth')->group(function () {
    Route::controller('LoginController')->group(function () {
        Route::get('/', 'showLoginForm')->name('login');
        Route::post('/', 'login')->name('login');
        Route::get('logout', 'logout')->name('logout');
    });

    // Admin Password Reset
    Route::controller('ForgotPasswordController')->prefix('password')->name('password.')->group(function () {
        Route::get('reset', 'showLinkRequestForm')->name('request');
        Route::post('email', 'sendResetLinkEmail')->name('email');
    });

    Route::controller('ResetPasswordController')->group(function () {
        Route::get('password/reset/{token}', 'showResetForm')->name('password.reset');
        Route::post('password/reset', 'reset')->name('password.update');
    });
});

Route::middleware('admin')->group( function(){

    Route::controller('HomeController')->group( function(){
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });

    Route::resource('categories', 'CourseCategoryController');

    Route::controller('TrainerController')->name('trainers.')->prefix('trainers')->group( function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/{trainer}', 'show')->name('detail');
        Route::post('/store', 'store')->name('store');
    });

    Route::controller('CourseController')->name('courses.')->prefix('courses')->group( function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/{trainer}', 'show')->name('detail');
        Route::post('/store', 'store')->name('store');
    });
});