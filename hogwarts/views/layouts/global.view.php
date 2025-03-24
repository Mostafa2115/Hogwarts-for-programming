<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $GLOBALS['header'] ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
        min-height: 100vh;
        }
        * {
        cursor: url('https://img.icons8.com/color/32/snitch.png') 2 2, auto;
        pointer-events: auto; 
        }

        @font-face {
        font-family: 'HarryP';
        src: url('../public/fonts.php') format('truetype');    font-weight: normal;
        font-style: normal;
    
        }

        .harry-font {
            font-family: 'HarryP', sans-serif;
            letter-spacing: 1.5px; 
            line-height: 1.5;
        }
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
        .snitch:hover {
             cursor: url('https://img.icons8.com/color/32/snitch.png'), auto;
        }
    </style>
</head>
<body class = "harry-font snitch h-auto" style="background-image: url('../public/login\ backgroundd.png')">
   
