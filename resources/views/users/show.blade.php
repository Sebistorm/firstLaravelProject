@extends('layout')

@section('title', 'Show User')

@section('content')

<h1>Users</h1>
<p>id: {{$user->id}}</p>
<p>Name: {{$user->name}}</p>
<p>Lastname: {{$user->lastname}}</p>
<p>Email: {{$user->email}}</p>

<div>
	<p>
		<a href="/users/{{$user->id}}/edit">Edit</a>
	</p>
</div>

@endsection()