<!DOCTYPE html>
<html lang="ja" ng-app="WorkExperienceApp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Personal Website</title>
  <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" type="text/css">
  <script src="{{{asset('/js/angular.min.js')}}}"></script>
</head>

<body ng-controller="WorkExperienceController as WorkExperienceCtrl">

  <div id="container">
    @include('layouts.header')

    <div id="contents">
<!--
      <div ng-repeat="(key, val) in WorkExperienceCtrl.workExperiences | filter: key='pasco'">
        <p><%key%>,<%val%></p>
        <h2>CompanyName</h2>
        <p ng-if='key == "{{$companyName}}"'>
        <p>
          <% val.companyNameKey %><br>
          <% val.companyName %><br>
          <% val.importTask %><br>
          <% val.story %><br>
          <% val.retirementReason %><br>

        </p>
      </div>
-->
      <div ng-if="'{{$companyName}}' == 'softbankmobile'">
        <h2>Company Name</h2>
        <p>Softbank Mobile</p>

        <h3>Workplace location</h3>
        <p>Tokyo, Japan</p>

        <h3>Memoriable task</h3>
        <p></p>

        <h3>Background</h3>
        <p></p>

        <h3>Retirement Reason</h3>
        <p></p>
      </div>

      <div ng-if="'{{$companyName}}' == 'pasco'">
        <h2>Company Name</h2>
        <p>Pasco Corporation</p>

        <h3>Workplace location</h3>
        <p>Tokyo, Japan</p>

        <h3>Memoriable task</h3>
        <p></p>

        <h3>Background</h3>
        <p></p>

        <h3>Retirement Reason</h3>
        <p></p>
      </div>

      <div ng-if="'{{$companyName}}' == 'sbi'">
        <h2>Company Name</h2>
        <p>SBI Business Support</p>

        <h3>Workplace location</h3>
        <p>Tokyo, Japan</p>

        <h3>Memoriable task</h3>
        <p></p>

        <h3>Background</h3>
        <p></p>

        <h3>Retirement Reason</h3>
        <p></p>
      </div>

      <div ng-if="'{{$companyName}}' == 'triforce'">
        <h2>Company Name</h2>
        <p>Tri-force Corporation</p>

        <h3>Workplace location</h3>
        <p>Tokyo, Japan</p>

        <h3>Memoriable task</h3>
        <p></p>

        <h3>Background</h3>
        <p></p>

        <h3>Retirement Reason</h3>
        <p></p>
      </div>

      <div ng-if="'{{$companyName}}' == 'nii'">
        <h2>Company Name</h2>
        <p>Nippon Information Industry Corp.</p>

        <h3>Workplace location</h3>
        <p>Tokyo, Japan</p>

        <h3>Memoriable task</h3>
        <p></p>

        <h3>Background</h3>
        <p></p>

        <h3>Retirement Reason</h3>
        <p></p>
      </div>

    </div>

    @include('layouts.footer')
  </div>

  <script type="text/javascript">
    /*
    after finishing base portfolio page, try replacing ng-if with ng-repeat + filter
    */
    var workExperiences =
      {
        "softbankmobile":
          {
            "companyNameKey": "softbankmobile",
            "companyName": "Softbank Mobile",
            "importTask": "abc",
            "story": "テスト１",
            "retirementReason": "aaaa"
          },

        "pasco":
           {
            "companyNameKey": "pasco",
            "companyName": "Pasco",
            "importTask": "abc",
            "story": "テスト2",
            "retirementReason": "bbbb"
          },

        "sbi":
           {
            "companyNameKey": "sbi",
            "companyName": "SBI",
            "importTask": "abc",
            "story": "テスト１",
            "retirementReason": "aaaa"
          },

        "triforce":
          {
            "companyNameKey": "triforce",
            "companyName": "Tri force",
            "importTask": "abc",
            "story": "テスト１",
            "retirementReason": "aaaa"
          },

        "nii":
           {
            "companyNameKey": "nii",
            "companyName": "NII",
            "importTask": "abc",
            "story": "テスト１",
            "retirementReason": "aaaa"
          },
      };

    var app = angular.module('WorkExperienceApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

    app.controller('WorkExperienceController', function($scope, $http){
      this.workExperiences = angular.fromJson(workExperiences);
    });

  </script>

</body>
</html>