<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get
('/cart',function() {
    return view('cart');
});

Route::get
('/favorite',function() {
    return view('favorite');
});

// Route::get
// ('/product/{id}',function() {
//     return view('show');
// });

Route::get
('/product',function() {
    return view('product_details');
});

Route::get
('/freight',function() {
    return view('freight');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/notice', function () {
    return view('notice');
})->name('notice');

Route::get('/sale', function () {
    return view('sale');
})->name('sale');
