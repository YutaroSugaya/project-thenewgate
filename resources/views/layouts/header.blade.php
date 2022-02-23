
<div class="d-flex justify-content-between align-items-center header_bar">
  <div class="d-flex align-items-center text_middle">
      <h1>
          <a href="{{ route('showHome') }}">
              <span class="text-594838 font-weight-bold text_middle">タカハシ商事</span>
          </a>
      </h1>
      <form method="GET" action="{{ route('showList') }}">
        @csrf
        <div class="pl-4">
          <select id="search_category" value="search_category" name="search_category" class="custom-select text_small text-white font-weight-bold bg-a68a72 border border-a68a72">
            <option disabled selected name="商品カテゴリー" value="商品カテゴリー">商品カテゴリー</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
          @endforeach
          </select>
        </div>
        <div class="pl-4">
            <div class="input-group">
                <input type="text" class="form-control font-weight-bold border border-a68a72" name="search_word" id="search_word" placeholder="何をお探しですか？" value="{{ old('search_word') }}" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button id="search_btn" class="btn btn-outline-secondary font-weight-bold bg-a68a72 text-white border border-a68a72" type="submit">検索</button>
                </div>
            </div>
        </div>
      </form>
  </div>

  
  <div class="d-flex">
    
    @guest
      <div class="d-flex justify-content-center align-items-center bg-a64444" style="width: 94px; height: 86px;">
          <a href="{{ route('login') }}">
              <div class="text-center">
                  <img src="{{ asset('images/common/login_icon.png') }}" alt="" width="30" height="30" class="img-fluid">
                  <span class="d-block text-white font-weight-bold pt-1">ログイン</span>
              </div>
          </a>
      </div>
      <div class="d-flex justify-content-center align-items-center bg-6f2c2c" style="width: 94px; height: 86px;">
        <div class="text-center">
          <a href="{{ route('register') }}">
          <i class="fa fa-user fa-2x" aria-hidden="true" style="color: white;"></i>
            <span class="d-block text-white font-weight-bold pt-1">新規登録</span>
          </a>
        </div>
      </div>
    @endguest

    @auth
      <div class="d-flex justify-content-center align-items-center bg-6f2c2c" style="width: 94px; height: 86px;">
        <div class="text-center">
          <a href="{{ route('showMypage') }}">
            <i class="fa fa-user fa-2x" aria-hidden="true" style="color: white;"></i>
            <span class="d-block text-white font-weight-bold pt-1">マイページ</span>
          </a>
        </div>
      </div>

      <div class="d-flex justify-content-center align-items-center bg-a64444" style="width: 94px; height: 86px;">
        <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
          <div class="text-center">
            <img src="{{ asset('images/common/logout_icon.png') }}" alt="" width="30" height="30" class="img-fluid">
            <span class="d-block text-white font-weight-bold pt-1">ログアウト</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>
          </div>
        </a>
      </div>
    @endauth
      
  </div>
  
</div>
