<?php

return [
    "get" => [
        "$path/home" => [HomeController::class, "getStudentProfile"],
        "$path/courses" => [CoursesController::class, "getCourses"],
        "$path/dashboard" => [DashboardController::class, "getDashboard"],
        "$path/diagonalley" => [DiagonAlleyController::class, "getDiagonAlley"],
        "$path/leaderboard" => [LeaderboardController::class, "getLeaderboard"],
        "$path/courses/edit/{id}" => [CoursesController::class, "editCourse"],
        "$path/courses/" => [CoursesController::class, "showAllCourses"],
        "$path/courses/show/{id}" => [CoursesController::class, "showCourse"],
        "$path/professor/home" => [ProfessorController::class, "getProfessorProfile"],
        "$path/courses/enroll/{id}" => [CoursesController::class, "enrollCourse"],
        "$path/login" => [LoginController::class, "getLogin"],
        "$path/signup" => [SignupController::class, "getSignup"],
        "$path/courses/add" => [CoursesController::class, "addForm"],
        "$path/challenges/add/{course_id}" => [ChallengeController::class, "addForm"],

    ],
    "post" => [
        "$path/signup" => [SignupController::class, "postSignup"],
        "$path/login" => [LoginController::class, "postLogin"],
        "$path/logout" => [LoginController::class, "postLogout"],
        "$path/courses/add" => [CoursesController::class, "addCourse"],
        "$path/diagonalley" => [DiagonAlleyController::class, "buyItems"],
        "$path/professor" => [ProfessorController::class, "addProfessor"],
        "$path/challenges/add/{course_id}" => [ChallengeController::class, "addChallenge"],
    ],
    "put" => [
        "$path/courses/edit/{id}" => [CoursesController::class, "updateCourse"],
    ],
    "delete" => [
        "$path/courses/delete/{id}" => [CoursesController::class, "deleteCourse"],
    ],
];

?>