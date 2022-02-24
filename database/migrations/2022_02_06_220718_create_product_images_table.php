<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
          $table->bigIncrements('id')->unsigned();
          $table->foreignId('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
          $table->string('image_1'); 
          $table->string('image_2')->nullable(); 
          $table->string('image_3')->nullable(); 
          $table->string('image_4')->nullable(); 
          $table->string('image_5')->nullable(); 
            
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
        Schema::dropIfExists('product_images');
    }
}
