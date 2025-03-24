<?php
    class challengeController {
        private $db;
        public $header = 'Challenges';

        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../views/login.view.php");
                exit;
            }
            $this->db = $db;
        }
        public function addForm($course_id)
        {
            require 'views/challenges/add.view.php';
        }

        public function addChallenge($id)
        {
            $stmt = $this->db->prepare('INSERT INTO Challenges (name, course_id, points , challenge_type,start_date,deadline,description) values (:name, :course_id, :points, :challenge_type, :start_date, :deadline, :description)');
            $stmt->execute([
                'name' => $_POST['name'],
                'course_id' => $id,
                'points' => $_POST['points'],
                'challenge_type' => $_POST['challenge_type'],
                'start_date' => $_POST['start_date'],
                'deadline' => $_POST['deadline'],
                'description' => $_POST['description']
            ]);
            header("Location: ../../../controllers/courses/show/$id");
            exit;
        }

    }