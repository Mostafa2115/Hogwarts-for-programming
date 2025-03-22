<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $GLOBALS['header'] ?></title>
    <link rel="stylesheet" href="../../views/static/nav.css">
    <link rel="stylesheet" href="../../views/static/header.css">
    <link rel="stylesheet" href="../../views/static/table.css">
</head>
<?php
    require 'layouts/nav.view.php';
?>
<!-- Left Side: Hufflepuff Image -->

<!-- body -->
<div class="container">
    <h1>Edit Course</h1>
    <form action="../../controllers/courses/edit/<?php echo $id ?>" method="post">
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

<?php require 'layouts/footer.view.php'; ?>
