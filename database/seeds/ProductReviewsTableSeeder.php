<?php

use Illuminate\Database\Seeder;
use App\ProductReviews;

class ProductReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductReviews::create([
            'prod_id' => 1,
            'username' => 'margai',
            'email' => 'margai@dummyserver.com',
            'review' => 'This product is off the hook. You definitely should buy it'
        ]);

        ProductReviews::create([
            'prod_id' => 1,
            'username' => str_random(10),
            'email' => str_random(10).'@dummyserver.com',
            'review' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem recusandae deserunt non, earum adipisci dolorum eius enim, quam aspernatur nam totam neque quis similique nulla, assumenda dolor harum iste impedit.'
        ]);

        ProductReviews::create([
            'prod_id' => 2,
            'username' => str_random(10),
            'email' => str_random(10).'@dummyserver.com',
            'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus iure voluptate, repellendus laudantium est sint praesentium temporibus eius placeat dicta, sequi ipsum excepturi accusantium vel maxime inventore numquam et recusandae dolore earum nemo aut. Aperiam ea amet minima voluptas eaque.'
        ]);

        ProductReviews::create([
            'prod_id' => 3,
            'username' => str_random(10),
            'email' => str_random(10).'@dummyserver.com',
            'review' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam illum iure earum rerum veritatis, corporis ipsa omnis soluta architecto exercitationem, dolorum repellat consectetur molestias facilis.'
        ]);

        ProductReviews::create([
            'prod_id' => 4,
            'username' => str_random(10),
            'email' => str_random(10).'@dummyserver.com',
            'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil id soluta minus delectus laboriosam velit necessitatibus in, dolor distinctio illum blanditiis, modi accusamus architecto incidunt sunt eius animi sed fugit neque corrupti asperiores cum, accusantium quia? Sed, saepe amet! Sapiente iusto maxime eaque quod minima, officiis temporibus odit ut quas fuga labore quidem optio animi quo a nisi, magni autem!'
        ]);

        ProductReviews::create([
            'prod_id' => 5,
            'username' => str_random(10),
            'email' => str_random(10).'@dummyserver.com',
            'review' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos veniam labore quas corporis unde suscipit vitae voluptate ipsam odio repellendus?'
        ]);
    }
}
