@extends('layouts.admin.app')

@section('content')

<section>
  <div class="container d-flex justify-content-center py-3">
    <div class="row">
      <h2>お知らせ編集画面</h2>
      
      <form action="{{ route('updateNews', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="id">お知らせID</label>
          <input type="text" class="form-control" name="id" value="{{ $news->id }}" readonly>
          <label for="news_time">お知らせ日時</label>
          <input type="text" name="news_time" class="form-control" value="{{ $news->news_time }}">
          <label for="news_title">タイトル</label>
          <input type="text" name="news_title" class="form-control" value="{{ $news->news_title }}">
          <label for="news_text">内容</label>
          <input type="text" name="news_text" class="form-control" value="{{ $news->news_text }}">
        </div>
        <button type="submit" class="btn">更新する</button>
        <a href="{{ route('showNewsCtrl') }}" class="btn">戻る</a>
      </form>
    
    </div>
  </div>

</section>


@endsection