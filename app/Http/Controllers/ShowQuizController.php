<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowQuizController extends Controller
{

    public function show($id, $qid)
    {
        $quizQuestions = DB::table($id . '_course_quiz')->where('quiz_id', $qid)
            ->get();
        // ->paginate(1);
        // dd($quizQuestions);

        return view('course/show-quiz', ['quizQuestions' =>  $quizQuestions, 'course_id' => $id, 'quiz_id' => $qid]);
    }

    public function submitQuiz(Request $request, $id, $qid)
    {
      
        $quizAnswers = $request->all();
        unset($quizAnswers["_token"]); //to remove token

        $totalMarks = 0;

        $quizQuestions = DB::table($id . '_course_quiz')
            ->where('quiz_id', $qid)
            ->select('quiz_no', 'quiz_correct')
            ->get();

        $correctanswer = [];

        foreach ($quizQuestions as $question) {
            $correctanswer[$question->quiz_no] = $question->quiz_correct;
        }

        foreach ($quizAnswers as $question => $answer) {
            // dd($quizAnswers);
            if (isset($correctanswer[$question]) && $quizAnswers[$question] == $correctanswer[$question]) {
                $totalMarks++;
            }
        }
        $quizQuestionsAll = DB::table($id . '_course_quiz')->where('quiz_id', $qid)->get();

        return view('course/show-quiz', ['quizQuestions' =>  $quizQuestionsAll, 'course_id' => $id, 'quiz_id' => $qid, 'totalMarks' => $totalMarks]);
    }
}
