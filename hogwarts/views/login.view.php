<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="static/login.css">
</head>
<body>
    <h1>Login</h1>
    <div style="text-align: center;">
        <?php session_start(); 
        if (!empty($_SESSION['error'])) {
            echo "<p style='color:red;'>{$_SESSION['error']}</p>"; 
            unset($_SESSION['error']);
        }
        ?>
    </div>
    <div class="Login">
        <form action="/php/Hogwarts-for-programming/hogwarts/controllers/login" method="POST" >
            <input type="text" name="username" placeholder="Username">
            <br><br>
            <input type="password" name="password" placeholder="Password">
            <br><br>
            <div class="sub">
                <input type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
