<?php

require_once "config.php";
$query = mysqli_query($conn, "SELECT * FROM users");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation using PHP & MySql</title>
    <link rel="stylesheet" href="style.css">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- tailwind cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="container">
    <section>
        <div class="mt-12">
            <h1 class="mb-4">User List</h1>
            <a href="create.php"
                class="text-xl px-4 py-2 border bg-[#7494ec] text-white rounded-lg hover:bg-slate-400">Create
                User</a>

            <table class="table table-hover mt-8">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($user = mysqli_fetch_assoc($query)): ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['phone'] ?></td>
                            <td><?= $user['address'] ?></td>
                            <td>
                                <a href="update.php?id=<?= $user['id'] ?>"
                                    class="text-white px-4 py-1 bg-[#7494ec] border rounded-md">Edit</a>
                                <a href="action.php?id=<?= $user['id'] ?>"
                                    class='text-white px-4 py-1 ml-4 bg-red-500 border rounded-md'
                                    onclick="return confirm('Are you sure went to delete this user?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>