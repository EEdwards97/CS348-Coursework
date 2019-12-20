@extends('layouts.app')

@section('title', 'Users')

@section('content')

  <p>All Posts</p>

  <ul>

      @foreach ($users as $user)
          <li>{{ $user->name }}</li>
      @endforeach

  </ul>

@endsection
