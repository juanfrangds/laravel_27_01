<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
// use Faker\Generator as Faker;

$faker=Faker\Factory::create('es_Es');

$factory->define(Libro::class, function ($faker) {
    return [
        'titulo'=>$faker->sentence(3),
        'sinopsis'=>$faker->text($maxNbChars=100),
        'pvp'=>$faker->randomFloat($nbMaxDecimals=2, $min=1, $max=999),
        'stock'=>$faker->numberBetween($min=1, $max=50),
        'isbn'=>$faker->unique()->isbn13
    ];
});
