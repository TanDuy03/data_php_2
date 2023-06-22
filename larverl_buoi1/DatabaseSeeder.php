<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'ho' => 'Đỗ Đạt','ten' => 'Cao', 'matkhau' => bcrypt('hehe') , 'diachi'=>'',
            'email' => 'dodatcao@gmail.com','dienthoai' => '0918765238',
            'hinh' => '','vaitro' => 1 ,'trangthai' => 0
        ]);
        DB::table('users')->insert([
            'ho' => 'Mai Anh','ten' => 'Tới', 'matkhau' => bcrypt('hehe') ,'diachi'=>'',
            'email' => 'maianhtoi@gmail.com','dienthoai' => '098532482',
            'hinh' => '','vaitro' => 0 ,'trangthai' => 0
        ]);
        DB::table('users')->insert([
            'ho' => 'Đào Kho','ten' => 'Báu', 'matkhau' => bcrypt('hehe') ,'diachi'=>'',
            'email' => 'daokhobau@gmail.com','dienthoai' => '097397392',
            'hinh' => '','vaitro' => 1 ,'trangthai' => 1
        ]);

        $nsx = ['Asus', 'Acer','Lenovo','MSI','HP','Dell','Apple','Surface','Masstel','LG','CHUWI','itel'];
        for ($i=0; $i<count($nsx); $i++){
            DB::table('loai')->insert([               
                'ten_loai' => $nsx[$i], 
                'thutu' => $i ,
                'anhien' => 1
            ]);
        };
        
       $lt2 = [
        'Gaming ROG Strix','Nitro 5 Gaming','Ideapad Gaming 3','Gaming GF63 Thin','Gaming G15','MacBook Pro','Pro 9','E140','E116','gram 2023','CoreBook','LarkBook','ABLE','Spirit','ROG Strix','Vivobook','Zenbook','Pavilion'
        ];
        $lt3 = [
            'G15 G513IH','AN515 45 R6EV','15IHU6','11SC','Gaming VICTUS','fa0111TX i5','5511  11400H','M2 2022','1255U','N4120','N4020','1360P','X 8259U','X N5100','1S N4020','1155G7','G15 G513IH','15 X1502ZA i5','14 OLED UX3402ZA','15 eg2082TU'
        ];
        $hinh =[
            'https://cdn.tgdd.vn/Products/Images/44/270031/asus-rog-strix-gaming-g513ih-r7-hn015w-2-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/263980/Slider/vi-vn-acer-nitro-5-gaming-an515-45-r6ev-r5-nhqbmsv006-4.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/302226/lenovo-ideapad-gaming-3-15ihu6-i5-82k101f3vn-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/302486/hp-victus-15-fa0111tx-i5-7c0r4pa-glr-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/264354/dell-gaming-g15-5511-i5-70266676-1-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/282828/apple-macbook-pro-13-inch-m2-2022-231122-041529.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/302951/masstel-e140-n4120-glr-2.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/302950/masstel-e116-n4020-glr-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/306795/lg-gram-2023-i7-17z90rgah78a5-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/270142/chuwi-corebook-x-i5-8259u-1-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/270141/chuwi-larkbook-x-n5100-2-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/265523/itel-able-1s-n4020-71006300027-1-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/300000/itel-spirit-2-i5-71006300202-3.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/270031/asus-rog-strix-gaming-g513ih-r7-hn015w-2-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/281483/asus-vivobook-15-x1502za-i5-ej120w-1-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/284258/asus-zenbook-14-oled-ux3402za-i5-km218w-a-1.jpg',
            'https://cdn.tgdd.vn/Products/Images/44/302533/hp-pavilion-15-eg2082tu-i5-7c0q5pa-1.jpg'
        ];
        for ($i=1; $i<=5000; $i++){
            $gia = mt_rand(5000000, 30000000);
            $giakm = $gia - mt_rand(1000000, 5000000);
            $tinhchat =0 ;// 0 bình thường, 1 giá rẻ, 2 giảm sốc, 3 cao cấp
            if ($gia>=28000000) $tinhchat = 3;  //cao cấp
            else if ($gia - $giakm >=3000000) $tinhchat = 2; //giảm sốc
            else if ($gia<=6000000) $tinhchat = 1;//giá rẻ
            else $tinhchat = 0; //bình thường
            $randtime = mt_rand(2022,2023).'-'. mt_rand(1,12) .'-'. mt_rand(1,28) ." 23:59:59";
            $id_sp = DB::table('sanpham')->insertGetId([
                'ten_sp' => Arr::random($nsx) . ' '. Arr::random($lt2) . ' '. Arr::random($lt3) ,
                'hinh' => Arr::random($hinh) ,
                'gia' =>$gia,
                'gia_km' => $giakm,
                'id_loai' => Arr::random([1,2,3,4,5,6,7,8,9,10,11,12]),
                'hot'=> (Arr::random([0,1,2,3,4,5,6,7,8,9,10]) %3==0)?1:0,
                'ngay' => $randtime ,
                'anhien'=>1,
                'soluotxem'=> mt_rand(0, 1000),
                'tinhchat'=> $tinhchat
            ]);
            DB::table('sanphamchitiet')->insert([
                'id_sp' => $id_sp ,
                'RAM' => Arr::random(['4GB', '8GB', '16GB','32GB']) ,
                'CPU' =>Arr::random(['i3', 'i5', 'i7']),
                'Dia' => Arr::random(['256GB', '512GB', '1TB']),
                'Mausac' => Arr::random(['Đen', 'Xám', 'Trắng','Bạc','Đỏ']),
                'Cannang'=> Arr::random(['1.0','1.2', '1.4', '1.6','1.8','2.0','2.3','2.5'])
            ]);

        }
    }
}
