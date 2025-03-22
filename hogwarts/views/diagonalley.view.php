<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
<!-- Left Side: Hufflepuff Image -->

<!--body of the page-->
<div class="main-content bg-white p-4 shadow-sm">
    <table class="custom-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Item Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <td><?= $item->item_id; ?></td>
                    <td><?= $item->item_name; ?></td>
                    <td><?= $item->item_price; ?></td>
                </tr>
            <?php endforeach; ?>
        </div>
        </tbody>
    </table>
</div>
</main>
<?php require 'layouts/footer.view.php';?>