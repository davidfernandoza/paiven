<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	* Seed the application's database.
	*
	* @return void
	*/
	public function run()
	{
		// MYSQL
		// $this->truncateTables([
		// 	'countries',
		// 	'users',
		// 	'trm'
		// ]);

		$this->call('CountrySeeder');
		$this->call('UserSeeder');
		$this->call('TrmSeeder');
	}

	protected function truncateTables(array $tables){
		DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
		foreach ($tables as $table) {
			DB::table($table)->truncate();
		}
		DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
	}
}
