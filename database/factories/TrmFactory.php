<?php
use App\Models\Trm;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Trm::class, function (Faker $faker) {
	return [
		'value' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0.0, $max = 1.5),
		'status'=> rand(0,1),
		'country_id' => rand(1, 10),
		'user_id' => rand(1, 2),
		'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
		'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
	];
});

?>
