<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();
	    $provinces = array(
            array('id' => 1,'code' => 'HCM','name' => "Hồ Chí Minh",'phonecode' => 28),
            array('id' => 2,'code' => 'HN' ,'name' => "Hà Nội",'phonecode' => 24),
            array('id' => 3,'code' => 'DN' ,'name' => "Đà Nẵng",'phonecode' => 236),
            array('id' => 4,'code' => 'HP','name' => "Hải Phòng",'phonecode' => 225),
            array('id' => 5,'code' => 'CT' ,'name' => "Cần Thơ",'phonecode' => 292),
            array('id' => 6,'code' => 'BHD' ,'name' => "Bình Dương",'phonecode' => 274),
            array('id' => 7,'code' => 'DGN' ,'name' => "Đồng Nai",'phonecode' => 251),
		    array('id' => 8,'code' => 'ANG' ,'name' => "An Giang",'phonecode' => 296),
            array('id' => 9,'code' => 'BRVT' ,'name' => "Bà Rịa – Vũng Tàu",'phonecode' => 254),
            array('id' => 10,'code' => 'BCC' ,'name' => "Bắc Cạn",'phonecode' => 296),
            array('id' => 11,'code' => 'BCG' ,'name' => "Bắc Giang",'phonecode' => 204),
            array('id' => 12,'code' => 'BCL' ,'name' => "Bạc Liêu",'phonecode' => 291),
            array('id' => 13,'code' => 'BCN' ,'name' => "Bắc Ninh",'phonecode' => 222),
            array('id' => 14,'code' => 'BNT' ,'name' => "Bến Tre",'phonecode' => 275),
            array('id' => 15,'code' => 'BHD' ,'name' => "Bình Định",'phonecode' => 256),            
            array('id' => 16,'code' => 'BHP' ,'name' => "Bình Phước",'phonecode' => 271),
            array('id' => 17,'code' => 'BHT' ,'name' => "Bình Thuận",'phonecode' => 252),
            array('id' => 18,'code' => 'CAM' ,'name' => "Cà Mau",'phonecode' => 290),            
            array('id' => 19,'code' => 'COB' ,'name' => "Cao Bằng",'phonecode' => 206),            
            array('id' => 20,'code' => 'DKL' ,'name' => "Đắk Lắk",'phonecode' => 262),
            array('id' => 21,'code' => 'DKN' ,'name' => "Đắk Nông",'phonecode' => 261),
            array('id' => 22,'code' => 'DNB' ,'name' => "Điện Biên",'phonecode' => 215),            
            array('id' => 23,'code' => 'DGT' ,'name' => "Đồng Tháp",'phonecode' => 277),
            array('id' => 24,'code' => 'GAL' ,'name' => "Gia Lai",'phonecode' => 269),
            array('id' => 25,'code' => 'HAG' ,'name' => "Hà Giang",'phonecode' => 219),
            array('id' => 26,'code' => 'HAN' ,'name' => "Hà Nam",'phonecode' => 226),            
            array('id' => 27,'code' => 'HAT' ,'name' => "Hà Tĩnh",'phonecode' => 239),
            array('id' => 28,'code' => 'HID','name' => "Hải Dương",'phonecode' => 220),            
            array('id' => 29,'code' => 'HUG','name' => "Hậu Giang",'phonecode' => 293),
            array('id' => 30,'code' => 'HAB','name' => "Hòa Bình",'phonecode' => 218),            
            array('id' => 31,'code' => 'HGY','name' => "Hưng Yên",'phonecode' => 221),
            array('id' => 32,'code' => 'KHH','name' => "Khánh Hoà",'phonecode' => 258),
            array('id' => 33,'code' => 'KNG','name' => "Kiên Giang",'phonecode' => 297),
            array('id' => 34,'code' => 'KNT','name' => "Kon Tum",'phonecode' => 260),
            array('id' => 35,'code' => 'LIC','name' => "Lai Châu",'phonecode' => 213),
            array('id' => 36,'code' => 'LMD','name' => "Lâm Đồng",'phonecode' => 263),
            array('id' => 37,'code' => 'LGS','name' => "Lạng Sơn",'phonecode' => 205),
            array('id' => 38,'code' => 'LOC','name' => "Lào Cai",'phonecode' => 214),
            array('id' => 39,'code' => 'LGA','name' => "Long An",'phonecode' => 272),
            array('id' => 40,'code' => 'NMD','name' => "Nam Định",'phonecode' => 228),
            array('id' => 41,'code' => 'NEA','name' => "Nghệ An",'phonecode' => 238),
            array('id' => 42,'code' => 'NHT','name' => "Ninh Thuận",'phonecode' => 259),
            array('id' => 43,'code' => 'NHB','name' => "Ninh Bình",'phonecode' => 229),
            array('id' => 44,'code' => 'PUT','name' => "Phú Thọ",'phonecode' => 210),
            array('id' => 45,'code' => 'PUY','name' => "Phú Yên",'phonecode' => 257),
            array('id' => 46,'code' => 'QGBI','name' => "Quảng Bình",'phonecode' => 232),
            array('id' => 47,'code' => 'QGNA','name' => "Quảng Nam",'phonecode' => 235),
            array('id' => 48,'code' => 'QGNG','name' => "Quảng Ngãi",'phonecode' => 255),
            array('id' => 49,'code' => 'QGNI','name' => "Quảng Ninh",'phonecode' => 203),
            array('id' => 50,'code' => 'QGTR','name' => "Quảng Trị",'phonecode' => 233),
            array('id' => 51,'code' => 'SCT','name' => "Sóc Trăng",'phonecode' => 299),
            array('id' => 52,'code' => 'SNL','name' => "Sơn La",'phonecode' => 212),
            array('id' => 53,'code' => 'TYN','name' => "Tây Ninh",'phonecode' => 276),
            array('id' => 54,'code' => 'TIB','name' => "Thái Bình",'phonecode' => 227),
            array('id' => 55,'code' => 'TIN','name' => "Thái Nguyên",'phonecode' => 208),
            array('id' => 56,'code' => 'THH','name' => "Thanh Hóa",'phonecode' => 237),
            array('id' => 57,'code' => 'TTH','name' => "Thừa Thiên – Huế",'phonecode' => 234),
            array('id' => 58,'code' => 'TNG','name' => "Tiền Giang",'phonecode' => 273),
            array('id' => 59,'code' => 'TAV','name' => "Trà Vinh",'phonecode' => 294),
            array('id' => 60,'code' => 'TNQ','name' => "Tuyên Quang",'phonecode' => 207),
            array('id' => 61,'code' => 'VHL','name' => "Vĩnh Long",'phonecode' => 270),
            array('id' => 62,'code' => 'VHP','name' => "Vĩnh Phúc",'phonecode' => 211),
            array('id' => 63,'code' => 'YNB','name' => "Yên Bái",'phonecode' => 216),
            
		);
		DB::table('provinces')->insert($provinces);
    }
}
