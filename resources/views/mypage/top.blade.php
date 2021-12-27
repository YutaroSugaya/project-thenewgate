@extends('layouts.app')

@section('content')


<br><br>

<div class="main-wrapper">
  <div class="container-fluid">
    <div class="row border-top">
      <p class="small">高橋商事：<span><a href="#">ホーム</a></span><span> > </span><span><a href="{{ route('showMypage') }}">マイページトップ</a></span></p>
    </div>

    <div class="row">
      <div class="main-left sidebar col-3 d-none d-sm-block">
        <!-- <div class="header"></div> -->
        <input type="checkbox" class="openSidebarMenu col-12" id="openSidebarMenu">
          <label for="openSidebarMenu" class="sidebarIconToggle">
            <div class="spinner diagonal part-1"></div>
            <div class="spinner horizontal"></div>
            <div class="spinner diagonal part-2"></div>
          </label>
        <x-mypage.mypage_nav/>
      </div>
      <div class="main-right col-9 col-xs-12">
     
          <div class="row">
            <div class="block">
              <h3 class="page-title mb-0">マイページへようこそ</h3>
            </div>
          </div>

      
        <div class="row mb-3">
          <div class="section card product-cards">
            <h5 class="card-title section-title m-2">閲覧履歴</h5>
            <x-product-list/> 
          </div>
        </div>
        

    </div>

    </div>

  
  
  </div>

</div>


  
  </div>


@endsection