<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['query'];
//$uri = $_SERVER['REQUEST_URI'];
//dd($uri);

$routes =
    [
        "" => "controllers/index.php",
        "about" => "controllers/about.php",
        "notes" => "controllers/notes.php",
        "note" => "controllers/note.php",
        "contact" => "controllers/contact.php"
    ];


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

routeToController($uri, $routes);
