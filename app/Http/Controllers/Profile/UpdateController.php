<?php namespace App\Http\Controllers\Profile;

use App\Models\User;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use Auth;


class UpdateController extends BaseController
{

	public function profile(ProfileRequest $request)
	{
		if (Auth::user()->id == $request->get('id')) {

			$user = User::findOrFail(Auth::user()->id);

			// Subir IMG
			if ($request->file('avatar')) {
				$path = Storage::disk('public')->put('images/avatars', $request->file('avatar'));
				$user->avatar = $path;
			}
			$user->name = $request->get('name');
			$user->email = $request->get('email');
			$user->phone = $request->get('phone');
			if ($user->update()) {
				$request->session()->forget(['alert', 'password_request']);
				return 	Redirect('control/perfil')
				->with('success', '¡Se edito el registros con exito!');
			}
			else {
				return 	Redirect('control/perfil')
				->withErrors(['error'=>'No se pudo editar el registo!']);
			}
		}
		else {
			return 	Redirect('control/perfil')
			->withErrors(['error'=>'El identificador del usuario esta corrompido!']);
		}
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
