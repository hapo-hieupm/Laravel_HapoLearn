<table class="table tb-other-course">
    <thead>
        <tr>
            <th>Other Courses</th>
        </tr>
    </thead>
    <tbody>
        @php 
            $index = 0
        @endphp
        @foreach($courseDetail->other_course as $other_course)
            <tr>
                <td>
                    <a class="txt-body" href="{{ Route('course', $other_course->id) }}">{{ $index += 1 }}. {{ $other_course->name }}</a>
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