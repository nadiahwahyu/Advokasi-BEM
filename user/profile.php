<?php
session_start();
include '../koneksi.php'; // sesuaikan dengan file koneksi kamu

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit;
}

$username = $_SESSION['username'];

// Ambil data pengguna
$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$user = mysqli_fetch_assoc($query);

// Update profil
if (isset($_POST['update'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];

    // Jika upload foto baru
    if (!empty($_FILES['photo']['name'])) {
        $target_dir = "../uploads/";
        $photo_name = basename($_FILES["photo"]["name"]);
        $target_file = $target_dir . $photo_name;
        move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

        $photo_query = ", photo='$photo_name'";
    } else {
        $photo_query = "";
    }

    mysqli_query($conn, "UPDATE users SET fullname='$fullname', email='$email' $photo_query WHERE username='$username'");
    header("Location: profile.php?success=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #ffb6c1, #ff69b4);
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            max-width: 700px;
            background: #fff;
            margin: 50px auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #ff69b4;
        }
        .profile-pic {
            display: block;
            margin: 20px auto;
            border-radius: 50%;
            width: 130px;
            height: 130px;
            object-fit: cover;
            border: 4px solid #ff69b4;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="email"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 14px;
        }
        button {
            background: #ff69b4;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 12px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #ff1493;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #ff1493;
            text-decoration: none;
        }
        .back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Profil Pengguna</h2>
    <?php if (isset($_GET['success'])): ?>
        <div class="success">Profil berhasil diperbarui!</div>
    <?php endif; ?>

    <img src="../uploads/<?php echo $user['photo'] ?: 'default.png'; ?>" class="profile-pic" alt="Foto Profil">

    <form action="" method="post" enctype="multipart/form-data">
        <label>Nama Lengkap</label>
        <input type="text" name="fullname" value="<?php echo $user['fullname']; ?>" required>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>

        <label>Ganti Foto Profil</label>
        <input type="file" name="photo" accept="image/*">

        <button type="submit" name="update">Simpan Perubahan</button>
    </form>

    <a href="../dashboard.php" class="back">← Kembali ke Dashboard</a>
</div>

</body>
</html>
