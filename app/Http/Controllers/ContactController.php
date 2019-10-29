<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ContactController extends Controller
{
	public function index()
	{
		$data = DB::table('users')
		->join('countries', 'users.country_id', '=', 'countries.id')
		->select(
			'countries.flag',
			'countries.codePrefix',
			'users.phone'
			)
			->where('countries.status', true)
			->where('users.visible', true)
			->get();

		$data = User::all()->sortBy('name');
			return view('admin.users.index')->with('title', 'Usuarios')->with('data', $data);
	}
}
