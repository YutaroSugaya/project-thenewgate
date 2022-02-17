<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsList;

class NewsListController extends Controller
{
  public function showNews() {
    $model = new NewsList();
    $news = $model->getNewsLists();
    return view('home.news',[
      'news' => $news,
    ]);
  }

  public function showNewsDetail($id) {
    $model = new NewsList();
    $news_detail = $model->getNewsDetail($id);
    return view('home.news_detail',[
      'news_detail' => $news_detail,
    ]);
  }
}
