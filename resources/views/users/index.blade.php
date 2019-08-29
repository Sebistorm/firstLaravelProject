@extends('layout')

@section('title', 'User Index')

@section('content')

<h1>Users</h1>

<a href="{{ url('users') }}/create" class="btn btn-primary">Create User</a>

<div class="ProfilesContainer d-flex justify-content-start flex-wrap">
{{--   @foreach ($users as $user)

  @endforeach --}}

</div>
  
@endsection()