<?php namespace App\Http\Controllers\Countries;

use App\Models\Country;
use Illuminate\Routing\Controller as BaseController;
// use lluminate\Database\Eloquent\Collection;

class IndexController extends BaseController
{
	public function index()
	{
		$data = Country::all()->sortBy('name');
			return view('admin.countries.index')->with('title', 'Paises')->with('data', $data);
		}
	}
