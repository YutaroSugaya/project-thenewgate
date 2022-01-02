@extends('layouts.app')
  @push('css')  
    <link href="{{ asset('css/buy.css') }}" rel="stylesheet">
  @endpush
@section('content')

<div class="wrapper main-section mx-auto">
  <div class="container-fluid">
  <div class="row">
      <div class="buy-title mt-3 mb-3">
        <h5 class="text-center ml-2 mr-2">Thank You!</h5>
      </div>
    </div>

    <div class="row border-bottom mx-5 py-3">
      <ul class="progressbar mx-auto">
        <li class="complete">ご入力</li>
        <li class="complete">ご確認</li>
        <li class="active">完了</li>
      </ul>
    </div>
    
  <div class="row mt-3">
    <div class="card text-center col-8 mx-auto p-5">
      <h5>ご注文ありがとうございます</h5>
      <p>注文内容がショップに送信されました。</p>
      <p>お客様のご注文番号は<span>「〇〇△△××□□」</span>です。</p>
      <img src="https://asbs.jp/mgr/ckfinder/userfiles/images/PR_thankyou.jpg" alt="" class="w-50 h-50" style="margin: 0 auto;">
    </div>
  </div>
    <div class="row">
      <div class="col text-center">
        <a href="">注文内容を確認する</a>
      </div>
    </div>
  </div>
</div>

<br><br>



@endsection