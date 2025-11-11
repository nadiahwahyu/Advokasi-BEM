<?php
require_once '../db.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM laporan_advokasi WHERE id=$id");
header("Location: lihat_laporan.php");
?>
