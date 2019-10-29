<?php
namespace App\Http\Controllers\Countries;

use Illuminate\Http\RedirectResponse as Redirect;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CountryCreateRequest;
use App\Models\Country;
use App\Models\Trm;
use Illuminate\Support\Str;

class CreateController extends BaseController
{
	public function index(CountryCreateRequest $request){

		DB::beginTransaction();
		$status = false;
		$country = new Country;
		$trm = new Trm;

		$country->name = trim(Str::title($request->get('name')));
		$country->coin = trim(Str::upper($request->get('coin')));
		$country->codePrefix = trim($request->get('codePrefix'));

		if (file_exists(public_path().'/images/flags/'.$country->name.'.svg')) {
			$country->flag = 'images/flags/'.$country->name.'.svg';
		}

		if($country->save()){
			$trm->value = trim($request->get('value'));
			$trm->country_id = $country->id;
			$trm->user_id = $request->get('user');
			if ($trm->save()) {
				$status = true;
			}
		}

		if ($status) {
			DB::commit();
			return 	Redirect('control/paises')
			->with('success', '¡Se creo el registros con exito!');
		}
		else {
			DB::rollback();
			return 	Redirect('control/paises')
			->withErrors(['error'=>'No se pudo crear el registo!']);
		}
	}
}
