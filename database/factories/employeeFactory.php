<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employee;
use Faker\Generator as Faker;

$factory->define(employee::class, function (Faker $faker) {
    return [
        'firstname' => $faker -> firstname,
        'lastname' => $faker -> lastname,
        'ral' => $faker -> numberBetween(2000000, 500000),
    ];
});
