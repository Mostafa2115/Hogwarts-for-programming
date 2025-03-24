<?php
    require 'views/layouts/header.view.php';
    require 'views/layouts/nav.view.php';
?>

<!-- Body -->
<div class="flex justify-center mt-10 mb-16">
    <div class="shadow-lg rounded-lg w-96 p-6" style="
            background-color: #f0c569;
            background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png');
        ">

        <!-- Card Header -->
        <div class="text-white bg-[#634d17] text-center py-3 rounded-2xl">
            <h2 class="text-xl font-semibold">Course Details</h2>
        </div>

        <!-- Card Body -->
        <div class="p-4">
            <div class="mb-4">
                <h3 class="text-xl font-semibold text-[#634d17]">Course ID:</h3>
                <p class="text-gray-700"><?= htmlspecialchars($course->id); ?></p>
            </div>

            <div class="mb-4">
                <h3 class="text-xl font-semibold text-[#634d17]">Course Name:</h3>
                <p class="text-gray-700"><?= htmlspecialchars($course->course_name); ?></p>
            </div>

            <div class="mb-4">
                <h3 class="text-xl font-semibold text-[#634d17]">Description:</h3>
                <p class="text-gray-700"><?= htmlspecialchars($course->Description); ?></p>
            </div>
        </div>

        <!-- Card Footer -->
        <div class="flex justify-center p-4">
            <a href="../../../views/challenges/add.view.php?id=<?= $course->id; ?>" 
               class="bg-[#a17d25] hover:bg-opacity-50 text-white py-2 px-4 rounded-2xl transition">
               Add Challenge
            </a>
        </div>

    </div>
</div>

<?php require 'views/layouts/footer.view.php'; ?>
