<?php
    class HomeController
    {
        private $db;
        public function __construct($db)
        {
            $this->db = $db;
        }
        public function getHome()
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }
            $header = 'Home';
            return require 'views/home.view.php';
        }
    }