@extends('layouts.app')

@section('title', 'Comments')

@section('content')

  <p>All Posts</p>

  <ul>

      @foreach ($comments as $comment)
          <li>{{ $comment->comment_title }}</li>
      @endforeach

  </ul>

@endsection
