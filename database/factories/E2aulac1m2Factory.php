<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\E2aulac1m2;
use Faker\Generator as Faker;

$factory->define(E2aulac1m2::class, function (Faker $faker) {

    return [
        'aula' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
