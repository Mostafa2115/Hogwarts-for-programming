<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
<!--body of the page-->
<main >
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <table class="w-full border-collapse border border-gray-300 shadow-lg rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Price</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <?php foreach ($items as $item) : ?>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($item->item_id); ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($item->item_name); ?></td>
                        <td class="border border-gray-300 px-4 py-2"><?= htmlspecialchars($item->item_price); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>
<?php require 'layouts/footer.view.php';?>