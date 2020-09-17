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
        <div class="container d-flex mt-3">
            <div class="col-9 bg-ava d-flex justify-content-center align-items-center">
                <img class="ava" src="{{ ($courseDetail->ava == null) ? asset('storage/ava_courses/html_css.png') : asset('/storage/ava_courses/' . $courseDetail->ava) }}">
            </div>
            <div class="col-3 d-flex flex-column description px-0 ml-2">
                <div class="title py-3 mx-3">Descriptions course</div>
                <div class="txt pt-3 mx-3">{{ $courseDetail->description }}</div>
            </div>
        </div>
        <div class="container d-flex mt-3 px-0">
            <div class="col-9">
                <div class="list-title px-0">
                    <ul class="nav py-3">
                        <li data-li="lesson" class="nav-item ml-5 active">Lessons</li>
                        <li data-li="teacher" class="nav-item ml-5">Teachers</li>
                        <li data-li="review" class="nav-item ml-5">Reviews</li>
                    </ul>
                </div>
                <div class="more-information px-0">
                    <div class="lesson item px-0">
                        <div class="search-lesson d-flex align-items-center py-3"> 
                            <div class="col-8">  
                                <form action="{{ route('course', $courseDetail->id) }}" method="GET" role="search">
                                {{ csrf_field() }}
                                    <div class="input-group d-flex">                                    
                                        <input type="text" class="form-control border-right-0 border" name="keyword" placeholder="Search..." value="{{ request('keyword') }}">
                                        <span class="input-group-append">
                                            <button class="btn border-left-0 border" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                        <button class="btn btn-search border-left-0 border ml-3" type="submit">
                                            Tìm kiếm
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-4 ml-5 pl-3"> 
                                <a class="button-primary" href="#">Tham gia khoá học</a>
                            </div>  
                        </div>
                        <div class="tb-lesson"> 
                            @php 
                                $index = 0
                            @endphp
                            @foreach($lessons as $lesson)
                                <div class="line d-flex py-2">
                                    <div class="col-10">      
                                        <a class="txt" href="{{ route('lesson', [ $courseDetail->id, $lesson->id ]) }}">{{ $index +=1 }}. {{ $lesson->name }}</a>
                                    </div>
                                    <div class="col-2">
                                        <a class="learn-btn" href="{{ route('lesson', [ $courseDetail->id, $lesson->id ]) }}">Learn</a>
                                    </div>
                                </div>
                            @endforeach
                            {!! $lessons->links() !!}
                        </div>
                    </div>
                    <div class="teacher item px-0">
                        @include('courses.teacher')
                    </div>
                    <div class="review item px-0">
                        @include('courses.review')
                    </div>
                </div>               
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

