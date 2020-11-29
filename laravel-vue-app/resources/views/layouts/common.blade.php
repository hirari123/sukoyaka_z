<!-- 全画面のテンプレート -->

<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>健やかday's</title>
    <!-- cssをインポート -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    @include('parts.header')
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>