<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AddQuizPageController;



Route::get('/', [LandingPageController::class, 'index'])->name('LandingPage');

Auth::routes();

Route::get('/courses', [HomeController::class, 'index'])->name('courses');


Route::middleware(['auth'])->group(function () {
    Route::post('/add_course', [CourseController::class, 'addCourse'])->name('add_course');
    
    Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course');
    
    Route::post('/courses/{id}/addquiz/add/{qid}', [AddQuizPageController::class, 'addtoQuiz'])->name('add.quiz');
    Route::post('/courses/{id}/addquiz/quizname', [AddQuizPageController::class, 'saveQuiz'])->name('save.quiz');
    
    
    Route::get('/courses/{id}/addquiz', [AddQuizPageController::class, 'show'])->name('course.show');
    // Your protected routes here
});



