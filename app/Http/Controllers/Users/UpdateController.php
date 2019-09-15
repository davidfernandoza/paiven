<?php
namespace App\Http\Controllers\Users;

use Illuminate\Http\RedirectResponse as Redirect;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UpdateController extends BaseController
{

	public function index(UserRequest $request){

		$user = User::findOrFail($request->id);

		$user->name = 		trim(Str::title($request->get('name')));
		$user->email = 		trim(Str::lower($request->get('email')));
		$user->phone = 		trim($request->get('phone'));
		$user->rol = 			trim(Str::upper($request->get('rol')));

		if ($user->update()) {
			return 	Redirect('control/usuarios')
			->with('success', '¡Se edito el registros con exito!');
		}
		else {
			return 	Redirect('control/usuarios')
			->withErrors(['error'=>'No se pudo editar el registo!']);
		}
	}
}
