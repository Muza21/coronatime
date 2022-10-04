<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RequestDataTest extends TestCase
{
	use RefreshDatabase;

	public function test_request_data_will_fetch_data_successfuly_on_fetch_data_command()
	{
		$this->artisan('fetch:data')->assertSuccessful();
	}
}
