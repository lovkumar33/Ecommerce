<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'oppo mobile',
                'price'=>'300',
                'description'=>'A smartphone with 4gb ram and much more features',
                'category'=>'mobile',
                'gallery'=>'https://n4.sdlcdn.com/imgs/i/1/l/Oppo-A5-2020-64GB-4-SDL344663750-1-bd198.png',
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'500',
                'description'=>'A smartTV with much more features',
                'category'=>'tv',
                'gallery'=>'https://5.imimg.com/data5/FL/JI/KP/SELLER-7054459/panasonic-tv-500x500.jpeg',
            ],
            [
                'name'=>'Soni tv',
                'price'=>'600',
                'description'=>'A tv with much more features',
                'category'=>'tv',
                'gallery'=>'https://static.digit.in/product/c670aed382afabbe52c391acd8334d7632b6b8e5.jpeg?tr=1200',
            ],
            [
                'name'=>'LG fridge',
                'price'=>'300',
                'description'=>'A fridge much more features',
                'category'=>'fridge',
                'gallery'=>'https://5.imimg.com/data5/BP/GS/HS/SELLER-53232084/lg-refrigerator-d191-ksow-195-ltr-500x500.jpg',
            ]
        ]);
    }
}
