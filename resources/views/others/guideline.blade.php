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
      <p class="small m-0 p-2">高橋商事：<span><a href="/home">ホーム</a></span><span> > </span><span><a href="{{ route('showGuideline') }}">特定商取引に関する法律に基づく表記</a></span></p>
    </div>
  </div>

  <div class="row">
    <div class="nav col-3 col-lg-2"> 
      <div id="sidebarMenu" class="mt-3">
        <ul class="sidebarMenuInner">
          <li class="nav-list border-top border-bottom"><a href="{{ route('showAgreement') }}">利用規約</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showWebuse') }}">利用条件</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showPolicy') }}">プライバシーポリシー</a></li>
          <li class="nav-list border-bottom active"><a href="{{ route('showGuideline') }}">特定商取引に関する法律に基づく表記</a></li>
          <li class="nav-list border-bottom"><a href="#">情報セキュリティポリシー</a></li>
          <li class="nav-list border-bottom"><a href="#">リンクポリシー</a></li>
          <li class="nav-list border-bottom"><a href="#">サイトマップ</a></li>
        </ul>
      </div>
    </div>  
    
    <div class="col-9 col-lg-10 conainer-fluid p-4">
      <div class="privacy-text">
        <div class="row mb-5">
          <div class="col-12">
            <h2 class="">特定商取引に関する法律に基づく表記</h2>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">

            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">販売業者</th>
                  <td>タカハシ商事</td>
                </tr>
                <tr>
                  <th scope="row">運営責任者</th>
                  <td>代表取締役社長　〇〇 〇〇</td>
                </tr>
                <tr>
                  <th scope="row">郵便番号</th>
                  <td>123-4567</td>
                </tr>
                <tr>
                  <th scope="row">所在地</th>
                  <td>東京都○○○区○○番地○○号　○○○ビル1階</td>
                </tr>
                <tr>
                  <th scope="row">電話番号</th>
                  <td>123-5678</td>
                </tr>
                <tr>
                  <th scope="row">メールアドレス</th>
                  <td>takahashi@shoji.co.jp</td>
                </tr>
                <tr>
                  <th scope="row">URL</th>
                  <td>http://localhost:8888/home</td>
                </tr>
                <tr>
                  <th scope="row">商品代金以外の必要料金</th>
                  <td>送料、代金引換手数料</td>
                </tr>
                <tr>
                  <th scope="row">支払い方法</th>
                  <td>クレジットカード、代金引換、paypal</td>
                </tr>
                <tr>
                  <th scope="row">注文方法</th>
                  <td>
                    ご購入されたい商品がございましたら、各アイテム毎に設置されている「カートに入れる」ボタンをクリックしてください。<br>
                    ⇒ショッピングカートへ<br>
                    ⇒ショッピングレジへ<br>
                    ⇒最終確認ページへ<br>
                    ⇒お買い物完了<br>
                    <br>
                    ご注文確認メールが届きますのでご確認ください。24時間待ってもメールが送られてこない場合は、お手数ですが電話・メールにてご連絡ください。
                  </td>
                </tr>
                <tr>
                  <th scope="row">引渡し時期</th>
                  <td>ご注文受付から5日（※目安）</td>
                </tr>
                <tr>
                  <th scope="row">返品・交換について</th>
                  <td></td>
                </tr>
                <tr>
                  <th scope="row"></th>
                  <td></td>
                </tr>
                
              </tbody>
            </table>

          </div>
        </div>

        <a href="#policy00" class="text-right" id="page-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
      </div>
    </div>
  </div>

</div>

@endsection