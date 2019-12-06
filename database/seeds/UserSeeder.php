<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

			DB::table('users')->insert([
				'country_id' => 1,
				'name' => 'Juan Manuel Arcila Zapata',
				'email' => 'jumaar1988@hotmail.com',
				'password' =>  Hash::make('123456789'),
				'email_password'=> Hash::make('123456789'),
				'phone' => '3147754648',
				'rol' => 'ADMIN',
				'visible'=> 0,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('users')->insert([
				'country_id' => 1,
				'name' => 'David Fernando Torres Zapata',
				'email' => 'fernando.zapata.live@gmail.com',
				'password' =>  Hash::make('123456789'),
				'email_password'=> Hash::make('123456789'),
				'phone' => '3107148905',
				'rol' => 'ADMIN',
				'visible'=> 0,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);
    }
}
