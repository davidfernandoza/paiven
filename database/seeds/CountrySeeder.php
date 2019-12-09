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
				'codePrefix' => 57,
				'flag' => 'images/flags/Colombia.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Peru',
				'coin' => 'PEN',
				'codePrefix' => 51,
				'flag' => 'images/flags/Peru.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Panama',
				'coin' => 'USD',
				'codePrefix' => 507,
				'flag' => 'images/flags/Panama.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('countries')->insert([
				'name' => 'Ecuador',
				'coin' => 'USD',
				'codePrefix' => 593,
				'flag' => 'images/flags/Ecuador.svg',
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);
		}
}
