<?php

    class CoursesController
    {
        private $db;

        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../login");
                exit;
            }
            $this->db = $db;
        }

        public function addForm()
        {
            if($_SESSION['role'] === 'student')
            {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            require 'views/courses/add.view.php';
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
            $stmt = $this->db->prepare('SELECT * FROM courses WHERE id = :id');
            $stmt->execute(['id' => $id]);
            $course = $stmt->fetch(PDO::FETCH_OBJ);

            if (!$course) {
                http_response_code(404);
                require 'views/errors/404.view.php';
                exit;
            }
            if($_SESSION['role'] === 'student')
            {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }

            require 'views/courses/show.view.php';
        }

        public function editCourse($id)
        {
            if($_SESSION['role'] === 'student')
            {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            $stmt = $this->db->prepare('SELECT * FROM courses WHERE id = :id');
            $stmt->execute(['id' => $id]);
            $course = $stmt->fetch(PDO::FETCH_OBJ);
            
            if (!$course) {
                http_response_code(404);
                require 'views/errors/404.view.php';
                exit;
            }
            

            require 'views/courses/edit.view.php';
        }

        public function addCourse()
        {
            if($_SESSION['role'] === 'student')
            {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            $professor = $this->db->query("SELECT * FROM professors where username = '{$_SESSION['username']}'")->fetch(PDO::FETCH_OBJ);
            $stmt = $this->db->prepare('INSERT INTO courses (course_name, Description , professor_id) VALUES (:name, :description, :professor_id)');
            $stmt->execute([
                'name' => $_POST["name"],
                'description' => $_POST["Description"],
                'professor_id' => $professor->id
            ]);
            header('Location: ../../courses');

            exit;
        }
        public function updateCourse($id)
        {
            if($_SESSION['role'] === 'student')
            {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            $stmt = $this->db->prepare('UPDATE courses SET course_name = :name, Description = :description WHERE id = :id');
            $stmt->execute([
                'id' => $id,
                'name' => $_POST["name"],
                'description' => $_POST["description"]
            ]);
            header("Location: ../../../courses");
            exit;
        }

        public function deleteCourse($id)
        {
            if($_SESSION['role'] === 'student')
            {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            $stmt = $this->db->prepare('DELETE FROM courses WHERE id = :id');
            $stmt->execute(['id' => $id]);

            header("Location: ../../../courses");
            exit;
        }

        public function enrollCourse($id)
        {
            if($_SESSION['role'] !== 'student')
            {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            $student = $this->db->query("SELECT * FROM students where username = '{$_SESSION['username']}'")->fetch(PDO::FETCH_OBJ);
            $stmt = $this->db->prepare('INSERT INTO student_courses (student_id,course_id) VALUES (:student_id,:course_id)');
            $stmt->execute([
                'student_id' => $student->id,
                'course_id' => $id
            ]);
            header("Location: ../../../courses");
            exit;
        }
    }
