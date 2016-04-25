<!DOCTYPE html>
<html lang="ja"  ng-app="ProjectsApp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Yony's portfolio site</title>
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-responsive.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-social.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" type="text/css">

  <script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.1.min.js') }}"></script>
  <script src="{{ URL::asset('js/angular.min.js') }}"></script>
  <script src="{{ URL::asset('js/projects.js') }}"></script>
  <script src="{{ URL::asset('js/ProjectsController.js') }}"></script>
</head>

<body ng-controller="ProjectsController as ProjectsCtrl">
  <div id="container">
    @include('layouts.header')

      <div id="contents">
        <div id="displayContent">

          <div ng-repeat="project in ProjectsCtrl.projects" ng-cloak>
            <h2 class="pageTitle"><% project.category %> project</h2>

            <div class="description">
              <div class="descriptionTitle">
                <h3><% project.projectTitle %></h3>
              </div> <!-- div class="descriptionTitle" -->

              <div class="usedTechnology">
                <p>Used: <% project.usedTechnology %></p>
              </div> <!-- div class="usedTechnology" -->

              <div class="screenShotContent">
                <a href="http://loltrendresearch.xyz/" class="overwhite">
                  <img class="screenShot"
                        src="{{ URL::asset('images/loltrendreseachSiteImage.png') }}"
                        alt="The image of League of Lengteds information site">
                </a>
              </div> <!-- div class="screenShotContent" -->

              <div class="sentence">
                <p>
                  <% project.sentence %>
                </p>
              </div> <!-- div class="sentence" -->

              <div class="githubLink">
                <a href="<% project.githubLink %>">
                  <span class="fa fa-github fa-3x"></span>
                </a>
              </div> <!-- div class="githubLink" -->
            </div> <!-- div class="description" -->
            <hr>
          </div> <!-- div ng-repeat -->
        </div>
      </div>

    <div class="pageUp">
      <a href="#top" class="scroll-link"></a>
    </div>

    @include('layouts.footer')
  </div>

  <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
</body>
</html>