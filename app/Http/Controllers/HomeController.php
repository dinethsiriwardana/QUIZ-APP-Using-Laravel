<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; // import the Course model


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
        // dd($courses);
        return view('home', ['courses' => $courses]); // pass the courses data to the home view
    
    }
}
