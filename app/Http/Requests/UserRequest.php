<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		$rules=[];

		// Eliminar o Activar
		if ($this->_method == "DELETE" ){
			$rules = [
				'id' =>       'required|numeric|max:10|exists:users'
			];
		}

		// Editar
		else if ($this->_method == "PUT" ){

			$rules =[
				'id' =>   	'required|numeric|max:10|exists:users',
				'name' =>  	'required|string|min:3|max:45',
				'email' => 	'required|min:8|max:150|email|unique:users,email,'.$this->id,
				'phone' => 	'required|min:10000|max:999999999999|numeric',
				'rol' => 		'required|string|in:ADMIN,BASIC'
			];
		}

		// Crear
		else{
			$rules = [
				'name' =>  	'required|string|min:3|max:45',
				'email' => 	'required|min:8|max:150|email|unique:users,email',
				'phone' => 	'required|min:10000|max:999999999999|numeric',
				'rol' => 		'required|string|in:ADMIN,BASIC'
			];
		}
		return $rules;
	}

	public function messages()
	{
		return [

			'name.required' => '¡El nombre del usuario es requerido!',
			'name.min' => '¡El nombre del usuario debe de ser mas largo!',
			'name.max' => '¡El nombre del usuario debe de ser mas corto!',

			'email.required' => '¡El email del usuario es requerido!',
			'email.email' => '¡El email del usuario debe de ser valido!',
			'email.unique' => '¡El email del usuario ya esta en uso!',
			'email.min' => '¡El email del usuario debe de ser mas largo!',
			'email.max' => '¡El email del usuario debe de ser mas corto!',

			'phone.required' => '¡El telefono del usuario es requerido!',
			'phone.numeric' => '¡El telefono del usuario debe de ser numerico!',
			'phone.min' => '¡El telefono del usuario debe de ser mas largo!',
			'phone.max' => '¡El telefono del usuario debe de ser mas corto!',

			'rol.required'=>'¡El rol del usuario es requerido!',
			'rol.in'=> '¡El rol del usuario solo admite ADMIN o BASIC!',

			'id.required' => '¡El identificador del usuario es requerido!',
			'id.max' => '¡El identificador del usuario debe de ser mas corto!',
			'id.exists' => '¡El usuario no existe!',
		];
	}
}
