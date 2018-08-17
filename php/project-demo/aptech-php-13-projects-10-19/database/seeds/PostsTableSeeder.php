<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        Post::create([
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'slug' => $faker->slug,
            'description' => $faker->text($maxNbChars = 200),
            'content' => $faker->randomHtml(2, 3),
            'img_path' => $faker->imageUrl($width = 800, $height = 400, 'cats')
        ]);
    }
}
