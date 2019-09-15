<?php namespace App\Http\Controllers\Users;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;


class IndexController extends BaseController
{
	public function list()
	{
		$data = User::all()->sortBy('name');
			return view('admin.users.index')->with('title', 'Usuarios')->with('data', $data);
	}

	public function new()
	{
			return view('admin.users.new')->with('title', 'Crear Usuarios');
	}
}
