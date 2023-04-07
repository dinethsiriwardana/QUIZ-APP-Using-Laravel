@extends('layouts.app')

@section('content')
    <div class="container d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center"
        style="margin-top: 50px;margin-bottom: 0px;margin-right: 0px;margin-left: 0px;max-width: 100%;width: 100%;">

        @if(isset($totalMarks))
        <div class="row d-xl-flex justify-content-xl-center align-items-xl-center" 
        style="width: 170px;padding: 9px;border-radius: 338px;border: 3px solid var(--bs-red);border-bottom-style: solid;border-bottom-color: #c30137;height: 170px;">
            <div class="col">
                <h1 style="color: #01c38d;margin-bottom: 0px;text-align: center;font-size: 20px;">Total Marks</h1>
                <h1 style="color: #01c38d;margin-bottom: 0px;text-align: center;">{{$totalMarks}}/{{$quizQuestions->count()}}</h1>
            </div>
        </div>
        @endif
        <div class="container d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center"
            style="margin-top: 50px;margin-bottom: 0px;margin-right: 0px;margin-left: 0px;max-width: 100%;width: 80%;">
            <div class="row row-cols-1"
                style="width: 95%;padding: 30px;border-radius: 10px;border: 3px solid var(--bs-red);border-bottom-style: solid;border-bottom-color: #c30137;">
                <form action="{{ route('quiz.submit', ['id' => $course_id, 'qid' => $quiz_id]) }}" method="POST">
                    @csrf

                    @foreach ($quizQuestions as $key => $quizQuestion)
                        <div class="quizblock {{ $key == 0 ? '' : 'd-none' }}" id="question_{{ $key }}">

                            <div class="col-auto d-xl-flex align-items-xl-center" style="height: 60px;margin-bottom: 40px;">
                                <h1 style="color: #01c38d;margin-bottom: 0px;">{{ $quizQuestion->question }}</h1>
                            </div>
                            <div class="col" style="font-size:25px">
                                <div class="form-check" style="padding-bottom: 20px;">
                                    <input class="form-check-input" type="radio" required
                                        name="{{ $quizQuestion->quiz_no }}" value="1">
                                    <label class="form-check-label" for="formCheck-1"
                                        style="color: var(--bs-white);">{{ $quizQuestion->answer_1 }}</label>
                                </div>
                                <div class="form-check" style="padding-bottom: 20px;">

                                    <input class="form-check-input" type="radio" required
                                        name="{{ $quizQuestion->quiz_no }}"value="2" checked >
                                    <label class="form-check-label" for="formCheck-4"
                                        style="color: var(--bs-white);">{{ $quizQuestion->answer_2 }}</label>
                                </div>
                                <div class="form-check" style="padding-bottom: 20px;">

                                    <input class="form-check-input" type="radio" required
                                        name="{{ $quizQuestion->quiz_no }}"value="3">
                                    <label class="form-check-label" for="formCheck-3"
                                        style="color: var(--bs-white);">{{ $quizQuestion->answer_3 }}</label>
                                </div>
                                <div class="form-check" style="padding-bottom: 20px;">

                                    <input class="form-check-input" type="radio" required
                                        name="{{ $quizQuestion->quiz_no }}"value="4">
                                    <label class="form-check-label" for="formCheck-2"
                                        style="color: var(--bs-white);">{{ $quizQuestion->answer_4 }}</label>
                                </div>
                            </div>
                            <div class="row  d-xl-flex align-items-xl-center">
                                <div class="col-6 d-xl-flex justify-content-xl-start">
                                    @if ($key > 0)
                                    
                                            <button type="button" class="btn btn-primary d-block icon-button w-100"
                                            style="width: 250px;max-width: 250px;background: #01c38d;border-style: none;"
                                            onclick="showQuestion({{ $key - 1 }})">
                                                <span>
                                                    Previous
                                                </span>
                                                <i class="fa fa-backward"></i>
                                            </button>
                                    @endif
                                </div>
                                <div class="col-6 d-xl-flex justify-content-xl-end">
                                    @if ($key < count($quizQuestions) - 1)
                                        <button type="button" class="btn btn-primary d-block icon-button w-100"
                                            style="width: 250px;max-width: 250px;background: #01c38d;border-style: none;"
                                            onclick="showQuestion({{ $key + 1 }})">
                                            <span>
                                                Next
                                            </span>
                                            <i class="fa fa-forward"></i>
                                        </button>

                                    @else
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary d-block icon-button w-100"
                                            style="width: 250px;max-width: 250px;background: #01c38d;border-style: none;"
                                            data-bs-target="#target">
                                            <i class="fa  fa-paper-plane">
                                            </i>
                                            <span>
                                                Submit
                                            </span>
                                        </button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </form>
            </div>
        </div>




    </div>
@endsection
