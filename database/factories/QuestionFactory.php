<?php

use Faker\Generator as Faker;
use App\Model\Catagory;
use App\User;
$factory->define(App\Model\Question::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->text,
        'catagory_id' => function(){
            return Catagory::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        }
    ];
});
