-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2025 pada 08.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `list_kanji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `activity`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, 3, 'User logged in', '127.0.0.1', '2024-12-11 22:27:28', '2024-12-11 22:27:28'),
(2, 3, 'User logged in', '127.0.0.1', '2024-12-11 22:27:29', '2024-12-11 22:27:29'),
(3, 3, 'User logged in', '127.0.0.1', '2024-12-11 22:28:11', '2024-12-11 22:28:11'),
(4, 3, 'User logged in', '127.0.0.1', '2024-12-11 22:28:11', '2024-12-11 22:28:11'),
(5, 10, 'User logged in', '127.0.0.1', '2024-12-11 22:29:20', '2024-12-11 22:29:20'),
(6, 10, 'User logged in', '127.0.0.1', '2024-12-11 22:29:20', '2024-12-11 22:29:20'),
(7, 10, 'User logged in', '127.0.0.1', '2024-12-11 22:47:30', '2024-12-11 22:47:30'),
(8, 10, 'User logged in', '127.0.0.1', '2024-12-11 22:47:31', '2024-12-11 22:47:31'),
(9, 10, 'User logged in', '127.0.0.1', '2024-12-12 20:15:52', '2024-12-12 20:15:52'),
(10, 10, 'User logged in', '127.0.0.1', '2024-12-12 20:15:53', '2024-12-12 20:15:53'),
(11, 3, 'User logged in', '127.0.0.1', '2024-12-12 20:45:51', '2024-12-12 20:45:51'),
(12, 3, 'User logged in', '127.0.0.1', '2024-12-12 20:45:52', '2024-12-12 20:45:52'),
(13, 3, 'User logged in', '127.0.0.1', '2024-12-12 23:20:32', '2024-12-12 23:20:32'),
(14, 3, 'User logged in', '127.0.0.1', '2024-12-14 18:21:44', '2024-12-14 18:21:44'),
(15, 3, 'User logged in', '127.0.0.1', '2024-12-15 19:14:10', '2024-12-15 19:14:10'),
(16, 2, 'User logged in', '127.0.0.1', '2024-12-15 19:16:17', '2024-12-15 19:16:17'),
(17, 2, 'User logged in', '127.0.0.1', '2024-12-15 19:16:18', '2024-12-15 19:16:18'),
(18, 3, 'User logged in', '127.0.0.1', '2024-12-15 19:19:35', '2024-12-15 19:19:35'),
(19, 3, 'User logged in', '127.0.0.1', '2024-12-15 19:19:35', '2024-12-15 19:19:35'),
(20, 2, 'User logged in', '127.0.0.1', '2024-12-15 21:46:02', '2024-12-15 21:46:02'),
(21, 2, 'User logged in', '127.0.0.1', '2024-12-15 21:46:02', '2024-12-15 21:46:02'),
(22, 3, 'User logged in', '127.0.0.1', '2024-12-15 23:11:53', '2024-12-15 23:11:53'),
(23, 3, 'User logged in', '127.0.0.1', '2024-12-15 23:11:53', '2024-12-15 23:11:53'),
(24, 2, 'User logged in', '127.0.0.1', '2024-12-16 00:35:08', '2024-12-16 00:35:08'),
(25, 2, 'User logged in', '127.0.0.1', '2024-12-16 00:35:08', '2024-12-16 00:35:08'),
(26, 3, 'User logged in', '127.0.0.1', '2024-12-16 00:37:00', '2024-12-16 00:37:00'),
(27, 3, 'User logged in', '127.0.0.1', '2024-12-16 00:37:00', '2024-12-16 00:37:00'),
(28, 3, 'User logged in', '127.0.0.1', '2024-12-17 04:28:45', '2024-12-17 04:28:45'),
(29, 3, 'User logged in', '127.0.0.1', '2024-12-17 04:28:45', '2024-12-17 04:28:45'),
(30, 3, 'User logged in', '127.0.0.1', '2024-12-18 20:35:50', '2024-12-18 20:35:50'),
(31, 2, 'User logged in', '127.0.0.1', '2024-12-19 00:03:06', '2024-12-19 00:03:06'),
(32, 2, 'User logged in', '127.0.0.1', '2024-12-19 00:03:06', '2024-12-19 00:03:06'),
(33, 3, 'User logged in', '127.0.0.1', '2024-12-19 18:46:30', '2024-12-19 18:46:30'),
(34, 3, 'User logged in', '127.0.0.1', '2024-12-19 18:46:30', '2024-12-19 18:46:30'),
(35, 3, 'User logged in', '127.0.0.1', '2024-12-22 20:06:30', '2024-12-22 20:06:30'),
(36, 3, 'User logged in', '127.0.0.1', '2024-12-22 20:37:37', '2024-12-22 20:37:37'),
(37, 3, 'User logged in', '127.0.0.1', '2024-12-22 20:37:37', '2024-12-22 20:37:37'),
(38, 2, 'User logged in', '127.0.0.1', '2024-12-22 20:37:54', '2024-12-22 20:37:54'),
(39, 2, 'User logged in', '127.0.0.1', '2024-12-22 20:37:54', '2024-12-22 20:37:54'),
(40, 3, 'User logged in', '127.0.0.1', '2024-12-22 20:42:55', '2024-12-22 20:42:55'),
(41, 3, 'User logged in', '127.0.0.1', '2024-12-22 20:42:55', '2024-12-22 20:42:55'),
(42, 3, 'User logged in', '127.0.0.1', '2024-12-23 00:17:04', '2024-12-23 00:17:04'),
(43, 3, 'User logged in', '127.0.0.1', '2024-12-23 00:17:04', '2024-12-23 00:17:04'),
(44, 3, 'User logged in', '127.0.0.1', '2024-12-24 19:31:27', '2024-12-24 19:31:27'),
(45, 3, 'User logged in', '127.0.0.1', '2024-12-24 19:31:28', '2024-12-24 19:31:28'),
(46, 2, 'User logged in', '127.0.0.1', '2024-12-24 19:48:03', '2024-12-24 19:48:03'),
(47, 2, 'User logged in', '127.0.0.1', '2024-12-24 19:48:03', '2024-12-24 19:48:03'),
(48, 3, 'User logged in', '127.0.0.1', '2024-12-24 21:17:11', '2024-12-24 21:17:11'),
(49, 3, 'User logged in', '127.0.0.1', '2024-12-24 21:17:12', '2024-12-24 21:17:12'),
(50, 3, 'User logged in', '127.0.0.1', '2024-12-25 20:01:05', '2024-12-25 20:01:05'),
(51, 3, 'User logged in', '127.0.0.1', '2024-12-25 20:01:05', '2024-12-25 20:01:05'),
(52, 3, 'User logged in', '127.0.0.1', '2024-12-30 20:27:18', '2024-12-30 20:27:18'),
(53, 3, 'User logged in', '127.0.0.1', '2024-12-30 20:27:19', '2024-12-30 20:27:19'),
(54, 3, 'User logged in', '127.0.0.1', '2025-01-01 23:11:22', '2025-01-01 23:11:22'),
(55, 3, 'User logged in', '127.0.0.1', '2025-01-01 23:11:22', '2025-01-01 23:11:22'),
(56, 3, 'User logged in', '127.0.0.1', '2025-01-03 21:42:41', '2025-01-03 21:42:41'),
(57, 3, 'User logged in', '127.0.0.1', '2025-01-03 21:42:42', '2025-01-03 21:42:42'),
(58, 3, 'User logged in', '127.0.0.1', '2025-01-04 22:48:44', '2025-01-04 22:48:44'),
(59, 3, 'User logged in', '127.0.0.1', '2025-01-05 02:33:16', '2025-01-05 02:33:16'),
(60, 3, 'User logged in', '127.0.0.1', '2025-01-05 02:33:17', '2025-01-05 02:33:17'),
(64, 2, 'User logged in', '127.0.0.1', '2025-01-05 03:41:45', '2025-01-05 03:41:45'),
(65, 2, 'User logged in', '127.0.0.1', '2025-01-05 03:41:46', '2025-01-05 03:41:46'),
(66, 2, 'User logged in', '127.0.0.1', '2025-01-05 03:42:36', '2025-01-05 03:42:36'),
(67, 2, 'User logged in', '127.0.0.1', '2025-01-05 03:42:37', '2025-01-05 03:42:37'),
(68, 2, 'User logged in', '127.0.0.1', '2025-01-05 04:25:13', '2025-01-05 04:25:13'),
(69, 2, 'User logged in', '127.0.0.1', '2025-01-05 04:25:14', '2025-01-05 04:25:14'),
(70, 3, 'User logged in', '127.0.0.1', '2025-01-05 04:26:22', '2025-01-05 04:26:22'),
(71, 3, 'User logged in', '127.0.0.1', '2025-01-05 04:26:22', '2025-01-05 04:26:22'),
(72, 3, 'User logged in', '127.0.0.1', '2025-01-05 20:46:30', '2025-01-05 20:46:30'),
(73, 3, 'User logged in', '127.0.0.1', '2025-01-05 20:46:31', '2025-01-05 20:46:31'),
(74, 3, 'User logged in', '127.0.0.1', '2025-01-14 17:11:08', '2025-01-14 17:11:08'),
(75, 3, 'User logged in', '127.0.0.1', '2025-01-14 17:11:08', '2025-01-14 17:11:08'),
(76, 3, 'User logged in', '127.0.0.1', '2025-01-16 17:58:53', '2025-01-16 17:58:53'),
(77, 3, 'User logged in', '127.0.0.1', '2025-01-16 17:58:53', '2025-01-16 17:58:53'),
(78, 3, 'User logged in', '127.0.0.1', '2025-01-16 18:40:02', '2025-01-16 18:40:02'),
(79, 3, 'User logged in', '127.0.0.1', '2025-01-16 18:40:02', '2025-01-16 18:40:02'),
(80, 3, 'User logged in', '127.0.0.1', '2025-01-16 18:54:47', '2025-01-16 18:54:47'),
(81, 3, 'User logged in', '127.0.0.1', '2025-01-16 18:54:47', '2025-01-16 18:54:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `badges`
--

CREATE TABLE `badges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `badges`
--

INSERT INTO `badges` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pemula', 'Diberikan untuk pengguna yang telah menyelesaikan level N5.', '2024-11-12 23:06:21', '2024-11-12 23:06:21'),
(2, 'Menengah', 'Diberikan untuk pengguna yang telah menyelesaikan level N4.', '2024-11-12 23:06:21', '2024-11-12 23:06:21'),
(3, 'Mahir', 'Diberikan untuk pengguna yang telah menyelesaikan level N3.', '2024-11-12 23:06:21', '2024-11-12 23:06:21'),
(4, 'Expert', 'Diberikan untuk pengguna yang telah menyelesaikan level N2.', '2024-11-12 23:06:21', '2024-11-12 23:06:21'),
(5, 'Master', 'Diberikan untuk pengguna yang telah menyelesaikan level N1.', '2024-11-12 23:06:21', '2024-11-12 23:06:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kanjis`
--

CREATE TABLE `kanjis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kanji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kunyomi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onyomi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cara_baca` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arti` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('N5','N4','N3','N2','N1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kanjis`
--

INSERT INTO `kanjis` (`id`, `kanji`, `kunyomi`, `onyomi`, `cara_baca`, `arti`, `level`, `created_at`, `updated_at`) VALUES
(50, '一', 'ひと-つ', 'イチ', 'ひと-つ / イチ', 'satu', 'N5', NULL, NULL),
(51, '七', 'なな-つ', 'シチ', 'なな-つ / シチ', 'tujuh', 'N5', NULL, NULL),
(52, '二', 'ふた-つ', 'ニ', 'ふた-つ / ニ', 'dua', 'N5', NULL, NULL),
(53, '入', 'い-る', 'ニュウ', 'い-る / ニュウ', 'masuk', 'N5', NULL, NULL),
(54, '九', 'ここの-つ', 'キュウ/ク', 'ここの-つ / キュウ/ク', 'sembilan', 'N5', NULL, NULL),
(55, '八', 'やっ-つ', 'ハチ', 'やっ-つ / ハチ', 'delapan', 'N5', NULL, NULL),
(56, '力', 'ちから', 'リョク/リキ', 'ちから / リョク/リキ', 'tenaga', 'N5', NULL, NULL),
(57, '上', 'うえ', 'ジョウ', 'うえ / ジョウ', 'atas', 'N5', NULL, NULL),
(58, '小', 'ちい-さい', 'ショウ', 'ちい-さい / ショウ', 'kecil', 'N5', NULL, NULL),
(59, '口', 'くち', 'コウ', 'くち / コウ', 'mulut', 'N5', NULL, NULL),
(60, '女', 'おんな', 'ジョ', 'おんな / ジョ', 'wanita', 'N5', NULL, NULL),
(61, '下', 'した', 'カ/ゲ', 'した / カ/ゲ', 'bawah', 'N5', NULL, NULL),
(62, '三', 'みっ-つ', 'サン', 'みっ-つ / サン', 'tiga', 'N5', NULL, NULL),
(63, '山', 'やま', 'サン', 'やま / サン', 'gunung', 'N5', NULL, NULL),
(64, '子', 'こ', 'シ', 'こ / シ', 'anak', 'N5', NULL, NULL),
(65, '王', '', 'オウ', 'オウ', 'raja', 'N5', NULL, NULL),
(66, '工', '', 'コウ/ク', 'コウ/ク', 'kerja', 'N5', NULL, NULL),
(67, '川', 'かわ', 'セン', 'かわ / セン', 'sungai', 'N5', NULL, NULL),
(68, '大', 'おお-きい', 'ダイ/タイ', 'おお-きい / ダイ/タイ', 'besar', 'N5', NULL, NULL),
(69, '水', 'みず', 'スイ', 'みず / スイ', 'air', 'N5', NULL, NULL),
(70, '手', 'て', 'シュ', 'て / シュ', 'tangan', 'N5', NULL, NULL),
(71, '天', 'あま', 'テン', 'あま / テン', 'langit', 'N5', NULL, NULL),
(72, '日', 'ひ', 'ニチ/ジツ', 'ひ / ニチ/ジツ', 'matahari', 'N5', NULL, NULL),
(73, '月', 'つき', 'ゲツ/ガツ', 'つき / ゲツ/ガツ', 'bulan', 'N5', NULL, NULL),
(74, '木', 'き', 'モク/ボク', 'き / モク/ボク', 'pohon', 'N5', NULL, NULL),
(75, '文', 'ふみ', 'ブン', 'い-ち / イチ', 'kalimat', 'N5', NULL, NULL),
(76, '六', 'むっ-つ', 'ロク', 'お-おい / オ', 'enam', 'N5', NULL, NULL),
(77, '火', 'ひ', 'カ', 'にん / ジン', 'api', 'N5', NULL, NULL),
(78, '田', 'た', 'デン', 'し / ジ', 'sawah', 'N5', NULL, NULL),
(79, '五', 'いつ-つ', 'ゴ', 'と / キ', 'lima', 'N5', NULL, NULL),
(80, '目', 'め', 'モク', 'おお / ダイ', 'mata', 'N5', NULL, NULL),
(81, '白', 'しろ', 'ハク', 'て / シュ', 'putih', 'N5', NULL, NULL),
(82, '本', 'もと', 'ホン', 'ま / わ', 'buku', 'N5', NULL, NULL),
(83, '玉', 'たま', 'ギョク', 'こ / シ', 'bola/permata', 'N5', NULL, NULL),
(84, '正', 'ただ-しい', 'セイ/ショウ', 'い-ち / イ', 'benar', 'N5', NULL, NULL),
(85, '立', 'た-つ', 'リツ', 'おお-きい / ダイ', 'berdiri', 'N5', NULL, NULL),
(86, '四', 'よっ-つ', 'シ', 'つき / ゲツ', 'empat', 'N5', NULL, NULL),
(87, '左', 'ひだり', 'サ', 'たん / タン', 'kiri', 'N5', NULL, NULL),
(88, '気', 'き', 'キ', 'にく / ニク', 'semangat', 'N5', NULL, NULL),
(89, '生', 'い-きる', 'セイ/ショウ', 'しん / シン', 'hidup', 'N5', NULL, NULL),
(90, '名', 'な', 'メイ', 'おおきい / ダイ', 'nama', 'N5', NULL, NULL),
(91, '耳', 'みみ', 'ジ', 'あか / アカ', 'telinga', 'N5', NULL, NULL),
(92, '百', 'ひゃく', 'ヒャク', 'たけ / タケ', 'seratus', 'N5', NULL, NULL),
(93, '休', 'やす-む', 'キュウ', 'おお-きい / オオキイ', 'istirahat', 'N5', NULL, NULL),
(94, '先', 'さき', 'セン', 'すえ / スエ', 'lebih dulu', 'N5', NULL, NULL),
(95, '字', 'あざ', 'ジ', 'き / キ', 'huruf', 'N5', NULL, NULL),
(96, '車', 'くるま', 'シャ', 'まつ / マツ', 'mobil', 'N5', NULL, NULL),
(97, '花', 'はな', 'カ', 'お / オ', 'bunga', 'N5', NULL, NULL),
(98, '赤', 'あか', 'セキ', 'ち / チ', 'merah', 'N5', NULL, NULL),
(99, '村', 'むら', 'ソン', 'と / ト', 'desa', 'N5', NULL, NULL),
(100, '足', 'あし', 'ソク', 'こう / コウ', 'kaki', 'N5', NULL, NULL),
(101, '男', 'おとこ', 'ダン', 'き / キ', 'laki-laki', 'N5', NULL, NULL),
(102, '空', 'そら', 'クウ', 'あたら-しい / シン', 'langit', 'N5', NULL, NULL),
(103, '林', 'はやし', 'リン', 'し / シ', 'hutan kecil', 'N5', NULL, NULL),
(104, '校', 'こう', 'コウ', 'き-つける / キ', 'sekolah', 'N5', NULL, NULL),
(105, '森', 'もり', 'シン', 'お-い / オイ', 'hutan', 'N5', NULL, NULL),
(143, '愛', 'あい', 'アイ', 'く / ク', 'cinta', 'N4', NULL, NULL),
(144, '案', 'あん', 'アン', 'おお-きい / オオキイ', 'rencana', 'N4', NULL, NULL),
(145, '医', 'い', 'イ', 'とお-い / トオイ', 'dokter', 'N4', NULL, NULL),
(146, '委', 'ゆだ-ねる', 'イ', 'ち / チ', 'mempercayakan', 'N4', NULL, NULL),
(147, '育', 'そだ-つ', 'イク', 'ふ / フ', 'mendidik', 'N4', NULL, NULL),
(148, '員', '', 'イン', 'い / イ', 'anggota', 'N4', NULL, NULL),
(149, '院', '', 'イン', 'し / シ', 'institusi', 'N4', NULL, NULL),
(150, '飲', 'の-む', 'イン', 'に / ニ', 'minum', 'N4', NULL, NULL),
(151, '運', 'はこ-ぶ', 'ウン', 'せん / セン', 'membawa', 'N4', NULL, NULL),
(152, '泳', 'およ-ぐ', 'エイ', 'しょう / ショウ', 'berenang', 'N4', NULL, NULL),
(153, '駅', '', 'エキ', 'み / ミ', 'stasiun', 'N4', NULL, NULL),
(154, '央', '', 'オウ', 'あ / ア', 'pusat', 'N4', NULL, NULL),
(155, '横', 'よこ', 'オウ', 'こう / コウ', 'samping', 'N4', NULL, NULL),
(156, '家', 'いえ', 'カ', 'や / ヤ', 'rumah', 'N4', NULL, NULL),
(157, '歌', 'うた', 'カ', 'と / ト', 'lagu', 'N4', NULL, NULL),
(158, '画', '', 'ガ', 'て / テ', 'gambar', 'N4', NULL, NULL),
(159, '界', '', 'カイ', 'え / エ', 'dunia', 'N4', NULL, NULL),
(160, '回', 'まわ-る', 'カイ', 'わ / ワ', 'berputar', 'N4', NULL, NULL),
(161, '階', '', 'カイ', 'お / オ', 'lantai', 'N4', NULL, NULL),
(162, '楽', 'たの-しい', 'ガク', 'つ / ツ', 'menyenangkan', 'N4', NULL, NULL),
(163, '館', '', 'カン', 'ゆう / ユウ', 'bangunan besar', 'N4', NULL, NULL),
(164, '漢', '', 'カン', 'しん / シン', 'Tionghoa', 'N4', NULL, NULL),
(165, '顔', 'かお', 'ガン', 'い / イ', 'wajah', 'N4', NULL, NULL),
(166, '帰', 'かえ-る', 'キ', 'ま / マ', 'pulang', 'N4', NULL, NULL),
(167, '記', 'しる-す', 'キ', 'き / キ', 'catatan', 'N4', NULL, NULL),
(168, '起', 'お-きる', 'キ', 'けん / ケン', 'bangun', 'N4', NULL, NULL),
(169, '急', 'いそ-ぐ', 'キュウ', 'い / イ', 'darurat', 'N4', NULL, NULL),
(170, '牛', 'うし', 'ギュウ', 'し / シ', 'sapi', 'N4', NULL, NULL),
(171, '橋', 'はし', 'キョウ', 'ち / チ', 'jembatan', 'N4', NULL, NULL),
(172, '業', 'わざ', 'ギョウ', 'きん / キン', 'pekerjaan', 'N4', NULL, NULL),
(173, '局', '', 'キョク', 'む / ム', 'kantor', 'N4', NULL, NULL),
(174, '近', 'ちか-い', 'キン', 'せ / セ', 'dekat', 'N4', NULL, NULL),
(175, '区', '', 'ク', 'み / ミ', 'distrik', 'N4', NULL, NULL),
(176, '苦', 'くる-しい', 'ク', 'し / シ', 'sulit', 'N4', NULL, NULL),
(177, '係', 'かかり', 'ケイ', 'ゆう / ユウ', 'pengurus', 'N4', NULL, NULL),
(178, '軽', 'かる-い', 'ケイ', 'む / ム', 'ringan', 'N4', NULL, NULL),
(218, '選', 'えら-ぶ', 'セン', 'け / ケ', 'memilih', 'N3', NULL, NULL),
(219, '洗', 'あら-う', 'セン', 'し / シ', 'mencuci', 'N3', NULL, NULL),
(220, '進', 'すす-む', 'シン', 'い / イ', 'maju', 'N3', NULL, NULL),
(221, '制度', 'せいど', 'セイド', 'き / キ', 'sistem', 'N3', NULL, NULL),
(222, '静', 'しず-か', 'セイ', 'あ / ア', 'tenang', 'N3', NULL, NULL),
(223, '席', 'せき', 'セキ', 'い / イ', 'tempat duduk', 'N3', NULL, NULL),
(224, '組', 'く-む', 'ソ', 'て / テ', 'kelompok', 'N3', NULL, NULL),
(225, '成功', 'せいこう', 'セイコウ', 'よ / ヨ', 'sukses', 'N3', NULL, NULL),
(226, '温', 'あたた-かい', 'オン', 'おお-きい / オオキイ', 'hangat', 'N3', NULL, NULL),
(227, '面', 'おも', 'メン', 'き / キ', 'permukaan', 'N3', NULL, NULL),
(228, '経', 'けい', 'ケイ', 'し / シ', 'jalur', 'N3', NULL, NULL),
(229, '産', 'う-まれる', 'サン', 'す / ス', 'produksi', 'N3', NULL, NULL),
(230, '計', 'はか-る', 'ケイ', 'け / ケ', 'rencana', 'N3', NULL, NULL),
(231, '解', 'と-く', 'カイ', 'ま / マ', 'menjelaskan', 'N3', NULL, NULL),
(232, '集', 'あつ-まる', 'シュウ', 'い / イ', 'mengumpulkan', 'N3', NULL, NULL),
(233, '関', 'せき', 'カン', 'や / ヤ', 'hubungan', 'N3', NULL, NULL),
(234, '後', 'あと', 'ゴ', 'う / ウ', 'setelah', 'N3', NULL, NULL),
(235, '通', 'とお-る', 'ツウ', 'わ / ワ', 'melewati', 'N3', NULL, NULL),
(341, '悪', 'わる-い', 'アク', NULL, 'buruk', 'N2', NULL, NULL),
(342, '異', 'こと-なる', 'イ', NULL, 'berbeda', 'N2', NULL, NULL),
(343, '意', 'い', 'イ', NULL, 'niat', 'N2', NULL, NULL),
(344, '印', 'しるし', 'イン', NULL, 'tanda', 'N2', NULL, NULL),
(345, '映', 'うつ-る', 'エイ', NULL, 'memantulkan', 'N2', NULL, NULL),
(346, '栄', 'さか-える', 'エイ', NULL, 'kemakmuran', 'N2', NULL, NULL),
(347, '液', 'えき', 'エキ', NULL, 'cairan', 'N2', NULL, NULL),
(348, '遠', 'とお-い', 'エン', NULL, 'jauh', 'N2', NULL, NULL),
(349, '音', 'おと', 'オン', NULL, 'suara', 'N2', NULL, NULL),
(350, '仮', 'かり', 'カ', NULL, 'sementara', 'N2', NULL, NULL),
(351, '学', 'まな-ぶ', 'ガク', NULL, 'belajar', 'N2', NULL, NULL),
(352, '過', 'す-ぎる', 'カ', NULL, 'melewati', 'N2', NULL, NULL),
(353, '各', 'おのおの', 'カク', NULL, 'setiap', 'N2', NULL, NULL),
(354, '覚', 'おぼ-える', 'カク', NULL, 'mengingat', 'N2', NULL, NULL),
(552, '額', 'がく', 'ガク', NULL, 'dahi', 'N1', NULL, NULL),
(553, '割', 'わ-る', 'カツ', NULL, 'memecah', 'N1', NULL, NULL),
(554, '技', 'わざ', 'ギ', NULL, 'keterampilan', 'N1', NULL, NULL),
(555, '願', 'ねが-う', 'ガン', NULL, 'berharap', 'N1', NULL, NULL),
(556, '技術', 'ぎじゅつ', 'ギジュツ', NULL, 'teknologi', 'N1', NULL, NULL),
(557, '観', 'み-る', 'カン', NULL, 'pandangan', 'N1', NULL, NULL),
(558, '強', 'つよ-い', 'キョウ', NULL, 'kuat', 'N1', NULL, NULL),
(559, '権', 'けん', 'ケン', NULL, 'hak', 'N1', NULL, NULL),
(560, '結', 'むす-ぶ', 'ケツ', NULL, 'mengikat', 'N1', NULL, NULL),
(561, '慎', 'つつし-む', 'シン', NULL, 'berhati-hati', 'N1', NULL, NULL),
(562, '整', 'ととの-う', 'セイ', NULL, 'menata', 'N1', NULL, NULL),
(563, '送', 'おく-る', 'ソウ', NULL, 'mengirim', 'N1', NULL, NULL),
(564, '昨', 'さく', 'サク', NULL, 'kemarin', 'N1', NULL, NULL),
(565, '試', 'ため-す', 'シ', NULL, 'mencoba', 'N1', NULL, NULL),
(566, '勝', 'か-つ', 'ショウ', NULL, 'menang', 'N1', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(8, '2024_11_12_035115_create_results_table', 3),
(16, '2024_11_15_033856_create_admins_table', 9),
(17, '2024_11_17_041114_add_peran_to_users_table', 10),
(19, '2014_10_12_100000_create_password_reset_tokens_table', 11),
(20, '2019_08_19_000000_create_failed_jobs_table', 11),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 11),
(22, '2024_11_06_035958_create_sessions_table', 11),
(23, '2024_11_06_062401_create_kanjis_table', 11),
(24, '2024_11_11_065144_create_activity_logs_table', 11),
(25, '2024_11_13_030557_create_quizzes_table', 11),
(26, '2024_11_13_030558_create_questions_table', 11),
(27, '2024_11_13_030558_create_user_quiz_progress_table', 11),
(28, '2024_11_13_033228_add_score_to_questions_table', 11),
(29, '2024_11_13_073930_add_time_taken_to_user_quiz_progress_table', 12),
(30, '2024_12_15_015347_create_posts_table', 13),
(31, '2025_01_05_103114_add_role_to_users_table', 14),
(32, '2025_01_05_110416_add_cara_baca_to_kanjis_table', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('julpaesaldesta@gmail.com', '$2y$12$OCZexUEtCFIfBWB9evPJ0uqitCR32FP75bD/wMnB9qTvz5kvzgQLK', '2024-12-16 00:34:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ringkasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `ringkasan`, `konten`, `url_gambar`, `created_at`, `updated_at`) VALUES
(1, 'Memahami Asal Usul Kanji: Jejak Sejarah dalam Huruf', 'Kanji berasal dari Tiongkok dan mulai digunakan di Jepang sejak abad ke-5.', 'Kanji, yang dikenal sebagai salah satu komponen utama dalam bahasa Jepang, memiliki sejarah panjang yang bermula dari Tiongkok kuno. Huruf ini diperkenalkan ke Jepang pada abad ke-5 melalui pengaruh budaya dan perdagangan antara kedua negara. Awalnya, kanji digunakan untuk mencatat dokumen resmi, kitab agama, dan puisi, sebelum akhirnya diadaptasi sepenuhnya menjadi bagian dari sistem tulisan Jepang.\r\n\r\nSetiap karakter kanji memiliki makna yang kaya dan biasanya menggambarkan elemen kehidupan sehari-hari. Sebagai contoh, kanji 川 (kawa) yang berarti \"sungai\" terinspirasi dari bentuk sungai yang mengalir. Proses penciptaan kanji awalnya berbasis gambar, di mana bentuk asli dari objek diterjemahkan menjadi simbol sederhana. Seiring waktu, simbol-simbol ini mengalami evolusi menjadi bentuk yang lebih abstrak namun tetap mempertahankan esensi aslinya.\r\n\r\nYang menarik, sistem kanji juga berkembang untuk mencerminkan filosofi dan pemikiran masyarakat pada masanya. Kanji seperti 和 (wa), yang berarti \"harmoni,\" menggambarkan pentingnya nilai perdamaian dalam budaya Jepang. Dengan lebih dari 50.000 karakter kanji yang tercatat, mempelajari kanji adalah perjalanan mendalam yang membuka wawasan tentang sejarah dan cara berpikir masyarakat kuno hingga modern.\r\n\r\n', '22.jpeg', '2024-12-14 18:59:34', '2024-12-14 18:59:34'),
(2, 'Kanji N5 hingga N1: Tantangan Belajar yang Menyenangkan', 'Kanji dibagi dari N5 (dasar) hingga N1 (sulit).', 'Bagi banyak pelajar bahasa Jepang, kanji sering dianggap sebagai salah satu aspek paling menantang dalam pembelajaran. Namun, dengan sistem pengelompokan berdasarkan tingkat kesulitan, belajar kanji dapat menjadi lebih terstruktur. Sistem level ini, yang dikenal sebagai N5 hingga N1, digunakan dalam tes kemampuan bahasa Jepang (JLPT).\r\n\r\nPada tingkat dasar seperti N5, pelajar akan mempelajari sekitar 100 kanji sederhana seperti 水 (mizu) yang berarti \"air\" atau 木 (ki) yang berarti \"pohon.\" Karakter ini sering digunakan dalam kehidupan sehari-hari, membuatnya lebih mudah dipahami dan diingat. Saat pelajar naik ke level berikutnya, seperti N4 dan N3, kanji yang dipelajari semakin kompleks dan mulai mencakup istilah yang lebih abstrak seperti 希望 (kibou), yang berarti \"harapan.\"\r\n\r\nDi level tertinggi, N1, pelajar dihadapkan pada kanji yang jarang digunakan dalam percakapan sehari-hari, tetapi sering muncul dalam literatur, dokumen resmi, atau artikel ilmiah. Contohnya adalah 憂鬱 (yuuutsu), yang berarti \"depresi\" atau \"melankolis.\" Belajar di level ini tidak hanya memerlukan penguasaan karakter tetapi juga memahami konteks penggunaannya.\r\n\r\nDengan kemajuan teknologi, banyak aplikasi dan platform online kini menyediakan alat bantu belajar kanji, termasuk flashcard digital, kuis interaktif, dan permainan berbasis level. Hal ini mempermudah pelajar untuk terus maju dan membuat proses belajar lebih menyenangkan.', '23.png', '2024-12-14 18:59:34', '2024-12-14 18:59:34'),
(3, 'Kanji sebagai Seni: Kaligrafi yang Menggugah Jiwa', 'Kaligrafi Jepang mengubah kanji seperti 愛 (cinta) menjadi karya seni.', 'Kanji bukan hanya alat komunikasi tetapi juga bentuk seni yang mendalam melalui kaligrafi Jepang atau shodō. Seni menulis ini telah menjadi bagian integral dari budaya Jepang selama berabad-abad. Dengan menggunakan kuas khusus yang disebut fude dan tinta cair (墨, sumi), seniman kaligrafi menciptakan karya yang tidak hanya indah tetapi juga mencerminkan jiwa dan emosi mereka.\r\n\r\nSetiap sapuan kuas dalam shodō memiliki makna. Sebuah karakter sederhana seperti 夢 (yume, \"mimpi\") dapat ditulis dengan berbagai gaya, mencerminkan perasaan damai, semangat, atau bahkan kesedihan. Hal ini menjadikan shodō lebih dari sekadar seni visual, tetapi juga bentuk ekspresi diri.\r\n\r\nTradisi shodō telah berkembang seiring waktu. Dalam praktik modern, banyak sekolah seni menawarkan kelas kaligrafi sebagai terapi meditasi. Peserta diajak untuk memusatkan perhatian pada setiap detail sapuan, melatih kesabaran, dan mengurangi stres. Selain itu, pameran kaligrafi kontemporer sering menampilkan karakter kanji yang dikombinasikan dengan elemen desain modern, menciptakan harmoni antara tradisi dan inovasi.', '25.jpeg', '2024-12-14 18:59:34', '2024-12-14 18:59:34'),
(4, 'Kanji dan Teknologi: Era Digital Menghidupkan Tradisi', 'Aplikasi modern membantu belajar dan mengenali kanji dengan mudah.', 'Kemajuan teknologi telah membawa kanji ke ranah digital, menciptakan cara baru untuk mempelajari, menulis, dan memahami karakter-karakter ini. Aplikasi seperti Google Translate dan Pleco memungkinkan pengguna untuk menggambar kanji langsung di layar perangkat mereka dan mendapatkan terjemahan instan. Hal ini sangat membantu, terutama bagi pelajar atau wisatawan yang kesulitan membaca kanji tertentu.\r\n\r\nSelain itu, teknologi Augmented Reality (AR) telah memberikan pengalaman baru dalam belajar kanji. Beberapa aplikasi AR memungkinkan pengguna untuk memindai kanji dengan kamera ponsel mereka, menampilkan informasi tentang arti, cara baca, dan bahkan sejarah kanji tersebut. Ini menciptakan pengalaman belajar yang interaktif dan menyenangkan.\r\n\r\nDi sisi lain, seni kanji juga mulai merambah dunia NFT (Non-Fungible Token). Beberapa seniman digital menciptakan karya seni berbasis kanji dan menjualnya sebagai aset digital yang unik. Contoh karakter populer seperti 愛 (ai, \"cinta\") atau 希望 (kibou, \"harapan\") sering dipilih karena maknanya yang universal.\r\n\r\nTeknologi telah membuka peluang baru untuk menjaga kanji tetap relevan di era modern, memastikan bahwa karakter ini tidak hanya menjadi bagian dari tradisi, tetapi juga masa depan.', '24.jpg', '2024-12-14 18:59:34', '2024-12-14 18:59:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `score` int(11) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`, `created_at`, `updated_at`, `score`) VALUES
(1, 1, 'Apa arti dari \"犬\"?', 'Kucing', 'Anjing', 'Burung', 'Ikan', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(2, 1, 'Apa arti dari \"食べる\"?', 'Tidur', 'Makan', 'Berjalan', 'Bermain', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(3, 1, 'Apa arti dari \"水\"?', 'Api', 'Air', 'Batu', 'Tanah', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(4, 1, 'Apa arti dari \"車\"?', 'Pesawat', 'Mobil', 'Kapal', 'Motor', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(5, 1, 'Apa arti dari \"花\"?', 'Pohon', 'Bunga', 'Rumput', 'Daun', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(6, 1, 'Apa arti dari \"日本\"?', 'China', 'Jepang', 'Korea', 'Vietnam', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(7, 1, 'Apa arti dari \"こんにちは\"?', 'Selamat Pagi', 'Selamat Malam', 'Selamat Siang', 'Selamat Tidur', 'c', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(8, 1, 'Apa arti dari \"ありがとう\"?', 'Sama-sama', 'Terima Kasih', 'Maaf', 'Tolong', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(9, 1, 'Apa arti dari \"学生\"?', 'Pekerja', 'Guru', 'Pelajar', 'Dokter', 'c', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(10, 1, 'Apa arti dari \"先生\"?', 'Pekerja', 'Guru', 'Pelajar', 'Dokter', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(11, 1, 'Apa arti dari \"元気\"?', 'Lelah', 'Sakit', 'Sehat', 'Bahagia', 'c', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(12, 1, 'Apa arti dari \"買う\"?', 'Menjual', 'Membeli', 'Meminjam', 'Menyewa', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(13, 1, 'Apa arti dari \"見る\"?', 'Mendengarkan', 'Melihat', 'Mencium', 'Meraba', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(14, 1, 'Apa arti dari \"来る\"?', 'Pergi', 'Datang', 'Makan', 'Tidur', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(15, 1, 'Apa arti dari \"出る\"?', 'Masuk', 'Keluar', 'Tidur', 'Bangun', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(16, 1, 'Apa arti dari \"友達\"?', 'Saudara', 'Teman', 'Musuh', 'Rekan', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(17, 1, 'Apa arti dari \"家\"?', 'Sekolah', 'Rumah', 'Kantor', 'Toko', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(18, 1, 'Apa arti dari \"楽しい\"?', 'Menyenangkan', 'Menyedihkan', 'Mengejutkan', 'Membosankan', 'a', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(19, 1, 'Apa arti dari \"大きい\"?', 'Tinggi', 'Kecil', 'Besar', 'Rendah', 'c', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(20, 1, 'Apa arti dari \"新しい\"?', 'Tua', 'Baru', 'Rusak', 'Bagus', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(21, 1, 'Apa arti dari \"古い\"?', 'Baru', 'Tua', 'Jelek', 'Bagus', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(22, 1, 'Apa arti dari \"静か\"?', 'Bising', 'Sepi', 'Ramai', 'Tenang', 'b', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(23, 1, 'Apa arti dari \"高い\"?', 'Tinggi', 'Rendah', 'Mahal', 'Murah', 'a', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(24, 1, 'Apa arti dari \"安い\"?', 'Murah', 'Mahal', 'Kecil', 'Besar', 'a', '2024-12-11 21:54:26', '2024-12-11 21:54:26', 3),
(307, 18, 'Apa arti dari \"映画\"?', 'Buku', 'Film', 'Musik', 'Gambar', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(308, 18, 'Apa arti dari \"学校\"?', 'Rumah', 'Sekolah', 'Tempat kerja', 'Taman', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(309, 18, 'Apa arti dari \"電話\"?', 'Email', 'Panggilan', 'Telepon', 'Surat', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(310, 18, 'Apa arti dari \"勉強\"?', 'Belajar', 'Tidur', 'Bermain', 'Makan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(311, 18, 'Apa arti dari \"買い物\"?', 'Berkebun', 'Mencuci', 'Belanja', 'Memasak', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(312, 18, 'Apa arti dari \"駅\"?', 'Bandara', 'Stasiun', 'Terminal', 'Pelabuhan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(313, 18, 'Apa arti dari \"病院\"?', 'Sekolah', 'Rumah Sakit', 'Kantor', 'Toko', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(314, 18, 'Apa arti dari \"郵便局\"?', 'Kantor Pos', 'Kantor Polisi', 'Kantor Pajak', 'Kantor Pemerintah', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(315, 18, 'Apa arti dari \"仕事\"?', 'Liburan', 'Pekerjaan', 'Makan', 'Tidur', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(316, 18, 'Apa arti dari \"上手\"?', 'Pintar', 'Besar', 'Bagus', 'Jelek', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(317, 18, 'Apa arti dari \"下手\"?', 'Pintar', 'Tidak Pandai', 'Rendah', 'Besar', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(318, 18, 'Apa arti dari \"楽しい\"?', 'Sedih', 'Menyenangkan', 'Sulit', 'Membosankan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(319, 18, 'Apa arti dari \"寒い\"?', 'Panas', 'Dingin', 'Hangat', 'Tenggorokan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(320, 18, 'Apa arti dari \"暑い\"?', 'Panas', 'Dingin', 'Rendah', 'Tinggi', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(321, 18, 'Apa arti dari \"遠い\"?', 'Dekat', 'Jauh', 'Tinggi', 'Lebar', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(322, 18, 'Apa arti dari \"近い\"?', 'Dekat', 'Jauh', 'Rendah', 'Tinggi', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(323, 18, 'Apa arti dari \"楽器\"?', 'Alat Musik', 'Alat Makan', 'Alat Tulis', 'Alat Olahraga', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(324, 18, 'Apa arti dari \"空港\"?', 'Bandara', 'Stasiun', 'Pelabuhan', 'Taman', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(325, 18, 'Apa arti dari \"旅行\"?', 'Membaca', 'Belanja', 'Berlibur', 'Tidur', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(326, 18, 'Apa arti dari \"町\"?', 'Kota', 'Desa', 'Tempat tinggal', 'Pasar', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(327, 18, 'Apa arti dari \"村\"?', 'Kota', 'Desa', 'Taman', 'Tempat tinggal', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(328, 18, 'Apa arti dari \"新しい\"?', 'Tua', 'Baru', 'Cantik', 'Bersih', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(329, 18, 'Apa arti dari \"楽しい\"?', 'Sulit', 'Menyenangkan', 'Menyedihkan', 'Membosankan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(330, 18, 'Apa arti dari \"一緒\"?', 'Bersama', 'Sendirian', 'Tunggu', 'Tinggal', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(331, 18, 'Apa arti dari \"手紙\"?', 'Buku', 'Surat', 'Kartu Pos', 'Peta', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(332, 18, 'Apa arti dari \"信号\"?', 'Lampu Merah', 'Lonceng', 'Tanda', 'Kekuatan', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(333, 19, 'Apa arti dari \"挑戦\"?', 'Tantangan', 'Keberuntungan', 'Rencana', 'Perjuangan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(334, 19, 'Apa arti dari \"指示\"?', 'Instruksi', 'Penyakit', 'Alat', 'Pertanyaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(335, 19, 'Apa arti dari \"改革\"?', 'Reformasi', 'Perubahan', 'Pemberontakan', 'Penyelesaian', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(336, 19, 'Apa arti dari \"同情\"?', 'Perhatian', 'Simpati', 'Benci', 'Ketidakpedulian', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(337, 19, 'Apa arti dari \"観察\"?', 'Men-*dengarkan', 'Mengamati', 'Melihat', 'Menulis', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(338, 19, 'Apa arti dari \"状況\"?', 'Keadaan', 'Tujuan', 'Kesulitan', 'Solusi', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(339, 19, 'Apa arti dari \"手続き\"?', 'Langkah-langkah', 'Prosedur', 'Bantuan', 'Perintah', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(340, 19, 'Apa arti dari \"意欲\"?', 'Keinginan', 'Rasa Malu', 'Ketertarikan', 'Kekecewaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(341, 19, 'Apa arti dari \"専攻\"?', 'Minat', 'Jurusan', 'Cita-cita', 'Pekerjaan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(342, 19, 'Apa arti dari \"予想\"?', 'Perkiraan', 'Rencana', 'Tebakan', 'Kesimpulan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(343, 19, 'Apa arti dari \"提供\"?', 'Penawaran', 'Permintaan', 'Penyediaan', 'Pemberian', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(344, 19, 'Apa arti dari \"誤解\"?', 'Pemahaman', 'Kesalahan', 'Kebingungan', 'Pengetahuan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(345, 19, 'Apa arti dari \"義務\"?', 'Kewajiban', 'Keinginan', 'Kesempatan', 'Keputusan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(346, 19, 'Apa arti dari \"得意\"?', 'Terampil', 'Kesulitan', 'Menyenankan', 'Menyesal', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(347, 19, 'Apa arti dari \"普通\"?', 'Luar biasa', 'Biasa', 'Rendah', 'Canggih', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(348, 19, 'Apa arti dari \"反省\"?', 'Penyesalan', 'Evaluasi diri', 'Pengampunan', 'Perubahan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(349, 19, 'Apa arti dari \"設備\"?', 'Peralatan', 'Perbaikan', 'Pekerjaan', 'Layanan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(350, 19, 'Apa arti dari \"研究\"?', 'Penelitian', 'Pendidikan', 'Pengetahuan', 'Pembelajaran', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(351, 19, 'Apa arti dari \"予算\"?', 'Anggaran', 'Pendapatan', 'Pengeluaran', 'Laba', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(352, 19, 'Apa arti dari \"改善\"?', 'Perbaikan', 'Peningkatan', 'Pengurangan', 'Penyelesaian', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(353, 19, 'Apa arti dari \"流行\"?', 'Penularan', 'Populer', 'Berjalan', 'Melakukan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(354, 19, 'Apa arti dari \"発表\"?', 'Pernyataan', 'Laporan', 'Presentasi', 'Penutupan', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(355, 19, 'Apa arti dari \"品質\"?', 'Harga', 'Kualitas', 'Jumlah', 'Cita rasa', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(356, 19, 'Apa arti dari \"担当\"?', 'Pengawasan', 'Tanggung jawab', 'Keputusan', 'Laporan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(357, 19, 'Apa arti dari \"確認\"?', 'Verifikasi', 'Keputusan', 'Penyelesaian', 'Rekaman', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(358, 19, 'Apa arti dari \"貿易\"?', 'Perdagangan', 'Industri', 'Ekspor', 'Impor', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(359, 19, 'Apa arti dari \"貸す\"?', 'Meminjamkan', 'Meminjam', 'Membeli', 'Menjual', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(360, 19, 'Apa arti dari \"納得\"?', 'Penerimaan', 'Pemahaman', 'Keberhasilan', 'Pengakuan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(361, 19, 'Apa arti dari \"補助\"?', 'Bantuan', 'Penyelesaian', 'Pengurangan', 'Pendapatan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(362, 19, 'Apa arti dari \"学習\"?', 'Pembelajaran', 'Pendidikan', 'Pengetahuan', 'Materi', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(363, 19, 'Apa arti dari \"支援\"?', 'Bantuan', 'Pemberian', 'Dukungan', 'Perubahan', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(364, 19, 'Apa arti dari \"内容\"?', 'Tujuan', 'Isi', 'Ringkasan', 'Keputusan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(365, 19, 'Apa arti dari \"製品\"?', 'Produk', 'Pembuatan', 'Kualitas', 'Bahan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(366, 19, 'Apa arti dari \"生産\"?', 'Produksi', 'Penyelesaian', 'Pemeliharaan', 'Pertumbuhan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(367, 20, 'Apa arti dari \"進捗\"?', 'Kemajuan', 'Kesulitan', 'Kebuntuan', 'Penundaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(368, 20, 'Apa arti dari \"顧客\"?', 'Rekan', 'Pelanggan', 'Atasan', 'Karyawan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(369, 20, 'Apa arti dari \"戦略\"?', 'Taktik', 'Strategi', 'Rencana', 'Tujuan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(370, 20, 'Apa arti dari \"改革\"?', 'Reformasi', 'Kebijakan', 'Keputusan', 'Solusi', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(371, 20, 'Apa arti dari \"優先\"?', 'Prioritas', 'Pembatalan', 'Pengunduran', 'Penundaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(372, 20, 'Apa arti dari \"確認\"?', 'Verifikasi', 'Pertanyaan', 'Laporan', 'Konsultasi', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(373, 20, 'Apa arti dari \"解決\"?', 'Penyelesaian', 'Masalah', 'Hambatan', 'Solusi', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(374, 20, 'Apa arti dari \"不明\"?', 'Tidak jelas', 'Terbuka', 'Tersedia', 'Diketahui', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(375, 20, 'Apa arti dari \"結果\"?', 'Hasil', 'Tujuan', 'Pencapaian', 'Kegiatan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(376, 20, 'Apa arti dari \"効果\"?', 'Pengaruh', 'Efek', 'Tujuan', 'Hasil', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(377, 20, 'Apa arti dari \"提案\"?', 'Saran', 'Penyelesaian', 'Masalah', 'Ide', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(378, 20, 'Apa arti dari \"障害\"?', 'Beban', 'Masalah', 'Kesulitan', 'Hambatan', 'd', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(379, 20, 'Apa arti dari \"特徴\"?', 'Ciri khas', 'Kekurangan', 'Kelebihan', 'Kekuatan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(380, 20, 'Apa arti dari \"機会\"?', 'Kesempatan', 'Perjalanan', 'Tempat', 'Pertemuan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(381, 20, 'Apa arti dari \"作業\"?', 'Pekerjaan', 'Proses', 'Tugas', 'Langkah', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(382, 20, 'Apa arti dari \"意欲\"?', 'Keinginan', 'Kehendak', 'Rencana', 'Motivasi', 'd', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(383, 20, 'Apa arti dari \"達成\"?', 'Pencapaian', 'Rencana', 'Sukses', 'Usaha', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(384, 20, 'Apa arti dari \"動作\"?', 'Tindakan', 'Pergerakan', 'Prosedur', 'Tujuan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(385, 20, 'Apa arti dari \"過程\"?', 'Proses', 'Tugas', 'Langkah', 'Perjalanan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(386, 20, 'Apa arti dari \"処理\"?', 'Penyelesaian', 'Pemrosesan', 'Keterangan', 'Tindakan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(387, 20, 'Apa arti dari \"調整\"?', 'Penyesuaian', 'Penutupan', 'Perubahan', 'Pembukaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(388, 20, 'Apa arti dari \"前提\"?', 'Ketentuan', 'Asumsi', 'Persyaratan', 'Keputusan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(389, 20, 'Apa arti dari \"時期\"?', 'Tingkat', 'Waktu', 'Tanggal', 'Periode', 'd', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(390, 20, 'Apa arti dari \"複雑\"?', 'Rumit', 'Sederhana', 'Panjang', 'Cepat', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(391, 20, 'Apa arti dari \"対策\"?', 'Strategi', 'Langkah', 'Solusi', 'Tindakan', 'd', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(392, 20, 'Apa arti dari \"方針\"?', 'Tujuan', 'Pendekatan', 'Rencana', 'Pendapat', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(393, 20, 'Apa arti dari \"一部\"?', 'Satu bagian', 'Buku pertama', 'Besar', 'Satu', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(394, 20, 'Apa arti dari \"調査\"?', 'Penelitian', 'Perbaikan', 'Tindakan', 'Pemeriksaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(395, 20, 'Apa arti dari \"合意\"?', 'Persetujuan', 'Penolakan', 'Penerimaan', 'Pertentangan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(396, 21, 'Apa arti dari \"潜在\"?', 'Tersembunyi', 'Menonjol', 'Terlihat', 'Terbuka', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(397, 21, 'Apa arti dari \"断言\"?', 'Pernyataan', 'Pengingkaran', 'Pembuktian', 'Tanya jawab', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(398, 21, 'Apa arti dari \"崩壊\"?', 'Kebangkitan', 'Kehancuran', 'Penyelamatan', 'Keberhasilan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(399, 21, 'Apa arti dari \"反映\"?', 'Refleksi', 'Pengaruh', 'Penyelidikan', 'Kritik', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(400, 21, 'Apa arti dari \"兆候\"?', 'Tanda-tanda', 'Keberuntungan', 'Pertanda', 'Pertanyaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(401, 21, 'Apa arti dari \"切実\"?', 'Sederhana', 'Penting', 'Serius', 'Mendesak', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(402, 21, 'Apa arti dari \"過剰\"?', 'Berlebihan', 'Tepat', 'Kurang', 'Penuh', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(403, 21, 'Apa arti dari \"定着\"?', 'Penyelesaian', 'Penetapan', 'Perubahan', 'Kebiasaan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(404, 21, 'Apa arti dari \"言い換え\"?', 'Penerjemahan', 'Perubahan kata', 'Pernyataan', 'Penekanan', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(405, 21, 'Apa arti dari \"未熟\"?', 'Kekurangan', 'Kematangan', 'Keterampilan', 'Ketidaksiapan', 'd', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(406, 21, 'Apa arti dari \"多様\"?', 'Berganti', 'Beragam', 'Bergabung', 'Terbatas', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(407, 21, 'Apa arti dari \"圧倒的\"?', 'Mengalahkan', 'Memukau', 'Menyusul', 'Mencapai', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(408, 21, 'Apa arti dari \"誤解\"?', 'Salah paham', 'Penerimaan', 'Kecemasan', 'Kebingungan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(409, 21, 'Apa arti dari \"相違\"?', 'Kesalahan', 'Perbedaan', 'Keunikan', 'Kesesuaian', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(410, 21, 'Apa arti dari \"徹底\"?', 'Menyerah', 'Keseluruhan', 'Keterbukaan', 'Penyelesaian', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(411, 21, 'Apa arti dari \"模範\"?', 'Contoh', 'Peringatan', 'Pembuktian', 'Pertanyaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(412, 21, 'Apa arti dari \"計略\"?', 'Kebijakan', 'Rencana', 'Taktik', 'Tujuan', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(413, 21, 'Apa arti dari \"察知\"?', 'Peringatan', 'Kesadaran', 'Pengamatan', 'Perhatian', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(414, 21, 'Apa arti dari \"特異\"?', 'Biasa', 'Unik', 'Terbatas', 'Umum', 'b', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(415, 21, 'Apa arti dari \"煩雑\"?', 'Rapi', 'Mudah', 'Sederhana', 'Rumit', 'd', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(416, 21, 'Apa arti dari \"劣位\"?', 'Posisi lebih rendah', 'Keunggulan', 'Kemenangan', 'Kekalahan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(417, 21, 'Apa arti dari \"鋭敏\"?', 'Tajam', 'Lemah', 'Tulus', 'Lambat', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(418, 21, 'Apa arti dari \"優越\"?', 'Keunggulan', 'Kekalahan', 'Kemerosotan', 'Kesederhanaan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(419, 21, 'Apa arti dari \"足掻く\"?', 'Melompat', 'Bertindak', 'Berjuang', 'Beristirahat', 'c', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(420, 21, 'Apa arti dari \"放任\"?', 'Mengabaikan', 'Memelihara', 'Mengizinkan', 'Menyalahkan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(421, 21, 'Apa arti dari \"従事\"?', 'Bekerja', 'Berhubungan', 'Beristirahat', 'Mengundurkan', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(422, 21, 'Apa arti dari \"繁忙\"?', 'Kesibukan', 'Kelapangan', 'Ketenangan', 'Sampai', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3),
(423, 21, 'Apa arti dari \"抜群\"?', 'Terbaik', 'Buruk', 'Cukup', 'Buruk', 'a', '2024-12-11 22:04:44', '2024-12-11 22:04:44', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required_score` int(11) NOT NULL DEFAULT 10,
  `duration` int(11) NOT NULL DEFAULT 600,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `quizzes`
--

INSERT INTO `quizzes` (`id`, `level`, `required_score`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'N5', 75, 600, '2024-12-11 21:54:25', '2024-12-11 21:54:25'),
(18, 'N4', 75, 600, '2024-12-11 22:04:44', '2024-12-11 22:04:44'),
(19, 'N3', 75, 600, '2024-12-11 22:04:44', '2024-12-11 22:04:44'),
(20, 'N2', 75, 600, '2024-12-11 22:04:44', '2024-12-11 22:04:44'),
(21, 'N1', 75, 600, '2024-12-11 22:04:44', '2024-12-11 22:04:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(2, 'Alamat', 'julpaesaldesta@gmail.com', '2024-11-12 02:42:14', '$2y$12$e412Mf9XlVq4vt5PBDrAROaJ8bAUDJBpvdaCWeMimKwR/TG4KGKGG', 'bjTtBqhCbCBySuXc1viHL0yQ9I5aux3HO29pJy8Qx5MSo2sPIXx9xtpaUfSv', '2024-11-12 02:09:17', '2024-11-13 20:21:55', 'admin'),
(3, 'Desta', 'desta123@gmail.com', '2024-11-12 19:02:17', '$2y$12$LpIhOrXCqKCyBDyWaO6KMesFmU7uDxBlhxxWNXbsiRr0rCLVUrSwq', 'yIBRxKxZqZhKhWMqDeFpvRHcoHcrB6bNxSdzrxEgwLL0l6KunwexKX7IvuGU', '2024-11-12 19:01:36', '2024-12-10 23:14:42', 'user'),
(5, 'DestaJulpaesal', 'julpaisaldesta@gmail.com', '2024-11-14 20:18:10', '$2y$12$UAxkhJzqI6SM0TkCjKT2cebX2OuETa4rLm4U3FSKa8urjoVuBRbA.', 'c1R8jHnHYRJpStE2A4KS1KB3AOZWeVhtESrnQr3YeY0vbWBMKSrx2igoRm4M', '2024-11-14 20:17:21', '2024-11-14 20:18:10', 'user'),
(6, 'Laravel Testing', 'laravel@gmail.com', '2024-11-15 18:20:18', '$2y$12$GNvN.mhd9MBVlD37qG0cbOjFuwhyvJd/iRDTzuxPh3f0xA4cTwJGK', 'O6ZhGTxt30lZDPf4UvmvzBYYd85RAv9dzF0z64UgrBkdCXg8k5YCTtUz9L64', '2024-11-15 18:18:15', '2024-11-15 18:20:18', 'user'),
(10, 'User', 'user1@gmail.com', '2024-11-20 01:19:44', '$2y$12$RxKVhvt4mTu2Cuz//rdrOeJuiPiCBmWhK0tQxcphz8eY24A0v3Kci', '7QaD1pKw07QEWmEToO1vvPIYZDQiMwriTEWGpTVmdgNt4k2gku9wmJeNBDQv', '2024-11-19 21:47:33', '2024-11-20 01:19:44', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_quiz_progress`
--

CREATE TABLE `user_quiz_progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time_taken` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_quiz_progress`
--

INSERT INTO `user_quiz_progress` (`id`, `user_id`, `quiz_id`, `score`, `created_at`, `updated_at`, `time_taken`) VALUES
(1, 3, 1, 12, '2024-12-11 22:26:45', '2024-12-11 22:26:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_logs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kanjis`
--
ALTER TABLE `kanjis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kanjis_kanji_unique` (`kanji`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Indeks untuk tabel `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `user_quiz_progress`
--
ALTER TABLE `user_quiz_progress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_quiz_progress_user_id_foreign` (`user_id`),
  ADD KEY `user_quiz_progress_quiz_id_foreign` (`quiz_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `badges`
--
ALTER TABLE `badges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kanjis`
--
ALTER TABLE `kanjis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=567;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=424;

--
-- AUTO_INCREMENT untuk tabel `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_quiz_progress`
--
ALTER TABLE `user_quiz_progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD CONSTRAINT `activity_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_quiz_progress`
--
ALTER TABLE `user_quiz_progress`
  ADD CONSTRAINT `user_quiz_progress_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_quiz_progress_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
