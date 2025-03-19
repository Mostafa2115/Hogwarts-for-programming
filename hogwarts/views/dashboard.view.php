<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
    
    $students = $db->query('SELECT * FROM students s 
        join Wands W ON s.wand_id = W.id 
        join Houses H ON s.house_id = H.id')->fetchAll(PDO::FETCH_OBJ);
?>
<!--body of the page-->
<main >
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <table class="w-full border-collapse border border-gray-300 shadow-lg rounded-lg">
    <thead class="bg-gray-100">
        <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Country Name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Wand Wood</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Wand Core</th>
            <th class="border border-gray-300 px-4 py-2 text-left">House Name</th>
        </tr>
    </thead>
    <tbody class="divide-y divide-gray-200">
        <?php foreach ($students as $student) : ?>
            <tr class="hover:bg-gray-50">
                <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($student->id); ?></td>
                <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($student->name); ?></td>
                <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($student->country_name); ?></td>
                <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($student->wood); ?></td>
                <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($student->core); ?></td>
                <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($student->house_name); ?></td>
            </tr>
        <?php endforeach; ?>
    </div>
</main>
<?php require 'layouts/footer.view.php';?>