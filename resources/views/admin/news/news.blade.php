@extends('layouts.admin.app')
@push('css')

@endpush
  @push('js')
  <script src="{{ asset('js/cart.js') }}" defer></script>
  
  @endpush

@section('content')

<section>
  <div class="container d-flex justify-content-center py-3">
    <div class="row">
      <h2>お知らせ管理画面</h2>
      <a href="{{ route('showCreateNews') }}" class="btn">お知らせ追加</a>
      
      <table id="sorttable" class="table table-striped table-hover tablesorter my-5">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">お知らせ日時</th>
            <th scope="col">タイトル</th>
            <th scope="col">内容</th>
            <th class="text-center" scope="col-2" colspan="2">管理</th>
          </tr>
        </thead>
        <tbody>
          @foreach($news as $news)
          <tr>
            <td scope="row">{{ $news->id }}</td>
            <td>{{ $news->news_time }}</td>
            <td>{{ $news->news_title }}</td>
            <td>{{ $news->news_text }}</td>
            <td><a href="/admin/news/edit/{{ $news->id }}" class="btn">編集</a></td>
            <td><a href="{{ route('deleteNews', $news->id ) }}" class="btn">削除</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    
    </div>
  </div>

</section>


@endsection