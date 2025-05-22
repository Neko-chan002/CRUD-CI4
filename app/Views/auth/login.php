<!DOCTYPE html>
<html>

<head>
    <title>Login</title> <!-- Judul halaman yang muncul di tab browser -->
</head>

<body>
    <h2>Login</h2> <!-- Judul utama halaman -->

    <!--
        Jika ada pesan error dari session flashdata (misal login gagal),
        tampilkan pesan tersebut dengan warna merah
    -->
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <!--
        Form login dengan method POST.
        Aksi form diarahkan ke URL /login (ditangani oleh controller Auth::login)
    -->
    <form method="post" action="/login">
        <label>Username:</label><br>
        <!-- Input username, wajib diisi -->
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <!-- Input password, wajib diisi -->
        <input type="password" name="password" required><br><br>

        <!-- Tombol submit untuk mengirim form -->
        <button type="submit">Login</button>
    </form>

    <!--
        Tautan untuk pindah ke halaman register jika belum punya akun
    -->
    <p>Belum punya akun? <a href="/register">Daftar di sini</a></p>
</body>

</html>