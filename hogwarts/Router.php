<?php
require 'controllers/courses.php';
require 'controllers/leaderboard.php';
require 'controllers/dashboard.php';
require 'controllers/diagonalley.php';
require 'controllers/home.php';
require 'controllers/login.php';
require 'controllers/signup.php';

$path = "/hogwarts";

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = strtolower($_SERVER['REQUEST_METHOD']);

$routes = require 'routes.php';


if (isset($routes[$method][$url])) {
    $route = $routes[$method][$url];

    if (is_array($route)) {
        $controller = new $route[0]($db);
        ob_end_clean();
        return call_user_func([$controller, $route[1]]);
    } else {
        require $route;
    }
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>
