@extends('layouts.user.app')
@section('content')
    <div class="mw-100 py-5 bg-a68a72 text-center">
        <h2 class="text-white font-weight-bold">お知らせ</h2>
    </div>


    <section class="mw-100">
        <div class="container py-4 py-md-5">
            <div class="pt-4">
                <h2 class="text-a68a72 font-weight-bold py-6">お知らせ一覧</h2>
            </div>
            <ul class="list-unstyled pt-md-4 pt-3">
              @foreach($news as $news)
                <li class="border-bottom border-e4d3c4">
                    <a href="/news/{{ $news->id }}">
                        <dl class="row mt-0 mb-0 pt-1">
                            <dt class="col-lg-2 col-12">
                                <span class="">{{ $news->news_time }}</span>
                            </dt>
                            <dd class="col-lg-10 col-12 position-relative arrow_685647_16">
                                <span class="font-weight-bold">{{ $news->news_title }}</span>
                            </dd>
                        </dl>
                    </a>
                </li>
                @endforeach
                
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center pt-md-5 pt-4">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
