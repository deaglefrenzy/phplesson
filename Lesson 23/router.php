<?php

$routes = require('routes.php');

function routeToController($uri, $routes)
{
    //if (array_key_exists($uri, $routes)) {
    $rr = explode('&', $uri)[0];
    if (array_key_exists($rr, $routes)) {
        require $routes[$rr];
    } else {
        abort(404);
    }
}
function abort($code = 404)
{
    http_response_code($code);
    require("views/{$code}.php");
    die();
}
$uri = parse_url($_SERVER['REQUEST_URI'])['query'];
routeToController($uri, $routes);
