<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Course;
use App\Models\AllQuiz;
use App\Http\Controllers\CustomTableController;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function addCourse(Request $request)
    {

        $courseName = $request->input('course_name');
        $course = new Course;
        $course->course_name = $courseName;
        $course->save();

        $courseId = $course->id;

        $tableName = $courseId.'_course_quiz';
        $customTableController = new CustomTableController();
        $customTableController->createUserTable($tableName);

        return response()->json(['message' => 'Course added successfully.', 'course_id' => $courseId]);

    }

    public function show($id)
    {
        $course = DB::table('courses')->where('course_id', $id)->first();
        $totalquiz = DB::table('quiz')->where('course_id', $id)->count();
        $users = DB::table('users')->pluck('name', 'id')->toArray();

        $quizCounts = DB::table('3_course_quiz')
                ->select('quiz_id', DB::raw('count(*) as count'))
                ->groupBy('quiz_id')
                ->pluck('count', 'quiz_id')
                ->toArray();
        // dd($quizCounts);
       

        $quiz = AllQuiz::all()->where('course_id', $id); // retrieve all courses from the database


        return view('course/course', ['course' => $course], ['totalquiz' => $totalquiz, 'quiz' => $quiz, 'users' => $users, 'quizCounts' => $quizCounts]);
    }
}
