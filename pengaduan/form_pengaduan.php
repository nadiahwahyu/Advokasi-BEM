<!DOCTYPE html>
<html>
<head>
    <title>Form Pengaduan Mahasiswa</title>
</head>
<body>
    <h2>Form Pengaduan Mahasiswa - Okta (Skema 2)</h2>

    <form method="post" action="simpan_pengaduan.php">

        <!-- Okta menambahkan No HP di posisi paling atas -->
        <label>No HP:</label><br>
        <input type="text" name="no_hp" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Isi Pengaduan:</label><br>
        <textarea name="isi" rows="5" cols="40" required></textarea><br><br>

        <button type="submit">Kirim Pengaduan</button>

    </form>
</body>
</html>
