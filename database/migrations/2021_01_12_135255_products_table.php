<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });

        DB::table('products')->insert([

            [
                'name' => 'Ledusskapis',
                'description' => 'Apraksts ledusskapim',
            ],
            [
                'name' => 'Veļas mašīna',
                'description' => 'Kaut kāda veļas mašīna',
            ],
            [
                'name' => 'Gulta',
                'description' => 'King size',
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
        Schema::drop('products');
    }
}
