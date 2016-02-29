@extends('layouts.basicPage')

@section('contents')
  <div class="description">
    <a href="https://github.com/curogihu/ScalaWithMySQL" class="overwhite">
      <img style="width: 100px; height: auto;"
            align="left"
            src="{{ URL::asset('images/scalaLogo.png') }}"
            alt="Scala + MySQL">
    </a>
    <p>
      Scala + MySQL<br>
      - Based on MySQL, show data randomly summoner bought all items during a match<br>
    </p>
  </div>

  <div class="description">
    <a href="https://github.com/curogihu/WebScrapingByScala" class="overwhite">
      <img style="width: 100px; height: auto;"
            align="left"
            src="{{ URL::asset('images/scalaLogo.png') }}"
            alt="Scala + Web scraping">
    </a>
    <p>
      Web scraping with Scala<br>
      - Web scrape a Japanese Rental properties site and show the contents on the web browser.<br>
    </p>
  </div>
@endsection