// script.js

    // create the module and name it musicApp
        // also include ngRoute for all our routing needs
    var musicApp = angular.module("mymusicApp", ['ngRoute', 'ui.bootstrap']);
        
    // configure our routes
    musicApp.config(['$routeProvider', function($routeProvider) {
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : "home.html",
               controller  : 'homeController'
            })

            // route for the about page
            .when('/music', {
            	templateUrl : 'music.html',
               controller  : 'musicController'
                
            })
             // route for the about page
            .when('/about', {
                templateUrl : 'about.html',
                controller  : 'aboutController'
            })
            
             // route for the about page
            .when('/contacts', {
                templateUrl : 'contacts.html',
                controller  : 'contactsController'
            })
                      
            .when('/login',    {
                templateUrl : 'partials/login.html',
                controller  : 'loginController'
            })
            
            .when('/register', {
                templateUrl : 'partials/register.html',
                controller  : 'registerController'
            })
            // default to home
        	.otherwise ({redirectTo: '/'});
        
    }]);

    // create the controller and inject Angular's $scope
    musicApp.controller('homeController', function($scope) {
        // create a message to display in our view
        $scope.message = 'Welcome to Home page';
    });
    
    musicApp.controller('aboutController', function($scope) {
        // create a message to display in our view
        $scope.message = 'Welcome to About page';
    });
    
    musicApp.controller('contactsController', function($scope) {
        // create a message to display in our view
        $scope.message = 'Welcome to Contacts page';
    });

    musicApp.controller('musicController', function($scope) {
        $scope.message = 'Welcome to Music';
    });
       
    musicApp.controller('registerController', function($scope) {
        $scope.message = 'Welcome to Registration';
    });
    
    musicApp.controller('loginController', function($scope) {
        $scope.message = 'Welcome to Login page';
    }); 
    