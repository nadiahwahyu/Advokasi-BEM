<?php
require_once '../db.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM laporan_advokasi WHERE id=$id"));

if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $query = "UPDATE laporan_advokasi SET judul='$judul', isi='$isi' WHERE id=$id";
    mysqli_query($koneksi, $query);
    header("Location: lihat_laporan.php");
}
?>
<form method="POST">
    <input type="text" name="judul" value="<?= $data['judul'] ?>" required>
    <textarea name="isi" required><?= $data['isi'] ?></textarea>
    <button type="submit" name="update">Update</button>
</form>
