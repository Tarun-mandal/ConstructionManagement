// Initialising Angular Application
const app = angular.module("cms", ['ngRoute']);

// Configuring Routes
app.config(($routeProvider, $locationProvider)=>{
    $locationProvider.hashPrefix("");
    $routeProvider
    .when("/",{
        templateUrl: "partials/home.php"
    })
    .when("/about",{
        templateUrl: "partials/about.php"
    })
    .when("/denote_area",{
        templateUrl: "partials/denote_area.php",
        controller: "tax_calc"
    })
    .when("/construct_quote",{
        templateUrl: "partials/construct_quote.php"
    })
    .when("/contact",{
        templateUrl: "partials/contact.php"
    })
});

// Adding Controllers
app.controller("tax_calc", function($scope){
    $scope.changeRate = function(){
        if($scope.area_under === "panchayat")
            $scope.rate = 15;
        else if($scope.area_under === "municipality")
            $scope.rate = 25;
        else if($scope.area_under === "municipal_corp")
            $scope.rate = 35;
    }
});
