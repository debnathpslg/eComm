<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prod_seeder extends Seeder
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
                'name' => 'LG Mobile',
                'price' => '200',
                'category' => 'Mobile',
                'description' => 'Some Description.',
                'gallery' => 'lg-m.png',
            ],
            [
                'name' => 'Sony Television',
                'price' => '300',
                'category' => 'Television',
                'description' => 'Some Description.',
                'gallery' => 'sony-tv.png',
            ],
            [
                'name' => 'Samsung Refridgerator',
                'price' => '400',
                'category' => 'Refridgerator',
                'description' => 'Some Description.',
                'gallery' => 'samsung-r.png',
            ],
            [
                'name' => 'IFB Washing Machine',
                'price' => '500',
                'category' => 'Washing Machine',
                'description' => 'Some Description.',
                'gallery' => 'ifb-wm.png',
            ],
            [
                'name' => 'HP Laptop',
                'price' => '600',
                'category' => 'Computer',
                'description' => 'Some Description.',
                'gallery' => 'hp-l.png',
            ]
        ]);
    }
}
