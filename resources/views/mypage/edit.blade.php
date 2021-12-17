@extends('layouts.app')

@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">会員情報確認画面</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="col-12">
          <div class="form-group">
            <label>メールアドレス（会員ID）</label>
            <p id="modal_email" class="col-12" value="mail@sample.com"></p>
          </div>
          <div class="form-group">
            <label>お名前</label>
            <div class="form-inline">
              <p id="modal_last_name" type="text" class="col-4" placeholder="姓">
              <span class="col-1"></span>
              <input id="first_name" type="text" class="form-control col-4" placeholder="名" disabled>
            </div>
          </div>
          <div class="form-group">
            <label>オナマエ（フリガナ）</label>
            <div class="form-inline">
              <input id="last_name_kana" type="text" class="form-control col-4" placeholder="セイ" disabled>
              <span class="col-1"></span>
              <input id="first_name_kana" type="text" class="form-control col-4" placeholder="メイ" disabled>
            </div>
          </div>
          <div class="form-group">
            <label>郵便番号</label>
            <input id="post_code" type="text" class="form-control col-4" placeholder="" disabled>
          </div>
          <div class="form-group">
            <label>住所</label>
            <!-- <select class="form-control">
              <option value="" selected>都道府県</option>
              <option value="">北海道</option>
            </select> -->
            <input id="address" type="text" class="form-control" placeholder="◯◯県×x市▶︎◆" disabled>
          </div>
          <div class="form-group">
            <label>電話番号</label>
            <input id="phone_number" type="text" class="form-control col-4" placeholder="XXX-XXXX-XXXX" disabled>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">閉じる</button>
        <button type="button" class="btn">更新する</button>
      </div>
    </div>
  </div>
</div>


<br>
<br>
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
              <input id="email" type="text" class="form-control col-12" value="mail@sample.com" disabled>
            </div>
            <div class="form-group">
              <label>お名前</label>
              <div class="form-inline">
                <input id="last_name" type="text" class="form-control col-4" placeholder="姓" disabled>
                <span class="col-1"></span>
                <input id="first_name" type="text" class="form-control col-4" placeholder="名" disabled>
              </div>
            </div>
            <div class="form-group">
              <label>オナマエ（フリガナ）</label>
              <div class="form-inline">
                <input id="last_name_kana" type="text" class="form-control col-4" placeholder="セイ" disabled>
                <span class="col-1"></span>
                <input id="first_name_kana" type="text" class="form-control col-4" placeholder="メイ" disabled>
              </div>
            </div>
            <div class="form-group">
              <label>郵便番号</label>
              <input id="post_code" type="text" class="form-control col-4" placeholder="" disabled>
            </div>
            <div class="form-group">
              <label>住所</label>
              <!-- <select class="form-control">
                <option value="" selected>都道府県</option>
                <option value="">北海道</option>
              </select> -->
              <input id="address" type="text" class="form-control" placeholder="◯◯県×x市▶︎◆" disabled>
            </div>
            <div class="form-group">
              <label>電話番号</label>
              <input id="phone_number" type="text" class="form-control col-4" placeholder="XXX-XXXX-XXXX" disabled>
            </div>
          </form>
        </div>
        <div class="btn-row">
          <button type="button" id="mypage-edit" class="btn edit">編集する</button>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection