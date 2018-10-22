<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        for($i=0;$i<10;$i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'password' => $faker->password,

            ]);
        }
    }
}
