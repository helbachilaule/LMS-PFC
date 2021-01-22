<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\E3debatec1m1;
use Faker\Generator as Faker;

$factory->define(E3debatec1m1::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
