<?php 
    $GLOBALS['header'] = 'Course Details';
    require 'views/layouts/header.view.php';
    require 'views/layouts/nav.view.php';
?>
<div class="container bg-white p-5 mt-5">
    <table class="custom-table">
        <thead>
            <tr>
                <th>Course ID</th>
                <th>Course Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= htmlspecialchars($course->id); ?></td>
                <td><?= htmlspecialchars($course->course_name); ?></td>
                <td><?= htmlspecialchars($course->Description); ?></td>
            </tr>
        </tbody>
    </table>
    <a href="../../../views/challenges/add.view.php?id=<?= $course->id; ?>" class="btn btn-primary">Add Challenge</a>
</div>
</main>
<?php require 'views/layouts/footer.view.php'; ?>

