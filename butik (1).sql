-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Agu 2023 pada 05.46
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `butik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambars`
--

CREATE TABLE `gambars` (
  `id` bigint UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambars`
--

INSERT INTO `gambars` (`id`, `thumbnail`, `produk_id`, `created_at`, `updated_at`) VALUES
(1, 'public/thumbnail/mAXP2enFle249uIcDRw60r80xkEFmb7iBDFUzsGl.jpg', 1, NULL, NULL),
(2, 'public/thumbnail/FPSASi93j2vfjHoi6FEo8ZPac9beScrgFkuJQiWJ.jpg', 1, NULL, NULL),
(3, 'public/thumbnail/PNpY9GoqHGdjTs9Gl2lrAemsfZy0G4XfVYH0dD3s.jpg', 1, NULL, NULL),
(4, 'public/thumbnail/W1nRvKZPTjARCQTUASKqwIXtDp1ZvKkSutTt3t94.jpg', 2, NULL, NULL),
(5, 'public/thumbnail/DldxMFllFhaIvHs6HeTOyBiogHTIASGAJMpBetUl.webp', 2, NULL, NULL),
(6, 'public/thumbnail/JBTfKzb6BbEMMjwHxR0kivIql5m4L5HWSP96Iupk.jpg', 2, NULL, NULL),
(13, 'public/thumbnail/LfyjalsAumvPYguxf5EhSdAWy7DF0DhzMd9IzxO5.jpg', 5, NULL, NULL),
(14, 'public/thumbnail/fCHCfqFqLIwHjTQCnN3eKkcaDz1VaDk5yRkDgYKl.webp', 5, NULL, NULL),
(15, 'public/thumbnail/bcnpX8W71XITtjIpxbejThYexhTaFe8A2ZzsxrNk.jpg', 5, NULL, NULL),
(16, 'public/thumbnail/gPeilfIHdYCsvzfo2AshLbwybNdSLbswAM5vl1I2.jpg', 6, NULL, NULL),
(17, 'public/thumbnail/xDdwLFgyJNLBsRm7mhJddfzLYov7a5VFN11sQ3us.jpg', 6, NULL, NULL),
(18, 'public/thumbnail/9tHHkF1TmmJn4mCcFJCGvKOMVBJTmHomrsj7UOkx.jpg', 6, NULL, NULL),
(24, 'public/thumbnail/7G0z3CjHAPa1sps1uorf5zqJhvRwWXcdCoLyz7x6.jpg', 7, NULL, NULL),
(25, 'public/thumbnail/OAHKKoGgKIDmQw0INQUu7SZBEz1r62Fv4nQqsjCE.webp', 7, NULL, NULL),
(26, 'public/thumbnail/kUVuHVWQS6MTy2NMEQT74sY90uKjsLQnBpTR2FkG.webp', 7, NULL, NULL),
(34, 'public/thumbnail/cxvxaVLB5nlTO1Br0gUp8OW1waQG4ciPB6WCSR97.jpg', 9, '2023-07-31 04:26:46', '2023-07-31 04:26:46'),
(35, 'public/thumbnail/OJQz18jX5DjnbDFwURVAAU0oljAzbwyHXorS7UTq.jpg', 9, '2023-07-31 04:27:03', '2023-07-31 04:27:03'),
(36, 'public/thumbnail/BFisteJZ8Lu4wNzbzkVIyk7OUuM7fX0981VjlZwC.jpg', 9, '2023-07-31 04:27:12', '2023-07-31 04:27:12'),
(37, 'public/thumbnail/kt8QioVDeLnWmpTcUIwqP9EeImOBCx59LrEyBfxK.jpg', 3, '2023-07-31 04:29:05', '2023-07-31 04:29:05'),
(38, 'public/thumbnail/5cJKSoEcSmxJoX0lyBn94shz63lIlmD2p57Ak3IV.jpg', 3, '2023-07-31 04:29:14', '2023-07-31 04:29:14'),
(39, 'public/thumbnail/bLVwlLlnpdGhmhvTUqqs1PHYWuiO29KNx0jXGtR6.jpg', 3, '2023-07-31 04:29:22', '2023-07-31 04:29:22'),
(40, 'public/thumbnail/HUzlmXfakkYZ5KXODcIC3vkWqt99k1Phsy6Mthh7.jpg', 4, '2023-07-31 04:32:46', '2023-07-31 04:32:46'),
(41, 'public/thumbnail/gub0oIgaRNGo0Jo61oiv30BbtT3Mb0M5imQQAcxC.jpg', 4, '2023-07-31 04:32:59', '2023-07-31 04:32:59'),
(42, 'public/thumbnail/uUdNtsTn2ldDEkxUagXP3EwhgiyPfWlngmMa4lhC.jpg', 4, '2023-07-31 04:33:10', '2023-07-31 04:33:10'),
(43, 'public/thumbnail/RkIcMZd7H4PnIOqBOb3UguT5o9QUp8QdKosJoo9U.jpg', 10, NULL, NULL),
(44, 'public/thumbnail/7aLQHWXSNOxRfmASCH7dlRAAKkfAJGKPT2w4Pg05.jpg', 10, '2023-07-31 04:49:47', '2023-07-31 04:49:47'),
(45, 'public/thumbnail/74jbD4nJch13qBZJ9bTobPCRRr8nqf5VoUoKF545.jpg', 10, '2023-07-31 04:49:56', '2023-07-31 04:49:56'),
(46, 'public/thumbnail/xAsjR7t0PoVqt602lK6i3q1bnlqgFUzPwHUMlekA.webp', 11, NULL, NULL),
(47, 'public/thumbnail/87zCQgi0Vx26mOu2KzfK5HRrzdGd0pF3NFgU9Cwy.webp', 11, '2023-07-31 04:55:40', '2023-07-31 04:55:40'),
(48, 'public/thumbnail/kwqMygOASRIjg7jR9oz9JZTGdeqOGVm41BGc1DZJ.webp', 11, '2023-07-31 04:55:49', '2023-07-31 04:55:49'),
(49, 'public/thumbnail/QzewvwavYqxEqqWx3a1cuBnG8XdPJS0swTPMjBr4.jpg', 12, NULL, NULL),
(50, 'public/thumbnail/qrexvxdqM8J56ipocpeh68HkWNFCZsokJ4uJ9eEz.jpg', 12, NULL, NULL),
(51, 'public/thumbnail/4MRjym7OLXIzP1Y4wZYad2tZ5mcx1TLPpVHFlfMF.jpg', 12, '2023-07-31 16:37:10', '2023-07-31 16:37:10'),
(52, 'public/thumbnail/ybVvlapCn8XEG7WVadpNMQPuVA8RiVv5n0JNGbln.jpg', 13, NULL, NULL),
(53, 'public/thumbnail/EdRk2uS9hmrP18mKRgb8naGjpk30kR5P2sYrrz5X.jpg', 13, '2023-07-31 17:03:31', '2023-07-31 17:03:31'),
(54, 'public/thumbnail/U6CbSvT1E8q4tvWKgGgaiESeBdCGTsm8IlY2fpsJ.jpg', 13, '2023-07-31 17:03:42', '2023-07-31 17:03:42'),
(55, 'public/thumbnail/vgEihIkjMAX6p0Kb3LxFqUhnM6NijK2J32ZB9qGF.jpg', 14, NULL, NULL),
(56, 'public/thumbnail/RWIVzbBZ1kY5CcX0SLdODVa7rFR9yvH5ONbze8Ar.jpg', 14, NULL, NULL),
(57, 'public/thumbnail/AsvQLfKcu9FRWehM4wCNf4FH7F63gsjdXPwhWvm2.jpg', 14, NULL, NULL),
(58, 'public/thumbnail/XCxTuzfMUlL6DQS9NDhau9D6ivIyEvYG2qm5nWAY.jpg', 15, NULL, NULL),
(59, 'public/thumbnail/MDHXfPMAjgXF2eH1sBlcHFANE8YghIvXqpAmdkFe.jpg', 15, NULL, NULL),
(60, 'public/thumbnail/Sk3ZnYMl4SCQ943NjjWsVXCqJNfIaM9tkrTDugTC.jpg', 15, NULL, NULL),
(61, 'public/thumbnail/wxhPVOlBl01TEJ5FAY0GMvmUAZ2Ro6hO15JElZko.jpg', 16, NULL, NULL),
(62, 'public/thumbnail/nUxefE2NYDIrTVWH1VficZfAt1CSFMvfLff4Vl8f.jpg', 16, NULL, NULL),
(63, 'public/thumbnail/R34eQsPynVuMbsqazW6a9IC2EmU2Q2aW9xNKNoYy.jpg', 16, NULL, NULL),
(64, 'public/thumbnail/WzPH9J2MSWEI442QaXZkP4qfq7D4csesJMyEuHKQ.jpg', 17, NULL, NULL),
(65, 'public/thumbnail/XI9FdEnmHBaowRTMtkXXOXXS67FRWt8fO2H9H02Y.jpg', 17, NULL, NULL),
(66, 'public/thumbnail/bpSQBKFJ3QCuJ2dqJKEyYb5louWJEg43it3SAy9Z.jpg', 17, NULL, NULL),
(67, 'public/thumbnail/o82G0ZKLyXPanxBsJMTTdeKx7hqugiXlHNtNiLFL.jpg', 18, NULL, NULL),
(68, 'public/thumbnail/xhEC7aTc4vEV0yg7TNYCuD6cI4BC8qxN96OKa9io.jpg', 18, NULL, NULL),
(69, 'public/thumbnail/EqYPng0GTmuu9f5g62H59Ux1R2ajRSD7IbdnM7be.jpg', 18, NULL, NULL),
(70, 'public/thumbnail/aoNZ9VjHK7AxQnG1kfcefWvkgLtnPsGjDMwVZIFQ.jpg', 19, NULL, NULL),
(71, 'public/thumbnail/TYnfI3dsnYtod1MMDc77gZdrhpCFtYQe0XyjoLF5.jpg', 19, NULL, NULL),
(72, 'public/thumbnail/FWSjlw3tvmZTv1hBMtLKdK0BdnSE3LZort2lXBTZ.jpg', 19, NULL, NULL),
(73, 'public/thumbnail/VWG57G50cXSUcwBpkx7AIzjoEaJna6RYlDPGpGbi.jpg', 20, NULL, NULL),
(74, 'public/thumbnail/wPXstcWTka23JKdYcS4ZocePEIKeEc5wpmOWdOxF.jpg', 20, NULL, NULL),
(75, 'public/thumbnail/h1zVUWSwT3RIn2djjozxglHLKtESgNtB2TTYGvnm.jpg', 20, NULL, NULL),
(76, 'public/thumbnail/HhDDBuO3KoHLEgBm4N6UkHBS3FdPgzIfBqT7HDfY.jpg', 21, NULL, NULL),
(77, 'public/thumbnail/JYhSwZvN5AI93d5MNA3kZpZo1OWEZes1XpIWpSYK.jpg', 21, NULL, NULL),
(78, 'public/thumbnail/gifj506aAfJsAOgvnMTWgcgTdQp4loeBOw2XDLly.jpg', 21, NULL, NULL),
(79, 'public/thumbnail/8dio7ksuADx7aswN5BMpNpCX0Jj7rdDRz5e0du6E.jpg', 22, NULL, NULL),
(80, 'public/thumbnail/gZxJBG07P3PvwxRvxGpUnN82c6wceYZ2LasrCS7Y.jpg', 22, NULL, NULL),
(81, 'public/thumbnail/TY5kMEppe6aRjdGgjA3GhU2AuC74LPrc0Jo8wm2U.jpg', 22, NULL, NULL),
(82, 'public/thumbnail/9rxOiiMi8qgKfh4WBoBmZz04tzXQcF5DHOD1uLWS.jpg', 23, NULL, NULL),
(83, 'public/thumbnail/ezHRKRXdTfvXIk1f606euFQijmegiNhpvGAEuIje.jpg', 23, NULL, NULL),
(84, 'public/thumbnail/6NjIdW1DuBNety93KVrQGomuzSslDV4QI7zDPRhj.jpg', 23, NULL, NULL),
(85, 'public/thumbnail/QaFDMvO4wnGF1MTdBc9RGprGGC1gojct60KBuGRa.jpg', 24, NULL, NULL),
(86, 'public/thumbnail/8fV53rr5hF5fhTHGElEICd4IHAX1CYz1LA9l5AU9.jpg', 24, NULL, NULL),
(87, 'public/thumbnail/gP54LuyyJSIjpvYyF5vTZtuLCGIFHNxMc5kF4NtC.jpg', 24, NULL, NULL),
(88, 'public/thumbnail/1p6tsanV25TNIhhnQmiL6ENOzZmPdWa9jN4JX56e.jpg', 25, NULL, NULL),
(89, 'public/thumbnail/GN4PDNFEpZzWXOuicG7bEZ3cqLOuzPEI5py8xeWC.jpg', 25, NULL, NULL),
(90, 'public/thumbnail/IuTUMOdnY9tWQyAYH0Z5fd4NaQ2cwkaJLbzwLV1e.jpg', 25, NULL, NULL),
(91, 'public/thumbnail/9U261mtCvIK862mX3VfJLdLinY6sxJUM7fgHiPj3.webp', 26, NULL, NULL),
(92, 'public/thumbnail/4jpCwNVSLZuUawFU90pFqY8GKPSrLbfNGusShulR.webp', 26, '2023-07-31 18:39:56', '2023-07-31 18:39:56'),
(93, 'public/thumbnail/fny5z0HXwpMwdfAHjZLPLlxvJ0ICqqF8dr1FOKbW.webp', 26, '2023-07-31 18:40:07', '2023-07-31 18:40:07'),
(94, 'public/thumbnail/rGMSqYys58tNUpJn8cnUWsTguWMdOU1gWvA8NOk0.jpg', 27, NULL, NULL),
(95, 'public/thumbnail/gYnRB5mCPbi7eI2NAm561SCWtt8uPUL6uDPtQwOh.jpg', 27, NULL, NULL),
(96, 'public/thumbnail/YuG8N7lwInMJcDOX8LsVtTkt6ehTe8zRfnBJQs6K.jpg', 27, NULL, NULL),
(97, 'public/thumbnail/HBC6EbY6yZpsy6RygDjX5v1afv48pcRnrVdQY1xm.jpg', 28, NULL, NULL),
(98, 'public/thumbnail/sEsbQcsCqGFCtB6KXgxI4jRc8FK36isNJiJvNE8R.jpg', 28, NULL, NULL),
(99, 'public/thumbnail/bIu3pVCZOWDoMs1W8R6r1PzYpd4szyzHPcZHjLq3.jpg', 28, NULL, NULL),
(100, 'public/thumbnail/2mgxQTvLB6pfOHLR4DMVO5xHpG0zuggtMcdCRhvT.jpg', 29, NULL, NULL),
(101, 'public/thumbnail/DYRr0KBZfW9vijoguLoodTH5eTqyiaRhYGIbN2z0.jpg', 29, NULL, NULL),
(102, 'public/thumbnail/f1HeTDjvMlQq3Z16JupoNELJUp4x9oqdnH3ISBgq.jpg', 29, NULL, NULL),
(103, 'public/thumbnail/czMKGdHqEwJZv04O64xj2nu4CbfXiIYx7puHFmIo.jpg', 30, NULL, NULL),
(104, 'public/thumbnail/gZCxsWEyHwZLWtu5rc6csiEieeJdf42YsXBvz0eg.jpg', 30, NULL, NULL),
(105, 'public/thumbnail/NhQd77kzPJO6HbMXGzp2luAhxU9CJHYL6errr5zJ.jpg', 30, NULL, NULL),
(106, 'public/thumbnail/5rYKhQQWvpYwTejtOUQWAFIw5SPkBkOnBrVUppqA.jpg', 31, NULL, NULL),
(107, 'public/thumbnail/sRMd3vH5uMUpE2BVbHj9L4qS664QvfuO75V93GLR.jpg', 31, NULL, NULL),
(108, 'public/thumbnail/KzW9BBzaziqhhYokRcG1S7g61LzzkZaPRypGtk35.jpg', 31, NULL, NULL),
(109, 'public/thumbnail/wbVZTl5HdyxWmY5NlRhdQGEnm38HWXoXQ2qy14IC.jpg', 32, NULL, NULL),
(110, 'public/thumbnail/2Sx11NcwBmotiPbFxsnYYNqCTK5OPGQJn0Dz3B9a.jpg', 32, NULL, NULL),
(111, 'public/thumbnail/W9Hu4mo2O0Z3mH93kS3qj4X79JyGBnKVgGOKRAkw.jpg', 32, NULL, NULL),
(112, 'public/thumbnail/IgR7oWH8ClJDyeOE7D6pQaDcqdTXfYMAuWuy8Mbh.jpg', 33, NULL, NULL),
(113, 'public/thumbnail/m7ZxWEe0f58sUfR3wqTtAqid1J26Ozm38PJPNwXl.jpg', 33, NULL, NULL),
(114, 'public/thumbnail/MWTQKhyKVtQcVOlsi822hvKyhgmxzcCEHIIRPzNw.jpg', 33, NULL, NULL),
(115, 'public/thumbnail/0Xwgtddvhmt34Ec44hc9qsa6slvnYVdlalpuyjmr.jpg', 34, NULL, NULL),
(116, 'public/thumbnail/5f1O5EEO160c6JJtBxHZ52KKtx4I5RNlaP84f2VB.jpg', 34, NULL, NULL),
(117, 'public/thumbnail/31hck6SGKN02lXHDANTn4XSxEsvJ4N5rY3wgdbol.jpg', 34, NULL, NULL),
(118, 'public/thumbnail/FwJi15t1VeQOr2IwSlEFkadNQyrmdqN92tmXZIpr.jpg', 35, NULL, NULL),
(119, 'public/thumbnail/oErlLSdQMsOpUQ37ewZu737ruDaTluiUTGePcs3k.jpg', 35, NULL, NULL),
(120, 'public/thumbnail/bw72r7YCoevhG0yxEAA7Ey30dp60u6f3UC9QhBs8.jpg', 35, NULL, NULL),
(124, 'public/thumbnail/8p9W67GOLjD6oNJenk3PV1AEf3h8RStGqfGqVorX.jpg', 36, '2023-07-31 19:20:58', '2023-07-31 19:20:58'),
(125, 'public/thumbnail/RPmziwqZ942KYev8C2CUdHgUnHRaySzgCAjLhCXu.jpg', 36, '2023-07-31 19:21:22', '2023-07-31 19:21:22'),
(126, 'public/thumbnail/9LQdfFm19Yy80tyN4dPv6I6taXFlqzBAkKBBaZLr.jpg', 36, '2023-07-31 19:21:45', '2023-07-31 19:21:45'),
(127, 'public/thumbnail/ujgeX5p71cdWxq7UitlnJtvGX4dztGjiAeY4nalw.jpg', 37, NULL, NULL),
(128, 'public/thumbnail/YPOaiU5QNb3A4GNPms2PzOWkA49U1C6pUEvtMlju.jpg', 37, NULL, NULL),
(129, 'public/thumbnail/j7ZgIehHqAlKtTrewqp6VbVk7VKhXf768htPJABP.jpg', 37, NULL, NULL),
(130, 'public/thumbnail/smvc48sorZ0bOD3PuSHrZg3TYcmdMknlmYUBybCz.jpg', 38, NULL, NULL),
(131, 'public/thumbnail/P1jKy7KIH2qpcyb9sCGZ5POe1cyUQScomeilAdi2.jpg', 38, NULL, NULL),
(132, 'public/thumbnail/UYG5oSk0ewWmZCBwU4pDk6PJ87Qwt51W0btX1nFz.jpg', 38, NULL, NULL),
(133, 'public/thumbnail/2fhdfyC2g9A48l3Cxkeg31nB2P4DgS1XvD6otBaM.jpg', 39, NULL, NULL),
(134, 'public/thumbnail/SD05R8bviK1Plani4TAqPPsDZm1vwb5Bjv9Nig3b.jpg', 39, NULL, NULL),
(135, 'public/thumbnail/IN64IbDkeESeaQTGvlb1aEwvwGY94yMzNH15SLpO.jpg', 39, NULL, NULL),
(136, 'public/thumbnail/8mgfvVD4erEl7A4TbYzobqw16jyiDYGPTQosrAei.jpg', 40, NULL, NULL),
(137, 'public/thumbnail/v3jcAO7ksjWKW7ZtF6bf4mG5h5x46rYzEO66Obzy.jpg', 40, NULL, NULL),
(138, 'public/thumbnail/qU6KroSjRwDhP9GDrOF5L9ghM9mtDqseYpJeW0eH.jpg', 40, NULL, NULL),
(141, 'public/thumbnail/Xi4bpHokMGQ1NlUr2ek62B8GQ8Gu8BgOjgIFIsOX.jpg', 41, NULL, NULL),
(142, 'public/thumbnail/lqiKAZmGDDzYRZ27YZ3ST0HpR7KMEXYWbbbJonqH.jpg', 41, '2023-07-31 19:34:58', '2023-07-31 19:34:58'),
(143, 'public/thumbnail/I0tR3fFTP4br4iWpfJoXRv215rSGKjxdfPIw0wkg.jpg', 41, '2023-07-31 19:35:07', '2023-07-31 19:35:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `slug`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'pakaian', 'pakaian', 'public/icon/fOydFUb41Eo2eWy6N5a7IKUTvndbsIUTrVs24Rbg.png', NULL, NULL, '2023-07-31 21:32:49'),
(2, 'Sepatu', 'sepatu', 'public/icon/CXR0LKYP8JyNVtCnv2k7RvgVFQgbLm6pFjo6Q4UI.png', NULL, '2023-07-29 23:43:24', '2023-07-31 21:30:47'),
(3, 'Celana', 'celana', 'public/icon/3R432XfmMXI6aEwofqgeLmujUd9k0RDlLF2GEl2c.png', NULL, '2023-07-30 23:31:24', '2023-07-31 21:38:41'),
(4, 'Aksesoris', 'aksesoris', 'public/icon/rwoUAkRKNP4kutdebJTWQyTMzEXBVcm4jqir7MCa.png', NULL, '2023-07-30 23:31:51', '2023-07-31 21:42:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint UNSIGNED NOT NULL,
  `provinsi_id` bigint UNSIGNED NOT NULL,
  `kota_id` bigint UNSIGNED NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `provinsi_id`, `kota_id`, `kecamatan`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'Denpasar Timur', NULL, NULL),
(2, 1, 4, 'Denpasar Barat', NULL, NULL),
(3, 1, 4, 'Denpasar Selatan', NULL, NULL),
(4, 1, 4, 'Denpasar Utara', NULL, NULL),
(5, 13, 179, 'Banjarbaru Utara', NULL, NULL),
(6, 13, 179, 'Banjarbaru Barat', NULL, NULL),
(7, 13, 179, 'Banjarbaru Timur', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `produk_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotas`
--

CREATE TABLE `kotas` (
  `id` bigint UNSIGNED NOT NULL,
  `provinsi_id` int UNSIGNED NOT NULL,
  `kota_id` int UNSIGNED NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kotas`
--

INSERT INTO `kotas` (`id`, `provinsi_id`, `kota_id`, `kota`, `created_at`, `updated_at`) VALUES
(1, 1, 17, 'Badung', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(2, 1, 32, 'Bangli', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(3, 1, 94, 'Buleleng', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(4, 1, 114, 'Denpasar', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(5, 1, 128, 'Gianyar', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(6, 1, 161, 'Jembrana', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(7, 1, 170, 'Karangasem', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(8, 1, 197, 'Klungkung', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(9, 1, 447, 'Tabanan', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(10, 2, 27, 'Bangka', '2023-07-29 01:27:34', '2023-07-29 01:27:34'),
(11, 2, 28, 'Bangka Barat', '2023-07-29 01:27:34', '2023-07-29 01:27:34'),
(12, 2, 29, 'Bangka Selatan', '2023-07-29 01:27:34', '2023-07-29 01:27:34'),
(13, 2, 30, 'Bangka Tengah', '2023-07-29 01:27:34', '2023-07-29 01:27:34'),
(14, 2, 56, 'Belitung', '2023-07-29 01:27:34', '2023-07-29 01:27:34'),
(15, 2, 57, 'Belitung Timur', '2023-07-29 01:27:34', '2023-07-29 01:27:34'),
(16, 2, 334, 'Pangkal Pinang', '2023-07-29 01:27:34', '2023-07-29 01:27:34'),
(17, 3, 106, 'Cilegon', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(18, 3, 232, 'Lebak', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(19, 3, 331, 'Pandeglang', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(20, 3, 402, 'Serang', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(21, 3, 403, 'Serang', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(22, 3, 455, 'Tangerang', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(23, 3, 456, 'Tangerang', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(24, 3, 457, 'Tangerang Selatan', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(25, 4, 62, 'Bengkulu', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(26, 4, 63, 'Bengkulu Selatan', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(27, 4, 64, 'Bengkulu Tengah', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(28, 4, 65, 'Bengkulu Utara', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(29, 4, 175, 'Kaur', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(30, 4, 183, 'Kepahiang', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(31, 4, 233, 'Lebong', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(32, 4, 294, 'Muko Muko', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(33, 4, 379, 'Rejang Lebong', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(34, 4, 397, 'Seluma', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(35, 5, 39, 'Bantul', '2023-07-29 01:27:38', '2023-07-29 01:27:38'),
(36, 5, 135, 'Gunung Kidul', '2023-07-29 01:27:38', '2023-07-29 01:27:38'),
(37, 5, 210, 'Kulon Progo', '2023-07-29 01:27:38', '2023-07-29 01:27:38'),
(38, 5, 419, 'Sleman', '2023-07-29 01:27:38', '2023-07-29 01:27:38'),
(39, 5, 501, 'Yogyakarta', '2023-07-29 01:27:38', '2023-07-29 01:27:38'),
(40, 6, 151, 'Jakarta Barat', '2023-07-29 01:27:39', '2023-07-29 01:27:39'),
(41, 6, 152, 'Jakarta Pusat', '2023-07-29 01:27:39', '2023-07-29 01:27:39'),
(42, 6, 153, 'Jakarta Selatan', '2023-07-29 01:27:39', '2023-07-29 01:27:39'),
(43, 6, 154, 'Jakarta Timur', '2023-07-29 01:27:39', '2023-07-29 01:27:39'),
(44, 6, 155, 'Jakarta Utara', '2023-07-29 01:27:39', '2023-07-29 01:27:39'),
(45, 6, 189, 'Kepulauan Seribu', '2023-07-29 01:27:39', '2023-07-29 01:27:39'),
(46, 7, 77, 'Boalemo', '2023-07-29 01:27:40', '2023-07-29 01:27:40'),
(47, 7, 88, 'Bone Bolango', '2023-07-29 01:27:40', '2023-07-29 01:27:40'),
(48, 7, 129, 'Gorontalo', '2023-07-29 01:27:40', '2023-07-29 01:27:40'),
(49, 7, 130, 'Gorontalo', '2023-07-29 01:27:40', '2023-07-29 01:27:40'),
(50, 7, 131, 'Gorontalo Utara', '2023-07-29 01:27:40', '2023-07-29 01:27:40'),
(51, 7, 361, 'Pohuwato', '2023-07-29 01:27:40', '2023-07-29 01:27:40'),
(52, 8, 50, 'Batang Hari', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(53, 8, 97, 'Bungo', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(54, 8, 156, 'Jambi', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(55, 8, 194, 'Kerinci', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(56, 8, 280, 'Merangin', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(57, 8, 293, 'Muaro Jambi', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(58, 8, 393, 'Sarolangun', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(59, 8, 442, 'Sungaipenuh', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(60, 8, 460, 'Tanjung Jabung Barat', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(61, 8, 461, 'Tanjung Jabung Timur', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(62, 8, 471, 'Tebo', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(63, 9, 22, 'Bandung', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(64, 9, 23, 'Bandung', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(65, 9, 24, 'Bandung Barat', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(66, 9, 34, 'Banjar', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(67, 9, 54, 'Bekasi', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(68, 9, 55, 'Bekasi', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(69, 9, 78, 'Bogor', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(70, 9, 79, 'Bogor', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(71, 9, 103, 'Ciamis', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(72, 9, 104, 'Cianjur', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(73, 9, 107, 'Cimahi', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(74, 9, 108, 'Cirebon', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(75, 9, 109, 'Cirebon', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(76, 9, 115, 'Depok', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(77, 9, 126, 'Garut', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(78, 9, 149, 'Indramayu', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(79, 9, 171, 'Karawang', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(80, 9, 211, 'Kuningan', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(81, 9, 252, 'Majalengka', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(82, 9, 332, 'Pangandaran', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(83, 9, 376, 'Purwakarta', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(84, 9, 428, 'Subang', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(85, 9, 430, 'Sukabumi', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(86, 9, 431, 'Sukabumi', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(87, 9, 440, 'Sumedang', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(88, 9, 468, 'Tasikmalaya', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(89, 9, 469, 'Tasikmalaya', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(90, 10, 37, 'Banjarnegara', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(91, 10, 41, 'Banyumas', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(92, 10, 49, 'Batang', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(93, 10, 76, 'Blora', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(94, 10, 91, 'Boyolali', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(95, 10, 92, 'Brebes', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(96, 10, 105, 'Cilacap', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(97, 10, 113, 'Demak', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(98, 10, 134, 'Grobogan', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(99, 10, 163, 'Jepara', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(100, 10, 169, 'Karanganyar', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(101, 10, 177, 'Kebumen', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(102, 10, 181, 'Kendal', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(103, 10, 196, 'Klaten', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(104, 10, 209, 'Kudus', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(105, 10, 249, 'Magelang', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(106, 10, 250, 'Magelang', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(107, 10, 344, 'Pati', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(108, 10, 348, 'Pekalongan', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(109, 10, 349, 'Pekalongan', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(110, 10, 352, 'Pemalang', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(111, 10, 375, 'Purbalingga', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(112, 10, 377, 'Purworejo', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(113, 10, 380, 'Rembang', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(114, 10, 386, 'Salatiga', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(115, 10, 398, 'Semarang', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(116, 10, 399, 'Semarang', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(117, 10, 427, 'Sragen', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(118, 10, 433, 'Sukoharjo', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(119, 10, 445, 'Surakarta (Solo)', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(120, 10, 472, 'Tegal', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(121, 10, 473, 'Tegal', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(122, 10, 476, 'Temanggung', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(123, 10, 497, 'Wonogiri', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(124, 10, 498, 'Wonosobo', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(125, 11, 31, 'Bangkalan', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(126, 11, 42, 'Banyuwangi', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(127, 11, 51, 'Batu', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(128, 11, 74, 'Blitar', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(129, 11, 75, 'Blitar', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(130, 11, 80, 'Bojonegoro', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(131, 11, 86, 'Bondowoso', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(132, 11, 133, 'Gresik', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(133, 11, 160, 'Jember', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(134, 11, 164, 'Jombang', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(135, 11, 178, 'Kediri', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(136, 11, 179, 'Kediri', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(137, 11, 222, 'Lamongan', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(138, 11, 243, 'Lumajang', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(139, 11, 247, 'Madiun', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(140, 11, 248, 'Madiun', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(141, 11, 251, 'Magetan', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(142, 11, 255, 'Malang', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(143, 11, 256, 'Malang', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(144, 11, 289, 'Mojokerto', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(145, 11, 290, 'Mojokerto', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(146, 11, 305, 'Nganjuk', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(147, 11, 306, 'Ngawi', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(148, 11, 317, 'Pacitan', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(149, 11, 330, 'Pamekasan', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(150, 11, 342, 'Pasuruan', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(151, 11, 343, 'Pasuruan', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(152, 11, 363, 'Ponorogo', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(153, 11, 369, 'Probolinggo', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(154, 11, 370, 'Probolinggo', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(155, 11, 390, 'Sampang', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(156, 11, 409, 'Sidoarjo', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(157, 11, 418, 'Situbondo', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(158, 11, 441, 'Sumenep', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(159, 11, 444, 'Surabaya', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(160, 11, 487, 'Trenggalek', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(161, 11, 489, 'Tuban', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(162, 11, 492, 'Tulungagung', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(163, 12, 61, 'Bengkayang', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(164, 12, 168, 'Kapuas Hulu', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(165, 12, 176, 'Kayong Utara', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(166, 12, 195, 'Ketapang', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(167, 12, 208, 'Kubu Raya', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(168, 12, 228, 'Landak', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(169, 12, 279, 'Melawi', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(170, 12, 364, 'Pontianak', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(171, 12, 365, 'Pontianak', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(172, 12, 388, 'Sambas', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(173, 12, 391, 'Sanggau', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(174, 12, 395, 'Sekadau', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(175, 12, 415, 'Singkawang', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(176, 12, 417, 'Sintang', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(177, 13, 18, 'Balangan', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(178, 13, 33, 'Banjar', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(179, 13, 35, 'Banjarbaru', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(180, 13, 36, 'Banjarmasin', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(181, 13, 43, 'Barito Kuala', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(182, 13, 143, 'Hulu Sungai Selatan', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(183, 13, 144, 'Hulu Sungai Tengah', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(184, 13, 145, 'Hulu Sungai Utara', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(185, 13, 203, 'Kotabaru', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(186, 13, 446, 'Tabalong', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(187, 13, 452, 'Tanah Bumbu', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(188, 13, 454, 'Tanah Laut', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(189, 13, 466, 'Tapin', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(190, 14, 44, 'Barito Selatan', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(191, 14, 45, 'Barito Timur', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(192, 14, 46, 'Barito Utara', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(193, 14, 136, 'Gunung Mas', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(194, 14, 167, 'Kapuas', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(195, 14, 174, 'Katingan', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(196, 14, 205, 'Kotawaringin Barat', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(197, 14, 206, 'Kotawaringin Timur', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(198, 14, 221, 'Lamandau', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(199, 14, 296, 'Murung Raya', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(200, 14, 326, 'Palangka Raya', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(201, 14, 371, 'Pulang Pisau', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(202, 14, 405, 'Seruyan', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(203, 14, 432, 'Sukamara', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(204, 15, 19, 'Balikpapan', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(205, 15, 66, 'Berau', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(206, 15, 89, 'Bontang', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(207, 15, 214, 'Kutai Barat', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(208, 15, 215, 'Kutai Kartanegara', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(209, 15, 216, 'Kutai Timur', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(210, 15, 341, 'Paser', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(211, 15, 354, 'Penajam Paser Utara', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(212, 15, 387, 'Samarinda', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(213, 16, 96, 'Bulungan (Bulongan)', '2023-07-29 01:27:51', '2023-07-29 01:27:51'),
(214, 16, 257, 'Malinau', '2023-07-29 01:27:51', '2023-07-29 01:27:51'),
(215, 16, 311, 'Nunukan', '2023-07-29 01:27:51', '2023-07-29 01:27:51'),
(216, 16, 450, 'Tana Tidung', '2023-07-29 01:27:51', '2023-07-29 01:27:51'),
(217, 16, 467, 'Tarakan', '2023-07-29 01:27:51', '2023-07-29 01:27:51'),
(218, 17, 48, 'Batam', '2023-07-29 01:27:52', '2023-07-29 01:27:52'),
(219, 17, 71, 'Bintan', '2023-07-29 01:27:52', '2023-07-29 01:27:52'),
(220, 17, 172, 'Karimun', '2023-07-29 01:27:52', '2023-07-29 01:27:52'),
(221, 17, 184, 'Kepulauan Anambas', '2023-07-29 01:27:52', '2023-07-29 01:27:52'),
(222, 17, 237, 'Lingga', '2023-07-29 01:27:52', '2023-07-29 01:27:52'),
(223, 17, 302, 'Natuna', '2023-07-29 01:27:52', '2023-07-29 01:27:52'),
(224, 17, 462, 'Tanjung Pinang', '2023-07-29 01:27:52', '2023-07-29 01:27:52'),
(225, 18, 21, 'Bandar Lampung', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(226, 18, 223, 'Lampung Barat', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(227, 18, 224, 'Lampung Selatan', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(228, 18, 225, 'Lampung Tengah', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(229, 18, 226, 'Lampung Timur', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(230, 18, 227, 'Lampung Utara', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(231, 18, 282, 'Mesuji', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(232, 18, 283, 'Metro', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(233, 18, 355, 'Pesawaran', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(234, 18, 356, 'Pesisir Barat', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(235, 18, 368, 'Pringsewu', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(236, 18, 458, 'Tanggamus', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(237, 18, 490, 'Tulang Bawang', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(238, 18, 491, 'Tulang Bawang Barat', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(239, 18, 496, 'Way Kanan', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(240, 19, 14, 'Ambon', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(241, 19, 99, 'Buru', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(242, 19, 100, 'Buru Selatan', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(243, 19, 185, 'Kepulauan Aru', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(244, 19, 258, 'Maluku Barat Daya', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(245, 19, 259, 'Maluku Tengah', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(246, 19, 260, 'Maluku Tenggara', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(247, 19, 261, 'Maluku Tenggara Barat', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(248, 19, 400, 'Seram Bagian Barat', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(249, 19, 401, 'Seram Bagian Timur', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(250, 19, 488, 'Tual', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(251, 20, 138, 'Halmahera Barat', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(252, 20, 139, 'Halmahera Selatan', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(253, 20, 140, 'Halmahera Tengah', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(254, 20, 141, 'Halmahera Timur', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(255, 20, 142, 'Halmahera Utara', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(256, 20, 191, 'Kepulauan Sula', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(257, 20, 372, 'Pulau Morotai', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(258, 20, 477, 'Ternate', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(259, 20, 478, 'Tidore Kepulauan', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(260, 21, 1, 'Aceh Barat', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(261, 21, 2, 'Aceh Barat Daya', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(262, 21, 3, 'Aceh Besar', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(263, 21, 4, 'Aceh Jaya', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(264, 21, 5, 'Aceh Selatan', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(265, 21, 6, 'Aceh Singkil', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(266, 21, 7, 'Aceh Tamiang', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(267, 21, 8, 'Aceh Tengah', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(268, 21, 9, 'Aceh Tenggara', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(269, 21, 10, 'Aceh Timur', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(270, 21, 11, 'Aceh Utara', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(271, 21, 20, 'Banda Aceh', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(272, 21, 59, 'Bener Meriah', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(273, 21, 72, 'Bireuen', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(274, 21, 127, 'Gayo Lues', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(275, 21, 230, 'Langsa', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(276, 21, 235, 'Lhokseumawe', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(277, 21, 300, 'Nagan Raya', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(278, 21, 358, 'Pidie', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(279, 21, 359, 'Pidie Jaya', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(280, 21, 384, 'Sabang', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(281, 21, 414, 'Simeulue', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(282, 21, 429, 'Subulussalam', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(283, 22, 68, 'Bima', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(284, 22, 69, 'Bima', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(285, 22, 118, 'Dompu', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(286, 22, 238, 'Lombok Barat', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(287, 22, 239, 'Lombok Tengah', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(288, 22, 240, 'Lombok Timur', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(289, 22, 241, 'Lombok Utara', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(290, 22, 276, 'Mataram', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(291, 22, 438, 'Sumbawa', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(292, 22, 439, 'Sumbawa Barat', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(293, 23, 13, 'Alor', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(294, 23, 58, 'Belu', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(295, 23, 122, 'Ende', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(296, 23, 125, 'Flores Timur', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(297, 23, 212, 'Kupang', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(298, 23, 213, 'Kupang', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(299, 23, 234, 'Lembata', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(300, 23, 269, 'Manggarai', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(301, 23, 270, 'Manggarai Barat', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(302, 23, 271, 'Manggarai Timur', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(303, 23, 301, 'Nagekeo', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(304, 23, 304, 'Ngada', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(305, 23, 383, 'Rote Ndao', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(306, 23, 385, 'Sabu Raijua', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(307, 23, 412, 'Sikka', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(308, 23, 434, 'Sumba Barat', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(309, 23, 435, 'Sumba Barat Daya', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(310, 23, 436, 'Sumba Tengah', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(311, 23, 437, 'Sumba Timur', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(312, 23, 479, 'Timor Tengah Selatan', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(313, 23, 480, 'Timor Tengah Utara', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(314, 24, 16, 'Asmat', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(315, 24, 67, 'Biak Numfor', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(316, 24, 90, 'Boven Digoel', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(317, 24, 111, 'Deiyai (Deliyai)', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(318, 24, 117, 'Dogiyai', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(319, 24, 150, 'Intan Jaya', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(320, 24, 157, 'Jayapura', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(321, 24, 158, 'Jayapura', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(322, 24, 159, 'Jayawijaya', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(323, 24, 180, 'Keerom', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(324, 24, 193, 'Kepulauan Yapen (Yapen Waropen)', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(325, 24, 231, 'Lanny Jaya', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(326, 24, 263, 'Mamberamo Raya', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(327, 24, 264, 'Mamberamo Tengah', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(328, 24, 274, 'Mappi', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(329, 24, 281, 'Merauke', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(330, 24, 284, 'Mimika', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(331, 24, 299, 'Nabire', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(332, 24, 303, 'Nduga', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(333, 24, 335, 'Paniai', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(334, 24, 347, 'Pegunungan Bintang', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(335, 24, 373, 'Puncak', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(336, 24, 374, 'Puncak Jaya', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(337, 24, 392, 'Sarmi', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(338, 24, 443, 'Supiori', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(339, 24, 484, 'Tolikara', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(340, 24, 495, 'Waropen', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(341, 24, 499, 'Yahukimo', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(342, 24, 500, 'Yalimo', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(343, 25, 124, 'Fakfak', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(344, 25, 165, 'Kaimana', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(345, 25, 272, 'Manokwari', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(346, 25, 273, 'Manokwari Selatan', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(347, 25, 277, 'Maybrat', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(348, 25, 346, 'Pegunungan Arfak', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(349, 25, 378, 'Raja Ampat', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(350, 25, 424, 'Sorong', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(351, 25, 425, 'Sorong', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(352, 25, 426, 'Sorong Selatan', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(353, 25, 449, 'Tambrauw', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(354, 25, 474, 'Teluk Bintuni', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(355, 25, 475, 'Teluk Wondama', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(356, 26, 60, 'Bengkalis', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(357, 26, 120, 'Dumai', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(358, 26, 147, 'Indragiri Hilir', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(359, 26, 148, 'Indragiri Hulu', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(360, 26, 166, 'Kampar', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(361, 26, 187, 'Kepulauan Meranti', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(362, 26, 207, 'Kuantan Singingi', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(363, 26, 350, 'Pekanbaru', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(364, 26, 351, 'Pelalawan', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(365, 26, 381, 'Rokan Hilir', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(366, 26, 382, 'Rokan Hulu', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(367, 26, 406, 'Siak', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(368, 27, 253, 'Majene', '2023-07-29 01:28:05', '2023-07-29 01:28:05'),
(369, 27, 262, 'Mamasa', '2023-07-29 01:28:05', '2023-07-29 01:28:05'),
(370, 27, 265, 'Mamuju', '2023-07-29 01:28:05', '2023-07-29 01:28:05'),
(371, 27, 266, 'Mamuju Utara', '2023-07-29 01:28:05', '2023-07-29 01:28:05'),
(372, 27, 362, 'Polewali Mandar', '2023-07-29 01:28:05', '2023-07-29 01:28:05'),
(373, 28, 38, 'Bantaeng', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(374, 28, 47, 'Barru', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(375, 28, 87, 'Bone', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(376, 28, 95, 'Bulukumba', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(377, 28, 123, 'Enrekang', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(378, 28, 132, 'Gowa', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(379, 28, 162, 'Jeneponto', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(380, 28, 244, 'Luwu', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(381, 28, 245, 'Luwu Timur', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(382, 28, 246, 'Luwu Utara', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(383, 28, 254, 'Makassar', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(384, 28, 275, 'Maros', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(385, 28, 328, 'Palopo', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(386, 28, 333, 'Pangkajene Kepulauan', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(387, 28, 336, 'Parepare', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(388, 28, 360, 'Pinrang', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(389, 28, 396, 'Selayar (Kepulauan Selayar)', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(390, 28, 408, 'Sidenreng Rappang/Rapang', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(391, 28, 416, 'Sinjai', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(392, 28, 423, 'Soppeng', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(393, 28, 448, 'Takalar', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(394, 28, 451, 'Tana Toraja', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(395, 28, 486, 'Toraja Utara', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(396, 28, 493, 'Wajo', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(397, 29, 25, 'Banggai', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(398, 29, 26, 'Banggai Kepulauan', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(399, 29, 98, 'Buol', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(400, 29, 119, 'Donggala', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(401, 29, 291, 'Morowali', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(402, 29, 329, 'Palu', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(403, 29, 338, 'Parigi Moutong', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(404, 29, 366, 'Poso', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(405, 29, 410, 'Sigi', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(406, 29, 482, 'Tojo Una-Una', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(407, 29, 483, 'Toli-Toli', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(408, 30, 53, 'Bau-Bau', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(409, 30, 85, 'Bombana', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(410, 30, 101, 'Buton', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(411, 30, 102, 'Buton Utara', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(412, 30, 182, 'Kendari', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(413, 30, 198, 'Kolaka', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(414, 30, 199, 'Kolaka Utara', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(415, 30, 200, 'Konawe', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(416, 30, 201, 'Konawe Selatan', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(417, 30, 202, 'Konawe Utara', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(418, 30, 295, 'Muna', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(419, 30, 494, 'Wakatobi', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(420, 31, 73, 'Bitung', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(421, 31, 81, 'Bolaang Mongondow (Bolmong)', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(422, 31, 82, 'Bolaang Mongondow Selatan', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(423, 31, 83, 'Bolaang Mongondow Timur', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(424, 31, 84, 'Bolaang Mongondow Utara', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(425, 31, 188, 'Kepulauan Sangihe', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(426, 31, 190, 'Kepulauan Siau Tagulandang Biaro (Sitaro)', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(427, 31, 192, 'Kepulauan Talaud', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(428, 31, 204, 'Kotamobagu', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(429, 31, 267, 'Manado', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(430, 31, 285, 'Minahasa', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(431, 31, 286, 'Minahasa Selatan', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(432, 31, 287, 'Minahasa Tenggara', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(433, 31, 288, 'Minahasa Utara', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(434, 31, 485, 'Tomohon', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(435, 32, 12, 'Agam', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(436, 32, 93, 'Bukittinggi', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(437, 32, 116, 'Dharmasraya', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(438, 32, 186, 'Kepulauan Mentawai', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(439, 32, 236, 'Lima Puluh Koto/Kota', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(440, 32, 318, 'Padang', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(441, 32, 321, 'Padang Panjang', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(442, 32, 322, 'Padang Pariaman', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(443, 32, 337, 'Pariaman', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(444, 32, 339, 'Pasaman', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(445, 32, 340, 'Pasaman Barat', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(446, 32, 345, 'Payakumbuh', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(447, 32, 357, 'Pesisir Selatan', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(448, 32, 394, 'Sawah Lunto', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(449, 32, 411, 'Sijunjung (Sawah Lunto Sijunjung)', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(450, 32, 420, 'Solok', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(451, 32, 421, 'Solok', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(452, 32, 422, 'Solok Selatan', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(453, 32, 453, 'Tanah Datar', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(454, 33, 40, 'Banyuasin', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(455, 33, 121, 'Empat Lawang', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(456, 33, 220, 'Lahat', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(457, 33, 242, 'Lubuk Linggau', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(458, 33, 292, 'Muara Enim', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(459, 33, 297, 'Musi Banyuasin', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(460, 33, 298, 'Musi Rawas', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(461, 33, 312, 'Ogan Ilir', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(462, 33, 313, 'Ogan Komering Ilir', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(463, 33, 314, 'Ogan Komering Ulu', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(464, 33, 315, 'Ogan Komering Ulu Selatan', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(465, 33, 316, 'Ogan Komering Ulu Timur', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(466, 33, 324, 'Pagar Alam', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(467, 33, 327, 'Palembang', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(468, 33, 367, 'Prabumulih', '2023-07-29 01:28:12', '2023-07-29 01:28:12'),
(469, 34, 15, 'Asahan', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(470, 34, 52, 'Batu Bara', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(471, 34, 70, 'Binjai', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(472, 34, 110, 'Dairi', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(473, 34, 112, 'Deli Serdang', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(474, 34, 137, 'Gunungsitoli', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(475, 34, 146, 'Humbang Hasundutan', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(476, 34, 173, 'Karo', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(477, 34, 217, 'Labuhan Batu', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(478, 34, 218, 'Labuhan Batu Selatan', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(479, 34, 219, 'Labuhan Batu Utara', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(480, 34, 229, 'Langkat', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(481, 34, 268, 'Mandailing Natal', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(482, 34, 278, 'Medan', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(483, 34, 307, 'Nias', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(484, 34, 308, 'Nias Barat', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(485, 34, 309, 'Nias Selatan', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(486, 34, 310, 'Nias Utara', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(487, 34, 319, 'Padang Lawas', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(488, 34, 320, 'Padang Lawas Utara', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(489, 34, 323, 'Padang Sidempuan', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(490, 34, 325, 'Pakpak Bharat', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(491, 34, 353, 'Pematang Siantar', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(492, 34, 389, 'Samosir', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(493, 34, 404, 'Serdang Bedagai', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(494, 34, 407, 'Sibolga', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(495, 34, 413, 'Simalungun', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(496, 34, 459, 'Tanjung Balai', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(497, 34, 463, 'Tapanuli Selatan', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(498, 34, 464, 'Tapanuli Tengah', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(499, 34, 465, 'Tapanuli Utara', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(500, 34, 470, 'Tebing Tinggi', '2023-07-29 01:28:13', '2023-07-29 01:28:13'),
(501, 34, 481, 'Toba Samosir', '2023-07-29 01:28:13', '2023-07-29 01:28:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kupons`
--

CREATE TABLE `kupons` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('percentage','fixed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kupons`
--

INSERT INTO `kupons` (`id`, `code`, `description`, `type`, `amount`, `start_date`, `end_date`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'FIRST2023', 'Diskon Spesial Transaksi Pertama', 'percentage', 15.00, '2023-06-01', '2023-08-31', 1, NULL, NULL),
(2, 'DISKON20', 'DIskon 20%', 'percentage', 20.00, '2023-07-31', '2023-08-31', 1, '2023-07-30 23:36:25', '2023-07-30 23:36:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurirs`
--

CREATE TABLE `kurirs` (
  `id` bigint UNSIGNED NOT NULL,
  `kurir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kurirs`
--

INSERT INTO `kurirs` (`id`, `kurir`, `created_at`, `updated_at`) VALUES
(1, 'tiki', NULL, NULL),
(2, 'jne', NULL, NULL),
(3, 'pos', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_14_112423_create_kategoris_table', 1),
(6, '2023_06_14_112437_create_subkategoris_table', 1),
(7, '2023_06_25_032729_create_produks_table', 1),
(8, '2023_06_25_080018_create_provinsis_table', 1),
(9, '2023_06_25_101656_create_kotas_table', 1),
(10, '2023_06_25_101956_create_kecamatans_table', 1),
(11, '2023_06_26_021230_create_kupons_table', 1),
(12, '2023_06_26_153415_create-sliders-table', 1),
(13, '2023_06_27_060548_create-keranjangs-table', 1),
(14, '2023_06_29_184708_create-transactions-table', 1),
(15, '2023_06_29_184733_create-transaction_details-table', 1),
(16, '2023_07_06_065715_create-gambars-table', 1),
(17, '2023_07_16_105000_create-ulasans-table', 1),
(18, '2023_07_18_134633_create-kurirs-table', 1),
(19, '2023_07_18_225204_create-refunds-table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `subkategori_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `namaproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodeproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beratproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stokproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuranproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warnaproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargaproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsishort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsiproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `promo` tinyint DEFAULT NULL,
  `produkbaru` tinyint DEFAULT NULL,
  `bestseller` tinyint DEFAULT NULL,
  `barudatang` tinyint DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `created_at`, `updated_at`, `kategori_id`, `subkategori_id`, `user_id`, `namaproduk`, `kodeproduk`, `beratproduk`, `stokproduk`, `ukuranproduk`, `warnaproduk`, `hargaproduk`, `deskripsishort`, `deskripsiproduk`, `diskon`, `promo`, `produkbaru`, `bestseller`, `barudatang`, `slug`, `status`) VALUES
(1, '2023-07-29 01:47:09', '2023-07-29 01:47:09', 1, 1, 2, 'Batik', 'BJ001', '500', '3', 'XL', 'coklat', '450000', 'Batik Kombinasi', 'Baju Batik Kombinasi terbuat', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, '2023-07-29 02:00:47', '2023-07-29 02:00:47', 1, 1, 2, 'Batik Hijau', 'BJ002', '500', '5', 'XL', 'Hijau', '350000', 'Baju Batik Kombinasi', 'Baju Batik Kombinasi ini terbuat dari kain batik yang dikombinasikan dengan kain polos', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(3, '2023-07-29 02:59:12', '2023-07-31 04:30:15', 2, 3, 4, 'REGENT - Off White Grey Black', 'SP001', '500', '3', '40', 'Abu - abu', '449000', 'REGENT - Off White Grey Black', 'Sepatu Regent dari brand lokal ortuseight dijamin ori', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(4, '2023-07-30 00:06:20', '2023-07-31 04:31:55', 2, 3, 4, 'REACTOR - WHITE RED', 'SP004', '500', '4', '40', 'Putih', '479000', 'REACTOR - WHITE RED', 'Ortus Eight REACTOR merupakan sepatu seri lifestyle dengan menggunakan Quick-Fit dengan material pelapis dalam upper sepatu yang menyesuaikan dengan bentuk kaki dan memberikan kenyamanan bagi pemakainya,', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(5, '2023-07-30 23:22:59', '2023-07-30 23:22:59', 1, 1, 2, 'Batik Abu', 'BJ003', '500', '4', 'XL', 'Abu - abu', '300000', 'Batik Kombinasi Abu', 'Batik Abu Kemeja Batik Pria Lengan Panjang merupakan long sleeves shirt berbahan cotton yang didesain ethnic dalam motif batik sehingga sangat nyaman dan cocok digunakan untuk acara formal maupun nonformal.', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, '2023-07-30 23:26:29', '2023-07-30 23:26:29', 1, 1, 2, 'Batik Merah', 'BJ004', '500', '3', 'XL', 'Merah', '350000', 'Batik Kombinasi Merah', 'Batik Prass Padi Abu Kemeja Batik Pria Lengan Panjang merupakan long sleeves shirt berbahan cotton yang didesain ethnic dalam motif batik, sehingga sangat nyaman dan cocok digunakan untuk acara formal maupun nonformal.', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(7, '2023-07-30 23:49:57', '2023-07-30 23:49:57', 2, 4, 4, 'Hyperfuse 1.3', 'SP002', '500', '2', '40', 'Orange', '499000', 'HYPERFUSE 1.3 ORTRANGE WHITE', 'Melangkah dengan percaya diri bersama Sepatu running HYPERFUSE 1.3. Hadir dengan desain sporty dengan pilihan warna yang tidak kalah keren.', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(9, '2023-07-31 04:26:22', '2023-07-31 04:26:22', 2, 4, 4, 'HYPERGLIDE 2.0 SE GREAT WAVE', 'SP003', '500', '5', '40', 'Biru', '599000', 'HYPERGLIDE 2.0 SE GREAT WAVE', 'Melangkah dengan percaya diri bersama Sepatu running HYPERFUSE 1.3. Hadir dengan desain sporty dengan pilihan warna yang tidak kalah keren.', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(10, '2023-07-31 04:49:31', '2023-07-31 04:49:31', 4, 12, 6, 'SEIKO PROSPEX SPB385', 'JM001', '500', '4', 'Diameter 42 mm x Thickness 12.9 mm', 'Silver', '215000', 'SEIKO PROSPEX SPB385', 'Prospex Seiko 110th Anniversary “Glacier Blue” Save The Ocean 1968 Modern Re-interpretasi Automatic GMT Diver Scuba 200M Blue Dial Silver Stainless Steel Bracelet Edisi Terbatas', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(11, '2023-07-31 04:55:26', '2023-07-31 04:55:26', 4, 12, 6, 'Iconic Emerald 32 RG Green', 'JM001', '500', '2', '31 - 35 mm', 'Gold', '319000', 'Iconic Emerald 32 RG Green', 'Ketebalan bingkai: 8,5mm\r\nWarna Tombol: \"Forest\" green\r\nGerakan: Gerakan Quartz Jepang\r\nMaterial Tali: baja anti karat 316L', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(12, '2023-07-31 16:36:52', '2023-07-31 16:36:52', 4, 11, 6, 'NECKLACE', 'KL001', '190', '1', '45 cm', 'gold', '1260000', 'NECKLACE', 'Berat Emas: 1,90gr\r\nWarna: Rose gold', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(13, '2023-07-31 17:03:21', '2023-07-31 17:03:21', 4, 13, 6, 'Gelang', 'GL001', '200', '3', '17 Cm', 'Hijau', '35000', 'Gelang Tali Paracord', 'Gelang aksesoris terbuat dari bahan nylon yang ringan.', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(14, '2023-07-31 17:08:35', '2023-07-31 17:08:35', 4, 13, 6, 'Topi Pria Cardinal C1040X01A', 'TP001', '200', '3', '-', 'Hitam', '149000', 'Topi Pria Cardinal C1040X01A', 'Topi Pria Cardinal C1040X01A memiliki pola topi regular / topi baseball', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(15, '2023-07-31 17:10:54', '2023-07-31 17:10:54', 4, 13, 6, 'Topi Bucket Pria Cardinal', 'TP002', '200', '2', '-', 'Army', '139000', 'Topi Bucket Pria Cardinal', 'Topi mancing / bucket hat Cardinal Casual memiliki material Katun', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(16, '2023-07-31 17:14:37', '2023-07-31 17:14:37', 4, 13, 6, 'Topi Komando Pria Cardinal', 'TP003', '200', '3', '-', 'Coklat', '149000', 'Topi Komando Pria Cardinal', 'Topi komando pria Cardinal Casual menggunakan Material Katun dengan pola Topi komando', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17, '2023-07-31 17:16:55', '2023-07-31 17:16:55', 4, 13, 6, 'Topi Cardinal Kids', 'TP004', '200', '3', '-', 'Merah', '129000', 'Topi Cardinal Kids', 'Topi Cardinal Kids Boy dengan Material Katun dan pola Regular', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(18, '2023-07-31 17:30:37', '2023-07-31 17:30:37', 1, 5, 7, 'Cardinal Dress Femme', 'DR001', '500', '3', 'L', 'Navy', '479000', 'Cardinal Dress Femme', 'Dress Wanita Cardinal Femme memiliki material Katun dengan pola Regular', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(19, '2023-07-31 17:33:24', '2023-07-31 17:33:24', 1, 5, 7, 'Dress Overall Wanita Cardinal', 'DR002', '500', '4', 'L', 'Coklat', '459000', 'Dress Overall Wanita Cardinal', 'Dress Overall Cardinal Girls memiliki material Rayon dengan pola Loose Fit', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(20, '2023-07-31 17:36:52', '2023-07-31 17:36:52', 1, 5, 7, 'Dress Basic Loose', 'DR005', '500', '3', 'XL', 'Maron', '469000', 'Dress Basic Loose Fit Cardinal Femme', 'Cardinal Femme Dress Tangan 3/4 memiliki material Polyester dengan pola Loose Fit', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(21, '2023-07-31 17:39:32', '2023-07-31 17:39:32', 1, 5, 7, 'Cardinal Tunik Loose', 'DR006', '500', '3', 'XL', 'Coklat', '419000', 'Cardinal Tunik Loose', 'Tunik Wanita Cardinal Femme dengan material Polyester dan pola Loose Fit', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(22, '2023-07-31 17:42:09', '2023-07-31 17:42:09', 1, 7, 7, 'T-Shirt Wanita Cardinal', 'DR008', '500', '3', 'M', 'Coklat', '179000', 'T-Shirt Wanita Cardinal', '-Shirt Cardinal Girls memiliki material Katun dan pola Regular', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(23, '2023-07-31 17:44:47', '2023-07-31 17:44:47', 1, 1, 7, 'Kemeja Wanita Loose Fit Cardinal', 'DR011', '500', '3', 'M', 'Biru', '179000', 'Kemeja Wanita Loose Fit Cardinal', 'Kemeja Wanita Cardinal Girls memiliki material Katun dan pola Loose Fit', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, '2023-07-31 18:31:56', '2023-07-31 18:31:56', 3, 9, 7, 'Jeans Skinny Pria', 'JN001', '500', '4', '32', 'Indigo', '479000', 'Jeans Skinny Pria', 'Celana Pria Cardinal Jeans material Denim pola Skinny', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(25, '2023-07-31 18:34:14', '2023-07-31 18:34:14', 3, 10, 7, 'Celana Panjang Cargo GI', 'CL004', '500', '4', '32', 'Hitam', '299000', 'Celana Panjang Cargo GI', 'Cardinal Casual Celana Panjang Cargo GI Material Katun Pola Regular', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(26, '2023-07-31 18:39:40', '2023-07-31 18:39:40', 3, 8, 7, 'Nike Sportswear', 'CL004', '500', '3', '32', 'Hitam', '289000', 'Nike Sportswear', 'Celana Olahraga Nike menghadirkan gaya klasik hingga kecepatan', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(27, '2023-07-31 18:55:38', '2023-07-31 18:55:38', 3, 9, 7, 'Jeans Skinny Wanita', 'CL003', '500', '3', '30', 'Biru', '379000', 'Jeans Skinny Wanita', 'Celana panjang jeans Cardinal Girls memiliki material Denim dan pola Mama Size Skinny', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(28, '2023-07-31 19:03:13', '2023-07-31 19:03:13', 1, 1, 2, 'Kemeja Lengan Panjang Pria', 'KM001', '500', '4', 'XL', 'Hitam', '349000', 'Kemeja Lengan Panjang Pria', 'Kemeja pria Cardinal Casual dengan material Katun dan pola Regular', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(29, '2023-07-31 19:05:03', '2023-07-31 19:05:03', 1, 1, 2, 'Kemeja Lengan Pendek Pria', 'KM002', '500', '4', 'XL', 'Abu - abu', '339000', 'Kemeja Lengan Pendek Pria', 'Kemeja pria Cardinal Casual memiliki material Katun dan pola Regular', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(30, '2023-07-31 19:08:02', '2023-07-31 19:08:02', 1, 1, 2, 'Kemeja Slim Fit Pria', 'KM004', '500', '3', 'XL', 'Merah', '319000', 'Kemeja Slim Fit Pria', 'Kemeja Pria Cardinal Formal memiliki material Katun dan pola Slim Fit', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(31, '2023-07-31 19:09:59', '2023-07-31 19:09:59', 1, 1, 2, 'Kemeja Semi Fit Pria', 'KM005', '500', '3', 'XL', 'Hitam', '319000', 'Kemeja Semi Fit Pria', 'Kemeja Pria Cardinal Formal Memiliki Material Katun dan Pola Semi Fit', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(32, '2023-07-31 19:12:33', '2023-07-31 19:12:33', 1, 1, 2, 'Kemeja Slim Fit Pria', 'KM006', '500', '4', 'XL', 'Putih', '229000', 'Kemeja Slim Fit Pria', 'Kemeja Pria Cdl Formal Material Cvc Pola Slim Fit', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(33, '2023-07-31 19:14:53', '2023-07-31 19:14:53', 1, 1, 2, 'Kemeja Wanita Cardinal', 'KM009', '500', '4', 'L', 'Pink', '299000', 'Kemeja Wanita Cardinal', 'Kemeja Cardinal Femme Material Polyester Pola Regular', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(34, '2023-07-31 19:18:13', '2023-07-31 19:18:13', 2, 2, 4, 'Sepatu Formal Pria', 'FM001', '500', '3', '40', 'Hitam', '399000', 'Sepatu Formal Pria', 'Sepatu formal pria Cardinal Material Kulit Pola Low cut', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(35, '2023-07-31 19:19:53', '2023-07-31 19:19:53', 2, 2, 4, 'Sepatu Formal Pria Cardinal', 'FM002', '500', '4', '40', 'Hitam', '399000', 'Sepatu Formal Pria Cardinal', 'Sepatu formal pria Cardinal Material Kulit Pola Low cut', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(36, '2023-07-31 19:19:54', '2023-07-31 19:19:54', 2, 2, 4, 'Sepatu Formal Pria Cardinal', 'FM002', '500', '4', '40', 'Hitam', '399000', 'Sepatu Formal Pria Cardinal', 'Sepatu formal pria Cardinal Material Kulit Pola Low cut', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(37, '2023-07-31 19:24:01', '2023-07-31 19:24:01', 2, 3, 4, 'Sneakers Low Cut Pria', 'CS001', '500', '4', '40', 'Hitam', '319000', 'Sneakers Low Cut Pria', 'Sepatu Sneakers Pria Cardinal Material Katun / kanvas Pola Low Cut', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(38, '2023-07-31 19:27:03', '2023-07-31 19:27:03', 2, 3, 4, 'Sneakers Low Cut Wanita', 'SM001', '500', '3', '39', 'Putih', '349000', 'Sneakers Low Cut Wanita', 'Sepatu sneakers Cardinal Shoes Material Katun Pola Low Cut', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(39, '2023-07-31 19:28:45', '2023-07-31 19:28:45', 2, 3, 4, 'Sneakers High Cut Wanita', 'SP006', '500', '3', '40', 'Putih', '359000', 'Sneakers High Cut Wanita', 'Sepatu sneakers Cardinal Shoes Ladies Material Katun Pola High Cut', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(40, '2023-07-31 19:31:55', '2023-07-31 19:31:55', 2, 3, 4, 'REVERE WHITE CARBON ORTRANGE', 'SP007', '500', '3', '40', 'Putih', '549000', 'REVERE WHITE CARBON ORTRANGE', 'Revere merupakan sepatu dengan teknologi QuickFit andalan pada bagian upper yang memiliki material lembut agar fitting sepatu pas mengikuti bentuk kaki.', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(41, '2023-07-31 19:34:33', '2023-07-31 19:34:33', 2, 3, 4, 'GLASGOW - Black/White', 'CS005', '500', '3', '40', 'Hitam', '299000', 'GLASGOW - Black/White', 'Ortuseight Glasgow merupakan sepatu seri lifestyle. Warna Black/White. Bisa dipakai untuk sehari-hari. Nyaman dipakai.', NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint UNSIGNED NOT NULL,
  `provinsi_id` int UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinsis`
--

INSERT INTO `provinsis` (`id`, `provinsi_id`, `provinsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bali', '2023-07-29 01:27:32', '2023-07-29 01:27:32'),
(2, 2, 'Bangka Belitung', '2023-07-29 01:27:33', '2023-07-29 01:27:33'),
(3, 3, 'Banten', '2023-07-29 01:27:34', '2023-07-29 01:27:34'),
(4, 4, 'Bengkulu', '2023-07-29 01:27:35', '2023-07-29 01:27:35'),
(5, 5, 'DI Yogyakarta', '2023-07-29 01:27:36', '2023-07-29 01:27:36'),
(6, 6, 'DKI Jakarta', '2023-07-29 01:27:38', '2023-07-29 01:27:38'),
(7, 7, 'Gorontalo', '2023-07-29 01:27:39', '2023-07-29 01:27:39'),
(8, 8, 'Jambi', '2023-07-29 01:27:40', '2023-07-29 01:27:40'),
(9, 9, 'Jawa Barat', '2023-07-29 01:27:41', '2023-07-29 01:27:41'),
(10, 10, 'Jawa Tengah', '2023-07-29 01:27:42', '2023-07-29 01:27:42'),
(11, 11, 'Jawa Timur', '2023-07-29 01:27:44', '2023-07-29 01:27:44'),
(12, 12, 'Kalimantan Barat', '2023-07-29 01:27:45', '2023-07-29 01:27:45'),
(13, 13, 'Kalimantan Selatan', '2023-07-29 01:27:46', '2023-07-29 01:27:46'),
(14, 14, 'Kalimantan Tengah', '2023-07-29 01:27:47', '2023-07-29 01:27:47'),
(15, 15, 'Kalimantan Timur', '2023-07-29 01:27:48', '2023-07-29 01:27:48'),
(16, 16, 'Kalimantan Utara', '2023-07-29 01:27:50', '2023-07-29 01:27:50'),
(17, 17, 'Kepulauan Riau', '2023-07-29 01:27:51', '2023-07-29 01:27:51'),
(18, 18, 'Lampung', '2023-07-29 01:27:52', '2023-07-29 01:27:52'),
(19, 19, 'Maluku', '2023-07-29 01:27:53', '2023-07-29 01:27:53'),
(20, 20, 'Maluku Utara', '2023-07-29 01:27:54', '2023-07-29 01:27:54'),
(21, 21, 'Nanggroe Aceh Darussalam (NAD)', '2023-07-29 01:27:56', '2023-07-29 01:27:56'),
(22, 22, 'Nusa Tenggara Barat (NTB)', '2023-07-29 01:27:57', '2023-07-29 01:27:57'),
(23, 23, 'Nusa Tenggara Timur (NTT)', '2023-07-29 01:27:58', '2023-07-29 01:27:58'),
(24, 24, 'Papua', '2023-07-29 01:27:59', '2023-07-29 01:27:59'),
(25, 25, 'Papua Barat', '2023-07-29 01:28:01', '2023-07-29 01:28:01'),
(26, 26, 'Riau', '2023-07-29 01:28:02', '2023-07-29 01:28:02'),
(27, 27, 'Sulawesi Barat', '2023-07-29 01:28:04', '2023-07-29 01:28:04'),
(28, 28, 'Sulawesi Selatan', '2023-07-29 01:28:05', '2023-07-29 01:28:05'),
(29, 29, 'Sulawesi Tengah', '2023-07-29 01:28:06', '2023-07-29 01:28:06'),
(30, 30, 'Sulawesi Tenggara', '2023-07-29 01:28:07', '2023-07-29 01:28:07'),
(31, 31, 'Sulawesi Utara', '2023-07-29 01:28:08', '2023-07-29 01:28:08'),
(32, 32, 'Sumatera Barat', '2023-07-29 01:28:09', '2023-07-29 01:28:09'),
(33, 33, 'Sumatera Selatan', '2023-07-29 01:28:10', '2023-07-29 01:28:10'),
(34, 34, 'Sumatera Utara', '2023-07-29 01:28:12', '2023-07-29 01:28:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `refunds`
--

CREATE TABLE `refunds` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `transaction_id` int NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `refunds`
--

INSERT INTO `refunds` (`id`, `user_id`, `transaction_id`, `alasan`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 'Size kekecilan', '2023-07-30', 'DITERIMA', '2023-07-30 01:58:59', '2023-07-30 01:59:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategoris`
--

CREATE TABLE `subkategoris` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori_id` bigint UNSIGNED NOT NULL,
  `subkategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subkategoris`
--

INSERT INTO `subkategoris` (`id`, `kategori_id`, `subkategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'kemeja', NULL, NULL, NULL),
(2, 2, 'formal', '2023-07-30 00:03:38', '2023-07-30 00:03:38', NULL),
(3, 2, 'Casual', '2023-07-30 23:29:42', '2023-07-30 23:29:42', NULL),
(4, 2, 'Running', '2023-07-30 23:29:53', '2023-07-30 23:29:53', NULL),
(5, 1, 'Dress', '2023-07-30 23:30:08', '2023-07-30 23:30:08', NULL),
(6, 1, 'Daster', '2023-07-30 23:30:19', '2023-07-30 23:30:19', NULL),
(7, 1, 'Piama', '2023-07-30 23:30:30', '2023-07-30 23:30:30', NULL),
(8, 3, 'Training', '2023-07-30 23:32:42', '2023-07-30 23:32:42', NULL),
(9, 3, 'Jeans', '2023-07-30 23:32:52', '2023-07-30 23:32:52', NULL),
(10, 3, 'Cargo', '2023-07-30 23:33:02', '2023-07-30 23:33:02', NULL),
(11, 4, 'Kalung', '2023-07-30 23:34:03', '2023-07-30 23:34:03', NULL),
(12, 4, 'Jam Tangan', '2023-07-30 23:34:12', '2023-07-30 23:34:12', NULL),
(13, 4, 'Topi', '2023-07-30 23:34:21', '2023-07-30 23:34:21', NULL),
(14, 4, 'Gelang', '2023-07-30 23:34:39', '2023-07-30 23:34:39', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `tanggal` date NOT NULL,
  `diskon` int NOT NULL,
  `total_harga` int NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `tanggal`, `diskon`, `total_harga`, `transaction_status`, `kode`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, '2023-07-29', 52500, 317500, 'SUCCESS', '#INVOICE-8999', NULL, '2023-07-29 02:02:43', '2023-07-29 02:03:08'),
(2, 3, '2023-07-29', 0, 368000, 'SUCCESS', '#INVOICE-3888', NULL, '2023-07-29 02:50:32', '2023-07-29 02:50:48'),
(3, 5, '2023-07-29', 67500, 406500, 'SUCCESS', '#INVOICE-769', NULL, '2023-07-29 03:01:39', '2023-07-29 03:01:52'),
(4, 5, '2023-07-30', 67500, 410500, 'SUCCESS', '#INVOICE-7665', NULL, '2023-07-30 01:52:39', '2023-07-30 01:53:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint UNSIGNED NOT NULL,
  `transaction_id` int NOT NULL,
  `produk_id` int NOT NULL,
  `harga` int NOT NULL,
  `qty` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ongkir` int DEFAULT NULL,
  `kurir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `produk_id`, `harga`, `qty`, `status`, `resi`, `ongkir`, `kurir`, `catatan`, `kode`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 350000, 1, 'SELESAI', 'JNE332124', 20000, 'Jalur Nugraha Ekakurir (JNE) - REG', NULL, 'TRX-2056', '2023-07-29 02:02:43', '2023-07-29 02:06:27'),
(2, 2, 2, 350000, 1, 'PENDING', '', 18000, 'Jalur Nugraha Ekakurir (JNE) - OKE', NULL, 'TRX-9890', '2023-07-29 02:50:32', '2023-07-29 02:50:32'),
(3, 3, 3, 450000, 1, 'SELESAI', 'JNE332121', 24000, 'Jalur Nugraha Ekakurir (JNE) - OKE', NULL, 'TRX-6683', '2023-07-29 03:01:39', '2023-07-29 03:03:50'),
(4, 4, 3, 450000, 1, 'SELESAI', 'JNE332124', 28000, 'Jalur Nugraha Ekakurir (JNE) - REG', NULL, 'TRX-89', '2023-07-30 01:52:39', '2023-07-30 01:55:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasans`
--

CREATE TABLE `ulasans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `produk_id` int NOT NULL,
  `ulasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bintang` int NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ulasans`
--

INSERT INTO `ulasans` (`id`, `user_id`, `produk_id`, `ulasan`, `bintang`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'kain nya bagus', 5, '2023-07-29', '2023-07-29 02:06:40', '2023-07-29 02:06:40'),
(2, 5, 3, 'Pengiriman Cepat', 5, '2023-07-29', '2023-07-29 03:04:04', '2023-07-29 03:04:04'),
(3, 5, 3, 'produk bagus', 4, '2023-07-30', '2023-07-30 01:55:27', '2023-07-30 01:55:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','member','pelanggan') COLLATE utf8mb4_unicode_ci DEFAULT 'pelanggan',
  `jenis_kelamin` enum('Laki - laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint DEFAULT NULL,
  `alamat1` text COLLATE utf8mb4_unicode_ci,
  `alamat2` text COLLATE utf8mb4_unicode_ci,
  `negara` text COLLATE utf8mb4_unicode_ci,
  `provinsi_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kodepos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategori_id` int DEFAULT NULL,
  `status_toko` int DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `jenis_kelamin`, `tahun`, `image`, `status`, `alamat1`, `alamat2`, `negara`, `provinsi_id`, `kecamatan_id`, `kota_id`, `kodepos`, `no_hp`, `nama_toko`, `kategori_id`, `status_toko`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$uKUI9fUiw2LBMbOpKSUjZuzfzwdysM5gMCGgZnlPfwUpPR/dZWom6', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13', '179', '5', NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL),
(2, 'member', 'member@gmail.com', NULL, '$2y$10$DaOTtPnghDWnOPkGSRJ7P.blnUiEDOEC.hlEXAnHB3Wx9jxHjBTHC', 'member', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13', '179', '5', NULL, NULL, 'MyBatik', 1, 1, NULL, NULL, '2023-07-30 23:18:37', NULL),
(3, 'pelanggan', 'pelanggan@gmail.com', NULL, '$2y$10$WjavdV8Eoprk40JSKMhgY.2jXTnEmBOKwpv/r.AGpbBAwSFWcWl2y', 'pelanggan', NULL, NULL, NULL, NULL, 'Jl. Amandit', 'Rt.01 No.121 Desa Baroqah', 'Indonesia', '1', '4', '1', NULL, NULL, '', 0, 0, NULL, NULL, NULL, NULL),
(4, 'myname', 'myname@gmail.com', NULL, '$2y$10$tWvGy.JOJJ898KqQ9vPc9OUiUdCxYVcWX57umua9AOCNvhVSRPlqq', 'member', NULL, NULL, NULL, NULL, 'Jalan Amandit', 'Rt.01 no.121 desa baroqah', 'indonesia', '1', '4', '4', '72211', '081290909090', 'mystore', 1, 1, NULL, '2023-07-29 02:55:15', '2023-07-29 02:55:46', NULL),
(5, 'user', 'user@gmail.com', NULL, '$2y$10$jcuW7aO1.5lY1pVbleKRtuJ0KxAMJwXJ1uzuAa4d.9O8.VmHe4BD.', 'pelanggan', NULL, NULL, NULL, NULL, 'Jalan Amandit', 'Rt.01 no.121 desa baroqah', 'indonesia', '13', '6', '179', '72211', '081250908321', '', 0, 0, NULL, '2023-07-29 02:59:52', '2023-07-29 03:01:07', NULL),
(6, 'Mula', 'mula@gmail.com', NULL, '$2y$10$pqXqPI7a6NnEVCHZRPaaq.6kW6oW2BBbFhvf1hazOo/.PdiBVUDGK', 'member', NULL, NULL, NULL, NULL, 'Jalan Amandit', 'Rt.01 no.121 desa baroqah', 'indonesia', '13', '7', '179', '72212', '0890909090', 'Store Aksesoris', 4, 1, NULL, '2023-07-31 04:42:54', '2023-07-31 04:43:23', NULL),
(7, 'Store1', 'store@gmail.com', NULL, '$2y$10$jhNTSryC1Hu6nKK79GtWz.BzLLITeXNgtgKBNO0L4rMwdXOrDOaB2', 'member', NULL, NULL, NULL, NULL, 'Jalan Amandit', 'Rt.01 no.121 desa baroqah', 'indonesia', '13', '5', '179', '72212', '0808087766', 'Dress Store', 1, 1, NULL, '2023-07-31 17:27:25', '2023-07-31 17:27:56', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatans_provinsi_id_foreign` (`provinsi_id`),
  ADD KEY `kecamatans_kota_id_foreign` (`kota_id`);

--
-- Indeks untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kupons`
--
ALTER TABLE `kupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kupons_code_unique` (`code`);

--
-- Indeks untuk tabel `kurirs`
--
ALTER TABLE `kurirs`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_kategori_id_foreign` (`kategori_id`),
  ADD KEY `produks_subkategori_id_foreign` (`subkategori_id`),
  ADD KEY `produks_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkategoris`
--
ALTER TABLE `subkategoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subkategoris_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT untuk tabel `kupons`
--
ALTER TABLE `kupons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kurirs`
--
ALTER TABLE `kurirs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `subkategoris`
--
ALTER TABLE `subkategoris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD CONSTRAINT `kecamatans_kota_id_foreign` FOREIGN KEY (`kota_id`) REFERENCES `kotas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kecamatans_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produks_subkategori_id_foreign` FOREIGN KEY (`subkategori_id`) REFERENCES `subkategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subkategoris`
--
ALTER TABLE `subkategoris`
  ADD CONSTRAINT `subkategoris_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
