<?php
namespace App\Rules;

use Illuminate\Support\Str;
use Illuminate\Contracts\Validation\Rule;

class UniqueCaseRule implements Rule
{

	private $table;
	private $column;
	public function __construct($column, $table, $id)
	{
		$this->column = $column;
		$this->table = $table;
		$this->id = $id;
	}

	public function passes($attribute, $value){

		// countries
		if ($this->table == 'countries') {
			$value = Str::title($value);
			if ($this->id != null) {
				$data = \App\Models\Country::where($this->column, $value)
				->where('id', '!=', $this->id)
				->count();
			}
			else {
				$data = \App\Models\Country::where($this->column, $value)->count();
			}
		}

		// users
		elseif ($this->table == 'users') {
			$value = Str::lower($value);
			if ($this->id != null) {
				$data = \App\Models\User::where($this->column, $value)
				->where('id', '!=', $this->id)
				->count();
			}
			else {
				$data = \App\Models\User::where($this->column, $value)->count();
			}
		}

		if ($data > 0) {
			return false;
		}
		return true;
	}


	public function message()
	{
		$error = '';
		if ($this->table == 'countries') {
			if($this->column == 'name') {
				$error = '¡El nombre del pais ya se esta usando!';
			}
		}

		if ($this->table == 'users') {
			if($this->column == 'email') {
				$error =  '¡El email del usuario ya esta en uso!';
			}
		}
		return $error;
	}
}
