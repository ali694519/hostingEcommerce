<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productseeder extends Seeder
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
                'name'=>'iphone 5s mobile',
                'price'=>'299',
                'category'=>'mobile',
                'description'=>'A samrtphone with 2gb ram and much more feature',
                'gallery'=>'https://support.apple.com/library/APPLE/APPLECARE_ALLGEOS/SP685/SP685-color_black.jpg'
            ],
            [
                'name'=>'OPPO mobile',
                'price'=>'300',
                'category'=>'mobile',
                'description'=>'A samrtphone with 8gb ram and much more feature',
                'gallery'=>'https://5.imimg.com/data5/WG/ZM/TG/ANDROID-98089178/product-jpeg-500x500.jpg'
            ],
            [
                'name'=>'LG mobile',
                'price'=>'399',
                'category'=>'mobile',
                'description'=>'A samrtphone with 4gb ram and much more feature',
                'gallery'=>'https://www.notebookcheck.net/fileadmin/_processed_/csm_Intro_862d7b0f2b.jpg'
            ],
            [
                'name'=>'Panasonic tv',
                'price'=>'400',
                'category'=>'tv',
                'description'=>'A smart tv with  much more feature',
                'gallery'=>'https://static.toiimg.com/thumb/resizemode-4,msid-71755420,imgsize-200,width-1200/71755420.jpg'
            ],
            [
                'name'=>'Sony tv',
                'price'=>'600',
                'category'=>'tv',
                'description'=>'A tv with much more feature',
                'gallery'=>'https://www.itechguides.com/wp-content/uploads/2020/07/Best-Sony-Bravia-TV.jpg'
            ],
            [
                'name'=>'LG fridge',
                'price'=>'700',
                'category'=>'fridge',
                'description'=>'A fridge with much more feature',
                'gallery'=>'https://www.lg.com/au/images/fridges/md07539687/gallery/GF-V910MBLC-D-01.jpg'
            ],
            [
                'name'=>'camera Fz 1000',
                'price'=>'450',
                'category'=>'camera',
                'description'=>'A samrtphone with 6gb ram and much more feature',
                'gallery'=>'https://media.karousell.com/media/photos/products/2021/9/17/panasonic_lumix_dmc_fz_1000_1631876023_13510f96_progressive.jpg'
            ],
            [
                'name'=>'Panasonic tv',
                'price'=>'550',
                'category'=>'camera',
                'description'=>'A smart tv with  much more feature',
                'gallery'=>'https://media.istockphoto.com/photos/panasonic-lumix-dmc-fz1000-bridge-digital-camera-isolated-on-wh-picture-id474033600'
            ],
            [
                'name'=>'Sony tv',
                'price'=>'900',
                'category'=>'tv',
                'description'=>'A tv with much more feature',
                'gallery'=>'https://assetscdn1.paytm.com/images/catalog/product/L/LA/LARSONY-SMART-1ETAI35996EE26A088/0.jpg'
            ],
            [
                'name'=>'LG fridge',
                'price'=>'735',
                'category'=>'fridge',
                'description'=>'A fridge with much more feature',
                'gallery'=>'https://5.imimg.com/data5/SA/JZ/MX/SELLER-2694128/whirlpool-refrigerator-71229-500x500.jpg'
            ],

        ]);
    }
}
