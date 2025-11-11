<?php
// Menghubungkan dengan file koneksi
include 'koneksi.php';

// Menangkap data dari form register
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$password = $_POST['password'];

// Enkripsi password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Query untuk memasukkan data user ke database
$sql = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$hashed_password')";

// Eksekusi query dan cek hasil
if (mysqli_query($conn, $sql)) {
    echo "Registrasi berhasil! <a href='login.php'>Klik di sini untuk login</a>";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
