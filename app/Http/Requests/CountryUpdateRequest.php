<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryUpdateRequest extends FormRequest
{

	public function authorize()
	{
		return true;
	}


	public function rules()
	{
		return [
			'name_u' => 'required|string|min:3|max:45|unique:countries,name,'.$this->id,
			'coin_u' => 'required|string|min:2|max:4',
			'codePrefix_u' => 'required|numeric|min:1|max:999|unique:countries,codePrefix,'.$this->id
		];
	}

	public function messages()
	{
		return [
			'name_u.unique' => '¡El nombre del pais ya se esta usando!',
			'name_u.required' => '¡El nombre del pais es requerido!',
			'name_u.min' => '¡El nombre del pais debe de ser mas largo!',
			'name_u.max' => '¡El nombre del pais debe de ser mas corto!',
			'name_u.string'=> '¡El nombre del pais debe de ser valido!',

			'coin_u.required' => '¡La moneda del pais es requerida!',
			'coin_u.min' => '¡La moneda del pais debe de ser mas larga!',
			'coin_u.max' => '¡La moneda del pais debe de ser mas corta!',
			'coin_u.string' => '¡La moneda del pais debe de ser valida!',
			'coin_u.string'=> '¡La moneda del pais debe de ser valida!',

			'codePrefix_u.required' => '¡El codigo del pais es requerido!',
			'codePrefix_u.unique' => '¡El codigo del pais ya se esta usando!',
			'codePrefix_u.numeric' => '¡El codigo del pais debe de ser numerico!',
			'codePrefix_u.min' => '¡El codigo del pais debe de ser mas largo!',
			'codePrefix_u.max' => '¡El codigo del pais debe de ser mas corto!'
		];
	}
}
