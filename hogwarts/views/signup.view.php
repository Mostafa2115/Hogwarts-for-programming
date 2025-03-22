<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <style>
        /* Fade-in animation */
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Scale-up animation for Sorting Hat Image */
        @keyframes scaleUp {
            0% { transform: scale(0.9); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* Apply fade-in animation for container */
        .fade-in {
            animation: fadeIn 1.5s ease-out forwards;
        }

        /* Apply scale-up animation for Sorting Hat */
        .scale-up {
            animation: scaleUp 2s ease-out forwards;
        }

        /* Apply a slight delay for each element */
        .fade-in-delay-1 {
            animation-delay: 0.3s;
        }

        .fade-in-delay-2 {
            animation-delay: 0.6s;
        }

        /* Floating animation */
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

    </style>
</head>
<body class="text-white flex flex-col items-center justify-center text-center" style="font-family: 'EB Garamond', sans-serif; background-image: url(./public/login\ backgroundd.png);">
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
            <img src="./public/sorting-hat.png" alt="Sorting Hat" class="mx-auto mt-4 max-h-[300px] object-contain scale-up floating">
            <p class="text-white text-sm mx-4 mb-4" style="font-family: 'EB Garamond', sans-serif;">
                Don the Sorting Hat to be placed into your rightful Hogwarts house. 
                <br>The Sorting Hat's decision is final.
            </p>
        </div>

        <!-- Login Form with Fade-in animation -->
        <div class="w-full sm:w-2/5 fade-in fade-in-delay-1 bg-transparent bg-opacity-25">
            <form action="../controllers/signup" method="POST" class="py-8 opacity-90 bg-transparent rounded-lg shadow-md">
            <input type="text" name="name" placeholder="Name"  class="border-2 bg-transparent border-[#F1C232] p-3 rounded-full w-full mb-2" required>
            <br><br>
            <input type="text" name="username" placeholder="Username" class="border-2 bg-transparent border-[#F1C232] p-3 rounded-full w-full mb-2" required>
            <br><br>
            <input type="password" name="password" placeholder="Password"class="border-2 bg-transparent border-[#F1C232] p-3 rounded-full w-full mb-2" required>
            <br><br>
            <input type="email" name="email" placeholder="Email" class="border-2 bg-transparent border-[#F1C232] p-3 rounded-full w-full mb-2" required>
            <br><br>
            <div class="sub">
                <input type="submit" name="submit" value="Register" class="text-white bg-transparent rounded-full w-full cursor-pointer transition-colors duration-300">
            </div>
        </form>
    <div class="flex gap-4">
        <p>Already have an account? </p>
        <a href="../views/login.view.php">Login</a>
    </div>
    
        </div>
    </div>
</body>
</html>
