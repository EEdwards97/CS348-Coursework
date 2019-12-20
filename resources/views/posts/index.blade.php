@extends('layouts.app')

@section('title', 'Posts')

@section('content')

  <head>All Posts<head>

  <ul>

      @foreach ($posts as $post)

          <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->post_title }}</a></li>

      @endforeach

  </ul>

@endsection
