<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
    
?>
<!-- Left Side: Hufflepuff Image -->

<!--body of the page-->
    
<div class="p-6">
    <div class="overflow-x-auto">
        <table class="min-w-full shadow-lg rounded-2xl">
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
            <tbody class="divide-y divide-gray-300;
" style="
background-color: #f0c569;
background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png')";>
                <?php foreach ($students as $student) : ?>
                    <tr class="hover:bg-[#634d17] transition">
                        <td class="px-4 py-2"><?= htmlspecialchars($student->id); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($student->name); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($student->country_name); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($student->wood); ?></td>
                        <td class="px-4 py-2"><?= htmlspecialchars($student->core); ?></td>
                        <td class="px-4 py-2 <?= $student->house_name ?>">
                            <?= htmlspecialchars($student->house_name); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require 'layouts/footer.view.php';?>