-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 10:10 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951064145_kttv_bdkh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `duan`
--

CREATE TABLE `duan` (
  `maduan` int(11) NOT NULL,
  `tenduan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namthuchien` year(4) NOT NULL,
  `linhvuc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nhiemvu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coquanthuchien` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `duan`
--

INSERT INTO `duan` (`maduan`, `tenduan`, `namthuchien`, `linhvuc`, `nhiemvu`, `coquanthuchien`) VALUES
(1, 'Đánh giá mức độ Biến đổi khí hậu và Xây dựng kịch bản Biến đổi khí hậu tỉnh Bắc Ninh', 2019, 'Biến đổi khí hậu', 'Nghiên cứu biến đổi khí hậu', 'Trung tâm Ứng phó biến đổi khí hậu'),
(2, 'Xây dựng và triển khai kế hoạch hành động ứng phó với Biến đổi khí hậu tỉnh Bắc Ninh', 0000, '[Biến đổi khí hậu]', 'Nghiên cứu biến đổi khí hậu', '[Trung tâm Ứng phó biến đổi khí hậu]'),
(3, 'Cập nhật kế hoạch hành động ứng phó với BĐKH tỉnh Bắc Ninh đến năm 2030 tầm nhìn đến năm 2050', 0000, '[Biến đổi khí hậu]', 'Nghiên cứu biến đổi khí hậu', '[Trung tâm Ứng phó biến đổi khí hậu]');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`maduan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `duan`
--
ALTER TABLE `duan`
  MODIFY `maduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
