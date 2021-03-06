<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/admin', function () {
    return view('layouts.admin');
})->name('admin');

Auth::routes();

Route::get('/courses', 'CourseController@index')->name('courses');

Route::get('/courses/{id}', 'CourseController@show')->name('course');

Route::get('/courses/{courseId}/lesson/{lessonId}', 'CourseController@showLesson')->name('lesson');
