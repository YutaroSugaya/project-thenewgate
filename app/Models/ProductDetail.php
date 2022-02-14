<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductDetail extends Model
{
  use HasFactory;

  //テーブル名
  protected $table = 'product_details';

  //可変項目
  protected $fillable =
  [
    'recommendation',
    'expiration_date',
    'preservation_method',
    'allergic_substance',
    'product_size',
    'product_weight',
  ];

  public function getProductDetails() {
    $product_details = DB::table('product_details')->get();
    return $product_details;
  }
}
