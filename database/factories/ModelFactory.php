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

$factory->define(App\Cliente::class, function ($faker) {
    return [
        'nome' => $faker->title,
        'cpf' => $faker->title,
        'dt_nascimento' => $faker->title,
        'is_vip' => $faker->paragraph,
        'endereco_id' => function () {
            return factory(App\Endereco::class)->create()->id;
        }
    ];
});

$factory->define(App\Poltrona::class, function ($faker) {
    return [
        'num_fila' => $faker->randomDigitNotNull,
        'posicao_fila' => $faker->bothify
    ];
});

$factory->define(App\Espetaculo::class, function ($faker) {
    return [
        'nome' => $faker->name
    ];
});

$factory->define(App\Programacao::class, function ($faker) {
    return [
        'data' => $faker->date($format = 'd/m/Y', $max = 'now'),
        'horario' => $faker->time($format = 'H:i:s', $max = 'now'),
        'espetaculo_id' => function () {
            return factory(App\Espetaculo::class)->create()->id;
        }
    ];
});

