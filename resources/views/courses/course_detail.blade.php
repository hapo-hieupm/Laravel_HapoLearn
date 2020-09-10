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
                <a class="txt-path ml-2" href="/courses/{{ $courseDetail->id }}">Course detail</a>
            </div>
        </div>
        <div class="container d-flex mt-3 px-0">
            <div class="col-9">
                <img class="ava" src="{{ ($courseDetail->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $courseDetail->ava) }}">
            </div>
            <div class="col-3 description px-3 pt-3">
                <table>
                    <thead>
                        <tr>
                            <th>Descriptions course</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $courseDetail->description }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container d-flex mt-3 px-0">
            <div class="col-9">
                <table class="table parameter">
                    <thead>
                        <tr>
                            <th><a href="#" id="lesson" class="">Lessons</a></th>
                            <th><a href="#" id="teacher" class="">Teacher</a></th>
                            <th><a href="#" id="review" class="">Reviews</a></th>
                        </tr>
                    </thead>
                
                <table class="table parameter mt-n3">
                    <tbody id="lessonBody">
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
                        @php 
                            $index = 0
                        @endphp
                        @foreach($lessons as $lesson)
                            <tr>
                                <td>      
                                    <a class="pl-3" href="#">{{ $index +=1 }}. {{ $lesson->name }}</a>
                                </td>
                                <td>
                                    <a class="pr-3" href="#">Learn</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tbody id="teacherBody">
                        @include('courses.teacher')
                    </tbody>
                    <tbody id="reviewBody">
                        @include('courses.review')
                    </tbody>
                </table>
               
            </div>
            <div class="col-3 d-flex flex-column px-0">
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
                @include('courses.other_course')
            </div> 
        </div>   
    </div> 
</div>
@endsection

