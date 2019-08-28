@extends('layout')

@section('title', 'Edit User')

@section('content')

<h1>Edit Users</h1>

<form method="POST" action="{{ url('users') }}/{{ $user->id }}">

	@method('PATCH')
	@csrf

	<div class="form-group">
		<label>Name</label><br>
		<input class="form-control {{ $errors->has('name') ? 'border border-danger' : ''}}" type="text" name="name" placeholder="name" value='{{ $user->name }}'>
		<small id="nameHelpBlock" class="form-text text-muted">
  			Your name must be 2-20 characters long.
		</small>
	</div>

	<div class="form-group">
		<label>Lastname</label><br>
		<input class="form-control {{ $errors->has('lastname') ? 'border border-danger' : ''}}" type="text" name="lastname" placeholder="Lastname" value='{{ $user->lastname }}'>
			<small id="nameHelpBlock" class="form-text text-muted">
  			Your lastname must be 2-20 characters long.
		</small>
	</div>

	<div class="form-group">
		<label>Email</label><br>
		<input class="form-control {{ $errors->has('email') ? 'border border-danger' : ''}}" type="text" name="email" placeholder="Email" value='{{ $user->email }}'>
		<small id="nameHelpBlock" class="form-text text-muted">
  			Your email must be 5-30 characters long and contain @.
		</small>
	</div>

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li><strong>Holy guacamole!</strong> {{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<div>
		<button class="btn btn-dark btn-lg" type='submit'>Confirm</button>
	</div>
	
</form>

<form method="POST" action="{{ url('users') }}/{{$user->id}}" style="margin-top: 10px;">
	@method('DELETE')
	@csrf

	<div>
		<button class="btn btn-danger btn-lg" type="submit">Delete User</button>
	</div>
</form>



@endsection()