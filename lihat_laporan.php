<?php
require_once '../db.php';
$result = mysqli_query($koneksi, "SELECT * FROM laporan_advokasi ORDER BY tanggal DESC");
?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Penulis</th>
        <th>Aksi</th>
    </tr>
    <?php $no=1; while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['judul'] ?></td>
        <td><?= $row['tanggal'] ?></td>
        <td><?= $row['penulis'] ?></td>
        <td>
            <a href="edit_laporan.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="hapus_laporan.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus laporan ini?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
