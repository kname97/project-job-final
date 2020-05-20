<?php

use Illuminate\Database\Seeder;

class userSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [

                'username' =>"employer",
                'email'    => 'employer@gmail.com',
                'password' => bcrypt('123456'),
                'level'    => '2',
            ],
        ];
        DB::table('users')->insert($data);
    }
}
