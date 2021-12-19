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
    return view('buy');
  }
  public function showBuyCheck() {
    return view('check');
  }
  public function showThanks() {
    return view('thanks');
  }
  public function showPrivacypolicy() {
    return view('privacypolicy');
  }
  public function nopage404() {
    return view('nopage');
  }

}
