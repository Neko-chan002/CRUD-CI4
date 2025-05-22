<!-- app/Views/tugas/index.php -->

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Tugas</title>
    <!-- Meta charset untuk encoding karakter -->
</head>

<body>

    <!-- Judul halaman -->
    <h1>Daftar Tugas</h1>

    <!-- Link untuk tambah tugas baru dan logout -->
    <p>
        <a href="/tugas/tambah">Tambah Tugas Baru</a> |
        <a href="/logout">Logout</a>
    </p>

    <!-- Cek apakah ada data tugas yang diteruskan dari controller -->
    <?php if (!empty($tugas)) : ?>
        <!-- Tabel untuk menampilkan daftar tugas -->
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <!-- Header tabel -->
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Looping data tugas -->
                <?php foreach ($tugas as $t) : ?>
                    <tr>
                        <!-- Tampilkan data tugas, pakai esc() untuk keamanan XSS -->
                        <td><?= esc($t['judul']) ?></td>
                        <td><?= esc($t['deskripsi']) ?></td>
                        <td><?= esc($t['deadline']) ?></td>
                        <td><?= esc($t['status']) ?></td>
                        <td>
                            <!-- Link edit tugas -->
                            <a href="/tugas/edit/<?= $t['id'] ?>">Edit</a> |
                            <!-- Link hapus tugas, dengan konfirmasi sebelum hapus -->
                            <a href="/tugas/hapus/<?= $t['id'] ?>" onclick="return confirm('Yakin hapus tugas ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Jika tidak ada data tugas, tampilkan pesan ini -->
    <?php else: ?>
        <p>Belum ada tugas yang dibuat.</p>
    <?php endif; ?>

</body>

</html>