<?php namespace App\Http\Controllers\Users;

use Illuminate\Support\Facades\DB;
use App\Models\Country;
use Illuminate\Routing\Controller as BaseController;


class IndexController extends BaseController
{
	public function list()
	{
		$data = DB::table('users')
		->join('countries', 'users.country_id', '=', 'countries.id')
		->select(
			'users.name',
			'users.id',
			'users.avatar',
			'users.status',
			'users.phone',
			'users.rol',
			'users.email',
			'users.visible',
			'users.country_id',
			'countries.name as country',
			'countries.flag',
			'countries.codePrefix'
		)
		->orderBy('users.name')
		->get();
		$country = Country::all()->sortBy('name')->where('status', true);
		return view('admin.users.index')
		->with('title', 'Usuarios')
		->with('data', $data)
		->with('country', $country);
	}

	public function new()
	{
		$data = Country::all()->sortBy('name')->where('status', true);
		return view('admin.users.new')->with('title', 'Crear Usuarios')->with('countries', $data);
	}
}
