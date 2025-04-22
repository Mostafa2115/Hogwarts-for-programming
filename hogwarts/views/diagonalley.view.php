<?php
    $header = 'Diagon Alley';
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
    <div>
<?php if ($items): ?>
    <div>
    <div class="max-w-7xl mx-auto px-6 py-12">
        
        <h1 class="text-4xl font-extrabold text-center text-[#d3a840]">The wand chooses the wizard, remember</h1>

        <!-- Stickers Grid -->
        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
            <?php foreach ($items as $item): ?>
            <!-- Sticker Card -->
            <div class="bg-black shadow-lg rounded-2xl p-4 text-center">
            <img src="<?= htmlspecialchars($item->image) ?>" 
     alt="Item Image" 
     class="mx-auto hover:animate-bounce size-16 object-cover rounded-lg"
     onerror="this.onerror=null; this.src='https://img.icons8.com/color/48/hogwarts-legacy-hufflepuff.png';">

                <h2 class="text-lg font-bold text-[#d3a840] mt-2"><?= htmlspecialchars($item->item_name) ?></h2>
                
                <div class="flex justify-center mt-2">
                <form action="../diagonalley" method="POST">
    <input type="hidden" name="item_id" value="<?= htmlspecialchars($item->item_id) ?>">
    <button type="submit" class="flex items-center text-white py-2 rounded-lg shadow-lg hover:bg-[#b38a30] transition relative group overflow-hidden">
        <img class = "size-4" src="https://img.icons8.com/dusk/64/fantasy.png" alt="fantasy"/><span class="text-sm ml-2">Accio Purchase!</span>
                 <!-- Magic Glow Effect -->
                 <span class="absolute inset-0 bg-yellow-400 opacity-0 group-hover:opacity-20 transition duration-300 blur-xl"></span>
                </button>
    </button>
</form>

                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
            </div>
<?php endif; ?>
    </div>

<?php require 'layouts/footer.view.php';?>