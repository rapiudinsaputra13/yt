-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Okt 2022 pada 08.57
-- Versi server: 10.3.36-MariaDB-cll-lve
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plantees_titimangsadb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_group_user`
--

CREATE TABLE `cms_group_user` (
  `id` int(15) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `status` set('0','1') NOT NULL DEFAULT '0',
  `description` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cms_group_user`
--

INSERT INTO `cms_group_user` (`id`, `group_name`, `status`, `description`, `created`, `updated`, `created_by`, `updated_by`) VALUES
(1, 'superadmin', '1', 'Roles tertinggi', '2014-01-28 14:29:13', '2014-04-07 22:08:40', 57, 57),
(2, 'admin', '1', 'Staff administrasi pool ', '2014-01-28 14:31:36', '2014-04-07 22:08:24', 57, 57),
(3, 'user', '1', 'User', '2016-05-21 15:39:31', '2016-05-21 15:40:10', 57, 57),
(9, 'partner', '1', 'partnership', '2017-09-23 13:34:59', '2017-09-23 13:36:41', 57, 57);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_users`
--

CREATE TABLE `cms_users` (
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(15) NOT NULL,
  `client` int(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `id_number` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `status` set('0','1') NOT NULL DEFAULT '0',
  `status_online` set('0','1') NOT NULL DEFAULT '0',
  `subscribe` enum('y','n') NOT NULL DEFAULT 'n',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cms_users`
--

INSERT INTO `cms_users` (`id`, `username`, `password`, `group_id`, `client`, `phone`, `id_number`, `email`, `status`, `status_online`, `subscribe`, `created`, `updated`, `created_by`, `updated_by`) VALUES
(1, 'admin', 'eee2d52b44ef84ed359171796d5cbe1f', 1, 1, '123', '', 'admin@gmail.com', '1', '1', 'n', '2015-12-02 12:02:35', '2022-09-05 09:30:30', 57, 57),
(2, 'admin_rdpl', '0f4dc401cf6a3e77f880711791133bf3', 2, 1, '123456', '', 'marketing@rdpl.co.id', '1', '0', 'n', '2014-08-03 15:19:47', '2022-09-05 12:18:40', 57, 36),
(3, 'admin_titimangsa', 'eee2d52b44ef84ed359171796d5cbe1f', 2, 2, '0989909980', '', 'tiket@titimangsa.or.id', '1', '0', 'n', '2017-01-31 15:16:01', '2022-07-25 16:40:04', 57, 70),
(4, 'user_rdpl', '202cb962ac59075b964b07152d234b70', 2, 0, '98765', '', 'user_rdpl@gmail.com', '1', '0', 'n', '2017-02-04 09:57:32', '2019-02-15 09:22:08', 57, 74),
(5, 'user_titimangsa', 'e10adc3949ba59abbe56e057f20f883e', 2, 0, '56789', '', 'user_titimangsa@gmail.com', '1', '0', 'n', '2017-02-04 09:58:11', '2019-03-15 09:58:35', 57, 75),
(6, 'pradetya11@gmail.com', 'f526b0db0d623f7faf69c2046fb1397d', 2, 0, '081394269285', '', 'pradetya11@gmail.com', '1', '1', 'n', '2017-02-08 08:46:23', '2022-08-22 13:01:37', 57, 86),
(7, 'dzikrirobbi', 'eee2d52b44ef84ed359171796d5cbe1f', 3, 0, '123456', '', 'dzikrirobbi@gmail.com', '1', '0', 'n', '2017-02-08 05:23:35', '2022-09-01 13:03:05', 57, 79),
(8, 'hikam.haikal2@gmail.com', '', 3, 0, '087812732427', '', 'hikam.haikal2@gmail.com', '0', '0', 'n', '2017-02-17 10:18:37', '2017-02-17 10:18:37', 57, 57),
(9, 'admin_titimangsa2', 'eee2d52b44ef84ed359171796d5cbe1f', 2, 2, '08112048808', '123456', 'info@titimangsa.or.id', '1', '0', 'n', '2017-10-01 14:40:14', '2022-08-29 13:09:43', 57, 652),
(16, 'Ganjar Pramono', 'eee2d52b44ef84ed359171796d5cbe1f', 3, 0, '081222592358', '', 'ganjaarpr@gmail.com', '1', '0', 'n', '2017-09-25 14:58:27', '2022-08-19 23:22:42', 0, 2259),
(10, 'MUHAMMAD HAIKAL MUBAROK', 'd9d479e9901261881867e63ca6dce06c', 3, 0, '082227784509', '', 'haikalmubarok24@gmail.com', '1', '1', 'n', '2017-09-25 14:58:27', '2019-02-18 00:21:24', 0, 2717),
(11, 'Nega Yoselina', 'd8318d5d11c39508306c373603a54ad9', 2, 2, '085691006126', NULL, 'nega.banuampu@gmail.com', '1', '1', 'n', '2020-03-02 15:51:52', '2022-09-05 13:18:14', 5396, 5396),
(12, 'Haikal Mubarok', 'e8092dfd502e94710fab84657c465414', 3, 0, '082227784509', NULL, 'mubarock48@gmail.com', '1', '0', 'n', '2022-05-06 12:42:22', '2022-05-06 12:42:22', 9082, 9082),
(13, 'Dika Maulana', 'dikam123', 3, 2, '081212638609', NULL, 'mdika8140@gmail.com', '1', '0', 'n', '2022-07-04 17:53:58', '2022-08-18 09:17:38', 9907, 9907),
(14, 'Tifa', '1bad436dae4aafeba0def8f4d3d8c655', 3, 2, '081808370552', NULL, 'tifafauzi7@gmail.com', '1', '1', 'n', '2022-07-18 09:51:35', '2022-09-05 13:01:46', 9910, 9910),
(15, 'Nega Yoselina', 'fcea920f7412b5da7be0cf42b8c93759', 3, 0, '085691006126', NULL, 'negayoselinabanuampu@gmail.com', '1', '0', 'n', '2022-07-19 17:27:07', '2022-08-29 00:28:28', 9912, 9912);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_class`
--

CREATE TABLE `st_class` (
  `id` int(15) NOT NULL,
  `class` varchar(50) NOT NULL,
  `status` set('0','1') NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_class`
--

INSERT INTO `st_class` (`id`, `class`, `status`, `created`, `updated`, `created_by`, `updated_by`) VALUES
(1, 'Diamond', '1', '2018-09-11 00:00:00', '2018-09-11 00:00:00', 57, 57),
(2, 'Platinum', '1', '2018-09-11 00:00:00', '2018-09-11 00:00:00', 57, 57),
(3, 'VVIP', '1', '2018-09-11 00:00:00', '2018-09-11 00:00:00', 57, 57),
(4, 'VIP', '1', '2018-09-11 00:00:00', '2018-09-11 00:00:00', 57, 57),
(5, 'Kelas 1', '1', '2018-09-11 00:00:00', '2018-09-11 00:00:00', 57, 57),
(9, 'Kelas 2', '1', '2018-09-11 00:00:00', '2018-09-11 00:00:00', 57, 57),
(10, 'Kelas 3', '1', '2018-09-11 00:00:00', '2018-09-11 00:00:00', 57, 57),
(12, 'Media', '1', '2022-08-08 14:20:24', '2022-08-08 14:20:24', 57, 57);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_client`
--

CREATE TABLE `st_client` (
  `id` int(15) NOT NULL,
  `client` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `rules` text NOT NULL,
  `rules2` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL,
  `status` set('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_client`
--

INSERT INTO `st_client` (`id`, `client`, `description`, `rules`, `rules2`, `logo`, `email`, `bank`, `created`, `updated`, `created_by`, `updated_by`, `status`) VALUES
(1, 'RDPL', 'Ini akun client utama, tidak boleh dihapus', '', '', '', '', '', '2017-02-04 09:45:28', '2017-02-04 09:45:28', 57, 57, '1'),
(2, 'Titimangsa', 'Titimangsa Foundation', '- Waktu pembayaran selama 1 jam. Apabila pembayaran belum dilakukan dalam 1 jam, maka pembelian akan dibatalkan secara otomatis. -\n            <br/>\n            - Setelah melakukan pembayaran harap konfirmasi pembayaran Anda melalui akun Anda di https://www.tiket-titimangsa.com atau melalui WA <a href=\"https://wa.me/6282112573677\">082112573677</a>  -\n            <br/>\n            - E-Ticket akan dikirim 3 x 24 jam setelah konfirmasi pembayaran. -\n<br/>', '        <h5 class=\"mb-0 text-center\">Terms & Condition</h5>\n<ul>\n<li>E-ticket ini adalah TIKET anda yang sah. Dimohon untuk tidak membagikan tanda masuk berupa BARCODE kepada siapapun. </li>\n<li>Harga yang tercantum sudah termasuk Pajak Tontonan sebesar 5%</li>\n<li>Nomor tempat duduk tidak dapat ditukar.</li>\n<li>Tiket yang sudah dibeli tidak dapat dikembalikan atau diuangkan kembali.</li>\n<li>Kami tidak bertanggung jawab atas kehilangan E-Ticket dan pembelian di luar pihak penyelenggara.</li>\n<li>Dilarang mengambil foto/video dengan kamera profesional, handphone atau yang lain.</li>\n<li>DILARANG MEMBAWA SENJATA ATAU OBAT-OBATAN TERLARANG.</li>\n<li>Penyelenggara berhak untuk tidak memberikan izin untuk masuk ke dalam tempat acara apabila syarat-syarat ketentuan tidak dipenuhi.</li>\n</ul>    ', 'logoobrown.png', 'tiket@titimangsa.or.id', 'BRI KC Jakarta Pasar Minggu<br/>\na/n Yayasan Titimangsa<br/>\nno. 0339-01-001760-56-9<br/>', '2017-02-04 09:45:55', '2017-02-04 09:46:18', 57, 57, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_event`
--

CREATE TABLE `st_event` (
  `id` int(15) NOT NULL,
  `event` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `rules` text DEFAULT NULL,
  `rules2` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `imageland` text DEFAULT NULL,
  `undate` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `andate` varchar(50) NOT NULL,
  `time` varchar(255) NOT NULL,
  `location` int(15) NOT NULL,
  `client` int(15) NOT NULL,
  `layout` int(15) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL,
  `status` set('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_event`
--

INSERT INTO `st_event` (`id`, `event`, `description`, `rules`, `rules2`, `image`, `imageland`, `undate`, `date`, `andate`, `time`, `location`, `client`, `layout`, `created`, `updated`, `created_by`, `updated_by`, `status`) VALUES
(6, 'Teater Musikal Inggit Garnasih \"Tegar Setelah Ombak\"', 'Monolog Happy Salma dalam\nTEATER MUSIKAL INGGIT GARNASIH\n-Ketika Sejengkal adalah Jarak yang Terlampau Jauh-', '-', '        <h5 class=\"mb-0 text-center\">Terms & Condition</h5>\n<ul>\n<li>E-ticket ini adalah TIKET anda yang sah. Dimohon untuk tidak membagikan tanda masuk berupa BARCODE kepada siapapun. </li>\n<li>Harga yang tercantum sudah termasuk Pajak Tontonan sebesar 5%</li>\n<li>Nomor tempat duduk tidak dapat ditukar.</li>\n<li>Tiket yang sudah dibeli tidak dapat dikembalikan atau diuangkan kembali.</li>\n<li>Kami tidak bertanggung jawab atas kehilangan E-Ticket dan pembelian di luar pihak penyelenggara.</li>\n<li>Dilarang mengambil foto/video dengan kamera profesional, handphone atau yang lain.</li>\n<li>DILARANG MEMBAWA SENJATA ATAU OBAT-OBATAN TERLARANG.</li>\n<li>Penyelenggara berhak untuk tidak memberikan izin untuk masuk ke dalam tempat acara apabila syarat-syarat ketentuan tidak dipenuhi.</li>\n</ul>    ', 'inggit.jpeg', NULL, '2022-05-20', '2022-05-21', '2019-03-14', '20.00 WIB', 8, 2, 9, '2019-02-13 17:23:51', '2019-02-13 18:00:21', 57, 57, '0'),
(7, 'Teater Musikal Inggit Garnasih \"Tegar Setelah Ombak\"', 'Monolog Happy Salma dalam\nTEATER MUSIKAL INGGIT GARNASIH\n-Ketika Sejengkal adalah Jarak yang Terlampau Jauh-', '-', '        <h5 class=\"mb-0 text-center\">Terms & Condition</h5>\n<ul>\n<li>E-ticket ini adalah TIKET anda yang sah. Dimohon untuk tidak membagikan tanda masuk berupa BARCODE kepada siapapun. </li>\n<li>Harga yang tercantum sudah termasuk Pajak Tontonan sebesar 5%</li>\n<li>Nomor tempat duduk tidak dapat ditukar.</li>\n<li>Tiket yang sudah dibeli tidak dapat dikembalikan atau diuangkan kembali.</li>\n<li>Kami tidak bertanggung jawab atas kehilangan E-Ticket dan pembelian di luar pihak penyelenggara.</li>\n<li>Dilarang mengambil foto/video dengan kamera profesional, handphone atau yang lain.</li>\n<li>DILARANG MEMBAWA SENJATA ATAU OBAT-OBATAN TERLARANG.</li>\n<li>Penyelenggara berhak untuk tidak memberikan izin untuk masuk ke dalam tempat acara apabila syarat-syarat ketentuan tidak dipenuhi.</li>\n</ul>    ', 'inggit.jpeg', NULL, '2022-05-19', '2022-05-20', '2019-03-14', '20.00 WIB', 8, 2, 9, '2019-02-13 17:23:51', '2019-02-13 18:00:21', 57, 57, '0'),
(8, 'Sudamala', '-', 'Dresscode: atasan putih (kebaya, kaos, kemeja, kerudung dll) dan dengan bawahan bebas', '<ul>\n<li>Penonton wajib sudah mendapatkan vaksin booster.</li>\n<li>Kami hanya menyediakan drop off area di Gd. Arsip. Penonton yang mengendarai kendaraan pribadi akan diarahkan untuk parkir di Grand Paragon Hotel (750 meter dari Gd. Arsip). Tersedia mobil transit (shuttle car) untuk penonton dari Grand Paragon Hotel menuju Gd. Arsip dan sebaliknya.</li>\n<li>Kami ingin Anda menjadi bagian dari pertujukan ini dan berharap Anda mengenakan dresscode atasan putih (kebaya, kaos, kemeja, kerudung dll) dan dengan bawahan bebas sesuai dengan kebiasaan atau ekspresi Anda.</li>\n<li>Nomor tempat duduk tidak dapat ditukar.</li>\n<li>Tiket yang sudah dibeli tidak dapat dikembalikan atau diuangkan kembali.</li>\n<li>Kami tidak bertanggung jawab atas kehilangan E-Ticket dan pembelian di luar pihak penyelenggara.</li>\n<li>Harga yang tercantum sudah termasuk Pajak Tontonan sebesar 5%</li>\n<li>Dilarang mengambil foto/video dengan kamera handphone atau profesional.</li>\n<li>DILARANG MEMBAWA SENJATA ATAU OBAT-OBATAN TERLARANG.</li>\n<li>Penyelenggara berhak untuk tidak memberikan izin untuk masuk ke dalam tempat acara apabila syarat-syarat ketentuan tidak dipenuhi.</li>\n</ul>', 'sudamalaposterpotrait.jpg', 'sudamala-eticket.jpg', '', '2022-09-10', '', '20.00 WIB', 9, 2, 10, '2022-07-13 13:39:58', '2022-07-13 13:39:58', 57, 57, '1'),
(9, 'Sudamala', '-', 'Dresscode: atasan putih (kebaya, kaos, kemeja, kerudung dll) dan dengan bawahan bebas', '<ul>\n<li>Penonton wajib sudah mendapatkan vaksin booster.</li>\n<li>Kami hanya menyediakan drop off area di Gd. Arsip. Penonton yang mengendarai kendaraan pribadi akan diarahkan untuk parkir di Grand Paragon Hotel (750 meter dari Gd. Arsip). Tersedia mobil transit (shuttle car) untuk penonton dari Grand Paragon Hotel menuju Gd. Arsip dan sebaliknya.</li>\n<li>Kami ingin Anda menjadi bagian dari pertujukan ini dan berharap Anda mengenakan dresscode atasan putih (kebaya, kaos, kemeja, kerudung dll) dan dengan bawahan bebas sesuai dengan kebiasaan atau ekspresi Anda.</li>\n<li>Nomor tempat duduk tidak dapat ditukar.</li>\n<li>Tiket yang sudah dibeli tidak dapat dikembalikan atau diuangkan kembali.</li>\n<li>Kami tidak bertanggung jawab atas kehilangan E-Ticket dan pembelian di luar pihak penyelenggara.</li>\n<li>Harga yang tercantum sudah termasuk Pajak Tontonan sebesar 5%</li>\n<li>Dilarang mengambil foto/video dengan kamera handphone atau profesional.</li>\n<li>DILARANG MEMBAWA SENJATA ATAU OBAT-OBATAN TERLARANG.</li>\n<li>Penyelenggara berhak untuk tidak memberikan izin untuk masuk ke dalam tempat acara apabila syarat-syarat ketentuan tidak dipenuhi.</li>\n</ul>', 'sudamalaposterpotrait.jpg', 'sudamala-eticket.jpg', '', '2022-09-11', '', '20.00 WIB', 9, 2, 10, '2022-07-20 13:05:43', '2022-07-20 13:05:43', 57, 57, '1'),
(10, 'Sudamala', '-', 'Dresscode: atasan putih (kebaya, kaos, kemeja, kerudung dll) dan dengan bawahan bebas', '<ul>\n<li>Penonton wajib sudah mendapatkan vaksin booster.</li>\n<li>Kami hanya menyediakan drop off area di Gd. Arsip. Penonton yang mengendarai kendaraan pribadi akan diarahkan untuk parkir di Grand Paragon Hotel (750 meter dari Gd. Arsip). Tersedia mobil transit (shuttle car) untuk penonton dari Grand Paragon Hotel menuju Gd. Arsip dan sebaliknya.</li>\n<li>Kami ingin Anda menjadi bagian dari pertujukan ini dan berharap Anda mengenakan dresscode atasan putih (kebaya, kaos, kemeja, kerudung dll) dan dengan bawahan bebas sesuai dengan kebiasaan atau ekspresi Anda.</li>\n<li>Nomor tempat duduk tidak dapat ditukar.</li>\n<li>Tiket yang sudah dibeli tidak dapat dikembalikan atau diuangkan kembali.</li>\n<li>Kami tidak bertanggung jawab atas kehilangan E-Ticket dan pembelian di luar pihak penyelenggara.</li>\n<li>Harga yang tercantum sudah termasuk Pajak Tontonan sebesar 5%</li>\n<li>Dilarang mengambil foto/video dengan kamera handphone atau profesional.</li>\n<li>DILARANG MEMBAWA SENJATA ATAU OBAT-OBATAN TERLARANG.</li>\n<li>Penyelenggara berhak untuk tidak memberikan izin untuk masuk ke dalam tempat acara apabila syarat-syarat ketentuan tidak dipenuhi.</li>\n</ul>', 'sudamalaposterpotrait.jpg', 'sudamala-eticket.jpg', '', '2022-09-09', '', '20.00 WIB', 9, 2, 10, '2022-07-21 22:30:10', '2022-07-21 22:30:10', 57, 57, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_gate`
--

CREATE TABLE `st_gate` (
  `id` int(11) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `gate` varchar(255) NOT NULL,
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_invoice`
--

CREATE TABLE `st_invoice` (
  `id` int(11) NOT NULL,
  `redeem` int(11) NOT NULL,
  `payment_via` set('0','1') DEFAULT '0',
  `description` longtext DEFAULT NULL,
  `price` int(15) NOT NULL,
  `people` int(15) NOT NULL,
  `discount` int(15) DEFAULT NULL,
  `total` int(15) NOT NULL,
  `client` int(15) NOT NULL,
  `nama_pengirim` varchar(150) DEFAULT NULL,
  `bank_pengirim` varchar(150) DEFAULT NULL,
  `no_rekening` varchar(100) DEFAULT NULL,
  `tgl_transfer` varchar(150) DEFAULT NULL,
  `jml_transfer` varchar(50) DEFAULT NULL,
  `bukti_transfer` varchar(150) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL,
  `limit` int(10) DEFAULT NULL,
  `notif` int(11) NOT NULL,
  `sent_email` int(11) NOT NULL,
  `status` set('0','1','2','3','4') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_layout`
--

CREATE TABLE `st_layout` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `location` int(15) NOT NULL,
  `template` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL,
  `status` set('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_layout`
--

INSERT INTO `st_layout` (`id`, `name`, `description`, `location`, `template`, `created`, `updated`, `created_by`, `updated_by`, `status`) VALUES
(1, 'Taman Budaya Bandung', 'Layout di Taman Budaya Bandung, conoth dari Titimangsa', 1, 'taman-budaya-bandung', '2017-02-05 01:37:26', '2017-02-05 01:37:26', 57, 57, '1'),
(3, 'Test jogja', 'tes', 2, 'test', '2017-02-05 01:54:54', '2017-09-23 06:13:41', 57, 57, '0'),
(7, 'TIM 3 Lt', 'Pementasan TIM', 6, 'tim-3lt', '2017-09-23 08:00:43', '2017-09-23 08:00:43', 57, 57, '1'),
(8, 'Gedung Kesenian Jakarta', '-', 7, 'gkj', '2019-01-04 14:59:42', '2019-01-04 14:59:42', 57, 57, '1'),
(9, 'Ciputra', '-', 8, 'ciputra', '2019-01-04 14:59:42', '2019-01-04 14:59:42', 57, 57, '1'),
(10, 'Gedung Arsip', 'Gedung Arsip', 9, 'sudamala', '2022-07-17 21:09:58', '2022-07-21 22:31:02', 57, 57, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_location`
--

CREATE TABLE `st_location` (
  `id` int(15) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `map` longtext NOT NULL,
  `status` set('0','1') NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_location`
--

INSERT INTO `st_location` (`id`, `location`, `description`, `map`, `status`, `created`, `updated`, `created_by`, `updated_by`) VALUES
(1, 'Bandung - Taman Budaya', 'Jl. Bukit Dago Utara No.53, Dago, Coblong, Kota Bandung, Jawa Barat 40135', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.184249196618!2d107.61625501522389!3d-6.8685125950365125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6e0ff0f1969%3A0xbfa6edb011767301!2sTaman+Budaya+Jawa+Barat!5e0!3m2!1sid!2sid!4v1486164700318\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '1', '2018-09-11 00:00:00', '2018-09-11 00:01:00', 57, 57),
(2, 'Jogja - Test Tempat', '', '', '0', '2018-09-11 00:00:00', '2018-09-11 00:00:00', 57, 57),
(6, 'Teater Jakarta, Taman Ismail Marzuki', 'Pementasan di Taman Ismail Marzuki', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.237567021191!2d107.54459804999999!3d-6.8534691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f43903fd0243%3A0x5ad460674c5ead3a!2sTaman+Ismail+Marzuki!5e0!3m2!1sid!2sid!4v1506128384088\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '1', '2017-09-23 08:00:01', '2019-02-13 17:30:38', 57, 57),
(7, 'Jakarta - GKJ', '-', '-', '1', '2019-01-04 14:58:53', '2019-01-04 14:58:53', 57, 57),
(8, 'Ciputra ArtPreneur Theater', '-', '-', '1', '2019-01-04 14:58:53', '2019-01-04 14:58:53', 57, 57),
(9, 'Gedung Arsip Nasional Republik Indonesia', 'Jl. Gajah Mada No. 111, Jakarta Barat', 'Maps', '1', '2022-07-17 21:08:57', '2022-07-20 17:34:29', 57, 57);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_poster`
--

CREATE TABLE `st_poster` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_poster`
--

INSERT INTO `st_poster` (`id`, `name`, `status`, `created`, `created_by`, `updated`, `updated_by`) VALUES
(1, '1.png', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(2, '2.png', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(3, '3.png', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(4, '4.png', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(5, '5.png', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(6, '6.jpg', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(7, '7.jpg', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(8, '8.jpg', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(9, '9.jpg', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(10, '10.jpg', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1),
(11, '11.jpg', 1, '2022-10-10 12:08:13', 1, '2022-10-10 12:08:13', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_postingan`
--

CREATE TABLE `st_postingan` (
  `id_postingan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `subjudul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `pemain` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `produser` varchar(255) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `musik` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `tempat` text NOT NULL,
  `tag` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated` varchar(255) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_postingan`
--

INSERT INTO `st_postingan` (`id_postingan`, `judul`, `subjudul`, `deskripsi`, `pemain`, `link`, `produser`, `sutradara`, `musik`, `tanggal`, `waktu`, `tempat`, `tag`, `poster`, `created`, `created_by`, `updated`, `updated_by`) VALUES
(1, 'Test Postingan 1', 'test postingan 1', 'test postingan pertama', 'pemain1,pemain2,pemain3,pemain4,', '', 'youtube.com', 'Test1.1', '74026bf29b7a4fdcf16942d51f54a6d2.mp3', 'Senin, 26 September 2022', '14:31', 'Bandung', '#tag1,#tag2,#tag3,#tag4,', '95ad571adbe0b9cd445a517f58e27920.jpg', '2022-09-26 02:45:13pm', 7, NULL, NULL),
(3, 'Test Postingan 3', 'test postingan 3', 'Test posting ke tiga', 'pemain1.3,pemain2.3,', 'youtube.com/watch?v=Yw52l0zyBzI', 'Test1.2', 'Test2.2', 'Stafaband', 'Selasa, 27 September 2022', '13:02', 'Bandung', '#tag1.3,#tag2.3,', '6a6f4daf9cfcda14569054bd4c154da1.png', '2022-09-27 01:05:40pm', 7, NULL, NULL),
(4, 'Postingan ke 4', 'Postingan ke 4', 'Test edit postingan ke 4', 'pemain2.4.1,pemain3.4.1,pemain1.4.1,pemain4.4.1,pemain5.4.1,pemain6.4.1,', 'https://www.youtube.com/watch?v=h0KYF2Crap4&ab_channel=WindahBasudara', 'Test4.1.1', 'Test4.1.1', 'Anjay Mabar', '2022-09-28', '10:11', 'Cimahi', '#tag2.4.1,#tag3.4.1,#tag1.4.1,#tag4.4.1,#tag5.4.1,#tag6.4.1,', '6c253251ca2fa0a326fa9168b7f1699c.jpg', '2022-09-27 04:26:31pm', 7, '2022-09-28 01:28:17pm', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_qa`
--

CREATE TABLE `st_qa` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_qa`
--

INSERT INTO `st_qa` (`id`, `question`, `answer`, `created`, `updated`, `created_by`, `updated_by`) VALUES
(1, 'Cara Beli Tiket ?', 'Klik tombol \'BOOK NOW\' sesuai dengan tanggal pertunjukkan yang dipilih > Register/Login jika sudah memiliki akun > Pilih Kelas > Tentukan\njumlah Tiket dan pilih seat', '2019-02-17 08:50:08', '2019-02-17 17:10:52', 57, 57),
(2, 'Apakah ada batasan jumlah pembelian Tiket ?', 'Maksimal 10 Tiket untuk masing-masing user', '2019-02-17 09:02:02', '2019-02-17 09:02:02', 57, 57),
(3, 'Cara Konfirmasi Pembayaran Tiket ?', 'Setelah Login > klik \'account\' > \'Reservation\' > klik \'detail\' pada invoice > klik \'KONFIRMASI PEMBAYARAN\' di kanan bawah > isi form + upload bukti transfer', '2019-02-17 09:06:23', '2019-02-19 10:22:31', 57, 57),
(5, 'Berapa lama proses setelah Konfirmasi Pembayaran Tiket ?', 'Status on review : Bukti transfer sedang direview oleh admin keuangan maks. 3x24 jam. Kode Tiket akan dikirim melalui email yang terdaftar pada akun Titimangsa', '2019-02-17 09:16:14', '2019-02-18 21:24:35', 57, 57),
(6, 'Apakah ada penambahan tiket/seat ?', 'untuk saat ini untuk penambahan atau update kelas dan seat, akan diinfo melalui akun instagram dan twitter Titimangsa', '2019-02-17 09:41:50', '2019-02-17 09:41:50', 57, 57),
(7, 'Jika Tiket sudah habis apakah bisa WL (waiting list) ?', 'Mohon maaf  TIDAK ADA, dikarenakan kami hanya menerima reservasi Tiket melalui sistem', '2019-02-17 09:42:06', '2019-02-17 09:42:06', 57, 57),
(8, 'Waktu Pertunjukan ?', 'Seluruh penonton diharapkan datang 1 jam sebelum pertunjukkan', '2019-02-17 09:42:23', '2019-02-17 09:42:23', 57, 57),
(9, 'Info Status Tiket ?', 'EXPIRED : Tiket sudah tidak bisa dikonfirmasi lagi, diharapkan melakukan reservasi ulang.\n       ON REVIEW : Tiket yang sudah dibayar dan dikonfirmasi, dan sedang direview oleh admin pembayaran\n       PAID : Tiket sudah berhasil direview dan kode Tiket sudah dikirim melalui email terdaftar', '2019-02-17 09:42:36', '2019-02-17 09:42:36', 57, 57),
(10, 'Bagaimana cara melihat denah / layout seat ?', 'Denah panggung / layout seat bisa dilihat setelah \'Register/Login\' > Pilih Tanggal & Kelas pertunjukkan > lalu denah akan muncul sesuai dengan kelas yang dipilih', '2019-02-17 11:07:19', '2019-02-18 21:25:14', 57, 57),
(11, 'Informasi lebih lanjut :', '0858 1442 7472 //\n0821 2322 4667 //\n0819 3866 3867', '2019-02-18 21:26:43', '2019-02-18 21:27:21', 57, 57);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_reservation`
--

CREATE TABLE `st_reservation` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `ticket` int(15) NOT NULL,
  `information` longtext NOT NULL,
  `seat` varchar(100) NOT NULL,
  `invoice` int(15) NOT NULL,
  `client` int(15) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL,
  `note` longtext DEFAULT NULL,
  `status` set('0','1','2','3') NOT NULL DEFAULT '1',
  `checkin` int(11) NOT NULL,
  `checkin_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_reservation_undangan`
--

CREATE TABLE `st_reservation_undangan` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `ticket` int(15) NOT NULL,
  `information` varchar(255) NOT NULL,
  `tgl_event` int(11) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `invoice` int(15) NOT NULL,
  `client` int(15) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL,
  `note` longtext NOT NULL,
  `status` enum('0','1','2','3') CHARACTER SET latin1 NOT NULL DEFAULT '1',
  `checkin` int(11) NOT NULL,
  `checkin_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_sponsor`
--

CREATE TABLE `st_sponsor` (
  `id_sponsor` int(11) NOT NULL,
  `nama_sponsor` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated` varchar(255) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_sponsor`
--

INSERT INTO `st_sponsor` (`id_sponsor`, `nama_sponsor`, `logo`, `created`, `created_by`, `updated`, `updated_by`) VALUES
(2, 'test sponsor 1', '4fbcf99d684d3320d9e2b575dcd7674e.png', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0),
(6, 'test sponsor 3', '4e2c4c548003706be128166d13303283.png', '2022-09-23 10:41:40am', 7, '2022-09-23 10:42:46am', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_struktur_organisasi`
--

CREATE TABLE `st_struktur_organisasi` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `jabatan` varchar(256) NOT NULL,
  `picture` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated` datetime NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_struktur_organisasi`
--

INSERT INTO `st_struktur_organisasi` (`id`, `name`, `jabatan`, `picture`, `created`, `created_by`, `updated`, `updated_by`) VALUES
(1, 'Happy Salma', 'Pendiri & Pengurus', 'happysalma.jpg', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(2, 'Yulia Evina Bhara', 'Pendiri', 'ava.png', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(3, 'Wawan Sofyan', 'Dewan Pembina', 'wawansofyan.jpg', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(4, 'Agus Noor', 'Dewan Pembina', 'agusnoor.jpg', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(5, 'Iskandar K. Loedin', 'Dewan Pembina', 'iskandarkloedin.jpg', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(6, 'Ahda Imran', 'Dewan Pembina', 'ava.png', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(7, 'Jais Darga Wijaya', 'Dewan Pembina', 'ava.png', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(8, 'Pradetya Novitri', 'Pengurus', 'pradetyanofitri.jpg', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(9, 'M. Haikal Mubarok', 'Pengurus', 'haikalmubarok.jpg', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(10, 'Vanesa Martida', 'Pengurus', 'vanesamartida.jpg', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(11, 'Angelina Arcana', 'Pengurus', 'angelinaarcana.jpg', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1),
(12, 'Maria Agustina Meo', 'Pengurus', 'ava.png', '2022-10-10 15:29:50', 1, '2022-10-10 15:29:50', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_ticket`
--

CREATE TABLE `st_ticket` (
  `id` int(15) NOT NULL,
  `event` int(15) NOT NULL,
  `class` int(15) NOT NULL,
  `price` int(15) NOT NULL,
  `pre_price` int(15) NOT NULL,
  `pre_until` varchar(100) NOT NULL,
  `count` int(15) NOT NULL,
  `code` longtext NOT NULL,
  `invitation` set('0','1') NOT NULL DEFAULT '0',
  `group` int(15) NOT NULL,
  `client` int(15) NOT NULL,
  `quota` int(11) NOT NULL,
  `demo` set('0','1') NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_by` int(15) NOT NULL,
  `updated_by` int(15) NOT NULL,
  `status` set('0','1') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `st_ticket`
--

INSERT INTO `st_ticket` (`id`, `event`, `class`, `price`, `pre_price`, `pre_until`, `count`, `code`, `invitation`, `group`, `client`, `quota`, `demo`, `sort`, `created`, `updated`, `created_by`, `updated_by`, `status`) VALUES
(98, 6, 5, 500000, 500000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 18, '2020-02-28 08:23:25', '2022-05-18 09:31:35', 57, 57, '1'),
(97, 6, 9, 350000, 350000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 19, '2020-02-28 08:14:41', '2022-04-06 11:12:42', 57, 57, '1'),
(95, 6, 9, 350000, 350000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 20, '2020-02-28 08:02:15', '2022-04-06 11:11:55', 57, 57, '1'),
(94, 6, 10, 250000, 250000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 21, '2020-02-28 07:57:02', '2022-04-07 14:47:56', 57, 57, '1'),
(92, 6, 10, 250000, 250000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 22, '2020-02-28 07:35:52', '2022-05-09 11:17:07', 57, 57, '1'),
(99, 6, 5, 500000, 500000, '2020-02-28', 1, 'T1', '0', 2, 2, 10, '0', 17, '2020-02-28 08:32:22', '2022-07-12 14:53:50', 57, 57, '1'),
(101, 6, 4, 750000, 750000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 16, '2020-02-28 08:42:14', '2022-05-17 15:58:13', 57, 70, '1'),
(102, 6, 4, 750000, 750000, '2020-02-28', 1, 'A23', '0', 2, 2, 10, '0', 15, '2020-02-28 08:44:15', '2022-07-12 14:54:05', 57, 57, '1'),
(104, 6, 3, 1000000, 1000000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 14, '2020-02-28 08:49:39', '2022-04-12 13:13:49', 57, 57, '1'),
(105, 6, 3, 1000000, 1000000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 12, '2020-02-28 08:51:10', '2022-05-20 14:40:47', 57, 57, '1'),
(107, 6, 2, 2500000, 2500000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 12, '2020-02-28 08:55:41', '2022-03-19 18:36:02', 57, 57, '0'),
(110, 7, 5, 500000, 500000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 6, '2020-02-28 08:23:25', '2022-07-04 15:27:40', 57, 57, '1'),
(108, 6, 1, 5000000, 5000000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 11, '2020-02-28 08:55:41', '2020-02-28 08:55:41', 57, 57, '0'),
(111, 7, 9, 350000, 350000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 7, '2020-02-28 08:14:41', '2022-04-13 14:30:47', 57, 57, '1'),
(112, 7, 9, 350000, 350000, '2020-02-28', 1, 'BC37', '0', 3, 2, 10, '0', 8, '2020-02-28 08:02:15', '2022-07-18 14:52:59', 57, 57, '1'),
(113, 7, 10, 250000, 250000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 9, '2020-02-28 07:57:02', '2022-05-08 13:25:50', 57, 57, '1'),
(114, 7, 10, 250000, 250000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 10, '2020-02-28 07:35:52', '2022-07-13 11:00:28', 57, 57, '1'),
(109, 7, 5, 500000, 500000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 5, '2020-02-28 08:32:22', '2022-05-19 15:23:42', 57, 57, '1'),
(115, 7, 4, 750000, 750000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 4, '2020-02-28 08:42:14', '2022-07-06 09:57:01', 57, 57, '1'),
(116, 7, 4, 750000, 750000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 3, '2020-02-28 08:44:15', '2022-06-07 22:33:37', 57, 57, '1'),
(117, 7, 3, 1000000, 1000000, '2020-02-28', 0, '', '0', 3, 2, 10, '0', 2, '2020-02-28 08:49:39', '2022-05-12 14:12:07', 57, 70, '1'),
(118, 7, 3, 1000000, 1000000, '2020-02-28', 0, '', '0', 2, 2, 10, '0', 1, '2020-02-28 08:51:10', '2022-05-20 14:39:05', 57, 57, '1'),
(127, 8, 3, 1250000, 1250000, '2022-07-18', 5, 'B13,B3,B4,B5,B6', '0', 2, 2, 30, '0', 27, '2022-07-20 13:19:21', '2022-08-28 00:59:02', 57, 9910, '1'),
(144, 8, 4, 0, 0, '2022-07-23', 6, 'C51,C52,C53,C54,C55,C56', '1', 2, 2, 10, '0', 44, '2022-07-23 16:38:10', '2022-08-27 12:19:36', 57, 57, '1'),
(122, 8, 3, 1250000, 1250000, '2022-07-17', 0, '', '0', 3, 2, 10, '0', 23, '2022-07-18 02:31:28', '2022-09-02 09:38:45', 57, 57, '1'),
(143, 8, 3, 0, 0, '2022-07-23', 2, 'A13,A14', '1', 2, 2, 10, '0', 43, '2022-07-23 14:48:04', '2022-08-27 12:15:07', 57, 57, '1'),
(123, 8, 4, 900000, 900000, '2022-07-18', 0, '', '0', 3, 2, 10, '0', 24, '2022-07-18 02:44:29', '2022-09-04 18:45:36', 57, 57, '1'),
(124, 8, 5, 550000, 550000, '2022-07-18', 0, '', '0', 3, 2, 10, '0', 25, '2022-07-18 11:01:08', '2022-08-28 02:22:27', 57, 57, '1'),
(125, 8, 9, 375000, 375000, '2022-07-18', 0, '', '0', 3, 2, 10, '0', 26, '2022-07-18 11:09:45', '2022-08-27 12:05:29', 57, 57, '1'),
(128, 8, 4, 900000, 900000, '2022-07-18', 2, 'D65,D66', '0', 2, 2, 30, '0', 28, '2022-07-20 13:20:25', '2022-09-04 18:45:29', 57, 57, '1'),
(153, 9, 1, 5000000, 5000000, '2022-08-02', 0, '', '0', 2, 2, 10, '0', NULL, '2022-08-02 22:54:06', '2022-08-02 22:54:06', 57, 57, '1'),
(145, 8, 5, 0, 0, '2022-07-23', 5, 'E15,E66,E67,E68,E69', '1', 2, 2, 10, '0', 45, '2022-07-23 16:43:11', '2022-07-28 16:25:24', 57, 57, '1'),
(129, 8, 5, 550000, 550000, '2022-07-18', 0, '', '0', 2, 2, 30, '0', 29, '2022-07-20 13:21:07', '2022-08-27 12:04:53', 57, 57, '1'),
(130, 8, 9, 375000, 375000, '2022-07-18', 0, '', '0', 2, 2, 30, '0', 30, '2022-07-20 13:21:50', '2022-08-27 12:05:32', 57, 57, '1'),
(131, 9, 3, 1250000, 1250000, '2022-07-18', 13, 'A1,A2,B20,B3,B4,B41,C23,C24,C25,C26,C39,C40,C43', '0', 3, 2, 10, '0', 31, '2022-07-20 13:25:05', '2022-09-05 11:08:05', 57, 57, '1'),
(132, 9, 4, 900000, 900000, '2022-07-18', 0, '', '0', 3, 2, 10, '0', 32, '2022-07-20 13:35:46', '2022-09-02 09:28:01', 57, 57, '1'),
(154, 10, 12, 0, 0, '2022-08-08', 0, '', '1', 2, 2, 10, '0', NULL, '2022-08-08 15:25:28', '2022-09-01 15:53:48', 57, 5396, '1'),
(148, 9, 5, 0, 0, '2022-07-23', 10, 'E12,E13,E14,E15,E66,E67,E68,E69,E70,E71', '1', 2, 2, 10, '0', 48, '2022-07-23 18:33:57', '2022-07-28 14:54:40', 57, 57, '1'),
(133, 9, 5, 550000, 550000, '2022-07-18', 0, '', '0', 3, 2, 10, '0', 33, '2022-07-20 13:37:26', '2022-08-28 14:13:31', 57, 57, '1'),
(134, 9, 9, 375000, 375000, '2022-07-18', 0, '', '0', 3, 2, 10, '0', 34, '2022-07-20 13:37:59', '2022-08-28 20:57:35', 57, 5396, '1'),
(135, 9, 3, 1250000, 1250000, '2022-07-18', 0, '', '0', 2, 2, 30, '0', 35, '2022-07-20 13:38:44', '2022-09-01 19:07:50', 57, 9910, '1'),
(146, 9, 3, 0, 0, '2022-07-23', 11, 'A11,A12,A13,A17,A18,A19,A31,A32,B1,B16,B2', '1', 2, 2, 10, '0', 46, '2022-07-23 17:42:58', '2022-08-26 17:15:03', 57, 57, '1'),
(147, 9, 4, 0, 0, '2022-07-23', 10, 'C12,C13,C14,C15,C51,C52,C53,C54,C55,C56', '1', 2, 2, 10, '0', 47, '2022-07-23 18:30:23', '2022-07-28 14:45:13', 57, 57, '1'),
(136, 9, 4, 900000, 900000, '2022-07-18', 0, '', '0', 2, 2, 30, '0', 36, '2022-07-20 13:39:57', '2022-09-02 09:28:04', 57, 57, '1'),
(137, 9, 5, 550000, 550000, '2022-07-18', 0, '', '0', 2, 2, 30, '0', 37, '2022-07-20 13:40:43', '2022-08-27 12:07:45', 57, 57, '1'),
(138, 9, 9, 375000, 375000, '2022-07-18', 0, '', '0', 2, 2, 30, '0', 38, '2022-07-20 13:41:53', '2022-08-27 12:08:08', 57, 57, '1'),
(150, 10, 4, 0, 0, '2022-07-24', 23, 'B23,B24,B25,C1,C14,C15,C16,C17,C2,C3,C4,C5,C6,C7,C8,C9,D34,D35,D36,D40,D41,E35,E36', '1', 2, 2, 10, '0', 50, '2022-07-24 16:26:54', '2022-09-01 16:19:08', 57, 57, '1'),
(149, 10, 3, 0, 0, '2022-07-24', 22, 'A1,A10,A2,A21,A22,A23,A29,A3,A30,A4,A5,A6,A7,A8,A9,B16,B17,B44,B45,B46,B47,B60', '1', 2, 2, 10, '0', 49, '2022-07-24 16:24:07', '2022-08-21 10:35:45', 57, 9910, '1'),
(151, 10, 5, 0, 0, '2022-07-24', 3, 'D12,D13,D14', '1', 2, 2, 10, '0', 51, '2022-07-24 16:28:25', '2022-08-21 10:36:23', 57, 9910, '1'),
(152, 10, 9, 0, 0, '2022-07-24', 0, '', '1', 2, 2, 10, '0', 52, '2022-07-24 16:30:35', '2022-08-23 22:38:29', 57, 9910, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_voucher`
--

CREATE TABLE `st_voucher` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `type` set('percent','fixed') NOT NULL,
  `value` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `st_voucher`
--

INSERT INTO `st_voucher` (`id`, `event_id`, `code`, `type`, `value`, `quantity`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 0, 'FIXED', 'fixed', 50000, 10, '2022-08-01 00:00:00', '2022-08-01 00:00:00', 57, 57),
(2, 8, 'MDRTM10', 'percent', 10, 50, '2022-08-01 00:00:00', '2022-08-01 00:00:00', 57, 57);

-- --------------------------------------------------------

--
-- Struktur dari tabel `st_voucher_invoice`
--

CREATE TABLE `st_voucher_invoice` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `voucher_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cms_group_user`
--
ALTER TABLE `cms_group_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_class`
--
ALTER TABLE `st_class`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_client`
--
ALTER TABLE `st_client`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_event`
--
ALTER TABLE `st_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_gate`
--
ALTER TABLE `st_gate`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_invoice`
--
ALTER TABLE `st_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_layout`
--
ALTER TABLE `st_layout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_location`
--
ALTER TABLE `st_location`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_poster`
--
ALTER TABLE `st_poster`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_postingan`
--
ALTER TABLE `st_postingan`
  ADD PRIMARY KEY (`id_postingan`);

--
-- Indeks untuk tabel `st_qa`
--
ALTER TABLE `st_qa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_reservation`
--
ALTER TABLE `st_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_reservation_undangan`
--
ALTER TABLE `st_reservation_undangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_sponsor`
--
ALTER TABLE `st_sponsor`
  ADD PRIMARY KEY (`id_sponsor`);

--
-- Indeks untuk tabel `st_struktur_organisasi`
--
ALTER TABLE `st_struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_ticket`
--
ALTER TABLE `st_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_voucher`
--
ALTER TABLE `st_voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `st_voucher_invoice`
--
ALTER TABLE `st_voucher_invoice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cms_group_user`
--
ALTER TABLE `cms_group_user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `st_class`
--
ALTER TABLE `st_class`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `st_client`
--
ALTER TABLE `st_client`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `st_event`
--
ALTER TABLE `st_event`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `st_gate`
--
ALTER TABLE `st_gate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `st_invoice`
--
ALTER TABLE `st_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `st_layout`
--
ALTER TABLE `st_layout`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `st_location`
--
ALTER TABLE `st_location`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `st_poster`
--
ALTER TABLE `st_poster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `st_postingan`
--
ALTER TABLE `st_postingan`
  MODIFY `id_postingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `st_qa`
--
ALTER TABLE `st_qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `st_reservation`
--
ALTER TABLE `st_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `st_sponsor`
--
ALTER TABLE `st_sponsor`
  MODIFY `id_sponsor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `st_struktur_organisasi`
--
ALTER TABLE `st_struktur_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `st_ticket`
--
ALTER TABLE `st_ticket`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT untuk tabel `st_voucher`
--
ALTER TABLE `st_voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `st_voucher_invoice`
--
ALTER TABLE `st_voucher_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
