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
        public function getStudentProfile()
        {
            if($_SESSION["role"] !== "student"){
                echo "You are not allowed to view this page!";
                exit;
            }
            // student 
            $stmt = $this->db->prepare("SELECT * FROM Students WHERE username = :username");
            $stmt->execute(['username' => $_SESSION["username"]]);      
            $student = $stmt->fetch(PDO::FETCH_OBJ);
        
            // house
            $stmt = $this->db->prepare(
                "SELECT * FROM Houses WHERE id = :house_id"
            );
            $stmt->execute(['house_id' => $student->house_id]);
            $house = $stmt->fetch(PDO::FETCH_OBJ);
        
            // Wand
            $stmt = $this->db->prepare("SELECT * FROM Wands WHERE id = :wand_id");
            $stmt->execute(['wand_id' => $student->wand_id]);
            $wand = $stmt->fetch(PDO::FETCH_OBJ);
            
            // Student score
            $stmt = $this->db->prepare(
                "SELECT SUM(score) AS total_score FROM Student_Challenge_Attempts WHERE student_id = :student_id"
            );
            $stmt->execute(['student_id' => $student->id]); 
            $attempt = $stmt->fetch(PDO::FETCH_OBJ) ;
            $totalScore = $attempt->total_score ?? 0;

            // challenges
            $stmt = $this->db->prepare(
                "SELECT * FROM Challenges c
                JOIN Student_Courses s ON s.course_id = c.course_id
                WHERE s.student_id = :student_id"
            );
            $stmt->execute(['student_id' => $student->id]); 
            $challenges = $stmt->fetchAll(PDO::FETCH_OBJ);

            // cources
            $stmt = $this->db->prepare(
               "SELECT c.*, p.name AS professor_name 
                FROM Courses c  
                JOIN Student_Courses s ON s.course_id = c.id  
                JOIN Professors p ON c.professor_id = p.id  
                WHERE s.student_id = :student_id;"
                
            );
            $stmt->execute(['student_id' => $student->id]); 
            $courses = $stmt->fetchAll(PDO::FETCH_OBJ);

            //Items

            $stmt = $this->db->prepare('
            SELECT i.*, d.*
            FROM Student_Items i
            JOIN Diagon_Alley d ON i.item_id = d.item_id
            WHERE i.student_id = :student_id
            ');
            $stmt->execute([':student_id' => $student->id]);
            $items = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            
            return require 'views/home.view.php';
        }
        


    }
?>