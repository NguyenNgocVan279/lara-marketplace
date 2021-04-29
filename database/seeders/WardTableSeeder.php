<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wards')->delete();
        $wards = array(
            array('name' => "Bến Nghé",'district_id' => 1),
            array('name' => "Bến Thành",'district_id' => 1),
            array('name' => "Cô Giang",'district_id' => 1),
            array('name' => "Cầu Kho",'district_id' => 1),
            array('name' => "Cầu Ông Lãnh",'district_id' => 1),
            array('name' => "Đa Kao",'district_id' => 1),
            array('name' => "Nguyễn Cư Trinh",'district_id' => 1),
            array('name' => "Nguyễn Thái Bình",'district_id' => 1),
            array('name' => "Phạm Ngũ Lão",'district_id' => 1),
            array('name' => "Tân Định",'district_id' => 1),

            array('name' => "An Phú",'district_id' => 2),
            array('name' => "Thảo Điền",'district_id' => 2),
            array('name' => "An Khánh",'district_id' => 2),
            array('name' => "Bình Khánh",'district_id' => 2),
            array('name' => "Bình An",'district_id' => 2),
            array('name' => "Thủ Thiêm",'district_id' => 2),
            array('name' => "An Lợi Đông",'district_id' => 2),
            array('name' => "Bình Trưng Tây",'district_id' => 2),
            array('name' => "Bình Trưng Đông",'district_id' => 2),
            array('name' => "Cát Lái",'district_id' => 2),
            array('name' => "Thạnh Mỹ Lợi",'district_id' => 2),
            
            array('name' => "Chương Dương",'district_id' => 31),
            array('name' => "Cửa Đông",'district_id' => 31),
            array('name' => "Cửa Nam",'district_id' => 31),
            array('name' => "Đồng Xuân",'district_id' => 31),
            array('name' => "Hàng Bạc",'district_id' => 31),
            array('name' => "Hàng Bài",'district_id' => 31),
            array('name' => "Hàng Bồ",'district_id' => 31),
            array('name' => "Hàng Bông",'district_id' => 31),
            array('name' => "Hàng Buồm",'district_id' => 31),
            array('name' => "Hàng Đào",'district_id' => 31),
            array('name' => "Hàng Gai",'district_id' => 31),
            array('name' => "Hàng Mã",'district_id' => 31),
            array('name' => "Hàng Trống",'district_id' => 31),
            array('name' => "Lý Thái Tổ",'district_id' => 31),
            array('name' => "Phan Chu Trinh",'district_id' => 31),
            array('name' => "Phúc Tân",'district_id' => 31),
            array('name' => "Trần Hưng Đạo",'district_id' => 31),
            array('name' => "Tràng Tiền",'district_id' => 31),
            
		);
        DB::table('wards')->insert($wards);
            
    }
}
