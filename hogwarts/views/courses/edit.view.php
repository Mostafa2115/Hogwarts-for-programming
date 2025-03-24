<?php
    $GLOBALS['header'] = 'Edit Course';
    require 'views/layouts/header.view.php';    
    require 'views/layouts/nav.view.php';
?>

<!-- Body -->
<div class="flex justify-center mt-10 mb-16" style="font-family: 'EB Garamond' , 'sans-serif';">
    <div class="shadow-lg rounded-lg w-96 p-6"             
    style="background-color:rgb(192, 172, 128);">


        <!-- Card Header -->
        <div class="text-white bg-[#634d17] text-center py-3 rounded-2xl">
            <h2 class="text-xl font-semibold">Edit Course</h2>
        </div>

        <!-- Card Body -->
        <div class="p-4">
            <form action="../../../controllers/courses/edit/<?= htmlspecialchars($id) ?>" method="post">
                <input type="hidden" name="_method" value="PUT">

                <!-- Course Name -->
                <div class="mb-4">
                    <label for="name" class="block text-[#634d17] font-semibold">Course Name</label>
                    <input type="text" id="name" name="name" required 
                           class="w-full mt-1 p-2 bg-transparent border border-[#634d17]  rounded-2xl focus:ring-2 focus:ring-[#a17d25]"
                           value="<?= htmlspecialchars($course->course_name); ?>">
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block text-[#634d17] font-semibold">Course Description</label>
                    <textarea id="description" name="description" rows="4" required
                              class="w-full mt-1 p-2 resize-none bg-transparent border border-[#634d17] rounded-2xl focus:ring-2 focus:ring-[#a17d25]"><?= htmlspecialchars($course->Description); ?></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" 
                            class="bg-[#a17d25] hover:bg-opacity-50 text-white py-2 px-4 rounded-2xl transition">
                        Update Course
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

<?php require 'views/layouts/footer.view.php'; ?>
