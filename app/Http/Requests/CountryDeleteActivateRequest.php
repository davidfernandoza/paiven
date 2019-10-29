<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryDeleteActivateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'id' =>       'required|numeric|max:32767|exists:countries'
        ];
    }

		public function messages()
		{
			return [
				'id.required' => '¡El identificador del pais es requerido!',
				'id.max' => '¡El identificador del pais debe de ser mas corto!',
				'id.exists' => '¡El pais no existe!',
				'id.numeric' => '¡El identificador del pais debe de ser numerico!'
			];
		}
}
