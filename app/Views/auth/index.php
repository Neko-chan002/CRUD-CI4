<!DOCTYPE html>
<html>

<head>
    <title>Daftar Tugas</title> <!-- Judul halaman daftar tugas -->
</head>

<body>
    <h2>Daftar Tugas</h2>

    <!--
        Link untuk menambah tugas baru dan tombol logout
    -->
    <a href="/tugas/tambah">+ Tambah Tugas</a> | <a href="/logout">Logout</a>

    <!--
        Menampilkan list tugas dalam bentuk list (<ul>).
        Data $tugas diambil dari controller Tugas::index dan berisi array tugas user yang login
    -->
    <ul>
        <?php foreach ($tugas as $t): ?>
            <li>
                <!-- Judul tugas, status, dan deadline -->
                <strong><?= esc($t['judul']) ?></strong> - <?= esc($t['status']) ?> (Deadline: <?= esc($t['deadline']) ?>)
                <br>
                <!-- Deskripsi tugas -->
                <?= esc($t['deskripsi']) ?>
                <br>

                <!--
                    Link edit dan hapus untuk masing-masing tugas.
                    Link hapus ada konfirmasi lewat javascript.
                -->
                <a href="/tugas/edit/<?= $t['id'] ?>">Edit</a> |
                <a href="/tugas/hapus/<?= $t['id'] ?>" onclick="return confirm('Hapus tugas ini?')">Hapus</a>
                <hr> <!-- Garis pemisah antar tugas -->
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>