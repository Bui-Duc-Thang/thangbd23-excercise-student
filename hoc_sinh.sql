-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2022 lúc 08:55 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_hs`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_sinh`
--

CREATE TABLE `hoc_sinh` (
  `id` int(4) NOT NULL,
  `number_order` int(4) DEFAULT NULL,
  `primarySchool` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` int(2) DEFAULT NULL,
  `month_of_birth` int(2) DEFAULT NULL,
  `year_of_birth` int(4) DEFAULT NULL,
  `gender` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nation` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score_sum_class_1` int(3) DEFAULT NULL,
  `score_sum_class_2` int(3) DEFAULT NULL,
  `score_sum_class_3` int(3) DEFAULT NULL,
  `score_sum_class_4` int(3) DEFAULT NULL,
  `score_sum_class_5` int(3) DEFAULT NULL,
  `score_sum_5_classes` int(3) DEFAULT NULL,
  `priority_score` int(3) DEFAULT NULL,
  `total_prequalification_score` int(4) DEFAULT NULL,
  `note` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoc_sinh`
--

INSERT INTO `hoc_sinh` (`id`, `number_order`, `primarySchool`, `district`, `student_code`, `class`, `full_name`, `date_of_birth`, `month_of_birth`, `year_of_birth`, `gender`, `place_of_birth`, `nation`, `address`, `phone_number`, `score_sum_class_1`, `score_sum_class_2`, `score_sum_class_3`, `score_sum_class_4`, `score_sum_class_5`, `score_sum_5_classes`, `priority_score`, `total_prequalification_score`, `note`) VALUES
(7, 1, 'Dịch Vọng B', 'Cầu Giấy', '01176ANHU', '5A7', 'Đặng Mỹ Kiều Trinh', 15, 10, 2011, 'Nữ', 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0976494648', 20, 20, 30, 50, 50, 170, 0, 170, 'Đủ điều kiện dự thi vòng 2'),
(8, 2, 'Dịch Vọng B', 'Cầu Giấy', '01177ANHU', '5A7', 'Đặng Mỹ Kiều', 15, 10, 2011, 'Nữ', 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0976494648', 20, 20, 30, 50, 50, 170, 0, 170, 'Đủ điều kiện dự thi vòng 2'),
(9, 3, 'Dịch Vọng B', 'Cầu Giấy', '01178ANHU', '5A7', 'Đặng Mỹ Kiều Trinh', 15, 10, 2011, 'Nữ', 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0976494648', 20, 20, 30, 50, 50, 170, 0, 170, 'Đủ điều kiện dự thi vòng 2'),
(10, 4, 'Dịch Vọng B', 'Cầu Giấy', '01179ANHU', '5A7', 'Đặng Mỹ Kiều', 15, 10, 2011, 'Nữ', 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0976494648', 20, 20, 30, 50, 50, 170, 0, 170, 'Đủ điều kiện dự thi vòng 2'),
(11, 5, 'Dịch Vọng B', 'Cầu Giấy', '01175ANHU', '5A7', 'Đặng Mỹ Kiều Trinh', 15, 10, 2011, 'Nữ', 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0976494648', 20, 20, 30, 50, 50, 170, 0, 170, 'Đủ điều kiện dự thi vòng 2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoc_sinh`
--
ALTER TABLE `hoc_sinh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoc_sinh`
--
ALTER TABLE `hoc_sinh`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
