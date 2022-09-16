<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
	public function store(UserStoreRequest $request): RedirectResponse
	{
		$validated = $request->validated();
		$user = User::create([
			'username' => $validated['username'],
			'email'    => $validated['email'],
			'password' => bcrypt($validated['password']),
		]);
		event(new Registered($user));
		auth()->login($user);
		return redirect(route('verification.notice'));
	}
}
