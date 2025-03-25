<?php
    $header = 'Add Challenge';
    require 'views/layouts/header.view.php';
    require 'views/layouts/nav.view.php';
?>

<div class="flex justify-center mt-10 mb-16">
    <div class="shadow-lg rounded-lg w-96 p-6 bg-[#f0c569] bg-cover bg-center"
         style="background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png');">
        
        <!-- Card Header -->
        <div class="text-white bg-[#634d17] text-center py-3 rounded-2xl">
            <h2 class="text-xl font-semibold">Add Challenge</h2>
        </div>

        <!-- Card Body -->
        <div class="p-4">
            <form action="../../../challenges/add/<?php echo $course_id ?>" method="post" class="space-y-4">
                
                <div>
                    <label for="name" class="block text-[#634d17] font-semibold">Challenge Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter challenge name"
                           class="border border-[#634d17] p-2 rounded-lg w-full text-black" required>
                </div>

                <div>
                    <label for="points" class="block text-[#634d17] font-semibold">Points</label>
                    <input type="number" id="points" name="points" placeholder="Enter points"
                           class="border border-[#634d17] p-2 rounded-lg w-full text-black" required>
                </div>

                <div>
                    <label for="challenge_type" class="block text-[#634d17] font-semibold">Challenge Type</label>
                    <input type="text" id="challenge_type" name="challenge_type" placeholder="Enter type"
                           class="border border-[#634d17] p-2 rounded-lg w-full text-black" required>
                </div>

                <div>
                    <label for="start_date" class="block text-[#634d17] font-semibold">Start Date</label>
                    <input type="date" id="start_date" name="start_date"
                           class="border border-[#634d17] p-2 rounded-lg w-full text-black" required>
                </div>

                <div>
                    <label for="deadline" class="block text-[#634d17] font-semibold">Deadline</label>
                    <input type="date" id="deadline" name="deadline"
                           class="border border-[#634d17] p-2 rounded-lg w-full text-black" required>
                </div>

                <div>
                    <label for="description" class="block text-[#634d17] font-semibold">Description</label>
                    <textarea id="description" name="description" placeholder="Enter description"
                              class="border border-[#634d17] p-2 rounded-lg w-full text-black resize-none" required></textarea>
                </div>

                <!-- Card Footer -->
                <div class="text-center">
                    <button type="submit" class="bg-[#a17d25] hover:bg-opacity-50 text-white py-2 px-4 rounded-2xl">
                        Add Challenge
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

<?php require 'views/layouts/footer.view.php'; ?>
