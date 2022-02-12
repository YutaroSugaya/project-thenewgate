@extends('layouts.app')

@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ショッピングカート</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="css/cart.css">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <body>
        <main class="page">
            <section class="shopping-cart dark">
                <div class="container">
                    <div class="block-heading">
                        <h2>ショッピングカート</h2>
                        <p>ご注文の商品一覧</p>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-12 col-lg-8">
                                <div class="items">
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="img-fluid mx-auto d-block image" img
                                                    src="https://i.imgur.com/bV1xmG5.jpg">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="col-md-5 product-name">
                                                            <div class="product-name">
                                                                <a href="#">何かの商品１</a>
                                                                <div class="product-info">
                                                                    <div>サイズとか: <span class="value">適当</span></div>
                                                                    <div>冷蔵とか: <span class="value">常温</span></div>
                                                                    <div>賞味期限: <span class="value">明日まで</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 quantity">
                                                            <label for="quantity">注文数:</label>
                                                            <input id="quantity" type="number" value="1"
                                                                class="form-control quantity-input">
                                                        </div>
                                                        <div class="col-md-3 price">
                                                            <span>????円</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="img-fluid mx-auto d-block image" img
                                                    src="https://i.imgur.com/vgMi4nw.jpg">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="col-md-5 product-name">
                                                            <div class="product-name">
                                                                <a href="#">商品</a>
                                                                <div class="product-info">
                                                                    <div>テスト: <span class="value">○○○</span></div>
                                                                    <div>テスト: <span class="value">○○</span></div>
                                                                    <div>テスト: <span class="value">○○○</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 quantity">
                                                            <label for="quantity">注文数:</label>
                                                            <input id="quantity" type="number" value="1"
                                                                class="form-control quantity-input">
                                                        </div>
                                                        <div class="col-md-3 price">
                                                            <span>$120</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img class="img-fluid mx-auto d-block image" img
                                                    src="https://i.imgur.com/hRlGe10.jpg">
                                            </div>
                                            <div class="col-md-8">
                                                <div class="info">
                                                    <div class="row">
                                                        <div class="col-md-5 product-name">
                                                            <div class="product-name">
                                                                <a href="#">商品</a>
                                                                <div class="product-info">
                                                                    <div>テスト: <span class="value">○○○</span></div>
                                                                    <div>テスト: <span class="value">○○○</span></div>
                                                                    <div>テスト: <span class="value">○○○</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 quantity">
                                                            <label for="quantity">注文数:</label>
                                                            <input id="quantity" type="number" value="1"
                                                                class="form-control quantity-input">
                                                        </div>
                                                        <div class="col-md-3 price">
                                                            <span>金額</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="summary">
                                    <h3>カート合計</h3>
                                    <div class="summary-item"><span class="text">小計</span><span
                                            class="price">1000</span></div>
                                    <div class="summary-item"><span class="text">割引</span><span
                                            class="price">0</span></div>
                                    <div class="summary-item"><span class="text">送料</span><span
                                            class="price">0</span></div>
                                    <div class="summary-item"><span class="text">合計額</span><span
                                            class="price">????円</span></div>
                                    <button type="button" class="btn btn-primary btn-lg btn-block">購入</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>

    </html>
@endsection
