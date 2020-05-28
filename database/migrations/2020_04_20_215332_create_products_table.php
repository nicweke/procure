<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('details');
            $table->string('description')->nullable();
            $table->string('brand')->nullable();
            $table->enum('is_available', ['Available', 'Out of Stock'])->default('Available');
            $table->float('price');
            $table->string('cover_img')->nullable();
            $table->string('alt_img')->nullable();
            $table->string('alt_img2')->nullable();
            $table->string('alt_img3')->nullable();
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->foreign('shop_id')->references('id')->on('shops')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
