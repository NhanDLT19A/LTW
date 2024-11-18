-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2024 lúc 10:36 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `idSanpham` int(11) NOT NULL,
  `LoaiBanh` varchar(50) NOT NULL,
  `TenBanh` varchar(255) NOT NULL,
  `Gia` decimal(15,2) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`idSanpham`, `LoaiBanh`, `TenBanh`, `Gia`, `HinhAnh`) VALUES
(1, 'BanhSN', 'TIRAMISU CAKE MOUSSE', 360000.00, 'hinhbanh/BanhSN/sn1.webp'),
(2, 'BanhSN', 'TIRAMISU CAKE CHỮ NHẬT', 660000.00, 'hinhbanh/BanhSN/sn2.webp'),
(3, 'BanhSN', 'TIRAMISU CAKE', 330000.00, 'hinhbanh/BanhSN/sn3.webp'),
(4, 'BanhSN', 'RED VELVET CREAM CHEESE', 360000.00, 'hinhbanh/BanhSN/sn4.webp'),
(5, 'BanhSN', 'RED VELVET CAKE VUÔNG', 400000.00, 'hinhbanh/BanhSN/sn5.webp'),
(6, 'BanhSN', 'RED VELVET CHỮ NHẬT', 730000.00, 'hinhbanh/BanhSN/sn6.webp'),
(7, 'BanhSN', 'RED VELVET CAKE', 360000.00, 'hinhbanh/BanhSN/sn7.webp'),
(8, 'BanhSN', 'PASSION FRUIT MOUSSE', 360000.00, 'hinhbanh/BanhSN/sn8.webp'),
(9, 'BanhSN', 'HAWAII MOUSSE', 360000.00, 'hinhbanh/BanhSN/sn9.webp'),
(10, 'BanhSN', 'GREEN TEA CAKE', 660000.00, 'hinhbanh/BanhSN/sn10.webp'),
(11, 'BanhSN', 'BÁNH KEM 20-11', 330000.00, 'hinhbanh/BanhSN/sn11.webp'),
(12, 'GateauxKT', 'FRUIT CAKE', 275000.00, 'hinhbanh/GateauxKT/gate1.webp'),
(13, 'GateauxKT', 'GREENTEA CAKE', 275000.00, 'hinhbanh/GateauxKT/gate2.webp'),
(14, 'GateauxKT', 'COCONUT  CAKE', 275000.00, 'hinhbanh/GateauxKT/gate3.webp'),
(15, 'GateauxKT', 'CAPUCCINO', 275000.00, 'hinhbanh/GateauxKT/gate4.webp'),
(16, 'GateauxKT', 'TIRAMISU VUÔNG', 360000.00, 'hinhbanh/GateauxKT/gate5.webp'),
(17, 'GateauxKT', 'RED VELVET CAKE VUÔNG', 400000.00, 'hinhbanh/GateauxKT/gate6.webp'),
(18, 'GateauxKT', 'TIRAMISU', 275000.00, 'hinhbanh/GateauxKT/gate7.webp'),
(19, 'GateauxKT', 'FRESH FRUIT CAKE', 275000.00, 'hinhbanh/GateauxKT/gate8.webp'),
(20, 'GateauxKT', 'TIRAMISU CAKE', 275000.00, 'hinhbanh/GateauxKT/gate9.webp'),
(21, 'GateauxKT', 'FRUIT CAKE 2', 275000.00, 'hinhbanh/GateauxKT/gate10.webp'),
(22, 'GateauxKT', 'DARK CHOCOLATE', 300000.00, 'hinhbanh/GateauxKT/gate11.webp'),
(23, 'GateauxKT', 'BLUE BERRY CHOCOLATE', 275000.00, 'hinhbanh/GateauxKT/gate12.webp'),
(24, 'GateauxKT', 'RED VELVET CAKE 2', 360000.00, 'hinhbanh/GateauxKT/gate13.webp'),
(25, 'GateauxKT', 'RED VELVET CAKE 1', 360000.00, 'hinhbanh/GateauxKT/gate14.webp'),
(26, 'GateauxKT', 'GREENTEA CAKE LOVE', 330000.00, 'hinhbanh/GateauxKT/gate15.webp'),
(27, 'GateauxKB', 'DARK CHOCOLATE CAKE', 360000.00, 'hinhbanh/GateauxKB/gateb1.webp'),
(28, 'GateauxKB', 'DARK CHOCOLATE CAKE', 300000.00, 'hinhbanh/GateauxKB/gateb2.webp'),
(29, 'GateauxKB', 'DARK CHOCOLATE COCONUT', 300000.00, 'hinhbanh/GateauxKB/gateb3.webp'),
(30, 'GateauxKB', 'MOKA CAKE', 300000.00, 'hinhbanh/GateauxKB/gateb4.webp'),
(31, 'GateauxKB', 'OPERA VUÔNG', 400000.00, 'hinhbanh/GateauxKB/gateb5.webp'),
(32, 'GateauxKB', 'WHITE CHOCOLATE COCONUT', 300000.00, 'hinhbanh/GateauxKB/gateb6.webp'),
(33, 'GateauxKB', 'WHITE CHOCOLATE CAKE', 300000.00, 'hinhbanh/GateauxKB/gateb7.webp'),
(34, 'GateauxKB', 'PRALINE', 360000.00, 'hinhbanh/GateauxKB/gateb8.webp'),
(35, 'Mousse', 'BLUE BERRY MOUSSE', 360000.00, 'hinhbanh/Mousse/mousse1.webp'),
(36, 'Mousse', 'CARAMEL CHOCOLATE MOUSSE', 3060000.00, 'hinhbanh/Mousse/mousse2.webp'),
(37, 'Mousse', 'CHERRY CHEESE MOUSSE', 360000.00, 'hinhbanh/Mousse/mousse3.webp'),
(38, 'Mousse', 'HAWAI MOUSSE', 360000.00, 'hinhbanh/Mousse/mousse4.webp'),
(39, 'Mousse', 'PASSION MOUSSE CHANH DÂY', 360000.00, 'hinhbanh/Mousse/mousse5.webp'),
(40, 'Mousse', 'RASPBERRY CREAM CHEESE MOUSSE', 360000.00, 'hinhbanh/Mousse/mousse6.webp'),
(41, 'BanhMi', 'BÁNH MÌ BAGUETTE', 12000.00, 'hinhbanh/BanhMi/mi1.jpg'),
(42, 'BanhMi', 'BÁNH MÌ CHUỘT', 3000.00, 'hinhbanh/BanhMi/mi2.jpg'),
(43, 'BanhMi', 'BÁNH MÌ ĐEN', 20000.00, 'hinhbanh/BanhMi/mi3.jpg'),
(44, 'BanhMi', 'BÁNH MÌ SANDWICH', 20000.00, 'hinhbanh/BanhMi/mi4.jpg'),
(45, 'BanhMi', 'BÁNH MÌ SANDWICH NGUYÊN CÁM', 30000.00, 'hinhbanh/BanhMi/mi5.jpg'),
(46, 'BanhMi', 'BÁNH MÌ HOA CÚC', 75000.00, 'hinhbanh/BanhMi/mi6.jpg'),
(47, 'BanhMi', 'BÁNH MÌ VỪNG', 12000.00, 'hinhbanh/BanhMi/mi7.jpg'),
(48, 'BanhMi', 'BÁNH MÌ ĐEN NGŨ CỐC', 28000.00, 'hinhbanh/BanhMi/mi8.jpg'),
(56, 'BanhMan', 'PHÔ MAI TIÊU', 30000.00, 'hinhbanh/BanhMan/man14.webp'),
(57, 'BanhMan', 'SỪNG BÒ - CROISSANT', 15000.00, 'hinhbanh/BanhMan/man9.jpg'),
(58, 'BanhMan', 'JAMPONG', 28000.00, 'hinhbanh/BanhMan/man10.jpg'),
(59, 'BanhMan', 'BLUEBERRY PUFF PASTRY PIES', 15000.00, 'hinhbanh/BanhMan/man11.jpg'),
(60, 'BanhMan', 'BÁNH XÚC XÍCH HOA', 28000.00, 'hinhbanh/BanhMan/man12.jpg'),
(61, 'BanhMan', 'CHOCOLATE DONUT', 12000.00, 'hinhbanh/BanhMan/man13.jpg'),
(62, 'BanhMan', 'BÁNH NHÂN NHO', 15000.00, 'hinhbanh/BanhMan/man14.webp'),
(63, 'BanhMan', 'BÁNH NHO KHOAI', 18000.00, 'hinhbanh/BanhMan/man15.jpg'),
(64, 'BanhMan', 'PUFF PASTRY APPLE PIES', 15000.00, 'hinhbanh/BanhMan/man16.jpg'),
(77, 'Cookies', 'COOKIES YẾN MẠCH', 60000.00, 'hinhbanh/Cookies/cookies1.webp'),
(78, 'Cookies', 'Socola ', 7000.00, 'hinhbanh/Cookies/cookies2.jpg'),
(79, 'Cookies', 'PARMESAN SEAWEED COOKIES', 50000.00, 'hinhbanh/Cookies/cookies3.jpg'),
(80, 'Cookies', 'BÁNH LƯỠI MÈO ', 48000.00, 'hinhbanh/Cookies/cookies4.jpg'),
(81, 'Cookies', 'COCONUT', 48000.00, 'hinhbanh/Cookies/cookies5.jpg'),
(82, 'Cookies', 'RASIN NHO ', 7000.00, 'hinhbanh/Cookies/cookies6.jpg'),
(83, 'Cookies', 'TWO COLOURS CHOCOLATE', 48000.00, 'hinhbanh/Cookies/cookies7.jpg'),
(84, 'Cookies', 'PALMIER ', 55000.00, 'hinhbanh/Cookies/cookies8.webp'),
(85, 'Cookies', 'COCONUT CHOCOLATE & CASHEWNUT ', 48000.00, 'hinhbanh/Cookies/cookies9.jpg'),
(86, 'Cookies', 'GREEN TEA COOKIES', 48000.00, 'hinhbanh/Cookies/cookies10.jpg'),
(87, 'Cookies', 'RED VELVET COOKIES ', 65000.00, 'hinhbanh/Cookies/cookies11.jpg'),
(88, 'Cookies', 'TUILE ALMOND ', 45000.00, 'hinhbanh/Cookies/cookies12.jpg'),
(105, 'MiniCake', 'BÁNH BÔNG LAN TRỨNG MUỐI', 80000.00, 'hinhbanh/MiniCake/mini1.webp'),
(106, 'MiniCake', 'BÁNH SU KEM PHOMAI', 13000.00, 'hinhbanh/MiniCake/mini2.webp'),
(107, 'MiniCake', 'WHITE DONUTS', 12000.00, 'hinhbanh/MiniCake/mini3.jpg'),
(108, 'MiniCake', 'BÁNH CUỘN CA CAO', 75000.00, 'hinhbanh/MiniCake/mini4.jpg'),
(109, 'MiniCaket', 'GATO CUỘN TRÀ XANH', 75000.00, 'hinhbanh/MiniCake/mini5.jpg'),
(110, 'MiniCake', 'PEPTIT HOA QUẢ', 70000.00, 'hinhbanh/MiniCake/mini6.webp'),
(111, 'MiniCake', 'PEPTIT TRÀ XANH', 70000.00, 'hinhbanh/MiniCake/mini7.webp'),
(112, 'MiniCake', 'BÁNH SUKEM - CREAM PUFFS', 70000.00, 'hinhbanh/MiniCake/mini8.webp'),
(113, 'MiniCake', 'PEPTIT SOCOLA BÀO ĐEN', 70000.00, 'hinhbanh/MiniCake/mini9.webp'),
(114, 'MiniCake', 'PEPTIT SOCOLA BÀO TRẮNG', 70000.00, 'hinhbanh/MiniCake/mini10.webp'),
(115, 'MiniCake', 'PEPTIT TIRAMISU', 70000.00, 'hinhbanh/MiniCake/mini11.webp'),
(116, 'MiniCake', 'PEPTIT CAPUCHINO', 70000.00, 'hinhbanh/MiniCake/mini12.webp'),
(117, 'MiniCake', 'PEPTIT MOKA', 70000.00, 'hinhbanh/MiniCake/mini13.webp'),
(118, 'MiniCake', 'MUFFIN TRỨNG MUỐI', 20000.00, 'hinhbanh/MiniCake/mini17.webp'),
(119, 'MiniCake', 'TRÀ XANH CAKE PIECE', 40000.00, 'hinhbanh/MiniCake/mini18.webp'),
(120, 'MiniCake', 'TIRAMISU CAKE PIÊC', 40000.00, 'hinhbanh/MiniCake/mini19.webp'),
(121, 'MiniCake', 'CUPCAKE TRÀ XANH', 18000.00, 'hinhbanh/MiniCake/mini20.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL DEFAULT '',
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`idUser`, `HoTen`, `Username`, `Password`) VALUES
(1, 'Nhân', 'nhan', '123'),
(2, 'Dung', 'dung', '234'),
(6, 'Ngân', 'ngan', '345'),
(7, 'Trúc Ly', 'ly', '456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idSanpham`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `idSanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
