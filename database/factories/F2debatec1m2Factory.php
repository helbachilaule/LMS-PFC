<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\F2debatec1m2;
use Faker\Generator as Faker;

$factory->define(F2debatec1m2::class, function (Faker $faker) {

    return [
        'debate' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
