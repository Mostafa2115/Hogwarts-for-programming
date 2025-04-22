<?php
    
    class DashboardController
    {
        private $db;
        
        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../login");
                exit;
            }
            $this->db = $db;
        }
        public function getDashboard()
        {
            if($_SESSION['role'] === 'student')
            {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            $students = $this->db->query('SELECT s.id,s.name,s.country_name,W.wood,W.core,H.house_name FROM students s 
                        join Wands W ON s.wand_id = W.id 
                        join Houses H ON s.house_id = H.id;')->fetchAll(PDO::FETCH_OBJ);

            return require 'views/dashboard.view.php';
        }
    }