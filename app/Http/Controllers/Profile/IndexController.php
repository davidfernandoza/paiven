<?php namespace App\Http\Controllers\Profile;

use App\Models\User;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class IndexController extends BaseController
{

	private $type = '';
	private $message = '';

	public function profile()
	{
		return view('admin.profile.index')->with('title', 'Editar Perfil');
	}

	public function password(Request $request)
	{

		if (Hash::check(session('password_request'), Auth::user()->email_password)){

			$request->session()->put(['alert' => '¡Cambia el password por seguridad!']);
		}

		return view('admin.profile.password')->with('title', 'Editar Password');
	}
}
