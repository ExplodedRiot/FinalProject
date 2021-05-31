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
            'name'=>'CTAS Hi Camo Patch',
            "price"=>'449.000',
            "description"=>"123456",
            "category"=>"Converse",
            "gallery"=>"FinalProject\img\Converse\CTAS Hi Camo Patch (IDR 449k).jpg"
            ],
            [
            'name'=>'Nike Air Max 90 LTR',
            "price"=>'1.299.000',
            "description"=>"123456",
            "category"=>"Nike",
            "gallery"=>"FinalProject\img\Nike\Nike Air Max 90 LTR.jpg"
            ],
            [
            'name'=>'Vans Authentic Stich Checkers Blue Mirage',
            "price"=>'849.000',
            "description"=>"123456",
            "category"=>"Vans",
            "gallery"=>"FinalProject\img\Vans\Vans authentic stich checkers blue mirage (IDR 849k).jpg"
            ],
            [
            'name'=>'Adidas Samba OG Classic',
            "price"=>'799.000',
            "description"=>"123456",
            "category"=>"Adidas",
            "gallery"=>"FinalProject\img\Adidas\Adidas samba OG Classic (IDR 799k).jpg"
            ]
        ]);
    }
}
