<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
      for ($x = 0; $x <= 5; $x++) {
        $faker = Faker::create();
        User::create([
          'name' => $faker->name,
          'email' => $faker->safeEmail,
          'password' => $faker->password
        ]);
      }
    }
}
