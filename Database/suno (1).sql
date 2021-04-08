-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2021 lúc 07:59 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `suno_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo`
--

CREATE TABLE `combo` (
  `id_combo` int(11) NOT NULL,
  `ten_combo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `combo`
--

INSERT INTO `combo` (`id_combo`, `ten_combo`) VALUES
(1, 'combo trà');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `ad_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ad_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ad_password` text COLLATE utf8_unicode_ci NOT NULL,
  `ad_avt` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `bill_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bill_payment` float NOT NULL,
  `bill_order_date` date NOT NULL,
  `bill_total_money` float NOT NULL,
  `bill_cust_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bill_cust_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bill_cust_phone` int(11) NOT NULL,
  `bill_cust_address` text COLLATE utf8_unicode_ci NOT NULL,
  `bill_status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill_detail`
--

CREATE TABLE `tbl_bill_detail` (
  `detail_id` int(11) NOT NULL,
  `detail_amuont` float NOT NULL,
  `detail_price_discounts` float NOT NULL,
  `detail_total_money` float NOT NULL,
  `bill_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id_blog` int(11) NOT NULL,
  `ten_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_blog` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `cust_username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cust_password` text COLLATE utf8_unicode_ci NOT NULL,
  `cust_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cust_phone_number` int(15) NOT NULL,
  `cust_address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai`
--

CREATE TABLE `tbl_loai` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai`
--

INSERT INTO `tbl_loai` (`id_loai`, `ten_loai`) VALUES
(1, 'Đồ làm bánh'),
(2, 'Đồ nấu ăn'),
(3, 'Đồ pha chế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_ct`
--

CREATE TABLE `tbl_loai_ct` (
  `id_loai_ct` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `ten_loai_ct` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_ct`
--

INSERT INTO `tbl_loai_ct` (`id_loai_ct`, `id_loai`, `ten_loai_ct`) VALUES
(1, 1, 'Nguyên Liệu Làm Bánh'),
(2, 1, 'Dụng Cụ Làm Bánh'),
(3, 1, 'Khuôn làm bánh'),
(4, 2, 'Nguyên Liệu Nấu Ăn'),
(5, 2, 'Dụng Cụ nấu ăn'),
(6, 3, 'Dụng Cụ Pha Chế'),
(7, 3, 'Nguyên Liệu Pha Chế'),
(8, 3, 'Máy pha chế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_san_pham`
--

CREATE TABLE `tbl_loai_san_pham` (
  `id_loai_san_pham` int(11) NOT NULL,
  `id_loai_ct` int(11) NOT NULL,
  `ten_loai_san_pham` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_san_pham`
--

INSERT INTO `tbl_loai_san_pham` (`id_loai_san_pham`, `id_loai_ct`, `ten_loai_san_pham`) VALUES
(1, 1, 'Trà'),
(2, 1, 'Capuchino'),
(4, 5, 'Nguyên liệu Hàn Nhật'),
(5, 5, 'Nguyên liệu Thái');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_san_pham`
--

CREATE TABLE `tbl_san_pham` (
  `id_san_pham` int(11) NOT NULL,
  `id_loai_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh_san_pham` text COLLATE utf8_unicode_ci NOT NULL,
  `gia_cu` float NOT NULL,
  `gia_moi` float NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_vi` text COLLATE utf8_unicode_ci NOT NULL,
  `id_combo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_san_pham`
--

INSERT INTO `tbl_san_pham` (`id_san_pham`, `id_loai_san_pham`, `ten_san_pham`, `anh_san_pham`, `gia_cu`, `gia_moi`, `so_luong`, `don_vi`, `id_combo`) VALUES
(1, 1, 'Trà Tân Cương', 'tra.jpg', 100000, 80000, 50, 'hộp', 1),
(2, 1, 'Trà hoa cúc', 'trahoacuc.jpg', 56000, 50000, 22, 'hộp', 2),
(3, 4, 'Bánh gạo hàn quốc', '', 100000, 50000, 0, '', 0),
(4, 5, 'Bánh gạo Thái', '', 52000, 45000, 10, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ship`
--

CREATE TABLE `tbl_ship` (
  `id_ship` int(11) NOT NULL,
  `ten_ship` text COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung_ship` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_ship` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_ship`
--

INSERT INTO `tbl_ship` (`id_ship`, `ten_ship`, `noi_dung_ship`, `anh_ship`) VALUES
(1, 'Ship Hà Nội', '', ''),
(2, 'Ship Hồ Chí Minh', '', ''),
(3, 'Ship Viettel', '', ''),
(4, 'Ship Nhà Xe', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `ten_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` text COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` text COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` int(11) NOT NULL,
  `gioi_tinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` text COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id_combo`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Chỉ mục cho bảng `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Chỉ mục cho bảng `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_loai`
--
ALTER TABLE `tbl_loai`
  ADD PRIMARY KEY (`id_loai`);

--
-- Chỉ mục cho bảng `tbl_loai_ct`
--
ALTER TABLE `tbl_loai_ct`
  ADD PRIMARY KEY (`id_loai_ct`);

--
-- Chỉ mục cho bảng `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  ADD PRIMARY KEY (`id_loai_san_pham`);

--
-- Chỉ mục cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  ADD PRIMARY KEY (`id_san_pham`);

--
-- Chỉ mục cho bảng `tbl_ship`
--
ALTER TABLE `tbl_ship`
  ADD PRIMARY KEY (`id_ship`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `combo`
--
ALTER TABLE `combo`
  MODIFY `id_combo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_loai`
--
ALTER TABLE `tbl_loai`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_loai_ct`
--
ALTER TABLE `tbl_loai_ct`
  MODIFY `id_loai_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_loai_san_pham`
--
ALTER TABLE `tbl_loai_san_pham`
  MODIFY `id_loai_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_san_pham`
--
ALTER TABLE `tbl_san_pham`
  MODIFY `id_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_ship`
--
ALTER TABLE `tbl_ship`
  MODIFY `id_ship` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
