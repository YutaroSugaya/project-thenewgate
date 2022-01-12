<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsLists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('news_lists')) {
        Schema::create('news_lists', function (Blueprint $table) {
            $table->id();
            $table->string('news_title',255); //お知らせタイトル
            $table->text('news_text'); //お知らせ内容
            $table->dateTime('news_time'); //お知らせ設定日時
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
        Schema::dropIfExists('news_lists');
    }
}
