/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : tailwick_laravel

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 19/03/2024 03:34:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Bàn phím', 'ban-phim', NULL, NULL);
INSERT INTO `categories` VALUES (2, 'Laptop', 'laptop', NULL, NULL);
INSERT INTO `categories` VALUES (3, 'Case', 'case', NULL, NULL);

-- ----------------------------
-- Table structure for exportstorages
-- ----------------------------
DROP TABLE IF EXISTS `exportstorages`;
CREATE TABLE `exportstorages`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `date_import` datetime NOT NULL,
  `date_export` datetime NOT NULL,
  `product` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `user_import` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_export` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of exportstorages
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (6, '2020_05_21_100000_create_teams_table', 1);
INSERT INTO `migrations` VALUES (7, '2020_05_21_200000_create_team_user_table', 1);
INSERT INTO `migrations` VALUES (8, '2020_05_21_300000_create_team_invitations_table', 1);
INSERT INTO `migrations` VALUES (9, '2023_12_18_060842_create_sessions_table', 1);
INSERT INTO `migrations` VALUES (10, '2024_03_04_042700_create_products_table', 2);
INSERT INTO `migrations` VALUES (13, '2024_03_05_030100_create_categories_table', 4);
INSERT INTO `migrations` VALUES (15, '2024_03_05_032659_change_products_table', 5);
INSERT INTO `migrations` VALUES (16, '2024_03_05_042910_update_users_table', 6);
INSERT INTO `migrations` VALUES (17, '2024_03_07_022029_create_warehouses_table', 7);
INSERT INTO `migrations` VALUES (18, '2024_03_07_142135_create_posts_table', 8);
INSERT INTO `migrations` VALUES (19, '2024_03_09_072507_create_orders_table', 9);
INSERT INTO `migrations` VALUES (20, '2024_03_11_031122_create_permission_tables', 10);
INSERT INTO `migrations` VALUES (21, '2024_03_11_035418_create_roles_table', 11);
INSERT INTO `migrations` VALUES (22, '2024_03_11_070925_update_users_table', 12);
INSERT INTO `migrations` VALUES (23, '2024_03_12_022201_rename_table', 13);
INSERT INTO `migrations` VALUES (24, '2024_03_12_080142_add-data-storages-table', 14);
INSERT INTO `migrations` VALUES (25, '2024_03_12_080221_create-exportstorages-table', 14);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id` ASC, `model_type` ASC) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `order_date` datetime NOT NULL,
  `total_amount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `permissions_name_guard_name_unique`(`name` ASC, `guard_name` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of permissions
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (2, 'ththt', 'ththt', 'ththt', '2024-03-11 07:05:48', '2024-03-11 07:05:55');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Laptop', 'Laptop gaming dell', '1', '2100000', '/images/upload/product/moi-100-laptop-gaming-dell-g15-5520-core-i5-12500h-8gb-512gb-rtx-3050-15-6-fhd-120hz-4236-4.jpg', NULL, '2024-03-18 13:44:20', 'Laptop gaming dell', 'available');
INSERT INTO `products` VALUES (5, 'Laptop', 'Laptop gaming Alienware', '1', '3100000', '/images/upload/product/2068_m15r4_dark_2.jpg', NULL, '2024-03-18 13:45:14', '1', 'available');
INSERT INTO `products` VALUES (7, 'Laptop', 'Laptop gaming ROG', '1213121', '1200000', '/images/upload/product/37428_asus_rog_strix_g17_g713qm_k4113t_r7_5800h_197c27cd1bce4217baedb68f8353d1c5_master.png', '2024-03-05 02:27:36', '2024-03-18 13:42:18', 'ThuyVT', 'available');
INSERT INTO `products` VALUES (9, 'Laptop', 'Laptop Gaming Asus1', 'Laptop gamming', '799993', '/images/upload/product/tải xuống.jpg', '2024-03-05 09:12:54', '2024-03-18 13:41:08', 'Laptop Gaming Asus1', 'order');
INSERT INTO `products` VALUES (11, 'Bàn phím', 'Bàn phím Coolmaster', 'dsadsdsadasdad', '21000', '/images/upload/product/250_77505_ban_phim_co_gaming_co_day_newmen_gm328_purple_white_blue_switch.jpg', '2024-03-18 14:05:13', '2024-03-18 18:56:01', 'Bàn phím Coolmaster', 'available');
INSERT INTO `products` VALUES (12, 'Bàn phím', 'Bàn phím E-Dra', 'dasdsads', '120000', '/images/upload/product/456_1.jpg', '2024-03-18 14:06:32', '2024-03-18 14:06:32', 'E-dra', 'available');
INSERT INTO `products` VALUES (13, 'Bàn phím', 'Bàn phím Ekko', 'dads', '130000', '/images/upload/product/tải xuống.png', '2024-03-18 14:07:43', '2024-03-18 14:07:43', 'Ekko', 'available');
INSERT INTO `products` VALUES (14, 'Case', 'Case văn phòng', 'dsadadadasd', '1240000', '/images/upload/product/tải xuống (2).jpg', '2024-03-18 14:23:38', '2024-03-18 14:25:33', 'Case văn phòng', 'available');
INSERT INTO `products` VALUES (15, 'Case', 'Case gaming', 'dasdasdas', '1245612', '/images/upload/product/tải xuống (3).jpg', '2024-03-18 14:24:05', '2024-03-18 14:24:05', 'case2', 'available');
INSERT INTO `products` VALUES (16, 'Case', 'Case đồ họa', 'dasdas', '1512312', '/images/upload/product/case game.jpg', '2024-03-18 14:24:39', '2024-03-18 14:24:39', 'case3', 'available');
INSERT INTO `products` VALUES (17, 'Case', 'Case phổ thông', 'dasdasd', '132313', '/images/upload/product/10144_pc_intel_core_i7_12700f_rtx_3060_ram_16gb_mac1.jpg', '2024-03-18 14:25:15', '2024-03-18 14:25:15', 'fasdqwe', 'available');
INSERT INTO `products` VALUES (18, 'Laptop', 'Laptop acer', 'dasdsadasds', '12.00000', '/images/upload/product/250_76572_laptop_acer_aspire_5_a514_56p_55k5__nx_khrsv_003___1_.jpg', '2024-03-18 18:52:33', '2024-03-18 18:52:33', 'acer1', 'available');
INSERT INTO `products` VALUES (19, 'Laptop', 'Laptop envy', 'Laptop envy', '43200000', '/images/upload/product/250_69632_hacom_hp_envy_x360_6.png', '2024-03-18 18:53:30', '2024-03-18 18:53:30', 'envy-1', 'available');
INSERT INTO `products` VALUES (20, 'Bàn phím', 'Bàn phím cơ Acer', 'Bàn phím cơ Acer', '320000', '/images/upload/product/250_77465_ban_phim_gaming_asus_rog_azoth_nxsw_us_pbt_wht_trang___90mp031a_bkua11_1.jpg', '2024-03-18 18:54:54', '2024-03-18 18:54:54', 'acer-3', 'available');
INSERT INTO `products` VALUES (21, 'Bàn phím', 'Bàn phím fulhen', 'Bàn phím fulhen', '123667', '/images/upload/product/250_72336_ban_phim_co_khong_day_fuhlen_h75s_panda_csa_profile_yellow_pro_switch_1.jpg', '2024-03-18 18:57:03', '2024-03-18 18:57:03', 'fulhen', 'available');
INSERT INTO `products` VALUES (22, 'Bàn phím', 'Bàn phím cooler master', 'Bàn phím cooler master', '152333', '/images/upload/product/250_72344_ban_phim_co_co_day_fuhlen_ck87s_black_yellow_switch_led_rgb_hotswap_1.jpg', '2024-03-18 19:00:12', '2024-03-18 19:00:12', 'cl-2', 'available');

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id` ASC) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (2, 'Admin ', NULL, NULL);

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions`  (
  `id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NULL DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sessions_user_id_index`(`user_id` ASC) USING BTREE,
  INDEX `sessions_last_activity_index`(`last_activity` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO `sessions` VALUES ('QGlDcSoWwr5BgolhyPlmg0T3KLNDYTjMhOK9fZzX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaTRGSHU5S2RmT3Ayc250b200SEVBSkpxMVJINmpoYWhPVExWSzJhTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1710794017);
INSERT INTO `sessions` VALUES ('UTT0JhCk7PcAi9Y9sq4WhDP80UupHuTWvBiddJRC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZlA3Q0E3V0NDc2p4MW55czgzY25RVmlpeHNLT2tLenZ1bmQ3VWdaeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9kdWN0cy9hZGQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1710788437);

-- ----------------------------
-- Table structure for storages
-- ----------------------------
DROP TABLE IF EXISTS `storages`;
CREATE TABLE `storages`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of storages
-- ----------------------------
INSERT INTO `storages` VALUES (1, 'ThuyVT', 'Ha Noi', '2024-03-07 08:23:58', '2024-03-07 10:59:03', 0, 0);

-- ----------------------------
-- Table structure for team_invitations
-- ----------------------------
DROP TABLE IF EXISTS `team_invitations`;
CREATE TABLE `team_invitations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_id` bigint UNSIGNED NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `team_invitations_team_id_email_unique`(`team_id` ASC, `email` ASC) USING BTREE,
  CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team_invitations
-- ----------------------------

-- ----------------------------
-- Table structure for team_user
-- ----------------------------
DROP TABLE IF EXISTS `team_user`;
CREATE TABLE `team_user`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `team_user_team_id_user_id_unique`(`team_id` ASC, `user_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of team_user
-- ----------------------------

-- ----------------------------
-- Table structure for teams
-- ----------------------------
DROP TABLE IF EXISTS `teams`;
CREATE TABLE `teams`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `teams_user_id_index`(`user_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of teams
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `current_team_id` bigint UNSIGNED NULL DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `age` date NULL DEFAULT NULL,
  `sex` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Bartholome Schuppe', 'test@example.com', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'e7NwGYTAD7StF3bNyVXnBo9gGmZt8uvumuHEkwYAUsCCPdsmEHVgCcTLLTG3', NULL, NULL, '2024-03-04 07:30:58', '2024-03-13 04:25:18', '1230989876', '千代田区千代田', '2024-03-12', 'male', 'admin');
INSERT INTO `users` VALUES (2, 'Mrs. Ava Nolan', 'lonie52@example.org', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'ykJ6sSHWuT', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (3, 'Camron Jacobs', 'streich.mae@example.org', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'jMmkgQnMf5', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (4, 'Ms. Ethyl Jones II', 'albertha.bednar@example.com', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'KaIr1Df23B', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (5, 'Karli Auer', 'brenden84@example.org', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'lH4HXHAXJ0', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (6, 'Tyrel Dare', 'progahn@example.org', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'awQ3BHVGal', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (7, 'Prof. Adam Homenick', 'ephraim20@example.org', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'Zn7x7f7SsL', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (8, 'Wilfredo Jaskolski', 'gerlach.ansel@example.org', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'LXWIbGpatj', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (9, 'Imani Herman', 'zreichel@example.org', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '6BGI9dlCKn', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (10, 'Darwin Emmerich', 'imarks@example.com', '2024-03-04 07:30:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'XkiU9Pfvwj', NULL, NULL, '2024-03-04 07:30:58', '2024-03-04 07:30:58', NULL, NULL, NULL, NULL, '');
INSERT INTO `users` VALUES (21, 'ThuyVT', 'thuyvt@sudobo.com', NULL, '3487', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-05 07:42:47', '2024-03-05 09:50:50', '千代田区千代田', '千代田区千代田', '2024-03-04', 'male', '');
INSERT INTO `users` VALUES (22, 'ThuyVT', 'dfdft@sudobo.com', NULL, '3487', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-05 07:43:03', '2024-03-13 04:10:39', '千代田区千代田', '千代田区千代田', '2024-03-04', 'male', '');
INSERT INTO `users` VALUES (28, 'ThuyVT', 'thfdfdfdfduyvt@sudobo.com', NULL, '$2y$12$1Nu3RfOfF4oR3PsJMopIu.PYKv17yKioZb51rHMPTRTT3Q5xwJBV2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-07 10:49:29', '2024-03-07 10:49:29', '+11230989876', '千代田区千代田', '2024-03-06', 'male', '');
INSERT INTO `users` VALUES (29, 'User1', 'thuycccccvt@sudobo.com', NULL, '3487', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-07 10:51:19', '2024-03-11 07:32:27', '+11230989876', 'sdsdss', '2024-03-06', 'male', '');
INSERT INTO `users` VALUES (30, 'User1', 'sdssdsdsdssthuyvt@sudobo.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-13 04:28:30', '2024-03-13 04:28:30', '1230989876', '千代田区千代田', '2024-03-12', 'male', 'user');

SET FOREIGN_KEY_CHECKS = 1;
