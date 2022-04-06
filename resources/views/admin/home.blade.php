
@extends('layouts.admin.app')

@section('content')

<section>
  <div class="container d-flex justify-content-center py-3">
    <div class="row">
      <h2>管理者画面へようこそ</h2>
        <div class="col-12">
          <div class="row my-5">
            <div class="col-md-3 col-sm-12">
              <a href="#" class="btn btn-lg">管理者管理</a>
            </div>
            <div class="col-md-3 col-sm-12">
              <a href="#" class="btn btn-lg">商品管理</a>
            </div>
            <div class="col-md-3 col-sm-12">
              <a href="{{ route('showNewsCtrl') }}" class="btn btn-lg">お知らせ管理</a>
            </div>
            <div class="col-md-3 col-sm-12">
              <a href="#" class="btn btn-lg">注文管理</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 col-sm-12">
              <a href="#" class="btn btn-lg">ユーザ管理</a>
            </div>
            <div class="col-md-3 col-sm-12">
              <a href="#" class="btn btn-lg">カテゴリ管理</a>
            </div>
            <div class="col-md-3 col-sm-12">
              <a href="#" class="btn btn-lg">会社管理</a>
            </div>
            <div class="col-md-3 col-sm-12">
              <a href="#" class="btn btn-lg">購入方法管理</a>
            </div>
          </div>
          
        </div>
    </div>
  </div>

</section>


@endsection