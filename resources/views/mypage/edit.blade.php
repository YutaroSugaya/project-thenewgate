@extends('layouts.app')

@section('content')
<!-- オーバーレイ -->
<div id="overlay" class="overlay"></div>
<!-- モーダルウィンドウ -->
<div class="modal-window" id="modaldiv">
  <div class="container modal-container">
    <div class="title modal-title">
      <h5 class="text-center">会員情報編集</h3>
    </div>
  </div>
  <!-- 閉じるボタン -->
  <button class="js-close btn btn-danger btn-tb"></button>
  <button class="js-buy btn btn-success btn-tb" type="button" ></button>
</div>

<div class="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-3 mypage-left">
        <x-mypage-nav/>
      </div>
      <div class="col-9 mypage-right">
        <div class="row">
          <div class="col">
            <div class="mypage-title">
              <p class="text-center">会員情報</p>
            </div>
          </div>
        </div>
        <div class="row block">
          <form class="col-12">
            <div class="form-group">
              <label>メールアドレス（会員ID）</label>
              <input type="text" class="form-control col-12" value="mail@sample.com" disabled>
            </div>
            <div class="form-group">
              <label>お名前</label>
              <div class="form-inline">
                <input type="text" class="form-control col-4" placeholder="姓">
                <span class="col-1"></span>
                <input type="text" class="form-control col-4" placeholder="名">
              </div>
              <label>オナマエ（フリガナ）</label>
              <div class="form-inline">
                <input type="text" class="form-control col-4" placeholder="セイ">
                <span class="col-1"></span>
                <input type="text" class="form-control col-4" placeholder="メイ">
              </div>
            </div>
            <div class="form-group">
              <label>郵便番号</label>
              <input type="text" class="form-control col-4" placeholder="">
            </div>
            <div class="form-group">
              <label>住所</label>
              <!-- <select class="form-control">
                <option value="" selected>都道府県</option>
                <option value="">北海道</option>
              </select> -->
              <input type="text" class="form-control" placeholder="◯◯県×x市▶︎◆">
            </div>
            <div class="form-group">
              <label>電話番号</label>
              <input type="text" class="form-control col-4" placeholder="XXX-XXXX-XXXX">
            </div>
          </form>
        </div>
        <div class="btn-row">
          <button type="button" class="btn">編集する</button>
          <button type="button" class="btn">確認する</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection