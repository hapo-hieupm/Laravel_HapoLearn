@extends('layouts.layout')
@section('content')
    @if(isset($courses))
        <div class="container list_course">
            <div class="d-flex flex-wrap">
                <form action="/courses/search" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                            placeholder="Search courses"> <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="d-flex flex-wrap">
                @foreach($courses as $course)
                <div class="col-6 d-flex flex-column">
                    <div class="d-flex">
                        <img class="ava" src="{{ ($course->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $course->ava) }}">
                        <div class="d-flex flex-column ml-xl-5">
                            <div>
                                <a class="course-title" href="#">{{ $course->name }}</a>
                            </div>
                            <div class="txt-descript">{{ $course->description }}</div>
                        </div>
                    </div>
                    <div>
                        <a class="button" href="#">More</a>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="d-flex flex-column">
                            <div class="txt-title">Learners</div>
                            <div class="txt-number">16,882</div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="">Lessons</div>
                            <div class="txt-number">16,882</div>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="">Quizzes</div>
                            <div class="txt-number">16,882</div>
                        </div>
                    </div>        
                </div>
                @endforeach
            </div>
        </div>
        {!! $courses->links() !!}
    @endif
@endsection
