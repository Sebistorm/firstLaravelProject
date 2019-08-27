@extends('layout')

@section('title', 'Edit User')

@section('content')

<h1>Edit Users</h1>

<form method="POST" action="/users/{{ $user->id }}">

	@method('PATCH')
	@csrf

	<div>
		<label>Name</label><br>
		<input type="text" name="name" placeholder="name" value='{{ $user->name }}'>
	</div>

	<div>
		<label>Lastname</label><br>
		<input type="text" name="lastname" placeholder="Lastname" value='{{ $user->lastname }}'>
	</div>

	<div>
		<label>Email</label><br>
		<input type="text" name="email" placeholder="Email" value='{{ $user->email }}'>
	</div>
	<br>
	<div>
		<button type='submit'>Confirm</button>
	</div>
</form>

<form method="POST" action="/users/{{$user->id}}" style="margin-top: 10px;">
	@method('DELETE')
	@csrf

	<div>
		<button type="submit">Delete User</button>
	</div>
</form>



@endsection()