<?php
require_once '../db.php';

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tanggal = date('Y-m-d');
    $penulis = 'Ika Nofalia'; // bisa diganti sesuai session user

    $query = "INSERT INTO laporan_advokasi (judul, isi, tanggal, penulis)
              VALUES ('$judul', '$isi', '$tanggal', '$penulis')";
    if (mysqli_query($koneksi, $query)) {
        echo "✅ Laporan berhasil ditambahkan!";
    } else {
        echo "❌ Gagal menambah laporan: " . mysqli_error($koneksi);
    }
}
?>
<form method="POST">
    <input type="text" name="judul" placeholder="Judul Laporan" required>
    <textarea name="isi" placeholder="Isi Laporan" required></textarea>
    <button type="submit" name="simpan">Simpan</button>
</form>
