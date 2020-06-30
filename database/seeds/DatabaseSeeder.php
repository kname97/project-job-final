<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(hhhh::class);
        $this->call(usersSeeder::class);
        $this->call(usersSeeder1::class);
        $this->call(userSeeder2::class);
        $this->call(categoryJob::class);
        $this->call(LocationSeeder::class);
    }
}
