DROP DATABASE IF EXISTS db_sim;
CREATE DATABASE db_sim;
USE db_sim;

CREATE TABLE jurusan (
    id_jurusan INT PRIMARY KEY,
    nama_jurusan VARCHAR(50)
);

CREATE TABLE user (
    id_user VARCHAR(10) PRIMARY KEY,
    id_jurusan INT,
    nama_user VARCHAR(50),
    email_user VARCHAR(50),
    nmrtlp CHAR(12),
    role_user SMALLINT,
    user_username VARCHAR(30),
    user_password VARCHAR(255),
    user_added_date DATE,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id_jurusan)
);

CREATE TABLE matkul (
    id_matkul VARCHAR(5) PRIMARY KEY,
    nama_matkul VARCHAR(75),
    id_jurusan INT,
    sks_matkul SMALLINT,
    sms_matkul SMALLINT,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id_jurusan)
);

CREATE TABLE pengumuman (
    id_pengumuman CHAR(6) PRIMARY KEY,
    judul_pengumuman VARCHAR(255),
    isi_pengumuman VARCHAR(255),
    pengumuman_added_date DATE
);

CREATE TABLE poins (
    id_acara CHAR(6) PRIMARY KEY,
    nama_acara VARCHAR(255),
    tipe_acara SMALLINT,
    jml_poin INT,
    poin_added_date DATE
);

CREATE TABLE matkul_diambil_mhs (
    id_matkul_diambil_mhs VARCHAR(10) PRIMARY KEY,
    id_matkul VARCHAR(5),
    id_user VARCHAR(10),
    FOREIGN KEY (id_matkul) REFERENCES matkul(id_matkul),
    FOREIGN KEY (id_user) REFERENCES user(id_user)
);

CREATE TABLE matkul_diambil_dosen (
    id_matkul_diambil_dsn VARCHAR(10) PRIMARY KEY,
    id_matkul VARCHAR(5),
    id_user VARCHAR(10),
    FOREIGN KEY (id_matkul) REFERENCES matkul(id_matkul),
    FOREIGN KEY (id_user) REFERENCES user(id_user)
);

CREATE TABLE nilai (
    id_nilai VARCHAR(10) PRIMARY KEY,
    id_user VARCHAR(10),
    id_matkul VARCHAR(5),
    nilai_uts SMALLINT,
    nilai_uas SMALLINT,
    nilai_akhir SMALLINT,
    FOREIGN KEY (id_user) REFERENCES user(id_user),
    FOREIGN KEY (id_matkul) REFERENCES matkul(id_matkul)
);

CREATE TABLE file (
    id_file VARCHAR(5) PRIMARY KEY,
    nama_file VARCHAR(255),
    isi_file VARCHAR(255)
);

CREATE TABLE penerima_poin (
    id_pp VARCHAR(5) PRIMARY KEY,
    id_penerima VARCHAR(10),
    id_acara CHAR(6),
    FOREIGN KEY (id_penerima) REFERENCES user(id_user),
    FOREIGN KEY (id_acara) REFERENCES poins(id_acara)
);

INSERT INTO jurusan (id_jurusan, nama_jurusan)
VALUES
    (11, 'Informatika'),
    (17, 'Desain Komunikasi Visual'),
    (18, 'Sistem Informasi Bisnis');

INSERT INTO user (id_user, id_jurusan, nama_user, email_user, nmrtlp, role_user, user_username, user_password, user_added_date)
VALUES 
    ('MHSINF0001', 11, 'Michael Setiabudi', 'michael.s22@mhs.istts.ac.id', 082196236711, 0, '222117045', 'setiabudi123', '2022-06-31'),
    ('MHSINF0002', 11, 'Michaell Ezekial', 'michaell.e22@mhs.istts.ac.id', 081332075758, 0, '222117047', 'meme69420', '2022-06-31'),
    ('MHSINF0003', 11, 'Kelun Kaka Santoso', 'kelun.k22@mhs.istts.ac.id', 085172182144, 0, '222117039', 'mrkeyun', '2022-06-31'),
    ('MHSINF0004', 11, 'Yoga Pramana Syahputra Teguh', 'yoga.p22@mhs.istts.ac.id', 081380471118, 0, '222117068', '69420666', '2022-06-31'),
    ('MHSDKV0001', 17, 'Dahren Ericsson', 'dahren.e23@mhs.istts.ac.id', 087750999479, 0, '223172098', 'redfrosty', '2023-06-31'),
    ('MHSSIB0001', 18, 'Ivan Santoso', 'ivan.s21@mhs.istts.ac.id', 087853999381, 0, '221180185', 'dunstanganteng', '2021-06-31'),
    ('DSNINF0001', 11, 'Ir. Edwin Pramana, M.AppSc., Ph.D.', 'epramana@stts.edu', 081232576313, 1, 'edwin', 'edwinpramana', '1998-06-31'),
    ('DSNINF0002', 11, 'Dr. Yosi Kristian, S.Kom. M.Kom.', 'yosi@stts.edu', 081553779876, 1, 'yosi', 'yosikristian', '2004-06-31'),
    ('DSNINF0003', 11, 'Dr. Ir. Esther Irawati Setiawan, S.Kom, M.Kom', 'esther@stts.edu', 081492736548, 1, 'esther', 'estherirawati', '2008-06-31'),
    ('DSNINF0004', 11, 'Reddy Alexandro Harianto, S.Kom., M.Kom.', 'reddy@stts.edu', 081703331113, 1, 'reddy', 'reddyharianto', '2013-06-31'),
    ('DSNINF0005', 11, 'Grace Levina Dewi, S.Kom., M.Kom.', 'grace@stts.edu', 085817263904, 1, 'grace', 'gracedewi', '2013-06-31'),
    ('DSNINF0006', 11, 'Dr. Ir. Gunawan, M.Kom.', 'gunawan@stts.edu', 082635197482, 1, 'gunawan', 'gunawankom', '1993-06-31'),
    ('DSNINF0007', 11, 'Dr. Ir. Hj. Endang Setyati, M.T.', 'endang@stts.edu', 031729405816, 1, 'endang', 'endangsetyati', '1995-06-31'),
    ('DSNINF0008', 11, 'Dr. Lukman Zaman P.C.S.W., S.Kom., M.Kom.', 'lukman@stts.edu', 082561934027, 1, 'lukman', 'lukmanzaman', '1997-06-31'),
    ('DSNINF0009', 11, 'Dr. Ir. Joan Santoso, S.Kom., M.Kom.', 'joan@stts.edu', 082974305186, 1, 'joan', 'joansantoso', '2016-06-31'),
    ('DSNINF0010', 11, 'Dr. Ir. F.X. Ferdinandus, M.T.', 'ferdinandus@stts.edu', 085897261043, 1, 'ferdinandus', 'ferdinandusmt', '1997-06-31'),
    ('DSNINF0011', 11, 'Dr. Ir. Herman Budianto, M.M.', 'herman@stts.edu', 082340176925, 1, 'herman', 'hermanbudianto', '1993-06-31'),
    ('DSNINF0012', 11, 'Dr. Jenny Ngo, Msc.Ed.', 'jenny@stts.edu', 082176940583, 1, 'jenny', 'jennyngo', '2015-06-31'),
    ('DSNINF0013', 11, 'Ir. Suhatati Tjandra, M.Kom.', 'suhatati@stts.edu', 031850297364, 1, 'suhatati', 'suhatatitjandra', '1991-06-31'),
    ('DSNINF0014', 11, 'Ir. Tjwanda Putera Gunawan, MPd.', 'tjwanda@stts.edu', 081463902157, 1, 'tjwanda', 'tjwandagunawan', '1991-06-31'),
    ('DSNINF0015', 11, 'Yuliana Melita Pranoto, S.Kom. M.Kom.', 'yuliana@stts.edu', 082571349680, 1, 'yuliana', 'yulianamelita', '2002-06-31'),
    ('DSNINF0016', 11, 'Hendrawan Armanto, S.Kom., M.Kom.', 'hendrawan@stts.edu', 085810274936, 1, 'hendrawan', 'hendrawanarmanto', '2014-06-31'),
    ('DSNINF0017', 11, 'Eka Rahayu Setyaningsih, S.Kom., M.Kom.', 'eka@stts.edu', 081725940631, 1, 'eka', 'ekasetyaningsih', '2014-06-31'),
    ('DSNINF0018', 11, 'Ir. Iwan Chandra, S.Kom., M.Kom.', 'iwan@stts.edu', 085843691207, 1, 'iwan', 'iwanchandra', '2013-06-31'),
    ('DSNINF0019', 11, 'Kevin Setiono, S.Kom. M.Kom.', 'kevin@stts.edu', 082197365804, 1, 'kevin', 'kevinsetiono', '2017-06-31'),
    ('DSNINF0020', 11, 'Mikhael Setiawan, S.Kom. M.Kom.', 'mikhael@stts.edu', 031582047936, 1, 'mikhael', 'mikhaelsetiawan', '2014-06-31'),
    ('DSNINF0021', 11, 'Evan Kusuma Susanto, S.Kom., M.Kom.', 'evan@stts.edu', 081639204857, 1, 'evan', 'evansusanto', '2019-06-31'),
    ('DSNSIB0001', 18, 'Dr. John Doe, S.Kom., M.Kom.', 'john@stts.edu', '081234567890', 1, 'john', 'johndoe', '2015-06-31'),
    ('DSNSIB0002', 18, 'Dr. Jane Smith, S.Kom.', 'jane@stts.edu', '085678901234', 1, 'jane', 'janesmith', '2010-06-31'),
    ('DSNSIB0003', 18, 'Ir. Alex Johnson, M.Kom.', 'alex@stts.edu', '087654321098', 1, 'alex', 'alexjohnson', '2018-06-31'),
    ('DSNSIB0004', 18, 'William Thompson, S.Kom., M.Kom', 'william@stts.edu', '081234567891', 1, 'william', 'wilthom', '2013-06-31'),
    ('DSNSIB0005', 18, 'Dr. Emily Anderson, S.Kom.', 'emily@stts.edu', '085678901235', 1, 'emily', 'emilia', '2020-06-31'),
    ('DSNSIB0006', 18, 'Dr. Ir. Lucas Garcia, S.Kom., M.Kom.', 'lucas@stts.edu', '087654321099', 1, 'lucas', 'lucasgarcia', '2012-06-31'),
    ('DSNSIB0007', 18, 'Dr. Ir. Robert Hill, S.Kom., M.Kom.', 'robert@stts.edu', '081234567893', 1, 'robert', 'roberthill', '2014-06-31'),
    ('DSNSIB0008', 18, 'Dr. Ir. Natalie Reed, S.Kom., M.Kom.', 'natalie@stts.edu', '085678901237', 1, 'natalie', 'nataliereed', '2021-06-31'),
    ('DSNSIB0009', 18, 'Dr. Benjamin Parker, S.Kom., M.Kom.', 'benjamin@stts.edu', '087654321101', 1, 'benjamin', 'benjaminp', '2020-06-31'),
    ('DSNDKV0001', 17, 'Michael Brown, S.Des., M.Des.', 'michael@stts.edu', '081234567890', 1, 'michaelb', 'securepass', '2013-06-31'),
    ('DSNDKV0002', 17, 'Olivia Davis, S.Des., M.Des.', 'olivia@stts.edu', '085678901234', 1, 'olivia', 'oliviadavis', '2017-06-31'),
    ('DSNDKV0003', 17, 'Sophia Wilson, S.Des., M.Des.', 'sophia@stts.edu', '087654321098', 1, 'sophia', 'swilson', '2010-06-31'),
    ('DSNDKV0004', 17, 'Chloe Clark, S.Des., M.Des.', 'chloe@stts.edu', '081234567892', 1, 'chloe', 'chloeclark', '2011-06-31'),
    ('DSNDKV0005', 17, 'Ethan Baker, S.Des., M.Des.', 'ethan@stts.edu', '085678901236', 1, 'ethan', 'ethanbaker', '2010-06-31'),
    ('DSNDKV0006', 17, 'Mia Wright, S.Des., M.Des.', 'mia@stts.edu', '087654321100', 1, 'mia', 'miaw', '2022-06-31'),
    ('DSNDKV0007', 17, 'Lily Cooper, S. Des., M. Des.', 'lily@stts.edu', '081234567894', 1, 'lily', 'lilycooper', '2018-06-31'),
    ('DSNDKV0008', 17, 'Samuel Morgan, S. Des., M. Des.', 'samuel@stts.edu', '085678901238', 1, 'samuel', 'sammorgan', '2019-06-31'),
    ('DSNDKV0009', 17, 'Victoria Hayes, S. Des., M. Des.', 'victoria@stts.edu', '087654321102', 1, 'victoria', 'victoriahayes', '2016-06-31');

INSERT INTO matkul (id_matkul, nama_matkul, id_jurusan, sks_matkul, sms_matkul)
VALUES
    (1, 'Rupa Dasar', '17', 3, 1),
    (2, 'Pengantar Studi DKV', '17', 3, 1),
    (3, 'Komputer Aplikasi', '17', 3, 1),
    (4, 'Fotografi Dasar', '17', 3, 1),
    (5, 'Dasar Teknik Menggambar', '17', 2, 1),
    (6, 'Bahasa Indonesia', '17', 2, 1),
    (7, 'Teknik Presentasi', '17', 2, 1),
    (8, 'Komputer Aplikasi', '17', 3, 1),
    (9, 'Konsep Visual', '17', 3, 2),
    (10, 'Estetika & Tinjauan Desain', '17', 3, 2),
    (11, 'Tipografi', '17', 3, 2),
    (12, 'Fotografi Aplikatif', '17', 3, 2),
    (13, 'Menggambar Figur', '17', 3, 2),
    (14, 'Sejarah Seni Rupa', '17', 3, 2),
    (15, 'Komunikasi Visual', '17', 3, 3),
    (16, 'Komunikasi Visual Aplikatif', '17', 3, 3),
    (17, 'Teknik Modeling 3D', '17', 3, 3),
    (18, 'Proses Produksi Grafika', '17', 3, 3),
    (19, 'Desain Grafis', '17', 3, 3),
    (20, 'Ilustrasi', '17', 3, 3),
    (21, 'Bahasa Inggris', '17', 3, 3),
    (22, 'Strategi Medis', '17', 3, 4),
    (23, 'Strategi Media Aplikatif', '17', 3, 4),
    (24, 'Animasi 3D', '17', 3, 4),
    (25, 'Audio Visual', '17', 3, 4),
    (26, 'Ilustrasi Tematik', '17', 3, 4),
    (27, 'Generative Art', '17', 3, 4),
    (28, 'Pemasaran Terpadu', '17', 3, 5),
    (29, 'Pemasaran Terpadu Aplikatif', '17', 3, 5),
    (30, 'Metodologi Desain', '17', 3, 5),
    (31, 'Audio Visual Aplikatif', '17', 3, 5),
    (32, 'Pancasila', '17', 2, 5),
    (33, 'Desain Web', '17', 3, 5),
    (34, 'Manejemen DKV', '17', 3, 6),
    (35, 'Portofolio', '17', 3, 6),
    (36, 'Kapita Selecta', '17', 3, 6),
    (37, 'Etika Profesi', '17', 3, 6),
    (38, 'Kewirausahaan', '17', 3, 6),
    (39, 'Desain Media Interaktif', '17', 3, 6),
    (40, 'Pendidikan Kewarganegaraan', '17', 2, 6),
    (41, 'Algoritma dan Pemrograman', '18', 3, 1),
    (42, 'ICT Global Trend', '18', 3, 1),
    (43, 'Matematika Bisnis', '18', 3, 1),
    (44, 'Pengantar Bisnis', '18', 3, 1),
    (45, 'Teknologi Multimedia', '18', 3, 1),
    (46, 'Paperless Office', '18', 3, 1),
    (47, 'Pemrograman Berorientasi Objek', '18', 3, 2),
    (48, 'Pemrograman Web', '18', 3, 2),
    (49, 'Interaksi Manusia dan Komputer', '18', 3, 2),
    (50, 'Akuntansi', '18', 3, 2),
    (51, 'Creative Design', '18', 3, 2),
    (52, 'Manajemen Keuangan', '18', 3, 2),
    (53, 'Struktur Data', '18', 3, 3),
    (54, 'Pemrograman Visual', '18', 3, 3),
    (55, 'Manajemen Basis Data', '18', 3, 3),
    (56, 'Sistem Informasi Manajemen', '18', 3, 3),
    (57, 'Analisa dan Desain Sistem Informasi', '18', 3, 3),
    (58, 'Analisa Investasi', '18', 3, 3),
    (59, 'Bahasa Inggris', '18', 2, 3),
    (60, 'Aplikasi Client Server', '18', 3, 4),
    (61, 'Pengembangan App Bisnis Berbasis Internet', '18', 3, 4),
    (62, 'Proses Bisnis', '18', 3, 4),
    (63, 'Rekayasa Perangkat Lunak', '18', 3, 4),
    (64, 'Agama', '18', 2, 4),
    (65, 'Bahasa Indonesia', '18', 2, 4),
    (66, 'Probabilitas dan Statistik', '18', 3, 4),
    (67, 'Framework Aplikasi Internet', '18', 3, 5),
    (68, 'Jaringan Komputer', '18', 3, 5),
    (69, 'Pemodelan Berorientasi Objek', '18', 3, 5),
    (70, 'Manajemen Proyek Sistem Informasi', '18', 3, 5),
    (71, 'Interactive System Design', '18', 3, 5),
    (72, 'Technopreneurship', '18', 3, 5),
    (73, 'Mobile App Development', '18', 3, 6),
    (74, 'Design Patterns', '18', 3, 6),
    (75, 'Proyek Bisnis', '18', 3, 6),
    (76, 'Kapita Selekta', '18', 3, 6),
    (77, 'Information Technology Infrastructure Library', '18', 3, 6),
    (78, 'Pendidikan Kewarganegaraan', '18', 2, 6),
    (79, 'Algoritma Pemrograman 1', '11', 3, 1),
    (80, 'Introduction to Programming', '11', 3, 1),
    (81, 'Front-End Web Design', '11', 3, 1),
    (82, 'Bahasa Inggris', '11', 3, 1),
    (83, 'Pengantar Teknologi Informasi', '11', 3, 1),
    (84, 'Kalkulus', '11', 3, 1),
    (85, 'Algoritma Pemrograman 2', '11', 3, 2),
    (86, 'Struktur Data', '11', 3, 2),
    (87, 'Pemrograman Berorientasi Objek', '11', 3, 2),
    (88, 'Basis Data', '11', 3, 2),
    (89, 'Interaksi Manusia Komputer', '11', 3, 2),
    (90, 'Aljabar Linear dan Matrix', '11', 3, 2),
    (91, 'Struktur Data Lanjut', '11', 3, 3),
    (92, 'Pemrograman Aplikasi Desktop', '11', 3, 3),
    (93, 'Analisa dan Desain Sistem', '11', 3, 3),
    (94, 'Pengolahan Citra Digital', '11', 3, 3),
    (95, 'Back-End Web Programming', '11', 3, 3),
    (96, 'Matematika Diskrit dan Teori Graf', '11', 3, 3),
    (97, 'Pancasila', '11', 2, 3),
    (98, 'Statika Terapan', '11', 3, 4),
    (99, 'Web Programming Framework', '11', 3, 4),
    (100, 'Analisa dan Desain Sistem Berorientasi Objek', '11', 3, 4),
    (101, 'Grafika Komputer', '11', 3, 4),
    (102, 'Jaringan Komputer', '11', 3, 4),
    (103, 'Sistem Digital', '11', 3, 4),
    (104, 'Agama', '11', 2, 4),
    (105, 'Web Service', '11', 3, 5),
    (106, 'Rekayasa Perangkat Lunak', '11', 3, 5),
    (107, 'Software Development Project', '11', 3, 5),
    (108, 'Software Testing', '11', 3, 5),
    (109, 'Artificial Intelligence', '11', 3, 5),
    (110, 'Arsitektur dan Organisasi Komputer', '11', 3, 5),
    (111, 'Mobile Device Programming', '11', 3, 6),
    (112, 'Sistem Operasi', '11', 3, 6),
    (113, 'Kapita Selekta dan Penulisan Proposal Skripsi', '11', 2, 6),
    (114, 'Machine Learning', '11', 3, 6),
    (115, 'Internet of Things', '11', 3, 6),
    (116, 'Pendidikan Kewarganegaraan', '11', 2, 6),
    (117, 'Bahasa Indonesia', '11', 2, 6);

INSERT INTO pengumuman (id_pengumuman, judul_pengumuman, isi_pengumuman, pengumuman_added_date)
VALUES
    ('PE0001', '[BAA] Pendaftaran Seminar Tugas Akhir-Tesis Periode Desember 2023', 'https://sim.istts.ac.id/pengumuman/2139/[BAA]-Pendaftaran-Seminar-Tugas-Akhir-Tesis-Periode-Desember-2023', '2023-11-23'),
    ('PE0002', '[BAA] Permintaan Dosen Estetika Poster dan Tata Cara Konsultasi Poster Periode Seminar Desember Gasal 2023/2024', 'https://sim.istts.ac.id/pengumuman/2138/[BAA]-Permintaan-Dosen-Estetika-Poster-dan-Tata-Cara-Konsultasi-Poster-Periode-Seminar-Desember-Gasal-2023-2024', '2023-11-21'),
    ('PE0003', '[BAA] Kegiatan Perkuliahan Dalam Rangka Hari Wisuda pada Rabu, 22 November 2023', 'https://sim.istts.ac.id/pengumuman/2137/[BAA]-Kegiatan-Perkuliahan-Dalam-Rangka-Hari-Wisuda--pada-Rabu,-22-November-2023', '2023-11-21'),
    ('PE0004', 'Kegiatan WISUDA XL ISTTS', 'https://sim.istts.ac.id/pengumuman/2135/Kegiatan-WISUDA-XL--ISTTS', '2023-11-20'),
    ('PE0005', 'BERITA DUKA', 'https://sim.istts.ac.id/pengumuman/2134/BERITA-DUKA', '2023-11-17'),
    ('PE0006', 'Ruang Untuk Placement Test ECC 17 November 2023', 'https://sim.istts.ac.id/pengumuman/2133/Ruang-Untuk-Placement-Test-ECC-17-November-2023', '2023-11-15'),
    ('PE0007', '[BAA] Pelaksanaan Pra Seminar TA November 2023', 'https://sim.istts.ac.id/pengumuman/2132/[BAA]-Pelaksanaan-Pra-Seminar-TA-November-2023', '2023-11-10'),
    ('PE0008', '[BAA] Penerbitan SK TA/Thesis Periode Oktober 2023', 'https://sim.istts.ac.id/pengumuman/2131/[BAA]-Penerbitan-SK-TA-Thesis-Periode-Oktober-2023', '2023-11-07'),
    ('PE0009', 'Pendaftaran Placement Test ECC Periode Gasal 2023/2024', 'https://sim.istts.ac.id/pengumuman/2129/Pendaftaran-Placement-Test-ECC-Periode-Gasal-2023-2024', '2023-11-06'),
    ('PE0010', '[BAA] Pendaftaran Pra Seminar Periode November 2023', 'https://sim.istts.ac.id/pengumuman/2128/[BAA]-Pendaftaran-Pra-Seminar-Periode-November-2023', '2023-10-31'),
    ('PE0011', 'BERITA DUKA', 'https://sim.istts.ac.id/pengumuman/2127/BERITA-DUKA', '2023-10-18'),
    ('PE0012', 'Daftar Mahasiswa Yang Belum Mengumpulkan Pas Foto KTM', 'https://sim.istts.ac.id/pengumuman/2126/Daftar-Mahasiswa-Yang-Belum-Mengumpulkan-Pas-Foto-KTM', '2023-10-17'),
    ('PE0013', '[BAA] Jadwal UTS Semester Gasal 2023-2024', 'https://sim.istts.ac.id/pengumuman/2125/[BAA]-Jadwal-UTS-Semester-Gasal-2023-2024', ''),
    ('PE0014', '[BAA] Jadwal Seminar TA/THESIS Oktober 2023', 'https://sim.istts.ac.id/pengumuman/2124/[BAA]-Jadwal-Seminar-TA-THESIS-Oktober-2023', '2023-10-17'),
    ('PE0015', 'Pengumuman Kegiatan Wisuda XL 2023', 'https://sim.istts.ac.id/pengumuman/2122/Pengumuman-Kegiatan-Wisuda-XL-2023', '2023-10-12'),
    ('PE0016', 'Sertifikat ECC (Susulan) Yang Sudah Disahkan Dan Siap Diambil', 'https://sim.istts.ac.id/pengumuman/2120/Sertifikat-ECC-(Susulan)-Yang-Sudah-Disahkan-Dan-Siap-Diambil', '2023-10-05'),
    ('PE0017', 'JADWAL SIDANG JUDUL PROPOSAL TUGAS AKHIR D3-SI, S1-INF, S1-SIB, S1-IFM PERIODE OKTOBER 2023', 'https://sim.istts.ac.id/pengumuman/2119/JADWAL-SIDANG-JUDUL-PROPOSAL-TUGAS-AKHIR-D3-SI,-S1-INF,-S1-SIB,-S1-IFM-PERIODE-OKTOBER-2023', '2023-10-03'),
    ('PE0018', 'Pengumuman Penerimaan Beasiswa Prestasi Semester Gasal 2023-2024', 'https://sim.istts.ac.id/pengumuman/2118/Pengumuman-Penerimaan-Beasiswa-Prestasi-Semester-Gasal-2023-2024', '2023-10-03'),
    ('PE0019', 'Pengumuman Penerimaan Beasiswa Sosial Ekonomi Semester Gasal 2023-2024', 'https://sim.istts.ac.id/pengumuman/2117/Pengumuman-Penerimaan-Beasiswa-Sosial-Ekonomi-Semester-Gasal-2023-2024', '2023-10-03'),
    ('PE0020', 'Pengumuman Penerimaan Perpanjangan Beasiswa PMB Gasal 2023-2024', 'https://sim.istts.ac.id/pengumuman/2116/Pengumuman-Penerimaan-Perpanjangan-Beasiswa-PMB-Gasal-2023-2024', '2023-10-03'),
    ('PE0021', 'Jadwal Pembelian Kartu UKM Semester Gasal 2023/2024', 'https://sim.istts.ac.id/pengumuman/2115/Jadwal-Pembelian-Kartu-UKM-Semester-Gasal-2023-2024', '2023-09-29'),
    ('PE0022', '[IT] Pembagian Email @mhs.istts.ac.id untuk Maba 2023', 'https://sim.istts.ac.id/pengumuman/2114/[IT]-Pembagian-Email-@mhs-istts-ac-id-untuk-Maba-2023', '2023-09-27'),
    ('PE0023', '[BAA] Daftar NRP Mahasiswa Angkatan 2023', 'https://sim.istts.ac.id/pengumuman/2113/[BAA]-Daftar-NRP-Mahasiswa-Angkatan-2023', '2023-09-27'),
    ('PE0024', '[BAA] Daftar Pengajuan Merdeka Belajar Kampus Merdeka (MBKM) Tahap II untuk Semester Gasal 2023/2024', 'https://sim.istts.ac.id/pengumuman/2112/[BAA]-Daftar-Pengajuan-Merdeka-Belajar-Kampus-Merdeka-(MBKM)-Tahap-II-untuk-Semester-Gasal-2023-2024', '2023-09-26'),
    ('PE0025', '[BAA] Pendaftaran Seminar Tugas Akhir-Tesis Periode Oktober 2023', 'https://sim.istts.ac.id/pengumuman/2111/[BAA]-Pendaftaran-Seminar-Tugas-Akhir-Tesis-Periode-Oktober-2023', '2023-09-25'),
    ('PE0026', '[BAA] Permintaan Dosen Estetika Poster dan Tata Cara Konsultasi Poster Periode Seminar Oktober Gasal 2023/2024', 'https://sim.istts.ac.id/pengumuman/2110/[BAA]-Permintaan-Dosen-Estetika-Poster-dan-Tata-Cara-Konsultasi-Poster-Periode-Seminar-Oktober-Gasal-2023-2024', '2023-09-25'),
    ('PE0027', '[BAA] Pelaksanaan Pra Seminar TA September 2023', 'https://sim.istts.ac.id/pengumuman/2108/[BAA]-Pelaksanaan-Pra-Seminar-TA-September-2023', '2023-09-14'),
    ('PE0028', 'Prosedur Permintaan Ganti Jadwal Kelas ECC', 'https://sim.istts.ac.id/pengumuman/2107/Prosedur-Permintaan-Ganti-Jadwal-Kelas-ECC', '2023-09-08'),
    ('PE0029', 'Sertifikat Tanda Lulus ECC Periode Genap 2022/2023 Siap Diambil', 'https://sim.istts.ac.id/pengumuman/2106/Sertifikat-Tanda-Lulus-ECC-Periode-Genap-2022-2023-Siap-Diambil', '2023-09-08'),
    ('PE0030', '[BAA] Penerbitan SK TA/Thesis Periode Agustus 2023', 'https://sim.istts.ac.id/pengumuman/2105/[BAA]-Penerbitan-SK-TA-Thesis-Periode-Agustus-2023', '2023-09-08');

INSERT INTO poins (id_acara, nama_acara, tipe_acara, jml_poin, poin_added_date)
VALUES
    ('MB0001', 'PESERTA UKM BADMINTON GASAL 2022/2023', 0, 200, '2022-08-01'),
    ('MB0002', 'PESERTA UKM BADMINTON GENAP 2022/2023', 0, 200, '2023-02-01'),
    ('MB0003', 'ANGGOTA END ACADEMIC CAMP 2023', 0, 130, '2023-07-29'),
    ('PN0001', 'PESERTA 17 AGUSTUS 2022', 1, 50, '2022-08-17'),
    ('PN0002', 'PESERTA WORKSHOP INTRODUCTION TO AMAZON ALEXA SKILL AND AWS JAM 2022', 1, 50, '2022-08-22'),
    ('PN0003', 'PESERTA WELCOME PARTY INFORMATIKA 2022', 1, 63, '2022-09-22'),
    ('PN0004', 'PESERTA SEMINAR ANTI SEXUAL ABUSE 2022', 1, 50, '2022-10-03'),
    ('PN0005', 'PESERTA WEBINAR KEWIRAUSAHAAN 2022', 1, 50, '2022-10-15'),
    ('PN0006', 'PESERTA WORKSHOP INVESTASI 2022', 1, 50, '2022-10-24'),
    ('PN0007', 'PESERTA OPEN TALK INFORMATIKA GASAL 2022', 1, 50, '2022-12-09'),
    ('PN0008', 'PESERTA SEMINAR AI 2023', 1, 50, '2023-04-13'),
    ('PN0009', 'PESERTA GDSC WORKSHOP NOTIFY YOUR USERS IN FLUTTER 2023', 1, 50, '2023-04-28'),
    ('PN0010', 'SEKRETARIS OPEN TALK INFORMATIKA GENAP 2022', 1, 130, '2023-05-31'),
    ('OG0001', 'PESERTA FRESHMAN SUMMIT 2022', 2, 100, '2022-08-03'),
    ('OG0002', 'ANGGOTA PENGENALAN STUDI INFORMATIKA (PSI) 2023', 2, 195, '2023-08-11'),
    ('KR0001', 'PESERTA UKK KRISTEN PD STTS 2021/2022', 3, 26, '2022-02-01'),
    ('KR0002', 'PESERTA WELCOME PARTY PERSEKUTUAN DOA ISTTS 2022', 3, 62, '2022-09-16'),
    ('KR0003', 'PESERTA RETRET PERSEKUTUAN DOA ISTTS 2022', 3, 100,'2022-12-02');


INSERT INTO matkul_diambil_mhs (id_matkul_diambil_mhs, id_matkul, id_user)
VALUES
    ('1MTKINF001', 95, 'MHSINF0001'),
    ('1MTKINF002', 92, 'MHSINF0001'),
    ('1MTKINF003', 93, 'MHSINF0001'),
    ('1MTKINF004', 91, 'MHSINF0001'),
    ('1MTKINF005', 97, 'MHSINF0001'),
    ('1MTKINF006', 94, 'MHSINF0001'),
    ('1MTKINF007', 96, 'MHSINF0001'),
    ('2MTKINF001', 95, 'MHSINF0002'),
    ('2MTKINF002', 92, 'MHSINF0002'),
    ('2MTKINF003', 93, 'MHSINF0002'),
    ('2MTKINF004', 91, 'MHSINF0002'),
    ('2MTKINF005', 97, 'MHSINF0002'),
    ('2MTKINF006', 94, 'MHSINF0002'),
    ('2MTKINF007', 96, 'MHSINF0002'),
    ('3MTKINF001', 95, 'MHSINF0003'),
    ('3MTKINF002', 92, 'MHSINF0003'),
    ('3MTKINF003', 93, 'MHSINF0003'),
    ('3MTKINF004', 108, 'MHSINF0003'),
    ('3MTKINF005', 91, 'MHSINF0003'),
    ('3MTKINF006', 97, 'MHSINF0003'),
    ('3MTKINF007', 94, 'MHSINF0003'),
    ('3MTKINF008', 96, 'MHSINF0003'),
    ('4MTKINF001', 95, 'MHSINF0004'),
    ('4MTKINF002', 92, 'MHSINF0004'),
    ('4MTKINF003', 93, 'MHSINF0004'),
    ('4MTKINF004', 108, 'MHSINF0003'),
    ('4MTKINF005', 91, 'MHSINF0004'),
    ('4MTKINF006', 97, 'MHSINF0004'),
    ('4MTKINF007', 94, 'MHSINF0004'),
    ('4MTKINF008', 96, 'MHSINF0004'),
    ('1MHSDKV001', 1, 'MHSDKV0001'),
    ('1MHSDKV002', 2, 'MHSDKV0001'),
    ('1MHSDKV003', 3, 'MHSDKV0001'),
    ('1MHSDKV004', 4, 'MHSDKV0001'),
    ('1MHSDKV005', 5, 'MHSDKV0001'),
    ('1MHSDKV006', 6, 'MHSDKV0001'),
    ('1MHSDKV007', 7, 'MHSDKV0001'),
    ('1MHSDKV008', 8, 'MHSDKV0001'),
    ('1MHSSIB001', 67, 'MHSSIB0001'),
    ('1MHSSIB002', 68, 'MHSSIB0001'),
    ('1MHSSIB003', 69, 'MHSSIB0001'),
    ('1MHSSIB004', 70, 'MHSSIB0001'),
    ('1MHSSIB005', 71, 'MHSSIB0001'),
    ('1MHSSIB006', 72, 'MHSSIB0001');

INSERT INTO matkul_diambil_dosen (id_matkul_diambil_dsn, id_matkul, id_user)
VALUES
    ('1DSNINF001', 95, 'DSNINF0020'),
    ('2DSNINF001', 92, 'DSNINF0019'),
    ('3DSNINF001', 93, 'DSNINF0015'),
    ('4DSNINF001', 108, 'DSNINF0001'),
    ('5DSNINF001', 91, 'DSNINF0004'),
    ('6DSNINF001', 97, 'DSNINF0006'),
    ('7DSNINF001', 94, 'DSNINF0008'),
    ('8DSNINF001', 96, 'DSNINF0014'),
    ('1DSNDKV001', 1, 'DSNDKV0001'),
    ('2DSNDKV001', 2, 'DSNDKV0002'),
    ('3DSNDKV001', 3, 'DSNDKV0003'),
    ('4DSNDKV001', 4, 'DSNDKV0004'),
    ('5DSNDKV001', 5, 'DSNDKV0005'),
    ('6DSNDKV001', 6, 'DSNDKV0006'),
    ('7DSNDKV001', 7, 'DSNDKV0007'),
    ('8DSNDKV001', 8, 'DSNDKV0008'),
    ('1DSNSIB001', 67, 'DSNSIB0001'),
    ('2DSNSIB001', 68, 'DSNSIB0002'),
    ('3DSNSIB001', 69, 'DSNSIB0003'),
    ('4DSNSIB001', 70, 'DSNSIB0004'),
    ('5DSNSIB001', 71, 'DSNSIB0005'),
    ('6DSNSIB001', 72, 'DSNSIB0006');

INSERT INTO nilai (id_nilai, id_user, id_matkul, nilai_uts, nilai_uas, nilai_akhir)
VALUES
    ('NILAIINF01', 'MHSINF0001', 95, 80, 80, 80),
    ('NILAIINF02', 'MHSINF0001', 92, 80, 80, 80),
    ('NILAIINF03', 'MHSINF0001', 93, 80, 80, 80),
    ('NILAIINF04', 'MHSINF0001', 91, 80, 80, 80),
    ('NILAIINF05', 'MHSINF0001', 97, 80, 80, 80),
    ('NILAIINF06', 'MHSINF0001', 94, 80, 80, 80),
    ('NILAIINF07', 'MHSINF0001', 96, 80, 80, 80),
    ('NILAIINF08', 'MHSINF0002', 95, 80, 80, 80),
    ('NILAIINF09', 'MHSINF0002', 92, 80, 80, 80),
    ('NILAIINF10', 'MHSINF0002', 93, 80, 80, 80),
    ('NILAIINF11', 'MHSINF0002', 91, 80, 80, 80),
    ('NILAIINF12', 'MHSINF0002', 97, 80, 80, 80),
    ('NILAIINF13', 'MHSINF0002', 94, 80, 80, 80),
    ('NILAIINF14', 'MHSINF0002', 96, 80, 80, 80),
    ('NILAIINF15', 'MHSINF0003', 95, 80, 80, 80),
    ('NILAIINF16', 'MHSINF0003', 92, 80, 80, 80),
    ('NILAIINF17', 'MHSINF0003', 108, 80, 80, 80),
    ('NILAIINF18', 'MHSINF0003', 93, 80, 80, 80),
    ('NILAIINF19', 'MHSINF0003', 91, 80, 80, 80),
    ('NILAIINF20', 'MHSINF0003', 97, 80, 80, 80),
    ('NILAIINF21', 'MHSINF0003', 94, 80, 80, 80),
    ('NILAIINF22', 'MHSINF0003', 96, 80, 80, 80),
    ('NILAIINF23', 'MHSINF0004', 95, 80, 80, 80),
    ('NILAIINF24', 'MHSINF0004', 92, 80, 80, 80),
    ('NILAIINF25', 'MHSINF0004', 108, 80, 80, 80),
    ('NILAIINF26', 'MHSINF0004', 93, 80, 80, 80),
    ('NILAIINF27', 'MHSINF0004', 91, 80, 80, 80),
    ('NILAIINF28', 'MHSINF0004', 97, 80, 80, 80),
    ('NILAIINF29', 'MHSINF0004', 94, 80, 80, 80),
    ('NILAIINF30', 'MHSINF0004', 96, 80, 80, 80),
    ('NILAIDKV01', 'MHSDKV0001', 1, 80, 80, 80),
    ('NILAIDKV02', 'MHSDKV0001', 2, 80, 80, 80),
    ('NILAIDKV03', 'MHSDKV0001', 3, 80, 80, 80),
    ('NILAIDKV04', 'MHSDKV0001', 4, 80, 80, 80),
    ('NILAIDKV05', 'MHSDKV0001', 5, 80, 80, 80),
    ('NILAIDKV06', 'MHSDKV0001', 6, 80, 80, 80),
    ('NILAIDKV07', 'MHSDKV0001', 7, 80, 80, 80),
    ('NILAIDKV08', 'MHSDKV0001', 8, 80, 80, 80),
    ('NILAISIB01', 'MHSSIB0001', 67, 80, 80, 80),
    ('NILAISIB02', 'MHSSIB0001', 68, 80, 80, 80),
    ('NILAISIB03', 'MHSSIB0001', 69, 80, 80, 80),
    ('NILAISIB04', 'MHSSIB0001', 70, 80, 80, 80),
    ('NILAISIB05', 'MHSSIB0001', 71, 80, 80, 80),
    ('NILAISIB06', 'MHSSIB0001', 72, 80, 80, 80);

INSERT INTO file (id_file, nama_file, isi_file)
VALUES
    ('FL001', '[BAA] Pedoman dan Template TA/Tesis', 'https://drive.google.com/file/d/1uupmTWtdwxB4ZqNYVINV9q8eZDg9hAFP/view'),
    ('FL002', '[BAA] Kalender Akademik Semester Gasal 2023-2024 (Kelas Program Profesional)', 'https://sim.istts.ac.id/filepenting/174/[BAA]-Kalender-Akademik-Semester-Gasal-2023-2024-(Kelas-Program-Profesional)'),
    ('FL003', '[BAA] Kalender Akademik Semester Gasal 2023-2024 (Kelas Reguler, Internasional, dan S2)', 'https://sim.istts.ac.id/filepenting/173/[BAA]-Kalender-Akademik-Semester-Gasal-2023-2024-(Kelas-Reguler,-Internasional,-dan-S2)'),
    ('FL004', '[BAA] Slide Panduan Akademik 2023 [D3, S1, dan S2]', 'https://youtu.be/dQw4w9WgXcQ?si=Emix_YOlUkl8pMRj'),
    ('FL005', '[BAA] Formulir Bidang Akademik ISTTS (Perwalian, Cuti, TA/Tesis, KP)', 'https://drive.google.com/drive/folders/1jMBoCrMYt9f3p9DsAbzxLbvGsQy8xXNU?usp=sharing'),
    ('FL006', '[BAA] Kalender Tugas Akhir/Tesis Gasal 2023/2024', 'https://sim.istts.ac.id/filepenting/168/[BAA]-Kalender-Tugas-Akhir-Tesis-Gasal-2023-2024'),
    ('FL007', '[BAA] Pedoman Penulisan Karya Ilmiah Edisi 5-2019', 'https://sim.istts.ac.id/filepenting/165/[BAA]-Pedoman-Penulisan-Karya-Ilmiah-Edisi-5-2019'),
    ('FL008', 'Tata Tertib ECC', 'https://sim.istts.ac.id/filepenting/161/Tata-Tertib-ECC'),
    ('FL009', '[BAK] Prosedur Kerja Praktek 2022', 'https://youtu.be/dQw4w9WgXcQ?si=Emix_YOlUkl8pMRj'),
    ('FL010', '[PM] Template LPJ Pengabdian kepada Masyarakat (Bagi Mahasiswa)', 'https://youtu.be/dQw4w9WgXcQ?si=Emix_YOlUkl8pMRj');
 
INSERT INTO penerima_poin (id_pp, id_penerima, id_acara)
VALUES
    ('PP001', 'MHSINF0001', 'MB0001'),
    ('PP002', 'MHSINF0001', 'MB0002'),
    ('PP003', 'MHSINF0001', 'PN0001'),
    ('PP004', 'MHSINF0001', 'PN0003'),
    ('PP005', 'MHSINF0001', 'OG0001'),
    ('PP007', 'MHSINF0001', 'KR0001'),
    ('PP008', 'MHSINF0001', 'KR0002'),
    ('PP009', 'MHSINF0002', 'MB0002'),
    ('PP010', 'MHSINF0002', 'PN0001'),
    ('PP011', 'MHSINF0002', 'PN0003'),
    ('PP012', 'MHSINF0002', 'PN0009'),
    ('PP013', 'MHSINF0002', 'OG0001'),
    ('PP014', 'MHSINF0002', 'OG0002'),
    ('PP015', 'MHSINF0002', 'KR0003'),
    ('PP016', 'MHSINF0003', 'MB0001'),
    ('PP017', 'MHSINF0003', 'MB0002'),
    ('PP018', 'MHSINF0003', 'MB0003'),
    ('PP019', 'MHSINF0003', 'PN0001'),
    ('PP020', 'MHSINF0003', 'PN0003'),
    ('PP021', 'MHSINF0003', 'PN0005'),
    ('PP022', 'MHSINF0003', 'PN0007'),
    ('PP023', 'MHSINF0003', 'PN0008'),
    ('PP024', 'MHSINF0003', 'PN0009'),
    ('PP025', 'MHSINF0003', 'OG0001'),
    ('PP026', 'MHSINF0003', 'OG0002'),
    ('PP027', 'MHSINF0003', 'KR0001'),
    ('PP028', 'MHSINF0003', 'KR0002'),
    ('PP029', 'MHSINF0003', 'KR0003'),
    ('PP030', 'MHSINF0004', 'MB0001'),
    ('PP031', 'MHSINF0004', 'MB0002'),
    ('PP032', 'MHSINF0004', 'MB0003'),
    ('PP033', 'MHSINF0004', 'PN0001'),
    ('PP034', 'MHSINF0004', 'PN0002'),
    ('PP035', 'MHSINF0004', 'PN0003'),
    ('PP036', 'MHSINF0004', 'PN0004'),
    ('PP037', 'MHSINF0004', 'PN0007'),
    ('PP038', 'MHSINF0004', 'PN0008'),
    ('PP039', 'MHSINF0004', 'PN0009'),
    ('PP040', 'MHSINF0004', 'PN0010'),
    ('PP041', 'MHSINF0004', 'OG0001'),
    ('PP042', 'MHSINF0004', 'OG0002'),
    ('PP043', 'MHSINF0004', 'KR0001'),
    ('PP044', 'MHSINF0004', 'KR0002'),
    ('PP045', 'MHSINF0004', 'KR0003'),
    ('PP046', 'MHSDKV0001', 'MB0001'),
    ('PP047', 'MHSDKV0001', 'MB0003'),
    ('PP048', 'MHSDKV0001', 'PN0001'),
    ('PP049', 'MHSDKV0001', 'PN0004'),
    ('PP050', 'MHSDKV0001', 'OG0001'),
    ('PP051', 'MHSSIB0001', 'MB0002'),
    ('PP052', 'MHSSIB0001', 'MB0003'),
    ('PP053', 'MHSSIB0001', 'PN0001'),
    ('PP054', 'MHSSIB0001', 'PN0002'),
    ('PP055', 'MHSSIB0001', 'PN0005'),
    ('PP056', 'MHSSIB0001', 'PN0006'),
    ('PP057', 'MHSSIB0001', 'OG0001');