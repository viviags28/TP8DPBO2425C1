<h2>Daftar Department</h2>
<a href="index.php?controller=department&action=create">Tambah Department</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama Department</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($departments as $d) : ?>
        <tr>
            <td><?= $d['id'] ?></td>
            <td><?= $d['department_name'] ?></td>
            <td>
                <a href="index.php?controller=department&action=edit&id=<?= $d['id'] ?>">Edit</a> |
                <a href="index.php?controller=department&action=delete&id=<?= $d['id'] ?>" onclick="return confirm('Hapus?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
