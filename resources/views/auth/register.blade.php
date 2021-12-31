@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('新規登録画面') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-4 ">
                                <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('お名前 [必須]') }}</label>

                                <div class="col-md-4" >

                                    <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror"
                                        name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                                        <input id="firstName" type="text" class="form-control  @error('firstName') is-invalid @enderror"
                                        name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('フリガナ（性）') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('フリガナ（名）') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- 郵便番号を入力すると自動で入力される --}}
                             <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('郵便番号') }}</label>

                                <div class="col-md-6">
                                    <input id="post_code" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="zip11"
                                        value="{{ old('email') }}" required autocomplete="email" size="10" maxlength="8"
                                        onKeyUp="AjaxZip3.zip2addr(this,'','addr11','addr11');">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('住所') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="addr11" size="60" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('パスワード再確認') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('登録する') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="sc_my_cont" content="gurusuguri" />
        <title>新規会員登録</title>
        <link rel="stylesheet" href="https://my.gnavi.co.jp/register_common/pc/ec/css/style.css">
        <script src="//x.gnst.jp/s.js"></script>
<script>('localhost' !== location.hostname) && document.write(unescape("%3Cscript src='//site.gnavi.co.jp/analysis/sc_"+getScSubdom()+".js'%3E%3C/script%3E"));</script>
<script src="//site.gnavi.co.jp/analysis/sc_form_ana_my.js"></script>

    </head>
    <body>
        <div class="l-page" id="pagetop">
            <header class="l-header" role="banner">
                <div class="l-header_inner">
                    <div class="l-header_title">
                        <div class="c-siteLogo"><img src="https://my.gnavi.co.jp/register/register_common/pc/logo/EC_PC_gurusuguri.jpg" alt=""></div>
                    </div>
                    <div class="l-header_link"><a class="c-link page" href="https://my.gnavi.co.jp/authority/login/?cType=EC_PC&amp;rUrl=https%3A%2F%2Fgurusuguri.com%2F">ログインはこちら</a></div>
                </div>
            </header>
            <main class="l-main" role="main">
                <div class="l-main_inner">
                    <div class="c-stepBar">
                        <div class="c-stepBar_item step1 current">
                            <div class="c-stepBar_item_text">会員情報入力</div>
                        </div>
                        <div class="c-stepBar_item step2">
                            <div class="c-stepBar_item_text">確認</div>
                        </div>
                        <div class="c-stepBar_item step3">
                            <div class="c-stepBar_item_text">仮登録メール送付</div>
                        </div>
                        <div class="c-stepBar_item step4">
                            <div class="c-stepBar_item_text">登録完了</div>
                        </div>
                    </div>
                    <div class="c-headline">
                        <h1 class="c-headline_main"><span class="c-headline_main_text">会員情報を入力して新規会員登録</span></h1>
                    </div>
                    <form action="https://my.gnavi.co.jp/register/?page=c&cType=EC_PC" method="post">
                        <section class="c-section form">
                            <input type="hidden" name="rUrl" value="https://gurusuguri.com/" />
                            <input type="hidden" name="rType" value="2" />
                            <input type="hidden" name="lType" value="2" />
                            <input type="hidden" name="cType" value="EC_PC" />
                            <input type="hidden" name="cTypeSub" value="" />                                                        <table class="c-table form">
                                <tbody>
                                    <tr>
                                        <th>メールアドレス <span class="c-label required">[必須]</span></th>
                                        <td>
                                                                                        <input class="c-inputForm" id="mailAddress" type="text" name="mailAddress" data-behavior-id="mailAddress" value="" style="width:412px">
                                            <p class="u-mt4 u-mb0 u-fz12"> (半角)</p>
                                                                                    </td>
                                    </tr>
                                    <tr>
                                        <th>メールアドレス(確認) <span class="c-label required">[必須]</span></th>
                                        <td>
                                                                                        <input class="c-inputForm" id="mailAddressConfirm" type="text" name="mailAddressConfirm" data-behavior-id="mailAddressConfirm" value="" style="width:412px">
                                            <p class="u-mt4 u-mb0 u-fz12"> (半角)</p>
                                                                                    </td>
                                    </tr>
                                    <tr>
                                        <th>生年月日 <span class="c-label required">[必須]</span></th>
                                        <td>
                                                                                        <input class="c-inputForm" id="birth[0]" type="text" name="birth[0]" data-behavior-id="birth[0]" value="" placeholder="年" style="width:200px" maxlength="4">
                                            <input class="c-inputForm u-ml10" id="birth[1]" type="text" name="birth[1]" data-behavior-id="birth[1]" value="" placeholder="月" style="width:100px" maxlength="2">
                                            <input class="c-inputForm u-ml10" id="birth[2]" type="text" name="birth[2]" data-behavior-id="birth[2]" value="" placeholder="日" style="width:100px" maxlength="2">
                                                                                    </td>
                                    </tr>
                                    <tr>
                                        <th>パスワード <span class="c-label required">[必須]</span></th>
                                        <td>
                                                                                        <input class="c-inputForm" id="passwd" type="password" name="passwd" data-behavior-id="passwd" value="" style="width:452px">
                                            <p class="u-mt4 u-mb0 u-fz12"> (半角英数字 6〜16文字) ※機種依存文字は使えません。</p>
                                                                                    </td>
                                    </tr>
                                    <tr>
                                        <th>パスワード(確認) <span class="c-label required">[必須]</span></th>
                                        <td>
                                                                                        <input class="c-inputForm" id="passwdConfirm" type="password" name="passwdConfirm" data-behavior-id="passwdConfirm" value="" style="width:452px">
                                            <p class="u-mt4 u-mb0 u-fz12"> (半角英数字 6〜16文字) ※機種依存文字は使えません。</p>
                                                                                    </td>
                                    </tr>
                                    <tr>
                                        <th>お名前 <span class="c-label required">[必須]</span></th>
                                        <td>
                                                                                        <input class="c-inputForm" id="lastName" type="text" name="lastName" data-behavior-id="lastName" value="" placeholder="姓" style="width:220px">
                                            <input class="c-inputForm u-ml10" id="firstName" type="text" name="firstName" data-behavior-id="firstName" value="" placeholder="名" style="width:220px">
                                                                                    </td>
                                    </tr>
                                    <tr>
                                        <th>住所 <span class="c-label required">[必須]</span></th>
                                        <td>
                                                                                        <div class="u-mb6">
                                                <input class="c-inputForm" id="zip1" type="text" name="zipCode[0]" data-behavior-id="zipCode[0]" value="" style="width:90px" maxlength="3"><span class="u-tac u-fz16"> −</span>
                                                <input class="c-inputForm" id="zip2" type="text" name="zipCode[1]" data-behavior-id="zipCode[1]" value="" style="width:90px" maxlength="4">
                                                <button class="c-btn u-vab" id="js-addressAutoComplete" type="button"><span class="c-btn_text">住所の自動入力</span></button>
                                            </div>

                                                                                        <div class="u-mb6">
                                                <select class="c-inputForm select" id="addressPref" name="addressPref" data-behavior-id="addressPref" style="width:120px">
                                                                                                        <option value="" selected="selected">都道府県</option>                                                                                                        <option value="01">北海道</option>                                                                                                        <option value="02">青森県</option>                                                                                                        <option value="03">岩手県</option>                                                                                                        <option value="04">宮城県</option>                                                                                                        <option value="05">秋田県</option>                                                                                                        <option value="06">山形県</option>                                                                                                        <option value="07">福島県</option>                                                                                                        <option value="08">茨城県</option>                                                                                                        <option value="09">栃木県</option>                                                                                                        <option value="10">群馬県</option>                                                                                                        <option value="11">埼玉県</option>                                                                                                        <option value="12">千葉県</option>                                                                                                        <option value="13">東京都</option>                                                                                                        <option value="14">神奈川県</option>                                                                                                        <option value="15">新潟県</option>                                                                                                        <option value="16">富山県</option>                                                                                                        <option value="17">石川県</option>                                                                                                        <option value="18">福井県</option>                                                                                                        <option value="19">山梨県</option>                                                                                                        <option value="20">長野県</option>                                                                                                        <option value="21">岐阜県</option>                                                                                                        <option value="22">静岡県</option>                                                                                                        <option value="23">愛知県</option>                                                                                                        <option value="24">三重県</option>                                                                                                        <option value="25">滋賀県</option>                                                                                                        <option value="26">京都府</option>                                                                                                        <option value="27">大阪府</option>                                                                                                        <option value="28">兵庫県</option>                                                                                                        <option value="29">奈良県</option>                                                                                                        <option value="30">和歌山県</option>                                                                                                        <option value="31">鳥取県</option>                                                                                                        <option value="32">島根県</option>                                                                                                        <option value="33">岡山県</option>                                                                                                        <option value="34">広島県</option>                                                                                                        <option value="35">山口県</option>                                                                                                        <option value="36">徳島県</option>                                                                                                        <option value="37">香川県</option>                                                                                                        <option value="38">愛媛県</option>                                                                                                        <option value="39">高知県</option>                                                                                                        <option value="40">福岡県</option>                                                                                                        <option value="41">佐賀県</option>                                                                                                        <option value="42">長崎県</option>                                                                                                        <option value="43">熊本県</option>                                                                                                        <option value="44">大分県</option>                                                                                                        <option value="45">宮崎県</option>                                                                                                        <option value="46">鹿児島県</option>                                                                                                        <option value="47">沖縄県</option>                                                                                                                                                                                                            </select>
                                            </div>

                                                                                        <div class="u-mb6">
                                                <input class="c-inputForm" id="addressCity" type="text" name="addressCity" data-behavior-id="addressCity" value="" placeholder="市区町村名" style="width:452px">
                                            </div>

                                                                                        <div class="u-mb6">
                                                <input class="c-inputForm" id="addressHouse" type="text" name="addressHouse" data-behavior-id="addressHouse" value="" placeholder="番地・ビル名など" style="width:452px">
                                            </div>
                                                                                    </td>
                                    </tr>
                                    <tr>
                                        <th>TEL <span class="c-label required">[必須]</span></th>
                                        <td>
                                                                                        <input class="c-inputForm" id="tel[0]" type="text" name="tel[0]" data-behavior-id="tel[0]" value="" style="width:96px" maxlength="6"><span class="u-tac u-fz16"> −</span>
                                            <input class="c-inputForm" id="tel[1]" type="text" name="tel[1]" data-behavior-id="tel[1]" value="" style="width:96px" maxlength="4"><span class="u-tac u-fz16"> −</span>
                                            <input class="c-inputForm" id="tel[2]" type="text" name="tel[2]" data-behavior-id="tel[2]" value="" style="width:96px" maxlength="4">
                                                                                    </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                      </section>
                        <section class="c-section submit">
                            <button class="c-btn submit next" type="submit" name="actionSubmit" data-behavior-id="actionSubmit"><span class="c-btn_text">同意して次へ</span></button>
                        </section>
                    </form>
                </div>
            </main>
            <footer class="l-footer" role="contentinfo">
                <div class="l-footer_inner">
                    <p class="c-copyright">Copyright &copy; Gurunavi, Inc. All rights reserved.</p>
                </div>
            </footer>
        </div>
        <script src="https://my.gnavi.co.jp/register_common/pc/ec/js/jquery-3.1.1.min.js"></script>
        <script src="https://my.gnavi.co.jp/register_common/pc/ec/js/zip.js"></script>
    </body>
</html>
