<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body class="antialiased">



        <div class="container">
            <div>
                <img src="{{ asset('images/top/main01.jpg') }}" alt="ここに入力" width="100%" height="auto" class="img-fluid">
            </div>
        </div>



        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>お知らせ</h2>
                <div>
                    <a href="">
                        <span>お知らせ一覧</span>
                    </a>
                </div>
            </div>
            <ul class="list-unstyled">
                <li class="border border-a68a72 py-2">
                    <dl class="row mb-0">
                        <dt class="col-2">
                            <span class="">2021年12月31日</span>
                        </dt>
                        <dd class="col-10">
                            <span class="pl-5">新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！新商品が入荷いたしました！！</span>
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>



    </body>
</html>
