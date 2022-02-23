<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
  use HasFactory;
  //テーブル名
  protected $table = 'categories';

  //可変項目
  protected $fillable =
  [
    'category_name'
  ];

  public function product() {
    return $this->hasMany('App\Models\Product');
  }

  public function getCategory($id) {
    $products = DB::table('categories as c');
    $category = $products
    ->leftjoin('products as p','c.id','=','p.category_id')
    ->where('p.id','=',$id)
    ->first();
    return $category;
  }

  public function getCategoryName($id) {
    $category = DB::table('categories')
    ->select('category_name')
    ->where('id','=',$id)
    ->first();
    return $category;
  }
}
