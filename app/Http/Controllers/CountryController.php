<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
	public function index(): View
	{
		return view('dashboard', $this->sumAll());
	}

	public function sortByColumn($columnName): View
	{
		if (request('search'))
		{
			$statistic = Country::latest()->where('name', 'like', '%' . request('search') . '%');
			$countries = $statistic->get();
			$sort = request('sort', 'asc');
			return view('by-country', compact('countries', 'sort'));
		}
		$countries = $this->sortBy($columnName, request('sort', 'asc'));
		return view('by-country', $countries, $this->sumAll());
	}

	public function sortBy(string $columnName, $sort): array
	{
		$countries = DB::table('countries')->orderBy($columnName, $sort)->get();
		return compact('countries', 'sort');
	}

	public function sumAll(): array
	{
		return [
			'new_cases'        => Country::all()->sum('new_cases'),
			'recovered'        => Country::all()->sum('recovered'),
			'deaths'           => Country::all()->sum('deaths'),
		];
	}
}
