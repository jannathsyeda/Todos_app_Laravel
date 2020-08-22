<?php

use Faker\Generator as Faker;

$factory->define(App\Todos::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'dummyname' => $faker->name,
        'title' => $faker->title,
        'city' => $faker->city,
        'address' => $faker->address,
        'country' => $faker->country,
        'jobTitle' => $faker->jobTitle,
        'email' => $faker->email,
        'description'=> $faker->paragraph(4),
        'completed'=> false,
        'image' => $faker->image('public/storage/images',400,300, null, false) 
        ];
});
