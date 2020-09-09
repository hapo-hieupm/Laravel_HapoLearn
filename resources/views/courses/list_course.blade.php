@extends('layouts.layout')
@section('content')
    @if(isset($courses))
        <div class="container list_course d-flex flex-column">
            <div class="col-12 d-flex align-items-center">
                <div class="filter" id="filter">
                    <div class="d-flex align-items-center text-filter px-2 py-2">
                        <i class="fa fa-sliders pr-2" aria-hidden="true"></i>
                        Filter
                    </div>
                </div>
                <form action="{{ route('courses') }}" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group d-flex ml-5">
                        <input type="text" class="form-control" name="keyword" placeholder="Search courses"> 
                        <div class="input-group-btn ml-5">
                            <button type="submit">
                                <i class="fa fa-search ml-n5" type="submit"></i>
                            </button>
                            <button type="submit" class="btn-search">
                                Tìm kiếm
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="filter-bar mt-3 col-12" id="filter_bar">
                <div class="box px-3 pt-3">
                    <form action="{{ route('courses') }}" method="GET" role="filter">
                        {{ csrf_field() }}
                        <div class="d-flex flex-wrap form-group">
                            <div class="txt-title ml-5 my-2">
                                Lọc theo
                            </div>
                            <div class="mx-3 my-2">
                                <select name="create_time" id="create_time" class="form-control input dynamic" data-dependent="state">
                                    <option value="desc">
                                        <div class="txt button active">Mới nhất</div>
                                    </option>
                                    <option value="asc">
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
                                <select name="course-time" id="course-time" class="form-control input dynamic" data-dependent="state">
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
            <div class="d-flex flex-wrap mt-5">
                @foreach($courses as $course)
                <div class="col-6 my-2">
                    <div class="course my-1 p-3">
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <img class="ava" src="{{ ($course->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $course->ava) }}">
                                <div class="d-flex flex-column ml-xl-4">
                                    <div>
                                        <a class="course-title" href="#">{{ $course->name }}</a>
                                    </div>
                                    <div class="txt-descript">{{ $course->description }}</div>
                                </div>
                            </div>
                            <div class="ml-auto mr-3">
                                <a class="button" href="{{ Route('course', $course->id) }}">More</a>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-around">
                                <div class="d-flex flex-column">
                                    <div class="text-title">Learners</div>
                                    <div class="text-number">16,882</div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="text-title">Lessons</div>
                                    <div class="text-number">16,882</div>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="text-title">Time</div>
                                    <div class="text-number">100(h)</div>
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
@endsection
