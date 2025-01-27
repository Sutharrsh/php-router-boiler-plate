<?php

// Include necessary files
require_once 'Router.php';
require_once 'LandingPage.php';

// Create a new Router instance
$router = new Router();

// Define the route for the landing page
$router->addRoute('GET', '/', function() {
    $landingPage = new LandingPage();
    $landingPage->show();
});

// Dispatch the request based on the current URL
$router->dispatch();

?>
