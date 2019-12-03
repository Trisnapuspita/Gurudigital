-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2019 pada 00.12
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gurudigital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_berita` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED NOT NULL,
  `to` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_02_075410_add_role_to_users', 2),
(4, '2018_10_22_120355_create_beritas_table', 3),
(5, '2018_10_23_111203_create_pertanyaans_table', 3),
(6, '2018_10_30_110839_create_messages_table', 3),
(7, '2018_11_17_184437_create_profils_table', 3),
(8, '2018_11_17_195509_create_misis_table', 3),
(9, '2018_11_17_195533_create_testimonis_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `misis`
--

CREATE TABLE `misis` (
  `id` int(10) UNSIGNED NOT NULL,
  `poin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `misis`
--

INSERT INTO `misis` (`id`, `poin`, `created_at`, `updated_at`) VALUES
(1, 'Menyediakan dan menyelenggarakan kegiatan belajar bagi siswa dan siswi.', '2019-12-10 17:00:00', NULL),
(2, 'Melatih, membimbing dan memotivasi siswa-siswi dalam berkarya serta menghasilkan karya yang bermanfaat.', '2019-12-09 17:00:00', NULL),
(3, 'Menanamkan dan mengajarkan sikap berbagi kepada sesama manusia.', '2019-12-21 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_kerja` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tentang_kami` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendahuluan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sejarah` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `email`, `telepon`, `alamat`, `waktu_kerja`, `visi`, `tentang_kami`, `pendahuluan`, `sejarah`, `created_at`, `updated_at`) VALUES
(1, 'info@komunitasgurudigital.com', '0818100035', 'Jln haji Mean raya no 96E, 17411, Bekasi, Jawa Barat, Indonesia', 'Senin-Jum\'at 09:00 - 17:00', 'Menjadi yayasan yang unggul dan amanah dalam belajar, berkarya, dan berbagi.', 'Yayasan Teras Diskusi merupakan sebuah lembaga yang bergerak dibidang sosial. Lembaga sosial ini merupakan sebuah lembaga yang berawal dari sebuah diskusi kecil disebuah teras rumah yang membahas tentang mata pelajaran di sekolah.\r\n\r\nKegiatan Yayasan Teras Diskusi ini antara lain: bimbingan belajar, bakti sosial, buka puasa Bersama, pendidikan dan latihan keterampilan, belajar bisnis dan pemeriksaan kesehatan gratis. Yayasan ini bersifat non-profit, dalam artian sang owner tidak mengambil keuntungan dari kas yayasan yang ada.\r\n.', 'Yayasan Teras Diskusi merupakan sebuah lembaga yang bergerak dibidang sosial. Lembaga sosial ini merupakan sebuah lembaga yang berawal dari sebuah diskusi kecil disebuah teras rumah yang membahas tentang mata pelajaran di sekolah.', 'Berawal dari diskusi kecil disebuah teras rumah. Membahas tentang mata pelajaran di sekolah. berlanjut menjadi kegiatan rutin bagi para siswa untuk berdiskusi banyak hal, mulai dari pelajaran di sekolah, pengajian, belajar bisnis, prakarsa dan ketrampilan, sampai dengan belajar terapi diri.\r\n\r\nYayasan teras diskusi didirikan pada 11 maret 2011. Kemudian secara legal disahkan oleh notaris. Pendiri sekaligus ketua dewan pembina yayasan ialah Arief Purnama, S.Pd. ketua harian saat itu ialah Ahmad Firdaus, S.Pd. Sekretaris Adee Setiawan, S.Pd yang saat ini menjabat Ketua yayasan menggantikan Ahmad Firdaus, S.Pd. adapun bendahara pertama ialah Anissa dan sekarang dijabat oleh Siti Marhamah, SE.', '2018-12-17 17:00:00', '2018-12-19 17:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonis`
--

CREATE TABLE `testimonis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(10) UNSIGNED DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Trisna Puspita', NULL, 'trisnapspt@gmail.com', NULL, '$2y$10$2eb1edNXEzb03KryJXPNDeyvyVa2tB4HKOLiUW9/SkNoSD7sbBky6', NULL, '2019-12-01 20:40:31', '2019-12-01 20:40:31'),
(2, 'Admin', 1, 'admin@admin.admin', NULL, '$2y$10$ds2EXss83QIyA.c5U9H/9u9/Bd.Q/gE2QV8d.84p/RZ2lOqbSl6gW', NULL, '2019-12-02 00:49:13', '2019-12-02 00:49:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misis`
--
ALTER TABLE `misis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `misis`
--
ALTER TABLE `misis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
