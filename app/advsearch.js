var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; 		//parse to int
            return input.slice(start);
        }
        return [];
    }
});

app.controller('customersCrtl', function ($scope, $http, $timeout) {

    $http.get('ajax/advsearch.php').success(function(data){            
        $scope.currentPage = 1; 			     	//current page
        $scope.entryLimit = 100; 			     	//max no of items to display in a page
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

    $scope.action = function(startdate,enddate,game,source) {
      if(game == null && source == null){
	   alert("請點選遊戲查詢和廣告渠道查詢");
               }else if(game == null){
	   alert("請點選遊戲查詢");
               }else if(source == null){
	   alert("請點選廣告渠道查詢");
               }else{
	 $scope.loading = true;
	 $scope.list = "";
 	 $http({
            	method: 'GET',
		url: '/ajax/advsearch.php',
		params: {
				startdate: startdate,
				enddate: enddate,
				game: game,
				source: source
            		 }
        	})
        	.success(function(data, status, headers, config) {
	            	$scope.list = data;
		$scope.loading = false;
        	})
        	.error(function(data, status, headers, config) {}
	  );
                }
         };

    $scope.regcntsum = function(){
  	var regcntsum = 0;
	for(var k in $scope.filtered){	   
	      regcntsum += parseFloat($scope.filtered[k].regcnt);
	}	
    	return regcntsum;
    };

    $scope.createrolecntsum = function(){
  	var createrolecntsum = 0;
	for(var k in $scope.filtered){	   
	      createrolecntsum += parseFloat($scope.filtered[k].create_role_cnt);
	}	
    	return createrolecntsum;
    };

    $scope.moneysum = function(){
  	var moneysum = 0;
	for(var k in $scope.filtered){	   
	      moneysum += parseFloat($scope.filtered[k].money);
	}	
    	return moneysum;
    };

});