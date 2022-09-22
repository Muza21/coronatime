<?php

namespace App\Console\Commands;

use App\Models\Country;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class RequestData extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'fetch:data';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Fetches data from api';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$countries = Http::acceptJson()->get('https://devtest.ge/countries')->json();
		foreach ($countries as $country)
		{
			$stats = Http::withHeaders([
				'Accept'       => 'application/json',
				'Content-Type' => 'application/json', ])->post('https://devtest.ge/get-country-statistics', [
					'code' => $country['code'],
				])->json();
			Country::updateOrCreate(
				[
					'id'           => $stats['id'],
				],
				[
					'code'         => $stats['code'],
					'name'         => $country['name'],
					'new_cases'    => $stats['confirmed'],
					'recovered'    => $stats['recovered'],
					'deaths'       => $stats['deaths'],
				],
			);
		}
	}
}
