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
    $http.get('../ajax/bahamember.php').success(function(data){            
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
          $scope.action = function(inputdate) {
 	 $http({
            		method: 'GET',
		url: '/ajax/bahamember.php',
		params: {
		                name: inputdate
            		}
        	})
        	.success(function(data, status, headers, config) {
	            $scope.list = data;
        	})
        	.error(function(data, status, headers, config) {
            		// Error
        	});
    };
    $scope.mbregistersum = function(){
  	var mbregistersum = 0;
	for(var k in $scope.filtered){	   
	      mbregistersum += parseFloat($scope.filtered[k].mbregister);
	}
	
    	return mbregistersum;
    };
});