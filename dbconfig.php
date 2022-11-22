<?php
    require_once __DIR__.'/vendor/autoload.php';
    require_once __DIR__.'/vendor/mongodb/mongodb/src/functions.php';
    require_once __DIR__.'/constants.php';

    $url = "mongodb://localhost:27017";
    // Instantiating MongoDB Client
    $con = new MongoDB\Client($url);

    if(!$con)
        die("Cannot connect to Server");
?>
