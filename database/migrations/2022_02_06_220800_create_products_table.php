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
      if (!Schema::hasTable('products')){
        Schema::create('products', function (Blueprint $table) {
          $table->bigIncrements('id')->unsigned(); //プライマリキー
          $table->bigInteger('category_id')->nullable()->unsigned(); 
          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); 
          $table->bigInteger('company_id')->nullable()->unsigned(); 
          $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade'); 
          $table->bigInteger('product_detail_id')->nullable()->unsigned(); 
          $table->foreign('product_detail_id')->references('id')->on('product_details')->onDelete('cascade'); 
          $table->string('product_name',255); 
          $table->text('comment'); 
          $table->integer('product_price'); 
          $table->string('product_image'); 
          $table->string('prefecture'); 
          $table->integer('stock'); 
          $table->boolean('time_sale')->nullable(); 
          $table->dateTime('time_sale_start'); 
          $table->dateTime('time_sale_end'); 
          $table->integer('sale_price'); 
          $table->integer('discount'); 
          $table->boolean('soldout')->nullable();  
          $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('favorites');

      Schema::dropIfExists('products');
    }
}
