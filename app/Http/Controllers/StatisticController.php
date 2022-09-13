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
		$countries = DB::table('statistics')->orderBy('location', $sort)->get();
		return view('by-country', compact('countries', 'sort'));
	}

	public function sortByNewCases()
	{
		$sort = request('sort', 'asc');
		$countries = DB::table('statistics')->orderBy('new_cases', $sort)->get();
		return view('by-country', compact('countries', 'sort'));
	}

	public function sortByRecovered()
	{
		$sort = request('sort', 'asc');
		$countries = DB::table('statistics')->orderBy('recovered', $sort)->get();
		return view('by-country', compact('countries', 'sort'));
	}

	public function sortByDeaths()
	{
		$sort = request('sort', 'asc');
		$countries = DB::table('statistics')->orderBy('deaths', $sort)->get();
		return view('by-country', compact('countries', 'sort'));
	}
}
