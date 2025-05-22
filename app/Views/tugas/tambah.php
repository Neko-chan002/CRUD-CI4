<!DOCTYPE html>
<html>

<head>
    <title>Tambah Tugas</title> <!-- Judul halaman tambah tugas -->
</head>

<body>
    <h2>Tambah Tugas</h2>

    <!--
        Form tambah tugas baru.
        Data dikirim POST ke controller Tugas::tambah
    -->
    <form method="post" action="/tugas/tambah">
        <?= csrf_field() ?>
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi" required></textarea><br><br>

        <label>Deadline:</label><br>
        <input type="date" name="deadline" required><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="Belum Selesai">Belum Selesai</option>
            <option value="Selesai">Selesai</option>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>

    <!-- Link kembali ke halaman daftar tugas -->
    <a href="/tugas">Kembali</a>
</body>

</html>