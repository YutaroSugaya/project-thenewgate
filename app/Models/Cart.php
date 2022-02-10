<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
