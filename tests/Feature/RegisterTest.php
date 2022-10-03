<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegisterTest extends TestCase
{
	public function test_register_page_is_accessable()
	{
		$response = $this->get(route('register.view'));
		$response->assertSuccessful();
		$response->assertViewIs('register');
	}

	public function test_register_should_give_us_errors_if_input_is_not_provided()
	{
		$response = $this->post(route('registration.store'));
		$response->assertSessionHasErrors(
			[
				'username',
				'email',
				'password',
			]
		);
	}

	// public function test_auth_should_give_us_username_error_if_username_input_is_not_provided()
	// {
	// 	$response = $this->post(route('registration.store'), [
	// 		'email'                 => 'test@test.com',
	// 		'password'              => '123',
	// 		'password_confirmation' => '123',
	// 	]);
	// 	$response->assertSessionHasErrors(
	// 		[
	// 			'username',
	// 		]
	// 	);
	// 	$response->assertSessionDoesntHaveErrors(['password', 'email', 'username']);
	// }

	// public function test_auth_should_give_us_email_error_if_email_input_is_not_provided()
	// {
		// $response = $this->post(route('login.user'), [
		// 	'email'    => 'test@gmail.com',
		// 	'password' => 'my-so-secret-password',
		// ]);
		// $response->assertSessionHasErrors(
		// 	[
		// 		'username',
		// 	]
		// );
		// $response->assertSessionDoesntHaveErrors(['password']);

		// $response = $this->post(route('registration.store'), [
		// 	'username'    => 'random',
		// 	'password'    => bcrypt('123'),
		// ]);
		// $response->assertSessionHasErrors(
		// 	[
		// 		'email',
		// 	]
		// );
		// $response->assertSessionDoesntHaveErrors(['password', 'username']);
	// }

	// public function test_auth_should_give_us_password_error_if_password_input_is_not_provided()
	// {
	// 	$user = User::factory()->create();
	// 	$response = $this->post('login', [
	// 		'username' => $user->username,
	// 	]);
	// 	$response->assertSessionHasErrors(
	// 		[
	// 			'password',
	// 		]
	// 	);
	// 	$response->assertSessionDoesntHaveErrors(['username']);
	// }

	// public function test_auth_should_give_us_username_error_if_username_input_is_not_correct()
	// {
	// 	$response = $this->post(route('registration.store'), [
	// 		'username' => 'as',
	// 	]);
	// 	$response->assertSessionHasErrors(
	// 		[
	// 			'username',
	// 		]
	// 	);
	// }

	// public function test_auth_should_give_us_incorrect_password_error_if_password_input_is_not_correct()
	// {
	// 	$user = User::factory()->create();
	// 	$response = $this->post('login', [
	// 		'username' => $user->username,
	// 		'password' => 'wrong-password',
	// 	]);
	// 	$response->assertSessionHasErrors(
	// 		[
	// 			'password',
	// 		]
	// 	);
	// 	$response->assertSessionDoesntHaveErrors(['username']);
	// }

	// public function test_auth_should_redirect_to_login_page_if_email_is_not_verified()
	// {
	// 	$user = User::factory()->create();
	// 	$user->email_verified_at = null;
	// 	$user->save();
	// 	$response = $this->post('login', [
	// 		'username' => $user->username,
	// 		'password' => '123',
	// 	]);
	// 	$response->assertRedirect(route('login.view'));
	// 	$this->assertGuest();
	// }

	// public function test_auth_should_redirect_to_dashboard_page_after_successful_login()
	// {
	// 	$user = User::factory()->create();
	// 	$response = $this->post('login', [
	// 		'username' => $user->username,
	// 		'password' => '123',
	// 	]);
	// 	$response->assertRedirect('dashboard');
	// }

	// public function test_auth_should_redirect_to_login_page_after_successful_logout()
	// {
	// 	$user = User::factory()->create();
	// 	$this->post('login', [
	// 		'username' => $user->username,
	// 		'password' => '123',
	// 	]);
	// 	$response = $this->post(route('logout.user'));
	// 	$response->assertRedirect(route('login.view'));
	// 	$this->assertGuest();
	// }
}
