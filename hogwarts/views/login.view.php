<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../views/static/login.css"/>
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
      <form class="Login" action="../controllers/login" method="POST">
        <input type="text" name="username" placeholder="Username" />
        <br /><br />
        <input type="password" name="password" placeholder="Password" />
        <br /><br />
        <div class="sub">
          <input type="submit" name="submit" value="Login" />
        </div>
      </form>
      <div class="Login">
        You don't have an account? <a href="../views/signup.view.php">Sign Up</a>
      </div>
  </body>
</html>