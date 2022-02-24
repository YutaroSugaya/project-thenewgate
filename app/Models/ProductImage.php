<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductImage extends Model
{
    use HasFactory;
    //テーブル名
  protected $table = 'product_images';

  //可変項目
  protected $fillable =
  [
    'image_1',
    'image_2',
    'image_3',
    'image_4',
    'image_5',
  ];

}
