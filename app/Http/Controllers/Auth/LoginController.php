<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

	use AuthenticatesUsers;

	protected $redirectTo = '/control/trm';
	protected $type = '';
	protected $message = '';
	protected $password = '';

	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}


	public function index()
	{
		return view('auth.login')->with('title', 'login');

	}

	// Valida si el usuario activo.
	protected function credentials(Request $request)
	{
		$request['status'] = 1;
		return $request->only($this->username(), 'password', 'status');
	}

	// Auth personalizado para cambio de password por defecto.
	protected function sendLoginResponse(Request $request)
	{
		$request->session()->regenerate();

		$this->clearLoginAttempts($request);

		// Validacion de password por defecto con el del Requests.
		if (Hash::check($request->get('password'), Auth::user()->email_password)){
			$this->redirectTo = '/control/perfil/password';
			$request->session()->put(['password_request' => $request->get('password')]);
		}


		return $this->authenticated($request, $this->guard()->user())
		?: redirect()	->intended($this->redirectPath());
	}

}
