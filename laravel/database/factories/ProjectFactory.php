<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => $faker->randomElement([
                 'development','release', 'stable','obsolete'
                 ]),
        'view_status' => $faker->randomElement(['public','private']),
        'description' => $faker->text
    ];
});

// $table->string('name');
//             $table->enum('status', [
//                 'development','release', 'stable','obsolete'
//                 ]);
//             $table->enum('view_status',[
//                 'public','private']);
//             $table->text('description');