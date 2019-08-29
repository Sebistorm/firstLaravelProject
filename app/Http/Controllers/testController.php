<?php
// new file name could be GetAllUsersController

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Resources\Users\UsersResource;

class testController extends Controller
{
	public function index() {

        $users = User::all();
        return new UsersResource($users);
	}
}
