<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{

    use ResetsPasswords;

		protected $redirectTo = '/control/trm';

		public function __construct()
		{
			$this->middleware('guest');
		}

		public function index(Request $request, $token = null)
		{
				return view('auth.passwords.reset')->with(
						['token' => $token, 'email' => $request->email]
				)->with('title', 'Retomar');
		}

		// Validar si el usuario existe o esta activo.
		protected function credentials(Request $request)
		{
			$request['status'] = 1;
			return $request->only(
					'email', 'status', 'password', 'password_confirmation', 'token'
			);
		}
}
