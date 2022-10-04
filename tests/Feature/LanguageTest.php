<?php

namespace Tests\Feature;

use Tests\TestCase;

class LanguageTest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_language_will_change_to_english()
	{
		$response = $this->get(route('locale.change', 'en'));
		$response->assertStatus(302);
	}

	public function test_language_will_change_to_georgian()
	{
		$response = $this->get(route('locale.change', 'ka'));
		$response->assertStatus(302);
	}

	public function test_language_will_change_to_defualt_language_which_is_english_if_wrong_locale_is_provided()
	{
		$response = $this->get(route('locale.change', 'es'));
		$response->assertStatus(302);
	}
}
