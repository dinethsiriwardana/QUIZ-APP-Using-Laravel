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
                            Quizzes: {{$totalquiz}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center"
        style="margin-top: 50px;margin-bottom: 0px;margin-right: 0px;margin-left: 0px;max-width: 100%;width: 100%;">
        <div class="row"
            style="width: 95%;padding: 9px;border-radius: 10px;border: 3px none var(--bs-red);border-bottom-style: none;border-bottom-color: #c30137;border-left-style: none;">
            <div class="col-12 d-xl-flex justify-content-xl-center align-items-xl-center" style="height: 60px;">
                <button
                    class="btn btn-primary d-block icon-button w-100" type="button"
                    onclick="location.href = '/courses/{{ $course->course_id }}/addquiz';"
                    style="width: 250px;max-width: 250px;background: #01c38d;border-style: none;"
                    data-bs-target="#target"><i class="fa fa-plus"></i><span>Add New Quiz</span>
                </button>
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top: 50px; width: 85%;max-width: 85%; padding-bottem: 50px;">
        <div class="row row-cols-3" style="padding-bottom: 50px;">


            {{-- ! Dont Edit this --}}
            @foreach ($quiz as $thisquiz)
            <a href="{{ route('quiz', [$course->course_id, $thisquiz->quiz_id]) }}" style="text-decoration:none;">
                <div class="col d-lg-flex justify-content-lg-center"
                    style="padding-right: 0;padding-left: 0;margin: 0px;margin-top: 15px;">
                    <div class="d-lg-flex flex-column justify-content-lg-center align-items-lg-center"
                        style="width: 80%;background: linear-gradient(#c30137, #ed0747), #c30137;height: 130px;border-radius: 10px;border: 1px solid rgb(255,255,255);">
                        <h1 style="text-align: center;color: #ffffff;margin-top: 0px;">{{ $thisquiz->quiz_name }}</h1>
                        <div class="row">
                            <div class="col" style="text-align: center;"><small
                                    style="color: rgb(255,255,255);text-align: center;">Quiz Id :
                                    {{ $thisquiz->quiz_id }}</small></div>
                        </div>
                        <div class="row" style="text-align: center;">
                            <div class="col" style="text-align: center;"><small style="color: rgb(255,255,255);">Quiz By : {{ $users[$thisquiz->quiz_by] }}</small></div>
                        </div>
                        <div class="row" style="text-align: center;">
                            <div class="col" style="text-align: center;"><small style="color: rgb(255,255,255);">No.
                                    of
                                    Quizzes : 
                                    {{$quizCounts[$thisquiz->quiz_id] ?? 0}}
                                </small></div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach

        </div>  
    </div>
@endsection
