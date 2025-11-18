<?php
// Konfigurasi database
$host = "localhost"; // Nama host
$user = "root";      // Username default MySQL di XAMPP
$pass = "";          // Password default (kosong)
$db   = "advokasi_bem"; // Nama database

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    // echo "Koneksi berhasil!"; // Bisa diaktifkan untuk tes
}
?>
