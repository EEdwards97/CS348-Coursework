@extends('layouts.app')

@section('title', 'Posts')

@section('content')

  <head>All Posts<head>

  <ul>

      @foreach ($posts as $post)
          //<li><a href="/posts/{{ $post->post_title }}">{{ $post->post_title }}</a></li>
          <li><a href="{{ route('posts.show', ['post_title' => $post->post_title]) }}">{{ $post->post_title }}</a></li>

      @endforeach

  </ul>

@endsection
