<?php

use Illuminate\Database\Seeder;

class TrmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Trm::class, 50)->create();
    }
}
