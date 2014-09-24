<!doctype html>
<html lang="en" ng-app="VideoGameApp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular-route.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="<?php echo URL::asset('js/controllers/home.js');?>"></script>
    <script src="<?php echo URL::asset('js/app.js');?>"></script>
    <link rel="stylesheet" href="<?php echo URL::asset('css/game.css');?>"/>
    <title>Join the matchmaking</title>
</head>
<body>
    <div ng-view></div>
</body>
</html>