<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Cart extends Model
{
  use HasFactory;
  
  //テーブル名
  protected $table = 'carts';

  //可変項目
  protected $fillable =
  [
    '',
  ];

  public function getCart($user_id) {
    $products = DB::table('carts')
      ->join('products','carts.product_id','=','products.id')
      ->join('companies','products.company_id','=','companies.id')
      ->join('product_details','carts.product_id','=','product_details.product_id')
      ->where('carts.user_id','=',$user_id)
      ->get();
    return $products;
  }

  public function checkCart($product_id, $user_id) {
    $check = DB::table('carts')
      ->where('user_id', $user_id)
      ->where('product_id', $product_id)
      ->first();
      return $check;
  }

  public function addCart($data) {
    $add = DB::table('carts')
    ->insert($data);
  }

  public function deleteCart($id) {
    $delete = DB::table('carts')
    ->where('id',$id)
    ->delete();
  }
}
