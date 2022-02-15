<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Models\Product;
use App\Models\Company;
use App\Models\Category;

class ProductController extends Controller
{
  /* /**
   * Create a new controller instance.
   *
   * @return void
  
  public function __construct()
  {
    $this->middleware('auth');
  } */

  //セキュリティ対策
  public static function escapeLike($str) {
    return str_replace(['\\','%','_'],['\\\\','\%','\_'],$str);
  } 
  
  public function showList(Request $request) { //検索結果表示
    $model = new Product();
    $products = $model->getProducts();
    //dd($products);
    return view('product.product_list', [
      'products' => $products,
      
    ]);
  }
  
  public function showDetail($id) { //商品詳細画面表示
    $model = new product();
    $product = $model->getProductDetail($id); //該当する商品ピックアップ
    // $category = $modelCategory->getCategory($id);
    // dd($category);
    //dd($product);
    return view('product.product_detail', [
      'product' => $product,
    ]);
  }

  
}


