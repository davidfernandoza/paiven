<?php
namespace App\Http\Controllers\Countries;

use Illuminate\Http\RedirectResponse as Redirect;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Support\Str;

class UpdateController extends BaseController
{
	public function index(CountryRequest $request){

		$country = Country::findOrFail($request->id);

		$country->name = trim(Str::title($request->get('name')));
		$country->coin = trim(Str::upper($request->get('coin')));

		if (file_exists(public_path().'/images/flags/'.$country->name.'.svg')) {
			$country->flag = 'images/flags/'.$country->name.'.svg';
		}

		if ($country->update()) {
			return 	Redirect('control/paises')
			->with('success', '¡Se edito el registros con exito!');
		}
		else {
			return 	Redirect('control/paises')
			->withErrors(['error'=>'¡No se pudo editar el registo!']);
		}
	}
}
