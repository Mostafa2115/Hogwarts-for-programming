<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
<!-- Body of the page -->
<main class="main-container">
    <div class="content-wrapper">
        <!-- Left Side: Hufflepuff Image -->
        <div class="image-container">
            <img src="../views/uploads/hufflepuff.jpg" alt="Hufflepuff Banner">
        </div>

        <!-- Right Side: Table -->
        <div class="table-container">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Professor ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $course) : ?>
                        <tr>
                            <td><?= htmlspecialchars($course->id); ?></td>
                            <td><?= htmlspecialchars($course->course_name); ?></td>
                            <td><?= htmlspecialchars($course->professor_id); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>


<?php require 'layouts/footer.view.php'; ?>
