@extends('layouts.basicPage')

@section('contents')

  <h2 class="pageTitle">Other Language projects</h2>

  <!-- 1st, start -->
  <div class="description">

    <div class="descriptionTitle">
      <h3>Sort words in a file</h3>
    </div>

    <div class="usedTechnology">
      <p>Used: C</p>
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
      <p>Used: C++</p>
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

@endsection