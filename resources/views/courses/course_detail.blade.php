@extends('layouts.layout')
@section('content')
    <div class="course_detail">
        <div class="d-flex txt-path">
            <a class="txt-path" href="#">Home</a>
            >
            <a class="txt-path" href="#">All courses</a>
            >
            <a class="txt-path" href="#">Course detail</a>
        </div>
        <div class="d-flex">
            <div class="col-9">
                <img src="{{ ($course->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $course->ava) }}">
            </div>
            <div class="col-3 d-flex flex-column">
                <div>Descriptions course</div>
                <hr>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-9">
                
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
                            <td class="txt-data">{{ count($course->students() }}</td>
                        </tr>
                        <tr>
                            <td>
                                <i class="fa fa-list-alt" aria-hidden="true"></i>
                                Lessons
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ count($course->lessons() }}/td>
                        </tr>
                        <tr>
                            <td class="txt">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                Times
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ $course->time() }}</td>
                        </tr>
                        <tr>
                            <td class="txt">
                                <i class="fa fa-key" aria-hidden="true"></i>
                                Tags
                            </td>
                            <td class="txt-data">:</td>
                            <td class="tag">{{ $course->tag() }}</td>
                        </tr>
                        <tr>
                            <td class="txt">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                Price
                            </td>
                            <td class="txt-data">:</td>
                            <td class="txt-data">{{ ($course->price == 0) ? asset('Free') : asset($course->price) }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table tb-other-course">
                    <thead>
                        <tr>
                            <th>Other Courses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach $other_courses as $other_course
                            <tr>
                                <td>
                                    <a class="txt-body" href="#">{{ $other_courses->index }}. {{ $other_course->name }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="button" href="#">View all ours courses</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection