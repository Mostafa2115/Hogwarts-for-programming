<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <?php $path = "/php/Hogwarts-for-programming/hogwarts/controllers"; ?>
                            <a href="<?php echo $path ?>/home" class="rounded-md <?php echo $_SERVER['REQUEST_URI'] === $path.'/' ?  "bg-gray-900" : "text-gray-300" ?> px-3 py-2 text-sm font-medium text-white" aria-current="page">Home</a>
                            <a href="<?php echo $path ?>/dashboard" class="rounded-md <?php echo $_SERVER['REQUEST_URI'] === $path.'/dashboard' ?  "bg-gray-900" : "text-gray-300" ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
                            <a href="<?php echo $path ?>/courses" class="rounded-md <?php echo $_SERVER['REQUEST_URI'] === $path.'/courses' ?  "bg-gray-900" : "text-gray-300" ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Courses</a>
                            <a href="<?php echo $path ?>/diagonalley" class="rounded-md <?php echo $_SERVER['REQUEST_URI'] === $path.'/diagonalley' ?  "bg-gray-900" : "text-gray-300" ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Diagon Alley</a>
                            <a href="<?php echo $path ?>/leaderboard" class="rounded-md <?php echo $_SERVER['REQUEST_URI'] === $path.'/leaderboard' ?  "bg-gray-900" : "text-gray-300" ?> px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Leader Board</a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none" aria-controls="mobile-menu">
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
                <a href="<?php echo $path ?>/" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Home</a>
                <a href="<?php echo $path ?>/dashboard" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
                <a href="<?php echo $path ?>/courses" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Courses</a>
                <a href="<?php echo $path ?>/diagonalley" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Diagon Alley</a>
                <a href="<?php echo $path ?>/leaderboard" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Leader Board</a>
            </div>
        </div>
    </nav>
    <?php require 'banner.view.php'; ?>
</div>