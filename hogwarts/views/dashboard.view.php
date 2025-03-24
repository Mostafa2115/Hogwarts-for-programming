<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
<main class="bg-cover bg-center" style="font-family: 'EB Garamond' , 'sans-serif';">
<div class="main-content p-6">
<?php if($_SESSION['role'] === 'admin'){?>
<a href="../views/professors/add.view.php" class="px-3 py-1 bg-[#d3a840] text-white rounded-md hover:opacity-25 transition mb-4 inline-block">Add Professor</a>
<?php } ?>
    <div class="overflow-x-auto">
        <table class="min-w-full border-black rounded-2xl">
            <thead>
                <tr class="text-white text-left bg-[#634d17] ">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Country Name</th>
                    <th class="px-4 py-2">Wand Wood</th>
                    <th class="px-4 py-2">Wand Core</th>
                    <th class="px-4 py-2">House Name</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-[#634d17]" style="
            background-color:rgb(192, 172, 128);
                <?php foreach ($students as $student) : ?>
                    <tr class="hover:bg-[#634d17] transition">
                        <td class="px-4 py-2"><?= htmlspecialchars($student->id); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($student->name); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($student->country_name); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($student->wood); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($student->core); ?></td>
                        <td class="px-4 py-2 space-x-2 flex">
                            <?= htmlspecialchars($student->house_name); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require 'layouts/footer.view.php';?>