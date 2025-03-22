<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
<!-- Left Side: Hufflepuff Image -->

<!-- body -->
<div class="container">
    <h1>Add Course</h1>
    <form action="../controllers/courses" method="post">
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
<?php require 'layouts/footer.view.php'; ?>