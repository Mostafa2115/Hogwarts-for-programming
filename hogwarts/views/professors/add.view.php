<?php
    $header = 'Add Course';
    session_start();
    require '../../views/layouts/header.view.php';
    require '../../views/layouts/nav.view.php';
?>
    <h1>Add Professor</h1>
    <form action="../../controllers/professor" method="post" class="bg-white p-4 rounded">
        <label for="name">Professor Name</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="username">Professor UserName</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="Email">Email</label>
        <input type="text" id="Email" name="email" required>
        <br>
        <label for="HashedPassword">Password</label>
        <input type="password" id="HashedPassword" name="password" required>
        <br>
        <label for="Role">Role</label>
        <input type="text" id="Role" name="role" required>
        <br>
        <input type="submit" class="btn btn-primary" value="Add Professor">
    </form>
<?php require '../../views/layouts/footer.view.php';?>