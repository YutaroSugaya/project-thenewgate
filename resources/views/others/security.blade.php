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
      <p class="small m-0 p-2">高橋商事：<span><a href="/home">ホーム</a></span><span> > </span><span><a href="{{ route('showSecurity') }}">情報セキュリティポリシー</a></span></p>
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
          <li class="nav-list border-bottom active"><a href="{{ route('showSecurity') }}">情報セキュリティポリシー</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showLink') }}">リンクポリシー</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showSitemap') }}">サイトマップ</a></li>
        </ul>
      </div>
    </div>  
    
    <div class="col-9 col-lg-10 conainer-fluid p-4">
      <div class="privacy-text">
        <div class="row mb-5">
          <div class="col-12">
            <h2 class="">情報セキュリティポリシー</h2>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <p class="pl-3 col-12">高橋商事（以下、当社といいます。）は、当社で取り扱うすべての情報は価値を有する社有資産であることを認識し、これらを守るための情報セキュリティ活動の重要性を認識しております。当社の従業者は、日常の経営活動、業務推進、組織運営の一環として責任感、倫理観をもって情報に接し、法令および社内規程等の定めを遵守します。</p>
            <p class="pl-3 col-12 text-right">高橋商事　代表取締役社長 〇〇 〇〇<br>
                                              制定日：2022年3月31日<br>
                                              最終改訂日：2022年3月31日
            </p>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <p class="pl-3 col-12 text_medium">1.情報セキュリティの組織体制</p>
            <p class="pl-3 col-12 text_normal mb-5">代表取締役社長が指名する総括責任者をトップとした情報セキュリティ管理体制を確立することで、情報セキュリティを推進します。</p>
            <p class="pl-3 col-12 text_medium">2.情報セキュリティ対策</p>
            <p class="pl-3 col-12 text_normal mb-5">情報の管理およびセキュリティについての権限と役割を定めることにより、情報の適切な伝達・共有、公開・開示、ならびに情報のライフサイクルの各局面全般にわたって安全管理措置を講じ、情報の機密性、完全性、可用性を確保します。取引先や委託先事業者などとは秘密保持を含めた契約を締結する等、適切な施策を実施します。</p>
            <p class="pl-3 col-12 text_medium">3.情報セキュリティ研修</p>
            <p class="pl-3 col-12 text_normal mb-5">情報資産の安全性を高めるために、ひとりひとりが意識すべき行動を定め、当社の従業者に対する啓蒙活動を行います。</p>
            <p class="pl-3 col-12 text_medium">4.法令遵守</p>
            <p class="pl-3 col-12 text_normal mb-5">日本国その他の国・地域の法令、指針その他の規範、慣習及び社会的ルールに従います。</p>
            <p class="pl-3 col-12 text_medium">5.継続的な見直しと改善</p>
            <p class="pl-3 col-12 text_normal mb-5">情報セキュリティに関する点検を実施し、継続的な改善に取り組みます。</p>
          </div>
        </div>

        <a href="#policy00" class="text-right" id="page-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
      </div>
    </div>
  </div>

</div>

@endsection