@extends('layout') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a course</h1>
        <form method="post" action="{{ route('courses.update', $course->id) }}" enctype="multipart/form-data">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ old('full_name', $course->name) }}">
                    @if($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    @endif
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" name="description" value="{{ old('description', $course->description) }}">
                    @if($errors->has('description'))
                        <small class="text-danger">{{ $errors->first('description') }}</small>
                    @endif
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price" value="{{ old('price', $course->price) }}">
                    @if($errors->has('price'))
                        <small class="text-danger">{{ $errors->first('price') }}</small>
                    @endif
            </div>
            <div class="form-group">
                <th>Avatar</th>
                <td>
                    <input type="file" class="form-control-file border" name="ava" value="{{ old('ava', $course->ava) }}">
                        @if($errors->has('ava'))
                            <br>
                            <small class="text-danger">{{ $errors->first('ava') }}</small>
                        @endif
                </td>
            </div>    
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br /> 
        @endif
    </div>
</div>
@endsection
