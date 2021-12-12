@extends('layouts.app')

@section('content')
<div class="wrapper">
  <div class="container grid-container">
    <div class="row">
      <div class="col-md-4 hidden-xs grid-item-A">
        <nav class="">
          <h2 class=""><i class="far fa-user">マイページ</i></h2>
          <ul class="list-group">
            <li class="list-group-item list-group-item-action">
              <a href="{{ route('showMypage') }}">マイページトップ</a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="#!">購入履歴</a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="#!">お気に入り</a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="#!">会員情報編集</a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="#!">会員規約</a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="#!">ログアウト</a>
            </li>
            <li class="list-group-item list-group-item-action">
              <a href="#!">退会はこちら</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-8">
            <h1>マイページ</h1>
          </div>  
          <div class="col-md-8">
            <h1>お気に入り</h1>
          </div>  
          <div class="col-md-12">
            <h1>閲覧履歴</h1>
          </div>  


        </div>
      </div>
    </div>
  </div>

</div>

@endsection