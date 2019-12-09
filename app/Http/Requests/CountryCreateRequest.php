<?php

namespace App\Http\Requests;
use App\Rules\UniqueCaseRule;
use Illuminate\Foundation\Http\FormRequest;

class CountryCreateRequest extends FormRequest
{

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'name' => ['required', 'string','min:3', 'max:45', new UniqueCaseRule('name','countries', null)],
			'coin' => 'required|string|min:2|max:4',
			'codePrefix' => 'required|numeric|min:1|max:999|unique:countries,codePrefix',
			'value' => 'required|numeric'
		];
	}

	public function messages()
	{
		return [
			'name.required' => '¡El nombre del pais es requerido!',
			'name.min' => '¡El nombre del pais debe de ser mas largo!',
			'name.max' => '¡El nombre del pais debe de ser mas corto!',
			'name.string'=> '¡El nombre del pais debe de ser valido!',

			'coin.required' => '¡La moneda del pais es requerida!',
			'coin.min' => '¡La moneda del pais debe de ser mas larga!',
			'coin.max' => '¡La moneda del pais debe de ser mas corta!',
			'coin.string' => '¡La moneda del pais debe de ser valida!',
			'coin.string'=> '¡La moneda del pais debe de ser valida!',

			'codePrefix.required' => '¡El codigo del pais es requerido!',
			'codePrefix.unique' => '¡El codigo del pais ya se esta usando!',
			'codePrefix.numeric' => '¡El codigo del pais debe de ser numerico!',
			'codePrefix.min' => '¡El codigo del pais debe de ser mas largo!',
			'codePrefix.max' => '¡El codigo del pais debe de ser mas corto!',

			'value.required' => '¡El valor del TRM es requerido!',
			'value.numeric' => '¡El valor del TRM debe de ser numerico!',

			'id.required' => '¡El identificador del pais es requerido!',
			'id.max' => '¡El identificador del pais debe de ser mas corto!',
			'id.exists' => '¡El pais no existe!',
			'id.numeric' => '¡El identificador del pais debe de ser numerico!'
		];
	}
}
