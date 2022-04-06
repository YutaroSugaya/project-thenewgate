<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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

  public function getNewsDetail($id) {
    $news_detail = DB::table('news_lists')
    ->where('id','=',$id)
    ->first();
    return $news_detail;
  }

  public function updateNews($request) {
    $news = DB::table('news_lists')
    ->where('id','=',$request->id)
    ->update([
        'news_title' => $request->news_title,
        'news_text' => $request->news_text,
        'news_time' => $request->news_time,
        'updated_at' => Carbon::now(),
    ]);
    return;
  }

  public function deleteNews($id) {
    $news = DB::table('news_lists')
    ->where('id','=',$request->id)
    ->delete();
    return;
  }

  public function createNews($request) {
    $news = DB::table('news_lists')
    ->insert([
        'news_title' => $request->news_title,
        'news_text' => $request->news_text,
        'news_time' => $request->news_time,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
    return;
  }
}
