@extends('layouts.basicPage')

@section('contents')

  <h2 class="pageTitle">Scala projects</h2>

  <!-- 1st, start -->
  <div class="description">

    <div class="descriptionTitle">
      <h3>Connect to DB and display randomly the game data</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: Scala, MySQL</p>
    </div>

    <div class="screenShotContent">
      <img class="screenShot"
            src="{{ URL::asset('images/noImageLogo.png') }}"
            alt="The image of League of Lengteds information site">
    </div>

    <div class="sentence">
      <p>
        Based on MySQL, show data randomly summoner bought all items during a match.
      </p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/ScalaWithMySQL">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 1st, end -->

  <!-- 2nd, start -->
  <div class="description">

    <div class="descriptionTitle">
      <h3>Web scraping with Scala</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: Scala</p>
    </div>

    <div class="screenShotContent">
      <img class="screenShot"
            src="{{ URL::asset('images/noImageLogo.png') }}"
            alt="The image of League of Lengteds information site">
    </div>

    <div class="sentence">
      <p>
        Web scrape a Japanese Rental properties site and show the contents on the web browser.
      </p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/WebScrapingByScala">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 2nd, end -->

@endsection