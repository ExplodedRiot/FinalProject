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
        DB::table('user')->insert([
            'name'=>'Adidas Lite Racer 2.0',
            "price"=>'399.000',
            "description"=>"123456",
            "category"=>"Adidas",
            "gallery"=>""
        ]);
    }
}
