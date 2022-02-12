<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    //テーブル名
    protected $table = 'favorites';

    //可変項目
    protected $fillable =
    [
      'user_id',
      'product_id',
    ];

    public function user() {
      return $this->belongsTo('App\Models\User');
    }
    public function product() {
      return $this->belongsTo('App\Models\Product');
    }
}
