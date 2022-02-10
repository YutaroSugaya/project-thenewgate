<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavorites extends Migration
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
            $table->id();
            /* $table->unsignedBigInteger('user_id'); //ユーザID
            $table->unsignedBigInteger('product_id'); */ // 商品ID
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
