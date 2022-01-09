@extends('layouts.app')
  @push('css')
  <link href="{{ asset('css/buy.css') }}" rel="stylesheet">
  @endpush
  @push('js')
    <script src="{{ asset('js/buy.js') }}" defer></script>
  @endpush
@section('content')

<div class="wrapper main-section mx-auto">
  <div class="container-fluid">
    
    <div class="row">
      <div class="buy-title mt-3 mb-3">
        <h5 class="text-center ml-2 mr-2"><i class="fas fa-shopping-cart mr-1"></i>注文手続き</h5>
      </div>
    </div>
    <div class="row border-bottom mx-5 py-3">
      <ul class="progressbar mx-auto">
        <li class="active">ご入力</li>
        <li>ご確認</li>
        <li>完了</li>
      </ul>
    </div>

    <div class="row border-bottom mx-5 my-4 pb-3">
      <div class="col-12">
        <h5 class=""><i class="far fa-user mr-1 mb-3"></i>注文者情報</h5>
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
        <h5><i class="fas fa-truck mr-1 mb-3"></i>お届け・お支払いの指定</h5>
        <div class="card product_buy_lists p-3">
          <!-- DBから繰り返し処理 -->
          <div class="card-body product_buy_list">
            <div class="row border-bottom pb-3">
              <img src="" class="col-4" alt="DBから商品画像">
              <div class="col-8">
                <h4 class="card-title">DBから商品名</h4>
                <div class="row">
                  <h6 class="card-subtitle mb-2 text-muted col-12">DBから会社名<span>  </span>DBから商品アピールポイント</h6>
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
                      <select name="" id="">
                        <option value="">DBからカート入力値</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="...">...</option>
                        <option value="10">10</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6 d-flex">
                    <span class="label col-4">支払い方法</span>
                    <div class="col-8 pt-1 pb-1">
                      <select name="" id="">
                        <option value="">クレジットカード</option>
                        <option value="1">paypal</option>
                        <option value="1">代金引換</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-6 d-flex">
                    <span class="label col-3">配送先</span>
                    <!-- 繰り返し処理 -->
                    <div class="col-9 pt-1 pt-1">
                      <select name="" id="shipping_address">
                        <option id="user_address" value="user_address">注文者情報の住所に送る</option>
                        <option id="other_address" value="other_address">新たな配送先指定</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6 shipping d-flex">

                      <div id="shipping_form" style="display: none;" class="col-12">
                        <span class="col-12 label">お名前</span>
                        <input id="shipping_name" type="text" class="form-control col-12" placeholder="お名前" name="shipping_name" required>
                      
                        <span class="col-12 label">郵便番号</span>
                        <input id="shipping_post_code" type="text" class="form-control col-12" placeholder="●◆▲-○□▶︎☆" name="shipping_post_code" required>
                      
                        <span class="col-12 label">住所</span>
                        <input id="shipping_address" type="text" class="form-control col-12" placeholder="◯◯県×x市▶︎◆" name="shipping_address" required>
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
          <button type="" onclick="location.href='/cart'" class="btn col-5"><i class="fas fa-shopping-cart mr-1"></i>カートへ戻る</button>
          <span class="col-2"></span>
          <button type="" onclick="location.href='{{ route('showCheck') }}'" class="btn col-5">この内容で確認する</button>
        </div>
      </div>

    </div>
  </div>
</div>


@endsection