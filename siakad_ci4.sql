CREATE DATABASE IF NOT EXISTS siakad_ci4;
USE siakad_ci4;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    prodi VARCHAR(100) NOT NULL
);

INSERT INTO mahasiswa (nim, nama, prodi)
VALUES
('23001', 'Andi', 'Sistem Informasi'),
('23002', 'Budi', 'Sistem Informasi'),
('23003', 'Citra', 'Manajemen Informatika'),
('23004', 'Dina', 'Sistem Informasi');
