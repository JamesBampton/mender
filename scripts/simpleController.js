var demoApp = angular.module('demoApp', ['ngRoute','ui.bootstrap']);

demoApp.controller(['$routeProvider',function($routeProvider){

    $routeProvider.

    when('/', {

        templateUrl: 'partials/home.html',

        controller: 'musicCtrl'

    }). 
    
    when('/music', {

        templateUrl: 'partials/music.html',

        controller: 'musicCtrl'

    }).   


    when('/about', {

        templateUrl: 'partials/about.html',

        controller: 'aboutCtrl'

    }).

    otherwise({

        redirectTo: '/'
    
    }); 	
 
        	demoApp.controller('musicCtrl', function($scope){
        		
        		$scope.message = 'Welcome to music page';
        		
        	});
        	
        	demoApp.controller('aboutCtrl', function ($scope){
        		
        		$scope.message = 'Welcome to about page';       	
        	
    });

}]);