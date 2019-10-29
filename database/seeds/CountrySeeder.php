<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('countries')->insert([
				'name' => 'Colombia',
				'coin' => 'COP',
				'codePrefix' => '57',
				'flag' => 'images/flags/Colombia.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Peru',
				'coin' => 'PEN',
				'codePrefix' => '51',
				'flag' => 'images/flags/Peru.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Panama',
				'coin' => 'USD',
				'codePrefix' => '507',
				'flag' => 'images/flags/Panama.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Ecuador',
				'coin' => 'USD',
				'codePrefix' => '593',
				'flag' => 'images/flags/Ecuador.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Mexico',
				'coin' => 'MXN',
				'codePrefix' => '52',
				'flag' => 'images/flags/Mexico.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Estados Unidos',
				'coin' => 'USD',
				'codePrefix' => '1',
				'flag' => 'images/flags/Estados Unidos.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Brasil',
				'coin' => 'BRL',
				'codePrefix' => '55',
				'flag' => 'images/flags/Brasil.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Argentina',
				'coin' => 'ARS',
				'codePrefix' => '54',
				'flag' => 'images/flags/Argentina.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Chile',
				'coin' => 'CLP',
				'codePrefix' => '56',
				'flag' => 'images/flags/Chile.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'España',
				'coin' => 'EUR',
				'codePrefix' => '34',
				'flag' => 'images/flags/España.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Venezuela',
				'coin' => 'BsS',
				'codePrefix' => '58',
				'flag' => 'images/flags/Venezuela.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);
    }
}
