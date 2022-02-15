@extends('layouts.app')
  @push('css')
    <link rel="stylesheet" href="css/product_details.css">
  @endpush

@section('content')
<body>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">商品名</h3>
        <h6 class="card-subtitle">サブタイトル？</h6>
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
          <div class="img">
            <span><img src="https://i.imgur.com/bV1xmG5.jpg"></span>
            <span><img src="https://i.imgur.com/vgMi4nw.jpg"></span>
            <span><img src="https://i.imgur.com/hRlGe10.jpg"></span>
          </div>

          <div class="col-lg-7 col-md-7 col-sm-6">
            <h4 class="box-title mt-5">商品詳細</h4>
            <p>test　{{  }}</p>
            <h2 class="mt-5">
              1000円<small class="text-success">(36%off)</small>
            </h2>
            <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title=""
                data-original-title="Add to cart">
                <i class="fa fa-shopping-cart"></i>
            </button>
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
                    <td width="350">Brand　会社名</td>
                    <td>Stellar</td>
                  </tr>
                  <tr>
                    <td>Delivery Condition　産地</td>
                    <td>Knock Down</td>
                  </tr>
                  <tr>
                    <td>Seat Lock Included　消費期限</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Type　保存方法</td>
                    <td>Office Chair</td>
                  </tr>
                  <tr>
                    <td>Style　アレルギー物質</td>
                    <td>Contemporary&amp;Modern</td>
                  </tr>
                  <tr>
                    <td>Wheels Included　大きさ</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Upholstery Included　重量</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Upholstery Type</td>
                    <td>Cushion</td>
                  </tr>
                  <tr>
                    <td>Head Support</td>
                    <td>No</td>
                  </tr>
                  <tr>
                    <td>Suitable For</td>
                    <td>Study&amp;Home Office</td>
                  </tr>
                  <tr>
                    <td>Adjustable Height</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Model Number</td>
                    <td>F01020701-00HT744A06</td>
                  </tr>
                  <tr>
                    <td>Armrest Included</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td>Care Instructions</td>
                    <td>Handle With Care,Keep In Dry Place,Do Not Apply Any Chemical For Cleaning.
                    </td>
                  </tr>
                  <tr>
                    <td>Finish Type</td>
                    <td>Matte</td>
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
