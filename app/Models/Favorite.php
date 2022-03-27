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
      //dd($check);
      return $check;
    }
    public function checkWishLists($user_id) {
      $check = DB::table('favorites')
      ->select('favorites.product_id')
      ->where('user_id', $user_id)
      ->get();
      //dd($check);
      return $check;
    }
    public function addWishList($data) {
      $add = DB::table('favorites')
      ->insert($data);
      //dd($data);
      return $add;
    }
    public function getWishLists($user_id) {
      $products = DB::table('favorites')
      ->join('products','favorites.product_id','=','products.id')
      ->join('companies','products.company_id','=','companies.id')
      ->where('favorites.user_id','=',$user_id)
      ->get();
      return $products;
    }
}
