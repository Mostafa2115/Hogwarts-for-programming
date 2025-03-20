<?php

return [
    "get" => [
        "$path/home" => [HomeController::class, "getHome"],
        "$path/courses" => [CoursesController::class, "getCourses"],
        "$path/dashboard" => [DashboardController::class, "getDashboard"],
        "$path/diagonalley" => [DiagonAlleyController::class, "getDiagonAlley"],
        "$path/leaderboard" => [LeaderboardController::class, "getLeaderboard"],
    ],
    "post" => [
        "$path/signup" => [SignupController::class, "postSignup"],
        "$path/login" => [LoginController::class, "postLogin"],
        "$path/logout" => "controllers/logout.php",
        "$path/courses" => "controllers/addCourse.php",
    ],
    "put" => [
        "$path/courses" => "controllers/updateCourse.php",
    ],
    "delete" => [
        "$path/courses" => "controllers/deleteCourse.php",
    ],
];

?>