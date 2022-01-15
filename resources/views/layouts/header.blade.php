
<div class="d-flex justify-content-between align-items-center header_bar">
  <div class="d-flex align-items-center text_middle">
      <h1>
          <a href="/home">
              <span class="text-594838 font-weight-bold text_middle">タカハシ商事</span>
          </a>
      </h1>
      <div class="pl-4">
          <select class="custom-select text-white font-weight-bold bg-a68a72 border border-a68a72">
          <option selected>商品カテゴリー</option>
          <option value="1">テスト</option>
          <option value="2">テスト</option>
          <option value="3">テスト</option>
          </select>
      </div>
      <div class="pl-4">
          <div class="input-group">
              <input type="text" class="form-control font-weight-bold border border-a68a72" placeholder="何をお探しですか？" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                  <button class="btn btn-outline-secondary font-weight-bold bg-a68a72 text-white border border-a68a72" type="button" id="button-addon2">検索</button>
              </div>
          </div>
      </div>
  </div>
  <div class="d-flex">
      <div class="d-flex justify-content-center align-items-center bg-a64444" style="width: 94px; height: 86px;">
          <a href="{{ route('login') }}">
              <div class="text-center">
                  <img src="{{ asset('images/common/icon_login.png') }}" alt="" width="21" height="23" class="img-fluid">
                  <span class="d-block text-white font-weight-bold pt-1">ログイン</span>
              </div>
          </a>
      </div>
      <div class="d-flex justify-content-center align-items-center bg-6f2c2c" style="width: 94px; height: 86px;">
          <div class="text-center">
              <a href="{{ route('register') }}">
                  <img src="{{ asset('images/common/icon_register.png') }}" alt="" width="21" height="23" class="img-fluid">
                  <span class="d-block text-white font-weight-bold pt-1">新規登録</span>
              </a>
          </div>
      </div>
  </div>
</div>
