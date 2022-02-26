@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush
  @push('js')
  <script src="{{ asset('js/cart.js') }}" defer></script>
  @endpush
@section('content')


<section class="shopping-cart dark">
    <div class="modal js-modal">
        <div class="modal_background js-modal-close"></div>
        <div class="modal_content">
            <p>モーダルウィンドウ</p>
            <a class="modal-close-btn" href="">閉じる</a>
        </div>
    </div>

  <div class="container">
    <div class="block-heading">
      <h2>ショッピングカート</h2>
      <p>ご注文の商品一覧</p>
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="items">
            @foreach($cart_products as $cart_product)
              <div class="product">
                <div class="row">
                  <div class="col-md-9 product_info">
                    <a class="product_link" href="/product/detail/{{ $cart_product->id }}">
                      <div class="row">
                        <div class="col-md-4">
                          <img class="img-fluid mx-auto d-block image" img src="https://i.imgur.com/bV1xmG5.jpg">
                        </div>
                        <div class="col-md-8">
                          <div class="info">
                            <div class="product-name">
                              <div class="product-name">
                                <span>{{ $cart_product->product_name }}</span>
                                  <div class="product-info">
                                  <div>サイズ: <span class="value">{{$cart_product->size}}</span></div>
                                  <div>保存方法: <span class="value">{{$cart_product->preservation_method}}</span></div>
                                  <div>賞味期限: <span class="value">{{$cart_product->expiration_date}}</span></div>
                                  <div>価格: <span id="product_price" class="value">{{$cart_product->product_price}}</span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-3">
                    <div class="row">
                      <div class="col-md-12 quantity">
                        <label for="quantity">注文数:</label>
                        <input id="quantity" type="number" pattern="^[0-9]+$" class="form-control quantity-input">
                      </div>
                      <div class="col-md-12 price">
                        <span id="product_subtotal"></span><span>円</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="summary">
            <h3>カート合計</h3>
            <div class="summary-item"><span class="text">小計</span><span class="price">1000</span></div>
            <div class="summary-item"><span class="text">割引</span><span class="price">0</span></div>
            <div class="summary-item"><span class="text">送料</span><span class="price">0</span></div>
            <div class="summary-item"><span class="text">合計額</span><span class="price">????円</span></div>
            <button type="button" class="btn btn-primary btn-lg btn-block">購入</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
