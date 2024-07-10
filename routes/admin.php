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
        Route::post('logout', 'logout')->name('logout');
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

    // AB Work Starts Here
    Route::controller('UserController')->name('users.')->prefix('users')->group( function () {
        Route::get('/', 'index')->name('index');
        Route::get('status/{user}', 'show')->name('show');
        Route::post('status', 'userStatus')->name('status');
    });
    // AB Work Ends Here

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

    // AB Work Starts Here
    Route::controller('FeaturedWorkoutsController')->name('featuredWorkouts.')->prefix('featuredWorkouts')->group( function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/{featuredWorkout}', 'show')->name('detail');
        Route::post('/store', 'store')->name('store');
    });
    // AB Work Ends Here

});
