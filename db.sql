CREATE DATABASE db_sim;
USE db_sim;

CREATE TABLE jurusan (
    kode_jurusan VARCHAR(8),
    nama_jurusan VARCHAR(40),
    PRIMARY KEY (kode_jurusan)
);

CREATE TABLE matkul (
    id_matkul INT(3),
    nama_matkul VARCHAR(40),
    kode_jurusan_matkul VARCHAR(8),
    sks_matkul INT(1),
    FOREIGN KEY (kode_jurusan_matkul) REFERENCES jurusan(kode_jurusan),
    PRIMARY KEY (id_matkul)
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


CREATE TABLE matkul_diambil (
    id INT(5) PRIMARY KEY,
    nama_mhs VARCHAR(50),
    id_matkul_diambil INT(3),
    FOREIGN KEY (nama_mhs) REFERENCES mahasiswa(nama_mhs),
    FOREIGN KEY (id_matkul_diambil) REFERENCES matkul(id_matkul)
);

CREATE TABLE poin_mhs (
    id INT(2) PRIMARY KEY,
    nrp_mahasiswa VARCHAR(9),
    poin_minatbakat INT(4),
    poin_penalaran INT(4),
    poin_organisasi INT(4),
    poin_kerohanian INT(4),
    FOREIGN KEY (nrp_mahasiswa) REFERENCES mahasiswa(nrp_mhs)
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
    (11, 'Informatika'),
    (17, 'Desain Komunikasi Visual'),
    (18, 'Sistem Informasi Bisnis');

INSERT INTO matkul (id_matkul, nama_matkul, kode_jurusan_matkul, sks_matkul)
VALUES
  (1, 'Rupa Dasar', '17', 3),
  (2, 'Pengantar Studi DKV', '17', 3),
  (3, 'Komputer Aplikasi', '17', 3),
  (4, 'Fotografi Dasar', '17', 3),
  (5, 'Dasar Teknik Menggambar', '17', 2),
  (6, 'Bahasa Indonesia', '17', 2),
  (7, 'Teknik Presentasi', '17', 2),
  (8, 'Komputer Aplikasi', '17', 3),
  (9, 'Konsep Visual', '17', 3),
  (10, 'Estetika & Tinjauan Desain', '17', 3),
  (11, 'Tipografi', '17', 3),
  (12, 'Fotografi Aplikatif', '17', 3),
  (13, 'Menggambar Figur', '17', 3),
  (14, 'Sejarah Seni Rupa', '17', 3),
  (15, 'Komunikasi Visual', '17', 3),
  (16, 'Komunikasi Visual Aplikatif', '17', 3),
  (17, 'Teknik Modeling 3D', '17', 3),
  (18, 'Proses Produksi Grafika', '17', 3),
  (19, 'Desain Grafis', '17', 3),
  (20, 'Ilustrasi', '17', 3),
  (21, 'Bahasa Inggris', '17', 3),
  (22, 'Strategi Medis', '17', 3),
  (23, 'Strategi Media Aplikatif', '17', 3),
  (24, 'Animasi 3D', '17', 3),
  (25, 'Audio Visual', '17', 3),
  (26, 'Ilustrasi Tematik', '17', 3),
  (27, 'Generative Art', '17', 3),
  (28, 'Pemasaran Terpadu', '17', 3),
  (29, 'Pemasaran Terpadu Aplikatif', '17', 3),
  (30, 'Metodologi Desain', '17', 3),
  (31, 'Audio Visual Aplikatif', '17', 3),
  (32, 'Pancasila', '17', 2),
  (33, 'Desain Web', '17', 3),
  (34, 'Manejemen DKV', '17', 3),
  (35, 'Portofolio', '17', 3),
  (36, 'Kapita Selecta', '17', 3),
  (37, 'Etika Profesi', '17', 3),
  (38, 'Kewirausahaan', '17', 3),
  (39, 'Desain Media Interaktif', '17', 3),
  (40, 'Pendidikan Kewarganegaraan', '17', 2),
  (41, 'Algoritma dan Pemrograman', '18', 3),
  (42, 'ICT Global Trend', '18', 3),
  (43, 'Matematika Bisnis', '18', 3),
  (44, 'Pengantar Bisnis', '18', 3),
  (45, 'Teknologi Multimedia', '18', 3),
  (46, 'Paperless Office', '18', 3),
  (47, 'Pemrograman Berorientasi Objek', '18', 3),
  (48, 'Pemrograman Web', '18', 3),
  (49, 'Interaksi Manusia dan Komputer', '18', 3),
  (50, 'Akuntansi', '18', 3),
  (51, 'Creative Design', '18', 3),
  (52, 'Manajemen Keuangan', '18', 3),
  (53, 'Struktur Data', '18', 3),
  (54, 'Pemrograman Visual', '18', 3),
  (55, 'Manajemen Basis Data', '18', 3),
  (56, 'Sistem Informasi Manajemen', '18', 3),
  (57, 'Analisa dan Desain Sistem Informasi', '18', 3),
  (58, 'Analisa Investasi', '18', 3),
  (59, 'Bahasa Inggris', '18', 2),
  (60, 'Aplikasi Client Server', '18', 3),
  (61, 'Pengembangan App Bisnis Berbasis Internet', '18', 3),
  (62, 'Proses Bisnis', '18', 3),
  (63, 'Rekayasa Perangkat Lunak', '18', 3),
  (64, 'Agama', '18', 2),
  (65, 'Bahasa Indonesia', '18', 2),
  (66, 'Probabilitas dan Statistik', '18', 3),
  (67, 'Framework Aplikasi Internet', '18', 3),
  (68, 'Jaringan Komputer', '18', 3),
  (69, 'Pemodelan Berorientasi Objek', '18', 3),
  (70, 'Manajemen Proyek Sistem Informasi', '18', 3),
  (71, 'Interactive System Design', '18', 3),
  (72, 'Technopreneurship', '18', 3),
  (73, 'Mobile App Development', '18', 3),
  (74, 'Design Patterns', '18', 3),
  (75, 'Proyek Bisnis', '18', 3),
  (76, 'Kapita Selekta', '18', 3),
  (77, 'Information Technology Infrastructure Library', '18', 3),
  (78, 'Pendidikan Kewarganegaraan', '18', 2),
  (79, 'Algoritma Pemrograman 1', '11', 3),
  (80, 'Introduction to Programming', '11', 3),
  (81, 'Front-End Web Design', '11', 3),
  (82, 'Bahasa Inggris', '11', 3),
  (83, 'Pengantar Teknologi Informasi', '11', 3),
  (84, 'Kalkulus', '11', 3),
  (85, 'Algoritma Pemrograman 2', '11', 3),
  (86, 'Struktur Data', '11', 3),
  (87, 'Pemrograman Berorientasi Objek', '11', 3),
  (88, 'Basis Data', '11', 3),
  (89, 'Interaksi Manusia Komputer', '11', 3),
  (90, 'Aljabar Linear dan Matrix', '11', 3),
  (91, 'Struktur Data Lanjut', '11', 3),
  (92, 'Pemrograman Aplikasi Desktop', '11', 3),
  (93, 'Analisa dan Desain Sistem', '11', 3),
  (94, 'Pengolahan Citra Digital', '11', 3),
  (95, 'Back-End Web Programming', '11', 3),
  (96, 'Matematika Diskrit dan Teori Graf', '11', 3),
  (97, 'Pancasila', '11', 2),
  (98, 'Statika Terapan', '11', 3),
  (99, 'Web Programming Framework', '11', 3),
  (100, 'Analisa dan Desain Sistem Berorientasi Objek', '11', 3),
  (101, 'Grafika Komputer', '11', 3),
  (102, 'Jaringan Komputer', '11', 3),
  (103, 'Sistem Digital', '11', 3),
  (104, 'Agama', '11', 2),
  (105, 'Bahasa Indonesia', '11', 2),
  (106, 'Probabilitas dan Statistik', '11', 3),
  (107, 'Web Service', '11', 3),
  (108, 'Rekayasa Perangkat Lunak', '11', 3),
  (109, 'Software Development Project', '11', 3),
  (110, 'Software Testing', '11', 3),
  (111, 'Artificial Intelligence', '11', 3),
  (112, 'Arsitektur dan Organisasi Komputer', '11', 3),
  (113, 'Mobile Device Programming', '11', 3),
  (114, 'Sistem Operasi', '11', 3),
  (115, 'Kapita Selekta dan Penulisan Proposal Skripsi', '11', 2),
  (116, 'Machine Learning', '11', 3),
  (117, 'Internet of Things', '11', 3),
  (118, 'Pendidikan Kewarganegaraan', '11', 2),
  (119, 'Bahasa Indonesia', '11', 2);

    
INSERT INTO dosen (kode_dosen, nama_dosen)
VALUES
    (001, 'Mikhael Setiawan'),
    (002, 'Reddy Alexandro Harianto'),
    (003, 'Yosi Kristian'),
    (004, 'Eka Rahayu Setyaningsih'),
    (005, 'Yafet Jaya Kusumo'),
    (006, 'Lukman Zaman PCSW');

INSERT INTO mahasiswa (nrp_mhs, nama_mhs, angkatan_mhs, password_mhs, jurusan_mhs, ipk_mhs)
VALUES
    ('222117045', 'Michael Setiabudi', 2022, "setiabudi123", 11, 3.55),
    ('222117047', 'Michaell Ezekial', 2022, "meme69420", 11, 2.98),
    ('222117039', 'Kelun Kaka Santoso', 2022, "mrkeyun",11, 3.15),
    ('222117068', 'Yoga Pramana Syahputra Teguh', 2022, "69420666", 11, 3.61),
    ('223172098', 'Dahren Ericsson', 2023, "ligmaballs", 17, 0.00),
    ('221180185', 'Ivan Santoso', 2021, "dunstanganteng69", 18, 3.78);

INSERT INTO matkul_diambil (id, nama_mhs, id_matkul_diambil)
VALUES
    (1, 'Michael Setiabudi', 91),
    (2, 'Michael Setiabudi', 92),
    (3, 'Michael Setiabudi', 93),
    (4, 'Michael Setiabudi', 94),
    (5, 'Michael Setiabudi', 95),
    (6, 'Michael Setiabudi', 96),
    (7, 'Michael Setiabudi', 97),

    (8, 'Michaell Ezekial', 91),
    (9, 'Michaell Ezekial', 92),
    (10, 'Michaell Ezekial', 93),
    (11, 'Michaell Ezekial', 94),
    (12, 'Michaell Ezekial', 95),
    (13, 'Michaell Ezekial', 96),
    (14, 'Michaell Ezekial', 97),

    (15, 'Kelun Kaka Santoso', 91),
    (16, 'Kelun Kaka Santoso', 92),
    (17, 'Kelun Kaka Santoso', 93),
    (18, 'Kelun Kaka Santoso', 94),
    (19, 'Kelun Kaka Santoso', 95),
    (20, 'Kelun Kaka Santoso', 96),
    (21, 'Kelun Kaka Santoso', 97),
    (22, 'Kelun Kaka Santoso', 108),

    (23, 'Yoga Pramana Syahputra Teguh', 91),
    (24, 'Yoga Pramana Syahputra Teguh', 92),
    (25, 'Yoga Pramana Syahputra Teguh', 93),
    (26, 'Yoga Pramana Syahputra Teguh', 94),
    (27, 'Yoga Pramana Syahputra Teguh', 95),
    (28, 'Yoga Pramana Syahputra Teguh', 96),
    (29, 'Yoga Pramana Syahputra Teguh', 97),
    (30, 'Yoga Pramana Syahputra Teguh', 108),

    (31, 'Dahren Ericsson', 1),
    (32, 'Dahren Ericsson', 2),
    (33, 'Dahren Ericsson', 3),
    (34, 'Dahren Ericsson', 4),
    (35, 'Dahren Ericsson', 5),
    (36, 'Dahren Ericsson', 6),
    (37, 'Dahren Ericsson', 7),
    (38, 'Dahren Ericsson', 8),

    (39, 'Ivan Santoso', 67),
    (40, 'Ivan Santoso', 68),
    (41, 'Ivan Santoso', 69),
    (42, 'Ivan Santoso', 70),
    (43, 'Ivan Santoso', 71),
    (44, 'Ivan Santoso', 72);

INSERT INTO poin_mhs (id, nrp_mahasiswa, poin_minatbakat, poin_penalaran, poin_organisasi, poin_kerohanian)
VALUES
    (1, '222117045', 400, 350, 100, 175),
    (2, '222117047', 550, 325, 175, 75),
    (3, '222117039', 450, 300, 150, 100),
    (4, '222117068', 450, 400, 300, 175),
    (5, '223172098', 400, 400, 200, 150),
    (6, '221180185', 500, 1025, 200, 125);

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