@extends('layouts.layout')
@section('title','Hapo Learn')
@section('content')
    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif
    @include('index.banner')
    @include('index.course')
    @include('index.other_course')
    @include('index.why_hapo')
    @include('index.feedback')
    @include('index.join_banner')
    @include('index.statistic')
    @include('index.mess')
@endsection
