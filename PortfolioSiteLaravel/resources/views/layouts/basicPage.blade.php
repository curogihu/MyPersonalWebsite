<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Personal Website</title>
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-social.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" type="text/css">

  <script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.1.min.js') }}"></script>
</head>
<body>
  <div id="container">
    @include('layouts.header')

    <div id="contents">
      <div id="displayContent">@yield('contents')</div>
    </div>

    <div class="pageUp">
      <a href="#top" class="scroll-link"></a>
    </div>

    @include('layouts.footer')
  </div>

  <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
</body>
</html>