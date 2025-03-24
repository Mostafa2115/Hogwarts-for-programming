<?php
    
    class DiagonAlleyController
    {
        private $db;
        public $header = 'Diagon Alley';
        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../controllers/login");
                exit;
            }
            $this->db = $db;
        }
        public function getDiagonAlley()
        {
            if($_SESSION['role'] !== 'student')
            {
                echo "You are not allowed to access this page";
                exit;
            }
            $items = $this->db->query('SELECT * FROM diagon_alley')->fetchAll(PDO::FETCH_OBJ);
            return require 'views/diagonalley.view.php';
        }
        
        public function buyItems()
        {
            if($_SESSION['role'] !== 'student')
            {
                echo "You are not allowed to access this page";
                exit;
            }
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["item_id"]) && isset($_SESSION["username"])) {
            $item_id = $_POST["item_id"];
            $username = $_SESSION["username"];

            $stmt = $this->db->prepare('SELECT id FROM Students WHERE username = :username');
            $stmt->execute([':username' => $username]);
            $student = $stmt->fetch(PDO::FETCH_ASSOC);


            $student_id = $student['id'];
            $stmt = $this->db->prepare('
                SELECT quantity 
                FROM Student_Items 
                WHERE item_id = :item_id AND student_id = :student_id
            ');
            $stmt->execute([
                ':item_id' => $item_id,
                ':student_id' => $student_id
            ]);

            $item = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($item) {
                $stmt = $this->db->prepare('
                    UPDATE Student_Items 
                    SET quantity = quantity + 1 
                    WHERE item_id = :item_id AND student_id = :student_id
                ');
            } else {
                $stmt = $this->db->prepare('
                    INSERT INTO Student_Items (item_id, student_id, quantity) 
                    VALUES (:item_id, :student_id, 1)
            ');
            }

            $stmt->execute([
                ':item_id' => $item_id,
                ':student_id' => $student_id
            ]);

            header('Location: ../controllers/diagonalley');
            }
        }
    }