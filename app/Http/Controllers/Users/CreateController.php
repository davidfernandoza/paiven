<?php
namespace App\Http\Controllers\Users;

use Illuminate\Http\RedirectResponse as Redirect;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserPassword;

class CreateController extends BaseController
{

	public function index(UserRequest $request){
		// dd($request);
		$password = Str::random(8);
		$user = new User;
		$user->name = 			trim(Str::title($request->get('name')));
		$user->email = 			trim(Str::lower($request->get('email')));
		$user->phone = 			trim($request->get('phone'));
		$user->rol = 				trim(Str::upper($request->get('rol')));
		$user->country_id = trim($request->get('country'));
		$user->visible = 		(int)trim($request->get('visible'));
		$user->password = 	Hash::make($password);
		$user->email_password = $user->password;

		if ($user->save()) {

			Mail::to($user->email)->send(new UserPassword($password));

			return 	Redirect('control/usuarios')
			->with('success', '¡Se creo el registros con exito!');
		}
		else {
			return 	Redirect('control/usuarios')
			->withErrors(['error'=>'No se pudo crear el registo!']);
		}
	}
}
