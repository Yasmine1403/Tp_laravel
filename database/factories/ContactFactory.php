<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
       
       'contact_name'=>$faker->word(),
       'contact_email'=>$faker->unique()->safeEmail,
       'contact_message'=>$faker->sentence(),
       
    ];
});
