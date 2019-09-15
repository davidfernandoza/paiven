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
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Colombia.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Peru',
				'coin' => 'PEN',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Peru.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Panama',
				'coin' => 'USD',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Panama.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Ecuador',
				'coin' => 'USD',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Ecuador.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Mexico',
				'coin' => 'MXN',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Mexico.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Estados Unidos',
				'coin' => 'USD',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Estados Unidos.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Brasil',
				'coin' => 'BRL',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Brasil.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Argentina',
				'coin' => 'ARS',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Argentina.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Chile',
				'coin' => 'CLP',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Chile.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'España',
				'coin' => 'EUR',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/España.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Venezuela',
				'coin' => 'BsS',
				'monthQuery' => 33,
				'totalQuery' => 33,
				'flag' => 'images/flags/Venezuela.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);
    }
}
