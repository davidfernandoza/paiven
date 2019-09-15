<?php namespace App\Http\Controllers\Profile;

use App\Models\User;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use Auth;


class UpdateController extends BaseController
{
	public function profile()
	{

	}

	public function password(PasswordRequest $request)
	{
		$user = User::findOrFail(Auth::user()->id);
		$user->password = Hash::make($request->get('password'));

		if ($user->update()) {

			$request->session()->forget(['alert', 'password_request']);
			return 	Redirect('control/trm')
			->with('success', '¡Se edito el registros con exito!');
		}
		else {
			return 	Redirect('control/perfil/password')
			->withErrors(['error'=>'No se pudo editar el registo!']);
		}

	}
}
