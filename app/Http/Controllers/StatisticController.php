<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
	public $sortColumnName = 'location';

	public $sortDirection = 'desc';

	public function index(): View
	{
		$sort = request('sort', 'asc');
		// dd($sort);
		$countries = DB::table('statistics')->orderBy('location', $sort)->get();
		return view('by-country', compact('countries', 'sort'));
		// if (!request()->routeIs('country.view'))
		// {
		// 	$countries = DB::table('statistics')
		// 	->orderBy('location', 'asc')
		// 	->get();
		// }
		// else
		// {
		// 	$countries = DB::table('statistics')
		// 	->orderBy('location', 'desc')
		// 	->get();
		// }

		// return view('by-country', [
		// 	'countries' => $countries,
		// ]);
	}

	public function sortByNewCases()
	{
		$countries = DB::table('statistics')
		->orderBy('new_cases', $this->sortDirection)
		->get();
		return view('by-country', [
			'countries' => $countries,
		]);
	}

	public function sortByRecovered()
	{
		$countries = DB::table('statistics')
		->orderBy('recovered', $this->sortDirection)
		->get();
		return view('by-country', [
			'countries' => $countries,
		]);
	}

	public function sortByDeaths()
	{
		$countries = DB::table('statistics')
		->orderBy('deaths', $this->sortDirection)
		->get();
		return view('by-country', [
			'countries' => $countries,
		]);
	}
}
