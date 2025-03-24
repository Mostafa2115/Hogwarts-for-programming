<?php

    class LeaderboardController
    {
        private $db;
        public $header = 'Leaderboard';
        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../controllers/login");
                exit;
            }
            $this->db = $db;
        }
        public function getLeaderboard()
        {
            $stmt = $this->db->prepare("SELECT * FROM Students WHERE username = :username");
            $stmt->execute(['username' => $_SESSION["username"]]);      
            $student = $stmt->fetch(PDO::FETCH_OBJ);
        
            $stmt = $this->db->prepare(
                "SELECT h.*, COALESCE(SUM(hp.points_change), 0) AS score 
                 FROM Houses h  
                 LEFT JOIN House_Points_Log hp ON hp.house_id = h.id  
                 GROUP BY h.id
                 ORDER BY score DESC;"
            );            
        
            $stmt->execute(); 
            $houses = $stmt->fetchAll(PDO::FETCH_OBJ);
        
            return require 'views/leaderboard.view.php';
        }
    }