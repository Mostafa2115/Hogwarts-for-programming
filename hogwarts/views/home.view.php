<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
 <style>
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(0); }
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes slide-in {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slide-in {
            animation: slide-in 1s ease-out;
        }
    </style>
<!-- Cedric Diggory -->
<main class="max-w-7xl mx-auto py-12 pl-16 flex flex-col bg-cover bg-center" style="background-image: url(http://www.transparenttextures.com/patterns/brick-wall-dark.png);">       
    <!-- Hero section -->
        <div class="flex flex-row justify-between animate-slide-in">
            <!-- Student Info -->
            <div class="flex flex-col rounded-lg w-1/2">
                    <div class="space-y-6">
                    <h2 class="text-4xl font-semibold text-[#d3a840] pt-4 animate-float">Welcome back ,<?= htmlspecialchars($student->name)?></h2>
                       
                       <div class="text-white pt-6 ">
                            <section class="text-lg leading-relaxed">
                                 <span class="relative">
                                      <span aria-hidden="true" class="text-4xl font-bold text-[#d3a840] drop-shadow-lg">Y</span>ou
                                 </span> 
                                 <?= htmlspecialchars($house -> house_description ) ?>   
                            </section>
                        


                    <div class="flex justify-between pt-12">
                       <div class = "flex flex-col w-2/3">
                        <!-- img -->
                          <div class="flex gap-12 ">
                            <img class="w-16 transition-transform duration-300 hover:scale-110" src="<?php echo htmlspecialchars($house->house_logo) ?>" alt="hufflepuff">                   
                            <img class="transition-transform duration-300 hover:scale-110" src="data:image/png;base64,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" alt="magic-wand">                      
                          </div>

                          <div class="flex gap-12 text-white pt-4">
                           <span class="text-lg">House:</span>
                           <span class="text-lg">Wand:</span>
                          </div>

                          <div class="flex gap-10 flex-row text-white">
                            <span class="text-sm"><?= htmlspecialchars($house -> house_name ) ?>   
                            </span>
                            <span class="text-sm mr-4"><?= htmlspecialchars($wand->core)?></span>
                          </div>
                   
                        </div>
                        

                       <div class="flex flex-col text-white ">
                            <p class="text-lg">Points: <span class="font-semibold text-[#d3a840]"><?= htmlspecialchars((string) $totalScore) ?></span></p>
                            <p class="text-lg">Rank: <span class="font-semibold text-[#d3a840]">5th</span></p>
                       </div>
                    </div>
</div>
                    </div>

            </div>

            <div class="flex items-center">
            <img src="https://www.harrypotter.com/assets/_next/static/images/portrait-placeholder-ravenclaw-a71648607ca5870aa9422e54424d4491.gif" 
     alt="Student Avatar" 
     class="h-2/3 border-4 border-[#d3a840] filter sepia-[100%] brightness-[1.5] contrast-[1.2] saturate-[1.8]">
</div>
        </div>
        <!-- section -->

        <div class="flex pr-20 pt-12 flex flex-col">
 <!-- Recent Activities -->
 <?php if ($challenges): ?>
    <div class=" w-full text-white pt-6 rounded-lg">
        <h1 class = "text-4xl text-[#d3a840] py-6">Challenges</h1>
        <div class="grid grid-cols-1 gap-6"> <!-- Grid applied here -->
            <?php foreach ($challenges as $challenge): ?>
                <div class="bg-[#634d17] p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16">
                            <img class="w-full h-full rounded-full object-cover" 
                                src="https://img.icons8.com/color/48/dobby.png" 
                                alt="dobby">
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold"><?= htmlspecialchars($challenge->name) ?></h2>
                            <div class="flex space-x-2 mt-2">
                                <span class="bg-[#d3a840] text-white px-3 py-1 rounded-lg text-sm">
                                    <?= htmlspecialchars($challenge->points) ?> Points
                                </span>
                                <span class="bg-[#a17d25] text-white px-3 py-1 rounded-lg text-sm">
                                    Deadline: <?= htmlspecialchars($challenge->deadline) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Description -->
                    <p class="text-gray-300 mt-3">
                        <?= nl2br(htmlspecialchars($challenge->description)) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

        </div>
    </div>

    <?php if ($courses): ?>
        <h1 class = "text-4xl text-[#d3a840] pt-6 mt-12">Courses</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 mt-6">
        <?php foreach ($courses as $course): ?>
            <div class="bg-black hover:opacity-50 text-white p-6 rounded-2xl shadow-lg">
                
                <div class="flex items-center space-x-4">
                    <img class="w-20 h-20 rounded-full object-cover" 
                         src="https://img.icons8.com/color/48/deathly-hallows.png"
                         alt="deathly-hallows">    

                    <div>
                        <h2 class="text-2xl font-semibold"><?= htmlspecialchars($course->course_name) ?></h2>

                        <span class="bg-[#d3a840] text-white px-3 py-1 rounded-lg text-sm">
                            <?= htmlspecialchars($course->professor_name) ?>
                        </span>
                    </div>
                </div>

                <p class="text-gray-300 mt-3">
                    <?= nl2br(htmlspecialchars($course->Description)) ?>
                </p>

            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<!-- Items  -->
 <div class="flex">
<?php if ($items): ?>
    <div>
    <div class="max-w-7xl mx-auto py-12">
        
        <h1 class="text-4xl text-[#d3a840] py-6">Items</h1>

        <div class="grid w-full sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-14 mt-8">
            <?php foreach ($items as $item): ?>
            <div class="bg-black shadow-lg rounded-2xl p-4 text-center">
            <img src="<?= htmlspecialchars($item->image) ?>" 
     alt="Item Image" 
     class="mx-auto hover:animate-bounce size-16 object-cover rounded-lg"
     onerror="this.onerror=null; this.src='https://img.icons8.com/color/48/hogwarts-legacy-hufflepuff.png';">

                <h2 class="text-lg font-bold text-[#d3a840] mt-2"><?= htmlspecialchars($item->item_name) ?></h2>
                <h2 class="text-lg font-bold text-white mt-2 ">quantity<span class ="text-[#d3a840] ml-2"><?= htmlspecialchars($item->quantity) ?></span></h2>
            </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
            </div>
<?php endif; ?>


         
    </main>

</body>
</html>