<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
	public function store(UserStoreRequest $request): RedirectResponse
	{
		$validated = $request->validated();
		User::create([
			'username' => $validated['username'],
			'email'    => $validated['email'],
			'password' => $validated['password'],
		]);
		return redirect(route('login'));
	}
}
