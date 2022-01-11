@extends('layouts.app')
  @push('css')
    <link href="{{ asset('css/policy.css') }}" rel="stylesheet">
  @endpush
  @push('js')
    <script src="{{ asset('js/scroll.js') }}" defer></script>
  @endpush
@section('content')

<div id="policy00" class="wrapper main-section container-fluid">
  
  <div class="row">
    <div class="col-12 justify-content-center">
      <p class="small m-0 p-2">高橋商事：<span><a href="/home">ホーム</a></span><span> > </span><span><a href="{{ route('showCommerce') }}">特定商取引</a></span></p>
    </div>
  </div>

  <div class="row">
    <div class="nav col-3 col-lg-2"> 
      <div id="sidebarMenu" class="mt-3">
        <ul class="sidebarMenuInner">
          <li class="nav-list border-top border-bottom"><a href="{{ route('showAgreement') }}">利用規約</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showWebuse') }}">利用条件</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showPolicy') }}">プライバシーポリシー</a></li>
          <li class="nav-list border-bottom active"><a href="{{ route('showCommerce') }}">特定商取引に関する法律に基づく表記</a></li>
          <li class="nav-list border-bottom"><a href="#">情報セキュリティポリシー</a></li>
          <li class="nav-list border-bottom"><a href="#">リンクポリシー</a></li>
          <li class="nav-list border-bottom"><a href="#">サイトマップ</a></li>
        </ul>
      </div>
    </div>  
    
    <div class="col-9 col-lg-10 conainer-fluid p-4">
      <div class="privacy-text">
        <div class="row mb-3">
          <div class="col-12">
            <h2 class="">特定商取引に関する法律に基づく表記</h2>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">PCサイト利用について</h3>
            <p class="pl-3 col-12 text_normal">W3C（World Wide Web Consortium）の仕様に沿ってバージョンアップされるブラウザは、アクセシビリティにも配慮されていますので、できるだけ新しいバージョンでご利用いただく方が快適に見ることができます。</p>
            <p class="pl-3 col-12 text_normal">また、今後、推奨ブラウザ以外でご覧いただいた場合、一部表示の崩れや動作が正常に行わなくなる場合がございますが、その場合には、推奨ブラウザへの切換えをお願い致します。</p>
            <p class="pl-3 col-12 text_medium">Macintosh</p>
            <ul>
              <li>Safari 最新</li>
              <li>Chrome 最新</li>
            </ul>
            <p class="pl-3 col-12 text_medium">Windows</p>
            <ul>
              <li>Microsoft Edge 最新</li>
              <li>Internet Explorer 11.x（デスクトップ版）</li>
              <li>Chrome 最新</li>
              <li>Firefox 最新</li>
            </ul>
            <p class="pl-3 col-12 text_medium">推奨ブラウザのダウンロード</p>
            <p class="pl-3 col-12 text_normal">必要に応じて、お使いの環境に適したものを、下記、オフィシャルページの案内に従ってインストールしてください。なお、当サイトではベータ版での動作を保証していません。正式版をご利用ください。</p>
            <a href="https://support.microsoft.com/ja-jp/microsoft-edge"><p class="pl-3 col-12 text_normal">Microsoft Edgeのダウンロード<i class="fas fa-external-link-alt"></i></p></a>
            <a href="https://www.mozilla.org/ja/firefox/new/"><p class="pl-3 col-12 text_normal">Firefoxのダウンロード<i class="fas fa-external-link-alt"></i></p></a>
            <a href="https://www.apple.com/jp/safari/"><p class="pl-3 col-12 text_normal">Safariのダウンロード<i class="fas fa-external-link-alt"></i></p></a>
            <a href="https://www.apple.com/jp/safari/"><p class="pl-3 col-12 text_normal">Chromeのダウンロード<i class="fas fa-external-link-alt"></i></p></a>
            <p class="pl-3 col-12 text_small text-muted">※ご利用のアドオンなどパソコンの環境によっては、一部、機能をご利用いただけない場合がございます。携帯電話・スマートフォン・タブレットからのアクセスに関しては動作保証を行っておりません、予めご了承ください。</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">スマートフォンサイト利用について</h3>
            <p class="pl-3 col-12 text_normal">W3C（World Wide Web スマートフォン版を安心してご利用いただくために、以下のOSおよびブラウザでのご利用を推奨します。</p>
            <p class="pl-3 col-12 text_medium">iPhone</p>
            <ul>
              <li>OS ： iOS 13.x以上</li>
              <li>ブラウザ ： Mobile Safari</li>
            </ul>
            <p class="pl-3 col-12 text_medium">Android</p>
            <ul>
              <li>OS ： Android 7.x以上</li>
              <li>ブラウザ ： Chrome 最新</li>
            </ul>
            <p class="pl-3 col-12 text_small text-muted">※スマートフォンアプリについては、各アプリの利用条件を参照ください。</p>
          </div>
        </div>
        <a href="#policy00" class="text-right" id="page-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
      </div>
    </div>
  </div>

</div>

@endsection