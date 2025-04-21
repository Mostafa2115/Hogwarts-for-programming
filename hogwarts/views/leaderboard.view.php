<?php
    $header = 'Leaderboard';
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
<!-- body of the page -->
<main class="h-screen mb-20">

<?php if ($houses): ?>
     
        <h1 class="text-3xl font-extrabold text-center text-yellow-400 py-8">Hogwarts House Leaderboard</h1>
    <?php foreach ($houses as $house): ?>
        <div class="max-w-4xl mx-4 md:mx-auto text-white rounded-2xl mt-6 space-y-4">
        <!-- Gryffindor -->
        <div class="flex items-center justify-between p-4 rounded-lg  
         <?php 
        echo ($house->house_name === 'Gryffindor') ? 'bg-[#721D1D]' : 
             (($house->house_name === 'Slytherin') ? 'bg-[#46630F]' : 
             (($house->house_name === 'Hufflepuff') ? 'bg-yellow-700' : 
             (($house->house_name === 'Ravenclaw') ? 'bg-[#223679]' : 'bg-gray-700')));
        ?>">
            <img src="<?= htmlspecialchars($house->house_logo) ?>"  alt="<?= htmlspecialchars($house->house_name) ?>" class="w-12 h-12">
            <span class="text-xl font-bold"><?= htmlspecialchars($house->house_name) ?></span>
            <span class="text-2xl font-extrabold text-yellow-300"><?= htmlspecialchars($house->score) ?></span>
        </div>
    </div>
</div>
<?php endforeach; ?>
    
    <?php endif; ?>
</main>

<?php require 'layouts/footer.view.php'; ?>