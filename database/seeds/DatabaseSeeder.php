<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            //seed all seeders
            // ProductsTableSeeder::class,
            // ProductImagesTableSeeder::class,
            // AttributesTableSeeder::class,
            // ProductAttributesTableSeeder::class, 
            ProductReviewsTableSeeder::class,
         ]);
    }
}
