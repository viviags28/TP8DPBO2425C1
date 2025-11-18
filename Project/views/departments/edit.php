<h2>Edit Department</h2>

<form method="POST" action="index.php?controller=department&action=update&id=<?= $department['id'] ?>">
    <label>Nama Department:</label><br>
    <input type="text" name="department_name" value="<?= $department['department_name'] ?>" required><br><br>

    <button type="submit">Update</button>
</form>
