@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container d-lg-flex justify-content-lg-center" style="width: 100%;max-width: 100%;margin-top: 70px;">
            <button class="btn btn-primary d-block icon-button w-100" type="button"
                style="width: 250px;max-width: 250px;background: #01c38d;border-style: none;" class="btn btn-primary"
                data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i>
                <span>Add New Course</span>
            </button>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Course Name - 
                        <input type="text"
                           class="modeltextinput"
                           id="add_course_name"
                        />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="add_course_btn" onclick="addCourse()">Save changes</button>
                        

                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 50px;width: 85%;max-width: 85%;">
            <div class="row row-cols-3">

                @foreach ($courses as $course)
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
                @endforeach

            </div>
        </div>


        
    </div>

@endsection
