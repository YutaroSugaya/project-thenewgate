@extends('layouts.app')

@section('content')

<br>
<br>
<div class="wrapper">
  <div class="container-fluid">
    <div class="buy-title mt-3 mb-3">
      <h3>Thank You</h3>
    </div>
    <ul class="progressbar">
      <li class="complete">ご入力</li>
      <li class="complete">ご確認</li>
      <li class="active">完了</li>
    </ul>
    <div class="card text-center p-4 mb-2">
      <h5>ご注文ありがとうございます</h5>
      <p>注文内容がショップに送信されました。</p>
      <p>お客様のご注文番号は<span>「〇〇△△××□□」</span>です。</p>
      <img src="https://asbs.jp/mgr/ckfinder/userfiles/images/PR_thankyou.jpg" alt="" class="w-50 h-50" style="margin: 0 auto;">
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