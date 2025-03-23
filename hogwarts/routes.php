<?php

return [
    "get" => [
        "$path/home" => [HomeController::class, "getStudentProfile"],
        "$path/courses" => [CoursesController::class, "getCourses"],
        "$path/dashboard" => [DashboardController::class, "getDashboard"],
        "$path/diagonalley" => [DiagonAlleyController::class, "getDiagonAlley"],
        "$path/leaderboard" => [LeaderboardController::class, "getLeaderboard"],
        "$path/courses/edit/" => [CoursesController::class, "getCourseById"],
    ],
    "post" => [
        "$path/signup" => [SignupController::class, "postSignup"],
        "$path/login" => [LoginController::class, "postLogin"],
        "$path/logout" => [LoginController::class, "postLogout"],
        "$path/courses" => [CoursesController::class, "addCourse"],
        "$path/diagonalley" => [DiagonAlleyController::class, "buyItems"],
    ],
    "put" => [
        "$path/courses/edit" => [CoursesController::class, "editCourse"],
    ],
    "delete" => [
        "$path/courses" => [CoursesController::class, "deleteCourse"],
    ],
];

?>