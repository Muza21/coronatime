<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Contracts\View\View;

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
			$countries = Country::latest()->where('name', 'like', '%' . request('search') . '%')->get();
			$sort = request('sort', 'asc');
			return view('by-country', compact('countries', 'sort'), $this->sumAll());
		}
		$countries = $this->sortBy($columnName, request('sort', 'asc'));
		return view('by-country', $countries, $this->sumAll());
	}

	public function sortBy(string $columnName, $sort): array
	{
		if ($columnName == 'name')
		{
			$countries = Country::all()->sortBy($columnName, SORT_LOCALE_STRING, $sort === 'asc');
		}
		else
		{
			$countries = Country::all()->sortBy($columnName, SORT_REGULAR, $sort === 'asc');
		}
		return compact('countries', 'sort');
	}

	public function sumAll(): array
	{
		return [
			'new_cases'        => number_format(Country::sum('new_cases')),
			'recovered'        => number_format(Country::sum('recovered')),
			'deaths'           => number_format(Country::sum('deaths')),
		];
	}
}
