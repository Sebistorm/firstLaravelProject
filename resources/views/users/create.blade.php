@extends('layout')

@section('title', 'Create User')

@section('content')

<h1>Create Users</h1>

<form method="POST" action="{{ url('users') }}">
	@csrf

	<div>
		<label>Name</label><br>
		<input type="text" name="name" placeholder="name">
	</div>

	<div>
		<label>Lastname</label><br>
		<input type="text" name="lastname" placeholder="Lastname">
	</div>

	<div>
		<label>Email</label><br>
		<input type="text" name="email" placeholder="Email">
	</div>
	<br>
	<div>
		<button type='submit'>Submit</button>
	</div>
</form>




@endsection()