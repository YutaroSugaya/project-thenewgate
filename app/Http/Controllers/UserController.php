<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Schema;
use Illuminate\Support\Facades\Auth;
use Log;

class UserController extends Controller
{
  public function showMypage () { //マイページ
    $user = Auth::user();
    return view('user.mypage.top',[
      'user' => $user,
    ]);
  }
  public function showEdit() { //ユーザ情報編集画面
    $user = Auth::user();
    return view('user.mypage.edit',[
      'user' => $user,
    ]);
  }
  public function edit(Request $request) { //ユーザ情報編集処理
    $user = Auth::user();
    \DB::beginTransaction();
    try {
      $inputs = $request->all();
      $inputs = [
        $user->email = $request->email,
        $user->last_name = $request->last_name,
        $user->first_name = $request->first_name,
        $user->last_name_kana = $request->last_name_kana,
        $user->first_name_kana = $request->first_name_kana,
        $user->post_code = $request->post_code,
        $user->address = $request->address,
        $user->phone_number = $request->phone_number,
      ];
      $user->fill($inputs)->save();
      \DB::commit();
    } catch (\Throwable $e){
      \DB::rollback();
    }
    return response()->json($user);
  }
}
