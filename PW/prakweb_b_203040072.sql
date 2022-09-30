-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 10:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_b_203040072`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idBuku` int(10) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Pengarang` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Tahun` varchar(100) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idBuku`, `Judul`, `Pengarang`, `Gambar`, `Tahun`, `sinopsis`) VALUES
(1, 'Cantik Itu Luka (edisi 20 Tahun) ', 'Eka Kurniawan ', '6336516b76096.jpg', '3 Jul 2022', 'Di satu sore, seorang perempuan bangkit dari kuburannya setelah dua puluh\r\nsatu tahun kematian. Kebangkitannya menguak kutukan dan tragedi keluarga,\r\nyang terentang sejak akhir masa kolonial. Perpaduan antara epik keluarga\r\nyang dibalut roman, kisah hantu, kekejaman politik, mitologi, dan\r\npetualangan. Dari kekasih yang lenyap ditelan kabut hingga seorang ibu yang\r\nmenginginkan bayi buruk rupa.'),
(2, 'Cerita-cerita Bahagia Hampir Seluruhnya', 'Norman Erikson Pasaribu', 'B02.jpg', '19 Okt 2020', 'Setelah anak tunggalnya meninggal, seorang ibu pergi ke Vietnam karena cerita-cerita yang ia temukan di Wikipedia. Seorang penyair muda mengikuti petunjuk di milis untuk menyintas patah hati. Seorang mahasiswa rantau dihantui sebuah cerita pendek yang ia temukan di buletin komunitas gay di kotanya.\r\n\r\nPada cerita-cerita dalam buku ini, kita akan menemukan bagaimana kisah-kisah lama ikut mengatur arah dan mekanisme kehidupan kita.'),
(3, 'Kita Pergi Hari Ini', 'Ziggy Zezsyazeoviennazabrizkie', 'B03.jpg', '26 Okt 2021', 'Mi dan Ma dan Mo tidak pernah melihat kucing seperti Nona Gigi. Tentu saja, mereka sudah pernah melihat kucing biasa. Tapi Nona Gigi adalah Kucing Luar Biasa. Kucing Luar Biasa berarti kucing yang di luar kebiasaan. Nona Gigi adalah Cara Lain yang dinantikan oleh Bapak dan Ibu Mo untuk menjaga Mi, Ma, dan Mo ketika keduanya keluar rumah mencari uang. Sebab di Kota Suara, semua uang yang tersedia di dasar laut sudah diambil oleh para perompak, uang di bawah tanah diambil oleh para perampok, dan uang di ranting pohon diambil oleh pengusaha kayu yang jahat.\r\nNona Gigi mengajak Mi dan Ma dan Mo dan Fifi dan Fufu—anak kembar Tetangga Baru bertualang mengunjungi tempat-tempat indah. Mereka naik Kereta Air, bertemu Kolonel Jagung, bermain di Sirkus Sendu, dan menyaksikan kemegahan Kota Terapung Kucing Luar Biasa.\r\nKita pergi hari ini. Ke tempat-tempat indah dalam mimpi-mimpi anak-anak baik-baik.'),
(4, 'The Star and I', 'Ilana Tan', 'B04.jpg', '20 Jan 2021', '&quot;Kulihat dunia dalam matamu dan masa depan dalam senyummu...&quot; Sejak kecil, Olivia Mitchell ingin tahu siapa orangtua kandungnya. Jadi, ketika ia mendapat kesempatan bekerja di New York, ia pun menyambarnya tanpa ragu. Namun, mencari seseorang tanpa nama di kota sebesar New York adalah sesuatu yang mustahil. Kini kontrak kerja Olivia akan segera berakhir, dan Olivia menolak pulang ke Inggris sebelum berhasil melacak keberadaan orangtua kandungnya. Itu berarti ia harus segera mencari pekerjaan baru supaya ia bisa tetap tinggal di New York. Seolah-olah semua itu belum cukup memusingkan, Olivia mendadak bertemu kembali dengan Rex Rankin---sahabat masa kecilnya, sekaligus cinta pertamanya yang gagal---yang muncul untuk menawarkan bantuan.'),
(5, 'Bibi Gill ', 'Tere Liye', 'B05.png\r\n', '4 Mar 2022', 'Bagaimana menjadi petarung terkuat di dunia paralel? Dengan latihan panjang dan pengorbanan. Termasuk kehilangan dan kesedihan. Inilah kisah tentang Bibi Gill, yang sejak kecil berusaha mengalahkan monster dalam hidupnya.\r\nApakah dia bisa menemukan jawaban yang selama ini dia cari?\r\nHei, jika kalian melihat seseorang yang amat sederhana, seperti ibu-ibu penjaga kantin, tukang sapu, sopir ojek online. Jangan buru-buru menilainya memang sesederhana itu. Boleh jadi dia adalah pemilik teknik bertarung paling mematikan di dunia paralel.\r\nBuku ini adalah buku ke-72 dari serial BUMI.'),
(6, 'Layangan Putus ', 'Mommy ASF', 'B06.jpg', '20 Feb 2010', 'Seorang gadis remaja polos yang berasal dari daerah, tumbuh, berkembang, dan menemukan cinta di kota besar yang sangat berbeda dengan iklim daerah asalnya. Mimpi sederhananya menyambung pendidikan dan menyelesaikannya tepat waktu, namun berubah setelah ia mengenal sosok lelaki tangguh Lelaki yang mandiri dan berpendirian keras mengenalkannya dengan dunia baru yang belum pernah ia temui. Dunia yang asyik dan menyenangkan yang berbeda total dengan kehidupan remaja di daerah asalnya.\r\n\r\nKinan jatuh cinta dengan sosok fun Aris yang juga memiliki sifat gigih. Aris mengubah caranya memandang dunia. Berdua menyamakan visi dan berjanji dalam ikatan pernikahan. Bersama memulai semua kehidupan dari bawah, Kinan dengan setia mendampingi Aris membangun mimpi mereka. Perubahan pola pikir Aris kembali mengubah cara pandang Kinan terhadap prioritas kehidupan. Kinan tetap setia di sisiAris dan melupakan mimpinya menjadi seorang wanita karier. Memilih merawat keluarga di rumah memenuhi permintaan Aris '),
(7, 'Hujan ', 'Tere Liye', 'B07.jpg', '5 Sep 2022', 'Menceritakan tentang cerita persahabatan antara Lail dan Maryam. Ketika kedua anak manusia ini dipertemukan oleh kesempatan dan keadaan, maka mereka pun harus siap untuk menanti perpisahan yang akan datang kapan saja. Novel HUJAN berkisah tentang persahabatan, tentang cinta, tentang perpisahan, tentang melupakan, dan tentang hujan.'),
(8, 'Home Sweet Loan', 'Almira Bastari', 'B08.jpg', '16 Feb 2022', 'Empat orang yang berteman sejak SMA bekerja di perusahaan yang sama meski beda nasib. Di usia 31 tahun, mereka berburu rumah idaman yang minimal… nyerempet Jakarta. Kaluna, pegawai Bagian Umum, yang gajinya tak pernah menyentuh dua digit. Gadis ini kerja sampingan sebagai model bibir, bermimpi membeli rumah demi keluar dari situasi tiga kepala keluarga yang bertumpuk di bawah satu atap. Di tengah perjuangannya menabung, Kaluna dirongrong oleh kekasihnya untuk pesta pernikahan mewah. Tanisha, ibu satu anak yang menjalani Long Distance Marriage, mencari rumah murah dekat MRT yang juga bisa menampung mertuanya. Kamamiya, yang berambisi menjadi selebgram, mencari apartemen cantik untuk diunggah ke media sosial demi memenuhi gengsinya agar bisa menikah dengan pria kaya. Danan, anak tunggal tanpa beban yang akhirnya berpikir untuk berhenti hura-hura, dan membeli aset agar bisa pensiun dengan tenang. Apakah keempat sahabat ini berhasil menemukan rumah yang mampu mereka cicil? Dan apakah Kalun'),
(9, 'Heartbreak Motel', 'Ika Natassa', 'B09.jpg', '8 Apr 2022', 'Dalam hidup yang tidak pernah berhenti menyimpan misteri dan menyembunyikan arti, tidak selalu memberikan jawaban atas setiap pertanyaan, dan waktu bergulir---satu jam, satu momen, satu hari, satu minggu, satu bulan---pertanyaan dan permasalahan baru terus lahir sebelum yang lama sempat terurai, Ava menemukan panggilan hati sebagai aktris sejak usianya enam belas tahun. Berpindah dari satu peran ke peran lain---ada yang dia pilih, ada yang memilihnya---Ava berupaya membuat semua yang tidak dipahaminya tentang takdir menjadi terasa masuk akal. Dia tidak peduli bahwa setiap selesai memikul peran, dia harus menyepi, jungkir balik memulihkan diri di satu tempat yang disebutnya Heartbreak Motel. Di ulang tahunnya yang ketiga puluh, dimulai dari tempat itu, pertanyaan-pertanyaan baru menyergapnya tumpang-tindih, dihadirkan oleh tiga lelaki yang mengisyaratkan sekaligus mengecoh masa lalu, masa kini, dan masa depannya.'),
(10, 'Laut Bercerita', 'Leila S. Chudori', 'B10.jpg', '21 Des 2017', 'Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idBuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `idBuku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
