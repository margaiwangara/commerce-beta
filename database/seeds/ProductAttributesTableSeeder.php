<?php

use Illuminate\Database\Seeder;
use App\ProductsAndAttributes;

class ProductAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductsAndAttributes::create([
            'prod_id' => '1',
            'attr_id' => '1',
            'attr_value' => 'red'
        ]);

        ProductsAndAttributes::create([
            'prod_id' => '1',
            'attr_id' => '2',
            'attr_value' => 'Small'
        ]);

        ProductsAndAttributes::create([
            'prod_id' => '2',
            'attr_id' => '1',
            'attr_value' => 'black'
        ]);

        ProductsAndAttributes::create([
            'prod_id' => '2',
            'attr_id' => '2',
            'attr_value' => 'Large'
        ]);

        ProductsAndAttributes::create([
            'prod_id' => '3',
            'attr_id' => '1',
            'attr_value' => 'white'
        ]);

        ProductsAndAttributes::create([
            'prod_id' => '3',
            'attr_id' => '2',
            'attr_value' => 'XLarge'
        ]);
    }
}
