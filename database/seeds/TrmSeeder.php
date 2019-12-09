<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('trm')->insert([
				'value' => 1.7,
				'status'=> 1,
				'country_id' => 1,
				'user_id' => 1,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('trm')->insert([
				'value' => 0.1,
				'status'=> 1,
				'country_id' => 2,
				'user_id' => 1,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('trm')->insert([
				'value' => 0.5,
				'status'=> 1,
				'country_id' => 3,
				'user_id' => 2,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			DB::table('trm')->insert([
				'value' => 2.5,
				'status'=> 1,
				'country_id' => 4,
				'user_id' => 2,
				'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
				'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
			]);

			// se utiliza para el faker
			// factory(App\Models\Trm::class, 50)->create();
    }
}
