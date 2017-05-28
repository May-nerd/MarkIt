<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'fname' => $faker->firstname,
        'lname' => $faker->lastname,
        'town'  => $faker->city,
        'province'  => $faker->state,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'username' => $faker->word,
        'bio' => $faker->paragraph(10),
        'profilepicture' => "fd01343d8cc267c73907fc55b6198dab.jpeg",
        'profileextension' => "jpeg"
    ];
});

$factory->define(App\Auction::class, function (Faker\Generator $faker) {

    return [
        'poster_id' => App\User::all()->random()->id,
        'item_name' => $faker->word,
        'description' => $faker->paragraph(1),
        'min_bid' => $faker->numberBetween($min=50000, $max = 2000000),
        'image_path' => "fd01343d8cc267c73907fc55b6198dab.jpeg",
        'image_extension' => "jpeg",
        'auction_days' => $faker->numberBetween($min=1, $max = 7),
        'is_sold' => $faker->numberBetween($min=0, $max = 1),
        'sold_id' => NULL
    ];
});

$factory->define(App\Mark::class, function (Faker\Generator $faker) {

    return [
        'user_id' => App\User::all()->random()->id,
        'auction_id' => App\Auction::all()->random()->id,
        'amount' => $faker->numberBetween($min=50000, $max = 2000000)
    ];
});