<?php

namespace app\Http\Controllers;

use App\Model\Course;
use App\Http\Validations\CourseValidation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Session;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::paginate(config('pagination.course'));
        return view('courses.list_course', compact('courses'));
    }

    public function search(CourseValidation $request) 
    {
        $keyword = request('keyword');
        $courses = Course::where('name', 'LIKE', '%'.$keyword.'%')
                        ->orwhere('description', 'LIKE', '%'.$keyword.'%')
                        ->paginate(config('pagination.course'));
        return view('courses.list_course', compact('courses'));
        // if (count($courses) > 0) {
        //     return view('courses.list_course', compact('courses'))->withDetails($courses)->withQuery ( $keyword );
        // }
        // else 
        //     return view('courses.list_course', compact('courses'))->withMessage('notice', __('notice.failed.search'));   
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
        $Course = Course::find($id);
        return view('courses.edit', compact('ourse'));   
    }

    public function update(CourseValidation $request, $id)
    {
        $Course = $request->all();
        if ($request->hasFile('ava')) {
            $file = $request->ava;
            $ava = uniqid() . "_" . $file->getClientOriginalName();
            $oldAva = Course::find($id)->ava;
            Storage::delete('public/ava_courses/' . $oldAva);
            $request->file('ava')->storeAs('public/ava_courses/', $ava);
            $Course['ava'] = $ava;
        }
        Course::findOrFail($id)->update($Course);
        return redirect()->route('courses')->with('notice', __('notice.success.update'));
    }

    
    public function destroy($id)
    {
        $Course = Course::find($id);
        $Course->delete();
        return redirect()->route('courses')->with('notice', __('notice.success.delete'));
    }
}
