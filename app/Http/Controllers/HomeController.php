<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsList;
use App\Models\Product;
use App\Models\Category;


class HomeController extends Controller
{
  
  public function showHome() { //ホームページ
    $news_model = new NewsList();
    $news_lists = $news_model->getNewsLists()->take(4);
    $model = new product();
    $products = $model->getSaleProducts()->take(4);

    return view('user.home.home',[
      'news_lists' => $news_lists,
      'products' => $products,
    ]);
  }
  
  
  public function showBuy() { //購入画面
    return view('user.buypage.buy');
  }
  public function showCheck() { //購入内容確認画面
    return view('user.buypage.check');
  }
  public function showCheckCredit() { //クレジット決済確認
    return view('user.buypage.check-credit');
  }
  public function showCheckPaypal() { //paypal決済確認
    return view('user.buypage.check-paypal');
  }
  public function showThanks() { //購入完了画面
    return view('user.buypage.thanks');
  }
  public function showPolicy() { //プライバシーぽシリー
    return view('user.others.privacypolicy');
  }
  public function nopage404() { //404
    return view('user.others.nopage');
  }
  public function agreement() { //利用規約
    return view('user.others.agreement');
  }
  public function webUse() { //利用条件
    return view('user.others.webuse');
  }
  public function guideline() { //ガイドライン
    return view('user.others.guideline');
  }
  public function sitemap() { //サイトマップ 
    return view('user.others.sitemap');
  }
  public function security() { //セキュリティ
    return view('user.others.security');
  }
  public function link() { //リンクポリシー
    return view('user.others.link');
  }

  


//   自動ログイン認証が勝手に発動するので、今はコメントアウトにしてますが、そのうち使います
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

  public function showAdminHome() {
    return view('admin.home');
  }
}
