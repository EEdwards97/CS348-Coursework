@extends('layouts.app')

@section('title', 'Users')

@section('content')

  <p>User info</p>

  <ul>

          <li>{{ $user->name }}</li>

          <li>{{ $user->post_content }}</li>

          <li>{{ $user->user_id }}</li>

          <li>{{ $timestamp }}</li>

  </ul>

@endsection
