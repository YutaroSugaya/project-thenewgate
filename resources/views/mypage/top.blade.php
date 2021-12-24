@extends('layouts.app')

@section('content')

<br>
<section class="border-top">
  <div class="container-fluid" style="display: block;">
    <div class="col-12 text-left">
      <p class="small">高橋商事：<span><a href="#">ホーム</a></span><span> > </span><span><a href="{{ route('showMypage') }}">マイページトップ</a></span></p>
    </div>
  </div>
</section>
<div class="wrapper">
    
    <!-- Sidebar Holder -->
    <x-mypage.mypage_nav/>
    <!-- Page Content Holder -->
    <div id="content">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
  
          <div class="navbar-header d-flex">
            <h2 class="page-title m-0 ml-3">マイページへようこそ</h2>
            <button type="button" id="sidebarCollapse" class="btn navbar-btn p-0">
            <i class="fas fa-home"></i>
            </button>
          </div>
  
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </div>
        </div>
      </nav>
  
    
      <div class="line"></div>

      <div class="row">
        <div class="section">
          <h3 class="section-title">お気に入り</h3>
          <x-product-list/> 
        </div>
      </div>
      <div class="row">
        <div class="section">
          <h3 class="section-title">注文履歴</h3>
          <x-product-list/> 
        </div>
      </div>
      

  
    
    </div>


</div>

@endsection