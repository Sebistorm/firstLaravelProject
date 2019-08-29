<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests\userValidationRules;

use App\Http\Resources\Users\UsersResource;

class UserController extends Controller
{
    public function index() {
        
        return view ('users.index');

        // $users = User::all();
        // return new UsersResource($users);
    }

    public function show (User $user) {


        return view ('users.show', compact('user'));


    }

    public function create () {

        return view ('users.create');

    }

    public function store (userValidationRules $request) {
        // checks the validations rules in requests->usedrValidationRules.php
        $validated = $request->validated();
        // creates the user
        User::create( $validated );

        return redirect('/users');

    }

    public function edit (User $user) {

        return view ('users.edit', compact('user'));


    }

    public function update (User $user, userValidationRules $request) { 
        // checks the validations rules in requests->usedrValidationRules.php
        $validated = $request->validated();
        // updates the user
        $user->update( $validated );
        return redirect('/users');

    }

    public function destroy (User $user) {

        $user->delete();
        return redirect('/users');
    }
}
