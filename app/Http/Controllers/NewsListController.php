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
}
