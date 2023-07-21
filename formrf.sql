-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table formrf.bank
CREATE TABLE IF NOT EXISTS `bank` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.bank: ~18 rows (lebih kurang)
INSERT INTO `bank` (`id`, `nama_bank`, `created_at`, `updated_at`) VALUES
	(1, 'BANK RAKYAT INDONESIA', NULL, NULL),
	(2, 'BANK MANDIRI', NULL, NULL),
	(3, 'BANK NEGARA INDONESIA', NULL, NULL),
	(4, 'BANK TABUNGAN NEGARA', NULL, NULL),
	(5, 'BANK DANAMON INDONESIA', NULL, NULL),
	(6, 'BANK PERMATA', NULL, NULL),
	(7, 'BANK CENTRAL ASIA', NULL, NULL),
	(8, 'BANK MAYBANK INDONESIA', NULL, NULL),
	(9, 'BANK CIMB NIAGA', NULL, NULL),
	(10, 'BANK UOB INDONESIA', NULL, NULL),
	(11, 'BANK OCBC NISP', NULL, NULL),
	(12, 'BANK MAYAPADA INTERNATIONAL', NULL, NULL),
	(13, 'BANK MEGA', NULL, NULL),
	(14, 'BANK KEB HANA INDONESIA', NULL, NULL),
	(15, 'BANK JAGO', NULL, NULL),
	(16, 'BANK SYARIAH INDONESIA', NULL, NULL),
	(17, 'BANK BCA SYARIAH', NULL, NULL),
	(18, 'BANK MEGA SYARIAH', NULL, NULL);

-- membuang struktur untuk table formrf.departement
CREATE TABLE IF NOT EXISTS `departement` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_departement` enum('TDP-Marketing','TDP-Admin','TDP-Operation','TDP-General Affair','TDP-Finance','TDP-LSP','TDP-HR','TDP-Business Development','MK3-Admin','MK3-Operation','MK3-General','TTI-Admin','TTI-Marketing','TTI-Project','TTI-General','TKKI-Admin','TKKI-Marketing','TKKI-General','TKKI-Project','TIDP-Project','TIDP-General','TK2I-Project','TK2I-General','TEST') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.departement: ~23 rows (lebih kurang)
INSERT INTO `departement` (`id`, `nama_departement`, `created_at`, `updated_at`) VALUES
	(1, 'TDP-Marketing', NULL, NULL),
	(2, 'TDP-Admin', NULL, NULL),
	(3, 'TDP-Operation', NULL, NULL),
	(4, 'TDP-General Affair', NULL, NULL),
	(5, 'TDP-Finance', NULL, NULL),
	(6, 'TDP-LSP', NULL, NULL),
	(7, 'TDP-HR', NULL, NULL),
	(8, 'TDP-Business Development', NULL, NULL),
	(9, 'MK3-Admin', NULL, NULL),
	(10, 'MK3-Operation', NULL, NULL),
	(11, 'MK3-General', NULL, NULL),
	(12, 'TTI-Admin', NULL, NULL),
	(13, 'TTI-Marketing', NULL, NULL),
	(14, 'TTI-Project', NULL, NULL),
	(15, 'TTI-General', NULL, NULL),
	(16, 'TKKI-Admin', NULL, NULL),
	(17, 'TKKI-Marketing', NULL, NULL),
	(18, 'TKKI-General', NULL, NULL),
	(19, 'TKKI-Project', NULL, NULL),
	(20, 'TIDP-Project', NULL, NULL),
	(21, 'TIDP-General', NULL, NULL),
	(22, 'TK2I-Project', NULL, NULL),
	(23, 'TK2I-General', NULL, NULL);

-- membuang struktur untuk table formrf.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.failed_jobs: ~0 rows (lebih kurang)

-- membuang struktur untuk table formrf.form
CREATE TABLE IF NOT EXISTS `form` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `from_id` bigint unsigned DEFAULT NULL,
  `departement_id` bigint unsigned DEFAULT NULL,
  `norek_id` bigint unsigned DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketegori_pengajuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kebutuhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checked_by` bigint unsigned DEFAULT NULL,
  `checked_date` date DEFAULT NULL,
  `approve_by` bigint unsigned DEFAULT NULL,
  `approve_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `form_from_id_foreign` (`from_id`),
  KEY `form_departement_id_foreign` (`departement_id`),
  KEY `form_norek_id_foreign` (`norek_id`),
  KEY `form_checked_by_foreign` (`checked_by`),
  KEY `form_approve_by_foreign` (`approve_by`),
  CONSTRAINT `form_approve_by_foreign` FOREIGN KEY (`approve_by`) REFERENCES `users` (`id`),
  CONSTRAINT `form_checked_by_foreign` FOREIGN KEY (`checked_by`) REFERENCES `users` (`id`),
  CONSTRAINT `form_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departement` (`id`),
  CONSTRAINT `form_from_id_foreign` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`),
  CONSTRAINT `form_norek_id_foreign` FOREIGN KEY (`norek_id`) REFERENCES `norek` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.form: ~1 rows (lebih kurang)
INSERT INTO `form` (`id`, `from_id`, `departement_id`, `norek_id`, `to`, `ketegori_pengajuan`, `tanggal_kebutuhan`, `payment`, `description`, `description2`, `description3`, `description4`, `description5`, `description6`, `description7`, `description8`, `unit`, `unit2`, `unit3`, `unit4`, `unit5`, `unit6`, `unit7`, `unit8`, `qty`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `price`, `price2`, `price3`, `price4`, `price5`, `price6`, `price7`, `price8`, `total`, `total2`, `total3`, `total4`, `total5`, `total6`, `total7`, `total8`, `jumlah_total`, `status`, `checked_by`, `checked_date`, `approve_by`, `approve_date`, `created_at`, `updated_at`) VALUES
	(1, 1, 14, NULL, 'SPV', 'Advance', '2023-07-22', 'Cash', 'Meja', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '240000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '240000', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- membuang struktur untuk table formrf.jabatan
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` enum('General','Cashier','Supervisor','Finance','Manager','Direktor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.jabatan: ~6 rows (lebih kurang)
INSERT INTO `jabatan` (`id`, `jabatan`, `created_at`, `updated_at`) VALUES
	(1, 'General', NULL, NULL),
	(2, 'Supervisor', NULL, NULL),
	(3, 'Manager', NULL, NULL),
	(4, 'Finance', NULL, NULL),
	(5, 'Cashier', NULL, NULL),
	(6, 'Direktor', NULL, NULL);

-- membuang struktur untuk table formrf.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.migrations: ~9 rows (lebih kurang)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_resets_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2023_07_03_031257_create_norf_table', 1),
	(4, '2023_07_04_094419_create_jabatan_table', 1),
	(5, '2023_07_05_044030_create_departement_table', 1),
	(6, '2023_07_06_064426_create_bank_table', 1),
	(7, '2023_07_06_075032_create_norek_table', 1),
	(8, '2023_07_12_074612_create_users_table', 1),
	(9, '2023_07_12_074812_create_form_table', 1);

-- membuang struktur untuk table formrf.norek
CREATE TABLE IF NOT EXISTS `norek` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `bank_id` bigint unsigned DEFAULT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `norek_bank_id_foreign` (`bank_id`),
  CONSTRAINT `norek_bank_id_foreign` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.norek: ~8 rows (lebih kurang)
INSERT INTO `norek` (`id`, `bank_id`, `no_rekening`, `nama_penerima`, `created_at`, `updated_at`) VALUES
	(1, 1, '0949902000013', 'Muhamad Kosasih', NULL, NULL),
	(2, 2, '020444233411', 'Bayu', NULL, NULL),
	(3, 3, '00023233202', 'Fadillah', NULL, NULL),
	(4, 4, '0909420223211', 'Juki', NULL, NULL),
	(5, 5, '023123212122', 'Yahya', NULL, NULL),
	(6, 6, '022232122221', 'John Doe', NULL, NULL),
	(7, 7, '02111100000', 'Kimid', NULL, NULL),
	(8, 4, '01001010100000', 'Max', NULL, NULL);

-- membuang struktur untuk table formrf.norf
CREATE TABLE IF NOT EXISTS `norf` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.norf: ~0 rows (lebih kurang)

-- membuang struktur untuk table formrf.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.password_resets: ~0 rows (lebih kurang)

-- membuang struktur untuk table formrf.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_id` bigint unsigned NOT NULL,
  `departement_id` bigint unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_jabatan_id_foreign` (`jabatan_id`),
  KEY `users_departement_id_foreign` (`departement_id`),
  CONSTRAINT `users_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departement` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel formrf.users: ~8 rows (lebih kurang)
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `no_hp`, `jabatan_id`, `departement_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Muhamad Kosasih', 'muhamadkosasih', 'muhamadkosasih@gmail.com', NULL, '$2y$10$LJMX5XT0nILAyAhCMUyseeQf2tAdKhlgb6.KHPmBszeTM1ImBXUBO', '08558955539', 1, 14, NULL, NULL, NULL),
	(2, 'Fadillah', 'fadillah', 'fadillah@gmail.com', NULL, '$2y$10$NrDoGYGu8XxtsyM1b4c/H..WJeG0ZV6hpt1cjq9ebySOZZNV.iJfG', '08558955100', 1, 13, NULL, NULL, NULL),
	(3, 'Bayu', 'bayu', 'bayu@gmail.com', NULL, '$2y$10$zb6OZuIXNMrmBgQII64qN.f/jqbJL78Vmk2E1zdK1vvKxO8UYBpP6', '08558955211', 1, 14, NULL, NULL, NULL),
	(4, 'SPV', 'spv', 'spv@gmail.com', NULL, '$2y$10$Dskeah2t6tk1vc24SQMoWOCGX.ajzePk6scXSIc8P.b6pjw9/8Jqi', '08558955239', 2, 1, NULL, NULL, NULL),
	(5, 'Manajer', 'manajer', 'manajer@gmail.com', NULL, '$2y$10$rWM0LAqSTV59vdOG00O3.ulHs.1HKCm172gSnKn9SjYj1m8CmQizS', '08558955239', 3, 1, NULL, NULL, NULL),
	(6, 'Finance', 'finance', 'finance@gmail.com', NULL, '$2y$10$BpFnj2wxSNx3yKsw18cCR.2A26J9cxZhTIq2NkmgLvfS5u3eZw8GK', '08558955200', 4, 1, NULL, NULL, NULL),
	(7, 'Cashier', 'cashier', 'cashier@gmail.com', NULL, '$2y$10$LRuod3LBmIr5lg5GkN3ut.GzCpexAHitlO9JXIQ760OYoMNSrZqQS', '08558955200', 5, 12, NULL, NULL, NULL),
	(8, 'Direktur', 'direktur', 'direktur@gmail.com', NULL, '$2y$10$UTOsVDV4VfUXj6KIrRcJ7uzqZRBLHSYQovDVfgTC3VJ6ZokmQD0e.', '085511110', 6, 12, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
