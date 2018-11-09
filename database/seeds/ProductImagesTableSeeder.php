<?php

use Illuminate\Database\Seeder;
use App\ProductImages;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImages::create([
            'prod_id' => '1',
            'image' => 'product-shirt-01.jpg'
        ]);

        ProductImages::create([
            'prod_id' => '3',
            'image' => 'product-shirt-07.jpg'
        ]);

        ProductImages::create([
            'prod_id' => '2',
            'image' => 'product-shirt-07_1.jpg'
        ]);

        ProductImages::create([
            'prod_id' => '2',
            'image' => 'product-shirt-07_2.jpg'
        ]);

        ProductImages::create([
            'prod_id' => '3',
            'image' => 'product-shirt-03.jpg'
        ]);

        ProductImages::create([
            'prod_id' => '4',
            'image' => 'product-shirt-04.jpg'
        ]);

        ProductImages::create([
            'prod_id' => '5',
            'image' => 'product-shirt-02.jpg'
        ]);
    }
}
