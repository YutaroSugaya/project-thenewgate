<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;
use Carbon\Carbon;

class CartController extends Controller
{
  public function showCart(Request $request) { //カート画面

    $user_id = Auth::id();
    $model = new Cart();
    $cart_products = $model->getCart($user_id);
    //dd($cart_products);
    return view('user.product.cart',[
      'cart_products' => $cart_products,
    ]);
  }

  public function addCart(Request $request) { //カート登録
    ///dd($request);
    $user_id = Auth::id();
    $model = new Cart();
    $product_id = $request->id;
    $check = $model->checkCart($product_id,$user_id);

    if(Auth::Check()) {
      if($check) {
        \Session::flash('msg_error', 'すでにカートに入っています');
      } else {
        $data = array(
          'user_id' => $user_id,
          'product_id' => $product_id,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        );
        $add = $model->addCart($data);
        \Session::flash('msg_success', 'カートに追加しました');
      }
    } else { //ログインしていなかったらセッションに追加する
      \Session::flash('msg_info', 'ログインしてからお気に入り登録をしてください');
    }
    return redirect()->route('showDetail',$product_id);
  }

  public function deleteCart($id) { //カート商品の削除
    echo($id);
    try {
      $model = new Cart();
      $model->deleteCart($id);
    } catch (\Throwable $e){
      abort(500);
    }
    exit();
    
  }
}
