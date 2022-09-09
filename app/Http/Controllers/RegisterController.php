<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;

class RegisterController extends Controller
{
	public function store(RegisterUserRequest $request)
	{
		User::create($request->validated());
		return redirect(route('login'));
	}
}
