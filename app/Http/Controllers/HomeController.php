<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Course;
use App\Model\Lesson;
use App\Model\User;
use Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $courseCount = Course::all()->count();
        $lessonCount = Lesson::all()->count();
        $userCount = User::where('role', User::ROLES['student'])
                ->whereHas('courses')
                ->count();
        $courses = Course::orderBy('id', 'ASC')->limit(3)->get();
        $otherCourses = Course::orderBy('id', 'DESC')->limit(3)->get();
        return view('index', compact('courses', 'otherCourses', 'courseCount', 'lessonCount', 'userCount'));
    }

    public function createUserCourse(Request $request)
    {
        $user = User::find($request->user_id);
        $user->courses()->attach($request->course_id);
        
        return response()->json('success', 201);
    }
}
