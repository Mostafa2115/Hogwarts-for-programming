<?php

    class LeaderboardController
    {
        private $db;
        public $header = 'Leaderboard';
        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }
            $this->db = $db;
        }
        public function getLeaderboard()
        {
            $students = $this->db->query('SELECT * FROM students')->fetchAll(PDO::FETCH_OBJ);
            return require 'views/leaderboard.view.php';
        }
    }