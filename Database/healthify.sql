-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jun 2023 pada 08.02
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthify`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cariObat` (IN `keyword` VARCHAR(225))   BEGIN
SELECT * FROM katalog_obat
where resep_obat LIKE CONCAT('%', keyword, '%') OR nama_penyakit LIKE CONCAT('%', keyword, '%');
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getdokter` ()   BEGIN
SELECT * FROM dokter;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getPasien` ()   BEGIN
SELECT * FROM PASIEN;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'annisa', 'c9d2cce909ea37234be8af1a1f958805');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi_artikel` text DEFAULT NULL,
  `sub_judul` varchar(255) DEFAULT NULL,
  `sub_desk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `gambar`, `judul`, `isi_artikel`, `sub_judul`, `sub_desk`) VALUES
(13, '647dd88fd32c3.jpg', 'Healthify Adalah', 'Tentang Aplikasi Ini Merupakan sebuah website yang bisa digunakan untuk masyarakat yang memerlukan informasi kesehatan secara efesien', 'Healthify memberikan informasi bagaimana cara untuk mencegah dan mengatasi penyakit tersebut.', 'Healthify memberikan informasi bagaimana cara untuk mencegah dan mengatasi penyakit tersebut.'),
(19, '64801b27c0e28.png', 'Healthify Adalah platform', 'kebiasaan buruk', 'akibatnya', 'kebiasaan buruk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `spesialis` varchar(225) NOT NULL,
  `jk` varchar(225) NOT NULL,
  `no_telp` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `username`, `password`, `spesialis`, `jk`, `no_telp`, `alamat`, `gambar`) VALUES
(8, 'dokter', 'dokter', 'd22af4180eee4bd95072eb90f94930e5', 'Dokter Gigi', 'Perempuan', '0813192013', 'Kab. Sumedang', 'default.jpg'),
(3111, 'dr. Andini Wilson', 'Andini', 'aaeb27e3336b656179e5e5dfcc7995ce', 'Umum', 'Perempuan', '08217839101', 'Jl. Pendidikan No.15, Cibiru Wetan, Kec. Cileunyi, Kabupaten Bandung, Jawa Barat 40625', 'd1.jpg'),
(3112, 'dr. Jessica', 'Jessica', '4f5fe8118af654c293c456a26501c873', 'Spesialis Mata', 'perempuan', '02728721323', 'Jln. Abdurrahman No.190\r\n', ''),
(3113, 'dr. Nanda Azzahra', 'Nanda', 'db94ace494c53a3f23f7a16fae07fbe8', 'Spesialis Anak', 'Perempuan', '0867891219', 'Jln. Lembang', 'd2.jpg'),
(3114, 'dr. Denisa Khanza', 'denisa', 'ffabb40956321b7c4455cf9e97f4abb6', 'Spesialis Gigi', 'Perempuan', '0853248291', 'Soreang', 'd3.jpg'),
(3115, 'dr. Lee Park Wo', 'Lee', '68ab11b986aad0ce7bed95f2f52086f7', 'Spesialis Jantung', 'Laki-Laki', '084239179319', 'Kopo', 'd5.jpg'),
(78148, 'dokter', 'dokter', 'c8083ff1138a1394e8fabfa702f6bdeb', 'Dokter Umum', 'Perempuan', '0893193821', 'Kab. Bandung', 'd1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(123) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama`) VALUES
(6111, 'lambung'),
(6112, 'Gula darah'),
(6113, 'Rematik'),
(6114, 'Leukimia'),
(6115, 'HIV'),
(6118, 'jnatung'),
(6119, 'panu'),
(6120, 'gatal-fatal'),
(6121, 'sakit kepala dan tenggorokan tersumbat'),
(6122, 'kanker'),
(6124, 'batuk'),
(6125, ''),
(6126, 'batukk'),
(6127, 'capek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog_obat`
--

CREATE TABLE `katalog_obat` (
  `id_katalogObat` int(11) NOT NULL,
  `nama_penyakit` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `gejala` varchar(225) NOT NULL,
  `penyebab` varchar(225) NOT NULL,
  `resep_obat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `katalog_obat`
--

INSERT INTO `katalog_obat` (`id_katalogObat`, `nama_penyakit`, `deskripsi`, `gejala`, `penyebab`, `resep_obat`) VALUES
(2111, 'Diabetes Melitus', 'Diabetes melitus adalah kondisi di mana kadar gula darah dalam tubuh tinggi karena tubuh tidak dapat memproduksi atau menggunakan insulin dengan baik.', 'Sering buang air kecil, merasa sangat haus dan lapar, lelah, penglihatan kabur, dan luka sulit sembuh.', 'Kekurangan insulin atau resistensi insulin, faktor genetik, obesitas, dan gaya hidup yang tidak sehat.', 'Insulin, Metformin, Glibenklamid, Glipizide.'),
(2112, 'Hipertensi', ' Hipertensi atau tekanan darah tinggi adalah kondisi di mana tekanan darah dalam arteri meningkat secara kronis.', 'Tidak ada gejala khusus, tetapi beberapa orang dapat merasakan sakit kepala, sesak napas, dan detak jantung cepat.', ' Faktor genetik, kebiasaan makan yang tidak sehat, kegemukan, kurangnya aktivitas fisik, dan stres.', 'Amlodipin, Lisinopril, Losartan, Metoprolol.'),
(2113, 'Asma', 'Asma adalah penyakit paru kronis di mana saluran pernapasan menyempit dan menghasilkan lendir yang lebih banyak dari biasanya.', 'Kesulitan bernapas, dada terasa sempit, batuk dan mengi.', 'Alergi, paparan bahan kimia dan polutan, atau infeksi saluran pernapasan.', 'Albuterol, Ipratropium, Flutikason.'),
(2114, 'Kanker payudara', 'Kanker payudara adalah jenis kanker di mana sel-sel abnormal tumbuh dan berkembang di jaringan payudara.', 'enjolan di payudara atau ketiak, perubahan ukuran atau bentuk payudara, kulit yang terlihat kemerahan, dan keluar cairan dari puting susu.', 'Faktor genetik, usia, kelebihan berat badan, paparan radiasi, dan penggunaan hormon.', 'Kemoterapi, Radiasi, Tamoxifen.'),
(2115, 'Depresi', 'Depresi adalah kondisi psikologis di mana seseorang merasa sedih, kehilangan minat pada aktivitas yang biasa dilakukan, dan mengalami perubahan mood secara signifikan.', 'Kesulitan tidur, merasa lelah, kehilangan minat pada aktivitas sehari-hari, perubahan berat badan, dan pikiran yang merugikan.', ' Faktor genetik', 'Antidepresan SSRI, Trisiklik Antidepresan , Inhibitor MAO (Monoamine Oxidase) ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obrolan`
--

CREATE TABLE `obrolan` (
  `id_obrolan` int(11) NOT NULL,
  `id_room` int(128) NOT NULL,
  `pesan` text NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obrolan`
--

INSERT INTO `obrolan` (`id_obrolan`, `id_room`, `pesan`, `id_dokter`, `tanggal`) VALUES
(1112, 1112, 'Pesan baru', 3115, '2023-05-18'),
(1121, 1121, 'Pesan baru', 3114, '2023-05-18'),
(1141, 1141, 'Pesan baru', 3115, '2023-05-18'),
(1331, 1331, 'Pesan baru', 3114, '2023-05-18'),
(24251, 24251, 'Pesan baru', 3113, '2023-05-18'),
(68131, 68131, 'Pesan baru', 3111, '2023-05-19'),
(689869, 689869, 'Pesan baru', 3113, '2023-05-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `username`, `email`, `password`) VALUES
(6, 'pasien', 'pasien', 'pasien@gmail.com', 'f5c25a0082eb0748faedca1ecdcfb131'),
(5111, '', 'Riska', 'riska@gmail.com', 'c1196c027686a4ba23fbb53450a2f00c'),
(5112, '', 'Selly ', 'Selly@gmail.com', 'e61ba834ac4021942349fcecc49c4df1'),
(5113, '', 'Donny', 'Donny@gmail.com', 'cb4c709bcbf606099e7d3f48fb6cd8d6'),
(5114, '', 'Carolinna', 'Caron@gmail.com', '0984352980e8b32c4664eeacc3b9a83a'),
(5115, '', 'Georgina', 'Geo@gmail.com', '74dc9d517740d0391f0bf1e483d063db'),
(5116, 'RIRI ANNISATUNNAZA', 'riri', 'ririannisa74@gmail.com', 'c740d6848b6a342dcc26c177ea2c49fe'),
(5117, 'devi', 'devi', 'devi@gmail.com', 'f5c2db1f19bdde37e740e86b70d0534f'),
(5118, 'dika', 'dika', 'dika@gmail.com', 'e9ce15bcebcedde2cb3cf9fe8f84fc0c'),
(5119, 'annisa', 'annisa', 'annisa@gmail.com', 'c9d2cce909ea37234be8af1a1f958805');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nama` varchar(567) NOT NULL,
  `penyebab` varchar(567) NOT NULL,
  `gejala` varchar(567) NOT NULL,
  `pengobatan` varchar(567) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama`, `penyebab`, `gejala`, `pengobatan`, `deskripsi`) VALUES
(1, 'Diare', 'Intoleransi terhadap makanan, seperti laktosa dan fruktosa. Alergi makanan.  Efek samping dari obat-obatan tertentu.  Infeksi bakteri, virus, atau parasit.', 'Perut kembung atau kram, Feses lembek dan cair, Rasa mulas, Sakit perut', 'Minum banyak cairan.Makan makanan sehat rendah serat.Mengonsumsi minuman suplemen probiotik.Hindari makanan yang membuat diare makin parah.Minum teh chamomile.Makan dalam porsi kecil.Minum obat diare', 'Diare merupakan kondisi ketika pengidapan melakukan BAB  lebih sering dari biasanya. '),
(2, 'Flu', 'Infeksi virus influenza yang dapat menular secara mudah, orang yang mudah terserang flu biasanya yang memiliki sistem imun yang lemah.', 'batuk berdahak atau kering, dehidrasi, demam, kelelahan , panas dingin, pilek , sakit kepala', 'Istirahat yang cukup.Banyak minum.Menjaga tubuh agar tetap hangat.Mengkonsumsi obat penurun demam', 'Flu merupakan penyakit yang disebabkan oleh infeksi virus influenza, penyakit ini mudah menular.'),
(3, 'Bronkitis', ' Bronkitis umumnya disebabkan oleh adanya infeksi virus yang juga menjadi penyebab seseorang terkena gangguan ISPA. Salah satu virus yang menyebabkan bronchitis adalah virus flu. Virus ini bisa menular dari percikan air liur seseorang yang terkena penyakit ini.', ' Batuk berdahak atau kering atau kronis, Kelelahan atau malaise, pilek, napas pendek, sakit kepala, sakit tenggorokan atau tekanan dada', ' Minum air putih sebanyak 8-12 gelas perhari. Menghirup uap air panas. Istirahat yang cukup. Menghindari asap rokok. Menggunakan masker ketika melakukan aktivitas di luar rumah supaya tidak terpapar ketika terpapar udara dingin', 'Bronkitis adalah peradangan yang terjadi pada saluran pernafasan atau bronkus.'),
(4, 'Anemia (kurang darah)', 'kekurangan zat besi.', ' Perasaan tidak enak badan, Sakit kepala, Gangguan konsentrasi berpikir', 'Mengasup suplemen yang mengandung vitamin dan mineral terutama zat besi asam folat dan dianjurkan untuk transfusi darah apabila kondisi kurang darah yang berat', 'Anemia adalah kondisi ketika tubuh kekurangan sel darah merah tidak berfungsi dengan baik.'),
(6, 'Jantung', ' Penyumbatan Peradangan.Kerusakan pada jantung dan pembuluh darah.Suplai oksigen dan nutrisi di otot dan jaringan di sekitar jantung berkurang', ' Nyeri dada,Sesak napas,Aliran darah terhambat', ' Memperbanyak konsumsi lemak tak jenuh dan serat. Menghilangkan lemak menumpuk di perut dan bagian tubuh lainnya. Mengobati diabetes dan hipertensi. Berolahraga secara teratur. Tidak merokok. Menghindari minuman berakohol', 'Kondisi ketika mengalami gangguan pada jantung'),
(7, 'Insomnia', 'Stres, Depresi, Gaya hidup tidak sehat, Pengaruh obat-obatan tertentu', 'Sulit tidur atau tidur tidak nyenyak, akibat insomni biasanya mudah marah dan depresi, Gejala itu dapat memicu mengantk pada siang hari, Mudah lelah saat aktivitas, Sulit fokus dalam beraktivitas', 'Hindari banyak makan dan minum sebelum tidur, Usahakan aktif disiang hari agar terhindar dari tidur siang', 'Insomnia adalah gangguan tidur yang membuat orang sulit tidur.'),
(8, 'Cacar Air', 'Disebabkan oleh virus cacar ', 'Munculnya bintik kemerahan berisi cairan dan terasa gatal bintik cacar biasanya akan timbul pada wajah punggung kulit kepala dada perut lengan dan kaki', ' Cacar air dapat sembuh dengan sendirinya', 'Cacar air merupakan infeksi yang disebabkan oleh virus VAricella zoster.'),
(9, 'Sakit Mata', ' Iritasi.Infeksi.Cedera.Peradangan pada mata,Peningkatan tekanan bola mata', ' Mata merah, Mata Bengkak, Terasa nyeri dan gatal', ' Kompres kantung mata. Tetes air garam steril atau larutan saline. Kompres hangat. Kompres dingin. Hindari kebiasaan meguce-ngucek mata', 'Sakit mata merupakan gangguan penglihatan yang cukup sering sering terjadi dimasyarakat.'),
(10, 'Sakit Pinggang', ' Cedera otot dan sendi di daerah pinggang. Akibat mengangkat benda yang berat. Melakukan gerakan yang berulang-ulang', ' Pinggang pegal,kaku,nyeri menjalar pada pinggang,sulit untuk bergerak dan berdiri tegak karena nyeri di pinggang,tungkai terasa lemah atau mati rasa', 'Tetap beraktivitas. Kompres dingin atau hangat. Minum obat pereda nyeri, pelemas pinggang yang nyeri', 'Sakit pinggang merupakan gejala yang timbul terus-menerus di bagian pinggang.'),
(11, 'Nyeri Haid (Dismenore)', ' Otot pada rahim berkontraksi.pasokan oksigen ke rahim berkurang sehingga timbul rasa nyeri', ' Kram dibagian perut,menstruasi tidak lancar,rasa sakit dan mulas pada saat menstruasi berlebihan', ' Memijat dan mengompres hangat area perut yang sakit. Berolahraga ringan. Melakukan relaksasi,mandi air hangat. Mengkonsumsi sumplemen yang mengandung vitamin E, B6, omega 3 dan magnesium', 'Dismenore keluhan yang terjadi pada wanita yang sedang menstruasi.'),
(12, 'Diabetes', 'Kelebihan berat badan.Kelahiran prematur.', 'Sering merasa haus,Sering buang air kecil terutama di malam hari,Pandangan kabur,Sering mengalami infeksi misalnya gusi kulit vagina atau saluran kemis,', 'Mengatur frekuensi dan menu makanan harus lebih sehat.Menjaga berat badan.Rajin berolahraga.Rutin menjalani pengeckan gula darah setidaknya sekali dalam setahun', 'Diabetes adalah penyakit kronis yang ditandai dengan tingginya kadar gula darah.'),
(13, 'TBC (Tuberkulosis)', ' Diakibatkan kuman Mycobacterium tuberculosis', ' Batuk yang berlangsung lama (lebih dari 3 minggu) biasanya berdahak dan terkadang mengeluarkan darah, Berat badan turun, Tidak nafsu makan, Nyeri dada', ' TBC dapat disembuhkan jika penderita patuh mengomsumsi obat sesaui drngan resep dokter. Untuk mengatasi penyakit ini penderita perlu minum bebrapa jenis obat untuk waktu yang cukup lama (minimal 6 bulan)', 'TBC adalah penyakit paru-paru yang diakibatkan kuman Mycobacterium tuberculosis'),
(14, 'ISPA', ' Penyebab ISPA adalah infeksi virus atau bakteri pada sakuran pernafasan walaupun lebih sering disebabkan ileh virus atau bakteri penyakit ISPA ', 'Infeksi saluran pernafasan yang menimbulkan batuk pilek disertai demam yang mudah menular dan dapat dialami oleh siapa saja terutama anak-anak dan lansia, Penderita sulit bernafas, Muntah-Muntah, Muncul suara bengek saat menghembuskan nafas', 'Memperbanyak istirahat dan konsumsi air putih untuk menencerkan dahak.Berkumur dengan air hangat.Memposisikan kepala lebih tinggi ketka tidur.Mengonsumsi minuman lemon hangat atau madu untuk meredakan batuk', 'ISPA adalah infeksi saluran pernafasan yang sangat mudah menular dan dapat dialami oleh siapa saja.'),
(24, 'sakit doang biasa', 'SAKIT PARAHsakit doang', 'SAKIT PARAHsakit doang', 'SAKIT PARAHsakit doang', 'SAKIT PARAHsakit doang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rank`
--

CREATE TABLE `rank` (
  `id_billing` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rank`
--

INSERT INTO `rank` (`id_billing`, `id_room`, `id_dokter`) VALUES
(80831, 1112, 3113),
(80833, 1331, 3115),
(80834, 1121, 3114),
(80836, 689869, 3113),
(80837, 24251, 3113),
(80838, 1141, 3114),
(80839, 68131, 3111);

-- --------------------------------------------------------

--
-- Struktur dari tabel `room`
--

CREATE TABLE `room` (
  `id_room` int(128) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `room`
--

INSERT INTO `room` (`id_room`, `id_pasien`, `id_dokter`) VALUES
(1112, 5115, 3115),
(1121, 5113, 3114),
(1141, 5115, 3115),
(1221, 5113, 3113),
(1331, 5111, 3114),
(24251, 5113, 3113),
(68131, 5114, 3111),
(689869, 5112, 3113);

--
-- Trigger `room`
--
DELIMITER $$
CREATE TRIGGER `trigger_obrolan_after_insert` AFTER INSERT ON `room` FOR EACH ROW BEGIN
  INSERT INTO obrolan (id_obrolan, id_room, pesan, id_dokter, tanggal)
  VALUES (NEW.id_room, NEW.id_room, 'Pesan baru', NEW.id_dokter, CURRENT_TIMESTAMP);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indeks untuk tabel `katalog_obat`
--
ALTER TABLE `katalog_obat`
  ADD PRIMARY KEY (`id_katalogObat`);

--
-- Indeks untuk tabel `obrolan`
--
ALTER TABLE `obrolan`
  ADD PRIMARY KEY (`id_obrolan`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id_billing`);

--
-- Indeks untuk tabel `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78149;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6128;

--
-- AUTO_INCREMENT untuk tabel `katalog_obat`
--
ALTER TABLE `katalog_obat`
  MODIFY `id_katalogObat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3139;

--
-- AUTO_INCREMENT untuk tabel `obrolan`
--
ALTER TABLE `obrolan`
  MODIFY `id_obrolan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=689870;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5120;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=654;

--
-- AUTO_INCREMENT untuk tabel `rank`
--
ALTER TABLE `rank`
  MODIFY `id_billing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80840;

--
-- AUTO_INCREMENT untuk tabel `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=689870;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `obrolan`
--
ALTER TABLE `obrolan`
  ADD CONSTRAINT `obrolan_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`),
  ADD CONSTRAINT `obrolan_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);

--
-- Ketidakleluasaan untuk tabel `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
