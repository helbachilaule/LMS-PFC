<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\F2exercicioc3m2;
use Faker\Generator as Faker;

$factory->define(F2exercicioc3m2::class, function (Faker $faker) {

    return [
        'exercicio' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
