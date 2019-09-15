<?php
namespace App\Http\Controllers\Users;

use Illuminate\Http\RedirectResponse as Redirect;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\UserRequest;
use App\Models\User;

class DeleteActivateController extends BaseController
{
	public function delete(UserRequest $request){
		$user = User::findOrFail($request->id);
		$user->status = 0;
		$user->update();
		return 	Redirect('control/usuarios')
			->with('success', '¡Se elimino el registros con exito!');
	}

	public function activate(UserRequest $request){
		$user = User::findOrFail($request->id);
		$user->status = 1;
		$user->update();
		return 	Redirect('control/usuarios')
			->with('success', '¡Se activo el registros con exito!');
	}
}
