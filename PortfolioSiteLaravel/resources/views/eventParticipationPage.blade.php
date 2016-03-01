@extends('layouts.basicPage')

@section('contents')
  <div class="description">
    <img style="width: auto; height: 100px;"
          align="left"
          src="{{ URL::asset('images/cLogo.png') }}"
          alt="The image of League of Lengteds information site">

    <p>Name: Sort words in a file</p>
    <p>Description: Sort words in descending order of appearence count which are stated in an input file.</p>
    <p>
      <a href="https://github.com/curogihu/School_homework/blob/master/classProject/mainFunction3.c">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </p>
  </div>

  <div class="description">
    <img style="width: auto; height: 100px;"
          align="left"
          src="{{ URL::asset('images/cPlusPlusLogo.png') }}"
          alt="The image of League of Lengteds information site">

    <p>Name: Investigate words in input file and output a result file</p>
    <p>Description: Investigate each alphabet in words, then output a file which contains each alphabet appearence per word.</p>
    <p>
      <a href="https://github.com/curogihu/School_homework/blob/master/classProject/SearchAppearance.cpp">
        <span class="fa fa-github fa-3x"></span>
      </a>
    </p>
  </div>

@endsection