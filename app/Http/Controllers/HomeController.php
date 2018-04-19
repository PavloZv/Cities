<?php

namespace App\Http\Controllers;

use App\Areas;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function home()
	{
		$data = [
			'selectedCity' => null,
			'citiesName' => Areas::getCitiesName(),
			'cities' => Areas::getSortedCities(),
		];

		return view('layouts.initTable', $data);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
	 */
	public function filter(Request $request)
	{
		if ($request->input('location') === null) {
			return response()->redirectToRoute('home');
		}

		$data = [
			'selectedCity' => $request->input('location'),
			'citiesName' => Areas::getCitiesName(),
			'cities' => Areas::getCitiesByDistance($request->input('location')),
		];

		return view('layouts.distanceTable', $data);
	}
}
