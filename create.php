<?php
include 'database.php';

if (isset($_POST['simpan'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO users VALUES ('', '$name', '$email')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">Tambah User</h1>

    <form method="POST">
        <input type="text" name="name" placeholder="Nama"
            class="w-full border p-2 mb-3 rounded" required>

        <input type="email" name="email" placeholder="Email"
            class="w-full border p-2 mb-3 rounded" required>

        <button name="simpan"
            class="bg-blue-500 text-white px-4 py-2 rounded">
            Simpan
        </button>

        <a href="index.php" class="ml-3 text-gray-500">Kembali</a>
    </form>
</div>

</body>
</html>
