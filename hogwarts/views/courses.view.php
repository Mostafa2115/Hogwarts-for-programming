<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>

<main class="bg-cover h-screen bg-center" style="background-image: url(http://www.transparenttextures.com/patterns/brick-wall-dark.png);">
        <div class="p-6 ">
    <div class="overflow-x-auto">
        <table class="min-w-full border rounded-2xl">
            <thead>
                <tr class="bg-[#634d17] text-white text-left">
                    <th class="px-4 py-2">Course ID</th>
                    <th class="px-4 py-2">Course Name</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300" style="
            background-color: #f0c569;
            background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png')";>>
                <?php foreach ($courses as $course) : ?>
                    <tr class="hover:bg-[#634d17] transition">
                        <td class="px-4 py-2"><?= htmlspecialchars($course->id); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($course->course_name); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($course->Description); ?></td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="../controllers/courses/edit/<?= $course->id; ?>" class="px-3 py-1 bg-[#a17d25] text-white rounded-md hover:opacity-50 transition">Edit</a>
                            <a href="../views/editcourses.view.php/<?= $course->id; ?>" class="px-3 py-1 bg-[#d3a840] text-white rounded-md hover:opacity-25  transition">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

</main>

<?php require 'layouts/footer.view.php'; ?>
