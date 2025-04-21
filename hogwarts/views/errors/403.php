<?php
    $header = 'unAuthorized Access';
    require __DIR__ . '/../layouts/header.view.php';
?>
<div class="text-[#d3a840] bg-black min-h-screen flex items-center justify-center" style="background-image: url(http://www.transparenttextures.com/patterns/brick-wall-dark.png);">
  <div class="text-center p-6 max-w-lg mx-auto">
    <h1 class="text-8xl font-bold mb-4 text-[#d3a840]">403</h1>
    <p class="text-2xl mb-2">
      <span class="text-[#d3a840] font-semibold">"Alohomora!"</span> won’t work here.
    </p>
    <p class="text-xl mb-6">
      This area is restricted. Only prefects or professors allowed!
    </p>
    <?php if ($_SESSION["role"] === "student") { ?>
      <a href="/" class="snitch rounded-md snitch:hover text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50 px-3 py-2 text-sm font-medium">
        Return to Hogwarts
      </a>
    <?php } else { ?>
      <a href="/professor/home" class="snitch rounded-md snitch:hover text-[#d3a840] hover:bg-[#634d17] hover:text-white hover:bg-opacity-50 px-3 py-2 text-sm font-medium">
        Return to Hogwarts
      </a>
    <?php } ?>
  </div>
</div>

</body>
</html>
