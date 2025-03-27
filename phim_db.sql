-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 02, 2025 lúc 03:49 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12
=======
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2025 at 04:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
<<<<<<< HEAD
-- Cơ sở dữ liệu: `phim_db`
=======
-- Database: `phim_db`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_desc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_name`, `banner_desc`, `image`) VALUES
(17, 'Bạn Bạn Bè Bè', 'Xin Chào', '1740882137_lactroi.jpg'),
(19, 'Thế Giới Mới', 'Thế Giới Mới', '1740844984_thegioimoi.jpg'),
(20, 'Nhà Gia Tiên', 'Nhà Gia Tiên xoay quanh câu chuyện đa góc nhìn về các thế hệ khác nhau trong một gia đình, có hai nhân vật chính là Gia Minh (Huỳnh Lập) và Mỹ Tiên (Phương Mỹ Chi). Trở về căn nhà gia tiên để quay các video “triệu view” trên mạng xã hội, Mỹ Tiên - một nhà', '1740844950_nahgiatien.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
=======
-- Table structure for table `category`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `category`
=======
-- Dumping data for table `category`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
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
<<<<<<< HEAD
(14, 'Phim Old'),
(17, 'Phim Hot'),
(18, 'Phim New'),
(19, 'Phim Bộ'),
(20, 'phim Hài'),
(21, 'Phim Truyền Hình');
=======
(14, 'phim b'),
(16, 'phimmm');
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `countries`
=======
-- Table structure for table `countries`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(10, 'Anh'),
(2, 'Âu Mỹ'),
(11, 'Đức'),
(4, 'Hàn Quốc'),
(9, 'Hồng Kông'),
(8, 'Nga'),
(3, 'Nhật Bản'),
(7, 'Pháp'),
(6, 'Thái Lan'),
(12, 'Thụy Sĩ'),
=======
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(4, 'Hàn Quốc'),
(2, 'Mỹ'),
(3, 'Nhật Bản'),
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
(5, 'Trung Quốc'),
(1, 'Việt Nam');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `episodes`
=======
-- Table structure for table `episodes`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
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
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `episodes`
--

INSERT INTO `episodes` (`episode_id`, `film_id`, `episode_number`, `episode_name`, `video_url`, `created_at`) VALUES
(5, 2, 1, 'Tập 1', 'https://www.youtube.com/embed/p90V7QNJuX8?si=uZxYwsgMZoJ7uePr', '2025-02-17 14:48:51'),
(6, 2, 2, 'Tập 2 - Thám Tử Bị Teo Nhỏ - Conan Lồng Tiếng Mới Nhất', 'https://www.youtube.com/embed/9mbGOrXLMhE?si=btuw9f4RvWEF-K5h', '2025-02-17 15:00:52'),
(7, 2, 3, 'Tập 3 - Án Mạng Trong Phòng Kính Idol - Conan Lồng Tiếng Mới Nhất', 'https://www.youtube.com/embed/YdjnQJLiouE?si=UcNa3ZYZXfi-pkgd', '2025-02-18 14:12:03'),
(8, 3, 1, 'Tập 1- Ta Đây! Uzumaki Naruto - Trọn Bộ Naruto Lồng Tiếng', 'https://www.youtube.com/embed/-SBBef-OEiE?si=XNqxx6N3HgajVudA', '2025-02-18 14:12:54'),
(9, 3, 2, 'Tập 2 - Konohamaru Chính Là Ta Đây! - Trọn Bộ Naruto Lồng Tiếng', 'https://www.youtube.com/embed/NP_unUdyIpU?si=EzWfJuu5-GbYsSnF', '2025-02-18 14:13:46'),
(10, 3, 3, 'Tập 3 - Đối Thủ!? Sasuke Và Sakura - Trọn Bộ Naruto Lồng Tiếng', 'https://www.youtube.com/embed/Hiy2oGwNc1I?si=msCW8ZJCcyVQggZ4', '2025-02-18 14:14:06'),
(12, 4, 1, 'MÈO MA BÊ THA trailer', 'https://www.youtube.com/embed/-H6tRL4c4P8?si=u5_f-j0ddM_edf3d', '2025-02-18 14:14:50'),
(13, 5, 1, 'Tập 1', 'https://www.youtube.com/embed/LS_guOmDBNA?si=UlTYdrBqAL_D6bFe', '2025-02-18 14:15:16'),
(14, 5, 2, 'Tập 2', 'https://www.youtube.com/embed/gruBizm4FiQ?si=u4kOsTQP2fjjqw3g', '2025-02-24 15:52:35'),
(15, 5, 3, 'Tập 3', 'https://www.youtube.com/embed/BPmD-KU8hUk?si=FOmyfKQW0W7aVarV', '2025-02-25 12:58:55'),
(18, 45, 1, 'Tập 1', 'https://www.youtube.com/embed/AlcU5hCzqn8?si=t_Lqdj6ZbkhOcx8V', '2025-03-01 14:11:07'),
(19, 45, 2, 'Tập 2', 'https://www.youtube.com/embed/RflCF2QMbO0?si=ZygMg3nqRwkmBuhI', '2025-03-01 14:11:44'),
(20, 6, 1, 'Tập 1', 'https://www.youtube.com/embed/CJCi8LWrK64?si=GDuf-QynUQM5j71g', '2025-03-01 14:14:41'),
(21, 6, 2, 'Tập 2', 'https://www.youtube.com/embed/dKeBh6a_2CE?si=BoGvVtrBq9QTu3b6', '2025-03-01 14:15:15'),
(22, 46, 1, 'Tập 1', 'https://www.youtube.com/embed/Yz96EBNwMGw?si=kXcbiwjMbpsgZ_az', '2025-03-01 14:16:16'),
(23, 68, 1, 'Tập 1', 'https://www.youtube.com/embed/QJ8E9R70csY?si=McAql3_N8BVoqQ6D', '2025-03-01 14:17:00'),
(24, 66, 1, 'Tập 1', 'https://www.youtube.com/embed/j9XUxaHCzkI?si=MpkZ6oUPuNu1gPjx', '2025-03-01 14:17:37'),
(25, 66, 2, 'Tập 2', 'https://www.youtube.com/embed/aCc0dxZVKug?si=ugLrKFjhV3GpiMwZ', '2025-03-01 14:18:06'),
(26, 66, 3, 'Tập 3', 'https://www.youtube.com/embed/aCc0dxZVKug?si=ugLrKFjhV3GpiMwZ', '2025-03-01 14:18:22'),
(27, 65, 1, 'Tập 1', 'https://www.youtube.com/embed/9gPec9T6bGQ?si=fWcgZpUkvXgPvBtX', '2025-03-01 14:19:01'),
(28, 67, 1, 'Tập 1', 'https://www.youtube.com/embed/1NvSkYlmDkg?si=MAZg70zMeUEbigCF', '2025-03-01 14:19:55'),
(29, 4, 2, 'Tập 2', 'https://example.com/banbe-ep3.mp4', '2025-03-01 14:22:06'),
(30, 46, 2, 'Tập 2', 'https://www.youtube.com/embed/-SBBef-OEiE?si=XNqxx6N3HgajVudA', '2025-03-02 01:21:25'),
(31, 65, 2, 'Tập 2', 'https://www.youtube.com/embed/9gPec9T6bGQ?si=fWcgZpUkvXgPvBtX', '2025-03-02 01:23:18'),
(32, 68, 2, 'Tập 2', 'https://www.youtube.com/embed/QJ8E9R70csY?si=McAql3_N8BVoqQ6D', '2025-03-02 01:24:05'),
(33, 67, 2, 'Tập 2', 'https://www.youtube.com/embed/1NvSkYlmDkg?si=MAZg70zMeUEbigCF', '2025-03-02 01:24:45'),
(34, 77, 1, 'Tập 1', 'https://www.youtube.com/embed/FK6S6Ve_ciQ?si=iTzySgdSFzkOpC_v', '2025-03-02 02:41:31'),
(35, 77, 2, 'Tập 2', 'https://www.youtube.com/embed/FK6S6Ve_ciQ?si=iTzySgdSFzkOpC_v', '2025-03-02 02:41:59');
=======
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`episode_id`, `film_id`, `episode_number`, `episode_name`, `video_url`, `created_at`) VALUES
(1, 1, 1, 'Tập 1: Luffy xuất hiện', 'https://example.com/onepiece-ep1.mp4', '2024-11-23 13:09:01'),
(2, 1, 2, 'Tập 2: Zoro tham gia', 'https://example.com/onepiece-ep2.mp4', '2024-11-23 13:09:01');
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `favorites`
=======
-- Table structure for table `favorites`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--

CREATE TABLE `favorites` (
  `favorite_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `favorites`
--

INSERT INTO `favorites` (`favorite_id`, `user_id`, `film_id`, `added_at`) VALUES
=======
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`favorite_id`, `user_id`, `film_id`, `added_at`) VALUES
(1, 2, 1, '2024-11-23 13:15:39'),
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
(2, 2, 2, '2024-11-23 13:15:39');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `films`
=======
-- Table structure for table `films`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
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
<<<<<<< HEAD
  `category_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `films`
--

INSERT INTO `films` (`film_id`, `film_name`, `description`, `image`, `release_year`, `language`, `created_at`, `country_id`, `category_id`, `genre_id`) VALUES
(2, 'Thám Tử Lừng Danh', 'Trong một lần đi chơi với bạn gái Mori Ran, thám tử trung học Kudo Shinichi vô tình phát hiện giao dịch mờ ám của những người đàn ông mặc áo đen và lần theo dấu vết. Nhưng anh bất ngờ bị chúng tấn công và ép uống chất độc APTX 4869 khiến cơ thể bị teo nhỏ thành học sinh tiểu học. Với sự trợ giúp của Tiến sĩ Agasa và thân phận mới - Shinichi trở thành Edogawa Conan, ở nhờ nhà của thám tử Mori Kogoro. Conan bắt đầu điều tra tung tích của Tổ Chức Áo Đen và bị cuốn vào những vụ án ly kỳ', '1740835895_tham-tu-lung-danh-conan-2-muc-tieu-thu-14.webp', 1994, 'VN', '2024-11-23 13:09:01', 3, 3, 15),
(3, 'Naruto', '12 năm trước, Cửu Vĩ Kurama tấn công làng Lá nhưng bị Hokage đệ tứ đánh bại và phong ấn vào con mình - cậu bé Naruto. Tuổi thơ của cậu trôi qua không mấy êm đềm trong sự ghẻ lạnh của người dân trong làng. Thế nhưng, Naruto không đầu hàng nghịch cảnh mà vô cùng nỗ lực để thay đổi cái nhìn của mọi người với mình. Cậu luôn cố gắng trở thành ninja mạnh mẽ để có thể bảo vệ bạn bè và những người xung quanh.', '1740835981_naruto.webp', 1999, 'VN', '2024-11-23 13:09:01', 3, 3, 15),
(4, 'Mèo Ma Bê Tha', 'Phim xoay quanh tình bạn của cô bé Karin mồ côi mẹ và bị cha bỏ rơi với Anzu, một con mèo ma sống hơi lôi thôi nhưng rất cố gắng chữa lành vết thương tinh thần của cô bé.', '1740836085_meo-ma-be-tha.webp', 2025, 'EN', '2024-11-25 16:38:07', 7, 3, 15),
(5, '7 Năm Chưa Cưới Sẽ Chia Tay', '7 Năm Chưa Cưới Sẽ Chia Tay', '1740834560_7-nam-chua-cuoi.jpg', 2023, 'VN', '2024-11-26 04:10:53', 1, 19, 3),
(6, 'Đại Mộng Quy Ly', 'Đại Mộng Quy Ly', '1740834921_dai-mong-quy-ly.jpg', 2023, 'EN', '2024-11-26 04:19:03', 5, 19, 7),
(45, 'Hạnh phúc bị đánh cắp', 'Hạnh Phúc Bị Đánh Cắp - một bộ phim đầy kịch tính với câu chuyện xoay quanh cuộc sống của hai người phụ nữ trong gia tộc họ Đỗ, nơi nghề thêu tay truyền thống được truyền đời sau đời. Thúy Hạnh, con dâu trưởng hiền lành và thông minh, bị vướng vào những âm mưu hãm hại từ Ánh Dương, con dâu thứ tài năng nhưng đầy mưu mô và tham vọng. Với sự chỉ đạo của đạo diễn Nhâm Minh Hiền và sự góp mặt của các diễn viên tài năng như Lan Hương, Hồng Ánh và Ngọc Lan, bộ phim hứa hẹn mang lại cho khán giả những cung bậc cảm xúc không thể quên.', '1740834971_hanh-phuc-bi-danh-cap.jpg', 2024, 'VN', '2024-11-26 08:20:30', 1, 21, 3),
(46, 'Mai', 'Mai - một phụ nữ tưởng như đã không còn thiết tha yêu đương và mưu cầu hạnh phúc cho riêng mình, lại bỗng khao khát được sống khác đi khi Dương tiến vào cuộc đời cô. Họ cho nhau những khoảnh khắc tự do, say đắm và tràn đầy tiếng cười. Nhưng liệu cả hai có giữ chặt niềm hạnh phúc đó khi miệng đời lắm cay nghiệt, bất công?', '1740834993_Mai.jpg', 2023, 'VN', '2024-11-26 08:23:50', 1, 2, 6),
(55, 'Bố Già', 'Câu chuyện về Ba Sang – con thứ hai trong 4 anh em ồn ào: Giàu, Sang, Phú, Quý. Ba Sang là một người ga lăng, “quá” tốt bụng và luôn hy sinh vì người khác dù họ có muốn hay không. Quân – Ba Sang’s son là một Youtuber trẻ hiện đại.', '1740835062_bo-gia.jpg', 2019, 'VN', '2025-01-15 12:18:17', 1, 1, 18),
(62, 'Bạn bạn bè bè', 'Woo Seul Gi, một nữ sinh tỉnh lẻ, bất ngờ chuyển đến học ở ngôi trường trung học danh giá chỉ dành riêng cho những học sinh xuất sắc nhất nước. Ở trường mới, cô nhận được sự quan tâm đặc biệt của Yoo Je Yi, nữ sinh tài năng đến từ gia đình quyền thế và nổi tiếng nhất trường. Tuy nhiên, tình bạn tưởng chừng đẹp đẽ lúc ban đầu dần dần biến thành một cuộc cạnh tranh đầy nguy hiểm. Bạn Bạn Bè Bè khắc họa mặt tối của môi trường học đường, nơi mà áp lực thành tích và sự ganh đua có thể đẩy con người đến những hành động cực đoan.', '1740835243_ban-ban-be-be.webp', 2025, 'EN', '2025-01-15 15:06:10', 4, 19, 9),
(65, 'Khó Dỗ Dành', 'Khó Dỗ Dành – The First Frost kể về một chuyện tình đầy trắc trở của đôi bạn trẻ Ôn Dĩ Phàm và Tang Diên khi họ phải yêu đi yêu lại và đối mặt với những rào cản mà đối với nhiều người có thể là sẽ phải sớm buông tay. Ôn Dĩ Phàm là một cô gái trẻ trung, nhiệt huyết và luôn khao khát khám phá những điều mới mẻ, tình đầu của cô là Tang Diên, một anh chàng khá điển trai và phong lưu.  Tuy nhiên mọi thứ quay ngoắt lại và họ phải chia tay để mỗi người bước đi trên con đường của riêng mình. Cho đến khi gặp lại ở một bán bar, họ vờ như không nhận ra nhau, thử lòng nhau và cũng muốn bắt đầu thêm một lần nữa. Khi mà cả Ôn Dĩ Phàm và Tang Diên nhận ra được tình cảm của mình là hoàn toàn chân thật thì họ lại một lần nữa vướng phải những rào cản từ phía gia đình và cả công việc. Cuối cùng thì họ nhận ra rằng chỉ tình yêu đích thực mới đưa họ vượt qua được những rào cản và có thể đến với nhau một cách bền vững nhất.', '1740835308_kho-do-danh.jpg', 2025, 'EN', '2025-02-15 14:21:52', 5, 19, 10),
(66, 'Cửu Trùng Tử', 'Đậu Chiêu từ nhỏ đã mất mẹ, vì biến cố gia đình và số phận long đong lận đận nên đã tuyệt vọng với tình yêu và tình thân. Cô đấu đá với mẹ kế, bảo vệ gia sản, lánh về điền trang hẻo lánh, học hành trau dồi kiến thức để tự bảo vệ mình. Vào một đêm mưa lớn, Đậu Chiêu gặp gỡ Tống Mặc đang cải trang thành thương nhân đến trọ tại điền trang. Cô dùng trí tuệ của mình giúp chàng bảo vệ đứa trẻ mồ côi hậu duệ của Định Quốc Công, người có công dẹp giặc. Cũng từ đó, số phận của hai người gắn chặt với nhau. Tống Mặc xuất thân từ gia đình quan lại bị cuốn vào vòng xoáy bí ẩn của biến cố gia tộc. Đậu Chiêu cũng bị mẹ kế hãm hại, vướng vào tin đồn gả thay. Hai người quyết định thành thân để liên minh, cùng nhau vượt qua khó khăn. Từ ban đầu nghi ngờ nhau, họ giúp đỡ nhau cùng vượt qua gian nan, từ đó dần dần hiểu nhau, trân trọng nhau và trở thành tri kỷ.', '1740835383_cuu-trung-tu.webp', 2020, 'EN', '2025-02-15 14:35:49', 5, 17, 7),
(67, 'Khi Điện Thoại Đổ Chuông', 'Một cặp đôi sống trong một cuộc hôn nhân sắp đặt, không nói chuyện với nhau suốt ba năm, nhận được một cuộc gọi đe dọa từ một kẻ bắt cóc.', '1740835454_khi-dien-thoai-do-chuong.webp', 2024, 'EN', '2025-02-15 15:33:03', 4, 1, 9),
(68, 'Cô Dâu Hào Môn', 'Phim lấy đề tài làm dâu hào môn và khai thác câu chuyện môn đăng hộ đối, lối sống và quy tắc của giới thượng lưu dưới góc nhìn hài hước và châm biếm.', '1740835538_co-dau-hao-mon.webp', 2024, 'VN', '2025-02-16 02:30:36', 1, 9, 14),
(70, 'Tu La Dị Giới - Phần 1', 'Thế giới còn lại các Tu La, những kẻ đều có năng lực giết Ma Vương. Bậc thầy kiếm thuật của Dị Giới, kẻ nhìn ra chiêu tất sát hạ gục đối phương chỉ trong nháy mắt. Lính đánh thuê thần tốc, với tốc độ vượt xa âm thanh. Nhà thám hiểm điểu long sử dụng món vũ khí huyền thoại bằng ba tay. Từ Thuật Sĩ với năng lực tái hiện mọi thứ bằng lời nói. Kẻ ám sát và là thiên sứ reo rắc cái chết người không biết, quỷ không hay… Mồi lửa chiến tranh lại tiếp tục nhen nhóm giữa các Tu La đã ở đỉnh cao sức mạnh từ nhiều chủng tộc và những kẻ địch còn cường bạo hơn nữa, tất cả vì danh hiệu “Dũng Giả chân chính”. Tất cả là mạnh nhất, tất cả là anh hùng, nhưng chỉ một trong số họ sẽ trở thành Dũng Giả. Cuộc chiến tranh đoạt danh vị “Dũng Giả” chính thức khai màn…', '1740835650_tu-la-di-gioi-phan-1.webp', 2024, 'EN', '2025-02-17 14:41:43', 3, 18, 13),
(72, 'Captain America: Thế Giới Mới', 'Sau khi gặp Tổng thống Hoa Kỳ mới đắc cử Thaddeus Ross, Sam Wilson thấy mình bị cuốn vào một sự cố . Anh phải khám phá lý do đằng sau một âm mưu cực kì xấu xa trước khi kẻ chủ mưu thật sự khiến cả thế giới phải hoảng sợ', '1740835766_captain-america-the-gioi-moi.webp', 2025, 'EN', '2025-02-26 13:36:43', 2, 8, 1),
(74, 'Thư Ký Kim Sao Thế (Bản Thái)', 'Thư Ký Kim Sao Thế (Bản Thái)', '1740836204_thu-ky-kim-sao-the-ban-thai.webp', 2021, 'EN', '2025-03-01 05:40:45', 6, 19, 18),
(75, 'Cuộc Chiến Học Bổng', 'Rose là một học sinh nhận học bổng xuất sắc tại trường Sudruethai, một ngôi trường có nhiều mối quan hệ có thể giúp cô đạt được thứ hạng tốt trong tương lai. Tuy nhiên, khi bước vào ngôi trường này, Rose nhận ra rằng để có được cuộc sống tốt đẹp ở đất nước này, tiền bạc là tất cả. Mọi thứ đều xoay quanh tiền bạc và các mối quan hệ của cha mẹ. Người sử dụng điều đó nhiều nhất là Lily, nữ hoàng của trường, có cha là một thành viên của Hiệp hội Phụ huynh. Rose, một học sinh nhận học bổng bị kéo vào chuỗi cuối cùng của ngôi trường này, đã phải đứng dậy, &amp;#039;cướp lại những gì mà học sinh xứng đáng có&amp;#039; cùng với Surf, một học sinh nhận học bổng yên lặng nhưng thông minh và Boo, một vận động viên Taekwondo điên cuồng.', '1740836291_cuoc-chien-hoc-bong.webp', 2024, 'EN', '2025-03-01 05:42:38', 6, 19, 10),
(76, 'Yêu Em', 'Phim kể về mối quan hệ giữa Thẩm Tích Phàm, một quản lý khách sạn đam mê công việc, và Hà Tô Diệp, một bác sĩ Đông y điềm đạm. Vì chứng mất ngủ, cô tìm đến Đông y và tình cờ gặp anh. Ban đầu chỉ là bác sĩ và bệnh nhân, nhưng những lần chạm mặt bất ngờ dần kéo họ lại gần nhau. Khi tình cảm nảy nở, cả hai phải đối mặt với những do dự từ quá khứ và dần tìm thấy ý nghĩa thực sự của tình yêu và đam mê của mình.', '1740836385_yeu-em-16081.webp', 2015, 'EN', '2025-03-01 05:42:49', 5, 13, 3),
(77, 'Sát Thủ Về Hưu', 'Danny Dolinski - một sát thủ già, đang loay hoay trong cuộc tình đơn phương với Anata, một người quản lý câu lạc bộ cá tính. Ông bất ngờ được Tổ chức gọi quay lại làm nhiệm vụ huấn luyện Wihlborg, một sát thủ trẻ tuổi, tài năng và có thái độ bất cần đời.', '1740883221_satthuvehuu.jpg', 2023, 'EN', '2025-03-02 02:40:21', 2, 12, 1);
=======
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
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `genres`
=======
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
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(16, '---'),
(9, 'Bí Ẩn'),
(10, 'Chính Kịch'),
(17, 'Cổ tích'),
(7, 'Cổ Trang'),
(18, 'Gia Đình'),
(14, 'Hài hước'),
(1, 'Hành Động'),
(15, 'Hoạt hình'),
(12, 'Khoa Học'),
=======
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(7, 'Cổ Trang'),
(1, 'Hành Động'),
(5, 'Hoạt Hình'),
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
(4, 'Kinh Dị'),
(2, 'Phiêu Lưu'),
(6, 'Tâm Lý'),
(8, 'Thần thoại'),
<<<<<<< HEAD
(3, 'Tình Cảm'),
(13, 'Viễn Tưởng'),
(11, 'Võ Thuật');
=======
(3, 'Tình Cảm');
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `ratings`
=======
-- Table structure for table `ratings`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
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
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `ratings`
--

INSERT INTO `ratings` (`rating_id`, `user_id`, `film_id`, `rating`, `review`, `created_at`) VALUES
=======
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `user_id`, `film_id`, `rating`, `review`, `created_at`) VALUES
(1, 2, 1, 5, 'Một bộ phim tuyệt vời với cốt truyện hấp dẫn!', '2024-11-23 13:15:39'),
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
(2, 2, 2, 4, 'Hiệu ứng hình ảnh đỉnh cao, nhưng hơi dài.', '2024-11-23 13:15:39');

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `users`
=======
-- Table structure for table `users`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
<<<<<<< HEAD
  `username` varchar(255) NOT NULL,
=======
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'Admin', 'b59c67bf196a4758191e42f76670ceba', 'admin', '2024-11-23 13:09:01'),
(2, 'User1', '482c811da5d5b4bc6d497ffa98491e38', 'user', '2024-11-23 13:09:01'),
(3, 'Mai Thao', '934b535800b1cba8f96a5d72f72f1611', 'user', '2025-02-10 12:28:36'),
(4, 'TN', '$2y$10$gpYKqlBSBIFBsTIH3TwaE.lyBWn7lh7wNkY5p6ktsiZ5EluzwX4Ou', 'user', '2025-02-21 14:11:35'),
(5, 'User2', '$2y$10$rruBaFM2ZApeM93vFx63EuICXntKwkU54SGeWphmA.Z/Vxia9y5dW', 'user', '2025-02-21 14:12:39'),
(6, 'User3', '2be9bd7a3434f7038ca27d1918de58bd', 'user', '2025-02-21 14:14:18'),
(7, 'User4', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'user', '2025-02-21 14:14:18'),
(8, 'User5', '6074c6aa3488f3c2dddff2a7ca821aab', 'user', '2025-02-21 14:14:39'),
(9, 'User6', 'e9510081ac30ffa83f10b68cde1cac07', 'user', '2025-02-21 14:15:11'),
(10, 'thao', '$2y$10$mGjzXv4TRcaM4I310m1WZ.au.JCBTRRXEzoJbpOtUcuIT812CqZju', 'user', '2025-02-21 14:16:04'),
(12, 'User9', '$2y$10$0mN494/viO2Ay/BwG0uDXe16diTCZ9gZW7lWyF/x0i3gF24VIAq1y', 'user', '2025-02-21 14:17:18'),
(13, 'TT', '$2y$10$Snb4W.Obfl6c8yCLpHUIMuGkRGGP8Z34iZAges84RC1WZKpAxMUJ2', 'user', '2025-02-21 14:17:55'),
(14, 'Tran', 'e10adc3949ba59abbe56e057f20f883e', 'user', '2025-02-22 04:09:37'),
(15, 'Admin2', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2025-02-22 04:09:37'),
(16, 'Lan', '4773974dcb4c111ef3d206659dbaf646', 'user', '2025-02-22 04:09:37'),
(17, 'thaonguyen', 'a01610228fe998f515a72dd730294d87', 'user', '2025-02-24 14:53:24'),
(18, 'nguyendev', 'a01610228fe998f515a72dd730294d87', 'admin', '2025-02-24 15:22:39'),
(21, 'thảo nguyên', '$2y$10$sJovbqlbM0QUvHDOVknpseOE8MYIzGu040ybf0gtikcHBFrpj.1Nu', 'user', '2025-02-24 15:30:29');
=======
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Admin', 'admin@example.com', '0192023a7bbd73250516f069df18b500', 'admin', '2024-11-23 13:09:01'),
(2, 'User1', 'user1@example.com', '482c811da5d5b4bc6d497ffa98491e38', 'user', '2024-11-23 13:09:01'),
(3, 'MT', 'mt@gmail.com', '934b535800b1cba8f96a5d72f72f1611', 'user', '2025-02-10 12:28:36');
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Cấu trúc bảng cho bảng `watch_history`
=======
-- Table structure for table `watch_history`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--

CREATE TABLE `watch_history` (
  `history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `episode_id` int(11) DEFAULT NULL,
  `watched_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
<<<<<<< HEAD
-- Đang đổ dữ liệu cho bảng `watch_history`
--

INSERT INTO `watch_history` (`history_id`, `user_id`, `film_id`, `episode_id`, `watched_at`) VALUES
(2, 2, 2, NULL, '2024-11-23 13:09:01');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Chỉ mục cho bảng `category`
=======
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
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category` (`category_id`) USING BTREE;

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Chỉ mục cho bảng `countries`
=======
-- Indexes for table `countries`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`),
  ADD UNIQUE KEY `country_name` (`country_name`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `episodes`
=======
-- Indexes for table `episodes`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`episode_id`),
  ADD KEY `film_id` (`film_id`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `favorites`
=======
-- Indexes for table `favorites`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `film_id` (`film_id`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `films`
=======
-- Indexes for table `films`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `country_id` (`country_id`),
<<<<<<< HEAD
  ADD KEY `category_id` (`category_id`),
  ADD KEY `fk_genre_id` (`genre_id`);

--
-- Chỉ mục cho bảng `genres`
=======
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `film_genres`
--
ALTER TABLE `film_genres`
  ADD PRIMARY KEY (`film_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `genres`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`),
  ADD UNIQUE KEY `genre_name` (`genre_name`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `ratings`
=======
-- Indexes for table `ratings`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `film_id` (`film_id`);

--
<<<<<<< HEAD
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`username`);

--
-- Chỉ mục cho bảng `watch_history`
=======
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `watch_history`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `watch_history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `episode_id` (`episode_id`);

--
<<<<<<< HEAD
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `episodes`
--
ALTER TABLE `episodes`
  MODIFY `episode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `favorites`
=======
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
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `favorites`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
<<<<<<< HEAD
-- AUTO_INCREMENT cho bảng `films`
--
ALTER TABLE `films`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `ratings`
=======
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
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
<<<<<<< HEAD
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `watch_history`
=======
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `watch_history`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `watch_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
<<<<<<< HEAD
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `episodes`
=======
-- Constraints for dumped tables
--

--
-- Constraints for table `episodes`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE;

--
<<<<<<< HEAD
-- Các ràng buộc cho bảng `favorites`
=======
-- Constraints for table `favorites`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE;

--
<<<<<<< HEAD
-- Các ràng buộc cho bảng `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `films_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);

--
-- Các ràng buộc cho bảng `ratings`
=======
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
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE;

--
<<<<<<< HEAD
-- Các ràng buộc cho bảng `watch_history`
=======
-- Constraints for table `watch_history`
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
--
ALTER TABLE `watch_history`
  ADD CONSTRAINT `watch_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watch_history_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `films` (`film_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `watch_history_ibfk_3` FOREIGN KEY (`episode_id`) REFERENCES `episodes` (`episode_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
