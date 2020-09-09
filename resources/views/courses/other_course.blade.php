<table class="table tb-other-course">
    <thead>
        <tr>
            <th>Other Courses</th>
        </tr>
    </thead>
    <tbody>
<<<<<<< HEAD
        @php 
            $index = 0
        @endphp
        @foreach($courseDetail->other_course as $other_course)
            <tr>
                <td>
                    <a class="txt-body" href="{{ Route('course', $other_course->id) }}">{{ $index += 1 }}. {{ $other_course->name }}</a>
=======
        @foreach $courseDetail->other_courses as $other_course
            <tr>
                <td>
                    <a class="txt-body" href="#">{{ $other_courses->index }}. {{ $other_course->name }}</a>
>>>>>>> 1f4c49456c9b72c03dcdcfcfa6035a40fadad6f5
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                <a class="button" href="#">View all ours courses</a>
            </td>
        </tr>    
    </tbody>
</table>