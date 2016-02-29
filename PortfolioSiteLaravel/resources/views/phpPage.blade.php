@extends('layouts.basicPage')

@section('contents')
  <div class="description">
    <a href="http://loltrendresearch.xyz/" class="overwhite">
      <img style="width: 100px; height: auto;"
            align="left"
            src="{{ URL::asset('images/loltrendreseachSiteImage.png') }}"
            alt="The image of League of Lengteds information site">
    </a>
    <p>
      LoL Trend Research<br>
      - It is informative for League of Legends beginners to provide when and what summoner tend to buy items each champion.<br>
    </p>
  </div>

  <div class="description">
    <a href="https://github.com/curogihu/scrape_rentSite" class="overwhite">
      <img style="width: 100px; height: auto;"
            align="left"
            src="{{ URL::asset('images/phpLogo.png') }}"
            alt="Web scraping and automatically post to WordPress">
    </a>
    <p>
      Web scraping and automatically post to WordPress<br>
      - Web scrape a Japanese Rental properties site, which are automatically posted to Wordpress.
    </p>
  </div>

  <div class="description">
    <a href="https://github.com/curogihu/LoLSearchProBuildTrend" class="overwhite">
      <img style="width: 100px; height: auto;"
            align="left"
            src="{{ URL::asset('images/phpLogo.png') }}"
            alt="Web scraping a site, http://probuilds.net/ and show the edited information.">
    </a>
    <p>
      Web scraping an existed League of Legends site<br>
      - Web scraping a site, http://probuilds.net/ and show the edited information.
    </p>
  </div>
@endsection