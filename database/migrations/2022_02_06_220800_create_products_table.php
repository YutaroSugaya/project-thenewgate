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
          $table->bigIncrements('id'); //プライマリキー
          $table->foreignId('category_id')->nullable()->constrained('categories')->cascadeOnUpdate()->cascadeOnDelete();
          $table->foreignId('company_id')->nullable()->constrained('companies')->cascadeOnUpdate()->cascadeOnDelete();
          $table->foreignId('product_detail_id')->nullable()->constrained('product_details')->cascadeOnUpdate()->cascadeOnDelete();
          
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


      
      //Schema::dropIfExists('favorites');

      Schema::dropIfExists('products');
    }
}
