<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourseController;



use App\Models\Course; // import the Course model

Route::get('/', function () {
    $courses = Course::all(); // retrieve all courses from the database
    return view('home', ['courses' => $courses]); // pass the courses data to the home view
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/add_course', [CourseController::class, 'addCourse'])->name('add_course');

// Route::get('/courses/{id}', 'CourseController@show');
Route::get('/courses/{id}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.show');


// Route::get('/courses/{id}', function ($id) {
//     return view('course', ['id' => $id]);
// });

