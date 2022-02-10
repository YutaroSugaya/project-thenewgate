<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  //テーブル名
  protected $table = 'orders';

  //可変項目
  protected $fillable =
  [
    'freight',
    'amount_billed',
    'order_post_code',
    'destination',
  ];
}
