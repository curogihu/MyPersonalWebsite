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
      <div id="titleColumn">Being a full stack developer in Vancouver</div>
      <div id="categoryColumn">
        <div class="categoryItem1"><a href="/php">PHP</a></div>
        <div class="categoryItem2"><a href="#">Scala</a></div>
        <div class="categoryItem3"><a href="#">HTML+CSS</a></div>
        <div class="categoryItem4"><a href="#">Event</a></div>
        <div class="categoryItem5"><a href="#">Interested</a></div>
      </div>
    </div>

    <div id="contents">
      <div id="displayContent">@yield('contents')</div>
      <div id="siderBar">side data</div>
    </div>

    <div id="footer">footer</div>
  </div>
</body>
</html>