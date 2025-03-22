<?php
    class HomeController
    {
        private $db;
        public $header = 'Home';
        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }
            $this->db = $db;
        }
        public function getHome()
        {
        $myStaff = $this->db->query("SELECT * FROM `Student_Items` WHERE student_id = (SELECT id FROM students WHERE name = 'Harry Potter' )" )->fetchALL(PDO::FETCH_OBJ);
            return require 'views/home.view.php';
        }
    }