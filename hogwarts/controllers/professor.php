<?php
class ProfessorController
{
    protected $db;
    public $header = 'Professors';
    public function __construct($db)
    {
        if (!isset($_SESSION["username"])) {
            header("Location: ../../views/login.view.php");
            exit;
        }
        $this->db = $db;
    }
    public function getProfessorProfile(){
        if($_SESSION["role"] === "student"){
            echo "You are not allowed to view this page!";
            exit;
        }
        $GLOBALS['header'] = 'Home';
        require "views/homeProf.view.php";
        exit;
    }
    public function addProfessor()
    {
        if ($_SESSION["role"] !== "admin") {
            echo "You are not allowed to view this page!";
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
            header("Location: ../views/professors/add.view.php");
            exit;
        }
        $stmt = $this->db->prepare("SELECT id FROM professors WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $_SESSION["error"] = "Username already exists!";
            require "../hogwarts/views/professors/add.view.php";
            exit;
        }

        $stmt = $this->db->prepare("INSERT INTO professors (name,username,email,hashedPassword,role) VALUES (?,?,?,?,?)");
        $stmt->execute([$name, $username, $email, password_hash($password, PASSWORD_DEFAULT), $role]);
        $_SESSION["username"] = $username;
        header("Location: ../controllers/professor/home");
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
