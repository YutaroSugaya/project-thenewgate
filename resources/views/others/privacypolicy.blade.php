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
      <p class="small m-0 p-2">高橋商事：<span><a href="/home">ホーム</a></span><span> > </span><span><a href="{{ route('showPolicy') }}">プライバシーポリシー</a></span></p>
    </div>
  </div>

  <div class="row">
    <div class="nav col-3 col-lg-2"> 
      <div id="sidebarMenu" class="mt-3">
        <ul class="sidebarMenuInner">
          <li class="nav-list border-top border-bottom"><a href="{{ route('showAgreement') }}">利用規約</a></li>
          <li class="nav-list border-bottom"><a href="{{ route('showWebuse') }}">利用条件</a></li>
          <li class="nav-list border-bottom active"><a href="{{ route('showPolicy') }}">プライバシーポリシー</a></li>
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
            <h2 class="">プライバシーポリシー</h2>
            <p class="pl-3 col-12"></p>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="border-left mb-3">個人情報（特定個人情報）保護理念</h3>
            <p class="pl-3 col-12">タカハシ商事（以下、「当社」といいます。）は、事業活動を推進するために必要不可欠である個人情報(特定個人情報)の活用において、個人情報(特定個人情報)の適切な保護の重要性と社会的責任を十分に認識し、個人情報(特定個人情報)保護に関する法律、その他関係法令を遵守いたします。また、個人情報(特定個人情報)の適正な取扱いおよび秘密保持を徹底するための社内ルールとして「個人情報(特定個人情報)保護マネジメントシステム」を策定し、<a href="#policy02" class="js-scroll">個人情報保護方針</a>および<a href="#policy04" class="js-scroll">特定個人情報保護方針</a>に則り全従業者がこれを遵守いたします。</p>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <h3 id="policy02" class="border-left mb-3">個人情報保護方針</h3>
            <p class="pl-3 col-12 m-1 text_medium">1．個人情報の取扱い</p>
            <p class="pl-5 col-12 text_normal">個人情報の取扱いにあたり事業の内容および規模を考慮し、適法かつ公正な手段で行います。また、本人に対して利用目的を明らかにし、目的外利用をしません。</p>
            <p class="pl-3 col-12 m-1 text_medium">2．法令・規範の遵守</p>
            <p class="pl-5 col-12 text_normal">日本国その他の国・地域の法令、指針その他の規範、慣習および社会的ルールに従います。</p>
            <p class="pl-3 col-12 m-1 text_medium">3．個人情報の適正な管理措置</p>
            <p class="pl-5 col-12 text_normal">個人情報の安全管理措置を講じ、個人情報の漏えい・滅失・毀損・紛失・改ざん・不正アクセス等の防止に努めるとともに常に改善に努めます。</p>
            <p class="pl-3 col-12 m-1 text_medium">4．個人情報保護の組織活動</p>
            <ol class="pl-5">
              <li class="mb-1">個人情報管理責任者を指名して個人情報保護マネジメントシステムを構築し、実施ならびにその運用に関する責任および権限を与えて業務を行わせます。</li>
              <li class="mb-1">内部点検に基づき、社内の規程・運用を改善します。</li>
              <li class="mb-1">本ポリシーは、当社のウェブサイトへ掲載するなどにより一般の人が閲覧できるようにいたします。</li>
            </ol>
            <p class="pl-3 col-12 m-1 text_medium">5．継続的改善</p>
            <ol class="pl-5">
              <li class="mb-1">個人情報の適切な保護を確立・実施・維持・改善するために、定期的に「個人情報保護マネジメントシステム」を見直します。</li>
              <li class="mb-1">従業者が個人情報保護の重要性を認識し、その管理および取扱いを適切に行なえるよう、個人情報保護に関する教育・啓発に努めます。</li>
              <li class="mb-1">当社は、お客様のご意見も踏まえ、取得した個人情報の保護を図るためまたは法令その他の規範の改正に対応するために、本ポリシーを変更することがあります。変更した場合は、当社のホームページ等に掲載し公表いたします。</li>
            </ol>
            <p class="pl-3 col-12 m-1 text_medium">6．個人情報に関する苦情・相談等のお問合わせ</p>
            <p class="pl-5 col-12 text_normal">当社が取扱う個人情報についての苦情・ご意見・ご質問については、合理的な期間、妥当な範囲内で適切かつ迅速に対応いたします。本ページ下部の「<a href="#policy06" class="js-scroll">個人情報(特定個人情報)に関する苦情・相談等のお問合わせ</a>」よりご連絡ください。</p>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="border-left mb-3">個人情報の取扱い</h3>
            <p class="pl-3 col-12 m-1 text_medium">1．個人情報の取得</p>
            <p class="pl-5 col-12 text_normal">当社は以下の方法で個人情報を取得します。</p>
            <ul class="pl-5">
              <li class="mb-1" style="">本人から口頭または書面等により直接提供いただく場合</li>
              <li class="mb-1">本人が当社サービス等（商品、広告、コンテンツ等）の利用や閲覧に伴って、自動的に送信される場合</li>
              <li class="mb-1">本人から同意を得た第三者から間接的に提供を受ける場合</li>
              <li class="mb-1">刊行物やインターネット等で公開された個人情報を取得する場合</li>
            </ul>
            <p class="pl-5 col-12 text_normal">当社は、Cookie等の属性情報（IPアドレス、識別子、位置情報など）より収集されたwebの閲覧履歴・行動履歴及びその分析結果を、当社サービスおよび第三者が運営するデータ・マネジメント・プラットフォームから取得し、これらの情報をお客様の個人データと結び付けたうえで広告配信等の目的で利用する場合がありますが、この場合は個人情報として取扱います。</p>
            
            <p class="pl-3 col-12 m-1 text_medium">２．個人情報の利用目的</p>
            <p class="pl-5 col-12 text_normal">当社は個人情報を以下の内容で利用します。</p>
            <div class="pl-5">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>種別</th>
                    <th>利用目的</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>顧客情報</th> 
                    <td>
                      <ul>
                        <li>当社が提供するサービスの会員登録・ログイン時における本人確認（生体認証含む）およびサービスの提供。</li>
                        <li>当社サービスの実施に必要な本人確認、各種通知の送付、料金請求等の事務処理および身元確認に必要な資料の正当性の確認。</li>
                        <li>お客様との円滑な関係構築のためのパーソナリティや属性情報等を含めた顧客管理。</li>
                        <li>当社サービスにおいて提供する機器の納品・設置・工事・初期設定、納品日程調整等のご連絡、当該作業を委託する場合の委託先への提供。</li>
                        <li>当社サービスへご登録された情報の訂正・削除等。</li>
                        <li>当社のサービスのセキュリティ確保、事件・事故が発生した場合の調査・ご報告・ご連絡。</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <th>法令遵守のための情報</th>
                    <td>
                      <ul>
                        <li>当社のサービスに関する契約や法律にもとづく権利の行使、請求等に関する対応および適切な業務履行。</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <th>公開情報等により取得した情報</th>
                    <td>
                      <ul>
                        <li>当社のサービス・商品のご提案等の営業活動。</li>
                        <li>取引審査および与信管理・調査。</li>
                      </ul>
                    </td>
                  </tr>
                  <tr>
                    <th>お問合わせ</th>
                    <td>
                      <ul>
                        <li>以上に関するお問合わせ対応。</li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <p class="pl-3 col-12 text_medium">3．個人情報の提供</p>
            <p class="pl-5 col-12 m-1 text_normal" style="font-weight: bold;">3-1　個人情報の提供</p>
            <p class="pl-5 col-12 m-1 text_normal">当社は、個人情報の提供にあたり、以下の場合を除き本人の同意を得ない限り第三者（外国にある第三者を含みます）へ提供をしない措置を講じます。</p>
            <div class="pl-5 my-2">
              <ol class="pl-5">
                <li class="mb-1">法令にもとづく場合。</li>
                <li class="mb-1">人の生命、身体または財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                <li class="mb-1">公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき。</li>
                <li class="mb-1">国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき。</li>
                <li class="mb-1">利用目的の達成に必要な範囲内において個人データの取扱いの全部または一部を委託することに伴って当該個人データを提供する場合｡</li>
                <li class="mb-1">合併その他の事由による事業の承継に伴って個人データを提供する場合。なお、事業承継後は、承継前の利用目的の範囲内で利用いたします。</li>
                <li class="mb-1">特定の者との間で共同して利用する個人データを当該特定の者に提供する場合であって、その旨並びに共同して利用する個人データの項目、共同して利用する者の範囲、利用する者の利用目的および当該個人データの管理について責任を有する者の氏名または名称について、あらかじめ、本人に通知し、または本人が容易に知り得る状態に置いているとき。</li>
              </ol>
            </div>
  
            <p class="pl-5 col-12 m-1 text_normal" style="font-weight: bold;">3-2　委託先の監督</p>
            <p class="pl-5 col-12 m-1 mb-3 text_normal">個人情報を取扱う業務処理を委託する場合は、委託先に対して漏えい・滅失・毀損・紛失・改ざん・不正アクセス等が行われないよう個人情報保護に関する契約を締結し、委託先に対して監査等の適切な管理を行います。</p>
            
            <p class="pl-3 col-12 text_medium">4．個人情報の開示等</p>
            <p class="pl-5 col-12 m-1 text_normal">当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。</p>
            <div class="pl-5">
              <ol class="pl-5">
                <li class="mb-1">本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合。</li>
                <li class="mb-1">当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合。</li>
                <li class="mb-1">その他法令に違反することとなる場合。</li>
              </ol>
            </div>
  
            <p class="pl-5 col-12 text_normal">前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。</p>
            
            <p class="pl-3 col-12 m-0 text_medium">5．個人情報の訂正および削除</p>
            <p class="pl-5 col-12 text_normal">ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。当社は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。</p>
            
            <p class="pl-3 col-12 m-0 text_medium">6. 個人情報の利用停止等</p>
            <p class="pl-5 col-12 text_normal">当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。当社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。</p>
            
            
            <p class="pl-3 col-12 m-0 text_medium">7. プライバシーポリシーの変更</p>
            <p class="pl-5 col-12 text_normal">本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。</p>
          
          </div>
        </div>
        
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="border-left mb-3" id="policy04">特定個人情報保護方針</h3>
            <p class="pl-3 col-12 m-0 text_medium">1．事業者の名称</p>
            <p class="pl-5 col-12 text_normal">当社</p>
            <p class="pl-3 col-12 m-0 text_medium">2．関係法令・ガイドライン等の遵守</p>
            <p class="pl-5 col-12 text_normal">当社は、特定個人情報の保護に関する日本の法令、国が定める指針その他の関連規範(ガイドライン等)を遵守いたします。</p>
            <p class="pl-3 col-12 m-0 text_medium">3．安全管理措置に関する事項</p>
            <p class="pl-5 col-12 text_normal">当社は、特定個人情報の漏えい・滅失・毀損・紛失・改ざん・不正アクセス等を防止するため、社内規程を定めて合理的で適正な安全対策を講じます。</p>
            <p class="pl-3 col-12 m-0 text_medium">4．特定個人情報の適切な管理</p>
            <p class="pl-5 col-12 text_normal">当社は、特定個人情報の責任者を置き定期的な点検を実施し、特定個人情報の適切な管理に努めます。</p>
            <p class="pl-3 col-12 m-0 text_medium">5．苦情及びご相談の窓口</p>
            <p class="pl-5 col-12 text_normal">当社が取扱う特定個人情報についての苦情・ご意見・ご質問については、合理的な期間、妥当な範囲内で適切かつ迅速に対応いたします。本ページ下部の「<a href="#policy06" class="js-scroll">個人情報(特定個人情報)に関する苦情・相談等のお問合わせ</a>」よりご連絡ください。</p>
            <p class="pl-3 col-12 m-0 text_medium">6．特定個人情報の利用目的</p>
            <p class="pl-5 col-12 text_normal">特定個人情報の保護に関する日本の法令、国が定める指針その他の関連規範(ガイドライン等)で定められた目的の範囲内でのみ利用いたします。</p>
          </div>
        </div>
        
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="border-left mb-3">個人情報(特定個人情報)管理責任者</h3>
            <p class="pl-3 col-12 text_normal">専務執行役員</p>
          </div>
        </div>
  
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="border-left mb-3" id="policy06">個人情報（特定個人情報）に関する苦情・相談等のお問合わせ</h3>
            <span class="pl-3 col-12">本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。</span><br>
            <span class="pl-3 col-12">住所：</span><br>
            <span class="pl-3 col-12">社名：</span><br>
            <span class="pl-3 col-12">担当部署：</span><br>
            <span class="pl-3 col-12">Eメールアドレス：</span>
          </div>
        </div>
        <a href="#policy00" class="text-right" id="page-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
      </div>
    </div>
  </div>

</div>

@endsection