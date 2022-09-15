<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Mail\VerifyMail;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
	public function store(UserStoreRequest $request): View
	{
		$validated = $request->validated();
		User::create([
			'username' => $validated['username'],
			'email'    => $validated['email'],
			'password' => bcrypt($validated['password']),
		]);
		Mail::to($validated['email'])->send(new VerifyMail());
		return view('verify-feedback');
	}
}
