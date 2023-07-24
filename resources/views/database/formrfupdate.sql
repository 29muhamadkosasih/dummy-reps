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

-- membuang struktur untuk table laravel-roles-permissions-manager.bank
CREATE TABLE IF NOT EXISTS `bank` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.bank: ~18 rows (lebih kurang)
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

-- membuang struktur untuk table laravel-roles-permissions-manager.departement
CREATE TABLE IF NOT EXISTS `departement` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama_departement` enum('TDP-Marketing','TDP-Admin','TDP-Operation','TDP-General Affair','TDP-Finance','TDP-LSP','TDP-HR','TDP-Business Development','MK3-Admin','MK3-Operation','MK3-General','TTI-Admin','TTI-Marketing','TTI-Project','TTI-General','TKKI-Admin','TKKI-Marketing','TKKI-General','TKKI-Project','TIDP-Project','TIDP-General','TK2I-Project','TK2I-General') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.departement: ~23 rows (lebih kurang)
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

-- membuang struktur untuk table laravel-roles-permissions-manager.form
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.form: ~0 rows (lebih kurang)
INSERT INTO `form` (`id`, `from_id`, `departement_id`, `norek_id`, `to`, `ketegori_pengajuan`, `tanggal_kebutuhan`, `payment`, `description`, `description2`, `description3`, `description4`, `description5`, `description6`, `description7`, `description8`, `unit`, `unit2`, `unit3`, `unit4`, `unit5`, `unit6`, `unit7`, `unit8`, `qty`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `price`, `price2`, `price3`, `price4`, `price5`, `price6`, `price7`, `price8`, `total`, `total2`, `total3`, `total4`, `total5`, `total6`, `total7`, `total8`, `jumlah_total`, `status`, `checked_by`, `checked_date`, `approve_by`, `approve_date`, `created_at`, `updated_at`) VALUES
	(2, 1, 14, NULL, 'SPV', 'Advance', '2023-07-07', 'Cash', 'Laptop ROG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20000000', '0', '0', '0', '0', '0', '0', '0', '20000000', '2', 1, '2023-07-24', NULL, NULL, '2023-07-23 23:48:18', '2023-07-23 23:49:33'),
	(3, 1, 14, NULL, 'SPV', 'Advance', '2023-07-27', 'Cash', 'Laptop ROG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1200000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4800000', '0', '0', '0', '0', '0', '0', '0', '4800000', '4', 1, '2023-07-24', NULL, NULL, '2023-07-23 23:48:42', '2023-07-24 00:12:24'),
	(4, 4, 3, 2, 'SPV', 'Advance', '2023-07-29', 'Transfer', 'Laptop ROG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '200000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '400000', '0', '0', '0', '0', '0', '0', '0', '400000', '4', 1, '2023-07-24', NULL, NULL, '2023-07-24 01:47:06', '2023-07-24 04:46:44'),
	(5, 5, 3, 3, 'SPV', 'Advance', '2023-07-28', 'Transfer', 'Laptop ROG', 'Meja', NULL, NULL, NULL, NULL, NULL, NULL, 'Unit', 'Unit', NULL, NULL, NULL, NULL, NULL, NULL, '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, '1200000', '200000', NULL, NULL, NULL, NULL, NULL, NULL, '2400000', '400000', '0', '0', '0', '0', '0', '0', '2800000', '4', 1, '2023-07-24', NULL, NULL, '2023-07-24 04:23:22', '2023-07-24 04:47:39'),
	(6, 1, 14, NULL, 'SPV', 'Advance', '2023-07-25', 'Cash', 'Laptop ROG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1200000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1200000', '0', '0', '0', '0', '0', '0', '0', '1200000', '3', 1, '2023-07-24', NULL, NULL, '2023-07-24 07:17:54', '2023-07-24 07:19:29'),
	(7, 1, 14, NULL, 'SPV', 'Advance', '2023-07-29', 'Cash', 'Laptop ROG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2120000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4240000', '0', '0', '0', '0', '0', '0', '0', '4240000', '3', 1, '2023-07-24', NULL, NULL, '2023-07-24 07:18:18', '2023-07-24 07:19:36'),
	(8, 1, 14, NULL, 'SPV', 'Advance', '2023-07-20', 'Cash', 'Laptop ROG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Unit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4200000', '0', '0', '0', '0', '0', '0', '0', '4200000', NULL, NULL, NULL, NULL, NULL, '2023-07-24 07:29:02', '2023-07-24 07:29:02');

-- membuang struktur untuk table laravel-roles-permissions-manager.jabatan
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jabatan` enum('General','Cashier','Supervisor','Finance','Manager','Direktor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.jabatan: ~6 rows (lebih kurang)
INSERT INTO `jabatan` (`id`, `jabatan`, `created_at`, `updated_at`) VALUES
	(1, 'General', NULL, NULL),
	(2, 'Supervisor', NULL, NULL),
	(3, 'Manager', NULL, NULL),
	(4, 'Finance', NULL, NULL),
	(5, 'Cashier', NULL, NULL),
	(6, 'Direktor', NULL, NULL);

-- membuang struktur untuk table laravel-roles-permissions-manager.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.migrations: ~0 rows (lebih kurang)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_resets_table', 1),
	(2, '2020_12_17_055226_create_roles_table', 1),
	(3, '2020_12_17_055308_create_permissions_table', 1),
	(4, '2020_12_17_060416_create_role_permissions_pivot_table', 1),
	(5, '2023_07_04_094419_create_jabatan_table', 1),
	(6, '2023_07_05_044030_create_departement_table', 1),
	(7, '2023_07_06_064426_create_bank_table', 1),
	(8, '2023_07_06_075032_create_norek_table', 1),
	(9, '2023_07_20_022742_create_product_table', 1),
	(10, '2023_07_23_092357_create_users_table', 1),
	(11, '2023_07_23_093046_add_relationship_fields_to_users_table', 1),
	(12, '2023_07_23_093049_create_form_table', 1);

-- membuang struktur untuk table laravel-roles-permissions-manager.norek
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

-- Membuang data untuk tabel laravel-roles-permissions-manager.norek: ~8 rows (lebih kurang)
INSERT INTO `norek` (`id`, `bank_id`, `no_rekening`, `nama_penerima`, `created_at`, `updated_at`) VALUES
	(1, 1, '0949902000013', 'Muhamad Kosasih', NULL, NULL),
	(2, 2, '020444233411', 'Bayu', NULL, NULL),
	(3, 3, '00023233202', 'Fadillah', NULL, NULL),
	(4, 4, '0909420223211', 'Juki', NULL, NULL),
	(5, 5, '023123212122', 'Yahya', NULL, NULL),
	(6, 6, '022232122221', 'John Doe', NULL, NULL),
	(7, 7, '02111100000', 'Kimid', NULL, NULL),
	(8, 4, '01001010100000', 'Max', NULL, NULL);

-- membuang struktur untuk table laravel-roles-permissions-manager.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.password_resets: ~0 rows (lebih kurang)

-- membuang struktur untuk table laravel-roles-permissions-manager.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.permissions: ~49 rows (lebih kurang)
INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'dashboard.index', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(2, 'users.index', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(3, 'users.edit', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(4, 'users.delete', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(5, 'users.create', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(6, 'users.show', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(7, 'roles.index', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(8, 'roles.edit', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(9, 'roles.delete', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(10, 'roles.create', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(11, 'roles.show', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(12, 'permissions.index', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(13, 'permissions.edit', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(14, 'permissions.delete', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(15, 'permissions.create', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(16, 'layout.empty.index', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(17, 'form.index', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(18, 'form.edit', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(19, 'form.show', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(20, 'form.delete', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(21, 'form.print', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(22, 'bank.index', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(23, 'bank.edit', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(24, 'bank.show', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(25, 'bank.delete', '2023-07-23 04:14:41', '2023-07-23 04:14:41'),
	(26, 'norek.index', '2023-07-23 04:14:41', '2023-07-23 04:14:41'),
	(27, 'norek.edit', '2023-07-23 04:14:41', '2023-07-23 04:14:41'),
	(28, 'norek.show', '2023-07-23 04:14:41', '2023-07-23 04:14:41'),
	(29, 'norek.delete', '2023-07-23 04:14:41', '2023-07-23 04:14:41'),
	(30, 'form-checked.index', '2023-07-24 05:26:47', '2023-07-24 05:26:49'),
	(31, 'form-checked.edit', '2023-07-24 05:27:08', '2023-07-24 05:27:06'),
	(32, 'form-checked.show', '2023-07-24 05:27:20', '2023-07-24 05:27:21'),
	(33, 'form-checked.delete', '2023-07-24 05:27:30', '2023-07-24 05:27:32'),
	(34, 'form-checked.approve', '2023-07-24 05:27:51', '2023-07-24 05:27:49'),
	(35, 'form-checked.reject', '2023-07-24 05:28:01', '2023-07-24 05:28:02'),
	(36, 'form-approve.index', '2023-07-24 05:37:44', '2023-07-24 05:37:42'),
	(37, 'form-approve.edit', '2023-07-24 05:37:56', '2023-07-24 05:37:58'),
	(38, 'form-approve.show', '2023-07-24 05:38:00', '2023-07-24 05:37:59'),
	(39, 'form-approve.delete', '2023-07-24 05:38:13', '2023-07-24 05:38:14'),
	(40, 'form-approve.detail', '2023-07-24 05:38:24', '2023-07-24 05:38:25'),
	(41, 'form-list.index', '2023-07-24 07:36:00', '2023-07-24 07:36:02'),
	(42, 'profile.index', '2023-07-24 07:37:25', '2023-07-24 07:37:26'),
	(43, 'form.create', '2023-07-24 07:48:29', '2023-07-24 07:48:27'),
	(44, 'home.index', '2023-07-24 07:53:01', '2023-07-24 07:53:02'),
	(45, 'dashboard.index', '2023-07-24 08:07:27', '2023-07-24 08:07:28'),
	(46, 'dashboard.checked.index', '2023-07-24 08:07:30', '2023-07-24 08:07:30'),
	(47, 'dashboard.approve.index', '2023-07-24 08:07:51', '2023-07-24 08:07:52'),
	(48, 'dashboard.general.index', '2023-07-24 08:07:55', '2023-07-24 08:07:54'),
	(49, 'form.create', '2023-07-24 08:33:20', '2023-07-24 08:33:21');

-- membuang struktur untuk table laravel-roles-permissions-manager.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.product: ~0 rows (lebih kurang)

-- membuang struktur untuk table laravel-roles-permissions-manager.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.roles: ~2 rows (lebih kurang)
INSERT INTO `roles` (`id`, `title`, `short_code`, `created_at`, `updated_at`) VALUES
	(1, 'Superadmin', 'Superadmin', '2023-07-23 04:14:40', '2023-07-23 04:14:40'),
	(2, 'General', 'General', '2023-07-23 04:14:40', '2023-07-24 01:21:01'),
	(3, 'Checked', 'Checked', '2023-07-24 01:10:57', '2023-07-24 01:18:16'),
	(4, 'Approval', 'Approval', '2023-07-24 01:14:29', '2023-07-24 01:14:29'),
	(5, 'Admin', 'Admin', '2023-07-24 01:16:56', '2023-07-24 01:16:56');

-- membuang struktur untuk table laravel-roles-permissions-manager.role_permissions
CREATE TABLE IF NOT EXISTS `role_permissions` (
  `role_id` bigint unsigned NOT NULL,
  `permission_id` bigint unsigned NOT NULL,
  KEY `role_permissions_role_id_foreign` (`role_id`),
  KEY `role_permissions_permission_id_foreign` (`permission_id`),
  CONSTRAINT `role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.role_permissions: ~86 rows (lebih kurang)
INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(1, 5),
	(1, 6),
	(1, 7),
	(1, 8),
	(1, 9),
	(1, 10),
	(1, 11),
	(1, 12),
	(1, 13),
	(1, 14),
	(1, 15),
	(1, 16),
	(1, 17),
	(1, 18),
	(1, 19),
	(1, 20),
	(1, 21),
	(1, 22),
	(1, 23),
	(1, 24),
	(1, 25),
	(1, 26),
	(1, 27),
	(1, 28),
	(1, 29),
	(2, 1),
	(1, 30),
	(1, 31),
	(1, 32),
	(1, 33),
	(1, 34),
	(1, 35),
	(1, 36),
	(1, 37),
	(1, 38),
	(1, 39),
	(1, 40),
	(1, 36),
	(1, 41),
	(1, 42),
	(2, 17),
	(2, 18),
	(2, 19),
	(2, 20),
	(2, 43),
	(1, 44),
	(2, 44),
	(1, 45),
	(1, 46),
	(1, 47),
	(1, 48),
	(3, 30),
	(3, 31),
	(3, 32),
	(3, 33),
	(3, 34),
	(3, 35),
	(3, 44),
	(3, 46),
	(4, 36),
	(4, 37),
	(4, 38),
	(4, 39),
	(4, 40),
	(4, 42),
	(4, 44),
	(4, 47),
	(5, 2),
	(5, 3),
	(5, 4),
	(5, 5),
	(5, 6),
	(5, 41),
	(5, 42),
	(5, 44),
	(5, 48),
	(3, 22),
	(3, 26),
	(3, 42),
	(2, 22),
	(2, 49),
	(1, 43);

-- membuang struktur untuk table laravel-roles-permissions-manager.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint unsigned DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_id` bigint unsigned DEFAULT NULL,
  `departement_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_jabatan_id_foreign` (`jabatan_id`),
  KEY `users_departement_id_foreign` (`departement_id`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_departement_id_foreign` FOREIGN KEY (`departement_id`) REFERENCES `departement` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel laravel-roles-permissions-manager.users: ~2 rows (lebih kurang)
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role_id`, `no_hp`, `jabatan_id`, `departement_id`, `created_at`, `updated_at`, `remember_token`) VALUES
	(1, 'Superadmin', 'Superadmin', 'Superadmin@admin.com', NULL, '$2y$10$zWBnqVV13ocuZ3ilHjzogOqoRleMbkVgLcRLoUHy1iyiSCLffIiJy', 1, '08558955539', 1, 14, '2023-07-23 04:14:42', '2023-07-23 04:14:42', NULL),
	(2, 'User', 'User', ' user@user.com', '2023-07-24 11:20:34', '$2y$10$TH156kR/u1F6FmSirkTEI.e/r3b9aQMlRmFYDXo7U2XIgYRf3tIz.', 2, '08558955539', 1, 14, '2023-07-23 04:14:42', '2023-07-23 04:14:42', NULL),
	(3, 'Muhamad Kosasih', NULL, 'muhamadkosasih@gmail.com', NULL, '$2y$10$1MtsH72eXDEB6S5jk7afKeVRoEcRHtQKyE6pG1xmqxnEMmTlkgJIi', 3, NULL, 1, 4, '2023-07-24 01:23:59', '2023-07-24 01:29:57', NULL),
	(4, 'Bayu', NULL, 'bayu@gmail.com', NULL, '$2y$10$Y8.tFKykv0ZU7Bk0NmXO.uoxI90ymG2qTFk/AEaRuRPMz7IG5DdtO', 2, NULL, 4, 3, '2023-07-24 01:24:34', '2023-07-24 01:24:34', NULL),
	(5, 'Fadillah', NULL, 'fadillah@gmail.com', NULL, '$2y$10$02sS7Bb5.NlQ5gbQV2r7W.MPFRtYjmGya2DPhvvpDWyL.UUfxZ5ty', 2, NULL, 3, 3, '2023-07-24 01:25:17', '2023-07-24 01:25:17', NULL),
	(6, 'Juki', NULL, 'juki@gmail.com', NULL, '$2y$10$z7mD3J19UtAgAnHTrufL5OCcJmjtzongVgWuxuwY3MC0i3W9il2Ma', 3, NULL, 3, 3, '2023-07-24 01:26:00', '2023-07-24 01:26:00', NULL),
	(7, 'Approval', 'Approval', 'Approval@', NULL, '$2y$10$j0terk00RsZ.PVPgPX1FheKCTIfcHUpy8/V5KF5bRPDB81etZGiMm', 4, '08988999091', 4, 16, '2023-07-24 02:00:09', '2023-07-24 02:00:09', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
