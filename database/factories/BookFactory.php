<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'title'=> $faker->sentence,
        'author'=>$faker->name,
        'subtitle'=> $faker->sentence,
        'description'=> $faker->paragraph,
        'available' => true
    ];
    
});
