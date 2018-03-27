<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('zh_CN');

    return [
        'nickname'           => $faker->name,
        'account'           => $faker->firstName,
        'avatar'         => $faker->imageUrl(),
        'email'          => $faker->unique()->safeEmail,
        'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'confirm_code'   => 0


    ];
});
$factory->define(\App\Models\Category::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('zh_CN');

    return [
        'parent_id'   => $faker->randomElement([0, 1, 2, 3]),
        'name'        => $faker->imageUrl(),
        'description' => $faker->company(),
        'sort'        => $faker->randomElement([0, 1, 2, 3, 5, 6, 7, 8, 9]),
    ];
});
$factory->define(\App\Models\Article::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('zh_CN');

    $category = \App\Models\Category::pluck('id')->toArray();

    return [
        'img_url'     => $faker->imageUrl(),
        'category_id' => $faker->randomElement($category),
        'title'       => $faker->company(),
        'content'     => $faker->company()
    ];
});

$factory->define(\App\Models\Comment::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('zh_CN');
    $article = \App\Models\Article::pluck('id')->toArray();
    $user = \App\Models\User::pluck('id')->toArray();
    $parentIds = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    return [
        'article_id' => $faker->randomElement($article),
        'parent_id'  => $faker->randomElement($parentIds),
        'user_id'    => $faker->randomElement($user),
        'content'    => $faker->company()
    ];
});

$factory->define(\App\Models\Tag::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('zh_CN');
    return [
        'name' => $faker->name(),
        'description'  => $faker->company(),
    ];
});

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('zh_CN');

    return [
        'nickname'           => $faker->name,
        'account'           => 'zhimma',
        'avatar'         => $faker->imageUrl(),
        'email'          => $faker->unique()->safeEmail,
        'password'       => 123456, // secret
        'remember_token' => str_random(10),
        'confirm_code'   => 0
    ];
});