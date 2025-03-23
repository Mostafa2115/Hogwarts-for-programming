<?php

class CoursesController
{
    private $db;
    public $header = 'Courses';

    public function __construct($db)
    {
        if (!isset($_SESSION["username"])) {
            header("Location: ../views/login.view.php");
            exit;
        }
        $this->db = $db;
    }

    public function getCourses()
    {
        $courses = $this->db->query('SELECT * FROM courses')->fetchAll(PDO::FETCH_OBJ);
        require 'views/courses/showAllcourses.view.php';
    }

    public function showCourse($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM courses WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $course = $stmt->fetch(PDO::FETCH_OBJ);

        if (!$course) {
            echo "NOT FOUND";
            exit;
        }

        require 'views/courses/show.view.php';
    }

    public function editCourse($id)
    {
        
        $stmt = $this->db->prepare('SELECT * FROM courses WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $course = $stmt->fetch(PDO::FETCH_OBJ);
        
        if (!$course) {
            echo "NOT FOUND";
            exit;
        }
        

        require 'views/courses/edit.view.php';
    }

    public function addCourse()
    {
        if($_SESSION['role'] === 'student'){
            echo "You are not authorized to access this page";
            exit;
        }
        $stmt = $this->db->prepare('INSERT INTO courses (course_name, Description) VALUES (:name, :description)');
        $stmt->execute([
            'name' => $_POST["name"],
            'description' => $_POST["Description"]
        ]);
        header('Location: ../../controllers/courses');
        exit;
    }
    public function updateCourse($id)
    {
        
        $stmt = $this->db->prepare('UPDATE courses SET course_name = :name, Description = :description WHERE id = :id');
        $stmt->execute([
            'id' => $id,
            'name' => $_POST["name"],
            'description' => $_POST["Description"]
        ]);
        header("Location: ../../../controllers/courses");
        exit;
    }

    public function deleteCourse($id)
    {
        
        $stmt = $this->db->prepare('DELETE FROM courses WHERE id = :id');
        $stmt->execute(['id' => $id]);

        header("Location: ../../../controllers/courses");
        exit;
    }
}
