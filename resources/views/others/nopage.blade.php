@extends('layouts.app')

@section('content')

<div class="wrapper">
  <div class="container-fluid nopage-container">
    <div class="row text-center">
      <div class="col-12 my-5">
        <h1 class="title_404" style="font-size: 120px;">404</h1>
        <h2>Page Not Found</h2>
        <h1>SORRY...</h1>
      </div>
      <div class="col-12 mb-5">
        <h3>お探しのページはみつかりませんでした。</h3>
        <p>あなたがアクセスしようとしたページは削除されたかURLが変更されているため、<br>見つけることが出来ません。</p>
      </div>
      <div class="col-12 my-5">
        <a href="/home">トップページに戻る</a>
      </div>
    </div>
  </div>
</div>



@endsection