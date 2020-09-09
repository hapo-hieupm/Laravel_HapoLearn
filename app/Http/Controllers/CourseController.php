<?php

namespace app\Http\Controllers;

use App\Model\Course;
use App\Http\Validations\CourseValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Session;
use App\Filter\CourseFilter;

class CourseController extends Controller
{
    public function index(CourseFilter $filters)
    {
        $courses = Course::filter($filters)->paginate(config('pagination.course'));
        if (count($courses) > 0) {
            return view('courses.list_course', compact('courses'));
        } else {
            return view('courses.list_course', compact('courses'))->withMessage('notice', __('notice.failed.search'));
        }
    }

    public function show($id)
    {
        $courseDetail = Course::findOrFail($id);
        $lessons = $courseDetail->lessons()
            ->paginate(config('pagination.course'));
        return view('courses.course_detail', compact('courseDetail', 'lessons', 'id'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(CourseValidation $request)
    {
        $allRequest  = $request->all();
        if ($request->hasFile('ava')) {
            $destinationPath = 'public/ava_courses/';
            $image = $request->file('ava');
            $imageName = $image->getClientOriginalName();
            $path = $request->file('ava')->storeAs($destinationPath, $imageName);
            $allRequest['ava'] = $path;
        }
        Course::create($allRequest);
        return redirect()->route('courses')->with('notice', __('notice.success.store'));
    }

    
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(CourseValidation $request, $id)
    {
        $course = $request->all();
        if ($request->hasFile('ava')) {
            $file = $request->ava;
            $ava = uniqid() . "_" . $file->getClientOriginalName();
            $oldAva = Course::findOrFail($id)->ava;
            Storage::delete('public/ava_courses/' . $oldAva);
            $request->file('ava')->storeAs('public/ava_courses/', $ava);
            $course['ava'] = $ava;
        }
        Course::findOrFail($id)->update($course);
        return redirect()->route('courses')->with('notice', __('notice.success.update'));
    }

    
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses')->with('notice', __('notice.success.delete'));
    }
}
