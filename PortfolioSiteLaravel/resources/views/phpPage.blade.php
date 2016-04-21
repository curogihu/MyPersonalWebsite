@extends('layouts.basicPage')

@section('contents')

  <h2 class="pageTitle">PHP projects</h2>

  <div class="description">
    <div class="descriptionTitle">
      <h3>My portfolio site</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP, Laravel</p>
    </div>

    <div class="screenShotContent">
      <img class="screenShot"
            src="{{ URL::asset('images/noImageLogo.png') }}"
            alt="My portfolio site">
    </div>

    <div class="sentence">
      <p>My portfolio site. Now you watch itself.</p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/MyPersonalWebsite">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div> <!-- end div class="description" -->

  <div class="description">
    <div class="descriptionTitle">
      <h3>Web scrape a site, indeed and collect information.</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP, MySQL, Laravel, AngularJS</p>
    </div>

    <div class="screenShotContent">
      <img class="screenShot"
            src="{{ URL::asset('images/noImageLogo.png') }}"
            alt="Web scrape a site, indeed and collect information.">
    </div>

    <div class="sentence">
      <p>
        Web scrape a site, indeed and collect information.
      </p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/SearchIndeed">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div> <!-- end div class="description" -->


  <div class="description">
    <div class="descriptionTitle">
      <h3>LoL Trend Research</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP, MySQL, Laravel, AngularJS, Riot API</p>
    </div>

    <div class="screenShotContent">
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
  </div> <!-- end div class="description" -->

  <div class="description">
    <div class="descriptionTitle">
      <h3>Web scraping an existed League of Legends site</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP, MySQL, PHP Simple HTML DOM Parser</p>
    </div>

    <div class="screenShotContent">
        <img class="screenShot"
              src="{{ URL::asset('images/noImageLogo.png') }}"
              alt="Web scraping an existed League of Legends site">
    </div>

    <div class="sentence">
      <p>
        Web scraping a site, http://probuilds.net/ and show the edited information.
      </p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/LoLSearchProBuildTrend">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div> <!-- end div class="description" -->

  <div class="description">
    <div class="descriptionTitle">
      <h3>Web scraping and posting to WordPress</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP, WordPress, PHP Simple HTML DOM Parser</p>
    </div>

    <div class="screenShotContent">
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
  </div> <!-- end div class="description" -->

  <div class="description">
    <div class="descriptionTitle">
      <h3>Programming test for applying a company</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: PHP</p>
    </div>

    <div class="screenShotContent">
      <img class="screenShot"
            src="{{ URL::asset('images/noImageLogo.png') }}"
            alt="Programming test for applying a company">
    </div>

    <div class="sentence">
      <p>
        This was a programming quiz for applying a company in Surrey, BC, Canada. I solved the quiz as a skill check, but didn't apply because the candidates had to be immigrant and I'm not immigrant.
      </p>
    </div>

    <div>
      <a href="https://github.com/curogihu/Top3000PlayersOnScrollsGuide">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div> <!-- end div class="description" -->

@endsection