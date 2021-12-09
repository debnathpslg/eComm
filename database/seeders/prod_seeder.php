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
            'name' => 'Oppo Mobile',
            'price' => '300',
            'category' => 'Mobile',
            'description' => 'A smartphone with 8Gb Ram and much more.',
            'gallery' => 'https://opsg-img-cdn-gl.heytapimg.com/epb/202105/20/NKRrMfP4jArloOQz.png',
        ]);
    }
}
