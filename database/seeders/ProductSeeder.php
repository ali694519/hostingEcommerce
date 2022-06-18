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
                'name'=>'camera Fz 1000',
                'price'=>'450',
                'category'=>'camera',
                'description'=>'A samrtphone with 6gb ram and much more feature',
                'gallery'=>'https://media.karousell.com/media/photos/products/2021/9/17/panasonic_lumix_dmc_fz_1000_1631876023_13510f96_progressive.jpg'
            ],
            // [
            //     'name'=>'Panasonic tv',
            //     'price'=>'550',
            //     'category'=>'camera',
            //     'description'=>'A smart tv with  much more feature',
            //     'gallery'=>'https://media.istockphoto.com/photos/panasonic-lumix-dmc-fz1000-bridge-digital-camera-isolated-on-wh-picture-id474033600'
            // ],
            // [
            //     'name'=>'Sony tv',
            //     'price'=>'900',
            //     'category'=>'tv',
            //     'description'=>'A tv with much more feature',
            //     'gallery'=>'https://assetscdn1.paytm.com/images/catalog/product/L/LA/LARSONY-SMART-1ETAI35996EE26A088/0.jpg'
            // ],
            // [
            //     'name'=>'LG fridge',
            //     'price'=>'735',
            //     'category'=>'fridge',
            //     'description'=>'A fridge with much more feature',
            //     'gallery'=>'https://5.imimg.com/data5/SA/JZ/MX/SELLER-2694128/whirlpool-refrigerator-71229-500x500.jpg'
            // ],

        ]);
    }
}
