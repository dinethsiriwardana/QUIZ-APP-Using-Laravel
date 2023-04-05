<?php

namespace App\Http\Controllers;
use App\Models\AllQuiz;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddQuizPageController extends Controller
{
    public function show($id)
    {
        $course = DB::table('courses')->where('course_id', $id)->first();
        $totalquiz = DB::table('quiz')->where('course_id', 1)->count();
        return view('course/add-quiz', ['course' => $course, 'totalquiz' => $totalquiz ]);

    }

    public function saveQuiz(Request $request,$id)
    {
        // dd($id);
        $quiz = new AllQuiz;
        $quiz->course_id = $id;
        $quiz->quiz_by = Auth::id();;
        $quiz->quiz_name = $request->input('nameforthequiz');
        $quiz->time = $request->input('timeforthequiz');
        $quiz->save();
        $quizid = $quiz->id;

        return redirect()->back()->with('quizid', $quizid);
    }
    
    public function addtoQuiz(Request $request,$id,$qid)
    {
        dd($request);
        return redirect()->back()->with('quizid', 1);
       
    }
}

