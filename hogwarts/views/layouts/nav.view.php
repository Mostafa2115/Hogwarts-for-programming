
<head>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'EB Garamond', sans-serif;
            background-color: black;
        }
        .snitch:hover {
            cursor: url("https://img.icons8.com/color/32/snitch.png"),auto;
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
                <div class="flex items-center">
                    <div class="">
                    <img src="https://img.icons8.com/color/48/hufflepuff.png" alt="hufflepuff">              
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4 snitch:hover " >
                        <?php $path = "/php/Hogwarts-for-programming/hogwarts/controllers"; ?>
                        <?php if ($_SESSION["role"] === "student") {?>
                            <a href="<?php echo $path ?>/home" class="snitch rounded-md snitch:hover <?php echo $_SERVER['REQUEST_URI'] === $path.'/home' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                        <?php } else { ?>
                            <a href="<?php echo $path ?>/professor/home" class="snitch rounded-md snitch:hover <?php echo $_SERVER['REQUEST_URI'] === $path.'/homeProf' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                        <?php } ?>
                        <?php if ($_SESSION["role"] !== "student") {?>
                            <a href="<?php echo $path ?>/dashboard"class="dumbledore rounded-md <?php echo $_SERVER['REQUEST_URI'] === $path.'/dashboard' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#2E2A47] hover:text-white" ?> px-3 py-2 text-sm font-medium">Dashboard</a>
                        <?php } ?>
                            <a href="<?php echo $path ?>/courses" class="rounded-md dumbledore <?php echo $_SERVER['REQUEST_URI'] === $path.'/courses' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#2E2A47] hover:bg-opacity-50 hover:text-white" ?> px-3 py-2 text-sm font-medium">Courses</a>
                        <?php if ($_SESSION["role"] === "student") {?>
                            <a href="<?php echo $path ?>/diagonalley" class="rounded-md  snitch <?php echo $_SERVER['REQUEST_URI'] === $path.'/diagonalley' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium">Diagon Alley</a>
                        <?php } ?>
                            <a href="<?php echo $path ?>/leaderboard" class="rounded-md snitch <?php echo $_SERVER['REQUEST_URI'] === $path.'/leaderboard' ?  "bg-[#F9A826] text-white" : "text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50" ?> px-3 py-2 text-sm font-medium">Leader Board</a>
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
            <?php if ($_SESSION["role"] === "student") {?>
                <a href="<?php echo $path ?>/home" class="block rounded-md bg-[#F9A826] text-white px-3 py-2 text-base font-medium" aria-current="page">Home</a>
            <?php } else { ?>
                <a href="<?php echo $path ?>/professor/home" class="block rounded-md bg-[#F9A826] text-white px-3 py-2 text-base font-medium" aria-current="page">Home</a>
            <?php } ?>
            <?php if ($_SESSION["role"] !== "student") {?>
                <a href="<?php echo $path ?>/dashboard" class="block rounded-md text-[#F9A826] hover:bg-[#2E2A47] hover:text-white px-3 py-2 text-base font-medium">Dashboard</a>
            <?php } ?>
                <a href="<?php echo $path ?>/courses" class="block rounded-md text-[#F9A826] hover:bg-[ #2E2A47] hover:text-white px-3 py-2 text-base font-medium">Courses</a>
            <?php if ($_SESSION["role"] === "student") {?>
                <a href="<?php echo $path ?>/diagonalley" class="block rounded-md text-[#F9A826] hover:bg-[#2E2A47] hover:text-white px-3 py-2 text-base font-medium">Diagon Alley</a>
            <?php } ?>
                <a href="<?php echo $path ?>/leaderboard" class="block rounded-md text-[#F9A826] hover:bg-[#2E2A47] hover:text-white px-3 py-2 text-base font-medium">Leader Board</a>
            </div>
        </div>
    </nav>
</div>
</body>
