<?php
    require 'layouts/header.view.php';
    require 'layouts/nav.view.php';
?>
 <style>
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(0); }
        }
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes slide-in {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-slide-in {
            animation: slide-in 1s ease-out;
        }
        .voldemort:hover {
             cursor: url('https://img.icons8.com/color/48/lord-voldemort.png'), auto;
        }
</style>
    </style>
<!-- Cedric Diggory -->
<main class="max-w-7xl mx-auto h-screen flex items-center justify-center flex-col text-center bg-cover bg-center px-8" 
      style="background-image: url(http://www.transparenttextures.com/patterns/brick-wall-dark.png);">
      <h1 class="text-[#d3a840] text-3xl md:text-4xl font-bold max-w-3xl leading-relaxed">
    Welcome, Professor.
</h1>
<h2 class="text-[#d3a840] text-xl md:text-2xl font-semibold max-w-3xl mt-2">
    The future of the wizarding world rests in your hands. Train your young witches and wizards well.
    <br>Darkness has a way of returning, and <span class="text-[#BBDEFB] voldemort" >He-Who-Must-Not-Be-Named</span> may not stay gone forever.
</h2>

</main>


    <!-- Footer
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2025 Hufflepuff House. All rights reserved.</p>
    </footer> -->

</body>
</html>

<?php require 'layouts/footer.view.php';?>
