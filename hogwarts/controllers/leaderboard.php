<?php

    class LeaderboardController
    {
        private $db;
        public function __construct($db)
        {
            $this->db = $db;
        }
        public function getLeaderboard()
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }
            $header = 'Leaderboard';
            $students = $this->db->query('SELECT * FROM students')->fetchAll(PDO::FETCH_OBJ);
            return require 'views/leaderboard.view.php';
        }
    }