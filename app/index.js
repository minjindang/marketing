var app = angular.module('myApp', ['ngRoute']);
    //'ui.bootstrap'
    app.factory('myApp', function(){
        return { message: "I'm Data from a Service" }
    });

    app.controller('LoginCtrl', function ($scope) {
    /**/
    // console.log("Good");
    $scope.submit = function(){
        // # do something to get auth token
        // authToken = "token";
        // console.log("TEST");
        // console.log($scope.rememberMe);
    }
   
   
    /*
    $scope.rememberMe = function(){
       //# user DOES to be remembered
       //$cookies.token = authToken;
       console.log("memberme");
       
       //# user DOES NOT want to be remembered
       //$window.sessionStorage.token = authToken
    }
    */ 
});