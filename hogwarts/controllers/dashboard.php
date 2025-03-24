<?php
    
    class DashboardController
    {
        private $db;
        public $header = 'Dashboard';
        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }
            $this->db = $db;
        }
        public function getDashboard()
        {
            if($_SESSION['role'] === 'student')
            {
                echo "You are not allowed to access this page";
                exit;
            }
            $students = $this->db->query('SELECT s.id,s.name,s.country_name,W.wood,W.core,H.house_name FROM students s 
                        join Wands W ON s.wand_id = W.id 
                        join Houses H ON s.house_id = H.id;')->fetchAll(PDO::FETCH_OBJ);

            return require 'views/dashboard.view.php';
        }
    }