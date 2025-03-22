<?php
    
    class DiagonAlleyController
    {
        private $db;
        public $header = 'Diagon Alley';
        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }
            $this->db = $db;
        }
        public function getDiagonAlley()
        {
            $items = $this->db->query('SELECT * FROM diagon_alley')->fetchAll(PDO::FETCH_OBJ);
            return require 'views/diagonalley.view.php';
        }
        public function addDiagonAlley($id)
        {
            $items = $this->db->query('INSERT ')->fetch(PDO::FETCH_OBJ);
            require 'views/diagonalley.view.php';
        }
    }