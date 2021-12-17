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
}
