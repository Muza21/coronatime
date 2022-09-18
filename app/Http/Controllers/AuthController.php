<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
	public function login(LoginRequest $request): RedirectResponse
	{
		$validation = $request->validated();
		$fieldType = filter_var($validation['username'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		$remember = false;
		if (isset(request()->remember))
		{
			$remember = true;
		}
		if (auth()->attempt([$fieldType => $validation['username'], 'password' => $validation['password']], $remember))
		{
			return redirect(route('dashboard.view'));
		}
		else
		{
			throw ValidationException::withMessages([
				'username' => 'Your credentials is not found.',
			]);
		}
	}

	public function logout(Request $request): RedirectResponse
	{
		auth()->logout();

		$request->session()->invalidate();

		$request->session()->regenerateToken();

		return redirect(route('login.view'));
	}
}
