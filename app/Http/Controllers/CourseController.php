<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;

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
}
