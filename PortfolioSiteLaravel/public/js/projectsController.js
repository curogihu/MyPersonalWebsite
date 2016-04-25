var app = angular.module('ProjectsApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('ProjectsController', function($scope, $http, $location){
  this.projects = angular.fromJson(projects);
});