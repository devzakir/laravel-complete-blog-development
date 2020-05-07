<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

// Category factory
$factory->define(Category::class, function(Faker $faker){
    return [
        'name' => $faker->name(),
        'slug' => Str::slug($faker->name()),
    ];
});


// Tag factory
$factory->define(Tag::class, function(Faker $faker){
    return [
        'name' => $faker->word(),
        'slug' => Str::slug($faker->word()),
    ];
});


// Post factory
$factory->define(Post::class, function(Faker $faker){
    $id = rand(30, 300);
    $image = "https://i.picsum.photos/id/".$id."/640/480.jpg";
    return [
        'title' => $faker->sentence(),
        'slug' => Str::slug($faker->sentence()),
        'image' => $image,
        'description' => $faker->text(400),
        'category_id' => function(){
            return Category::inRandomOrder()->first()->id;
        },
        'user_id' => 1,
    ];
});
