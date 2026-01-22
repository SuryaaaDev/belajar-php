<?php
include 'database.php';

$id = $_GET['id'];
$user = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$data = mysqli_fetch_assoc($user);

if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE users SET
        name='$name',
        email='$email'
        WHERE id='$id'
    ");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">Edit User</h1>

    <form method="POST">
        <input type="text" name="name"
            value="<?= $data['name'] ?>"
            class="w-full border p-2 mb-3 rounded" required>

        <input type="email" name="email"
            value="<?= $data['email'] ?>"
            class="w-full border p-2 mb-3 rounded" required>

        <button name="update"
            class="bg-green-500 text-white px-4 py-2 rounded">
            Update
        </button>

        <a href="index.php" class="ml-3 text-gray-500">Kembali</a>
    </form>
</div>

</body>
</html>
