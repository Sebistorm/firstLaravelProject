@extends('layout')

@section('title', 'Create User')

@section('content')

<h1>Create Users</h1>

<form method="POST" action="{{ url('users') }}">
	@csrf

	<div class="form-group">
		<label>Name</label><br>
		<input type="text" name="name" placeholder="name" class="form-control {{$errors->has('name') ? 'border border-danger' : ''}}" value="{{old('name')}}">
		<small class="form-text text-muted">Your name must be 2-20 characters long.</small>
	</div>

	<div class="form-group">
		<label>Lastname</label><br>
		<input type="text" name="lastname" placeholder="Lastname" class="form-control {{$errors->has('lastname') ? 'border border-danger' : ''}}" value="{{old('lastname')}}">
		<small class="form-text text-muted">Your lastname must be 2-20 characters long.</small>
	</div>

	<div class="form-group">
		<label>Email</label><br>
		<input type="text" name="email" placeholder="Email" class="form-control {{$errors->has('email') ? 'border border-danger' : ''}}" value="{{old('email')}}">
		<small class="form-text text-muted">Your name must be 5-30 characters long.</small>
	</div>
	<div>
		<button class="btn btn-primary" type='submit'>Submit</button>
	</div>

	@if ($errors->any())
	<div class="alert alert-danger mt-3">
		<ul>
			@foreach ($errors->all() as $error)
				<li><strong>Holy guacamole!</strong> {{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif


</form>





@endsection()