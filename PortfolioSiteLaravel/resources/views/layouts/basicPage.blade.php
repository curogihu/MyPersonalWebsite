<!DOCTYPE html>
<html lang="ja"  ng-app="ProjectsApp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Personal Website</title>
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-social.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" type="text/css">

  <script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.1.min.js') }}"></script>
  <script src="{{ URL::asset('js/angular.min.js') }}"></script>
  <script src="{{ URL::asset('js/projects.js') }}"></script>
</head>

<body ng-controller="ProjectsController as ProjectsCtrl">
  <div id="container">
    @include('layouts.header')

    <div ng-if=""
      <div id="contents">
        <div id="displayContent">@yield('contents')</div>
      </div>

    <div class="pageUp">
      <a href="#top" class="scroll-link"></a>
    </div>

    @include('layouts.footer')
  </div>

  <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>

  <script type="text/javascript">
    var app = angular.module('ProjectsApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

    app.controller('ProjectsController', function($scope, $http, $location){
      this.projects = angular.fromJson(projects);
    });

  </script>
</body>
</html>