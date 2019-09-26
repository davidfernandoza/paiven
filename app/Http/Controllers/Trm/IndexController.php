<?php namespace App\Http\Controllers\Trm;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController
{
	public function index(Request $request)
	{
		$data = DB::table('trm')
		->join('countries', 'trm.country_id', '=', 'countries.id')
		->join('users', 'trm.user_id', '=', 'users.id')
		->select(
			'countries.id as country_id',
			'countries.name',
			'countries.coin',
			'countries.flag',
			'users.name as user',
			'trm.id',
			'trm.value',
			'trm.created_at'
			)
			->where('trm.created_at',
			DB::raw('(select max(trm.created_at) from trm where trm.country_id = countries.id)')
			)->where('countries.status', true)
			->groupBy('countries.id')
			->orderBy('countries.name')
			->get();
			if ($request->ajax()) {
				return response()->json($data);
			}
			else {
				return view('admin.trm.index')->with('data', $data)->with('title', 'TRM');
			}
		}
	}
