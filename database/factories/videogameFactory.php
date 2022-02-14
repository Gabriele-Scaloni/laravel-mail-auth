<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Videogame;
use Faker\Generator as Faker;

$factory->define(Videogame::class, function (Faker $faker) {
    return [
        
        'titolo' => $faker -> words(2, true),
        'sottotilo' => $faker -> words(2, true),
        'rating' => $faker -> numberBetween(15, 100),

    ];
});
