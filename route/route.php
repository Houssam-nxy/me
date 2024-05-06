<?php

$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');


$route_url = [
    '' => 'controllers/HomeController.php',
    'about' => 'controllers/AboutController.php',
    'contact' => 'controllers/ContactController.php',
    'pricing' => 'controllers/PortfolioController.php',
    'blog' => 'controllers/BlogController.php',
    '404' => 'controllers/404Controller.php',
];

function routingFun($route_url, $uri){
    if (array_key_exists($uri, $route_url)) {
        require $route_url[$uri];
    } else {
        require $route_url['404'];
    }
    
}

routingFun($route_url, $uri);