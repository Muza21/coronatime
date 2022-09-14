<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
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
		return view('by-country', $countries);
	}

	public function sortBy(string $columnName, $sort): array
	{
		$countries = DB::table('countries')->orderBy($columnName, $sort)->get();
		return compact('countries', 'sort');
	}
}
