<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Registrasi</title>
</head>
<body>
  <h2>Form Registrasi User</h2>
  <form action="proses_register.php" method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Daftar</button>
  </form>

  <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
</body>
</html>
