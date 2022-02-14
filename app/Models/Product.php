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
    'comment',
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

  public function category() {
    return $this->belongsTo('App\Models\Category');
  }
  public function company() {
    return $this->belongsTo('App\Models\Campany');
  }
  public function productDetail() {
    return $this->hasOne('App\Models\ProductDetail');
  }

  public function getProducts() {
    $products = DB::table('products')->get();
    return $products;
  }
}
