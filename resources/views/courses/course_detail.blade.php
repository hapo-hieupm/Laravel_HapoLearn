@extends('layouts.layout')
@section('content')
    <div class="course_detail container">
        <div class="d-flex txt-path">
            <a class="txt-path" href="/">Home</a>
            >
            <a class="txt-path" href="/courses">All courses</a>
            >
            <a class="txt-path" href="/courses/{{ $courseDetail->id }}">Course detail</a>
        </div>
        <div class="d-flex">
            <div class="col-9">
                <img class="ava" src="{{ ($courseDetail->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $courseDetail->ava) }}">
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
                            <th><a href="#" id="lesson" class="">Lessons</a></th>
                            <th><a href="#" id="teacher" class="">Teacher</a></th>
                            <th><a href="#" id="review" class="">Reviews</a></th>
                        </tr>
                    </thead>
                </table>
                <table class="table parameter mt-n3">
                    <tbody id="lesson_body">
                        <tr>
                            <td>
                                <form action="{{ route('course', $courseDetail->id) }}" method="GET" role="search">
                                    {{ csrf_field() }}
                                    <div class="input-group d-flex col-9">
                                        <input type="text" class="form-control border-right-0 border" name="keyword" placeholder="Search...">
                                        <span class="input-group-append">
                                            <button class="btn border-left-0 border" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                        <button class="btn btn-search border-left-0 border ml-3" type="submit">
                                            Tìm kiếm
                                        </button>
                                </form>
                            </td>
                            <td class="ml-auto">
                                <a class="button-primary pr-3" href="#">Tham gia khoá học</a>
                            </td>
                        </tr>
                        @foreach($lessons as $lesson)
                            <tr>
                                <td>      
                                    <a class="pl-3" href="#">{{ $lesson->name }}</a>
                                </td>
                                <td>
                                    <a class="pr-3" href="#">Learn</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tbody id="teacher_body">
                        @include('courses.teacher')
                    </tbody>
                    <tbody id="review_body">
                        @include('courses.review')
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
                            <td class="txt-data">{{ $courseDetail->num_of_lesson }}</td>
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
                
               <!-- other_courses -->
            </div>
           
        </div>
        
    </div>
    
@endsection
