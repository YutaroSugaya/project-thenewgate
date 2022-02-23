<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsListController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;

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



//トップ画面関連
Route::get('/home',[HomeController::class, 'showHome'])->name('showHome'); //ホームページ
Route::get('/news',[NewsListController::class, 'showNews'])->name('showNews'); //お知らせ画面
Route::get('/news/{id}',[NewsListController::class, 'showNewsDetail'])->name('showNewsDetail'); //お知らせ画面
Route::get('/sale',[HomeController::class, 'showSale'])->name('showSale'); //タイムセール画面


//カートお気に入り関連
Route::get('/cart',[HomeController::class, 'showCart'])->name('showCart'); //カート画面
Route::get('/wishlist',[HomeController::class, 'showWishlist'])->name('showWishlist'); //お気に入り画面

//商品関連
Route::get('/product/detail/{id}',[ProductController::class, 'showDetail'])->name('showDetail'); //商品詳細画面
Route::get('/product/list',[ProductController::class, 'showList'])->name('showList'); //商品検索一覧表示

//マイページ関連
Route::get('/mypage',[UserController::class, 'showMypage'])->name('showMypage'); //マイページ
Route::get('/mypage/edit',[UserController::class, 'showEdit'])->name('showEdit'); //ユーザ情報編集画面
Route::post('/mypage/edit',[UserController::class, 'edit'])->name('edit'); //ユーザ情報編集処理

Route::get('/buy',[HomeController::class, 'showBuy'])->name('showBuy'); //購入画面
Route::get('/buy/check',[HomeController::class, 'showCheck'])->name('showCheck'); //購入内容確認画面
Route::get('/buy/check/credit',[HomeController::class, 'showCheckCredit'])->name('showCheckCredit'); //クレジット決済確認
Route::get('/buy/check/paypal',[HomeController::class, 'showCheckPaypal'])->name('showCheckPaypal'); //paypal決済確認
Route::get('/buy/thanks',[HomeController::class, 'showThanks'])->name('showThanks'); //購入完了画面
Route::get('/privacypolicy',[HomeController::class, 'showPolicy'])->name('showPolicy'); //プライバシーぽシリー
Route::get('/nopage',[HomeController::class, 'nopage404'])->name('nopage'); //404
Route::get('/agreement',[HomeController::class, 'agreement'])->name('showAgreement'); //利用規約
Route::get('/agreement/webuse',[HomeController::class, 'webUse'])->name('showWebuse'); //利用条件
Route::get('/guideline',[HomeController::class, 'guideline'])->name('showGuideline'); //ガイドライン
Route::get('/link',[HomeController::class, 'link'])->name('showLink'); //リンクポリシー
Route::get('/sitemap',[HomeController::class, 'sitemap'])->name('showSitemap'); //サイトマップ
Route::get('/security',[HomeController::class, 'security'])->name('showSecurity'); //セキュリティ

//クレジット決済
Route::post('/pay/credit',[PaymentController::class, 'payCredit'])->name('payCredit'); 
//paypal
Route::get('create-transaction', [PaymentController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PaymentController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PaymentController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PaymentController::class, 'cancelTransaction'])->name('cancelTransaction');


Auth::routes();

