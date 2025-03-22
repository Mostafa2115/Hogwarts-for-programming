<?php

return [
    "get" => [
        "$path/home" => [HomeController::class, "getHome"],
        "$path/courses" => [CoursesController::class, "getCourses"],
        "$path/dashboard" => [DashboardController::class, "getDashboard"],
        "$path/diagonalley" => [DiagonAlleyController::class, "getDiagonAlley"],
        "$path/leaderboard" => [LeaderboardController::class, "getLeaderboard"],
        "$path/courses/{id}" => [CoursesController::class, "getCourseById"],
    ],
    "post" => [
        "$path/signup" => [SignupController::class, "postSignup"],
        "$path/login" => [LoginController::class, "postLogin"],
        "$path/logout" => [LoginController::class, "postLogout"],
        "$path/courses" => [CoursesController::class, "addCourse"],
        "$path/diagonalley" => [DiagonAlleyController::class, "buyItem"],
    ],
    "put" => [
        "$path/courses/edit/{id}" => [CoursesController::class, "updateCourse"],
    ],
    "delete" => [
        "$path/courses/delete/{id}" => [CoursesController::class, "deleteCourse"],
    ],
];

?>