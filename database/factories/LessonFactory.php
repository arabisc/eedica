<?php

use Faker\Generator as Faker;

$factory->define(App\Lesson::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'title' => $name,
        'slug' => str_slug($name),
        'description' => $faker->text,
        'publish' => rand(0,1),
        'lesson_content' => $faker->text(1000),
        'position' => rand(1,10),
        'free_lesson' => rand(0,1),
        'course_id' => $faker->numberBetween(1, 10)
    ];
});
