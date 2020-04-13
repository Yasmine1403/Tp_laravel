<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
       
        'post_id'=>$faker->randomElement($posts),
        'comment_name'=>$faker->word(),
        'comment_email'=>$faker->unique()->safeEmail,
        'comment_content'=>$faker->sentence(),
       
    ];
});
