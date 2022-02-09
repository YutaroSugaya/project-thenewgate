<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
          $table->bigIncrements('id')->unsigned();
          $table->bigInteger('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->integer('freight');
          $table->integer('amount_billed');
          $table->bigInteger('payment_id')->unsigned();
          $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
          $table->integer('order_post_code');
          $table->string('order_address',255);
          $table->string('destination',255);
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
        Schema::dropIfExists('orders');
    }
}
