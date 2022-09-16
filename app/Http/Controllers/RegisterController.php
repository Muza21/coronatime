<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
	public function store(UserStoreRequest $request): View
	{
		$validated = $request->validated();
		$user = User::create([
			'username' => $validated['username'],
			'email'    => $validated['email'],
			'password' => bcrypt($validated['password']),
		]);
		event(new Registered($user));
		auth()->login($user);
		return view('verify-feedback');
	}
}
