<?php

function routeToController($uri, $routes)
{
    $rr = explode('&', $uri)[0];
    if (array_key_exists($rr, $routes)) {
        require base_path($routes[$rr]);
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['query'];

routeToController($uri, $routes);
