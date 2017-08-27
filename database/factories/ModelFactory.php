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

$factory->define(App\Teatro::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->nome,
        'endereco' => $faker->address
    ];
});

$factory->define(App\Endereco::class, function (Faker\Generator $faker) {

    return [
        'cidade' => $faker->city,                               
        'bairro' => $faker->streetName,
        'rua' => $faker->cityPrefix,
        'numero' => $faker->buildingNumber
    ];
});

$factory->define(App\Endereco::class, function ($faker) {
    return [
        'cidade' => $faker->title,
        'bairro' => $faker->paragraph,
        'rua' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
