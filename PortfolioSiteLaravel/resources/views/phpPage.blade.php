@extends('layouts.basicPage')

@section('contents')

  <h2 class="pageTitle">PHP projects</h2>

  <!-- 1st, start -->
  <div class="description">

    <div class="descriptionTitle">
      <h2>LoL Trend Research</h2>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP, MySQL, Laravel, AngularJS, Riot API</p>
    </div>

    <div class="screenShotCotent">
      <a href="http://loltrendresearch.xyz/" class="overwhite">
        <img class="screenShot"
              src="{{ URL::asset('images/loltrendreseachSiteImage.png') }}"
              alt="The image of League of Lengteds information site">
      </a>
    </div>

    <div class="sentence">
      <p>
        It is informative for League of Legends beginners
        to provide when and what summoner tend to buy items each champion.
      </p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/LoLTrendResearch">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 1st, end -->

  <!-- 2nd, start -->
  <div class="description">
    <div class="descriptionTitle">
      <h2>Web scraping an existed League of Legends site</h2>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP, MySQL, PHP Simple HTML DOM Parser</p>
    </div>

    <div>
        <img class="screenShot"
              src="{{ URL::asset('images/noImageLogo.png') }}"
              alt="Web scraping an existed League of Legends site">
    </div>

    <div class="sentence">
      <p>
        Web scraping a site, http://probuilds.net/ and show the edited information.
      </p>
    </div>

    <div>
      <a href="https://github.com/curogihu/LoLSearchProBuildTrend">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 2nd, end -->

  <!-- 3rd, start -->
  <div class="description">

    <div class="descriptionTitle">
      <h2>Web scraping and posting to WordPress</h2>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP, WordPress, PHP Simple HTML DOM Parser</p>
    </div>

    <div>
      <img class="screenShot"
            src="{{ URL::asset('images/noImageLogo.png') }}"
            alt="The image of League of Lengteds information site">
    </div>

    <div class="sentence">
      <p>
        Web scrape a Japanese Rental properties site, which are automatically posted to Wordpress.
      </p>
    </div>

    <div>
      <a href="https://github.com/curogihu/scrape_rentSite/blob/master/automaticPost.php">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>

    <!-- 3rd, end -->
@endsection