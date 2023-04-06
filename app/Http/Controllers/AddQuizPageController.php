<?php

namespace App\Http\Controllers;

use App\Models\AllQuiz;
use App\Models\AddQuizTable;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddQuizPageController extends Controller
{
    public function show($id)
    {
        $course = DB::table('courses')->where('course_id', $id)->first();
        $totalquiz = DB::table('quiz')->where('course_id', 1)->count();
        return view('course/add-quiz', ['course' => $course, 'totalquiz' => $totalquiz]);
    }

    public function saveQuiz(Request $request, $id)
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

    public function addtoQuiz(Request $request, $id, $qid)
    {
        $validatedData = $request->validate([
            'question' => 'required|string|max:255',
            'answer1' => 'required|string|max:255',
            'answer2' => 'required|string|max:255',
            'answer3' => 'required|string|max:255',
            'answer4' => 'required|string|max:255',
            'answerc' => 'required|integer|between:1,4',
        ]);


        $addquiz = new AddQuizTable(['id' => $id]);
        $addquiz->quiz_id = $qid;
        $addquiz->question = $validatedData['question'];
        $addquiz->answer_1 = $validatedData['answer1'];
        $addquiz->answer_2 = $validatedData['answer2'];
        $addquiz->answer_3 = $validatedData['answer3'];
        $addquiz->answer_4 = $validatedData['answer4'];
        $addquiz->quiz_correct = $validatedData['answerc'];
        $addquiz->save();   
        $quizcount = AddQuizTable::where('quiz_id', 1)->count();

        return redirect()->back()->with(['quizcount' => $quizcount, 'quizid' => $qid]);
    }
}
