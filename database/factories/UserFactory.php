<?php
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('123456789'),
				'email_password'=> Hash::make('123456789'),
        'phone'=> $faker->e164PhoneNumber,
        'status'=> rand(0,1),
        'rol' => $faker->randomElement($array = array ('ADMIN','BASIC')),
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
    ];
});
