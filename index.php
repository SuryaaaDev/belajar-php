<?php
include 'database.php';
$data = mysqli_query($conn, "SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-4">Data User</h1>

    <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
        + Tambah Data
    </a>

    <table class="w-full border mt-4">
        <tr class="bg-gray-200">
            <th class="border p-2">No</th>
            <th class="border p-2">Nama</th>
            <th class="border p-2">Email</th>
            <th class="border p-2">Aksi</th>
        </tr>

        <?php $no = 1; ?>
        <?php while($row = mysqli_fetch_assoc($data)) : ?>
        <tr>
            <td class="border p-2 text-center"><?= $no++ ?></td>
            <td class="border p-2"><?= $row['name'] ?></td>
            <td class="border p-2"><?= $row['email'] ?></td>
            <td class="border p-2 text-center">
                <a href="edit.php?id=<?= $row['id'] ?>" class="text-yellow-500">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" class="text-red-500"
                   onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>
