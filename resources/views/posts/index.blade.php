@extends('layouts.app')

@section('title', 'Posts')

@section('content')

  <p>All Posts</p>

  <ul>

      @foreach ($posts as $post)
          // <li><ahref="/posts/{{ $post->post_title }}">{{ $post->post_title }}</a></li>
          <li><a href="{{ route('posts.show', ['id' => $post->post_title]) }}">{{ $post->post_title }}</a></li>

      @endforeach

  </ul>

@endsection
