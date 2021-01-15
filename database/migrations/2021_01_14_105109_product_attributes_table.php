<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attributes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->string('attribute_key')->nullable();
            $table->string('attribute_value')->nullable();
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products');
        });


        DB::table('product_attributes')->insert([
            [
                'product_id' => '1',
                'attribute_key' => 'Svars',
                'attribute_value' => '100'
            ],
            [
                'product_id' => '1',
                'attribute_key' => 'Garums',
                'attribute_value' => '160'
            ],
            [
                'product_id' => '1',
                'attribute_key' => 'Platums',
                'attribute_value' => '140'
            ],

            [
                'product_id' => '2',
                'attribute_key' => 'Trokšņa līmenis',
                'attribute_value' => '900'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_attributes');
    }
}
