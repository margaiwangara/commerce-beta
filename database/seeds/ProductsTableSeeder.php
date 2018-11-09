<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*

            
        * */
        Products::create([
            'name' => 'Dickies Short Sleeve Work Shirt Stain & Wrinkle Resistant',
            'description' => 'Long Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '1',
            'category' => 'men',
            'price' => '1000.00'
        ]);

        Products::create([
            'name' => 'Wrangler Authentics Long Sleeve Plaid Fleece Shirt Jacket',
            'description' => 'Long Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '1',
            'category' => 'men',
            'price' => '3500.00'
        ]);

        Products::create([
            'name' => 'Alex Vando Mens Dress Shirts Regular Fit Long Sleeve Men Shirt',
            'description' => 'Long Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '1',
            'category' => 'men',
            'price' => '1800.00'
        ]);

        Products::create([
            'name' => 'G.H. Bass & Co. Long Sleeve Fireside Plaid Flannel Shirt',
            'description' => 'Long Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '1',
            'category' => 'men',
            'price' => '5000.00'
        ]);

        Products::create([
            'name' => 'Amazon Essentials Regular-Fit Long-Sleeve Plaid Shirt',
            'description' => 'Long Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '1',
            'category' => 'men',
            'price' => '3000.00'
        ]);

        Products::create([
            'name' => 'G.H. Bass & Co. Short Sleeve Fireside Plaid Flannel Shirt',
            'description' => 'Short Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '0',
            'category' => 'men',
            'price' => '1200.00'
        ]);

        Products::create([
            'name' => 'Wrangler Authentics Short Sleeve Plaid Fleece Shirt Jacket',
            'description' => 'Short Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '1',
            'category' => 'men',
            'price' => '1200.00'
        ]);

        Products::create([
            'name' => 'Goodthreads Standard-Fit Long-Sleeve Solid Oxford Shirt',
            'description' => 'Long Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '1',
            'category' => 'men',
            'price' => '1200.00'
        ]);

        Products::create([
            'name' => 'Goodthreads Standard-Fit Long-Sleeve Solid Oxford Shirt',
            'description' => 'Long Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '0',
            'category' => 'men',
            'price' => '1200.00'
        ]);

        Products::create([
            'name' => 'Goodthreads Standard-Fit Long-Sleeve Solid Oxford Shirt',
            'description' => 'Long Sleeved Shirt',
            'add_details' => 'Color: Black, White',//addition of multiple features for further splitting later
            'featured' => '0',
            'category' => 'men',
            'price' => '1200.00'
        ]);

    }
}
