<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CurrentPasswordRule implements Rule
{

    public function __construct()
    {
        //
    }


    public function passes($attribute, $value)
    {
        return Hash::check($value, Auth::user()->password);
    }


    public function message()
    {
        return '¡El password actual no coincide con nuestros registros!';
    }
}
