<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Personal Website</title>
  <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" type="text/css">
</head>
<body>
  <div id="container">
    <div id="header">
      <div id="titleColumn"><h1>Being a full stack developer, <br>Yony in Vancouver</h1></div>
      <div id="categoryColumn">
        <div class="categoryItem1"><a href="/php">PHP</a></div>
        <div class="categoryItem2"><a href="/scala">Scala</a></div>
        <div class="categoryItem4"><a href="/event">Event Participation</a></div>
        <div class="categoryItem5"><a href="/schedule">Schedule</a></div>
      </div>
    </div>

    <div id="contents">
      <div id="displayContent">@yield('contents')</div>
      <div id="siderBar">side data</div>
    </div>

    <div id="footer">&copy; 2016 Being a full stack developer, Yony in Vancouver</div>
  </div>
</body>
</html>