var homeController = angular.module('homeControllers',[]);



homeController.controller('HomeController',['$scope','$http',function($scope,$http){
    console.log('HomeController');
    $http.get('/api/games').success(function(data) {
        $scope.games = [];
        if(!data.error)
            $scope.games = data.games;
        else
            console.log("Impossible to load games");
    });
}]);

homeController.controller('GameController',['$scope','$routeParams','$http',function($scope,$routeParams,$http){
    console.log('GameController');
    $http.get('/api/game/'+$routeParams.gameId).success(function(data) {
        $scope.game = [];
        if(!data.error)
            $scope.game = data.game;
        else
            console.log("Impossible to load games");
    });
}]);