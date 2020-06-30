<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["id"=>"01" ,"city" => "Hà Nội"],

            ["id"=>"79" ,"city" => "Hồ Chí Minh"],
//
//            ["id"=>"02" ,"city" => "Hà Giang"],
//
//            ["id"=>"04" ,"city" => "Cao Bằng"],
//
//            ["id"=>"06" ,"city" => "Bắc Kạn"],
//
//            ["id"=>"08" ,"city" => "Tuyên Quang"],
//
//            ["id"=>"10" ,"city" => "Lào Cai"],
//
//            ["id"=>"11" ,"city" => "Điện Biên"],
//
//            ["id"=>"12" ,"city" => "Lai Châu"],
//
//            ["id"=>"14" ,"city" => "Sơn La"],
//
//            ["id"=>"15" ,"city" => "Yên Bái"],
//
//            ["id"=>"17" ,"city" => "Hoà Bình"],
//
//            ["id"=>"19" ,"city" => "Thái Nguyên"],
//
//            ["id"=>"20" ,"city" => "Lạng Sơn"],
//
//            ["id"=>"22" ,"city" => "Quảng Ninh"],
//
//            ["id"=>"24" ,"city" => "Bắc Giang"],
//
//            ["id"=>"25" ,"city" => "Phú Thọ"],
//
//            ["id"=>"26" ,"city" => "Vĩnh Phúc"],
//
//            ["id"=>"27" ,"city" => "Bắc Ninh"],
//
//            ["id"=>"30" ,"city" => "Hải Dương"],
//
//            ["id"=>"31" ,"city" => "Hải Phòng"],
//
//            ["id"=>"33" ,"city" => "Hưng Yên"],
//
//            ["id"=>"34" ,"city" => "Thái Bình"],
//
//            ["id"=>"35" ,"city" => "Hà Nam"],
//
//            ["id"=>"36" ,"city" => "Nam Định"],
//
//            ["id"=>"37" ,"city" => "Ninh Bình"],
//
//            ["id"=>"38" ,"city" => "Thanh Hóa"],
//
//            ["id"=>"40" ,"city" => "Nghệ An"],
//
//            ["id"=>"42" ,"city" => "Hà Tĩnh"],
//
//            ["id"=>"44" ,"city" => "Quảng Bình"],
//
//            ["id"=>"45" ,"city" => "Quảng Trị"],
//
//            ["id"=>"46" ,"city" => "Thừa Thiên Huế"],
//
            ["id"=>"48" ,"city" => "Đà Nẵng"],
//
//            ["id"=>"49" ,"city" => "Quảng Nam"],
//
//            ["id"=>"51" ,"city" => "Quảng Ngãi"],
//
//            ["id"=>"52" ,"city" => "Bình Định"],
//
//            ["id"=>"54" ,"city" => "Phú Yên"],
//
//            ["id"=>"56" ,"city" => "Khánh Hòa"],
//
//            ["id"=>"58" ,"city" => "Ninh Thuận"],
//
//            ["id"=>"60" ,"city" => "Bình Thuận"],
//
//            ["id"=>"62" ,"city" => "Kon Tum"],
//
//            ["id"=>"64" ,"city" => "Gia Lai"],
//
//            ["id"=>"66" ,"city" => "Đắk Lắk"],
//
//            ["id"=>"67" ,"city" => "Đắk Nông"],
//
//            ["id"=>"68" ,"city" => "Lâm Đồng"],
//
//            ["id"=>"70" ,"city" => "Bình Phước"],
//
//            ["id"=>"72" ,"city" => "Tây Ninh"],
//
//            ["id"=>"74" ,"city" => "Bình Dương"],
//
//            ["id"=>"75" ,"city" => "Đồng Nai"],
//
//            ["id"=>"77" ,"city" => "Bà Rịa - Vũng Tàu"],
//
//            ["id"=>"80" ,"city" => "Long An"],
//
//            ["id"=>"82" ,"city" => "Tiền Giang"],
//
//            ["id"=>"83" ,"city" => "Bến Tre"],
//
//            ["id"=>"84" ,"city" => "Trà Vinh"],
//
//            ["id"=>"86" ,"city" => "Vĩnh Long"],
//
//            ["id"=>"87" ,"city" => "Đồng Tháp"],
//
//            ["id"=>"89" ,"city" => "An Giang"],
//
//            ["id"=>"91" ,"city" => "Kiên Giang"],
//
//            ["id"=>"92" ,"city" => "Cần Thơ"],
//
//            ["id"=>"93" ,"city" => "Hậu Giang"],
//
//            ["id"=>"94" ,"city" => "Sóc Trăng"],
//
//            ["id"=>"95" ,"city" => "Bạc Liêu"],
//
//            ["id"=>"96" ,"city" => "Cà Mau"],

        ];
        DB::table('locations')->insert($data);
    }
}
