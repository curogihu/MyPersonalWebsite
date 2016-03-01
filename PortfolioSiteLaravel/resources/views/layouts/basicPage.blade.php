<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Personal Website</title>
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-social.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" type="text/css">
</head>
<body>
  <div id="container">
    @include('layouts.header')

    <div id="contents">
      <div id="displayContent">@yield('contents')</div>
    </div>

    @include('layouts.footer')
  </div>
</body>
</html>