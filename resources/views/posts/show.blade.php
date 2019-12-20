@extends('layouts.app')

@section('title', 'Post')

@section('content')

  <p>Post info</p>

  <ul>

          <li>{{ $post->post_title }}</li>

          <li>{{ $post->post_content }}</li>

          <li>Posted by: {{ $post->user_id }}</li>

          <li>Date: {{ $timestamp ?? '' }}</li>

  </ul>

@endsection
