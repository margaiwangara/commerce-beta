<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsAndAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_attributes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('prod_id')->unsigned()->nullable();
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade');

            $table->integer('attr_id')->unsigned()->nullable();
            $table->foreign('attr_id')->references('id')->on('attributes')->onDelete('cascade');
            
            $table->string('attr_value', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_attributes');
    }
}
