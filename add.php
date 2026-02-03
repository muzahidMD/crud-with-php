<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
    <!-- tailwind cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <section>
        <div class="wrapper flex justify-center items-center min-h-screen ">
            <div class="form-wrapper w-[700px]">
                <h1 class="text-center text-4xl mb-8 ">ADD User</h1>
                <form method="POST" action="action.php">
                    <input type="text" name="name" placeholder="Name" required
                        class="w-full mx-0 my-3 p-3 border border-gray-400 rounded-lg">
                    <input type="email" name="email" placeholder="Email" required
                        class="w-full mx-0 my-3 p-3 border border-gray-400 rounded-lg">
                    <input type="phone" name="phone" placeholder="Phone" required
                        class="w-full mx-0 my-3 p-3 border border-gray-400 rounded-lg">
                    <textarea name="address" placeholder="Address" required
                        class="w-full h-[150px] mx-0 my-3 p-3 border border-gray-400 rounded-lg resize-none"></textarea>
                    <div class="flex justify-between mt-2">
                        <button type="submit" name="add"
                            class="px-12 py-2 bg-[#7494ec] text-white rounded-md cursor-pointer">Submit</button>
                        <a href="index.php"
                            class="text-black px-12 py-2 border-2 border-[#7494ec] rounded-md">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>