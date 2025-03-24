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
        if($_SESSION['role'] === 'student')
        {
            $student = $this->db->query("SELECT * FROM students where username = '{$_SESSION['username']}'")->fetch(PDO::FETCH_OBJ);
            $studentCourses = $this->db->query("SELECT id FROM courses WHERE id NOT IN (SELECT course_id FROM student_courses WHERE student_id = $student->id )")->fetchAll(PDO::FETCH_ASSOC);
            $studentCourses = array_column($studentCourses, 'id');
        }else{
            $professor = $this->db->query("SELECT * FROM professors where username = '{$_SESSION['username']}'")->fetch(PDO::FETCH_OBJ);
        }    
        $courses = $this->db->query('SELECT * FROM courses')->fetchAll(PDO::FETCH_OBJ);
        
        require 'views/courses/showAllcourses.view.php';
    }

    public function showCourse($id)
    {
        if($_SESSION['role'] === 'student')
        {
            echo "You are not allowed to access this page";
            exit;
        }
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
        if($_SESSION['role'] === 'student')
        {
            echo "You are not allowed to access this page";
            exit;
        }
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
        if($_SESSION['role'] === 'student')
        {
            echo "You are not allowed to access this page";
            exit;
        }
        $professor = $this->db->query("SELECT * FROM professors where username = '{$_SESSION['username']}'")->fetch(PDO::FETCH_OBJ);
        $stmt = $this->db->prepare('INSERT INTO courses (course_name, Description , professor_id) VALUES (:name, :description, :professor_id)');
        $stmt->execute([
            'name' => $_POST["name"],
            'description' => $_POST["Description"],
            'professor_id' => $professor->id
        ]);
        header('Location: ../../controllers/courses');

        exit;
    }
    public function updateCourse($id)
    {
        if($_SESSION['role'] === 'student')
        {
            echo "You are not allowed to access this page";
            exit;
        }
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
        if($_SESSION['role'] === 'student')
        {
            echo "You are not allowed to access this page";
            exit;
        }
        $stmt = $this->db->prepare('DELETE FROM courses WHERE id = :id');
        $stmt->execute(['id' => $id]);

        header("Location: ../../../controllers/courses");
        exit;
    }

    public function enrollCourse($id)
    {
        if($_SESSION['role'] !== 'student')
        {
            echo "You are not allowed to access this page";
            exit;
        }
        $student = $this->db->query("SELECT * FROM students where username = '{$_SESSION['username']}'")->fetch(PDO::FETCH_OBJ);
        $stmt = $this->db->prepare('INSERT INTO student_courses (student_id,course_id) VALUES (:student_id,:course_id)');
        $stmt->execute([
            'student_id' => $student->id,
            'course_id' => $id
        ]);
        header("Location: ../../../controllers/courses");
        exit;
    }
}
