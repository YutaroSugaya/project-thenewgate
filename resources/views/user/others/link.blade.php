@extends('layouts.user.app')
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
      <p class="small m-0 p-2">高橋商事：<span><a href="/home">ホーム</a></span><span> > </span><span><a href="{{ route('showLink') }}">リンクポリシー</a></span></p>
    </div>
  </div>

  <div class="row">
    <div class="nav col-3 col-lg-2"> 
      <div id="sidebarMenu" class="mt-3">
        <ul class="sidebarMenuInner">
          <li class="nav-list border-top border-bottom"><a href="{{ route('showAgreement') }}">利用規約</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showWebuse') }}">利用条件</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showPolicy') }}">プライバシーポリシー</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showGuideline') }}">特定商取引に関する法律に基づく表記</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showSecurity') }}">情報セキュリティポリシー</a></li>
          <li class="nav-list border-bottom active"><a href="{{ route('showLink') }}">リンクポリシー</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showSitemap') }}">サイトマップ</a></li>
        </ul>
      </div>
    </div>  
    
    <div class="col-9 col-lg-10 conainer-fluid p-4">
      <div class="privacy-text">
        <div class="row mb-5">
          <div class="col-12">
            <h2 class="">リンクポリシー</h2>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <p class="pl-3 col-12">高橋商事（ http://localhost:8888/home ）のサイト内のページ（商品検索ページ・商品ページ）へのリンクは原則自由です。リンクされる場合は、下記の事項に従って下さい。なお、リンク元のサイトの内容、リンクの目的、リンク方法等によっては、リンクをお断りする場合がございます。</p>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <p class="pl-3 col-12 text_normal font-weight-bold">1.以下に該当するリンクはお断りします。また、これらを発見した場合には、当社はリンク元に対し、リンクの中止等を要請する場合があります。その際は速やかにご対応ください。</p>
            <ul class="mb-5">
              <li>商品検索ページ・商品ページ以外へのリンク</li>
              <li>高橋商事のページのコンテンツが、リンク元のページに取り込まれて表示されるような態様のリンク（著作権侵害に該当するようなリンク方法）</li>
              <li>当社の名誉、品位、信用等を毀損するおそれのあるリンク</li>
              <li>法令又は公序良俗に反する内容含むサイトからのリンク</li>
              <li>営利目的のリンク</li>
              <li>当社と関連があるような誤解を生じさせるリンク</li>
              <li>当社に経済的な損失を与えるおそれのあるリンク</li>
              <li>その他当社の事業に支障をきたすおそれのあるリンク</li>
            </ul>
            
            <p class="pl-3 col-12 text_normal mb-5 font-weight-bold">2.リンクをはる場合は、当社ページへのリンクであることが明確に分かるような記載をお願いします。但し、当社の許可なく、当社のロゴマークやページの画面キャプチャ（画像）は使用しないでください。</p>
            <p class="pl-3 col-12 text_normal mb-5 font-weight-bold">3.当社のページは予告なく変更、削除される場合がございます。</p>
            <p class="pl-3 col-12 text_normal mb-5 font-weight-bold">4.リンクによって発生したトラブルや損害等については、当社は一切の責任を負いません。リンク元の責任での対応をお願いします。また、リンクにより、当社が損害をこうむった場合には、損害賠償等を請求することがございます。</p>
            <p class="pl-3 col-12 text_normal mb-5 font-weight-bold">5.本リンクポリシーは予告なく変更する場合がございます。また、変更した場合は、変更後のリンクポリシーに従っていただくものとします。</p>
          
            <p class="text-right">制定日：2022年3月31日</p>
          </div>
        </div>

        <a href="#policy00" class="text-right" id="page-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
      </div>
    </div>
  </div>

</div>

@endsection