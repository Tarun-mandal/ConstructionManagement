<?php
    require_once __DIR__.'/vendor/autoload.php';
    require_once __DIR__.'/vendor/mongodb/mongodb/src/functions.php';
    require_once __DIR__.'/constants.php';

    // Loading Environment Variables
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
    $dotenv->load();

    // Using Environment Variables
    $uri = $_ENV["URI"];
    
    // Instantiating MongoDB Client
    $con = new MongoDB\Client($uri);

    if(!$con)
        die("Cannot connect to Server");
?>
