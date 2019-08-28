<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
   public function index() {

   	$users = User::all();

   	return view ('users.index', compact('users'));

   }

   public function show (User $user) {


 	return view ('users.show', compact('user'));
	 	

    }

    public function create () {

	 	return view ('users.create');

    }

    public function store () {

    request()->validate([
      'name' => ['required', 'min:2', 'max:20'],
      'lastname' => ['required', 'min:2', 'max:20'],
      'email' => ['required', 'min:5', 'max:30', 'email'] 
    ]);  

	 	User::create( request(['name', 'lastname', 'email']) );

	 	return redirect('/users');

    }

    public function edit (User $user) {

	 	return view ('users.edit', compact('user'));


    }

    public function update (User $user) {

    request()->validate([
      'name' => ['required', 'min:2', 'max:20'],
      'lastname' => ['required', 'min:2', 'max:20'],
      'email' => ['required', 'min:5', 'max:30', 'email']
    ]);  

	 	$user->update( request(['name', 'lastname', 'email']) );
	 	return redirect('/users');

    }

    public function destroy (User $user) {

	 	$user->delete();
		return redirect('/users');
    }
}
