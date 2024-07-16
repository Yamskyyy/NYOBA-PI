-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 12:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_mbis`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`, `qty`) VALUES
(1, 6, 14, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(2, 7, 15, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(3, 8, 16, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(4, 9, 17, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(5, 10, 18, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(6, 11, 19, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(7, 12, 20, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(8, 13, 21, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(9, 14, 22, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0),
(10, 15, 23, '2024-07-02 21:07:10', '2024-07-02 21:07:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transactions`
--

CREATE TABLE `detail_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_transactions`
--

INSERT INTO `detail_transactions` (`id`, `product_id`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-07-04 02:54:03', '2024-07-04 02:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_02_04_091031_create_product_categories_table', 1),
(7, '2024_03_25_104441_create_cache_table', 1),
(8, '2024_03_27_093754_create_configs_table', 1),
(9, '2024_04_03_095910_create_products_table', 1),
(10, '2024_04_03_192358_create_carts_table', 1),
(11, '2024_04_17_122715_create_sessions_table', 1),
(12, '2024_04_24_121611_add_qty_to_carts_table', 1),
(13, '2024_05_02_125450_create_transactions_table', 1),
(14, '2024_05_02_125503_create_detail_transactions_table', 1),
(15, '2024_05_02_130340_add_receipt_to_transactions_table', 1),
(16, '2024_05_06_121320_add_weight_to_products_table', 1),
(17, '2024_05_06_121841_add_shipping_cost_and_shipping_detail_to_transactions_table', 1),
(18, '2024_05_15_121923_add_role_to_users_table', 1),
(19, '2024_05_20_123725_add_receipt_number_to_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) NOT NULL DEFAULT 0,
  `slug` text NOT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `weight`, `slug`, `product_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Molestiae ea enim nulla.', 'Nam velit assumenda modi impedit qui cupiditate reiciendis asperiores. Officia delectus nihil libero. Consequatur velit vero non et aut quo a.', 'public/images/040724094414.jpg', 53219, 615, 'molestiae-ea-enim-nulla', 3, '2024-07-02 21:07:10', '2024-07-04 02:44:14'),
(2, 'Ab fuga qui sit sed.', 'Id in aut cum nisi a. Dolorem minus consequatur earum aliquid. Natus quisquam provident fugit est. Deserunt itaque qui et nisi nihil nihil neque. Reiciendis in hic quasi illo quisquam qui sunt temporibus. Ipsum officiis quis sequi nam.', 'https://via.placeholder.com/640x640.png/00eedd?text=sit', 33898, 687, 'ab-fuga-qui-sit-sed', 2, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(3, 'Error ipsum omnis ut.', 'Voluptas laboriosam iusto eos ratione quia consequatur. Porro corrupti voluptate voluptate quia enim.', 'https://via.placeholder.com/640x640.png/0022dd?text=fugiat', 68613, 766, 'error-ipsum-omnis-ut', 8, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(4, 'Rerum aut illum a.', 'Harum molestiae neque qui quia labore incidunt aliquam. Vero reprehenderit maiores commodi. Nihil dolorem aspernatur qui qui. Incidunt sint neque commodi doloribus iure rerum.', 'https://via.placeholder.com/640x640.png/003399?text=magnam', 62739, 213, 'rerum-aut-illum-a', 8, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(5, 'Totam ea voluptas et.', 'Qui earum architecto laudantium cupiditate sint dolore ea. Fugit explicabo distinctio nemo ut in. Pariatur ea molestiae officiis. Et id quos itaque illum ut ut.', 'https://via.placeholder.com/640x640.png/00ee88?text=voluptates', 46663, 895, 'totam-ea-voluptas-et', 8, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(6, 'Aut qui qui ut ut quia.', 'Aut excepturi veniam ratione est voluptas eaque. Officia corrupti odio quo quo vero. Iusto ab a et aliquam.', 'https://via.placeholder.com/640x640.png/00ff33?text=aspernatur', 88087, 892, 'aut-qui-qui-ut-ut-quia', 3, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(7, 'Qui repellendus quis ut.', 'Est dolore autem corrupti qui. Accusantium sit autem voluptas autem esse ex. Mollitia et iure voluptate repudiandae. Quibusdam quis numquam optio aut rem ut.', 'https://via.placeholder.com/640x640.png/006611?text=tempora', 98304, 895, 'qui-repellendus-quis-ut', 10, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(8, 'Nihil alias labore qui.', 'Fuga veritatis nostrum aut vel rem ut veniam cupiditate. Voluptatem dolores labore placeat. Distinctio ut pariatur eius inventore qui non. Qui recusandae recusandae quas doloribus.', 'https://via.placeholder.com/640x640.png/00bb22?text=inventore', 99685, 134, 'nihil-alias-labore-qui', 6, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(9, 'Cum laborum et quo sint.', 'Qui et vel nulla nemo asperiores natus neque. Adipisci corrupti mollitia reprehenderit temporibus assumenda eos. Ut sint in id animi ipsum consequatur. Non commodi nobis libero quibusdam incidunt voluptatibus temporibus ea.', 'https://via.placeholder.com/640x640.png/00ff55?text=porro', 70922, 393, 'cum-laborum-et-quo-sint', 4, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(10, 'Officiis eum quis natus.', 'Laboriosam recusandae repudiandae et nemo quia est consequatur. Ut porro aspernatur voluptates cumque excepturi dolores. Quis nobis exercitationem voluptate earum ipsa veniam nihil. Nostrum quis nesciunt et corrupti.', 'https://via.placeholder.com/640x640.png/006633?text=excepturi', 25584, 652, 'officiis-eum-quis-natus', 3, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(11, 'Rerum hic libero id.', 'Velit tempore molestias tempora eos rerum. Ratione ut velit nobis iure quia. Accusamus quo consequatur occaecati iusto illum ut magnam rerum.', 'https://via.placeholder.com/640x640.png/00bbee?text=ea', 92721, 313, 'rerum-hic-libero-id', 6, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(12, 'Quod ut maxime fugit.', 'Est omnis eos tempora id quas asperiores. Cum ea quam sint alias. Unde itaque et laborum eligendi.', 'https://via.placeholder.com/640x640.png/0066bb?text=eos', 57758, 378, 'quod-ut-maxime-fugit', 10, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(13, 'Non porro quasi et.', 'Quis iure delectus fuga aspernatur iure. Repellat eaque molestiae consequatur explicabo tenetur. Rem facere labore enim accusantium voluptatem ducimus laborum. Quam at ratione sunt pariatur qui non.', 'https://via.placeholder.com/640x640.png/00bb77?text=esse', 40296, 659, 'non-porro-quasi-et', 10, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(14, 'Qui a cum earum.', 'Maxime dolorum cumque repellendus nostrum. Ut corrupti ab recusandae iure. Tempora atque labore nulla aperiam eos quaerat. Aut cupiditate eaque rerum error natus. Natus quos quam deserunt quia odit dolorem illo qui. Iure harum veniam ut.', 'https://via.placeholder.com/640x640.png/00dd22?text=qui', 79880, 625, 'qui-a-cum-earum', 4, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(15, 'Esse culpa et sit nulla.', 'Et accusamus rerum cupiditate quam animi. Perspiciatis in qui autem aut asperiores est labore distinctio. Qui dolores molestiae sed illo qui.', 'https://via.placeholder.com/640x640.png/009966?text=qui', 36626, 781, 'esse-culpa-et-sit-nulla', 1, '2024-07-02 21:07:10', '2024-07-02 21:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Eveniet.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(2, 'Sit aut.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(3, 'Qui.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(4, 'Explicabo.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(5, 'Sunt sint.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(6, 'Dolorem.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(7, 'Ea.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(8, 'Incidunt.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(9, 'Est error.', '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(10, 'Suscipit.', '2024-07-02 21:07:09', '2024-07-02 21:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('M1BGB5tmMFSNsz0gnYrSTacrXqGJA6tpYircs9J1', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV2dsbzhTODdVSkVzMTZIRDE4aUIycjJkOGNKTnhQUHpoVnFzcWhiVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkLkFObWVkRDJ5RG9kL2xXcHZkWG1JT1pXVzNNRERsZE5RY2xlVjAuQlFzS3pueEtPWXFud0MiO30=', 1720087595);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `total_checkout` int(11) NOT NULL,
  `shipping_cost` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `shipping_detail` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `receipt` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `first_name`, `last_name`, `address`, `city`, `state`, `country`, `zip_code`, `email_address`, `phone_number`, `total_checkout`, `shipping_cost`, `status`, `shipping_detail`, `user_id`, `created_at`, `updated_at`, `receipt`) VALUES
(1, 'test', 'test', 'RT 1 RW 12', '256', '11', 'Indonesia', '65112', 'test@gmail.com', '08663743424', 106438, 40000, 'process', '', 3, '2024-07-04 02:54:03', '2024-07-04 03:00:19', 'public/images/040724100019.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'user',
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2022-12-31 17:00:00', '$2y$12$.ANmedD2yDod/lWpvdXmIOZWW3MDDldNQcleV0.BQsKznxKOYqnwC', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-31 17:00:00', '2022-12-31 17:00:00'),
(2, 'user', 'user@gmail.com', '2022-12-31 17:00:00', '$2y$10$JGfFTpQETD8Y5Zq2mmunQelZ8RzDQUw8sfFiv3bL5g4c6.Cnj9H2K$2y$10$eEsND9izb3wW3F2WnXIGkeN4h.Qb8kV7awbcw/nmOc5ZCVTSN92wK$2y$12$.ANmedD2yDod/lWpvdXmIOZWW3MDDldNQcleV0.BQsK...', 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-31 17:00:00', '2022-12-31 17:00:00'),
(3, 'test', 'test@gmail.com', NULL, '$2y$12$.ANmedD2yDod/lWpvdXmIOZWW3MDDldNQcleV0.BQsKznxKOYqnwC', 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-02 20:22:08', '2024-07-02 20:22:08'),
(4, 'Jaeden Lind DDS', 'dulce53@example.net', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'SzzVIb8XYE', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(5, 'Cleve Davis', 'darrin51@example.org', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'KuTe6mvOSD', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(6, 'Eino Miller', 'ngibson@example.net', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'mxwWrH269u', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(7, 'Greyson Doyle', 'nels.corwin@example.org', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'zF9lXGNoMZ', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(8, 'Jeremie Kertzmann', 'kelli.miller@example.org', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'dHXibKtcqt', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(9, 'Letha Emard', 'veda.mosciski@example.org', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'J62Ywlp063', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(10, 'Georgianna Gibson', 'vivianne.osinski@example.net', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'OO81emWGJk', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(11, 'Mrs. Georgiana Kub', 'danielle.rippin@example.org', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, '2lfl3nag9V', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(12, 'Ahmed Zieme', 'block.chyna@example.net', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'xPGrzifrgF', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(13, 'Tressa Rodriguez', 'brody58@example.net', '2024-07-02 21:07:09', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'djsMazukFp', NULL, NULL, '2024-07-02 21:07:09', '2024-07-02 21:07:09'),
(14, 'Dr. Humberto Hegmann PhD', 'hstrosin@example.net', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'ZdXsAP83C7', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(15, 'Janiya Labadie', 'ratke.alivia@example.org', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'qjbg5jlcNN', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(16, 'Prof. Saige Hyatt', 'mleannon@example.org', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, '0yIUGThc3Q', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(17, 'Isobel Muller', 'helmer.hudson@example.com', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'PxaIdzK4LL', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(18, 'Chadrick Waelchi', 'taya94@example.org', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'Pky3A1xxBj', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(19, 'Dr. Philip Schmidt', 'freda90@example.net', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'LJe7FYeSMu', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(20, 'Jadyn Prohaska', 'fisher.frank@example.org', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'FApUBAOBpg', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(21, 'Lance Herzog', 'russel.nedra@example.org', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'mjV3Haif5D', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(22, 'Sallie Schowalter', 'tyrel.volkman@example.org', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'vHTFRU4Ckk', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10'),
(23, 'Claudine Conn Sr.', 'michaela27@example.org', '2024-07-02 21:07:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', NULL, NULL, NULL, 'arqmjw3GwE', NULL, NULL, '2024-07-02 21:07:10', '2024-07-02 21:07:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_transactions_product_id_foreign` (`product_id`),
  ADD KEY `detail_transactions_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD CONSTRAINT `detail_transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `detail_transactions_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
