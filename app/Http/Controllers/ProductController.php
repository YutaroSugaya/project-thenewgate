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
    $query = Product::query();

    $search_word = $request->search_word;
    $search_category = $request->search_category;
    
    //カテゴリプルダウン検索
    if($request->has('search_category') && $search_category != ('商品カテゴリ')) {
      $query -> join('categories','products.category_id','=','categories.id')->
      where('category_id',$search_category)->get();      
    }
    //キーワード検索
    if(!empty($search_word)) {
      $query
      ->join('product_details','products.id','=','product_details.product_id')
      ->join('companies','products.company_id','=','companies.id')
      ->join('categories','products.category_id','=','categories.id')
      ->where('products.product_name','like','%'.self::escapeLike($search_word).'%')
      ->orWhere('companies.company_name','like','%'.self::escapeLike($search_word).'%')
      ->get();
    }

    $products = $query->groupBy('product_name')->get();
    
//dd($products);
    return view('product.product_list', [
      'products' => $products,
    ]);
  }
  
  public function showDetail($id) { //商品詳細画面表示
    $model = new product();
    $product = $model->getProductDetail($id); //該当する商品ピックアップ
    return view('product.product_detail', [
      'product' => $product,
    ]);
  }

  
}


