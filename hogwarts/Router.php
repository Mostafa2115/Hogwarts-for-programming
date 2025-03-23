<?php
require 'controllers/courses.php';
require 'controllers/leaderboard.php';
require 'controllers/dashboard.php';
require 'controllers/diagonalley.php';
require 'controllers/home.php';
require 'controllers/login.php';
require 'controllers/signup.php';
require 'controllers/challenge.php';

$path = (require 'Config.php')['path'];

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = strtolower($_SERVER['REQUEST_METHOD']);
$routes = require 'routes.php';


if ($method === 'post' && isset($_POST['_method'])) {
    $method = strtolower($_POST['_method']);
}

if (!isset($routes[$method])) {
    http_response_code(405);
    echo "Method Not Allowed";
    exit;
}

foreach ($routes[$method] as $route => $handler) {
    $pattern = preg_replace('#\{\w+\}#', '([^\/]+)', $route);
    
    if (preg_match("#^$pattern$#", $url, $matches)) {
        array_shift($matches);
        
        [$controller, $methodHandler] = $handler;
        $instance = new $controller($db);
        $GLOBALS['header'] = $instance->header;
        if (in_array($method, ['put', 'delete'])) {
            $inputData = json_decode(file_get_contents("php://input"), true);
            $matches[] = $inputData;
            echo $inputData;
        }

        call_user_func_array([$instance, $methodHandler], $matches);
        exit;
    }
}

http_response_code(404);
echo "Not Found";
?>
