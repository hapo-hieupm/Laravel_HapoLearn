@extends('layouts.layout')
@section('content')
    @if(isset($courses))
        <div class="container list_course">
            <div class="d-flex flex-wrap">
                @foreach($courses as $course)
                <div class="col-6 d-flex flex-column">
                    <div class="d-flex">
                        <img src="{{ ($course->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $course->ava) }} }}">
                        <div class="d-flex flex-column">
                            <div class="course-title">{{ $course->name }}</div>
                            <div class="txt-descript">{{ $course->description }}</div>
                        </div>
                    </div>
                    <div class="button">
                        More 
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="d-flex flex-column">
                            <div class="">Learners</div>
                            <div class="txt-number">{{ $course->numOfStudents() }}</div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="">Lessons</div>
                            <div class="txt-number">{{ $course->numOfLessons() }}</div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="">Quizzes</div>
                            <div class="txt-number">16,882</div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
        {!! $courses->render() !!}
    @endif
@endsection