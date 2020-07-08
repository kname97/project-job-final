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
//        $this->call(hhhh::class);
        $this->call(usersSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(categoryJob::class);
    }
}
