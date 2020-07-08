<?php

use Illuminate\Database\Seeder;
use App\Models\jobs;
use App\Models\jobcategories;
use Carbon\Carbon;
class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $items = Array('Toàn thời gian','Bán thời gian','Thực tập','Freelancer');
        $cateJobs = jobcategories::all();
        $citys = ['Đà Nẵng','Hồ Chí Minh','Hà Nội'];

        for($i = 0; $i < 10; $i++) {
           jobs::create([
               'title' => $faker->jobTitle,
               'jobtype' =>  $items[array_rand($items)] ,
               'jobcategory' => $cateJobs[$i]->name ,
               'minsalary'=> rand(20000,50000),
               'maxsalary'=>rand(50000,70000),
               'negotiable'=> NULL,
               'desciption'=>$faker->paragraph,
               'position' => 'Giám đốc',
               'exp'=> rand(0,5),
               'startdate'=>  $faker->dateTimeBetween('now','+2 days','Asia/Ho_Chi_Minh'),
               'enddate' =>  $faker->dateTimeBetween('now','+2 weeks','Asia/Ho_Chi_Minh'),
               'area' => $citys[array_rand($citys)],
               'amount' => rand(10,20),
               'email' => $faker->companyEmail,
               'phone' => $faker->phoneNumber,
               'address' => $faker->address,
               'status' =>rand(0,1),
               'user_id' => '11',
//               'created_at'=>$faker->dateTime('now','Asia/Ho_Chi_Minh'),
//                'updated_at'=>$faker->dateTime('now','Asia/Ho_Chi_Minh')
            ]);
        }
    }
}
