<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class UserPermisionRol
{

	public function handle($request, Closure $next)
	{
		if(Auth::user()->rol!='ADMIN'){
			return redirect('/control/trm')
			->with("info", "¡No tienes los permisos suficiente para ingresar a esta sección!");
		}
		return $next($request);
	}
}
