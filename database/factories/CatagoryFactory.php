<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Catagory::class, function (Faker $faker) {
    return [
        'title' => $faker->word
    ];
});
