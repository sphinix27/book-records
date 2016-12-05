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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Crime::class, function (Faker\Generator $faker) {
    return [
        'article' => $faker->numberBetween(1, 300),
        'subsection' => $faker->randomElement($array = array ('bis','ter','quarter', 'a', 'b', 'c')),
        'name' => $faker->name
    ];
});

$factory->define(App\Denouncer::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'ci' => $faker->numberBetween($min = 1000000, $max = 9999999)
    ];
});

$factory->define(App\Denounced::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'ci' => $faker->numberBetween($min = 1000000, $max = 9999999)
    ];
});

$factory->define(App\State::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->randomElement($array = array ('imputacion','acusacion','rechazo')),
    ];
});

$factory->define(App\Record::class, function (Faker\Generator $faker) {
    return [
        'fiscode' => $faker->numerify('FIS 1######'),
        'denouncer_id' => function () {
            return factory(App\Denouncer::class)->create()->id;
        },
        'denounced_id' => function () {
            return factory(App\Denounced::class)->create()->id;
        },
        'crime_id' => function () {
            return factory(App\Crime::class)->create()->id;
        },
        'state_id' => function () {
            return factory(App\State::class)->create()->id;
        },
        'observation' => $faker->sentence,
    ];
});
