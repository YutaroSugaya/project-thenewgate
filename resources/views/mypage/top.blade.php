@extends('layouts.app')

@section('content')

<br>
<br>
<div class="wrapper">
  <div class="container-fluid">
    <div class="row">

      <div class="col-3 mypage-left">
        <x-mypage-nav/>
      </div>

      <div class="col-8 mypage-right">
        <div class="row">
          <div class="col">
            <div class="mypage-title">
              <p class="text-center">マイページへようこそ</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col  block">
            <h4 class="mypage-section">お気に入り</h4>
            <x-product-list/>
          </div>  
        </div>
        <div class="row">
          <div class="col  block">
            <h4 class="mypage-section">購入履歴</h4>
            <x-product-list/>
          </div>  
        </div>
      </div>
    </div>
  </div>

</div>

@endsection