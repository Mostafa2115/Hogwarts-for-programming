<?php

    class SignupController
    {
        private $db;
        public $header = "Signup";
        public function __construct($db)
        {
            $this->db = $db;
        }
        public function postSignup()
        {
            if ($_SERVER["REQUEST_METHOD"] !== "POST") {
                http_response_code(405);
                echo "Method Not Allowed";
                return;
            }
            $name = trim($_POST["name"]);
            $email = trim($_POST["email"]);
            $username = trim($_POST["username"]);
            $password = trim($_POST["password"]);

            if (empty($username) || empty($password) || empty($name) || empty($email)) {
                $_SESSION["error"] = "All fields are required!";
                header("Location: ../views/signup.view.php");
                exit;
            }


            $stmt = $this->db->prepare("SELECT id FROM students WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION["error"] = "Username already exists!";
                header("Location: ../views/signup.view.php");
                exit;
            }

            $stmt = $this->db->prepare("INSERT INTO students (name,username,email,hashedPassword,country_name,wand_id,house_id) VALUES (?,?,?,?,?,?,?)");
            $stmt->execute([$name,$username,$email,password_hash($password, PASSWORD_DEFAULT), 'Egypt',1,1]);

            $_SESSION["username"] = $username;
            header("Location: ../views/login.view.php");
            exit;
        }
    }
?>