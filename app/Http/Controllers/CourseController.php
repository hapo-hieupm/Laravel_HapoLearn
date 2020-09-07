<?php

namespace app\Http\Controllers;

use App\Model\Course;
use App\Http\Validations\CourseValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Session;

class CourseController extends Controller
{
    public function index(Request $request)
    {   
        if ($request->has('keyword')) {
            $keyword = $request->keyword;
            $courses = Course::where('name', 'LIKE', '%'.$keyword.'%')
                        ->orwhere('description', 'LIKE', '%'.$keyword.'%')
                        ->paginate(config('pagination.course'));
        } else { 
            $courses = Course::paginate(config('pagination.course'));
        }
        if (count($courses) > 0) {
            return view('courses.list_course', compact('courses'));
        } else {
            return view('courses.list_course', compact('courses'))->withMessage('notice', __('notice.failed.search'));
        }
    }

    public function show ()
    {
        //
    }
    
    public function create()
    {
        return view('courses.create');
    }

    public function store(CourseValidation $request)
    {   
        $allRequest  = $request->all();
        if($request->hasFile('ava')) {
            $path = Storage::putFile('ava', $request->file('ava'));
            $destinationPath = 'public/ava_courses/';
            $image = $request->file('ava');
            $imageName = $image->getClientOriginalName();
            $path = $request->file('ava')->storeAs($destinationPath, $imageName);
            $allRequest['ava'] = $imageName;
        }
        Course::create($allRequest);
        return redirect()->route('courses')->with('notice', __('notice.success.store'));
    }

    
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('ourse'));   
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
