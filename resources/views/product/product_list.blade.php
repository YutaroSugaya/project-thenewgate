@extends('layouts.app')
  @push('css')
    <link rel="stylesheet" href="css/product_details.css">
  @endpush

@section('content')
<body>
  <div class="container py-3">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">商品名 キーワード</h3>
        <h6 class="card-subtitle">サブタイトル 該当数</h6>
        <div class="row">
          <section class="mw-100 bg-white">
            <div class="container py-4 py-md-5">

              <ul class="list-unstyled row">
                @foreach($products as $product)
                  <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                      <a href="/product/detail/{{ $product->id }}">
                          <div class="">
                              <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281"
                                  class="img-fluid">
                          </div>
                          <div class="pt-2 pt-md-3">
                              <span class="text_medium font-weight-bold">{{ $product->product_name }}</span><br>
                              <span class="text_small">{{ $product->recommendation }}</span>
                          </div>
                          <div class="pt-1 pt-md-2">
                              <span class="text-d73d3d text_large font-weight-bold">{{ $product->product_price }}</span>
                              <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                          </div>
                      </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </section>

          
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
