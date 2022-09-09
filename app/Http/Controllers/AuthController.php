<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function login(LoginRequest $request): RedirectResponse
	{
		$validation = $request->validated();
		if (auth()->attempt($validation))
		{
			return redirect(route('dashboard'));
		}
		else
		{
			throw ValidationException::withMessages([
				'email'=> 'Your email is not found.',
			]);
		}
	}
}