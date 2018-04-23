<?php

use Faker\Generator as Faker;
use App\User as User;
use App\Project as Project;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'assign_to' => $faker->randomElement(User::all()->pluck('id')->toArray()),
        'project_id' => $faker->randomElement(Project::all()->pluck("id")->toArray())

    ];
});

// $table->unsignedInteger('project_id');

//             $table->string('name');
//             $table->unsignedInteger('assign_to');
//             $table->timestamps();
//             $table->softDeletes();

//             $table->foreign('project_id')
//                     ->references('id')
//                     ->on('projects');

//             $table->foreign('assign_to')
//                     ->references('id')
//                     ->on('users');