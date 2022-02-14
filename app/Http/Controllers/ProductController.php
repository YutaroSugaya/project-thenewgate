<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductDetail;
use App\Models\Product;

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

  public function showDetail($id) {
    $model = new ProductDetail();
    $detail = $model->getProductDetails($id);
    //dd($detail);
    return view('product.product_detail', [
      'detail' => $detail,
    ]);
  }
  
  public function showList(Request $request) {
    $model = new Product();
    $products = $model->getProducts();
    //dd($products);
    return view('product.product_list', [
      'products' => $products,
    ]);
  }


  
}


