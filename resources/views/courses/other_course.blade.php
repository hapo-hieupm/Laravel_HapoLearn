<table class="table tb-other-course">
    <thead>
        <tr>
            <th>Other Courses</th>
        </tr>
    </thead>
    <tbody>
        @foreach $courseDetail->other_courses as $other_course
            <tr>
                <td>
                    <a class="txt-body" href="#">{{ $other_courses->index }}. {{ $other_course->name }}</a>
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