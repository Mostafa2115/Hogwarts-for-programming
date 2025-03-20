<?php
    
    class DiagonAlleyController
    {
        private $db;
        
        public function __construct($db)
        {
            $this->db = $db;
        }
        public function getDiagonAlley()
        {
            $header = 'Diagon Alley';
            $items = $this->db->query('SELECT * FROM diagon_alley')->fetchAll(PDO::FETCH_OBJ);
            return require 'views/diagonalley.view.php';
        }
        public function addDiagonAlley($id)
        {
            $diagonAlley = $this->db->query('INSERT ')->fetch(PDO::FETCH_OBJ);
            require 'views/diagonalley.view.php';
        }
    }