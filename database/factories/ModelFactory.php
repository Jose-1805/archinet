<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Archinet\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'tipo_identificacion' => 'C.C',
        'identificacion' => $faker->unique()->randomNumber(),
        'nombres' => $faker->name,
        'apellidos' => $faker->lastName,
        'telefono' => $faker->randomNumber(),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
