@extends('layout')
@section('contain')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a courses</h1>
        <div>
            <form method="post" action="{{ route('courses.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group">    
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"/>
                        @if($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" class="form-control" name="description" value="{{ old('description') }}"/>
                        @if($errors->has('description'))
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        @endif
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                        @if($errors->has('price'))
                            <small class="text-danger">{{ $errors->first('price') }}</small>
                        @endif
                </div>
                <div class="form-group">
                    <th>Avatar</th>
                    <td>
                        <input type="file" class="form-control-file border" id="ava" name="ava" value="{{ old('ava') }}">
                            @if($errors->has('ava'))
                                <br>
                                <small class="text-danger">{{ $errors->first('ava') }}</small>
                            @endif
                    </td>
                </div>    
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div><br/>
                @endif
                <button type="submit" class="btn btn-primary">Add courses</button>
            </form>
        </div>
    </div>
</div>
@endsection
