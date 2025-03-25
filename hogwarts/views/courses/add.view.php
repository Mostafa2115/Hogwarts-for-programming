<?php
    $header = 'Add Course';
    require 'views/layouts/header.view.php';
    require 'views/layouts/nav.view.php';
?>

<!-- Body -->
<div class="flex justify-center mt-10 mb-16" style="font-family: 'EB Garamond' , 'sans-serif';">
    <div class="shadow-lg rounded-lg w-96 p-6"            
    style="background-color:rgb(192, 172, 128);">


        <!-- Card Header -->
        <div class="text-white bg-[#634d17] text-center py-3 rounded-2xl">
            <h2 class="text-xl font-semibold">Add Course</h2>
        </div>

        <!-- Card Body -->
        <div class="p-4">
            <form action="../../courses/add" method="post">
                
                <!-- Course Name -->
                <div class="mb-4">
                    <label for="name" class="block text-[#634d17] font-semibold">Course Name</label>
                    <input type="text" id="name" name="name" required 
                           class="w-full mt-1 p-2 bg-transparent border border-[#634d17] rounded-2xl focus:ring-2 focus:ring-[#a17d25]">
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="Description" class="block text-[#634d17] font-semibold">Course Description</label>
                    <input type="text" id="Description" name="Description" required 
                           class="w-full mt-1 p-2 bg-transparent border border-[#634d17] rounded-2xl focus:ring-2 focus:ring-[#a17d25]">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <input type="submit" class="bg-[#a17d25] hover:bg-opacity-50 text-white py-2 px-4 rounded-2xl transition" value="Add Course">
                </div>
            </form>
        </div>

    </div>
</div>

<?php require 'views/layouts/footer.view.php'; ?>
