-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2025 at 04:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phim_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Phim hay'),
(2, 'Phim Lẻ'),
(3, 'Anime'),
(8, 'Phim sắp chiếu'),
(9, 'Phim chiếu rạp'),
(11, 'Phim đề cử'),
(12, 'Phim hành động'),
(13, 'Phim đang chiếu'),
(14, 'phim b'),
(16, 'phimmm');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(4, 'Hàn Quốc'),
(2, 'Mỹ'),
(3, 'Nhật Bản'),
(5, 'Trung Quốc'),
(1, 'Việt Nam');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `episode_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `episode_number` int(11) NOT NULL,
  `episode_name` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`episode_id`, `film_id`, `episode_number`, `episode_name`, `video_url`, `created_at`) VALUES
(1, 1, 1, 'Tập 1: Luffy xuất hiện', 'https://example.com/onepiece-ep1.mp4', '2024-11-23 13:09:01'),
(2, 1, 2, 'Tập 2: Zoro tham gia', 'https://example.com/onepiece-ep2.mp4', '2024-11-23 13:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `favorite_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`favorite_id`, `user_id`, `film_id`, `added_at`) VALUES
(1, 2, 1, '2024-11-23 13:15:39'),
(2, 2, 2, '2024-11-23 13:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `film_id` int(11) NOT NULL,
  `film_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `release_year` int(11) DEFAULT NULL,
  `language` enum('VN','EN') DEFAULT 'VN',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `country_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`film_id`, `film_name`, `description`, `image`, `release_year`, `language`, `created_at`, `country_id`, `category_id`) VALUES
(1, 'One Piece', 'Câu chuyện về cuộc hành trình tìm kho báu của Luffy.', '1732610227_onepice.jpeg', 1999, 'VN', '2024-11-23 13:09:01', 3, 3),
(2, 'Avengers: Endgame', 'Trận chiến cuối cùng chống lại Thanos.', '2.1.jpg', 2019, 'EN', '2024-11-23 13:09:01', 2, 2),
(3, 'Breaking Bad', 'Hành trình của một giáo viên hóa học trở thành trùm ma túy.', '1.jpg', 2008, 'EN', '2024-11-23 13:09:01', 2, 3),
(4, 'Thám Tử Lừng Danh Conan', 'Conan', '1732594388_conan27.jpg', 2024, 'VN', '2024-11-25 16:38:07', 3, 3),
(5, '7 Năm Chưa Cưới Sẽ Chia Tay', '7 Năm Chưa Cưới Sẽ Chia Tay', '1732594400_7-nam-chua-cuoi.jpg', 2023, 'VN', '2024-11-26 04:10:53', 1, NULL),
(6, 'Đại Mộng Quy Ly', 'Cổ Trang', '1732595050_dai-mong-quy-ly.jpg', 2023, 'EN', '2024-11-26 04:19:03', 5, NULL),
(7, 'Tham Vọng Giàu Sang', 'tham vọng giàu sang', '1732610474_1732597152_tham-vong-giau-sang.jpeg', 2024, 'EN', '2024-11-26 04:53:15', 1, NULL),
(45, 'Hạnh phúc bị đánh cắp', 'Hạnh Phúc Bị Đánh Cắp - một bộ phim đầy kịch tính với câu chuyện xoay quanh cuộc sống của hai người phụ nữ trong gia tộc họ Đỗ, nơi nghề thêu tay truyền thống được truyền đời sau đời. Thúy Hạnh, con dâu trưởng hiền lành và thông minh, bị vướng vào những âm mưu hãm hại từ Ánh Dương, con dâu thứ tài năng nhưng đầy mưu mô và tham vọng. Với sự chỉ đạo của đạo diễn Nhâm Minh Hiền và sự góp mặt của các diễn viên tài năng như Lan Hương, Hồng Ánh và Ngọc Lan, bộ phim hứa hẹn mang lại cho khán giả những cung bậc cảm xúc không thể quên.', '1732609230_1732596706_1732595258_hanh-phuc-bi-danh-cap.jpg', 2024, 'VN', '2024-11-26 08:20:30', 1, NULL),
(46, 'Mai', 'Mai - một phụ nữ tưởng như đã không còn thiết tha yêu đương và mưu cầu hạnh phúc cho riêng mình, lại bỗng khao khát được sống khác đi khi Dương tiến vào cuộc đời cô. Họ cho nhau những khoảnh khắc tự do, say đắm và tràn đầy tiếng cười. Nhưng liệu cả hai có giữ chặt niềm hạnh phúc đó khi miệng đời lắm cay nghiệt, bất công?', '1732609430_Mai.jpg', 2023, 'VN', '2024-11-26 08:23:50', 1, 2),
(53, 'Phim 3', 'cccccccccccccccc', '1736773980_anime3.jpg', 2022, 'VN', '2025-01-13 13:13:00', 5, 1),
(54, 'Phim 4', 'wwwwwwwwwwww', '1736943161_anime4.jpg', 2022, 'VN', '2025-01-15 12:12:41', 3, NULL),
(55, 'phim 5', 'eeeeeeeeeeee', '1736943497_onepice.jpeg', 2011, 'EN', '2025-01-15 12:18:17', 4, NULL),
(56, 'phim 7', 'rrrrrrrrrrrrr', '1736943549_conan27.jpg', 2024, 'VN', '2025-01-15 12:19:09', 4, NULL),
(57, 'aaaaaaaaaaaa', 'aaaaaaaaaa', '1736943721_anime1.jpg', 2022, 'VN', '2025-01-15 12:22:01', 4, NULL),
(58, 'aaaaaaaaaaaaaa', 'wwwwwwwwwwww', '1736943743_anime3.jpg', 2022, 'EN', '2025-01-15 12:22:23', 4, NULL),
(59, 'mmmmmmmmmmm', 'bbbbbbbbbb', '1736943776_onepice.jpeg', 2023, 'VN', '2025-01-15 12:22:56', 2, NULL),
(60, 'bbbbbbbbbb', 'aaaaaaaaaaa', '1736943820_onepice.jpeg', 2026, 'VN', '2025-01-15 12:23:40', 3, NULL),
(61, 'kkkkkkkkkkk', 'aaaaaaaaaa', '1736943844_anime2.jpg', 2018, 'EN', '2025-01-15 12:24:04', 1, NULL),
(62, 'Tết', 'aaaaaaaaaaaaa', '1736953570_7-nam-chua-cuoi.jpg', 2023, 'VN', '2025-01-15 15:06:10', 1, 1),
(63, 'yêu không kiểm soát', 'vvvvvvvvv', '1736954772_yeu-khong-kiem-xot.jpg', 2022, 'EN', '2025-01-15 15:26:12', 5, 1),
(64, 'nnnnnnnnnn', 'jjjjjjjjjjj', '1737381470_Reset.png', 2024, 'VN', '2025-01-20 13:57:50', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `film_genres`
--

CREATE TABLE `film_genres` (
  `film_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `film_genres`
--

INSERT INTO `film_genres` (`film_id`, `genre_id`) VALUES
(1, 2),
(1, 5),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(7, 'Cổ Trang'),
(1, 'Hành Động'),
(5, 'Hoạt Hình'),
(4, 'Kinh Dị'),
(2, 'Phiêu Lưu'),
(6, 'Tâm Lý'),
(8, 'Thần thoại'),
(3, 'Tình Cảm');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `rating` tinyint(4) NOT NULL CHECK (`rating` >= 1 and `rating` <= 5),
  `review` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `user_id`, `film_id`, `rating`, `review`, `created_at`) VALUES
(1, 2, 1, 5, 'Một bộ phim tuyệt vời với cốt truyện hấp dẫn!', '2024-11-23 13:15:39'),
(2, 2, 2, 4, 'Hiệu ứng hình ảnh đỉnh cao, nhưng hơi dài.', '2024-11-23 13:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Admin', 'admin@example.com', '0192023a7bbd73250516f069df18b500', 'admin', '2024-11-23 13:09:01'),
(2, 'User1', 'user1@example.com', '482c811da5d5b4bc6d497ffa98491e38', 'user', '2024-11-23 13:09:01'),
(3, 'MT', 'mt@gmail.com', '934b535800b1cba8f96a5d72f72f1611', 'user', '2025-02-10 12:28:36');

-- --------------------------------------------------------

--
-- Table structure for table `watch_history`
--

CREATE TABLE `watch_history` (
  `history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `episode_id` int(11) DEFAULT NULL,
  `watched_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `watch_history`
--

INSERT INTO `watch_history` (`history_id`, `user_id`, `film_id`, `episode_id`, `watched_at`) VALUES
(1, 2, 1, 1, '2024-11-23 13:09:01'),
(2, 2, 2, NULL, '2024-11-23 13:09:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category` (`category_id`) USING BTREE;

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `country_name` (`country_name`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`episode_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `film_genres`
--
ALTER TABLE `film_genres`
  ADD PRIMARY KEY (`film_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`),
  ADD UNIQUE KEY `genre_name` (`genre_name`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `watch_history`
--
ALTER TABLE `watch_history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `episode_id` (`episode_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `episode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `watch_history`
--
ALTER TABLE `watch_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE;

--
-- Constraints for table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `films_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL;

--
-- Constraints for table `film_genres`
--
ALTER TABLE `film_genres`
  ADD CONSTRAINT `film_genres_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `film_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE;

--
-- Constraints for table `watch_history`
--
ALTER TABLE `watch_history`
  ADD CONSTRAINT `watch_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watch_history_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watch_history_ibfk_3` FOREIGN KEY (`episode_id`) REFERENCES `episodes` (`episode_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
