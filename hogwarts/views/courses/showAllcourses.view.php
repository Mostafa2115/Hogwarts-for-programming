<?php
    require 'views/layouts/header.view.php';
    require 'views/layouts/nav.view.php';
?>
<main class="bg-cover h-screen bg-center" style="background-image: url(http://www.transparenttextures.com/patterns/brick-wall-dark.png);">
<div class="p-6">
<a href="../views/courses/add.view.php" class="px-3 py-1 bg-[#d3a840] text-white rounded-md hover:opacity-25 transition mb-4 inline-block">Add Course</a>
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
            background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png')";>
                <?php foreach ($courses as $course) : ?>
                    <tr class="hover:bg-[#634d17] transition">
                        <td class="px-4 py-2"><?= htmlspecialchars($course->id); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($course->course_name); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($course->Description); ?></td>
                        <td class="px-4 py-2 space-x-2 flex">
                            <a href="../controllers/courses/edit/<?= $course->id; ?>" class="px-3 py-1 bg-[#a17d25] text-white rounded-md hover:opacity-50 transition">Edit</a>
                            <a href="../controllers/courses/show/<?= $course->id; ?>" class="px-3 py-1 bg-[#2a7da1] text-white rounded-md hover:opacity-50 transition">Show</a>
                            <form action="../controllers/courses/delete/<?= $course->id; ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="px-3 py-1 bg-[#d3a840] text-white rounded-md hover:opacity-25  transition">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require 'views/layouts/footer.view.php'; ?>
