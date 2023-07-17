-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 07:33 PM
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
-- Database: `blog-php`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `title`, `content`) VALUES
(12, 'test', 'test1'),
(13, 'CSS', 'CSS stands for Cascading Style Sheets.\r\n\r\nCSS saves a lot of work. It can control the layout of multiple web pages all at once.\r\n\r\n'),
(14, 'PHP: Hypertext Preprocessor', 'PHP là viết tắt của cụm từ Personal Home Page nay đã được chuyển thành Hypertext Preprocessor. Hiểu đơn giản thì PHP là một ngôn ngữ lập trình kịch bản (scripting language) đa mục đích. PHP được dùng phổ biến cho việc phát triển các ứng dụng web chạy trên máy chủ. Dó đó, ngôn ngữ lập trình PHP có thể xử lý các chức năng từ phía server để sinh ra mã HTML trên client như thu thập dữ liệu biểu mẫu, sửa đổi cơ sở dữ liệu, quản lý file trên server hay các hoạt động khác. \r\n\r\n'),
(15, 'Địa lý nước Đức', 'Nước Đức nằm trong Trung Âu, giữa 47°16′15″ và 55°03′33″ vĩ độ bắc và 5°52′01″ và 15°02′37″ kinh độ đông. Về phía bắc Đức có ranh giới với Đan Mạch (có chiều dài 67 km), về phía đông-bắc là Ba Lan (442 km), về phía đông là Séc 811 km), về phía đông nam là Áo (815 km không kể ranh giới trên hồ Bodensee), về phía nam là Thụy Sĩ (316 km, với biên giới của lãnh thổ tách rời Büsingen nhưng không kể ranh giới trên hồ Bodensee), về phía tây nam là Pháp (448 km), về phía tây là Luxembourg (135 km) và Bỉ (156 km) và về phía tây bắc là Hà Lan (567 km).[4] Chiều dài ranh giới tổng cộng là 3.757 km. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('abc', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
