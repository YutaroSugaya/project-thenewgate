<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
  use HasFactory;

  //テーブル名
  protected $table = 'admins';

  //可変項目
  protected $fillable =
  [
    'email',
    '',
  ];
}
