-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2020 lúc 06:22 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbdivineshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idsp` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `sale` int(2) DEFAULT 0,
  `soluong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `name`, `idsp`, `iduser`, `price`, `sale`, `soluong`) VALUES
(6896, 'Tài khoản Netflix Premium for 1 User (1 Tháng)', 2, 1, 48950, 45, 1),
(6897, 'Tài khoản Netflix Premium for 1 User (1 Tháng)', 2, 1, 48950, 45, 1),
(6898, 'Tài khoản Netflix Premium for 1 User (1 Tháng)', 2, 1, 48950, 45, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `postdate` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `iduser`, `idsp`, `comment`, `name`, `postdate`) VALUES
(48, 3, 2, 'hey yo', 'minh', 'August 12, 2020, 4:22 am'),
(49, 3, 2, 'hiiiii hotb', 'minh', 'August 12, 2020, 4:37 am'),
(50, 3, 3, 'helllo ', 'minh', 'August 12, 2020, 4:38 am'),
(51, 12, 25, 'alo', 'phuong', 'August 12, 2020, 10:08 am');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sort` tinyint(2) DEFAULT 0,
  `icon` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `sort`, `icon`) VALUES
(2, 'PUBG', 2, 'fas fa-trophy'),
(3, 'Game trên Origin', 3, 'fa fa-cube'),
(4, 'Game trên Battle.net', 4, 'fa fa-crosshairs'),
(5, 'Steam Wallet', 5, 'fas fa-wallet'),
(6, 'Nạp Game Mobile', 6, 'fas fa-mobile-alt'),
(7, 'Gói nạp Garena', 7, 'fa fa-money'),
(8, 'Google Play', 8, 'fab fa-google-play'),
(9, 'Tiện ích', 9, 'fas fa-magic'),
(10, 'Nintendo Eshop Card', 10, 'fas fa-wallet'),
(18, 'Game trên Steam', 1, 'fab fa-steam-symbol');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sort` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`id`, `name`, `sort`) VALUES
(1, 'Pubg Corp', 1),
(2, 'Riot', 2),
(3, 'Gameloft', 3),
(4, 'Tencent', 4),
(5, 'Sega', 5),
(6, 'Ubisoft', 6),
(7, 'Conami', 7),
(8, 'Vinagame', 8),
(9, 'Vtcgame', 9),
(10, 'Soni', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(10) DEFAULT 0,
  `idcatalog` int(10) NOT NULL,
  `product_table` int(10) NOT NULL,
  `sale` int(3) DEFAULT 0,
  `idsanxuat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `idcatalog`, `product_table`, `sale`, `idsanxuat`) VALUES
(2, 'Tài khoản Netflix Premium for 1 User (1 Tháng)', 'netflix1.png', 89000, 9, 1, 45, 8),
(3, 'Discord Nitro 1 Month (Classic)', 'discordnitroclassic.png', 125000, 9, 1, 16, 9),
(4, 'PlayerUnknowns Battlegrounds PUBG CDKEY', 'PUBG-ratbt.png', 340000, 2, 1, 29, 1),
(5, 'RESIDENT EVIL 3', 'header1.jpg', 1361000, 3, 1, 56, 3),
(6, 'Monster Hunter World : Iceborne Master Edition', 'monster_icemaster.jpg', 1100000, 4, 1, 36, 4),
(7, 'Gia hạn Youtube Premium (1 Tháng)', 'youtube-pre.png', 280000, 9, 1, 91, 7),
(8, 'Code gia hạn Adobe Full App (1 năm)', 'Banner ngang inside.png', 900000, 9, 1, 49, 10),
(9, 'Tài khoản Netflix Premium for 1 User (1 Tháng)', 'netflix1.png', 89000, 5, 2, 45, 4),
(10, 'Random Code Steam', 'photo_2020-05-12_17-51-53.jpg', 20000, 8, 2, 50, 6),
(11, 'Steam Wallet Code 118k VNĐ ( >5$ )', '40hkd-457x213.png', 127000, 5, 2, NULL, 9),
(12, 'Steam Wallet Code 236k VNĐ ( >10$ )', 'wallet80HKD.png', 250000, 5, 2, NULL, 9),
(13, 'Steam Wallet Code 77,000 VND', 'steamwallet77k.png', 88000, 5, 2, NULL, 9),
(14, 'Steam Wallet Code 100,000 VND', 'steam wallet 100000.png', 110000, 5, 2, NULL, 9),
(15, 'Tài khoản Netflix Premium for 1 User (3 Tháng)', 'netflix1.png', 270000, 9, 2, 45, 9),
(16, 'PlayerUnknown\'s Battlegrounds PUBG CDKEY', 'PUBG-ratbt.png', 340000, 2, 2, 29, 1),
(17, 'Euro Truck Simulator 2', 'header2.jpg', 349000, 3, 3, 75, 7),
(19, 'AXYOS ', 'header4.jpg', 69000, 3, 3, 90, 9),
(20, 'Far Cry 5 - Standard Edition', 'header5.jpg', 988000, 4, 3, 85, 3),
(21, 'Far Cry 4', 'header6.jpg', 494000, 4, 3, 80, 10),
(23, 'Far Cry 3', 'header8.jpg', 329000, 3, 3, 85, 5),
(25, 'Grand Theft Auto V - GTA V', 'header.jpg', 458000, 18, 1, 0, 2),
(26, 'No Man\'s Sky', 'header3.jpg', 479000, 18, 3, 25, 8),
(64, 'BioShock™ Remastered', '9.jpg', 330000, 18, 3, 10, 5),
(65, 'Road Redemption', 'header7.jpg', 187000, 3, 3, 0, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `email`, `role`) VALUES
(1, 'user', '123', NULL, 0),
(2, 'admin', '1234', NULL, 1),
(3, 'minh', '123', 'nguyenhuynhminh11082k1@gmail.com', 0),
(10, 'ly', '123', 'ly@gmail.com', 0),
(12, 'phuong', '123', 'phuong@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_cart_product` (`idsp`),
  ADD KEY `FK_cart_user` (`iduser`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Sanpham_Danhmuc` (`idcatalog`),
  ADD KEY `FK_Sanpham_Nsx` (`idsanxuat`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6899;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_cart_product` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cart_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_Sanpham_Danhmuc` FOREIGN KEY (`idcatalog`) REFERENCES `danhmuc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Sanpham_Nsx` FOREIGN KEY (`idsanxuat`) REFERENCES `nhasanxuat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
