<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyEmailController extends Controller
{
	public function verifyEmail(EmailVerificationRequest $request): RedirectResponse
	{
		$request->fulfill();
		return redirect(route('login.view'));
	}
}
