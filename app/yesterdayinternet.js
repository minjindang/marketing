var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
});
app.controller('customersCrtl', function ($scope, $http, $timeout) {
    $scope.loading = true;
    $http.get('ajax/yesterdayinternet.php').success(function(data){            
        $scope.list = data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 100; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;
	 $scope.loading = false;
    });
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };
          $scope.ipcntsum= function(){
  	var ipcntsum= 0;
	for(var k in $scope.filtered){	   
	      ipcntsum += parseFloat($scope.filtered[k].ipcnt);
	}	
    	return ipcntsum;
    };
    $scope.regcntsum= function(){
  	var regcntsum= 0;
	for(var k in $scope.filtered){	   
	      regcntsum+= parseFloat($scope.filtered[k].regcnt);
	}	
    	return regcntsum;
    };
    $scope.createrolecntsum= function(){
  	var createrolecntsum= 0;
	for(var k in $scope.filtered){	   
	      createrolecntsum += parseFloat($scope.filtered[k].create_role_cnt);
	}	
    	return createrolecntsum;
    };
});