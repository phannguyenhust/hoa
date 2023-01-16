-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2022 lúc 10:00 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webbanson`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_don_hang`
--

CREATE TABLE `ct_don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `madh` int(10) UNSIGNED DEFAULT NULL,
  `masp` int(10) UNSIGNED DEFAULT NULL,
  `tensp` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `anh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(10) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `giamgia` float DEFAULT NULL,
  `tongtien` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_don_hang`
--

INSERT INTO `ct_don_hang` (`id`, `madh`, `masp`, `tensp`, `anh`, `soluong`, `gia`, `giamgia`, `tongtien`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Son 3CE SOFT MATTE LIPSTICK', 'son 3ce 1.jpeg', 2, 600000, 0.2, 580000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahd` int(10) UNSIGNED DEFAULT NULL,
  `masp` int(10) UNSIGNED DEFAULT NULL,
  `soluong` int(10) DEFAULT NULL,
  `gianhap` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`id`, `mahd`, `masp`, `soluong`, `gianhap`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5, 6000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `makh` int(10) UNSIGNED DEFAULT NULL,
  `hoten` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaydat` datetime DEFAULT NULL,
  `tongtien` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `makh`, `hoten`, `email`, `phone`, `diachi`, `ngaydat`, `tongtien`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nguyễn Văn A', 'nguyenvana@gmail.com', '0354561227', 'Nghệ An', '2022-04-19 21:38:06', 450000, NULL, '2022-04-19 21:05:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(10) UNSIGNED NOT NULL,
  `mancc` int(10) UNSIGNED DEFAULT NULL,
  `ngaynhap` date DEFAULT NULL,
  `thanhtien` float DEFAULT NULL,
  `manv` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `mancc`, `ngaynhap`, `thanhtien`, `manv`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-15', 500000, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `tenkh`, `sdt`, `email`, `diachi`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', '0354561227', 'nguyenvana@gmail.com', 'Nghệ An', NULL, NULL),
(2, 'Phạm Văn B', '0356336587', 'bb123@gmail.com', 'Văn Giang', '2022-04-19 08:17:30', '2022-04-19 08:17:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenloai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id`, `tenloai`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, '3ce', '3ce', '2022-04-18 09:07:48', '2022-04-25 17:39:03'),
(2, 'bbia', 'bbia', '2022-04-18 09:06:33', '2022-04-18 09:06:33'),
(3, 'black rouge', 'black rouge', '2022-04-18 09:08:42', '2022-04-18 09:08:42'),
(4, 'ysl', 'ysl', '2022-04-18 09:08:42', '2022-04-18 09:08:42'),
(5, 'shu', 'shu', '2022-04-18 09:10:22', '2022-04-19 08:09:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `id` int(10) UNSIGNED NOT NULL,
  `tennv` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachinv` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`id`, `tennv`, `sodienthoai`, `email`, `diachinv`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Lâm Bảo', '0366478987', 'baobao@gmail.com', 'Mỹ Hào - Hưng Yên', NULL, NULL),
(2, 'Trần Văn Lại', '0312254711', 'lai@gmail.com', 'Mỹ Hào - Hưng Yên', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_cung_cap`
--

CREATE TABLE `nha_cung_cap` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenncc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `masp` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_cung_cap`
--

INSERT INTO `nha_cung_cap` (`id`, `tenncc`, `diachi`, `email`, `sdt`, `masp`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Phương Ly', 'Hà Nội', 'phuongly@gmail.com', '0356896987', NULL, '2022-04-18 09:12:10', '2022-04-18 09:12:10'),
(2, 'Phạm Hùng Vỹ', 'Tp Hồ Chí Minh', 'vy123@gmail.com', '0354458777', NULL, '2022-04-18 09:12:10', '2022-04-18 09:12:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mausac` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `dongia` float DEFAULT NULL,
  `maloai` int(10) UNSIGNED DEFAULT NULL,
  `anh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `tensp`, `mausac`, `mota`, `dongia`, `maloai`, `anh`, `created_at`, `updated_at`) VALUES
(1, 'Son 3CE SOFT MATTE LIPSTICK #MURMURING', '– Hồng Nude', 'Màu hồng nude ngọt ngào và dịu dàng cùng chất son lì mịn sẽ là những gì mà Son 3CE SOFT MATTE LIPSTICK mang đến cho nàng, không chỉ vậy thiết kế ấn tượng cũng sẽ khiến nàng phải trầm trồ.', 395000, 1, 'son 3ce 1.jpeg', '2022-04-18 14:37:31', '2022-04-27 23:12:49'),
(2, 'Son Black rouge Air Fit Velvet Tint Ver 8 màu A43', '– Đỏ cam chili', 'Sở hữu chất son mềm mịn cùng với những tone màu thời thượng Black rouge không ngừng tung ra những siêu phẩm tạo nên cơn sốt son môi cho hội chị em và  Black rouge  Air Fit Velvet Tint Ver 8 màu A43 cũng không ngoại lệ.', 220000, 3, 'BR1.jpg', NULL, NULL),
(3, 'Son BBia Last Velvet Lip Tint Version 8 Feign Fine 38', '– Nâu Chocolate', 'Tín đồ tone nude thích phong cách Tây mà không biết đến Bbia 38 Feign Fine thật là tiếc nuối. Son có màu nâu không quá rực rỡ nhưng lại toát lên được khí chất cá tính trên khuôn mặt của hội chị em.', 215000, 2, 'bbia1.jpg', '2022-04-18 14:59:45', '2022-04-18 14:59:45'),
(4, 'Son Bbia Last Velvet Lip Tint Version 5 Enchantment of the seal', '– Nâu đậm', '25 Enchantment of the seal là màu nâu đậm, hơi trầm vừa quyến rũ vừa thu hút ánh nhìn của người đối diện. Son Bbia Last Velvet Lip Tint 25 là màu sắc hoàn hảo cho thước phim cuối, nó đủ cuốn hút để khiến người khác nhớ đến, đủ trầm mặc để khiến người khác lưu luyến.', 215000, 2, 'bbia2.jpg', NULL, NULL),
(5, 'Son YSL Slim Velvet Radical 307 Fiery Spice', '– Đỏ hồng san hô', 'Son YSL Slim Velvet Radical 307 Fiery Spice sở hữu tone son đỏ hồng san hô vừa trẻ trung mới lạ lại vô cùng ngọt ngào, đã là fan nhà YSL thì nhất định đây sẽ là thỏi son mà nàng không nên bỏ qua đâu nhé.', 890000, 4, 'ysl1.jpeg', NULL, NULL),
(6, 'Son 3CE SOFT MATTE LIPSTICK #SPEAK TO ME', '– Đỏ đất', 'Màu đỏ đất quyến rũ cùng chất son lì mịn, Son 3CE SOFT MATTE LIPSTICK #SPEAK TO ME còn mang đến một thiết kế đột phá khiến chị em phải trầm trồ bởi sự táo bạo và cực bắt mắt.', 395000, 1, '3ce2.jpeg', NULL, NULL),
(7, 'Son Kem Shu Uemura Matte Supreme Lacquer OR 01   ', '– Đỏ gạch', 'Son Kem Shu Uemura Matte Supreme Lacquer OR 01 mang đến tone son đỏ gạch cực mê cùng chất son kèm mềm mịn như nhung. Nói chung dòng son nhà Shu thì khó có thể không yêu lắm các nàng ơi.', 695000, 5, 'shu1.jpg', NULL, NULL),
(8, 'Son Shu Uemura OR587', '– Hồng Cam Đất', 'Son Shu Uemura 587 là sự kết hợp hài hòa giữa màu hồng đất pha cam mới mẻ mà thương hiệu Shu Uemura gửi đến các nàng như một món quà.', 650000, 5, 'shu2.jpg', NULL, NULL),
(9, 'Son Bbia last velvet lip tint Version 3 Edge Boss 15', '– Đỏ Rượu', 'Bbia giữ nguyên chất son mousse mượt như nhung của mình trong bộ sưu tập lần này. Sự kết hợp hài hòa giữa chất tint và velvet đã tạo nên sự khác biệt của em ấy.', 215000, 2, 'bbia3.jpg', NULL, NULL),
(10, 'Son 3CE SOFT MATTE LIPSTICK #GIVING PLEASURE', '– Cam Gạch', 'Thêm một tone son cam cực mê đến từ nhà 3CE, Son 3CE SOFT MATTE LIPSTICK #GIVING PLEASURE cam gạch nổi bật, trẻ trung và cá tính sẽ khiến nhiều chị em phải rung rinh ngay từ lần đầu chạm môi đó.', 395000, 1, '3ce3.jpeg', NULL, NULL),
(11, 'Son YSL Slim Velvet Radical 302 Brown No Way Back ', ' – Hồng đất', 'Thêm một em tone son cực mê của nhà YSL đó chính là Son YSL Slim Velvet Radical 302 Brown No Way Back, màu hồng đất cực dễ thương và cá tính cùng chất son lì mịn và thiết kế sang chảnh sẽ khiến nàng gục đổ.', 890000, 4, 'ysl2.gif', NULL, NULL),
(12, 'Son 3CE Slim Velvet Lip Color Peach play', 'Hồng Cam (New 2019)', 'Son 3CE Slim Velvet Lip Color Peach play là một sắc hồng cam nhẹ nhàng, trẻ trung nhưng cũng có thể giúp nàng biến tấu mọi phong cách. Nàng thích trở thành một cô gái dịu dàng, thời thượng hay sexy thì em ấy cũng có thể làm được. Chính vì thế, Peach play trở thành sắc son được nhiều cô nàng yêu thích nhất hiện nay. ', 395000, 1, '3ce4.jpg', NULL, NULL),
(13, 'Son 3CE Slim Velvet Lip Color Mellow Peach', '– Cam Đào (New 2019)', '3CE Slim Velvet Lip Color Mellow Peach là một màu cam đào pha nude tươi tắn và trẻ trung. Son thiên cam nhiều hơn nên không quá kén da, tuy nhiên bạn có thể make-up nhẹ để hài hòa hơn nhé!', 395000, 1, '3ce5.jpg', NULL, NULL),
(14, 'Son Shu Uemura Unlimited Amplified Matte AM BG 963 (NEW) ', '– Cam Đất', 'Mang đến tone son cam đất vạn người mê, Shu uemura Unlimited Amplified Matte AM BG 963 phiên bản vỏ đen năm 2019 dường như đã “đốt cháy” mọi cửa hàng bởi sự săn lùng của các cô nàng', 650000, 5, 'shu3.png', NULL, NULL),
(15, 'Son Black Rouge Half N Half Water Velvet Bad Peanut HV01', ' – Cam Nude', 'Son Black Rouge Half N Half Water Velvet Bad Peanut HV01 mang đến cho bạn tone son cam nude màu cực mê, sự kết hợp hoàn hảo giữa tone cam cháy và đỏ cam ngọt ngào  mang đến sự trẻ trung, cá tính.', 220000, 3, 'br2.jpg', NULL, NULL),
(16, 'Son Black Rouge Air Fit Velvet Tint A18 Coy Rose', '– Hồng đất pha nâu', 'Son Black Rouge Air Fit Velvet Tint A18 Coy Rose là một sắc hồng đất được pha cùng chút nâu vô cùng nhẹ nhàng mà mọi cô gái đều có thể sử dụng. Màu son không quá bợt như các màu nude, cũng không quá trầm khiến nàng phải make-up nhiều.', 220000, 3, 'br3.jpg', NULL, NULL),
(17, 'Son Black Rouge Air Fit Velvet Tint A22 Vampire Rose ', '– Nâu ánh đỏ', 'Son Black Rouge Air Fit Velvet Tint A22 là một màu son nghiêng về tone nâu nhiều hơn, pha cùng chút ánh đỏ. Vì nâu là tone màu chủ đạo nên sẽ phù hợp với những cô nàng thích màu trầm, ấm và đi cùng layout make-up cá tính một chút. ', 195000, 3, 'br4.jpg', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ct_don_hang`
--
ALTER TABLE `ct_don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nha_cung_cap`
--
ALTER TABLE `nha_cung_cap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
