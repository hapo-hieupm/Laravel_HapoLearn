@extends('layouts.layout')
@section('content')
    <div class="course_detail">
        <div class="d-flex txt-path">
            <a class="txt-path" href="/">Home</a>
            >
            <a class="txt-path" href="/courses">All courses</a>
            >
            <a class="txt-path" href="/courses/{{ $courseDetail->id }}">Course detail</a>
        </div>
        <div class="d-flex">
            <div class="col-9">
                <img src="{{ ($courseDetail->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $courseDetail->ava) }}">
            </div>
            <div class="col-3 d-flex flex-column description">
                <div class="title">Descriptions course</div>
                <hr>
                <div class="txt">{{ $courseDetail->description }}</div>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-9">
                <table class="table parameter">
                    <thead>
                        <tr>
                            <th class="txt" id="lesson">
                                Lessons
                            </th>
                            <th class="txt-data" id="teacher">Teacher</th>
                            <th class="txt-data" id="review">Reviews</th>
                        </tr>
                    </thead>
                    <tbody id="lesson_body">
                        <tr>
                            <td>
                                <form action="{{ route('courses') }}" method="GET" role="search">
                                    {{ csrf_field() }}
                                    <div class="input-group d-flex ml-5">
                                        <input type="text" class="form-control" name="keyword" placeholder="Search..."> 
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
                            </td>
                            <td>
                                <a class="button" href="#">Tham gia khoá học</a>
                            </td>
                        </tr>
                        @foreach $lessons as $lesson
                            <tr>
                                <td>
                                    <a class="" href="{{ Route('lesson', $lesson->id) }}">{{ $lesson->name }}</a>
                                </td>
                                <td>
                                    <a class="button" href="{{ Route('lesson', $lesson->id) }}">Learn</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tbody id="teacher_body">
                        @include('courses.teacher');
                    </tbody>
                    <tbody id="review_body">
                        @include('courses.review');
                    </tbody>
                </table>
            </div>
            <div class="col-3 d-flex flex-column">
                <table class="table parameter">
                    <tbody>
                        <tr>
                            <td class="txt">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                Leaners
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ $courseDetail->num_of_user }}</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Lessons
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ $courseDetail->num_of_lesson }}/td>
                        </tr>
                        <tr>
                            <td class="txt">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                Times
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ $courseDetail->total_time }}</td>
                        </tr>
                        <tr>
                            <td class="txt">
                                <i class="fa fa-key" aria-hidden="true"></i>
                                Tags
                            </td>
                            <td class="txt-data">:</td>
                            <td class="tag">{{ $courseDetail->tag_name }}</td>
                        </tr>
                        <tr>
                            <td class="txt">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                Price
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ $courseDetail->price_course }}</td>
                        </tr>
                    </tbody>
                </table>
                @include('courses.other_course');
            </div>
        </div>
    </div>
@endsection