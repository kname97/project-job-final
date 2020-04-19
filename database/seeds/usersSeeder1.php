<?php

use Illuminate\Database\Seeder;

class usersSeeder1 extends Seeder
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
               
                'username' =>"user",
                'email'    => 'user@gmail.com',
                'password' => bcrypt('123456'),
                'level'    => '1',
                
            ],
        ];
        DB::table('users')->insert($data);
    }
}
