@extends('layouts.app')
  @push('css')
    <link href="{{ asset('css/policy.css') }}" rel="stylesheet">
  @endpush
  @push('js')
    <script src="{{ asset('js/scroll.js') }}" defer></script>
  @endpush
@section('content')

<div id="policy00" class="wrapper main-section container-fluid">
  
  <div class="row row-title">
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
          <li class="nav-list border-bottom"><a href="{{ route('showSecurity') }}">情報セキュリティポリシー</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showLink') }}">リンクポリシー</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showSitemap') }}">サイトマップ</a></li>
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


          <div class="row row-guide">
            <p class="guideline title">販売業者</p>
            <p class="guideline content">タカハシ商事</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">運営責任者</p>
            <p class="guideline content">代表取締役社長　〇〇 〇〇</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">郵便番号</p>
            <p class="guideline content">123-4567</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">所在地</p>
            <p class="guideline content">東京都○○○区○○番地○○号　○○○ビル1階</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">電話番号</p>
            <p class="guideline content">123-5678</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">メールアドレス</p>
            <p class="guideline content">takahashi@shoji.co.jp</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">URL</p>
            <p class="guideline content">http://localhost:8888/home</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">商品代金以外の必要料金</p>
            <p class="guideline content">送料、代金引換手数料</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">支払い方法</p>
            <p class="guideline content">クレジットカード、代金引換、paypal</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">注文方法</p>
            <p class="guideline content">ご購入されたい商品がございましたら、各アイテム毎に設置されている「カートに入れる」ボタンをクリックしてください。<br>
                    ⇒ショッピングカートへ<br>
                    ⇒ショッピングレジへ<br>
                    ⇒最終確認ページへ<br>
                    ⇒お買い物完了<br>
                    <br>
                    ご注文確認メールが届きますのでご確認ください。24時間待ってもメールが送られてこない場合は、お手数ですが電話・メールにてご連絡ください。</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">引渡し時期</p>
            <p class="guideline content">ご注文受付から5日（※目安）</p>
          </div>
          <div class="row row-guide">
            <p class="guideline title">返品・交換について</p>
            <p class="guideline content">◯返品を受け付ける条件<br>
                    未開封のもので、商品到着後2日以内に電話連絡いただいたもののみお受けいたします。<br>
                    ◯返品の送料・手数料の負担につい<br>
                    初期不良の場合は当社が負担いたします。お客様都合の場合はお客様にご負担いただきます。<br>
                    ◯返金について<br> 
                    商品が到着してから2日以内に下記の場合に限り返品を受け付けます。<br>
                    ・ご注文商品と届いた商品が違う場合<br>
                    ・届いた商品が破損の場合注意：破損商品はお召し上がらないで下さい。<br>
                    お召し上がりますと弁償できません。<br>
                    ◯破損の場合のご連絡先<br>
                    宅急便サービスセンター：1234-12-1234（8時〜21時）<br>
                    生モノにつきお客様都合によるご返品はご容赦ください。<br>
                    ◯返品連絡先<br>
                    電話番号：1234-56-7890 <br>
                    返品先住所：〒123-4567 東京都〇〇　〇〇ビル
                    担当者：高橋高橋</p>
          </div>

        <a href="#policy00" class="text-right" id="page-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
      </div>
    </div>
  </div>

</div>

@endsection