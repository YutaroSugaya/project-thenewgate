<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('favorites')) {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->bigInteger('user_id')->nullable()->unsigned(); //ユーザID
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->bigInteger('product_id')->nullable()->unsigned();  // 商品ID
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); 
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
    }
}
