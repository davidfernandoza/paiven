<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrmRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'pais.new.*' => 'required|numeric'
        ];
    }

		public function messages()
    {
        return [
        'pais.new.*.required'=>'¡Todos los campos son obligatorios!',
        'pais.new.*.numeric'=>'¡Los campos deben de ser numericos!'
        ];
    }
}
