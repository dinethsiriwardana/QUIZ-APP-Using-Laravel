@extends('layouts.app')

@section('content')
    <div class="container d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center"
        style="margin-top: 50px;margin-bottom: 0px;margin-right: 0px;margin-left: 0px;max-width: 100%;width: 100%;">
        <div class="row"
            style="width: 95%;padding: 9px;border-radius: 10px;border: 3px solid var(--bs-red);border-bottom-style: solid;border-bottom-color: #c30137;">
            <div class="col-5 d-xl-flex align-items-xl-center" style="height: 60px;">
                <h1 style="color: #01c38d;margin-bottom: 0px;">Course - {{ $course->course_name }}</h1>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-5 d-xl-flex align-items-xl-center"
                        style="height: 60px;border-left-style: solid;border-left-color: var(--bs-white);">
                        <h1 class="d-xl-flex align-items-xl-center" style="color: #01c38d;margin-bottom: 0px;">Course No:
                            {{ $course->course_id }}</h1>
                    </div>
                    <div class="col-7 d-xl-flex align-items-xl-center"
                        style="border-left-style: solid;border-left-color: var(--bs-white);">
                        <h1 class="d-xl-flex align-items-xl-center" style="color: #01c38d;margin-bottom: 0px;">No. Of
                            Quizzes: {{ $totalquiz }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @if (session('quizid')) --}}
    <div class="container"
        style="width: 95%;max-width: 95%;padding: 30px;padding-bottom: 50px;margin-top: 50px;padding-top: 15px;">
        <form method="POST" action="/courses/{{ $course->course_id }}/addquiz/add/{{ session('quizid') }}">
            @csrf

            <div class="row">

                <div class="col">

                    <div class="row" style="height: auto;padding-top: 5px;padding-bottom: 15px;">
                        <div class="col-4 d-xl-flex justify-content-xl-start align-items-xl-center">
                            <small style="color: rgb(255,255,255);font-size: 25px;">
                                Question
                            </small>
                        </div>
                        <div class="col d-xl-flex align-items-xl-center">
                            <textarea style="width: 90%;height: 75px;" name="question"></textarea>
                        </div>
                    </div>
                    <div class="row" style="height: auto;padding-top: 5px;padding-bottom: 15px;">
                        <div class="col-4 d-xl-flex justify-content-xl-start align-items-xl-center">
                            <small style="color: rgb(255,255,255);font-size: 25px;">
                                Answer 1
                            </small>
                        </div>
                        <div class="col d-xl-flex align-items-xl-center">
                            <textarea style="width: 90%;height: 75px;" name="answer1"></textarea>
                        </div>
                    </div>
                    <div class="row" style="height: auto;padding-top: 5px;padding-bottom: 15px;">
                        <div class="col-4 d-xl-flex justify-content-xl-start align-items-xl-center">
                            <small style="color: rgb(255,255,255);font-size: 25px;">
                                Answer 2
                            </small>
                        </div>
                        <div class="col d-xl-flex align-items-xl-center">
                            <textarea style="width: 90%;height: 75px;" name="answer2"></textarea>
                        </div>
                    </div>
                    <div class="row" style="height: auto;padding-top: 5px;padding-bottom: 15px;">
                        <div class="col-4 d-xl-flex justify-content-xl-start align-items-xl-center">
                            <small style="color: rgb(255,255,255);font-size: 25px;">
                                Answer 3
                            </small>
                        </div>
                        <div class="col d-xl-flex align-items-xl-center">
                            <textarea style="width: 90%;height: 75px;" name="answer3"></textarea>
                        </div>
                    </div>
                    <div class="row" style="height: auto;padding-top: 5px;padding-bottom: 15px;">
                        <div class="col-4 d-xl-flex justify-content-xl-start align-items-xl-center">
                            <small style="color: rgb(255,255,255);font-size: 25px;">
                                Answer 4
                            </small>
                        </div>
                        <div class="col d-xl-flex align-items-xl-center">
                            <textarea style="width: 90%;height: 75px;" name="answer4"></textarea>
                        </div>
                    </div>
                    <div class="row" style="height: auto;padding-top: 5px;padding-bottom: 15px;">
                        <div class="col-4 d-xl-flex justify-content-xl-start align-items-xl-center">
                            <small style="color: rgb(255,255,255);font-size: 25px;">
                                Correct Answer
                            </small>
                        </div>
                        <div class="col d-xl-flex align-items-xl-center">
                            <input type="number" style="width: 90%;font-size: 20px;" min="1" max="4"
                                step="1" value="1" name="answerc" />
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex flex-column justify-content-between" style="padding: 15px;padding-top: 0px;">
                    <div class="row row-cols-1">
                        <div class="col">
                            <h1 style="color: rgb(255,255,255);">Quiz No :
                                @if (session('quizid'))
                                    {{ session('quizid') }}
                                @else
                                    ~
                                @endif
                            </h1>
                        </div>
                        <div class="col">
                            <h1 style="color: rgb(255,255,255);">No of Quiz :</h1>
                        </div>
                    </div>
                    <button class="btn btn-primary d-block icon-button w-100" type="submit"
                        style="width: 250px;max-width: 250px;background: #01c38d;border-style: none;"
                        data-bs-target="#target"><i class="fa fa-plus"></i><span>Add New Question</span></button>
                </div>
            </div>
        </form>
    </div>
    {{-- @else --}}
    <form method="POST" action="/courses/{{ $course->course_id }}/addquiz/quizname">
        @csrf
        <div class="container d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center"
            style="margin-top: 50px;margin-bottom: 0px;margin-right: 0px;margin-left: 0px;max-width: 100%;width: 100%;">
            <div class="row" style="width: 95%;padding: 9px;">
                <div class="col d-xl-flex justify-content-xl-start align-items-xl-center">
                    <small style="color: rgb(255,255,255);font-size: 25px;">Name For the Quiz: </small>
                </div>
                <div class="col d-xl-flex align-items-xl-center">
                    <input type="text" style="width: 90%;font-size: 20px;" name="nameforthequiz">
                </div>
                <div class="col d-xl-flex justify-content-xl-start align-items-xl-center">
                    <small style="color: rgb(255,255,255);font-size: 25px;">Time For the Quiz: </small>
                </div>
                <div class="col-1 d-xl-flex align-items-xl-center">
                    <input type="number" style="width: 90%;font-size: 20px;" name="timeforthequiz" min="1"
                        step="1">
                </div>
                <div class="col " style="border-left-style: solid;border-left-color: var(--bs-white);">
                    <div class="row" style="height: 60px;">
                        <div class="col d-xl-flex align-items-xl-center ">
                            <button class="btn btn-primary d-block icon-button" type="submit"
                                style="width: 200px; max-width: 250px;background: #01c38d;border-style: none;">
                                <i class="fa fa-plus"></i>
                                <span>Add New Quiz</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    {{-- @endif --}}
@endsection
