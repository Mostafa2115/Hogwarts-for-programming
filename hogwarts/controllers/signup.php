<?php

    class SignupController
    {
        private $db;
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

            $username = trim($_POST["username"]);
            $password = trim($_POST["password"]);

            if (empty($username) || empty($password) ) {
                $_SESSION["error"] = "All fields are required!";
                header("Location: /php/Hogwarts-for-programming/hogwarts/views/signup.view.php");
                exit;
            }


            $stmt = $this->db->prepare("SELECT id FROM students WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION["error"] = "Username already exists!";
                header("Location: /php/Hogwarts-for-programming/hogwarts/views/signup.view.php");
                exit;
            }

            $stmt = $this->db->prepare("INSERT INTO students (name,username,hashedPassword,country_name) VALUES (?,?,?,?)");
            $stmt->execute([$username,$username, password_hash($password, PASSWORD_DEFAULT), 'Egypt']);

            $_SESSION["username"] = $username;
            header("Location: /php/Hogwarts-for-programming/hogwarts/views/login.view.php");
            exit;
        }
    }
?>