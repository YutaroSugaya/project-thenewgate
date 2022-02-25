@extends('layouts.app')

@section('content')


<div class="container d-flex justify-content-center py-3">
  <div class="row">
    <h2>お気に入り一覧</h2>
    @foreach($products as $product)
    <div class="col-md-10">
        <div class="card card-body">
            <div
                class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                <div class="mr-2 mb-3 mb-lg-0"> <img src="https://i.imgur.com/bV1xmG5.jpg" width="150"
                        height="150" alt=""> </div>
                <div class="media-body">

                    <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">{{ $product->product_name }}</a> </h6>
                    <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                        <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">タグ？</a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">{{ $product->recommendation }}</a>
                        </li>
                    </ul>
                    <p class="mb-3"></p>
                    <ul class="list-inline list-inline-dotted mb-0">
                        <li class="list-inline-item">メーカー<a href="#" data-abc="true">{{ $product->company_name }}</a></li>
                        <li class="list-inline-item">産地 <a href="#" data-abc="true">{{ $product->prefecture }}</a></li>
                    </ul>
                </div>
                <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                    <h3 class="mb-0 font-weight-semibold">{{ $product->product_price }}円</h3>
                    <button type="button"
                        class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i>
                        カートに追加</button>
                </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

@endsection
