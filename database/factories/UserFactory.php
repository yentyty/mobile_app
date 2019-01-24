<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Mobile\User::class, function (Faker $faker) {
    return [
        'role_id' => $faker->numberBetween(1, 4),
        'username' => $faker->unique()->userName,
        'name' => $faker->name,
        'password' => bcrypt('123'),
        'birthday' => $faker->date(),
        'gender' => $faker->numberBetween(1, 2),
        'phone' => '097161024' . $faker->numberBetween(10, 99),
        'email' => $faker->unique()->safeEmail,
        'address' => $faker->address,
        'remember_token' => str_random(10),
        'created_at' => $faker->unixTime,
        'updated_at' => $faker->unixTime,
    ];













});
