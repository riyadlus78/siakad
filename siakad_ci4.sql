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

CREATE TABLE IF NOT EXISTS dosen (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nidn VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    prodi VARCHAR(100) NOT NULL
);

INSERT INTO dosen (nidn, nama, prodi)
VALUES
('012345', 'Dr. Ahmad', 'Sistem Informasi'),
('067890', 'Rina, M.Kom.', 'Sistem Informasi');

CREATE TABLE IF NOT EXISTS matakuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    sks INT NOT NULL
);

INSERT INTO matakuliah (kode, nama, sks)
VALUES
('SI101', 'Pemrograman Web', 3),
('SI102', 'Sistem Informasi', 3),
('SI103', 'Basis Data', 3);
