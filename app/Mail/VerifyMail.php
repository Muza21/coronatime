<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class VerifyMail extends Mailable
{
	use Queueable, SerializesModels;

	protected $user;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		$url = url(
			'/email/verify',
			sha1(time()),
			'?expires=',
			'&signature=',
			sha1(time()),
		);
		return $this->markdown('emails.verify')
		->with(['url' => $url]);
		// ->with(['url' => route('verification.verify', $this->notifiable->getKey(), sha1($this->notifiable->getEmailForVerification()))]);
		// VerifyEmail::toMailUsing(function ($notifiable, $url) {
		// 	return (new MailMessage)
		// 	->markdown('emails.verify', ['url' => $url]);
		// });
	}
}
