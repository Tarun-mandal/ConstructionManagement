<!DOCTYPE html>
<html lang="en" ng-app="cms">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="This is a construction management system">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="resources/css/bootstrap.min.css" type="text/css">
        <script src="resources/js/bootstrap.bundle.min.js" type="text/javascript"defer></script>
        <script src="resources/js/angular.min.js" type="text/javascript"defer></script>
        <script src="resources/js/angular-route.min.js" type="text/javascript"defer></script>
        <script src="resources/js/index.js" type="text/javascript"defer></script>
        <title>Gupta Constructions</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#/">Gupta Constructions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#/denote_area">Denote Area</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#/construct_quote">Construction Quote</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#/contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="ng-view"></div>
    </body>
</html>
