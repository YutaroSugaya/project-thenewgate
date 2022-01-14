<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  //mypage_top表示
  public function showMypage () {

    //dd($products[0]['name']);
    return view('mypage.top');
  }
  //mypage編集表示
  public function showEdit() {
    return view('mypage.edit');
  }

  public function showBuy() {
    return view('buypage.buy');
  }
  public function showCheck() {
    return view('buypage.check');
  }
  public function showThanks() {
    return view('buypage.thanks');
  }
  public function showPolicy() {
    return view('others.privacypolicy');
  }
  public function nopage404() {
    return view('others.nopage');
  }
  public function agreement() {
    return view('others.agreement');
  }
  public function webUse() {
    return view('others.webuse');
  }
  public function guideline() {
    return view('others.guideline');
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
