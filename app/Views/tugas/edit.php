<!DOCTYPE html>
<html>

<head>
    <title>Edit Tugas</title> <!-- Judul halaman edit tugas -->
</head>

<body>
    <h2>Edit Tugas</h2>

    <!--
        Form edit tugas.
        Data sudah diisi sesuai data tugas yang diambil dari database,
        sehingga user bisa mengubah dan menyimpan perubahan.
    -->
    <form method="post" action="/tugas/edit/<?= $tugas['id'] ?>">
        <label>Judul:</label><br>
        <input type="text" name="judul" value="<?= esc($tugas['judul']) ?>" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" required><?= esc($tugas['deskripsi']) ?></textarea><br><br>

        <label>Deadline:</label><br>
        <input type="date" name="deadline" value="<?= esc($tugas['deadline']) ?>" required><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="Belum Selesai" <?= $tugas['status'] === 'Belum Selesai' ? 'selected' : '' ?>>Belum Selesai</option>
            <option value="Selesai" <?= $tugas['status'] === 'Selesai' ? 'selected' : '' ?>>Selesai</option>
        </select><br><br>

        <button type="submit">Update</button>
    </form>

    <!-- Link kembali ke halaman daftar tugas -->
    <a href="/tugas">Kembali</a>
</body>

</html>