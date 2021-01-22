<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\F3debatec1m1;
use Faker\Generator as Faker;

$factory->define(F3debatec1m1::class, function (Faker $faker) {

    return [
        'debate' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
