<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Flight;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Flight::create([
            'name' => $faker->name,
            'email' => $faker->safeEmail,
            'password' => $faker->password
        ]);
    }
}
