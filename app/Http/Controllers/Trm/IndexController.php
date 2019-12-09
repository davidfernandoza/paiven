<?php namespace App\Http\Controllers\Trm;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
	public function index(Request $request)
	{
		$data = DB::select("SELECT DISTINCT ON(countries.name) countries.name,
		trm.id,
		trm.country_id,
		countries.id AS country_id,
		countries.coin,
		countries.flag,
		countries.name,
		users.name AS user,
		trm.value,
		trm.created_at
		FROM trm
		INNER JOIN countries ON trm.country_id = countries.id
		INNER JOIN users ON trm.user_id = users.id
		WHERE trm.updated_at = (
			SELECT MAX(trm.updated_at)
			FROM trm
			WHERE trm.country_id = countries.id) AND countries.status = true
			ORDER BY (countries.name)");
			if ($request->ajax()) {
				return response()->json($data);
			}
			else {
				return view('admin.trm.index')->with('data', $data)->with('title', 'TRM');
			}
		}
	}
