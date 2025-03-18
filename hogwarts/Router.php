<?php

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    "$path/" => "controllers/home.php",
    "$path/courses" => "controllers/courses.php",
    "$path/dashboard" => "controllers/dashboard.php",
    "$path/diagonalley" => "controllers/diagonalley.php",
    "$path/leaderboard" => "controllers/leaderboard.php",
];

if (array_key_exists($url, $routes)) {
    echo require $routes[$url];
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>
