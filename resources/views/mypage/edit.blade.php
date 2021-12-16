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
      <div class="col-3 border-top">
        <x-mypage-nav/>
      </div>
      <div class="col-9 border-bottom border-top">
        <div class="row">
          <h1 class="">会員情報</h1>
        </div>
        <div class="row">
          <form class="col-11">
            <div class="form-group">
              <label>メールアドレス（会員ID）</label>
              <input type="text" class="form-control-plaintext" value="" disabled>
            </div>
            <div class="form-group">
              <label>お名前</label>
              <div class="form-inline">
                <input type="text" class="form-control col-5" placeholder="姓">
                <span class="col-1"></span>
                <input type="text" class="form-control col-5" placeholder="名">
              </div>
              <label>オナマエ（フリガナ）</label>
              <div class="form-inline">
                <input type="text" class="form-control col-5" placeholder="セイ">
                <span class="col-1"></span>
                <input type="text" class="form-control col-5" placeholder="メイ">
              </div>
            </div>
            <div class="form-group">
              <label>郵便番号</label>
              <input type="text" class="form-control col-5" placeholder="">
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
              <input type="text" class="form-control col-5" placeholder="XXX-XXXX-XXXX">
            </div>
          </form>
          <div class="">
            <div class="">
              <button type="button" class="btn btn-block">確認する
              </button>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
</div>
@endsection