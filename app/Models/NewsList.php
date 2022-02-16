<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsList extends Model
{
  use HasFactory;
  //テーブル名
  protected $table = 'news_lists';

  //可変項目
  protected $fillable =
  [
    'news_title',
    'news_text',
    'news_time'
  ];

  public function getNewsLists() {
    $news = DB::table('news_lists')->get();
    return $news;
  }
}
