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
    $news = DB::table('news_lists')->orderby('id','desc')->get();
    return $news;
  }

  public function get4NewsLists() {
    $news = DB::table('news_lists')->orderby('id','desc')->take(4)->get();
    return $news;
  }

  public function getNewsDetail($id) {
    $news_detail = DB::table('news_lists')
    ->where('id','=',$id)
    ->first();
    return $news_detail;
  }
}
