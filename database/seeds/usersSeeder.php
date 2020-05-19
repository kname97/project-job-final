<?php

use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
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
                'username' =>"admin",
                'email'    => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'level'    => '0',

            ],
        ];
        DB::table('users')->insert($data);
    }
}
