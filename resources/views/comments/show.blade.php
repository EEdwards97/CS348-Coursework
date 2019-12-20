@extends('layouts.app')

@section('title', 'Comments')

@section('content')

  <p>Comment</p>

  <ul>

          <li>{{ $comment->comment_content }}</li>

          <li>Comment by: {{ $post->id }}</li>

          <li>Date: {{ $timestamp }}</li>

  </ul>

@endsection
