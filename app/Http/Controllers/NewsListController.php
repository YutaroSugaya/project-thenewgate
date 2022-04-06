<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsList;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class NewsListController extends Controller
{
  public function showNews() {
    $model = new NewsList();
    $news = $model->getNewsLists();
    return view('user.home.news',[
      'news' => $news,
    ]);
  }

  public function showNewsDetail($id) {
    $model = new NewsList();
    $news_detail = $model->getNewsDetail($id);
    return view('user.home.news_detail',[
      'news_detail' => $news_detail,
    ]);
  }

  public function showNewsCtrl() {
    $model = new NewsList();
    $news = $model->getNewsLists();
    
    return view('admin.news.news',[
      'news' => $news,
    ]);
  }

  public function showEditNews($id) {
    $model = new NewsList();
    $news = $model->getNewsDetail($id);

    return view('admin.news.edit_news',[
      'news' => $news,
    ]);
  }

  public function updateNews(Request $request) {
    \DB::beginTransaction();
    try {
      $model = new NewsList();
      $news = $model->updateNews($request);
      \DB::commit();
      \Session::flash('msg_success', 'お知らせを更新しました');
    } catch (\Throwable $e) {
      \DB::rollback();
        //abort(500);
      \Session::flash('msg_error', 'お知らせの更新に失敗しました');
    }
    return redirect(route('showNewsCtrl'));
  }

  public function deleteNews($id) {
    \DB::beginTransaction();
    try {
      $model = new Product;
      $model->deleteNews($id);
      \DB::commit();
      \Session::flash('msg_success', 'お知らせを削除しました');
    } catch (\Throwable $e){
      \DB::rollback();
      \Session::flash('msg_error', 'お知らせの削除に失敗しました');
    }
    return redirect(route('showNewsCtrl'));
  }

  public function showCreateNews() {
    return view('admin.news.create_news');
  }

  public function createNews(Request $request) {
    \DB::beginTransaction();
    try {
      $model = new NewsList();
      $news = $model->createNews($request);
      \DB::commit();
      \Session::flash('msg_success', 'お知らせを作成しました');
    } catch (\Throwable $e) {
      \DB::rollback();
        //abort(500);
      \Session::flash('msg_error', 'お知らせの作成に失敗しました');
    }
    return redirect(route('showNewsCtrl'));
  }
}
