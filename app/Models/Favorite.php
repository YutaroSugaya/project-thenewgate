<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class Favorite extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'favorites';

    //可変項目
    protected $fillable =
    [

    ];

    public function user() {
      return $this->belongsTo('App\Models\User');
    }
    public function product() {
      return $this->belongsTo('App\Models\Product');
    }
    public function checkWishList($product_id, $user_id) {
      $check = DB::table('favorites')
      ->where('user_id', $user_id)
      ->where('product_id', $product_id)
      ->first();
      return $check;
    }
    public function addWishList($data) {
      $add = DB::table('favorites')
      ->insert($data);
      return $add;
    }
}
