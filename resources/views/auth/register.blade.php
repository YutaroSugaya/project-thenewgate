@extends('layouts.app')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-title">{{ __('入力して新規会員登録') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-4 ">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('お名前') }}</label>

                                <div class="col-md-6">

                                    <div class="form-row">
                                        <div class="col">
                                            <input placeholder="性" id="lastName" type="text"
                                                class="form-control @error('lastName') is-invalid @enderror" name="lastName"
                                                value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                                        </div>
                                        <div class="col">
                                            <input placeholder="名" id="firstName" type="text"
                                                class="form-control  @error('firstName') is-invalid @enderror"
                                                name="firstName" value="{{ old('firstName') }}" required
                                                autocomplete="firstName" autofocus>
                                        </div>
                                    </div>
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4 ">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('フリガナ') }}</label>

                                <div class="col-md-6">

                                    <div class="form-row">
                                        <div class="col">
                                            <input placeholder="セイ" id="lastName" type="text"
                                                class="form-control @error('lastName') is-invalid @enderror" name="lastName"
                                                value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>
                                        </div>
                                        <div class="col">
                                            <input placeholder="メイ" id="firstName" type="text"
                                                class="form-control  @error('firstName') is-invalid @enderror"
                                                name="firstName" value="{{ old('firstName') }}" required
                                                autocomplete="firstName" autofocus>
                                        </div>
                                    </div>
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
                                <label for="post_code"
                                    class="col-md-4 col-form-label text-md-right">{{ __('郵便番号') }}</label>

                                <div class="col-md-3">
                                    <input id="post_code" type="text" placeholder="ハイフン不要"
                                        class="form-control @error('post_code') is-invalid @enderror"
                                        value="{{ old('post_code') }}" required autocomplete="post_code" pattern="\d*"
                                        name="zip01" size="10" maxlength="8"
                                        onKeyUp="AjaxZip3.zip2addr(this,'','pref01','addr01');">

                                    @error('post_code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <p>(半角)</p>
                                </div>
                            </div>


                            <!-- ▼住所入力フィールド(都道府県) -->
                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('都道府県') }}</label>

                                <div class="col-md-2">
                                    <input type="text" name="pref01" size="20" id="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        value="{{ old('address') }}" required autocomplete="address">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- ▼住所入力フィールド(都道府県以降の住所) -->
                            <div class="row mb-3">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('以降の住所') }}</label>

                                <div class="col-md-6">
                                    <input type="text" name="addr01" size="60" id="address"
                                        class="form-control @error('address') is-invalid @enderror"
                                        value="{{ old('address') }}" required autocomplete="address"
                                        placeholder="市区町村、番地、建物名など">

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <p>(半角)</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('電話番号') }}</label>

                                <div class="col-md-3">
                                    <input id="phone_number" type="a"
                                        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                        value="{{ old('phone_number') }}" required autocomplete="phone_number"
                                        pattern="[0-9]{9,12}" placeholder="ハイフン不要">

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <p>(半角)</p>
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
                                    <p>(半角)</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" pattern="[a-z,A-Z,0-9]{6,20}">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <p>(半角英数字 6〜20文字) ※機種依存文字は使えません。</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('パスワード再確認') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        pattern="[a-z,A-Z,0-9]{6,20}">
                                    <p>(半角英数字 6〜20文字) ※機種依存文字は使えません。</p>
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
