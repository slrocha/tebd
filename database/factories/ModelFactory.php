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
// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(App\Teatro::class, function (Faker\Generator $faker) {

    return [
        'nome' => $faker->name,
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
        'nome' => $faker->name,
        'cpf' => rand(0, 9).rand(0, 9).rand(0, 9).'.'.rand(0, 9).rand(0, 9).rand(0, 9).'.'.rand(0, 9).rand(0, 9).rand(0, 9).'-'.rand(0, 9).rand(0, 9),
        'dt_nascimento' =>$faker->dateTimeThisCentury->format('Y-m-d'),
        'telefone' => $faker->phoneNumber,            
        'is_vip' =>  $faker->numberBetween($min = 0, $max = 1),
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
        'data' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'horario' => $faker->time($format = 'H:i:s', $max = 'now'),
        'espetaculo_id' => function () {
            return factory(App\Espetaculo::class)->create()->id;
        }
    ];
});

$factory->define(App\Bilhete::class, function ($faker) {
    return [
        'valor' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 3),
        'programacao_id' => function () {
            return factory(App\Programacao::class)->create()->id;
        },
        'poltrona_id' => function () {
            return factory(App\Poltrona::class)->create()->id;
        }
    ];
});

$factory->define(App\ReservaBilhete::class, function ($faker) {
    return [
       'tempo_reserva' => $faker->randomDigitNotNull,
       'status' => $faker->numberBetween($min = 0, $max = 1),
       'forma_adquirir' => $faker->randomElement(array('presencial','domicilio')),
        'cliente_id' => function () {
            return factory(App\Cliente::class)->create()->id;
        },
        'bilhete_id' => function () {
            return factory(App\Bilhete::class)->create()->id;
        }
    ];
});

$factory->define(App\TeatroPrograPoltro::class, function ($faker) {
    return [
        'teatro_id' => function () {
            return factory(App\Teatro::class)->create()->id;
        },
        'poltrona_id' => function () {
            return factory(App\Poltrona::class)->create()->id;
        },
         'programacao_id' => function () {
            return factory(App\Programacao::class)->create()->id;
        }
    ];
});
