<?php

class CoursesController
{
    private $db;
    public $header = 'Courses';

    public function __construct($db)
    {
        session_start();
        if (!isset($_SESSION["username"])) {
            header("Location: ../views/login.view.php");
            exit;
        }
        $this->db = $db;
    }

    public function getCourses()
    {
        $courses = $this->db->query('SELECT * FROM courses')->fetchAll(PDO::FETCH_OBJ);
        require 'views/courses.view.php';
    }

    public function getCourseById($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM courses WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $course = $stmt->fetch(PDO::FETCH_OBJ);
        
        if (!$course) {
            header("Location: ../views/courses.view.php");
            exit;
        }

        require '../views/course.view.php';
    }

    public function addCourse()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["name"], $_POST["Description"])) {
            $stmt = $this->db->prepare('INSERT INTO courses (course_name, Description) VALUES (:name, :description)');
            $stmt->execute([
                'name' => $_POST["name"],
                'description' => $_POST["Description"]
            ]);
            header('Location: ../controllers/courses');
            exit;
        }
        
    }

    public function editCourse($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM courses WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $course = $stmt->fetch(PDO::FETCH_OBJ);

        if (!$course) {
            header("Location: ../views/courses.view.php");
            exit;
        }

        require '../views/editcourse.view.php';
    }

    public function updateCourse($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["name"], $_POST["Description"])) {
            $stmt = $this->db->prepare('UPDATE courses SET course_name = :name, Description = :description WHERE id = :id');
            $stmt->execute([
                'id' => $id,
                'name' => $_POST["name"],
                'description' => $_POST["Description"]
            ]);
        }
        header("Location: ../views/courses.view.php");
        exit;
    }

    public function deleteCourse($id)
    {
        $stmt = $this->db->prepare('DELETE FROM courses WHERE id = :id');
        $stmt->execute(['id' => $id]);

        header("Location: ../views/courses.view.php");
        exit;
    }
}
