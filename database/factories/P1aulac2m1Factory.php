<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\P1aulac2m1;
use Faker\Generator as Faker;

$factory->define(P1aulac2m1::class, function (Faker $faker) {

    return [
        'aula' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
