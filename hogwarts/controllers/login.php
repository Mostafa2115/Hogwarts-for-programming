<?php


class LoginController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
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
            header("Location: /php/Hogwarts-for-programming/hogwarts/views/login.view.php");
            exit;
        }

        $stmt = $this->db->prepare("SELECT * FROM students WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["hashedPassword"])) {
            $_SESSION["username"] = $username;
            header("Location: /php/Hogwarts-for-programming/hogwarts/controllers/dashboard");
            exit;
        } else {
            $_SESSION["error"] = "Invalid username or password!";
            header("Location: /php/Hogwarts-for-programming/hogwarts/views/login.view.php");
            exit;
        }
    }
}

?>

