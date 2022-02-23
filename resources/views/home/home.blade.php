
@extends('layouts.app')

@section('content')

<div class="mw-100">
    <img src="{{ asset('images/home/demo_main01.jpg') }}" alt="" width="100%" height="auto" class="img-fluid">
</div>


<section class="mw-100">
  <div class="container py-4 py-md-5">
    <div class="d-flex justify-content-between align-items-center">
      <h2 class="text-a68a72 font-weight-bold py-6">お知らせ</h2>
      <div>
        <a href="{{ route('showNews') }}">
          <span class="text_medium font-weight-bold">お知らせ一覧</span>
        </a>
      </div>
    </div>
    <ul class="list-unstyled pt-md-3 pt-2">
      @foreach($news_lists as $news_list)
      <li class="border-bottom border-e4d3c4">
        <a href="/news/{{ $news_list->id }}">
          <dl class="row mt-0 mb-0 pt-1">
            <dt class="col-lg-2 col-12">
              <span class="">{{ $news_list->news_time }}</span>
            </dt>
            <dd class="col-lg-10 col-12 position-relative arrow_685647_16">
              <span class="font-weight-bold">{{ $news_list->news_title }}</span>
            </dd>
          </dl>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
</section>



<section class="mw-100 bg-white">
    <div class="container py-4 py-md-5">
        <div class="">
            <div class="text-d73d3d font-weight-bold text-center text_medium">＼ 2021年12月31日 23：00まで ／</div>
            <h2 class="text-d73d3d font-weight-bold py-6 text-center">タイムセール開催中</h2>
            <a class="" href="{{ route('showSale') }}">
              <p class="text-right text_medium font-weight-bold">タイムセール商品一覧</p>
            </a>
        </div>
        <ul class="list-unstyled row">
          @foreach($products as $product)
            <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                <a href="/product/detail/{{ $product->id }}">
                    <div class="">
                        <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281"
                            class="img-fluid">
                    </div>
                    <div class="pt-2 pt-md-3">
                        <span class="text_medium font-weight-bold">{{ $product->product_name }}</span>
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
@endsection
