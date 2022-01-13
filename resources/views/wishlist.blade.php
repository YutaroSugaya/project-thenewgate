@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/wishlist.css">
        <title>お気に入り</title>

    </head>

    <body>
        <div class="container d-flex justify-content-center mt-50 mb-50">
            <div class="row">
                <h2>お気に入り一覧</h2>
                <div class="col-md-10">
                    <div class="card card-body">
                        <div
                            class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0"> <img src="https://i.imgur.com/bV1xmG5.jpg" width="150"
                                    height="150" alt=""> </div>
                            <div class="media-body">

                                <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">商品名</a> </h6>
                                <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                    <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">タグ？</a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">何か</a>
                                    </li>
                                </ul>
                                <p class="mb-3">商品説明やスペック </p>
                                <ul class="list-inline list-inline-dotted mb-0">
                                    <li class="list-inline-item">メーカー<a href="#" data-abc="true">高橋商事</a></li>
                                    <li class="list-inline-item">産地 <a href="#" data-abc="true">群馬県</a></li>
                                </ul>
                            </div>
                            <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                <h3 class="mb-0 font-weight-semibold">1000円</h3>
                                <button type="button"
                                    class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i>
                                    カートに追加</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body mt-3">
                        <div
                            class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0"> <img src="https://i.imgur.com/vgMi4nw.jpg" width="150"
                                    height="150" alt=""> </div>
                            <div class="media-body">
                                <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">商品名２</a> </h6>
                                <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                    <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">タグ１</a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true">タグ２</a>
                                    </li>
                                </ul>
                                <p class="mb-3">商品説明など〜〜 </p>
                                <ul class="list-inline list-inline-dotted mb-0">
                                    <li class="list-inline-item">メーカー名 <a href="#" data-abc="true">産地</a></li>
                                    <li class="list-inline-item">丸紅食品 <a href="#" data-abc="true">北海道</a></li>
                                </ul>
                            </div>
                            <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                <h3 class="mb-0 font-weight-semibold">$612.99</h3>
                                <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> カートに追加</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body mt-3">
                        <div
                            class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                            <div class="mr-2 mb-3 mb-lg-0"> <img src="https://i.imgur.com/hRlGe10.jpg" width="150"
                                    height="150" alt=""> </div>
                            <div class="media-body">
                                <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true">テスト</a> </h6>
                                <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                                    <li class="list-inline-item"><a href="#" class="text-muted"
                                            data-abc="true">タグ？</a></li>
                                    <li class="list-inline-item"><a href="#" class="text-muted"
                                            data-abc="true">テスト</a></li>
                                </ul>
                                <p class="mb-3">商品説明</p>
                                <ul class="list-inline list-inline-dotted mb-0">
                                    <li class="list-inline-item">ああああ<a href="#" data-abc="true">いいいい</a>
                                    </li>
                                    <li class="list-inline-item">Add to <a href="#" data-abc="true">wishlist</a></li>
                                </ul>
                            </div>
                            <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                                <h3 class="mb-0 font-weight-semibold">$459.99</h3>
                                 <button type="button" class="btn btn-warning mt-4 text-white"><i class="icon-cart-add mr-2"></i> Add to
                                    cart</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>

@endsection
