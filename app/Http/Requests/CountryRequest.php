<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
				'id' =>       'required|numeric|max:10|exists:countries'
			];
		}

		// Editar
		else if ($this->_method == "PUT" ){

			$rules =[
				'id' =>   'required|numeric|max:10|exists:countries',
				'name' => 'required|string|min:3|max:45|unique:countries,name,'.$this->id,
				'coin' => 'required|string|min:2|max:4'
			];
		}

		// Crear
		else{
			$rules = [
				'name' => 'required|string|min:3|max:45|unique:countries,name',
				'coin' => 'required|string|min:2|max:4',
				'value' => 'required|numeric'
			];
		}
		return $rules;
	}

	public function messages()
	{
		return [
			'name.unique' => '¡El nombre del pais ya se esta usando!',
			'name.required' => '¡El nombre del pais es requerido!',
			'name.min' => '¡El nombre del pais debe de ser mas largo!',
			'name.max' => '¡El nombre del pais debe de ser mas corto!',
			'name.string'=> '¡El nombre del pais debe de ser valido!',

			'coin.required' => '¡La moneda del pais es requerida!',
			'coin.min' => '¡La moneda del pais debe de ser mas larga!',
			'coin.max' => '¡La moneda del pais debe de ser mas corta!',
			'coin.string' => '¡La moneda del pais debe de ser valida!',
			'coin.string'=> '¡La moneda del pais debe de ser valida!',

			'value.required' => '¡El valor del TRM es requerido!',
			'value.numeric' => '¡El valor del TRM debe de ser numerico!',

			'id.required' => '¡El identificador del pais es requerido!',
			'id.max' => '¡El identificador del pais debe de ser mas corto!',
			'id.exists' => '¡El pais no existe!',
			'id.numeric' => '¡El identificador del pais debe de ser numerico!'
		];
	}
}
