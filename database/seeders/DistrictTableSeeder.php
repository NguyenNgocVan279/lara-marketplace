<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->delete();
	    $districts = array(
		    array('name' => "Quận 1",'province_id' => 1),
            array('name' => "Quận 2",'province_id' => 1),
            array('name' => "Quận 3",'province_id' => 1),
            array('name' => "Quận 4",'province_id' => 1),
            array('name' => "Quận 5",'province_id' => 1),
            array('name' => "Quận 6",'province_id' => 1),
            array('name' => "Quận 7",'province_id' => 1),
            array('name' => "Quận 8",'province_id' => 1),
            array('name' => "Quận 9",'province_id' => 1),
            array('name' => "Quận 10",'province_id' => 1),
            array('name' => "Quận 11",'province_id' => 1),
            array('name' => "Quận 12",'province_id' => 1),
            array('name' => "Bình Tân",'province_id' => 1),
            array('name' => "Bình Thạnh",'province_id' => 1),
            array('name' => "Gò Vấp",'province_id' => 1),
            array('name' => "Phú Nhuận",'province_id' => 1),
            array('name' => "Tân Bình",'province_id' => 1),
            array('name' => "Tân Phú",'province_id' => 1),
            array('name' => "Thủ Đức",'province_id' => 1),
            array('name' => "Bình Chánh",'province_id' => 1),
            array('name' => "Cần Giờ",'province_id' => 1),
            array('name' => "Củ Chi",'province_id' => 1),
            array('name' => "Hóc Môn",'province_id' => 1),
            array('name' => "Nhà Bè",'province_id' => 1),

            array('name' => "Ba Đình",'province_id' => 2),
            array('name' => "Bắc Từ Liêm",'province_id' => 2),
            array('name' => "Cầu Giấy",'province_id' => 2),
            array('name' => "Đống Đa",'province_id' => 2),
            array('name' => "Hà Đông",'province_id' => 2),
            array('name' => "Hai Bà Trưng",'province_id' => 2),
            array('name' => "Hoàn Kiếm",'province_id' => 2),
            array('name' => "Hoàng Mai",'province_id' => 2),
            array('name' => "Long Biên",'province_id' => 2),
            array('name' => "Nam Từ Liêm",'province_id' => 2),
            array('name' => "Tây Hồ",'province_id' => 2),
            array('name' => "Thanh Xuân",'province_id' => 2),
            array('name' => "Sơn Tây",'province_id' => 2),
            array('name' => "Ba Vì",'province_id' => 2),
            array('name' => "Chương Mỹ",'province_id' => 2),
            array('name' => "Đan Phượng",'province_id' => 2),
            array('name' => "Đông Anh",'province_id' => 2),
            array('name' => "Gia Lâm",'province_id' => 2),
            array('name' => "Hoài Đức",'province_id' => 2),
            array('name' => "Mê Linh",'province_id' => 2),
            array('name' => "Mỹ Đức",'province_id' => 2),
            array('name' => "Phú Xuyên",'province_id' => 2),
            array('name' => "Phúc Thọ",'province_id' => 2),
            array('name' => "Quốc Oai",'province_id' => 2),
            array('name' => "Sóc Sơn",'province_id' => 2),
            array('name' => "Thạch Thất",'province_id' => 2),
            array('name' => "Thanh Oai",'province_id' => 2),
            array('name' => "Thanh Trì",'province_id' => 2),
            array('name' => "Thường Tín",'province_id' => 2),
            array('name' => "Ứng Hoà",'province_id' => 2),


		);
		DB::table('districts')->insert($districts);
    }
}
