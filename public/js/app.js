var app = angular.module('VideoGameApp', [
    'ngRoute',
    'homeControllers'
]);

app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: '/js/views/home.html',
                controller: 'HomeController'
            }).
            when('/game/:gameId',{
                templateUrl: '/js/views/game.html',
                controller: 'GameController'
            });
    }]);