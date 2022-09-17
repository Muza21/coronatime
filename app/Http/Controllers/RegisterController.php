<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Mail\VerifyMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

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
		if ($user != null)
		{
			$data = [
				'id'           => $user->id,
				'token'        => sha1($user->email),
			];
		}
		// $user->sendEmailVerificationNotification();
		Mail::to($user->email)->send(new VerifyMail($data));
		// auth()->login($user);s
		return redirect(route('verification.notice'));
	}
}
