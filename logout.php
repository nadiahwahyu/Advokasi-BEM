<?php
// Mulai session
session_start();

// Hapus semua session yang tersimpan
session_unset();
session_destroy();

// Arahkan kembali ke halaman login
header("Location: login/login.php");
exit();
?>
