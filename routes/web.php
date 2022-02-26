<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsListController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\PayPalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

//トップ画面関連
Route::get('/home',[HomeController::class, 'showHome'])->name('showHome'); //ホームページ
Route::get('/news',[NewsListController::class, 'showNews'])->name('showNews'); //お知らせ画面
Route::get('/news/{id}',[NewsListController::class, 'showNewsDetail'])->name('showNewsDetail'); //お知らせ画面

Route::prefix('product')->group(function () { //商品関連
  Route::get('detail/{id}',[ProductController::class, 'showDetail'])->name('showDetail'); //商品詳細画面
  Route::get('list',[ProductController::class, 'showList'])->name('showList'); //商品検索一覧表示
  Route::get('sale',[ProductController::class, 'showSale'])->name('showSale'); //タイムセール画面
});

Route::middleware(['auth'])->group(function () { //ログイン認証
  Route::prefix('mypage')->group(function () { //マイページ関連
    Route::get('/',[UserController::class, 'showMypage'])->name('showMypage'); //マイページ
    Route::get('edit',[UserController::class, 'showEdit'])->name('showEdit'); //ユーザ情報編集画面
    Route::post('edit',[UserController::class, 'edit'])->name('edit'); //ユーザ情報編集処理
  });

  Route::prefix('buy')->group(function () { //購入ページ関連
    Route::get('/',[HomeController::class, 'showBuy'])->name('showBuy'); //購入画面
    Route::get('check',[HomeController::class, 'showCheck'])->name('showCheck'); //購入内容確認画面
    Route::get('check/credit',[HomeController::class, 'showCheckCredit'])->name('showCheckCredit'); //クレジット決済確認
    Route::get('check/paypal',[HomeController::class, 'showCheckPaypal'])->name('showCheckPaypal'); //paypal決済確認
    Route::get('thanks',[HomeController::class, 'showThanks'])->name('showThanks'); //購入完了画面
  });
  
  //カートお気に入り関連
  Route::get('/cart',[CartController::class, 'showCart'])->name('showCart'); //カート画面
  Route::get('/cart/add/{id}',[CartController::class, 'addCart'])->name('addCart'); //カート画面
  Route::get('/wishlist',[FavoriteController::class, 'showWishList'])->name('showWishList'); //お気に入り画面
  Route::get('/wishlist/add/{id}',[FavoriteController::class, 'addWishList'])->name('addWishList'); //お気に入り画面

  //クレジット決済
  Route::post('/pay/credit',[PaymentController::class, 'payCredit'])->name('payCredit'); 
  //paypal
  Route::get('create-transaction', [PaymentController::class, 'createTransaction'])->name('createTransaction');
  Route::get('process-transaction', [PaymentController::class, 'processTransaction'])->name('processTransaction');
  Route::get('success-transaction', [PaymentController::class, 'successTransaction'])->name('successTransaction');
  Route::get('cancel-transaction', [PaymentController::class, 'cancelTransaction'])->name('cancelTransaction');
});


Route::get('/privacypolicy',[HomeController::class, 'showPolicy'])->name('showPolicy'); //プライバシーぽシリー
Route::get('/nopage',[HomeController::class, 'nopage404'])->name('nopage'); //404
Route::get('/agreement',[HomeController::class, 'agreement'])->name('showAgreement'); //利用規約
Route::get('/agreement/webuse',[HomeController::class, 'webUse'])->name('showWebuse'); //利用条件
Route::get('/guideline',[HomeController::class, 'guideline'])->name('showGuideline'); //ガイドライン
Route::get('/link',[HomeController::class, 'link'])->name('showLink'); //リンクポリシー
Route::get('/sitemap',[HomeController::class, 'sitemap'])->name('showSitemap'); //サイトマップ
Route::get('/security',[HomeController::class, 'security'])->name('showSecurity'); //セキュリティ




