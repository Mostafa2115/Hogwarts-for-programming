<?php
    $header = 'Add Challenge';
    session_start();
    require '../../views/layouts/header.view.php';
    require '../../views/layouts/nav.view.php';
?>
<div class="container mx-auto">
    <h1 class="text-4xl text-white text-center mt-10">Add Challenge</h1>
    <form action="../../controllers/challenges/add/<?php echo $_GET['id'] ?>" method="post" class="flex flex-col items-center mt-10">
        <input type="text" name="name" placeholder="Challenge Name" class="border-2 border-white p-2 rounded-lg w-1/3 text-black" required>
        <input type="number" name="points" placeholder="Points" class="border-2 border-white p-2 rounded-lg w-1/3 text-black mt-5" required>
        <input type="text" name="challenge_type" placeholder="Challenge Type" class="border-2 border-white p-2 rounded-lg w-1/3 text-black mt-5" required>
        <input type="date" name="start_date" placeholder="Start Date" class="border-2 border-white p-2 rounded-lg w-1/3 text-black mt-5" required>
        <input type="date" name="deadline" placeholder="Deadline" class="border-2 border-white p-2 rounded-lg w-1/3 text-black mt-5" required>
        <textarea name="description" placeholder="Description" class="border-2 border-white p-2 rounded-lg w-1/3 text-black mt-5" required></textarea>
        <button type="submit" class="bg-white text-black p-2 rounded-lg mt-5">Add Challenge</button>
    </form>
</div>