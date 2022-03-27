@extends('layouts.app')
  @push('css')
    <link rel="stylesheet" href="{{ asset ('css/product_details.css') }}">
  @endpush

  @push('js')
  <script src="{{ asset('js/cart.js') }}" defer></script>
  @endpush

@section('content')
<body>
  <div class="container py-3">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">{{ $product->product_name }}</h3>
        <h6 class="card-subtitle">{{ $product->recommendation }}</h6>
        <div class="row">

          {{-- カルーセルのスライド --}}
          <div class="container-sm">
            <div class="row">
              <div class="col-md-8 mx-auto">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for carousel items -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://i.imgur.com/bV1xmG5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-item">
                      <img src="https://i.imgur.com/vgMi4nw.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-item">
                      <img src="https://i.imgur.com/hRlGe10.jpg" class="img-fluid" alt="">
                    </div>
                  </div>
                  <!-- Carousel controls -->
                  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                  </a>

                </div>
              </div>
            </div>
          </div>
          
          <div class="col-12">
            <h4 class="box-title mt-5">{{ $product->comment }}</h4>
            <a class="aiu" href="{{ route('addWishList', ['id' => $product->id]) }}">
              @if($check)
              <i class="fa fa-solid fa-star isActive"></i>
              @else
              <i class="fa fa-solid fa-star"></i>
              @endif
            </a>
            <p>{{ $product->product_name }}</p>
            <h2 class="mt-5">
              {{ $product->product_price }}円<small class="text-success">( {{ $product->discount }} %off)</small>
            </h2>
            <a href="/cart/add/{{ $product->id }}" class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
              <i class="fa fa-shopping-cart" style="color: white;"></i>
            </a>
            <button class="btn btn-primary btn-rounded">購入する</button>
            {{-- 送料一覧　モーダル画面 --}}
            <button type="button" class="btn btn-primary launch" data-toggle="modal"
                data-target="#staticBackdrop"> <i class="fa fa-info"></i> 送料を確認
            </button>
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body ">
                    <div class="text-right"> <i class="fa fa-close close"
                            data-dismiss="modal"></i> </div>
                    <div class="px-4 py-5">
                      <h5 class="text-uppercase">送料一覧</h5>
                      <h4 class="mt-5 theme-color mb-5"></h4>
                      <span class="theme-color">送料</span>
                      <div class="mb-3">
                          <hr class="new1">
                      </div>
                      <div class="d-flex justify-content-between"> <span
                              class="font-weight-bold"></span>全国一律<span
                              class="text-muted">¥1100</span> </div>
                      <div class="d-flex justify-content-between"> <small></small>
                          <small></small>
                      </div>
                      <div class="d-flex justify-content-between"> <small></small>
                          <small></small>
                      </div>
                      <div class="d-flex justify-content-between mt-3"> <span
                              class="font-weight-bold"></span> <span
                              class="font-weight-bold theme-color"></span> </div>
                      <div class="text-center mt-5"> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="box-title mt-5">商品情報</h3>
            <div class="table-responsive">
              <table class="table table-striped table-product">
                <tbody>
                  <tr>
                    <td class="w-50">会社名</td>
                    <td>{{ $product->company_name }}</td>
                  </tr>
                  <tr>
                    <td>産地</td>
                    <td>{{ $product->prefecture }}</td>
                  </tr>
                  <tr>
                    <td>消費期限</td>
                    <td>{{ $product->expiration_date }}</td>
                  </tr>
                  <tr>
                    <td>保存方法</td>
                    <td>{{ $product->preservation_method }}</td>
                  </tr>
                  <tr>
                    <td>アレルギー物質</td>
                    <td>{{ $product->allergic_substance }}</td>
                  </tr>
                  <tr>
                    <td>大きさ</td>
                    <td>{{ $product->size }}</td>
                  </tr>
                  <tr>
                    <td>重量</td>
                    <td>{{ $product->weight }}</td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection
