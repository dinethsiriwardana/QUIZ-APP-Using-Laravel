@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container d-lg-flex justify-content-lg-center" style="width: 100%;max-width: 100%;margin-top: 70px;">
            <button class="btn btn-primary d-block icon-button w-100" type="button"
                style="width: 250px;max-width: 250px;background: #01c38d;border-style: none;" class="btn btn-primary"
                data-toggle="modal" data-target="#exampleModal"  
                {{-- onclick="addCourse()" --}}
                 >
                <i class="fa fa-plus"></i>
                <span>Add New Course</span>
            </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">

            {{-- ? resources/js/components/AddCourse.vue --}}
            <add-course></add-course>

        </div>

        {{--! Dont Change this this is done --}}
        
        <div class="container" style="margin-top: 50px; width: 85%;max-width: 85%; padding-bottem: 50px;">
            <div class="row row-cols-3" style="padding-bottom: 50px;">

                @foreach ($courses as $course)
                <a href="{{ route('course', $course->course_id) }}" style="text-decoration:none;">
                    <div class="col d-lg-flex justify-content-lg-center"
                        style="padding-right: 0;padding-left: 0;margin: 0px;margin-top: 15px;">
                        <div class="d-lg-flex flex-column justify-content-lg-center align-items-lg-center"
                            style="width: 80%;background: linear-gradient(#c30137, #ed0747), #c30137;height: 130px;border-radius: 10px;border: 1px solid rgb(255,255,255);">
                            <h1 style="text-align: center;color: #ffffff;margin-top: 0px;">{{ $course->course_name }}</h1>
                            <div class="row">
                                <div class="col" style="text-align: center;"><small
                                        style="color: rgb(255,255,255);text-align: center;">Course Id :
                                        {{ $course->course_id }}</small></div>
                            </div>
                            <div class="row" style="text-align: center;">
                                <div class="col" style="text-align: center;"><small style="color: rgb(255,255,255);">No.
                                        of
                                        Quizzes : 1</small></div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>
        </div>


        
    </div>

@endsection
