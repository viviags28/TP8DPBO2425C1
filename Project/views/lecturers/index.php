<h2>Daftar Dosen</h2>
<a href="index.php?controller=lecturer&action=create">Tambah Dosen</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NIDN</th>
        <th>Phone</th>
        <th>Join Date</th>
        <th>Department</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($lecturers as $l) : ?>
        <tr>
            <td><?= $l['id'] ?></td>
            <td><?= $l['name'] ?></td>
            <td><?= $l['nidn'] ?></td>
            <td><?= $l['phone'] ?></td>
            <td><?= $l['join_date'] ?></td>
            <td><?= $l['department_name'] ?></td>

            <td>
                <a href="index.php?controller=lecturer&action=edit&id=<?= $l['id'] ?>">Edit</a> |
                <a href="index.php?controller=lecturer&action=delete&id=<?= $l['id'] ?>" onclick="return confirm('Hapus?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
