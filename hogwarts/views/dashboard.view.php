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
                    <th>Name</th>
                    <th>Country Name</th>
                    <th>Wand Wood</th>
                    <th>Wand Core</th>
                    <th>House Name</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) : ?>
                    <tr>
                        <td><?= htmlspecialchars($student->id); ?></td>
                        <td><?= htmlspecialchars($student->name); ?></td>
                        <td><?= htmlspecialchars($student->country_name); ?></td>
                        <td><?= htmlspecialchars($student->wood); ?></td>
                        <td><?= htmlspecialchars($student->core); ?></td>
                        <td><?= htmlspecialchars($student->house_name); ?></td>
                    </tr>
                <?php endforeach; ?>
            </div>
            </tbody>
        </table>
    </div>
</main>
<?php require 'layouts/footer.view.php';?>