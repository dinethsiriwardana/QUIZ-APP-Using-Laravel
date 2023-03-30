<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function addCourse(Request $request)
    {
        $courseName = $request->input('course_name');
        $course = new Course;
        $course->course_name = $courseName;
        $course->save();
        return response()->json(['message' => 'Course added successfully.']);
    }

    public function show($id)
    {
        $course = DB::table('courses')->where('course_id', $id)->first();

        return view('course', ['course' => $course]);
        // dd($id);

    }


}
