<?php

use Illuminate\Database\Seeder;
use App\ProductAttributes;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttributes::create([
            'name' => 'color'
        ]);

        ProductAttributes::create([
            'name' => 'size'
        ]);

    }
}
