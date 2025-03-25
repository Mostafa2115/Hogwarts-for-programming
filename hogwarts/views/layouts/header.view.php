<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $header ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'HarryP';
            src: url('/public/fonts.php') format('truetype');    font-weight: normal;
            font-style: normal;
        }

        body {
            cursor: url('https://img.icons8.com/color/32/snitch.png') 2 2, auto;
            background-image: url(http://www.transparenttextures.com/patterns/brick-wall-dark.png);
            background-color: #63666A;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .harry-font {
            font-family: 'HarryP', sans-serif;
            letter-spacing: 1.5px; 
            line-height: 1.5;
        }
        .snitch:hover {
             cursor: url('https://img.icons8.com/color/32/snitch.png'), auto;
        }
    </style>
</head>
<body class = "harry-font">
   
