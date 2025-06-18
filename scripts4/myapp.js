/*
 * My script file
*/

	$(document).ready(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});
	
	var myApp = angular.module('myApp', ['ngRoute']);

	myApp.config(['$routeProvider', function($routeProvider]){
		
		
		
	$routeProvider
		.when ('home', {
		templateUrl: 'views/home.html'
		})
		.when ('team', {
			templateUrl: 'views/team.html'
		})
		.when ('documentation', {
			templateUrl: 'views/documention.html'
		})
		.when ('portfolio', {
			templateUrl: 'views/portfolio.html'
		})
		.otherwise({
			redirectTo: 'home'
		}) 
		
	// angular.module('TestApp', []).controller('testController', ['$scope', '$http', function($scope, $http){
		
			//$scope.	
		
		//$http.get('sample.json').success(function(data){		
		//$scope.people = data;
		//});		
	}]);
	
	
	function OpenPopupWindow() {
		window.open("video.html");
	}