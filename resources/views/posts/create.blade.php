@extends('layouts.app')

@section('content')

<title>Create a New Post</title>

        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <p>Post Title:
                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            </p>
            <p>Post Content:
                <textarea class="form-control" rows="10" name="content">{{ old('content') }}</textarea>
            </p>
            <p>Post Image:
                <br>
                <input type="file" name="image">
            </p>
            <input type="submit" value="Submit" class="btn btn-primary">
            <a href="{{ route('posts.index') }}">Cancel</a>
        </form>

    </div>
 </div>

 @endsection
