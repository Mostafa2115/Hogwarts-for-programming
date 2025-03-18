<?php

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

$basePath = "/Hogwarts-for-programming/hogwarts"; // Change this to match your project folder
$path = "hogwarts/controllers";

// Get the request URL and remove the base path
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = str_replace($basePath, '', $url);  // Remove base path
$url = rtrim($url, '/');  // Remove trailing slashes

// Define routes
$routes = [
    '/' => "$path/home.php",
    '/courses' => "$path/courses.php",
    '/dashboard' => "$path/dashboard.php",
    '/diagonalley' => "$path/diagonalley.php",
    '/leaderboard' => "$path/leaderboard.php",
];

// Route handling
if (array_key_exists($url, $routes)) {
    require $routes[$url];
} else {
    http_response_code(404);
    echo "404 Not Found";
}
?>
