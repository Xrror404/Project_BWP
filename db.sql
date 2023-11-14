CREATE DATABASE db_sim;
USE db_sim;

CREATE TABLE jurusan (
    kode_jurusan VARCHAR(8),
    nama_jurusan VARCHAR(40),
    PRIMARY KEY (kode_jurusan)
);

CREATE TABLE matkul (
    kode_matkul INT(3),
    nama_matkul VARCHAR(40),
    jurusan_matkul VARCHAR(8),
    FOREIGN KEY (jurusan_matkul) REFERENCES jurusan(kode_jurusan),
    PRIMARY KEY (kode_matkul)
);

CREATE TABLE mahasiswa (
    nrp_mhs VARCHAR(9),
    nama_mhs VARCHAR(40),
    angkatan_mhs INT(4),
    password_mhs VARCHAR(20),
    jurusan_mhs VARCHAR(8),
    ipk_mhs FLOAT,
    FOREIGN KEY (jurusan_mhs) REFERENCES jurusan(kode_jurusan),
    PRIMARY KEY (nrp_mhs)
);

CREATE TABLE pengumuman (
    id_pengumuman INT(10),
    judul_pengumuman VARCHAR(50),
    PRIMARY KEY (id_pengumuman)
);

CREATE TABLE dosen (
    kode_dosen INT(9),
    nama_dosen VARCHAR(40),
    PRIMARY KEY (kode_dosen)
);

CREATE TABLE dosen_pengajar (
    id_pengajar INT(3),
    kode_dosen INT(9),
    kode_matkul INT(3),
    FOREIGN KEY (kode_dosen) REFERENCES dosen(kode_dosen),
    FOREIGN KEY (kode_matkul) REFERENCES matkul(kode_matkul),
    PRIMARY KEY (id_pengajar)
);

INSERT INTO jurusan (kode_jurusan, nama_jurusan)
VALUES
    (10, 'Elektro'),
    (11, 'Informatika'),
    (12, 'Industri'),
    (14, 'Desain Produk'),
    (17, 'Desain Komunikasi Visual'),
    (18, 'Sistem Informasi Bisnis');

INSERT INTO matkul (kode_matkul, nama_matkul, jurusan_matkul)
VALUES
    (101, 'BWP', 11),
    (102, 'PAD', 12),
    (103, 'ADS', 14),
    (104, 'RPL', 10),
    (105, 'SDL', 18),
    (106, 'PCD', 17);
    
INSERT INTO dosen (kode_dosen, nama_dosen)
VALUES
    (001, 'Mikhael Setiawan'),
    (002, 'Reddy Alexandro Harianto'),
    (003, 'Yosi Kristian'),
    (004, 'Eka Rahayu Setyaningsih'),
    (005, 'Yafet Jaya Kusumo'),
    (006, 'Lukman Zaman PCSW');

INSERT INTO mahasiswa (nrp_mhs, nama_mhs, angkatan_mhs, jurusan_mhs, ipk_mhs)
VALUES
    ('222117045', 'Michael Setiabudi', 2022, "setiabudi123", 11, 3.55),
    ('222117047', 'Michaell Ezekial', 2022, "meme69420", 11, 2.98),
    ('222117039', 'Kelun Kaka Santoso', 2022, "mrkeyun",11, 3.15),
    ('222117068', 'Yoga Pramana Syahputra Teguh', 2022, "69420666", 11, 3.61),
    ('223172098', 'Dahren Ericsson', 2023, "ligmaballs", 17, 3.85),
    ('221180185', 'Ivan Santoso', 2021, "dunstanganteng69", 18, 3.78);


INSERT INTO pengumuman (id_pengumuman, judul_pengumuman)
VALUES
    (1, '[BAA] Pelaksanaan Pra Seminar TA November 2023'),
    (2, '[BAA] Penerbitan SK TA/Thesis Periode Oktober 2023'),
    (3, 'Pendaftaran Placement Test ECC Periode Gasal 2023/2024'),
    (4, '[BAA] Pendaftaran Pra Seminar Periode November 2023'),
    (5, 'BERITA DUKA'),
    (6, 'Daftar Mahasiswa Yang Belum Mengumpulkan Pas Foto KTM'),
    (7, '[BAA] Jadwal UTS Semester Gasal 2023-2024'),
    (8, '[BAA] Jadwal Seminar TA/THESIS Oktober 2023'),
    (9, 'Pengumuman Kegiatan Wisuda XL 2023'),
    (10, 'Sertifikat ECC (Susulan) Yang Sudah Disahkan Dan Siap Diambil');

INSERT INTO dosen_pengajar (id_pengajar, kode_dosen, kode_matkul)
VALUES
    (1, 001, 101),
    (2, 002, 102),
    (3, 003, 103),
    (4, 004, 104),
    (5, 005, 105),
    (6, 006, 106);