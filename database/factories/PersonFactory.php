<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'Name' => $faker->firstNameFemale,
        'LastName' =>$faker->lastName, 
        'Birthday' =>$faker->dateTime($max = 'now', $timezone = null),
        'Gender' =>$faker->randomElement(['Hombre','Mujer']),
        'Hobby' => $faker->sentence(3)
    ];
});
