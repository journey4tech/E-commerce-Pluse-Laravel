<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\brand::class, function (Faker $faker) {
    return [
        'brand_name' => ($name = $faker->streetName.random_int(0,99)),
        'brand_slug' => str_slug($name),
        'brand_image' => str_random(8),
        'brand_description' => $faker->realText(60),
    ];
});
