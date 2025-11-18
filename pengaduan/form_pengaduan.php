<!DOCTYPE html>
<html>
<head>
    <h2>Form Pengaduan Mahasiswa - Ika</h2>
</head>
<body>
    <h2>Form Pengaduan Mahasiswa (Update Nadiah)</h2>
    <form method="post" action="simpan_pengaduan.php">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Jurusan:</label><br>
        <input type="text" name="jurusan"><br><br>

        <label>Isi Pengaduan:</label><br>
        <textarea name="isi" rows="5" cols="40" required></textarea><br><br>

        <button type="submit">Kirim Pengaduan</button>
    </form>
</body>
</html>
