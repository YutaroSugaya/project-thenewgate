<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  //mypage_top表示
  public function showMypage () {
    return view('mypages.mypage_top');
  }
}
