<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productList extends Component
{
  public $products;
  
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $products = [])
    {
        //
        $this->products = array($products);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
      
        return view('components.mypage.product-list');
    }

    //テストデータ
    public function products() {
      //products = array();
      $products =[
        [ 'name' => 'ケーキ',
          'price' => '1000yen',
          'prefecture' => 'tokyo',],
        [ 'name' => 'ゼリー',
          'price' => '500yen',
          'prefecture' => 'miyazaki',],
        [ 'name' => '饅頭',
          'price' => '2000yen',
          'prefecture' => 'mie',],
        [ 'name' => 'アイス',
        'price' => '400yen',
        'prefecture' => 'hokkaido',],
      ];
      return $products;
    }
}
