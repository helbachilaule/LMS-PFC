<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admission;
use Faker\Generator as Faker;

$factory->define(Admission::class, function (Faker $faker) {

    return [
        'roll_me' => $faker->word,
        'first_name' => $faker->word,
        'last_name' => $faker->word,
        'father_name' => $faker->word,
        'father_phone' => $faker->word,
        'mother_name' => $faker->word,
        'gender' => $faker->word,
        'email' => $faker->word,
        'dob' => $faker->word,
        'phone' => $faker->word,
        'address' => $faker->text,
        'nationality' => $faker->word,
        'identity' => $faker->word,
        'emission_date' => $faker->word,
        'user_id' => $faker->word,
        'class_id' => $faker->word,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
