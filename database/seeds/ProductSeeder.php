<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Oppo mobile',
                'price' => '300',
                'description' => 'A smartphone with 8gb ram and much more features',
                'category' => 'mobile',
                'gallery' => 'https://5.imimg.com/data5/SELLER/Default/2021/1/HK/LE/LL/1073409/oppo-mobile-a9-2020-500x500.jpg'
            ],
            [
                'name' => 'Panasonic Tv',
                'price' => '400',
                'description' => 'A smart tv with much more features',
                'category' => 'tv',
                'gallery' => 'https://streamtelly.com/wp-content/uploads/2021/01/Change-DNS-Settings-On-Panasonic-Viera-Smart-TV.jpg'
            ],
            [
                'name' => 'Soni Tv',
                'price' => '500',
                'description' => 'A tv with much more features',
                'category' => 'tv',
                'gallery' => 'https://cdn.alzashop.com/ImgW.ashx?fd=f16&cd=WS1018j'
            ],
            [
                'name' => 'LG fridge',
                'price' => '250',
                'description' => 'A fridge with much more features',
                'category' => 'fridge',
                'gallery' => 'https://www.corbeilelectro.com/media/catalog/product/l/r/lrfvs3006-2.jpg?optimize=medium&bg-color=255,255,255&fit=bounds'
            ],

        ]);
    }
}
