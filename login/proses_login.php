<?php
session_start();
include 'koneksi.php';

// Tangkap data dari form login
$email    = $_POST['email'];
$password = $_POST['password'];

// Cek apakah email terdaftar di database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Simpan data user ke session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['email'] = $user['email'];

        echo "Login berhasil! Selamat datang, " . $user['nama'] . "<br>";
        echo "<a href='logout.php'>Logout</a>";
    } else {
        echo "Password salah. <a href='login.php'>Coba lagi</a>";
    }
} else {
    echo "Email tidak ditemukan. <a href='register.php'>Daftar dulu</a>";
}

// Tutup koneksi
mysqli_close($conn);
?>
