@extends('layouts.layout')
@section('content')
    @if(isset($courses))
        <div class="container list_course d-flex flex-column">
            <div class="d-flex align-items-center">
                <div class="filter">
                    <div class="d-flex align-items-center text-filter px-2 py-2">
                        <i class="fa fa-sliders pr-2" aria-hidden="true"></i>
                        Filter
                    </div>
                </div>
                <form action="{{ route('courses') }}" method="GET" role="search">
                    {{ csrf_field() }}
                    <div class="input-group d-flex">
                        <input type="text" class="form-control" name="keyword" placeholder="Search courses"> 
                        <i class="fa fa-search ml-n5 position-relative" type="submit"></i>
                        <div class="input-group-btn ml-5">
                            <button type="submit" class="btn-search">
                                Tìm kiếm
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="filter-bar">
                <div class="box">
                    <form action="{{ route('courses') }}" method="GET" role="search">
                        {{ csrf_field() }}
                        <div class="d-flex flex-wrap form-group">
                            <div class="text-name">
                                Lọc theo
                            </div>
                            <!-- <select name="create_time" id="create_time" class="form-control input dynamic" data-dependent="state">
                                <option value="">Teacher</option>
                                <div class="btn-new active">
                                <a class="" href="/?time=Newest">Mới nhất</a>
                            </div>
                            <div class="btn-new none">
                                <a class="" href="/?time=Oldest">Cũ nhất</a>
                            </div>
                            </select> -->
                            <select name="teacher" id="teacher" class="form-control input dynamic" data-dependent="state">
                                <option value="">Teacher</option>
                            </select>
                            <select name="learner" id="learner" class="form-control input dynamic" data-dependent="state">
                                <option value="">Số người học</option>
                            </select>
                            <select name="course-time" id="course-time" class="form-control input dynamic" data-dependent="state">
                                <option value="">Thời gian học</option>
                            </select>
                            <select name="lesson" id="lesson" class="form-control input dynamic" data-dependent="state">
                                <option value="">Số bài học</option>
                                <option value="asc">Tăng dần</option>
                                <option value="decs">Giảm dần</option>
                            </select>
                            <select name="tag" id="tag" class="form-control input dynamic" data-dependent="state">
                                <option value="">Tags</option>
                            </select>
                            <select name="review" id="review" class="form-control input dynamic" data-dependent="state">
                                <option value="">review</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-wrap mt-5">
                @foreach($courses as $course)
                <div class="col-6 my-3">
                    <div class="course my-1">
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
                                <a class="button" href="#">More</a>
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
