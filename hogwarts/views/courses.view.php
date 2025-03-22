<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
        <div class="table-container bg-white p-4">
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
                                <a href="../controllers/courses/<?= $course->id; ?>" class="btn btn-primary">Edit</a>
                                <form action="../controllers/courses/delete/<?= $course->id; ?>" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php require 'layouts/footer.view.php'; ?>
