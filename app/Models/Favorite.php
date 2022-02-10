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
      
    ];
}
