-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2023 lúc 03:38 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_shino`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminID` int(11) UNSIGNED NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminID`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`) VALUES
(1, 'luan', 'luan@gmail.com', 'Admin', '123456789', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `cartegory_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `cartegory_id`) VALUES
(59, 'Dior', 9),
(60, 'Calvil Klein', 9),
(61, 'Versace ', 9),
(62, 'Yves Saint Laurent', 9),
(63, 'Dolce & Gabbana', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `sId`, `product_name`, `product_price`, `quantity`, `product_img`) VALUES
(86, 97, 'oa2mnai4jkrhviejitenld0oms', 'Dolce & Gabbana The One Eau de Parfum for Men', '2600000', 1, 'dolce-_-gabbana-the-one-for-men-eau-de-parfum-for-men_fb5367ca3bdb4b74a2778b53638f0ae2_master.webp'),
(87, 97, 'oa2mnai4jkrhviejitenld0oms', 'Dolce & Gabbana The One Eau de Parfum for Men', '2600000', 4, 'dolce-_-gabbana-the-one-for-men-eau-de-parfum-for-men_fb5367ca3bdb4b74a2778b53638f0ae2_master.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cartegory`
--

CREATE TABLE `tbl_cartegory` (
  `cartegory_id` int(11) UNSIGNED NOT NULL,
  `cartegory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cartegory`
--

INSERT INTO `tbl_cartegory` (`cartegory_id`, `cartegory_name`) VALUES
(7, 'SẢN PHẨM NỔI BẬT'),
(9, 'Nước hoa nam'),
(10, 'Nước hoa nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cuspayment`
--

CREATE TABLE `tbl_cuspayment` (
  `id` int(11) NOT NULL,
  `cusName` varchar(255) NOT NULL,
  `cusPhone` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_cuspayment`
--

INSERT INTO `tbl_cuspayment` (`id`, `cusName`, `cusPhone`, `province`, `town`, `address`, `email`) VALUES
(3, 'Nguyễn Thành Luân', '1234567890', 'Cần Thơ', 'Ninh Kiều', 'can tho, jdshfiu sviguhdighbdohdbrpfkgbif', ''),
(4, 'Nguyễn Thành Luân', '1234567890', 'Cần Thơ', 'Ninh Kiều', 'can tho, jdshfiu sviguhdighbdohdbrpfkgbif', ''),
(5, 'Nguyễn Thành Luân', '0399836620', 'Cần Thơ', 'Ninh Kiều', 'Cần Thơ', ''),
(7, 'Nguyễn Thành Luân', '0399836620', 'Cần Thơ', 'Ninh Kiều', 'Cần Thơ', ''),
(8, 'Nguyễn Thành Luân', '0399836620', 'Cần Thơ', 'Ninh Kiều', 'Cần Thơ', ''),
(12, 'Nguyễn Thành Luân 2', '0399836620', 'Cần Thơ', 'Ninh Kiều', 'Quán cà phê Milano bên cạnh bệnh viện Đại học Võ Trường Toản, xã Tân Phú Thạnh, huyện Châu Thành A, Hậu Giang', ''),
(13, 'Nguyễn Thành Luân 2', '0399836620', 'Cần Thơ', 'Ninh Kiều', 'Quán cà phê Milano bên cạnh bệnh viện Đại học Võ Trường Toản, xã Tân Phú Thạnh, huyện Châu Thành A, Hậu Giang', ''),
(15, 'Nguyễn Thành Luân 2', '0399836620', 'Cần Thơ', 'Ninh Kiều', 'Quán cà phê Milano bên cạnh bệnh viện Đại học Võ Trường Toản, xã Tân Phú Thạnh, huyện Châu Thành A, Hậu Giang', 'luan@gmail.com'),
(16, 'Nguyễn Thành Luân 2', '0399836620', 'Cần Thơ', 'Ninh Kiều', 'Quán cà phê Milano bên cạnh bệnh viện Đại học Võ Trường Toản, xã Tân Phú Thạnh, huyện Châu Thành A, Hậu Giang', 'luan@gmail.com'),
(17, 'Nguyễn Thành Luân 2', '0399836620', 'Cần Thơ', 'Ninh Kiều', 'Quán cà phê Milano bên cạnh bệnh viện Đại học Võ Trường Toản, xã Tân Phú Thạnh, huyện Châu Thành A, Hậu Giang', 'luan@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `email`, `userName`, `pass`) VALUES
(12, 'luan@gmail.com', 'luan', '123456789'),
(13, 'luan@gmail.com', 'luan', '123456789'),
(17, 'me@example.com', 'luan3', '123456789'),
(19, '', 'luan', '123456789');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(255) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cartegory_id` int(11) UNSIGNED NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_capital_price` int(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `cartegory_id`, `brand_id`, `product_price`, `product_capital_price`, `product_desc`, `product_img`, `product_quantity`) VALUES
(98, 'Versace Eros For Men', 9, 61, 1890500, 120000, 'Mã hàng\r\n110100200575\r\nThương hiệu\r\nVersace\r\nXuất xứ\r\nÝ\r\nNăm phát hành\r\n2012\r\nNhóm hương\r\nVani, Bạc hà, Đậu tonka, Táo\r\nPhong cách\r\nNam tính, Gợi cảm, Thu hút\r\nHương đầu: Bạc hà, Táo xanh, Quả chanh vàng.\r\nHương giữa: Đậu Tonka, Ambroxan, Geranium.\r\nHương', 'eros-100ml_9ae1eaee2c1f4e26a887265f0d329323_master.webp', 12),
(99, 'Dior Sauvage Eau de Parfum', 9, 59, 3500000, 120000, 'Mã hàng\r\n110100200151\r\nThương hiệu\r\nChristian Dior\r\nXuất xứ\r\nPháp\r\nNăm phát hành\r\n2018\r\nNhóm hương\r\nHương ambroxan, Cam bergamot, Hạt tiêu tứ xuyên\r\nPhong cách\r\nPhóng khoáng, Nam tính, Cuốn hút\r\nHương đầu: Bergamot\r\nHương giữa: Tiêu, Hoa Oải Hương, Đại Hồ', 'dior-sauvage-eau-de-parfum-100ml_e1c611f46daa451f8a159c1652c8d6c1_master.webp', 14),
(100, 'Nước hoa 3', 9, 60, 2600000, 120000, 'Mã hàng\r\n110100200127\r\nThương hiệu\r\nCalvin Klein\r\nXuất xứ\r\nMỹ, Pháp\r\nNăm phát hành\r\n1994\r\nNhóm hương\r\nChanh vàng, Green notes, Cam bergamot, Xạ hương\r\nPhong cách\r\nTươi mát, Trẻ trung, Tinh', 'calvin-klein-ck-one_42e53a9c35ec43f5b0fa71b70b71c6b6_master.webp', 12),
(101, 'Nước hoa abc', 9, 63, 1300000, 120000, 'abc', 'armaf_club_de_nuit_intense_man_152e612a0ea248d480c52a527ddb8319_master.webp', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product_img_desc`
--

CREATE TABLE `tbl_product_img_desc` (
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_img_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `level` int(30) NOT NULL,
  `user_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `userName`, `userEmail`, `User`, `Pass`, `level`, `user_img`) VALUES
(20, 'Nguyễn Thành Luân', 'luan@gmail.com', '', '123456789', 0, 'pro3.jpg'),
(21, 'luan', 'luan@gmail.com', '', '123456789', 0, 'sp1.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `cartegory_id` (`cartegory_id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  ADD PRIMARY KEY (`cartegory_id`);

--
-- Chỉ mục cho bảng `tbl_cuspayment`
--
ALTER TABLE `tbl_cuspayment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cartegory_id` (`cartegory_id`,`brand_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_product_img_desc`
--
ALTER TABLE `tbl_product_img_desc`
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  MODIFY `cartegory_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_cuspayment`
--
ALTER TABLE `tbl_cuspayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD CONSTRAINT `tbl_brand_ibfk_1` FOREIGN KEY (`cartegory_id`) REFERENCES `tbl_cartegory` (`cartegory_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`cartegory_id`) REFERENCES `tbl_cartegory` (`cartegory_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tbl_product_img_desc`
--
ALTER TABLE `tbl_product_img_desc`
  ADD CONSTRAINT `tbl_product_img_desc_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
