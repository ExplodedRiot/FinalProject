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
        DB::table('Products')->insert([
            [
            'name'=>'Converse CTAS Cheerful Faded Spruce',
            "price"=>'459.000',
            "description"=>"123456",
            "category"=>"Converse",
            "gallery"=>"FinalProject\img\Converse\Converse CTAS cheerful faded spruce (IDR 459k).jpg"
            ],
            [
            'name'=>'Nike Air Force 1 LE',
            "price"=>'819.000',
            "description"=>"123456",
            "category"=>"Nike",
            "gallery"=>"FinalProject\img\Adidas\Nike Air Force 1 LE.jpg"
            ],
            [
            'name'=>'Vans Era Gum Green',
            "price"=>'499.000',
            "description"=>"123456",
            "category"=>"Vans",
            "gallery"=>"FinalProject\img\Vans\Vans era gum green (IDR 499k).jpg"
            ]
        ]);
    }
}
