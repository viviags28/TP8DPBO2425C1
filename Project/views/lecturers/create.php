<h2>Tambah Dosen</h2>

<form method="POST" action="index.php?controller=lecturer&action=store">
    Nama:<br>
    <input type="text" name="name" required><br><br>

    NIDN:<br>
    <input type="text" name="nidn" required><br><br>

    Phone:<br>
    <input type="text" name="phone"><br><br>

    Join Date:<br>
    <input type="date" name="join_date"><br><br>

    Department:<br>
    <select name="department_id">
        <?php foreach ($departments as $d) : ?>
            <option value="<?= $d['id'] ?>"><?= $d['department_name'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Simpan</button>
</form>
