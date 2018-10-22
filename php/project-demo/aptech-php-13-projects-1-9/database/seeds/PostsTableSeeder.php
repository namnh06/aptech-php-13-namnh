<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Factory as Faker;

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
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true)
        ]);
    }
}


