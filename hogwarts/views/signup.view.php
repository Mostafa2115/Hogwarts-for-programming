<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/Registration.css">
</head>
<body>
    <h1>Registration</h1>
    <div style="text-align: center;">
        <?php session_start();
        if (!empty($_SESSION['error'])) {
            echo "<p style='color:red;'>{$_SESSION['error']}</p>"; 
            unset($_SESSION['error']);
        }
        ?>
    </div>
    <div class="Register">
        <form action="/php/Hogwarts-for-programming/hogwarts/controllers/signup" method="POST">
            <input type="text" name="name" placeholder="Name">
            <br><br>
            <input type="text" name="username" placeholder="Username">
            <br><br>
            <input type="password" name="password" placeholder="Password">
            <br><br>
            <input type="email" name="email" placeholder="Email">
            <br><br>
            <div class="sub">
                <input type="submit" name="submit" value="Register">
            </div>
        </form>
    </div>
    <div class="Login">
        Already have an account? <a href="../views/login.view.php">Login</a>
    </div>
</body>
</html>
