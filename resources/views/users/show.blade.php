@extends('layout')

@section('title', 'Show User')

@section('content')

<h1>Users</h1>


<div class="card mb-3" style="max-width: 400px;">
  <div class="row no-gutters">
    <div class="col-md-4  bg-dark">
      <div id="myProfilePicture" class="card-img"> </div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Name: <strong>{{$user->name}}</strong> <small>{{$user->lastname}}</small></h5>
        <p class="card-text">Email: <em>{{$user->email}}</p></em>
        <p class="card-text"><small class="text-muted">Last updated {{$user->id}} mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div>
	<p>
		<a href="/users/{{$user->id}}/edit" class="btn btn-primary btn-lg">Edit</a>
	</p>
</div>

@endsection()