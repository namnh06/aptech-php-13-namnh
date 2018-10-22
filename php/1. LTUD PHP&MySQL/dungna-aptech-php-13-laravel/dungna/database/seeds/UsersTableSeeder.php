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
        //
        $Faker = Faker::create();
        User::create([
            'name'=>$Faker->name($gender = null|'male'|'female'),
            'email'=>$Faker->email(),
            'password'=>$Faker->password()
        ]);
    }
}
