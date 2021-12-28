@extends('layouts.app')

@section('content')
<div class="wrapper">
  <div class="container">
    <div class="row">
    <div class="col-xs-4">
         <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#">ダッシュボード</a></li>
            <li><a href="#">サーバー１</a></li>
            <li><a href="#">サーバー２</a></li>
            <li><a href="#">サーバー３</a></li>
         </ul>
        </div>
        <div class="col-xs-8">
         <div class="panel panel-info">
            <div class="panel-heading">
             <div class="panel-title">sv-01</div>
            </div>
            <div class="panel-body">サーバー１のステータスOK</div>
         </div>
         
         <div class="panel panel-info">
            <div class="panel-heading">
             <div class="panel-title">sv-02</div>
            </div>
            <div class="panel-body">サーバー２のステータスOK</div>
         </div>
         
         <div class="panel panel-info">
            <div class="panel-heading">
             <div class="panel-title">sv-03</div>
            </div>
            <div class="panel-body">サーバー３のステータスOK</div>
         </div>
        </div>

      <!-- <div class="col-4">
        <h2 class=""><i class="far fa-user">マイページ</i></h2>
        <ul class="">
          <li class="">
            <a href="{{ route('showMypage') }}">マイページトップ</a>
          </li>
          <li class="">
            <a href="#!">購入履歴</a>
          </li>
          <li class="">
            <a href="#!">お気に入り</a>
          </li>
          <li class="">
            <a href="#!">会員情報編集</a>
          </li>
          <li class="">
            <a href="#!">会員規約</a>
          </li>
          <li class="">
            <a href="#!">ログアウト</a>
          </li>
          <li class="">
            <a href="#!">退会はこちら</a>
          </li>
        </ul>
      </div>

      <div class="col-8">
        <div class="row">
          <div class="col">
            <h1>マイページ</h1>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h1>お気に入り</h1>
          </div>  
        </div>
        <div class="row">
          <div class="col">
            <h1>閲覧履歴</h1>
          </div>  
        </div>
      </div> -->
    </div>
  </div>

</div>

@endsection