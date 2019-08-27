@extends('layout')

@section('title', 'User Index')

@section('content')

<h1>Users</h1>

<div class="ProfilesContainer d-flex justify-content-start flex-wrap">
@foreach ($users as $user)

<div class="card" style="width: 30%; margin: 1.5%;">
  <div id='profilePicture' class="card-img-top bg-dark"> </div>
  <div class="card-body shadow p-3">
    <h5 class="card-title">Name: {{$user->name}} {{$user->lastname}}</h5>
    <p class="card-text">Email: {{$user->email}}</p>
    <a href="{{ url('users') }}/{{$user->id}}" class="btn btn-primary">Go to profile</a>
    
  </div>
</div>
	{{-- <p>id: {{$user->id}}</p> --}}
{{-- 	<a href="/users/{{$user->id}}">
		<p>Name: {{$user->name}}</p>
	</a> --}}
	{{-- <p>Lastname: {{$user->lastname}}</p> --}}
	{{-- <p>Email: {{$user->email}}</p> --}}
@endforeach

</div>

@endsection()