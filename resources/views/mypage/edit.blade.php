@extends('layouts.app')
  @push('css')
    <link href="{{ asset('css/mypage.css') }}" rel="stylesheet">
  @endpush
  @push('js')
    <script src="{{ asset('js/mypage.js') }}" defer></script>
  @endpush
@section('content')

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog mx-auto" role="document">
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
              <p id="modal_last_name" type="text" class="col-4" placeholder="姓"></p>
              <span class="col-1"></span>
              <p id="modal_first_name" type="text" class="col-4" placeholder="名"></p>
            </div>
          </div>
          <div class="form-group">
            <label>オナマエ（フリガナ）</label>
            <div class="form-inline">
              <p id="modal_last_name_kana" type="text" class="col-4" placeholder="セイ"></p>
              <span class="col-1"></span>
              <p id="modal_first_name_kana" type="text" class="fcol-4" placeholder="メイ"></p>
            </div>
          </div>
          <div class="form-group">
            <label>郵便番号</label>
            <p id="modal_post_code" type="text" class="col-4" placeholder=""></p>
          </div>
          <div class="form-group">
            <label>住所</label>
            <p id="modal_address" type="text" class="col-12" placeholder="◯◯県×x市▶︎◆"></p>
          </div>
          <div class="form-group">
            <label>電話番号</label>
            <p id="modal_phone_number" type="text" class="col-4" placeholder="XXX-XXXX-XXXX"></p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn" data-dismiss="modal">閉じる</button>
        <button type="button" id="edit_user" class="btn">更新する</button>
      </div>
    </div>
  </div>
</div>


<!-- メイン -->
<div class="main-section container-fluid">
  <div class="row">
    <div class="col-12 justify-content-center">
      <p class="small m-0 p-2">
        高橋商事：<span><a href="/home">ホーム</a></span>
        <span> > </span>
        <span><a href="{{ route('showMypage') }}">マイページトップ</a></span>
        <span> > </span>
        <span><a href="{{ route('showEdit') }}">会員情報</a></span>
      </p>
    </div>
  </div>


  <div class="row mx-auto my-4">
    <div class="main-left col-3">
      <input type="checkbox" class="openSidebarMenu col-12" id="openSidebarMenu">
        <label for="openSidebarMenu" class="sidebarIconToggle">
          <div class="spinner diagonal part-1"></div>
          <div class="spinner horizontal"></div>
          <div class="spinner diagonal part-2"></div>
        </label>
      @include('mypage.mypage_nav')
    </div>

    <div class="main-right col-9 col-xs-12">
      <h3 class="page-title mb-3">会員情報</h3>
      <div class="section card py-3 container-fluid">
        <div class="row">
          <form id="user_edit_form" class="col-12">
            <div class="form-group">
              <label id="label_email">メールアドレス（会員ID）</label>
              <input id="email" type="text" value="{{ $user->email }}" class="form-control col-12" placeholder="mail@sample.com" name="email" readonly required>
            </div>
            <div class="form-group">
              <label>お名前</label>
              <div class="form-inline">
                <input id="last_name" type="text" value="{{ $user->last_name }}" class="form-control col-4" placeholder="姓" name="last_name" readonly>
                <span class="col-1"></span>
                <input id="first_name" type="text" value="{{ $user->first_name }}" class="form-control col-4" placeholder="名" name="first_name" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>オナマエ（フリガナ）</label>
              <div class="form-inline">
                <input id="last_name_kana" type="text" value="{{ $user->last_name_kana }}" class="form-control col-4" placeholder="セイ" name="last_name_kana" readonly>
                <span class="col-1"></span>
                <input id="first_name_kana" type="text" value="{{ $user->first_name_kana }}" class="form-control col-4" placeholder="メイ" name="first_name_kana" readonly>
              </div>
            </div>
            <div class="form-group">
              <label>郵便番号</label>
              <input id="post_code" type="text" value="{{ $user->post_code }}" class="form-control col-4" placeholder="" name="post_code" readonly required>
            </div>
            <div class="form-group">
              <label>住所</label>
              <input id="address" type="text" value="{{ $user->address }}" class="form-control" placeholder="◯◯県×x市▶︎◆" name="address" readonly>
            </div>
            <div class="form-group">
              <label>電話番号</label>
              <input id="phone_number" type="text" value="{{ $user->phone_number }}" class="form-control col-4" placeholder="XXX-XXXX-XXXX" name="phone_number" readonly>
            </div>
          </form>  
        </div>
      </div>
      <div class="container-fluid"> 

        <div class="row my-2 mt-3">
          <button type="button" id="mypage-edit" class="btn col-12">編集する</button>
        </div>
      </div>

    </div>

  </div>
</div>
    
@endsection