<head>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'EB Garamond', sans-serif;
            background-color: black;
        }
        .snitch:hover {
            cursor: url("https://img.icons8.com/color/32/snitch.png"), auto;
        }
        .dumbledore:hover {
            cursor: url('https://img.icons8.com/color/32/albus-dumbledore.png'), auto;
        }
    </style>
</head>
<body class="min-h-full">
    <nav class="bg-transparent">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="hidden md:flex justify-between items-center w-full">
                    <div class="">
                        <img src="https://img.icons8.com/color/48/hufflepuff.png" alt="hufflepuff">              
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4 snitch:hover">
                            <?php if ($_SESSION["role"] === "student") { ?>
                                <a href="/" class="snitch rounded-md snitch:hover <?php echo $_SERVER['REQUEST_URI'] === '/' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                            <?php } else { ?>
                                <a href="/professor/home" class="snitch rounded-md snitch:hover <?php echo $_SERVER['REQUEST_URI'] === '/professor/home' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                            <?php } ?>
                            <?php if ($_SESSION["role"] !== "student") { ?>
                                <a href="/dashboard" class="dumbledore rounded-md <?php echo $_SERVER['REQUEST_URI'] === '/dashboard' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#2E2A47] hover:text-white" ?> px-3 py-2 text-sm font-medium">Dashboard</a>
                            <?php } ?>
                            <a href="/courses" class="rounded-md dumbledore <?php echo $_SERVER['REQUEST_URI'] === '/courses' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#2E2A47] hover:bg-opacity-50 hover:text-white" ?> px-3 py-2 text-sm font-medium">Courses</a>
                            <?php if ($_SESSION["role"] === "student") { ?>
                                <a href="/diagonalley" class="rounded-md snitch <?php echo $_SERVER['REQUEST_URI'] === '/diagonalley' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium">Diagon Alley</a>
                            <?php } ?>
                            <a href="/leaderboard" class="rounded-md snitch <?php echo $_SERVER['REQUEST_URI'] === '/leaderboard' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium">Leader Board</a>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <button class="snitch">
                            <a href="/logout" class="snitch rounded-md text-[#d3a840] hover:bg-[#634d17] hover:text-white px-3 py-2 text-sm font-medium">Logout</a>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="-mr-2 flex justify-between items-center w-full md:hidden">
                    <button type="button" class="relative inline-flex items-center justify-center bg-transparent rounded-md p-2 text-[#F9A826] hover:bg-[#634d17] hover:text-[#2E2A47]" aria-controls="mobile-menu" id="mobile-menu-button">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block size-6 stroke-[#d3a840] hover:stroke-black" fill="none" viewBox="0 0 24 24" stroke-width="1.5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                    <div class="ml-auto">
                        <button class="snitch">
                            <a href="/logout" class="snitch rounded-md text-[#d3a840] hover:bg-[#634d17] hover:text-white px-3 py-2 text-sm font-medium">Logout</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3 block rounded-md">
        <?php if ($_SESSION["role"] === "student") { ?>
            <a href="/" class="snitch rounded-md snitch:hover <?php echo $_SERVER['REQUEST_URI'] === '/' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium block" aria-current="page">Home</a>
        <?php } else { ?>
            <a href="/professor/home" class="snitch rounded-md snitch:hover <?php echo $_SERVER['REQUEST_URI'] === '/professor/home' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium block" aria-current="page">Home</a>
        <?php } ?>
        <?php if ($_SESSION["role"] !== "student") { ?>
            <a href="/dashboard" class="dumbledore rounded-md <?php echo $_SERVER['REQUEST_URI'] === '/dashboard' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#2E2A47] hover:text-white" ?> px-3 py-2 text-sm font-medium block">Dashboard</a>
        <?php } ?>
        <a href="/courses" class="rounded-md dumbledore <?php echo $_SERVER['REQUEST_URI'] === '/courses' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#2E2A47] hover:bg-opacity-50 hover:text-white" ?> px-3 py-2 text-sm font-medium block">Courses</a>
        <?php if ($_SESSION["role"] === "student") { ?>
            <a href="/diagonalley" class="rounded-md snitch <?php echo $_SERVER['REQUEST_URI'] === '/diagonalley' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium block">Diagon Alley</a>
        <?php } ?>
        <a href="/leaderboard" class="rounded-md snitch <?php echo $_SERVER['REQUEST_URI'] === '/leaderboard' ? "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium block">Leader Board</a>
    </div>
</div>

    </nav>

    <script>
        // Toggle the mobile menu visibility when the button is clicked
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            if (mobileMenu.style.display === 'none' || mobileMenu.style.display === '') {
                mobileMenu.style.display = 'block';
            } else {
                mobileMenu.style.display = 'none';
            }
        });
    </script>
</body>
