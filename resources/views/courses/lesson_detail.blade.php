@extends('layouts.layout')
@section('content')
<div class="bg-course-detail">
    <div class="course-detail">
        <div class="path">
            <div class="container d-flex px-0 py-2">
                <a class="txt-path mx-2" href="/">Home</a>
                >
                <a class="txt-path mx-2" href="/courses">All courses</a>
                >
                <a class="txt-path mx-2" href="/courses/{{ $courseDetail->id }}">Course detail</a>
                >
                <a class="txt-path ml-2" href="{{ route('lesson', [ $courseDetail->id, $lesson->id ]) }}">Lesson detail</a>
            </div>
        </div>
        <div class="container d-flex mt-3 px-0">
            <div class="col-9 d-flex flex-column">
                <div class="col-12 bg-ava d-flex justify-content-center align-items-center">
                    <img class="ava" src="{{ ($courseDetail->ava == null) ? asset('storage/ava_courses/html_css.png') : asset('/storage/ava_courses/' . $courseDetail->ava) }}">
                </div>
                <div class="col-12">
                    <div class="list-title px-0">
                        <ul class="nav py-3">
                            <li data-li="description" class="nav-item ml-5 active">Descriptions</li>
                            <li data-li="teacher" class="nav-item ml-5">Teachers</li>
                            <li data-li="program" class="nav-item ml-5">Program</li>
                            <li data-li="review" class="nav-item ml-5">Reviews</li>
                        </ul>
                    </div>
                    <div class="more-information px-0">
                        <div class="description item px-0">
                            
                        </div>
                        <div class="teacher item px-0">
                            @include('courses.teacher')
                        </div>
                        <div class="program item px-0">
                            
                        </div>
                        <div class="review item px-0">
                            @include('courses.review')
                        </div>
                    </div>               
                </div>
            </div>
            <div class="col-3 d-flex flex-column px-0">
                <table class="table parameter">
                    <tbody>
                        <tr>
                            <td>
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Course
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ $courseDetail->name }}</td>
                        </tr>
                        <tr>
                            <td class="txt">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                Leaners
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ $courseDetail->num_of_user }}</td>
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
                        <tr class="col-12">
                            <td class="text-center py-5" colspan="3">
                                <a class="button-primary" href="#">Kết thúc khoá học</a>
                            </td>
                        </tr>  
                    </tbody>
                </table>
                @include('courses.other_course')
            </div> 
        </div>
    </div>
</div>
@endsection