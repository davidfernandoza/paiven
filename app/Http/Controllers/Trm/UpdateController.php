<?php

namespace App\Http\Controllers\Trm;
use Illuminate\Http\RedirectResponse as Redirect;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TrmRequest;
use App\Models\Trm;
use Auth;

class UpdateController extends BaseController
{
	public function index(TrmRequest $request){

		$status = true;
		DB::beginTransaction();
		foreach ( $request->pais['new'] as $key => $value) {
			if ($request->pais['old'][$key] != $value) {
				$trm = Trm::findOrFail($key);
				$trm->user_id = Auth::user()->id;
				// dd($value);
				$trm->value = $value;
				if (!$trm->update()) {
					$status = false;
				};
			}
		}
		if ($status) {
			DB::commit();
			return 	Redirect('control/trm')
			->with('success', '¡Se editaron los registros con exito!');
		}
		else {
			DB::rollback();
			return 	Redirect('control/trm')
			->withErrors(['error'=>'No se pudo editar los registos!']);
		}
	}
}
