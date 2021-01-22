<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ap1debatec1m2;
use Faker\Generator as Faker;

$factory->define(Ap1debatec1m2::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
