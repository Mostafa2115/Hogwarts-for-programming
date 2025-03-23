<head>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'EB Garamond', sans-serif;
            background-color: black;
        }
        .nav-link:hover {
            cursor: url("https://img.icons8.com/color/48/snitch.png"),auto;
        }
        .voldemort:hover {
        cursor: url('https://img.icons8.com/color/48/lord-voldemort.png'), auto;
  }
    </style>
</head>
<body class="min-h-full">
    <nav class="bg-transparent">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="">
                    <img src="https://img.icons8.com/color/48/hufflepuff.png" alt="hufflepuff">              
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4 nav-link:hover " >
                            <?php $path = "/php/Hogwarts-for-programming/hogwarts/controllers"; ?>
                            <a href="<?php echo $path ?>/home" class="nav-link rounded-md nav-link:hover <?php echo $_SERVER['REQUEST_URI'] === $path.'/' ?  "bg-[#F9A826] text-white" : "text-[#d3a840]" ?> px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                            <a href="<?php echo $path ?>/dashboard"class="voldemort rounded-md <?php echo $_SERVER['REQUEST_URI'] === $path.'/dashboard' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#2E2A47] hover:text-white" ?> px-3 py-2 text-sm font-medium">Dashboard</a>
                            <a href="<?php echo $path ?>/courses" class="rounded-md nav-link <?php echo $_SERVER['REQUEST_URI'] === $path.'/courses' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:bg-opacity-50 hover:text-white" ?> px-3 py-2 text-sm font-medium">Courses</a>
                            <a href="<?php echo $path ?>/diagonalley" class="rounded-md  nav-link <?php echo $_SERVER['REQUEST_URI'] === $path.'/diagonalley' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium">Diagon Alley</a>
                            <a href="<?php echo $path ?>/leaderboard" class="rounded-md nav-link <?php echo $_SERVER['REQUEST_URI'] === $path.'/leaderboard' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium">Leader Board</a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-[#2E2A47] p-2 text-[#F9A826] hover:bg-[#F9A826] hover:text-[#2E2A47] focus:ring-2 focus:ring-[#F9A826] focus:ring-offset-2 focus:ring-offset-[#2E2A47]" aria-controls="mobile-menu">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <a href="<?php echo $path ?>/" class="block rounded-md bg-[#F9A826] text-white px-3 py-2 text-base font-medium" aria-current="page">Home</a>
                <a href="<?php echo $path ?>/dashboard" class="block rounded-md text-[#F9A826] hover:bg-[#2E2A47] hover:text-white px-3 py-2 text-base font-medium">Dashboard</a>
                <a href="<?php echo $path ?>/courses" class="block rounded-md text-[#F9A826] hover:bg-[ #2E2A47] hover:text-white px-3 py-2 text-base font-medium">Courses</a>
                <a href="<?php echo $path ?>/diagonalley" class="block rounded-md text-[#F9A826] hover:bg-[#2E2A47] hover:text-white px-3 py-2 text-base font-medium">Diagon Alley</a>
                <a href="<?php echo $path ?>/leaderboard" class="block rounded-md text-[#F9A826] hover:bg-[#2E2A47] hover:text-white px-3 py-2 text-base font-medium">Leader Board</a>
            </div>
        </div>
    </nav>
    <?php require 'banner.view.php'; ?>
</div>
</body>
