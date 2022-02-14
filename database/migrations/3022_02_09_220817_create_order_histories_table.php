<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_histories', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete(); 
            $table->foreignId('product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete(); 
            $table->dateTime('order_date');
            $table->integer('order_price');
            $table->integer('order_quantity');
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
        Schema::dropIfExists('order_histories');
    }
}
