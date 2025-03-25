<?php

return [
    "get" => [
        "/" => [HomeController::class, "getStudentProfile"],
        "/courses" => [CoursesController::class, "getCourses"],
        "/dashboard" => [DashboardController::class, "getDashboard"],
        "/diagonalley" => [DiagonAlleyController::class, "getDiagonAlley"],
        "/leaderboard" => [LeaderboardController::class, "getLeaderboard"],
        "/courses/edit/{id}" => [CoursesController::class, "editCourse"],
        "/courses" => [CoursesController::class, "getCourses"],
        "/courses/show/{id}" => [CoursesController::class, "showCourse"],
        "/professor/home" => [ProfessorController::class, "getProfessorProfile"],
        "/courses/enroll/{id}" => [CoursesController::class, "enrollCourse"],
        "/login" => [LoginController::class, "getLogin"],
        "/signup" => [SignupController::class, "getSignup"],
        "/courses/add" => [CoursesController::class, "addForm"],
        "/challenges/add/{course_id}" => [ChallengeController::class, "addForm"],
        "/professor/add" => [ProfessorController::class, "addForm"],

    ],
    "post" => [
        "/signup" => [SignupController::class, "postSignup"],
        "/login" => [LoginController::class, "postLogin"],
        "/logout" => [LoginController::class, "postLogout"],
        "/courses/add" => [CoursesController::class, "addCourse"],
        "/diagonalley" => [DiagonAlleyController::class, "buyItems"],
        "/professor" => [ProfessorController::class, "addProfessor"],
        "/challenges/add/{course_id}" => [ChallengeController::class, "addChallenge"],
    ],
    "put" => [
        "/courses/edit/{id}" => [CoursesController::class, "updateCourse"],
    ],
    "delete" => [
        "/courses/delete/{id}" => [CoursesController::class, "deleteCourse"],
    ],
];

?>