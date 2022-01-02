@extends('layouts.app')
  @push('css')
    <link href="{{ asset('css/mypage.css') }}" rel="stylesheet">
  @endpush
@section('content')

<div class="main-section container-fluid">
  <div class="row">
    <div class="col-12 justify-content-center">
      <p class="small m-0 p-2">高橋商事：<span><a href="/home">ホーム</a></span><span> > </span><span><a href="{{ route('showMypage') }}">マイページトップ</a></span></p>
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
          <x-mypage.mypage_nav/>
        </div>
        
        <div class="main-right col-9 col-xs-12">
          <h3 class="page-title mb-3">マイページへようこそ</h3>
          <div class="section card product-cards">
            <h5 class="m-2">閲覧履歴</h5>
            <x-product-list/> 
          </div>
        </div>
  
      </div>


</div>


@endsection