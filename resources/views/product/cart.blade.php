@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush
  @push('js')
  <script src="{{ asset('js/cart.js') }}" defer></script>
  @endpush
@section('content')


<section class="shopping-cart dark">

  
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
              <div data="{{ $cart_product->id }}" class="product">
                <div class="row product-row">
                  <div class="col-md-9">
                    <a class="product_link" href="/product/detail/{{ $cart_product->product_id }}">
                      <div class="row">
                        <div class="col-md-4">
                          <img class="img-fluid mx-auto d-block image" img src="https://i.imgur.com/bV1xmG5.jpg">
                        </div>
                        <div class="col-md-8">
                          <div class="info">
                            <div class="product-info">
                              <span>{{ $cart_product->product_name }}</span>
                              <div class="product-detail-info">
                                <div>サイズ: <span class="value">{{$cart_product->size}}</span></div>
                                <div>保存方法: <span class="value">{{$cart_product->preservation_method}}</span></div>
                                <div>賞味期限: <span class="value">{{$cart_product->expiration_date}}</span></div>
                                <div>価格: <span class="product_price">{{$cart_product->product_price}}</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-3">
                    <div class="row">
                      <div class="col-md-12 quantity" value="{{ $cart_product->product_id }}">
                        <label for="">注文数:</label>
                        <input id="quantity" value="1" type="number" min="0" max="10" value="{{$cart_product->id}}" class="quantity-input form-control">
                      </div>
                      <!-- <div class="col-md-12 price">
                        <span id="product_subtotal" class="product_subtotal" value="{{ $cart_product->product_price }}">{{ $cart_product->product_price }}</span><span>円</span>
                      </div> -->
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
