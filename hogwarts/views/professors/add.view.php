<?php
    $header = 'Add Professor';
    session_start();
    require '../layouts/header.view.php';
    require '../layouts/nav.view.php';
?>

<div class="flex justify-center mt-10 mb-16" style="font-family: 'EB Garamond' , 'sans-serif';">
    <div class="shadow-lg rounded-lg w-96 p-6" style="background-color:rgb(192, 172, 128);">

        <?php if (isset($_SESSION['error'])): ?>
            <div class="text-red-500 text-center mb-4">
                <?= $_SESSION['error']; ?>
            </div>
        <?php endif; ?>
        <!-- Card Header -->
        <div class="text-white bg-[#634d17] text-center py-3 rounded-2xl focus:outline-none focus:ring-0">
            <h2 class="text-xl font-semibold">Add Professor</h2>
        </div>

        <!-- Card Body -->
        <div class="p-4">
            <form action="/php/Hogwarts-for-programming/hogwarts/controllers/professor" method="post">
                <!-- Professor Name -->
                <div class="mb-4">
                    <label for="name" class="block text-[#634d17] font-semibold">Professor Name</label>
                    <input type="text" id="name" name="name" required 
                           class="w-full mt-1 p-2 bg-transparent border border-[#634d17] rounded-2xl focus:outline-none focus:ring-0">
                </div>
                
                <!-- Professor Username -->
                <div class="mb-4">
                    <label for="username" class="block text-[#634d17] font-semibold">Professor Username</label>
                    <input type="text" id="username" name="username" required 
                           class="w-full mt-1 p-2 bg-transparent border border-[#634d17] rounded-2xl focus:outline-none focus:ring-0">
                </div>
                
                <!-- Email -->
                <div class="mb-4">
                    <label for="Email" class="block text-[#634d17] font-semibold">Email</label>
                    <input type="text" id="Email" name="email" required 
                           class="w-full mt-1 p-2 bg-transparent border border-[#634d17] rounded-2xl focus:outline-none focus:ring-0">
                </div>
                
                <!-- Password -->
                <div class="mb-4">
                    <label for="HashedPassword" class="block text-[#634d17] font-semibold">Password</label>
                    <input type="password" id="HashedPassword" name="password" required 
                           class="w-full mt-1 p-2 bg-transparent border border-[#634d17] rounded-2xl focus:outline-none focus:ring-0">
                </div>
                
                <!-- Role -->
                <div class="mb-4">
                    <label for="Role" class="block text-[#634d17] font-semibold">Role</label>
                    <input type="text" id="Role" name="role" required 
                           class="w-full mt-1 p-2 bg-transparent border border-[#634d17] rounded-2xl focus:outline-none focus:ring-0">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" 
                            class="bg-[#a17d25] hover:bg-opacity-50 snitch text-white py-2 px-4 rounded-2xl transition ">
                        Add Professor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require '../layouts/footer.view.php'; ?>
