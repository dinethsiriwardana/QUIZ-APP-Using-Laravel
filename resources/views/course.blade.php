@extends('layouts.app')

@section('content')

<div class="container d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center" style="margin-top: 50px;margin-bottom: 0px;margin-right: 0px;margin-left: 0px;max-width: 100%;width: 100%;">
    <div class="row" style="width: 95%;padding: 9px;border-radius: 10px;border: 3px solid var(--bs-red);border-bottom-style: solid;border-bottom-color: #c30137;">
        <div class="col-5 d-xl-flex align-items-xl-center" style="height: 60px;">
            <h1 style="color: #01c38d;margin-bottom: 0px;">Course - {{ $course->course_name }}</h1>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-5 d-xl-flex align-items-xl-center" style="height: 60px;border-left-style: solid;border-left-color: var(--bs-white);">
                    <h1 class="d-xl-flex align-items-xl-center" style="color: #01c38d;margin-bottom: 0px;">Course No: {{ $course->course_id }}</h1>
                </div>
                <div class="col-7 d-xl-flex align-items-xl-center" style="border-left-style: solid;border-left-color: var(--bs-white);">
                    <h1 class="d-xl-flex align-items-xl-center" style="color: #01c38d;margin-bottom: 0px;">No. Of Quizzes</h1>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
