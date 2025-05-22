<!DOCTYPE html>
<html>

<head>
    <title>Register</title> <!-- Judul halaman registrasi -->
</head>

<body>
    <h2>Register</h2>

    <!--
        Form registrasi user baru, kirim data via POST ke /register
    -->
    <form method="post" action="/register">
        <label>Username:</label><br>
        <!-- Input username baru, wajib diisi -->
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <!-- Input password baru, wajib diisi -->
        <input type="password" name="password" required><br><br>

        <!-- Tombol submit untuk daftar -->
        <button type="submit">Register</button>
    </form>

    <!--
        Link ke halaman login jika sudah punya akun
    -->
    <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
</body>

</html>