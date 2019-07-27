<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        //
        "title"=> $faker->sentence($nbWords = 3),
        "author"=> $faker->name,
        "price" =>$faker->numberBetween(110,2011),
        "no_of_pages" => $faker->numberBetween(100,2000),
        "description"=>$faker->text
    ];
});
