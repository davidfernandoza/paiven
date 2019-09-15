<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CurrentPasswordRule;

class PasswordRequest extends FormRequest
{

	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'current-password' =>   		['required', 'min:8', new CurrentPasswordRule],
			'password' =>  							'required|min:8|max:64|confirmed'
		];
	}

	public function messages()
	{
		return [
			'current-password.required'=>'¡El password actual es requerido!',
			'current-password.min'=>'¡El password actual es muy corto!',
			'current-password.current_password'=>'¡El password actual no coincide con nuestros registros!',

			'password.required'=>'¡El password nuevo es requerido!',
			'password.min'=>'¡El password nuevo es muy corto!',
			'password.max'=>'¡El password nuevo es muy largo!',
			'password.confirmed'=>'¡El password nuevo no coincide con la confirmacion!'
		];
	}
}
