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
      <p class="small m-0 p-2">高橋商事：<span><a href="/home">ホーム</a></span><span> > </span><span><a href="{{ route('showAgreement') }}">利用規約</a></span></p>
    </div>
  </div>

  <div class="row">
    <div class="nav col-3 col-lg-2"> 
      <div id="sidebarMenu" class="mt-3">
        <ul class="sidebarMenuInner">
          <li class="nav-list border-top border-bottom active"><a href="{{ route('showAgreement') }}">利用規約</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showWebuse') }}">利用条件</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showPolicy') }}">プライバシーポリシー</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showGuideline') }}">特定商取引に関する法律に基づく表記</a></li>
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
            <h2 class="">利用規約</h2>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <p class="pl-3 col-12">この利用規約は、ユーザーのみなさまがタカハシ商事が運営するウェブサイト（以下「本サービス」といいます。）を利用するに際しての注意事項を定めたものです。ユーザーのみなさまが本サービスを利用する場合は、このご注意をよくお読みください。ユーザーのみなさまが本サービスを利用した場合、この注意に同意したものとさせていただきます。</p>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">本サービスについて</h3>
            <p class="pl-3 col-12 text_normal">本サービスは現在、食品関連のオンライン・ショッピング、将来、当社の判断で、様々なサービスを追加、変更、削除することがありえます。</p>
            <p class="pl-3 col-12 text_normal">当社は、ユーザーのみなさまが当サービスにアクセスすることを許諾していますが、サービスの内容や確実な提供、アクセス結果等については一切保証いたしません。また、当社は、本サービスの検索サービスを介したダウンロードまたはアクセスの結果生じたいかなる損害にも責任を負いません。</p>
            <p class="pl-3 col-12 text_normal">ユーザーのみなさまが本サービスを通して行う取引は、すべてユーザーのみなさまと「サービス提供者」（取引の対象となる商品又はサービスを提供する者をいい、商品出品者及び代理店が含まれます。）との間で直接行っていただくものです。当社は、取引の当事者とはならず、取引に関する責任は負いません。したがって、万一取引に関してトラブルが生じた場合には、ユーザーのみなさまとサービス提供者との間で直接解決していただくことになります。</p>
            <p class="pl-3 col-12 text_normal">取扱い商品やサービス、本サービス上の記載内容、サービス提供者における個人情報の取扱い等については、サービス提供者に直接お問い合わせください。</p>
            <p class="pl-3 col-12 text_normal">当社は、通信回線やコンピュータ等の障害によるシステムの中断・遅滞・中止・データの消失、データへの不正アクセスにより生じた損害、その他本サービスのサービスに関してユーザーのみなさまに生じた損害について、一切責任を負わないものとします。また、当社は、当社のウェブページ、サーバー、ドメイン等から送られるメール、コンテンツ等に、コンピュータ・ウィルス等の有害なものが含まれないことを保証しません。</p>
            <p class="pl-3 col-12 text_normal">当社は、ユーザーのみなさま及びサービス提供者に対し、適宜情報提供やアドバイスを行うことがありますが、それにより責任を負うものではありません。</p>
          </div>
        </div>
        
        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">会員向けサービスについて</h3>
            <p class="pl-3 col-12 text_normal">ご利用にあたり、会員登録が必要なサービスについては、「当社会員規約」を熟読の上、これを遵守するようお願いいたします。</p>
          </div>
        </div>
        
        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">プライバシーポリシー</h3>
            <p class="pl-3 col-12 text_normal">ユーザーのみなさまの会員登録情報及び当社が取得したユーザーのみなさまに関する情報は、当社のプライバシーポリシーにしたがって取り扱われます。</p>
            <a href="{{ route('showPolicy') }}"><p class="pl-3 col-12 text_normal link_policy">プライバシーポリシー</p></a>
          </div>
        </div>
        
        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">各種規約遵守のお願い</h3>
            <p class="pl-3 col-12 text_normal">本サービスのご利用に関しては、当社又は当社のパートナーが別途規約を定める場合があります。その場合、規約へ同意していただくことがご利用の条件となります。それぞれの規約を熟読の上、遵守くださるようお願いいたします。</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">禁止事項</h3>
            <p class="pl-3 col-12 text_normal">本サービスの利用に際しては、次の各号の行為を行うことを禁止します。万一、これらに違反した場合、当社は、ユーザーのみなさまの取引を停止したり、以後の取引をお断りすることがあります。また、ユーザーのみなさまの違反行為により当社に損害が生じた場合、ユーザーの側がその損害を賠償する責任を負うものとします。</p>
            <ol class="pl-5">
              <li class="mb-1">当社、当社のパートナー、他のユーザーのみなさま、その他の第三者の権利、利益、名誉等を損ねること。他人のプライバシーを侵害したり、他人を中傷すること。</li>
              <li class="mb-1">当初より支払う意思がないにもかかわらず注文するなど、真に購入する意思なく商品を注文すること、他人になりすまして取引を行うこと、虚偽の情報を入力すること、その他の不正行為を行うこと。</li>
              <li class="mb-1">当社サイトを無断で営利目的に使用すること。</li>
              <li class="mb-1">法令に違反すること。</li>
              <li class="mb-1">当社が定める各種規約に違反すること。</li>
              <li class="mb-1">コンピュータのソフトウェア、ハードウェア、通信機器の機能を妨害、破壊、制限するように設計されたコンピュータウィルス、コンピュータコード、ファイル、プログラム等のコンテンツを当社サイトにアップロードしたり、掲示したり、メール等の手段で公衆送信すること。</li>
              <li class="mb-1">方法の如何を問わず、他のユーザーの個人情報を収集したり蓄積すること。</li>
            </ol>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">リンクの扱い</h3>
            <p class="pl-3 col-12 text_normal">本サービスの中から他のウェブサイトやリソースにリンクしたり、第三者のウェブサイトやリソースから本サービスへのリンクを提供している場合があります。この場合、当社は、当該サイトやリソースを管理していませんので、これらの利用及びその結果については、一切責任を負いません。ユーザーのみなさまは、当該サイトやリソースの利用規約を別途ご確認くださるようお願いいたします。</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">クッキー（Cookie）等について</h3>
            <p class="pl-3 col-12 text_normal">当社は、ユーザーのみなさまのアクセス履歴及び利用状況の調査のため、その他ユーザーのみなさまに最適のサービスを提供するために、ユーザーのみなさまが当社のサーバーにアクセスする際のIPアドレスに関する情報、携帯電話端末でアクセスした場合には携帯端末の機体識別番号に関する情報、及びクッキー（Cookie）の技術を使用してユーザーのみなさまのアクセス履歴等に関する情報を収集します。ユーザーのみなさまがブラウザでクッキーを拒否するための設定を行った場合、本サービスのご利用が制限される場合がありますので、あらかじめご了承願います。</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">商標、著作権等</h3>
            <p class="pl-3 col-12 text_normal">本サービスに掲載されているコンテンツ（情報、データ、ソフトウェア、写真、画像、映像、メッセージ等）（以下「当社コンテンツ」といいます。）は、当社が所有、もしくは当社が正当な許諾又は許可を受けて使用しているものであり、著作権法により保護されています。</p>
            <p class="pl-3 col-12 text_normal">ユーザーのみなさまは、営利目的ではない、私的利用に限って、本サービスに掲載されている飲食店や飲食店のメニュー、地図等をダウンロードしたり、合理的な枚数を印刷してご利用することができます。但し、ユーザーのみなさまが著作権表示やその他の表示を削除・改定・変更することはできません。</p>
            <p class="pl-3 col-12 text_normal">当社コンテンツを無断で複製、公衆送信、修正・変更、商業的に利用する行為や、第三者のウェブサイトに無断で掲示・転載する行為は、当社の著作権並びに財産権を害するものであり、著作権侵害とみなされます。</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">利用規定の改定・修正・変更</h3>
            <p class="pl-3 col-12 text_normal">当社は、必要に応じて随時この利用規約を改定いたします。改定の際、ユーザーのみなさまに個別にご連絡することはいたしかねますので、本サービスをご利用の都度、この利用規約を必ずご確認下さるようお願いいたします。改定後に本サービスのご利用があった場合、改定後の利用規約に同意したものとさせていただきます。</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12">
            <h3 id="" class="border-left mb-3">その他</h3>
            <p class="pl-3 col-12 text_normal">ユーザーのみなさまと当社の関係につきましては、日本国法が適用されるものとします。万一、ユーザーのみなさまと当社との間に訴訟の必要が生じた場合には、東京地方裁判所を第一審の専属的合意管轄裁判所とします。</p>
            <p class="text-right">以上</p>
            <p class="text-right">令和3年3月31日</p>
          </div>
        </div>
        <a href="#policy00" class="text-right" id="page-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
      </div>
    </div>
  </div>

</div>

@endsection