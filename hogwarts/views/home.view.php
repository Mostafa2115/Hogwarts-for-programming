<?php
$header = 'Home';
require 'layouts/header.view.php';
require 'layouts/nav.view.php';
?>
<style>
    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .animate-float {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes slide-in {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-in {
        animation: slide-in 1s ease-out;
    }
</style>

<!-- Cedric Diggory -->
<main class="max-w-7xl px-4 sm:px-8 mx-auto py-12 pl-4 sm:pl-8 pr-4 sm:pr-8 bg-cover bg-center">
    <!-- Hero section -->
    <div class="md:flex md:flex-row md:justify-between">
        <!-- Student Info -->
        <div class="flex flex-col rounded-lg md:w-1/2">
            <div class="space-y-6">
                <h2 class="text-4xl font-semibold text-[#d3a840] pt-4 text-center md:text-left">Welcome <?= htmlspecialchars($student->name) ?></h2>

                <div class="text-white pt-6">
                    <section class="text-lg leading-relaxed text-center md:text-left">
                        <span class="relative">
                            <span aria-hidden="true" class="text-4xl font-bold text-[#d3a840] drop-shadow-lg">Y</span>ou
                        </span>
                        <?= htmlspecialchars($house->house_description) ?>
                    </section>

                    <div class="flex flex-col md:flex-row justify-between pt-12 md:gap-6">

    <!-- House & Wand Section -->
    <div class="flex flex-col md:flex-row w-full md:w-2/5 gap-6">
        <!-- House Section -->
        <div class="flex flex-col w-full md:w-1/2 text-white">
            <!-- House Label and Value -->
            <div class="flex justify-between md:flex-col-reverse md:items-start items-center text-lg">
                <span>House: <?= htmlspecialchars($house->house_name) ?></span>
                <img class="w-16 transition-transform duration-300 hover:scale-110" src="<?= htmlspecialchars($house->house_logo) ?>" alt="House Logo">
            </div>
        </div>

        <!-- Wand Section -->
        <div class="flex flex-col w-full md:w-1/2 text-white">
            <!-- Wand Label and Value -->
            <div class="flex justify-between md:flex-col-reverse md:items-start text-lg">
                <span>Wand: <?= htmlspecialchars($wand->core) ?></span>
                <img class="w-16 transition-transform duration-300 hover:scale-110" src="https://img.icons8.com/papercut/120/harry-potter.png" alt="Wand Icon"/>
            </div>
        </div>
    </div>

    <!-- Points & Rank Section -->
    <div class="flex flex-col text-white mt-6 md:mt-0 w-full md:w-1/5">
        <div class="flex justify-between text-lg md:flex-col">
            <div class="flex flex-col">
                <span>Points: <span class="font-semibold text-[#d3a840]"><?= htmlspecialchars((string) $totalScore) ?></span></span>
            </div>
            <div class="flex flex-col">
                <span>Rank: <span class="font-semibold text-[#d3a840]">5th</span></span>
            </div>
        </div>
    </div>
</div>



                </div>
            </div>
        </div>

        <!-- Right-aligned Student Avatar -->
        <div class="hidden md:flex items-center justify-end md:w-1/2">
            <img src="https://www.harrypotter.com/assets/_next/static/images/portrait-placeholder-ravenclaw-a71648607ca5870aa9422e54424d4491.gif"
                alt="Student Avatar"
                class="h-2/3 border-4 border-[#d3a840] filter sepia-[100%] brightness-[1.5] contrast-[1.2] saturate-[1.8]">
        </div>

    </div>

    <!-- Recent Activities -->
    <div class="pt-12">
        <?php if ($challenges): ?>
            <div class="w-full text-white pt-6 rounded-lg text-center md:text-left md:items-center">
                <h1 class="text-4xl text-[#d3a840] py-6">Challenges</h1>
                <div class="grid grid-cols-1 gap-6">
                    <?php foreach ($challenges as $challenge): ?>
                        <div class="bg-[#634d17] p-6 rounded-2xl shadow-lg">
                            <div class="flex items-center space-x-4 md:justify-start justify-center">
                                <div class="w-16 h-16">
                                    <img class="w-full h-full rounded-full object-cover"
                                        src="https://img.icons8.com/color/48/dobby.png"
                                        alt="dobby">
                                    </img>
                                </div>
                                <div>
                                    <h2 class="text-2xl flex items-start font-semibold"><?= htmlspecialchars($challenge->name) ?></h2>
                                    <div class="flex space-x-2 mt-2">
                                        <span class="bg-[#d3a840] text-white px-3 py-1 rounded-lg text-sm">
                                            <?= htmlspecialchars($challenge->points) ?> Points
                                        </span>
                                        <span class="bg-[#a17d25] text-white px-3 py-1 rounded-lg text-sm">
                                            Deadline: <?= htmlspecialchars($challenge->deadline) ?>
                                        </span>
                                    </div>
                                    <p class="text-gray-300 mt-3 flex items-start"><?= nl2br(htmlspecialchars($challenge->description)) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php if ($courses): ?>
    <div class="pt-12">
        <h1 class="text-4xl text-[#d3a840] py-6 text-center md:text-left">Courses</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
            <?php foreach ($courses as $course): ?>
                <div class="bg-black hover:opacity-50 text-white p-6 rounded-2xl shadow-lg">
                    <!-- Same alignment structure as 'Challenges' -->
                    <div class="flex items-center space-x-4 md:justify-start justify-center">
                        <!-- Left-side image -->
                        <div class="w-16 h-16">
                            <img class="w-full h-full rounded-full object-cover"
                                src="https://img.icons8.com/color/48/deathly-hallows.png"
                                alt="deathly-hallows">
                            </img>
                        </div>

                        <!-- Right-side text -->
                        <div>
                            <h2 class="text-lg font-semibold"><?= htmlspecialchars($course->course_name) ?></h2>
                            <span class="bg-[#d3a840] text-white px-3 py-1 rounded-lg text-sm">
                                <?= htmlspecialchars($course->professor_name) ?>
                            </span>
                            <p class="text-gray-300 mt-3 line-clamp-3">
                                <?= nl2br(htmlspecialchars($course->Description)) ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>









    <!-- Items -->
    <?php if ($items): ?>
        <div class="max-w-7xl mx-auto py-12">
            <h1 class="text-4xl text-[#d3a840] py-6 text-center md:text-left">Items</h1>
            <div class="grid sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-5 gap-14 mt-8">
                <?php foreach ($items as $item): ?>
                    <div class="bg-black shadow-lg rounded-2xl p-4 text-center">
                        <img src="<?= htmlspecialchars($item->image) ?>"
                            alt="Item Image"
                            class="mx-auto hover:animate-bounce size-16 object-cover rounded-lg"
                            onerror="this.onerror=null; this.src='https://img.icons8.com/color/48/hogwarts-legacy-hufflepuff.png';">

                        <h2 class="text-lg font-bold text-[#d3a840] mt-2"><?= htmlspecialchars($item->item_name) ?></h2>
                        <h2 class="text-lg font-bold text-white mt-2">Quantity: <span class="text-[#d3a840]"><?= htmlspecialchars($item->quantity) ?></span></h2>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</main>

<?php require 'layouts/footer.view.php'; ?>
</body>

</html>