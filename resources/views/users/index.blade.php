@extends('layout')

@section('title', 'User Index')

@section('content')

<h1>Users</h1>

@foreach ($users as $user)
	{{-- <p>id: {{$user->id}}</p> --}}
	<a href="/users/{{$user->id}}">
		<p>Name: {{$user->name}}</p>
	</a>
	{{-- <p>Lastname: {{$user->lastname}}</p> --}}
	{{-- <p>Email: {{$user->email}}</p> --}}
@endforeach

@endsection()