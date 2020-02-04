<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('long_description');
            $table->text('short_description');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('market_id');
            $table->enum('in_stock',['1','0']);
            $table->double('amount');
            $table->double('discount');
            $table->integer('quantity');
            $table->integer('views')->default('0');
            $table->timestamps();

            $table->foreign('market_id')->references('id')->on('markets');
            $table->foreign('brand_id')->references('id')->on('brands');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
