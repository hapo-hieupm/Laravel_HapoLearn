<section class="course d-flex justify-content-center">
    <div class="card-deck container d-flex flex-md-row flex-column justify-content-md-center align-items-md-center align-items-start p-md-0 p-5">
    @foreach($courses as $course)
        <div class="card col-md-4 p-0 my-3">
            <div class="card-img-top d-flex img-bg left">
                <img alt="html-css" class="m-auto img-html-css" 
                src="{{($course->ava == null) ? asset('storage/ava_courses/php.png') : asset('/storage/ava_courses/' . $course->ava) }}">
            </div>
            <div class="card-body d-flex flex-column px-md-2">
                <p class="card-title text-big">{{ $course->name }}</p>
                <p class="card-text text-small">{{ $course->description }}</p>
                <a class="d-flex justify-content-center mx-xl-5 mx-4 button" 
                href="{{ Route('course', $course->id) }}" 
                {{ Auth::user() ? '' : 'data-toggle=modal data-target=#loginModal' }}>Take This Course</a>
                <input type="hidden"  value="{{ $course->id }}">
            </div>
        </div>
        @endforeach
    </div>
</section>
