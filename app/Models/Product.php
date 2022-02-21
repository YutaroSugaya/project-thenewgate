<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
  use HasFactory;

  //テーブル名
  protected $table = 'products';

  //可変項目
  protected $fillable =
  [
    'product_name',
    'recommendation',
    'product_price',
    'product_image',
    'prefecture',
    'stock',
    'time_sale',
    'time_sale_start',
    'time_sale_end',
    'sale_price',
    'discount',
    'soldout',
  ];

  protected $guarded = [
  ];

  //セキュリティ対策
  public static function escapeLike($str) {
    return str_replace(['\\','%','_'],['\\\\','\%','\_'],$str);
  } 

  public function getProducts() { //商品一覧
    $products = DB::table('products');
    return $products;
  }
  
  public function getProductDetail($id) { //商品詳細
    $product = DB::table('products')
    ->join('product_details','products.id','=','product_details.product_id')
    ->join('companies','products.company_id','=','companies.id')
    ->join('categories','products.category_id','=','categories.id')
    ->where('products.id','=',$id)
    ->first();
    return $product;
  }

/*   public function getSearchProducts($search_word) { //検索商品
    $products = DB::table('products')
    ->join('product_details','products.id','=','product_details.product_id')
    ->join('companies','products.company_id','=','companies.id')
    ->join('categories','products.category_id','=','categories.id')
    ->where('products.product_name','like','%'.self::escapeLike($search_word).'%')
    ->orWhere('companies.company_name','like','%'.self::escapeLike($search_word).'%')
    ->get();
    return $products;
  } */

}

