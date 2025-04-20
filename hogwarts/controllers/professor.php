<?php

    class ProfessorController
    {
        protected $db;

        public function __construct($db)
        {
            if (!isset($_SESSION["username"])) {
                header("Location: ../../login");
                exit;
            }
            $this->db = $db;
        }
        public function addForm()
        {
            if($_SESSION["role"] !== "admin"){
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            require 'views/professors/add.view.php';
        }
        public function getProfessorProfile(){
            if($_SESSION["role"] === "student"){
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            require "views/professors/home.view.php";
            exit;
        }
        public function addProfessor()
        {
            if ($_SESSION["role"] !== "admin") {
                http_response_code(403);
                require 'views/errors/403.php';
                exit;
            }
            if ($_SERVER["REQUEST_METHOD"] !== "POST") {
                http_response_code(405);
                echo "Method Not Allowed";
                return;
            }
            $email = trim($_POST["email"]);
            $username = trim($_POST["username"]);
            $name = trim($_POST["name"]);
            $password = trim($_POST["password"]);
            $role = trim($_POST["role"]);
            if (empty($email) || empty($username) || empty($password) || empty($role)) {
                $_SESSION["error"] = "All fields are required!";
                header("Location: ../professor/add");
                exit;
            }
            $stmt = $this->db->prepare("SELECT id FROM professors WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                $_SESSION["error"] = "Username already exists!";
                header("Location: ../professor/add");
                exit;
            }

            $stmt = $this->db->prepare("INSERT INTO professors (name,username,email,hashedPassword,role) VALUES (?,?,?,?,?)");
            $stmt->execute([$name, $username, $email, password_hash($password, PASSWORD_DEFAULT), $role]);
            $_SESSION["username"] = $username;
            header("Location: ../dashboard");
            exit;
        }
        public function updateCourseByAdmin($id)
        {
            if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "student") {
                header("Location: ../courses/edit/$id");
                exit;
            } else {
                http_response_code(403);
                echo "Forbidden";
            }
        }
    }
