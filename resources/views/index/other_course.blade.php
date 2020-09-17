<section class="other-course d-flex flex-column align-items-center">
    <div class="text-title mt-md-5 mt-2  pt-xl-5 mb-xl-3">
        Other courses
    </div>
    <div class="container">
        <div class="card-deck d-flex flex-md-row flex-column justify-content-md-center align-items-center mt-5 p-md-0 px-4 mx-md-0 mx-2">
        @foreach($otherCourses as $otherCourse)
            <div class="card col-md-4 p-0 my-3 h-100 pb-1">
                <div class="card-img-top d-flex img-bg left"><img alt="css" class="m-auto img-css"
                src="{{ ($otherCourse->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $otherCourse->ava) }}"></div>
                <div class="card-body d-flex flex-column justify-content-between">
                    <p class="card-title text-big">{{ $otherCourse->name }}</p>
                    <p class="card-text text-small">{{ $otherCourse->description }}</p>
                    <!-- <form action="{{ route('lesson_users.store', $lesson->id) }}" method="POST" class="text-center">
                        @csrf
                    <a class="d-flex justify-content-center mx-xl-5 mx-4 button"
                    href="{{ Route('course', $otherCourse->id) }}" 
                    {{ Auth::user() ? '' : 'data-toggle=modal data-target=#loginModal' }}>Take This Course</a>
                    <input type="hidden" class="route" value="{{ Route('user.courses') }}">
                    <input type="hidden" class="user-id"  value="{{ Auth::user()->id }}">
                    <input type="hidden" class="course-id" value="{{ $otherCourse->id }}"> -->
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="mt-md-5 mb-md-2 mt-4 mb-1 py-xl-3">
        <a class="text-link" href="{{ Route('courses') }}">View All Our Courses <i class="fa fa-long-arrow-right"></i></a>
    </div>
</section>
