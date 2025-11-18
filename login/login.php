<?php
    
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Advokasi BEM</title>

    <style>
        body{
            font-family: Arial;
            background: #f2f2f2;
        }
        .container{
            width: 350px;
            margin: 80px auto;
            padding: 25px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            border-radius: 10px;
        }
        input{
            width: 100%;
            padding: 10px;
            margin: 7px 0;
            border-radius: 5px;
            border: 1px solid #bbb;
        }
        button{
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover{
            background: #0056b3;
        }
        .alert{
            background: #ffdddd;
            padding: 10px;
            color: #b30000;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 style="text-align:center;">Login</h2>

        <!-- Notifikasi (jika gagal login) -->
        <?php if(isset($_SESSION['error'])){ ?>
            <div class="alert">
                <?= $_SESSION['error']; ?>
            </div>
        <?php unset($_SESSION['error']); } ?>

        <form action="proses_login.php" method="POST">
            
            <label>Email</label>
            <input type="text" name="email" placeholder="Masukkan email" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>

            <button type="submit">Login</button>
        </form>

        <p style="text-align:center; margin-top:15px;">
            Belum punya akun? <a href="register.php">Daftar</a>
        </p>
    </div>

</body>
</html>
