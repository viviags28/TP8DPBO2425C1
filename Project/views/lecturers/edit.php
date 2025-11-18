<h2>Edit Dosen</h2>

<form method="POST" action="index.php?controller=lecturer&action=update&id=<?= $lecturer['id'] ?>">
    Nama:<br>
    <input type="text" name="name" value="<?= $lecturer['name'] ?>" required><br><br>

    NIDN:<br>
    <input type="text" name="nidn" value="<?= $lecturer['nidn'] ?>" required><br><br>

    Phone:<br>
    <input type="text" name="phone" value="<?= $lecturer['phone'] ?>"><br><br>

    Join Date:<br>
    <input type="date" name="join_date" value="<?= $lecturer['join_date'] ?>"><br><br>

    Department:<br>
    <select name="department_id">
        <?php foreach ($departments as $d) : ?>
            <option value="<?= $d['id'] ?>" 
                <?= $d['id'] == $lecturer['department_id'] ? 'selected' : '' ?>>
                <?= $d['department_name'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <button type="submit">Update</button>
</form>
