<?php
    $GLOBALS['header'] = "Login";
    session_start();
    require 'layouts/global.view.php';
?>

<div class="text-white flex flex-col items-center justify-center text-center" >

    <div class="mt-4 fade-in fade-in-delay-1">
        <?php
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
            <p class="text-white text-md mx-4 mb-4">
                Don the Sorting Hat to be placed into your rightful Hogwarts house. 
                <br>The Sorting Hat's decision is final.
            </p>
        </div>

        <!-- Login Form with Fade-in animation -->
        <div class="w-full sm:w-2/5 pt-12 fade-in fade-in-delay-1 bg-transparent bg-opacity-25">
            <form action="../controllers/login" method="POST" class="py-8 opacity-90 bg-transparent rounded-lg shadow-md">
                <input type="text" name="username" placeholder="Username" class="border-2 bg-transparent  p-3 rounded-full w-full mb-4" required>
                <input type="password" name="password" placeholder="Password" class="border-2 bg-transparent p-3 rounded-full w-full mb-4" required>
                <input type="submit" name="submit" value="Login" class="text-white p-3 bg-transparent snitch rounded-full w-full transition-colors duration-300">
            </form>
            <div class="flex gap-4">
        <p>You don't have an account? </p>
        <a class="snitch" href="../views/signup.view.php">Sign up</a>
    </div>
        </div>
    </div>
    </div>
</body>
</html>
