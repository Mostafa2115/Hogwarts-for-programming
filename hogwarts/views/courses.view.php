<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
<!-- Body of the page -->
        <!-- Right Side: Table -->
        <div class="table-container">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($courses as $course) : ?>
                        <tr>
                            <td><?= htmlspecialchars($course->id); ?></td>
                            <td><?= htmlspecialchars($course->course_name); ?></td>
                            <td><?= htmlspecialchars($course->Description); ?></td>
                            <td>
                                <a href="../controllers/courses/edit/{<?= $course->id; ?>}" class="btn btn-primary">Edit</a>
                                <a href="../views/editcourses.view.php/<?= $course->id; ?>" class="btn btn-danger">Delete</a>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require 'layouts/footer.view.php'; ?>
