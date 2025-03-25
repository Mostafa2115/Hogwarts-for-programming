<?php

    class SignupController
    {
        private $db;

        public function __construct($db)
        {
            $this->db = $db;
        }
        public function getSignup()
        {
            require "views/signup.view.php";
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
                header("Location: ../signup");
                exit;
            }


            $stmt = $this->db->prepare("SELECT id FROM students WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION["error"] = "Username already exists!";
                header("Location: ../signup");
                exit;
            }

            $stmt = $this->db->prepare("INSERT INTO students (name,username,email,hashedPassword,country_name,wand_id,house_id) VALUES (?,?,?,?,?,?,?)");
            srand((double)microtime()*1000000);
            $wand_id = rand(1,4);
            $house_id = rand(1,4);
            $stmt->execute([$name,$username,$email,password_hash($password, PASSWORD_DEFAULT), 'Egypt',$wand_id,$house_id]);

            $_SESSION["username"] = $username;
            header("Location: ../login");
            exit;
        }
    }
?>