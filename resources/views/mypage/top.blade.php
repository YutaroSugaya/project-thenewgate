@extends('layouts.app')

@section('content')

<br>
<br>
<div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-3 border-top">
        <x-mypage-nav/>
      </div>
      

      <div class="col-9">
        <div class="row">
          <div class="col">
            <h1 class="border-bottom border-top">マイページ</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h1>お気に入り</h1>
            
            <ul class="d-flex product-lists">
              <li class="product-list">
                <a href="#!">
                  <img src="https://www.cotta.jp/special/article/wp-content/uploads/2019/08/20190821_shizuka_eye.jpg" alt="">
                  <p class="text-center">サンプル<br>サンプルサンプル</p>
                </a>
              </li>
              <li class="product-list">
                <a href="#!">
                  <img src="https://www.cotta.jp/special/article/wp-content/uploads/2019/08/20190821_shizuka_eye.jpg" alt="">
                  <p class="text-center">サンプル<br>サンプルサンプル</p>
                </a>
              </li>
              <li class="product-list">
                <a href="#!">
                  <img src="https://www.cotta.jp/special/article/wp-content/uploads/2019/08/20190821_shizuka_eye.jpg" alt="">
                  <p class="text-center">サンプル<br>サンプルサンプル</p>
                </a>
              </li>
              <li class="product-list">
                <a href="#!">
                  <img src="https://www.cotta.jp/special/article/wp-content/uploads/2019/08/20190821_shizuka_eye.jpg" alt="">
                  <p class="text-center">サンプル<br>サンプルサンプル</p>
                </a>
              </li>
            </ul>
          </div>  
        </div>
        <div class="row">
          <div class="col">
            <h1>閲覧履歴</h1>
            
            <x-product-list/>
            
          </div>  
        </div>
      </div>
    </div>
  </div>

</div>

@endsection