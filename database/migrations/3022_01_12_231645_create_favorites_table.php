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
      
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            //$table->bigInteger('user_id')->nullable()->unsigned(); //ユーザID
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            //$table->bigInteger('product_id')->nullable()->unsigned();  // 商品ID
            $table->foreignId('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete(); 
            
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
      Schema::dropIfExists('favorites');
    }
}
