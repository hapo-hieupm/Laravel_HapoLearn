@extends('layouts.layout')
@section('content')
    @if(isset($courses))
<<<<<<< HEAD
    <div class="bg-list-course">
        <div class="container list-course d-flex flex-column pt-5 px-0">
            <div class="a col-12 d-flex align-items-center px-0">
                <div class="filter">
=======
        <div class="container list_course d-flex flex-column">
            <div class="col-12 d-flex align-items-center">
                <div class="filter" id="filter">
>>>>>>> 1f4c49456c9b72c03dcdcfcfa6035a40fadad6f5
                    <div class="d-flex align-items-center text-filter px-2 py-2">
                        <i class="fa fa-sliders pr-2" aria-hidden="true"></i>
                        Filter
                    </div>
                </div>
                <form action="{{ route('courses') }}" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group d-flex ml-3">
                        <input type="text" class="form-control border-right-0 border" name="keyword" placeholder="Search...">
                        <span class="input-group-append">
                            <button class="btn btn-light border-left-0 border" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        <button class="btn btn-search border-left-0 border ml-3" type="submit">
                            Tìm kiếm
                        </button>
                    </div>
                </form>
            </div>
<<<<<<< HEAD
            <div class="filter-bar">
                <div class="box  mt-3 col-12 px-0 px-3 pt-3">
=======
            <div class="filter-bar mt-3 col-12" id="filter_bar">
                <div class="box px-3 pt-3">
>>>>>>> 1f4c49456c9b72c03dcdcfcfa6035a40fadad6f5
                    <form action="{{ route('courses') }}" method="GET" role="filter">
                        {{ csrf_field() }}
                        <div class="d-flex flex-wrap form-group">
                            <div class="txt-title ml-5 my-2">
                                Lọc theo
                            </div>
                            <div class="mx-3 my-2">
                                <select name="create_time" id="createTime" class="form-control input dynamic" data-dependent="state">
                                    <option value="desc" type="submit">
                                        <div class="txt button active">Mới nhất</div>
                                    </option>
                                    <option value="asc" type="submit">
                                        <div class="txt button">Cũ nhất</div>
                                    </option>
                                </select>
                            </div>
                            <div class="mx-3 my-2">
                                <select name="teacher" id="teacher" class="form-control input dynamic" data-dependent="state">
                                    <option value="" class="txt">Teacher</option>
                                </select>
                            </div>
                            <div class="mx-3 my-2">
                                <select name="learner" id="learner" class="form-control input dynamic" data-dependent="state">
                                    <option value="" class="txt">Số người học</option>
                                </select>
                            </div>
                            <div class="mx-3 my-2">
                                <select name="course-time" id="courseTime" class="form-control input dynamic" data-dependent="state">
                                    <option value="" class="txt">Thời gian học</option>
                                </select>
                            </div>
                            <div class="mx-3 my-2">
                                <select name="lesson" id="lesson" class="form-control input dynamic" data-dependent="state">
                                    <option value="" class="txt">Số bài học</option>
                                    <option value="asc" class="txt">Tăng dần</option>
                                    <option value="decs" class="txt">Giảm dần</option>
                                </select>
                            </div>
                            <div class="mx-3 my-2">
                                <select name="tag" id="tag" class="form-control input dynamic" data-dependent="state">
                                    <option value="" class="txt">Tags</option>
                                </select>
                            </div>
                            <div class="mx-3 my-2">
                                <select name="review" id="review" class="form-control input dynamic" data-dependent="state">
                                    <option value="" class="txt">Review</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-wrap mt-5 px-0">
                @foreach($courses as $course)
                <div class="col-6 my-2">
                    <div class="course my-1 p-3">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <img class="ava" src="{{ ($course->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $course->ava) }}">
                                <div class="d-flex flex-column ml-xl-4">
                                    <div>
                                        <a class="course-title" href="{{ Route('course', $course->id) }}">{{ $course->name }}</a>
                                    </div>
                                    <div class="txt-descript">{{ $course->description }}</div>
                                </div>
                            </div>
                            <div class="ml-auto mr-3 mt-3">
                                <a class="button" href="{{ Route('course', $course->id) }}">More</a>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-around">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="text-title">Learners</div>
                                    <div class="text-number">{{ $course->num_of_user }}</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="text-title">Lessons</div>
                                    <div class="text-number">{{ $course->num_of_lesson }}</div>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="text-title">Time</div>
                                    <div class="text-number">{{ $course->total_time }}(h)</div>
                                </div>
                            </div>
                        </div>
                    </div>         
                </div>
                @endforeach
            </div>
        </div>
        {!! $courses->links() !!}
    @endif
    </div>
@endsection
