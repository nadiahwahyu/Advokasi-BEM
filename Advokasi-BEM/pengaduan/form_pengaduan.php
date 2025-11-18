<!DOCTYPE html>
<html>
<head>
    <title>Form Pengaduan Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:#f5f5f5;
            padding: 30px;
        }
        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 450px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 7px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 12px;
            background: #2d6cdf;
            color: white;
            border: none;
            width: 100%;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }
        button:hover {
            background:#1c4fb7;
        }
        h2 {
            text-align:center;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- SKEMA 1 (EDIT BERSAMA) -->
    <h2>Form Pengaduan Mahasiswa - Aina Edit</h2>

    <form method="post" action="simpan_pengaduan.php">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>NIM:</label>
        <input type="text" name="nim" required>

        <label>Isi Pengaduan:</label>
        <textarea name="isi" rows="5" required></textarea>

        <button type="submit">Kirim Pengaduan</button>
    </form>

</div>

<!-- FOOTER SKEMA 2 -->
<footer style="
    margin-top:40px;
    padding:25px 10px;
    text-align:center;
    background:#ffffff;
    border-top:2px solid #dcdcdc;
    color:#555;
    font-family: 'Segoe UI', sans-serif;
    font-size:14px;
">
    <div style="margin-bottom:5px; font-weight:600; font-size:15px; color:#333;">
        Layanan Pengaduan Mahasiswa BEM POLINELA
    </div>
    <div style="opacity:0.8;">
        Membangun Transparansi • Mengutamakan Aspirasi • Melayani dengan Integritas
    </div>
    <div style="margin-top:8px; font-size:12px; color:#777;">
        &copy; 2025 BEM Politeknik Negeri Lampung • All Rights Reserved
    </div>
</footer>

</body>
</html>
