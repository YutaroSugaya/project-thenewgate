<<<<<<< HEAD
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/swiper.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/content.css') }}" rel="stylesheet">
    <!-- Styles -->
</head>

<body class="antialiased">

    @extends('layouts.app')

    @section('content')

        <div class="mw-100">
            <img src="{{ asset('images/home/demo_main01.jpg') }}" alt="" width="100%" height="auto" class="img-fluid">
        </div>


        <section class="mw-100">
            <div class="container py-4 py-md-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="text-a68a72 font-weight-bold py-6">お知らせ</h2>
                    <div>
                        <a href="{{ route('notice') }}">
                            <span class="text_medium font-weight-bold">お知らせ一覧</span>
                        </a>
                    </div>
                </div>
                <ul class="list-unstyled pt-md-3 pt-2">
                    <li class="border-bottom border-e4d3c4">
                        <a href="">
                            <dl class="row mt-0 mb-0 pt-1">
                                <dt class="col-lg-2 col-12">
                                    <span class="">2021年12月31日</span>
                                </dt>
                                <dd class="col-lg-10 col-12 position-relative arrow_685647_16">
                                    <span class="font-weight-bold">新商品が入荷いたしました！！</span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="border-bottom border-e4d3c4">
                        <a href="">
                            <dl class="row mt-0 mb-0 mt-4">
                                <dt class="col-lg-2 col-12">
                                    <span>2021年12月31日</span>
                                </dt>
                                <dd class="col-lg-10 col-12 pr-5 position-relative arrow_685647_16 dot_omit">
                                    <span
                                        class="font-weight-bold">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="border-bottom border-e4d3c4">
                        <a href="">
                            <dl class="row mt-0 mb-0 mt-4">
                                <dt class="col-lg-2 col-12">
                                    <span>2021年12月31日</span>
                                </dt>
                                <dd class="col-lg-10 col-12 pr-5 position-relative arrow_685647_16 dot_omit">
                                    <span
                                        class="font-weight-bold">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="border-bottom border-e4d3c4">
                        <a href="">
                            <dl class="row mt-0 mb-0 mt-4">
                                <dt class="col-lg-2 col-12">
                                    <span>2021年12月31日</span>
                                </dt>
                                <dd class="col-lg-10 col-12 pr-5 position-relative arrow_685647_16 dot_omit">
                                    <span
                                        class="font-weight-bold">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                    <li class="border-bottom border-e4d3c4">
                        <a href="">
                            <dl class="row mt-0 mb-0 mt-4">
                                <dt class="col-lg-2 col-12">
                                    <span>2021年12月31日</span>
                                </dt>
                                <dd class="col-lg-10 col-12 pr-5 position-relative arrow_685647_16 dot_omit">
                                    <span
                                        class="font-weight-bold">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                                </dd>
                            </dl>
                        </a>
                    </li>
                </ul>
            </div>
        </section>



        <section class="mw-100 bg-white">
            <div class="container py-4 py-md-5">
                <div class="">
                    <div class="text-d73d3d font-weight-bold text-center text_medium">＼ 2021年12月31日 23：00まで ／</div>
                    <h2 class="text-d73d3d font-weight-bold py-6 text-center">タイムセール開催中</h2>
                </div>
                <ul class="list-unstyled row">
                    <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                        <a href="">
                            <div class="">
                                <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281"
                                    class="img-fluid">
                            </div>
                            <div class="pt-2 pt-md-3">
                                <span class="text_medium font-weight-bold">商品名が入ります。</span>
                            </div>
                            <div class="pt-1 pt-md-2">
                                <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                                <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                            </div>
                        </a>
                    </li>
                    <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                        <a href="">
                            <div class="">
                                <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281"
                                    class="img-fluid">
                            </div>
                            <div class="pt-2 pt-md-3">
                                <span class="text_medium font-weight-bold">商品名が入ります。</span>
                            </div>
                            <div class="pt-1 pt-md-2">
                                <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                                <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                            </div>
                        </a>
                    </li>
                    <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                        <a href="">
                            <div class="">
                                <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281"
                                    class="img-fluid">
                            </div>
                            <div class="pt-2 pt-md-3">
                                <span class="text_medium font-weight-bold">商品名が入ります。</span>
                            </div>
                            <div class="pt-1 pt-md-2">
                                <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                                <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="d-flex justify-content-center">
=======
@extends('layouts.app')
@section('content')
    <div class="mw-100">
        <img src="{{ asset('images/home/demo_main01.jpg') }}" alt="" width="100%" height="auto" class="img-fluid">
    </div>


    <section class="mw-100">
        <div class="container py-4 py-md-5">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="text-a68a72 font-weight-bold py-6">お知らせ</h2>
                <div>
                    <a href="{{ route('notice') }}">
                        <span class="text_medium font-weight-bold">お知らせ一覧</span>
                    </a>
                </div>
            </div>
            <ul class="list-unstyled pt-md-3 pt-2">
                <li class="border-bottom border-e4d3c4">
                    <a href="">
                        <dl class="row mt-0 mb-0 pt-1">
                            <dt class="col-lg-2 col-12">
                                <span class="">2021年12月31日</span>
                            </dt>
                            <dd class="col-lg-10 col-12 position-relative arrow_685647_16">
                                <span class="font-weight-bold">新商品が入荷いたしました！！</span>
                            </dd>
                        </dl>
                    </a>
                </li>
                <li class="border-bottom border-e4d3c4">
                    <a href="">
                        <dl class="row mt-0 mb-0 mt-4">
                            <dt class="col-lg-2 col-12">
                                <span>2021年12月31日</span>
                            </dt>
                            <dd class="col-lg-10 col-12 pr-5 position-relative arrow_685647_16 dot_omit">
                                <span class="font-weight-bold">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                            </dd>
                        </dl>
                    </a>
                </li>
                <li class="border-bottom border-e4d3c4">
                    <a href="">
                        <dl class="row mt-0 mb-0 mt-4">
                            <dt class="col-lg-2 col-12">
                                <span>2021年12月31日</span>
                            </dt>
                            <dd class="col-lg-10 col-12 pr-5 position-relative arrow_685647_16 dot_omit">
                                <span class="font-weight-bold">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                            </dd>
                        </dl>
                    </a>
                </li>
                <li class="border-bottom border-e4d3c4">
                    <a href="">
                        <dl class="row mt-0 mb-0 mt-4">
                            <dt class="col-lg-2 col-12">
                                <span>2021年12月31日</span>
                            </dt>
                            <dd class="col-lg-10 col-12 pr-5 position-relative arrow_685647_16 dot_omit">
                                <span class="font-weight-bold">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                            </dd>
                        </dl>
                    </a>
                </li>
                <li class="border-bottom border-e4d3c4">
                    <a href="">
                        <dl class="row mt-0 mb-0 mt-4">
                            <dt class="col-lg-2 col-12">
                                <span>2021年12月31日</span>
                            </dt>
                            <dd class="col-lg-10 col-12 pr-5 position-relative arrow_685647_16 dot_omit">
                                <span class="font-weight-bold">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                            </dd>
                        </dl>
                    </a>
                </li>
            </ul>
        </div>
    </section>



    <section class="mw-100 bg-white">
        <div class="container py-4 py-md-5">
            <div class="">
                <div class="text-d73d3d font-weight-bold text-center text_medium">＼ 2021年12月31日 23：00まで ／</div>
                <h2 class="text-d73d3d font-weight-bold py-6 text-center">タイムセール開催中</h2>
            </div>
            <ul class="list-unstyled row">
                <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
>>>>>>> 6f2fa3b (20220121)
                    <a href="">
                        <div class="">
                            <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281" class="img-fluid">
                        </div>
                        <div class="pt-2 pt-md-3">
                            <span class="text_medium font-weight-bold">商品名が入ります。</span>
                        </div>
                        <div class="pt-1 pt-md-2">
                            <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                            <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                        </div>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                    <a href="">
                        <div class="">
                            <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281" class="img-fluid">
                        </div>
                        <div class="pt-2 pt-md-3">
                            <span class="text_medium font-weight-bold">商品名が入ります。</span>
                        </div>
                        <div class="pt-1 pt-md-2">
                            <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                            <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                        </div>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                    <a href="">
                        <div class="">
                            <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281" class="img-fluid">
                        </div>
                        <div class="pt-2 pt-md-3">
                            <span class="text_medium font-weight-bold">商品名が入ります。</span>
                        </div>
                        <div class="pt-1 pt-md-2">
                            <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                            <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <a href="">
                    <div class="bg-d73d3d text-center py-2 rounded" style="width: 320px;">
                        <span class="text-white text_medium font-weight-bold">タイムセール商品一覧</span>
                    </div>
                </a>
            </div>
        </div>
    </section>



<<<<<<< HEAD
        <section class="mw-100">
            <div class="container py-4 py-md-5">
                <div>
                    <h2 class="text-a68a72 font-weight-bold py-6">おすすめ商品</h2>
                </div>
                <ul class="list-unstyled row">
                    <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                        <a href="">
                            <div class="">
                                <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281"
                                    class="img-fluid">
                            </div>
                            <div class="pt-2 pt-md-3">
                                <span class="text_medium font-weight-bold">商品名が入ります。</span>
                            </div>
                            <div class="pt-1 pt-md-2">
                                <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                                <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                            </div>
                        </a>
                    </li>
                    <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                        <a href="">
                            <div class="">
                                <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281"
                                    class="img-fluid">
                            </div>
                            <div class="pt-2 pt-md-3">
                                <span class="text_medium font-weight-bold">商品名が入ります。</span>
                            </div>
                            <div class="pt-1 pt-md-2">
                                <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                                <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                            </div>
                        </a>
                    </li>
                    <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                        <a href="">
                            <div class="">
                                <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281"
                                    class="img-fluid">
                            </div>
                            <div class="pt-2 pt-md-3">
                                <span class="text_medium font-weight-bold">商品名が入ります。</span>
                            </div>
                            <div class="pt-1 pt-md-2">
                                <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                                <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="d-flex justify-content-center">
=======
    <section class="mw-100">
        <div class="container py-4 py-md-5">
            <div>
                <h2 class="text-a68a72 font-weight-bold py-6">おすすめ商品</h2>
            </div>
            <ul class="list-unstyled row">
                <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
>>>>>>> 6f2fa3b (20220121)
                    <a href="">
                        <div class="">
                            <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281" class="img-fluid">
                        </div>
                        <div class="pt-2 pt-md-3">
                            <span class="text_medium font-weight-bold">商品名が入ります。</span>
                        </div>
                        <div class="pt-1 pt-md-2">
                            <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                            <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                        </div>
                    </a>
<<<<<<< HEAD
                </div>
            </div>
        </section>
    @endsection

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
</body>

</html>
=======
                </li>
                <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                    <a href="">
                        <div class="">
                            <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281" class="img-fluid">
                        </div>
                        <div class="pt-2 pt-md-3">
                            <span class="text_medium font-weight-bold">商品名が入ります。</span>
                        </div>
                        <div class="pt-1 pt-md-2">
                            <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                            <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                        </div>
                    </a>
                </li>
                <li class="col-12 col-sm-6 col-lg-4 py-2 py-md-3">
                    <a href="">
                        <div class="">
                            <img src="{{ asset('images/home/demo_item.jpg') }}" alt="" width="375" height="281" class="img-fluid">
                        </div>
                        <div class="pt-2 pt-md-3">
                            <span class="text_medium font-weight-bold">商品名が入ります。</span>
                        </div>
                        <div class="pt-1 pt-md-2">
                            <span class="text-d73d3d text_large font-weight-bold">2,200円</span>
                            <span class="text-d73d3d text_medium font-weight-bold">（税込）</span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="d-flex justify-content-center">
                <a href="">
                    <div class="bg-a68a72 text-center py-2 rounded" style="width: 320px;">
                        <span class="text-white text_medium font-weight-bold">おすすめ商品一覧</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
>>>>>>> 6f2fa3b (20220121)
