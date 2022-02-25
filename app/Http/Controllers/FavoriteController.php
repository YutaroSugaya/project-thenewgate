<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Auth;
use Carbon\Carbon;


class FavoriteController extends Controller
{
  public function showWishList(Request $request) { //お気に入り画面
    $user_id = Auth::id();
    $model = new Favorite();
    $products = $model->getWishLists($user_id);
    return view('product.wishlist', [
      'products' => $products,
    ]);
  }

  public function addWishList(Request $request) { //お気に入り登録
    $user_id = Auth::id();
    $model = new Favorite();
    $product_id = $request->id;
    $check = $model->checkWishList($product_id,$user_id);

    $data = array(
      'user_id' => $user_id,
      'product_id' => $product_id,
      'created_at' => Carbon::now(),
      'updated_at' => Carbon::now(),
    );

    if(Auth::Check()) {
      if($check) {
        \Session::flash('msg_error', 'すでにお気に入り登録されています');
      } else {
        $add = $model->addWishList($data);
        \Session::flash('msg_success', 'お気に入りに追加しました');
      }
    } else {
      \Session::flash('msg_info', 'ログインしてからお気に入り登録をしてください');
    }
    return redirect()->route('showDetail',$product_id);
  }
}
