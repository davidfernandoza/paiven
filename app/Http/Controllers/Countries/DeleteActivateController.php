<?php
namespace App\Http\Controllers\Countries;

use Illuminate\Http\RedirectResponse as Redirect;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\CountryRequest;
use App\Models\Country;

class DeleteActivateController extends BaseController
{
	public function delete(CountryRequest $request){
		$country = Country::findOrFail($request->id);
		$country->status = 0;
		$country->update();
		return 	Redirect('control/paises')
			->with('success', '¡Se elimino el registros con exito!');
	}

	public function activate(CountryRequest $request){
		$country = Country::findOrFail($request->id);
		$country->status = 1;
		$country->update();
		return 	Redirect('control/paises')
			->with('success', '¡Se activo el registros con exito!');
	}
}
