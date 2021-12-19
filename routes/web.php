<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/mypage',[HomeController::class, 'showMypage'])->name('showMypage');
Route::get('/mypage/edit',[HomeController::class, 'showEdit'])->name('showEdit');
Route::get('/buy',[HomeController::class, 'showBuy'])->name('showBuy');
Route::get('/buy/check',[HomeController::class, 'showCheck'])->name('showCheck');
Route::get('/buy/thanks',[HomeController::class, 'showThanks'])->name('showThanks');
Route::get('/privacypolicy',[HomeController::class, 'showPrivacypolicy'])->name('showPrivacypolicy');
Route::get('/nopage',[HomeController::class, 'nopage'])->name('nopage');
