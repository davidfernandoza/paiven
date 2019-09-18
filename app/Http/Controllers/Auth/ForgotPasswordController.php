<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{

    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest');
    }

		public function index()
		{
			return view('auth.passwords.email')->with('title', 'Recuperar');
		}

		protected function credentials(Request $request)
    {
			$request['status'] = 1;
			return $request->only('email', 'status');
    }

		protected function sendResetLinkResponse(Request $request, $response)
		{
				return redirect('/control')->with('success', trans($response));
		}

}
