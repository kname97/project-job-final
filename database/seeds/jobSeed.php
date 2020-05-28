<?php

use Illuminate\Database\Seeder;
use App\Models\Jobs;

class jobSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        for($i = 0; $i< 100 ; $i++){
            Jobs::create([

            ]);
        }
    }
}
