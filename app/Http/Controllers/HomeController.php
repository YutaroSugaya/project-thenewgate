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

    return view('home.home',[
      'news_lists' => $news_lists,
      'products' => $products,
    ]);
  }


  public function showCart() { //カート画面
    return view('product.cart');
  }

  public function showProductDetail() { //商品詳細画面
    return view('product.product_detail');
  }

  

  
  public function showBuy() { //購入画面
    return view('buypage.buy');
  }
  public function showCheck() { //購入内容確認画面
    return view('buypage.check');
  }
  public function showCheckCredit() { //クレジット決済確認
    return view('buypage.check-credit');
  }
  public function showCheckPaypal() { //paypal決済確認
    return view('buypage.check-paypal');
  }
  public function showThanks() { //購入完了画面
    return view('buypage.thanks');
  }
  public function showPolicy() { //プライバシーぽシリー
    return view('others.privacypolicy');
  }
  public function nopage404() { //404
    return view('others.nopage');
  }
  public function agreement() { //利用規約
    return view('others.agreement');
  }
  public function webUse() { //利用条件
    return view('others.webuse');
  }
  public function guideline() { //ガイドライン
    return view('others.guideline');
  }
  public function sitemap() { //サイトマップ 
    return view('others.sitemap');
  }
  public function security() { //セキュリティ
    return view('others.security');
  }
  public function link() { //リンクポリシー
    return view('others.link');
  }

  


//   自動ログイン認証が勝手に発動するので、今はコメントアウトにしてますが、そのうち使います
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
