<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
      Schema::create('users', function (Blueprint $table) {
          $table->bigIncrements('id')->unsigned(); //プライマリキー
          $table->string('last_name', 255); // 名前（名）
          $table->string('first_name', 255); //名前(性)
          $table->string('last_name_kana', 255); //フリガナ(名)
          $table->string('first_name_kana', 255); //フリガナ（性）
          $table->string('full_name', 255)->index();  //indexキー、フルネーム
          $table->integer('post_code'); //郵便番号
          $table->string('address', 255); //住所
          $table->string('phone_number', 255)->unique();//電話番号、ユニークキー
          $table->string('email')->unique();//Eメール、ユニークキー
          $table->string('password'); //パスワード
          $table->boolean('is_deleted')->nullable(); //退会フラグ
          $table->timestamps();
          $table->rememberToken(); //⇦↓のコードは初期のやつで入らなそうなら削除する
          $table->timestamp('email_verified_at')->nullable();
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

        Schema::dropIfExists('users');
    }
}
