@extends('layouts.user.app')
@section('content')
    <div class="mw-100 py-5 bg-a68a72 text-center">
        <h2 class="text-white font-weight-bold">お知らせ</h2>
    </div>


    <section class="mw-100">
        <div class="container py-4 py-md-5">
            <div class="pt-4">
                <h2 class="text-a68a72 font-weight-bold py-6">お知らせ詳細</h2>
            </div>
            <ul class="list-unstyled pt-md-4 pt-3">
              
                <li class="border-bottom border-e4d3c4">
                    
                  <dl class="row mt-0 mb-0 pt-1">
                      <dt class="col-lg-2 col-12">
                          <span class="">{{ $news_detail->news_time }}</span>
                      </dt>
                      <dd class="col-lg-10 col-12">
                          <span class="font-weight-bold">{{ $news_detail->news_title }}</span>
                      </dd>
                      <dd class="col-lg-10 col-12">
                          <span class="font-weight-bold">{{ $news_detail->news_text }}</span>
                      </dd>
                  </dl>
                    
                </li>
</ul> 
          
        </div>
    </section>
@endsection
