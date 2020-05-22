<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class hhhh extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();
        for($i = 0; $i < 100; $i++) {
            App\User::create([
                'username' => $faker->userName,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => bcrypt(Str::random(10)), // password
                'level' => rand(1, 2),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
