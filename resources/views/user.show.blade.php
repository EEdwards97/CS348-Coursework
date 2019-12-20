@extends('layouts.app')

@section('title', 'Users')

@section('content')

  <p>All Posts</p>

  <ul>

          <li>{{ $user->name }}</li>

          <li>{{ $user->post_content }}</li>

          <li>{{ $post->id }}</li>

          <li>{{ $timestamp }}</li>

  </ul>

@endsection
