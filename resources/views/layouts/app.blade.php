<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cytech team project</title>
  
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/mypage.js') }}" defer></script>

  {{-- アイコンスクリプト --}}
  <script src="https://kit.fontawesome.com/8f09fca690.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>

  </header>

  <main>
    @yield('content')
  </main>

  <footer>
  
  </footer>
  
</body>
</html>