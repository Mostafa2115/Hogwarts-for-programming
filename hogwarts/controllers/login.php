<?php

class LoginController {
    private $db;
    public $header = "Login";

    public function __construct($db) {
        $this->db = $db;
        session_start();
    }

    public function postLogin() {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            http_response_code(405);
            echo "Method Not Allowed";
            return;
        }

        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        if (empty($username) || empty($password)) {
            $_SESSION["error"] = "All fields are required!";
            header("Location: ../views/login.view.php");
            exit;
        }

        $stmt = $this->db->prepare("
            SELECT username, hashedPassword, 'student' AS role FROM students WHERE username = ?
            UNION
            SELECT username, hashedPassword, role FROM professors WHERE username = ?
        ");
        
        $stmt->execute([$username, $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($password, $user["hashedPassword"])) {
            $_SESSION["error"] = "Invalid username or password!";
            header("Location: ../views/login.view.php");
            exit;
        }

        $_SESSION["role"] = $user["role"];
        $_SESSION["username"] = $user["username"];
        
        if($user["role"] === "student") {
            header("Location: ../controllers/home");
        } else {
            header("Location: ../controllers/dashboard");
        }
        exit;
    }
}
?>
