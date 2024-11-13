<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['query'];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
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

$routes =
    [
        "" => "controllers/index.php",
        "about" => "controllers/about.php",
        "contact" => "controllers/contact.php"
    ];

routeToController($uri, $routes);
