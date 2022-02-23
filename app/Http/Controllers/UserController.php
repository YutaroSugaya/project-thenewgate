<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function showMypage () { //マイページ
    $user = Auth::user();
    return view('mypage.top',[
      'user' => $user,
    ]);
  }
  public function showEdit() { //ユーザ情報編集画面
    $user = Auth::user();
    return view('mypage.edit',[
      'user' => $user,
    ]);
  }
}
