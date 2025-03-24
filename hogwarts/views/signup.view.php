<?php
    $GLOBALS['header'] = "Sign Up";
    require 'layouts/global.view.php';
?>

<div class="text-white flex flex-col items-center justify-center text-center" >
    <div class="mt-4 fade-in fade-in-delay-1">
        <?php session_start(); 
        if (!empty($_SESSION['error'])) {
            echo "<p class='text-red-500'>{$_SESSION['error']}</p>"; 
            unset($_SESSION['error']);
        }
        ?>
    </div>
    <p class="text-white text-4xl sm:text-5xl font-bold mb-4 fade-in fade-in-delay-1">
        Discover your Hogwarts House
    </p>
    <div class="container mx-auto px-4 flex flex-wrap items-center justify-between">
    
        <!-- Image Container with Scale-up animation and Floating effect -->
        <div class="text-center w-full sm:w-2/5 fade-in fade-in-delay-1">
            <img src="../public/sorting-hat.png" alt="Sorting Hat" class="mx-auto mt-4 max-h-[300px] object-contain scale-up floating">
            <p class="text-white text-md mx-4 mb-4" >
                Don the Sorting Hat to be placed into your rightful Hogwarts house. 
                <br>The Sorting Hat's decision is final.
            </p>
        </div>

        <!-- Login Form with Fade-in animation -->
        <div class="w-full sm:w-2/5 fade-in fade-in-delay-1 bg-transparent bg-opacity-25">
            <form action="../controllers/signup" method="POST" class="py-8 opacity-90 bg-transparent rounded-lg shadow-md">
            <input type="text" name="name" placeholder="Name"  class="border-2 bg-transparent p-3 rounded-full w-full mb-2" required>
            <br><br>
            <input type="text" name="username" placeholder="Username" class="border-2 bg-transparent  p-3 rounded-full w-full mb-2" required>
            <br><br>
            <input type="password" name="password" placeholder="Password"class="border-2 bg-transparent  p-3 rounded-full w-full mb-2" required>
            <br><br>
            <input type="email" name="email" placeholder="Email" class="border-2 bg-transparent  p-3 rounded-full w-full mb-2" required>
            <br><br>
            <div class="sub">
                <input type="submit" name="submit" value="Register" class="text-white bg-transparent rounded-full w-full snitch transition-colors duration-300">
            </div>
        </form>
            <div class="flex gap-4 snitch">
                <p>Already have an account? </p>
                <a class="" href="../views/login.view.php">Login</a>
            </div>
    </div>
    </div>
</div>
</body>
</html>
