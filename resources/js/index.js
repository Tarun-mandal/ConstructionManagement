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
app.controller("tax_calc", function($scope, $http){
	$scope.changeRate = function(){
		if($scope.area_under === "panchayat")
			$scope.rate = 15;
		else if($scope.area_under === "municipality")
			$scope.rate = 25;
		else if($scope.area_under === "municipal_corporation")
			$scope.rate = 35;
	}
	
	// Submitting the form
	$scope.submitForm = function(){
			const url = "/backend.php"
			const tax = Number($scope.area * $scope.rate);
			const params = {
				"action":1,
				"fname"			:	$scope.owner_fname,
				"mname"			:	$scope.owner_mname,
				"lname"			:	$scope.owner_lname,
				"khatiyan"		:	$scope.khatiyan,
				"dag"			:	$scope.dag,
				"plot"			:	$scope.plot,
				"area"			:	$scope.area,
				"area_under"	:	$scope.area_under,
				"tax"			:	tax
			}
			const query =  Object.keys(params)
			.map(key => {
			  return `${key}=${encodeURIComponent(params[key])}`;
			})
			.join('&');

			const config = {
				"headers": {
					"content-type"	:	"application/x-www-form-urlencoded"
				}
			}

			$http.post(url, query, config)
			.then(function(res){
				console.log(res);
			})
	}
});
