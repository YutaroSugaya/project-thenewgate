<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;

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

Route::get('/', function () {
    return view('welcome');
});

//宮本さんのコード

Route::get('/mypage',[HomeController::class, 'showMypage'])->name('showMypage');
Route::get('/mypage/edit',[HomeController::class, 'showEdit'])->name('showEdit');
Route::get('/buy',[HomeController::class, 'showBuy'])->name('showBuy');
Route::get('/buy/check',[HomeController::class, 'showCheck'])->name('showCheck');
Route::get('/buy/check/credit',[HomeController::class, 'showCheckCredit'])->name('showCheckCredit');
Route::get('/buy/check/paypal',[HomeController::class, 'showCheckPaypal'])->name('showCheckPaypal');
Route::get('/buy/check',[HomeController::class, 'showCheck'])->name('showCheck');
Route::get('/buy/thanks',[HomeController::class, 'showThanks'])->name('showThanks');
Route::get('/privacypolicy',[HomeController::class, 'showPolicy'])->name('showPolicy');
Route::get('/nopage',[HomeController::class, 'nopage404'])->name('nopage');
Route::get('/agreement',[HomeController::class, 'agreement'])->name('showAgreement');
Route::get('/agreement/webuse',[HomeController::class, 'webUse'])->name('showWebuse');
Route::get('/guideline',[HomeController::class, 'guideline'])->name('showGuideline');
Route::get('/link',[HomeController::class, 'link'])->name('showLink');
Route::get('/sitemap',[HomeController::class, 'sitemap'])->name('showSitemap');
Route::get('/security',[HomeController::class, 'security'])->name('showSecurity');
Route::post('/pay/credit',[PaymentController::class, 'payCredit'])->name('payCredit');
//paypal
Route::get('create-transaction', [PaymentController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PaymentController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PaymentController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PaymentController::class, 'cancelTransaction'])->name('cancelTransaction');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//菅谷のコード

Route::get('/cart',function() {
    return view('cart');
});

Route::get('/wishlist',function() {
    return view('wishlist');
});

Route::get('/product',function() {
    return view('product_details');
});

//志保さんのコード

Route::get('/home', function () {
    return view('home');
});

Route::get('/notice', function () {
    return view('notice');
})->name('notice');

Route::get('/sale', function () {
    return view('sale');
})->name('sale');
