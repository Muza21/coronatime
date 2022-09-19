<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Mail\ResetPassword;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
	public function sendResetLink(ForgotPasswordRequest $request): RedirectResponse
	{
		$credential = $request->validated();
		$data = [
			'email'=> $credential['email'],
			'token'=> Str::random(60),
		];
		Mail::to($credential)->send(new ResetPassword($data));
		return redirect(route('reset.notice'));
	}

	public function reset(Request $requset, $token): View
	{
		return view('reset-password', ['token' => $token, 'email'=>$requset->email]);
	}

	public function update(UpdatePasswordRequest $request)
	{
		$credentials = $request->validated();
		User::where('email', $credentials['email'])->update([
			'password' => bcrypt($credentials['password']),
		]);
		return view('reseted');
	}
}
