@extends('layouts.basicPage')

@section('contents')

  <h2 class="pageTitle">Other Language projects</h2>

  <!-- 1st, start -->
  <div class="description">

    <div class="descriptionTitle">
      <h3>Sort words in a file</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: C [homework]</p>
    </div>

    <div class="screenShotContent">
      <img class="screenShot"
            src="{{ URL::asset('images/noImageLogo.png') }}"
            alt="The image of League of Lengteds information site">
    </div>

    <div class="sentence">
      <p>
        Sort words in descending order of appearence count which are stated in an input file.
      </p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/School_homework/blob/master/classProject/mainFunction3.c">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 1st, end -->

  <!-- 2nd, start -->
  <div class="description">
    <div class="descriptionTitle">
      <h3>Investigate words in input file and output a result file</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: C++ [homework]</p>
    </div>

    <div class="screenShotContent">
        <img class="screenShot"
              src="{{ URL::asset('images/noImageLogo.png') }}"
              alt="Web scraping an existed League of Legends site">
    </div>

    <div class="sentence">
      <p>
        Investigate each alphabet in words, then output a file which contains each alphabet appearence per word.
      </p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/School_homework/blob/master/classProject/SearchAppearance.cpp">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 2nd, end -->

  <!-- 3rd, start -->
  <div class="description">
    <div class="descriptionTitle">
      <h3>Airline Reservation System</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: C# [homework]</p>
    </div>

    <div class="screenShotContent">
        <img class="screenShot"
              src="{{ URL::asset('images/noImageLogo.png') }}"
              alt="Web scraping an existed League of Legends site">
    </div>

    <div class="sentence">
      <p>I remembered that it was hard for novice developers because a part was beyond the course contents.</p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/AirlineReservationSystem">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 3rd, end -->

  <!-- 4th, start -->
  <div class="description">
    <div class="descriptionTitle">
      <h3>Create a maze game with character like Pacman</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: Visual Basic [homework]</p>
    </div>

    <div class="screenShotContent">
        <img class="screenShot"
              src="{{ URL::asset('images/noImageLogo.png') }}"
              alt="Web scraping an existed League of Legends site">
    </div>

    <div class="sentence">
      <p>
        Create a maze game. The goal is heading from the higher left corner to the lower right corner.
      </p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/ModifiedMazeGame">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 4th, end -->

  <!-- 5th, start -->
  <div class="description">
    <div class="descriptionTitle">
      <h3>Scrape Japanese local government urls from a site</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: Visual Basic Application [business]</p>
    </div>

    <div class="screenShotContent">
        <img class="screenShot"
              src="{{ URL::asset('images/noImageLogo.png') }}"
              alt="Web scraping an existed League of Legends site">
    </div>

    <div class="sentence">
      <p>The project doesn't work because the target site was disappeared.</p>
    </div>

    <div class="githubLink">
      <a href="https://github.com/curogihu/ScrapingHTMLByVBA">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </div>
  </div>
  <!-- 5th, end -->

@endsection