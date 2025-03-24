<?php
    $GLOBALS['header'] = 'Edit Course';
    require 'views/layouts/header.view.php';    
    require 'views/layouts/nav.view.php';
?>
<!-- Left Side: Hufflepuff Image -->

<!-- body -->
<div class="container bg-white p-5 mt-5">
    <h1>Edit Course</h1>
    <form action="../../../controllers/courses/edit/<?php echo $id ?>" method="post">
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="name">Course Name</label>
            <input type="text" class="form-control" id="name" name="name" required value="<?= htmlspecialchars($course->course_name); ?>">
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" id="Description" name="Description" required value="<?= htmlspecialchars($course->Description); ?>">
        </div>
        <input type="submit" class="btn btn-primary" value="Update">
    </form>
</div>

<?php require 'views/layouts/footer.view.php'; ?>
