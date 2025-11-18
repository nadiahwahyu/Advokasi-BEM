<?php
// Jika ingin memakai session login, bisa aktifkan ini:
// session_start();
// if (!isset($_SESSION['username'])) {
//     header("Location: login/login.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advokasi BEM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        header {
            background: #0066cc;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            margin: 40px auto;
            max-width: 800px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        .menu a {
            text-decoration: none;
            background: #0088ff;
            color: white;
            padding: 15px 25px;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }
        .menu a:hover {
            background: #005fa3;
        }
        footer {
            margin-top: 40px;
            text-align: center;
            color: #555;
            padding: 10px;
        }
    </style>
</head>
<body>

<header>
    <h1>Advokasi BEM</h1>
    <p>Portal Pelayanan Pengaduan dan Pelaporan</p>
</header>

<div class="container">
    <h2>Menu Utama</h2>
    <div class="menu">

        <a href="tambah_laporan.php">Tambah Laporan</a>
        <a href="lihat_laporan.php">Lihat Laporan</a>
        <a href="pengaduan/form_pengaduan.php">Form Pengaduan</a>
        <a href="pengaduan/list_pengaduan.php">Daftar Pengaduan</a>
        <a href="user/profile.php">Profil Pengguna</a>
        <a href="login/login.php">Login</a>
        <a href="logout.php">Logout</a>

    </div>
</div>

<footer>
    © 2025 Advokasi BEM • Sistem Informasi Pengaduan Mahasiswa
</footer>

</body>
</html>
