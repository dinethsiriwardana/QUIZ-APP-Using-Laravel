@extends('layouts.app')

@section('content')
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->course_id }}</td>
                        <td>{{ $course->course_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
