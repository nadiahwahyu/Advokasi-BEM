CREATE TABLE laporan_advokasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    isi TEXT NOT NULL,
    tanggal DATE NOT NULL,
    penulis VARCHAR(100)
);
