<body>
<div class="min-h-full">
    <nav class="nav-container">
        <div class="nav-links">
            <?php $path = "/php/Hogwarts-for-programming/hogwarts/controllers" ?>
            <a href="<?php echo $path ?>/home" class="<?php echo $_SERVER['REQUEST_URI'] === $path.'/home' ?  "active" : "" ?>">Home</a>
            <?php if($_SESSION['role'] !== 'student'){?>
                 <a href="<?php echo $path ?>/dashboard" class="<?php echo $_SERVER['REQUEST_URI'] === $path.'/dashboard' ?  "active" : "" ?>">Dashboard</a>
            <?php } ?>
            <a href="<?php echo $path ?>/courses" class="<?php echo $_SERVER['REQUEST_URI'] === $path.'/courses' ?  "active" : "" ?>">Courses</a>
            <a href="<?php echo $path ?>/diagonalley" class="<?php echo $_SERVER['REQUEST_URI'] === $path.'/diagonalley' ?  "active" : "" ?>">Diagon Alley</a>
            <a href="<?php echo $path ?>/leaderboard" class="<?php echo $_SERVER['REQUEST_URI'] === $path.'/leaderboard' ?  "active" : "" ?>">Leader Board</a>
        </div>
        <div class="mobile-menu">
            <button onclick="toggleMenu()">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </nav>
    <div id="mobileNav" class="mobile-menu-content" style="display: none;">
        <a href="<?php echo $path ?>/home">Home</a>
        <a href="<?php echo $path ?>/dashboard">Dashboard</a>
        <a href="<?php echo $path ?>/courses">Courses</a>
        <a href="<?php echo $path ?>/diagonalley">Diagon Alley</a>
        <a href="<?php echo $path ?>/leaderboard">Leader Board</a>
    </div>
</div>
<main class="main-container">
    <div class="content-wrapper">
        <script>
            function toggleMenu() {
                var menu = document.getElementById('mobileNav');
                menu.style.display = menu.style.display === "block" ? "none" : "block";
            }
        </script>
