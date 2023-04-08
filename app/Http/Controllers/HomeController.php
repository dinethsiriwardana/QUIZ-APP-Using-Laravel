<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // import the Course model
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::all(); // retrieve all courses from the database
        $counts =DB::table('quiz')
        ->select('course_id', DB::raw('count(*) as count'))
        ->groupBy('course_id')
        ->pluck('count', 'course_id')
        ->toArray();

        // dd($counts);
   
        // dd($courses);
        return view('home', ['courses' => $courses,'quizCounts' => $counts]); // pass the courses data to the home view
    
    }
}
