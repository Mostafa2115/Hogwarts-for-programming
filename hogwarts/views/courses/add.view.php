<?php
    $header = 'Add Course';
    session_start();
    require '../../views/layouts/header.view.php';
    require '../../views/layouts/nav.view.php';
?>
<div class="container bg-white p-4">
    <h1>Add Course</h1>
    <form action="../../controllers/courses/add" method="post">
        <div class="form-group">
            <label for="name">Course Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" id="Description" name="Description" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Add Course">
    </form>
</div>
<?php require '../layouts/footer.view.php'; ?>