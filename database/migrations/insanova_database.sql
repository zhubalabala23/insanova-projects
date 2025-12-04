-- ============================================================
-- INSANOVA Database Structure
-- ============================================================

-- Create Database
CREATE DATABASE IF NOT EXISTS insanova_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE insanova_db;

-- ============================================================
-- Table: users
-- ============================================================
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','judge') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_nip_unique` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Table: categories
-- ============================================================
CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Table: innovations
-- ============================================================
CREATE TABLE `innovations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `problem_statement` text DEFAULT NULL,
  `solution` text DEFAULT NULL,
  `impact` text DEFAULT NULL,
  `implementation_plan` text DEFAULT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `team_members` json DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `presentation_file` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `attachments` json DEFAULT NULL,
  `status` enum('draft','submitted','review','accepted','rejected','winner') NOT NULL DEFAULT 'draft',
  `total_score` int(11) NOT NULL DEFAULT 0,
  `admin_notes` text DEFAULT NULL,
  `year` int(11) NOT NULL DEFAULT 2025,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `like_count` int(11) NOT NULL DEFAULT 0,
  `submitted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `innovations_slug_unique` (`slug`),
  KEY `innovations_user_id_foreign` (`user_id`),
  KEY `innovations_category_id_foreign` (`category_id`),
  CONSTRAINT `innovations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `innovations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Table: innovation_scores
-- ============================================================
CREATE TABLE `innovation_scores` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `innovation_id` bigint(20) UNSIGNED NOT NULL,
  `judge_id` bigint(20) UNSIGNED NOT NULL,
  `originality_score` int(11) NOT NULL DEFAULT 0,
  `innovation_score` int(11) NOT NULL DEFAULT 0,
  `feasibility_score` int(11) NOT NULL DEFAULT 0,
  `impact_score` int(11) NOT NULL DEFAULT 0,
  `presentation_score` int(11) NOT NULL DEFAULT 0,
  `total_score` int(11) NOT NULL DEFAULT 0,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `innovation_scores_innovation_judge_unique` (`innovation_id`,`judge_id`),
  KEY `innovation_scores_judge_id_foreign` (`judge_id`),
  CONSTRAINT `innovation_scores_innovation_id_foreign` FOREIGN KEY (`innovation_id`) REFERENCES `innovations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `innovation_scores_judge_id_foreign` FOREIGN KEY (`judge_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Table: winners
-- ============================================================
CREATE TABLE `winners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `innovation_id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `rank` enum('1st','2nd','3rd','favorite','special') NOT NULL,
  `title` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `prize` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `winners_innovation_id_foreign` (`innovation_id`),
  CONSTRAINT `winners_innovation_id_foreign` FOREIGN KEY (`innovation_id`) REFERENCES `innovations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Table: comments
-- ============================================================
CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `innovation_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_innovation_id_foreign` (`innovation_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  KEY `comments_parent_id_foreign` (`parent_id`),
  CONSTRAINT `comments_innovation_id_foreign` FOREIGN KEY (`innovation_id`) REFERENCES `innovations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Table: likes
-- ============================================================
CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `innovation_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `likes_innovation_user_unique` (`innovation_id`,`user_id`),
  KEY `likes_user_id_foreign` (`user_id`),
  CONSTRAINT `likes_innovation_id_foreign` FOREIGN KEY (`innovation_id`) REFERENCES `innovations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Table: notifications
-- ============================================================
CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `data` json DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_user_id_foreign` (`user_id`),
  CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Table: settings
-- ============================================================
CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `type` varchar(50) NOT NULL DEFAULT 'text',
  `group` varchar(50) NOT NULL DEFAULT 'general',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================================
-- Insert Default Data
-- ============================================================

-- Default Categories
INSERT INTO `categories` (`name`, `slug`, `description`, `icon`, `is_active`, `created_at`, `updated_at`) VALUES
('Teknologi Informasi', 'teknologi-informasi', 'Inovasi di bidang IT dan Digital', 'laptop', 1, NOW(), NOW()),
('Pelayanan Publik', 'pelayanan-publik', 'Peningkatan layanan kepada masyarakat', 'users', 1, NOW(), NOW()),
('Efisiensi Operasional', 'efisiensi-operasional', 'Optimasi proses bisnis dan operasional', 'trending-up', 1, NOW(), NOW()),
('Kesehatan & Keselamatan', 'kesehatan-keselamatan', 'Inovasi K3 dan kesehatan kerja', 'heart', 1, NOW(), NOW()),
('Lingkungan', 'lingkungan', 'Green innovation dan sustainability', 'leaf', 1, NOW(), NOW());

-- Default Admin User (password: admin123)
INSERT INTO `users` (`name`, `email`, `nip`, `password`, `role`, `created_at`, `updated_at`) VALUES
('Administrator', 'admin@insanova.id', '1234567890', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NOW(), NOW());

-- Default Settings
INSERT INTO `settings` (`key`, `value`, `type`, `group`, `description`, `created_at`, `updated_at`) VALUES
('site_name', 'INSANOVA', 'text', 'general', 'Nama website', NOW(), NOW()),
('site_description', 'Platform Inovasi BPJS Ketenagakerjaan', 'text', 'general', 'Deskripsi website', NOW(), NOW()),
('competition_year', '2025', 'number', 'competition', 'Tahun kompetisi aktif', NOW(), NOW()),
('submission_open', '1', 'boolean', 'competition', 'Status penerimaan inovasi', NOW(), NOW()),
('submission_deadline', '2025-12-31', 'text', 'competition', 'Deadline pengiriman inovasi', NOW(), NOW());