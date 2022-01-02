@extends('layouts.app')
  @push('css')  
    <link href="{{ asset('css/buy.css') }}" rel="stylesheet">
  @endpush
@section('content')

<div class="wrapper main-section mx-auto">
  <div class="container-fluid">
    <div class="row">
      <div class="buy-title mt-3 mb-3">
        <h5 class="text-center ml-2 mr-2"><i class="fas fa-shopping-cart mr-1"></i>注文情報確認</h5>
      </div>
    </div>
    
    <div class="row border-bottom mx-5 py-3">
      <ul class="progressbar mx-auto">
        <li class="complete">ご入力</li>
        <li class="active">ご確認</li>
        <li>完了</li>
      </ul>
    </div>

    <div class="row border-bottom mx-5 my-4 pb-3">
      <div class="col-12">
        <p><i class="far fa-user mr-1"></i> 注文者情報</p>
        <div class="user_detail">
          <span class="label">会員名：</span>
          <span>DBから会員名</span><br>
          <span class="label">メールアドレス：</span>
          <span>DBからメールアドレス</span><br>
          <span class="label">電話番号：</span>
          <span>DBから電話番号</span><br>
          <span class="label">郵便番号：</span>
          <span>DBから郵便番号</span><br>
          <span class="label">住所：</span>
          <span>DBから住所</span><br>
        </div>
      </div>
    </div>

    <div class="row mx-5 my-4">
      <div class="col-12">
        <p><i class="fas fa-truck mr-1"></i>お届け・お支払い先</p>
        <div class="card product_buy_lists">
          <!-- DBから繰り返し処理 -->
          <div class="card-body product_buy_list">
            <div class="row border-bottom pb-3">
              <img src="" class="col-4" alt="DBから商品画像">
              <div class="col-8">
                <h4 class="card-title">DBから商品名</h4>
                <div class="row">
                  <h6 class="card-subtitle mb-2 text-muted col-12">DBから会社名<span></span>DBから商品アピールポイント</h6>
                  <p class="card-text col-12">¥DBから値段<span>  </span>DBから生産地</p>
              </div>
              </div>
            </div>
            <div class="row pt-3 pb-3 border-bottom">
              <form action="" class="col-12">
                @csrf
                <div class="row">
                  <div class="col-6 d-flex">
                    <span class="label col-3">数量</span>
                    <!-- 繰り返し処理 -->
                    <div class="col-9 pt-1 pb-1">
                      
                        <span class="" value="">フォームの入力値</span>
                    </div>
                  </div>
                  <div class="col-6 d-flex">
                    <span class="label col-4">支払い方法</span>
                    <div class="col-8 pt-1 pb-1">
                        <span value="">フォームの入力値</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6 d-flex">
                    <span class="label col-3" style="padding-right: 0px;">配送先</span>
                    <!-- 繰り返し処理 -->
                    <div class="col-8 pt-1 pb-1">
                      <span class="" id="" value="">フォームの入力値</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-10 shipping border" style="margin: 0 auto; max-width: 600px;">
                    <div id="shipping_form">
                      <div class="row">
                        <span class="col-3 label">お名前</span>
                        <span id="shipping_name" type="text" class="label col-8" placeholder="お名前" name="shipping_name">フォームの入力値orユーザDB値</span>
                      </div>
                      <div class="row">
                        <span class="col-3 label">郵便番号</span>
                        <span id="shipping_post_code" type="text" class="label col-8" placeholder="●◆▲-○□▶︎☆" name="shipping_post_code">フォームの入力値orユーザDB値</span>
                      </div>
                      <div class="row">
                        <span class="col-3 label">住所</span>
                        <span id="shipping_address" type="text" class="label col-8" placeholder="◯◯県×x市▶︎◆" name="shipping_address">フォームの入力値orユーザDB値</span>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
              <div class="row border-bottom pt-3 pb-3">
                <div class="col text-right price_detail">
                  <span class="label">商品合計</span>
                  <span>DBから値段（円）</span><br>
                  <span class="label">タイムセール割引額</span>
                  <span>DBから値段（円）</span><br>
                  <span class="label">送料</span>
                  <span>DBから送料（円）</span>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col">
                  <h5 class="text-right">
                    <span>合計（税込）：</span>
                    <span class="total_price">DBから合計金額</span>
                    <span>円</span>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mx-5">
        <div class="col text-right price_detail">
          <span class="label">◯点の総合計（税込）：</span>
          <span class="font-weight-bold">DBから総合計（円）</span>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row my-5 mx-5">
          <button type="" onclick="location.href='{{ route('showBuy') }}'" class="btn col-5">入力に戻る</button>
          <span class="col-2"></span>
          <button type="" onclick="location.href='{{ route('showThanks') }}'" class="btn buy-confirm col-5">この内容で購入する</button>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection