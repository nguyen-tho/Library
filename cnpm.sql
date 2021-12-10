-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2021 lúc 08:39 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cnpm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book`
--

CREATE TABLE `book` (
  `BookID` int(10) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Author` varchar(256) NOT NULL,
  `Category` varchar(64) NOT NULL,
  `Publisher` varchar(64) NOT NULL,
  `PublishedDate` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `book`
--

INSERT INTO `book` (`BookID`, `Name`, `Author`, `Category`, `Publisher`, `PublishedDate`) VALUES
(1, '??c nhân tâm', 'Dale Carnegie ', 'T? l?c ', 'NXB Th? Gi?i', 2019),
(2, 'S? ??', 'V? Tr?ng Ph?ng', 'Ti?u thuy?t ', 'NXB V?n h?c', 2020),
(3, 'Harry Potter', 'J.K.Rowling', 'Ti?u thuy?t', 'NXB Tr?', 2007);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `CustomersID` int(10) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `Fullname` varchar(64) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Address` varchar(128) NOT NULL,
  `IDcard` int(12) NOT NULL,
  `Status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`CustomersID`, `Username`, `Password`, `Fullname`, `Phone`, `Email`, `Address`, `IDcard`, `Status`) VALUES
(1, 'ptt', '123', 'Ph?m T?t Thành', 389111111, 'ptt@gmail.com', 'b?n tre', 321111111, 'activity'),
(2, 'aaa', '123', 'ng v a', 989111222, 'a@gmail.com', 'hcm', 321000000, 'Frozen'),
(3, 'bbb', '123', 'tr t b', 385222222, 'b@gmail.com', 'hn', 123123123, 'locked');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `librarian`
--

CREATE TABLE `librarian` (
  `LibrarianID` int(10) NOT NULL,
  `Username` varchar(16) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `librarian`
--

INSERT INTO `librarian` (`LibrarianID`, `Username`, `Password`) VALUES
(1, 'admin1', '123'),
(2, 'admin2', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loan`
--

CREATE TABLE `loan` (
  `LoanID` int(10) NOT NULL,
  `CustomersID` int(10) NOT NULL,
  `BookID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookID`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomersID`);

--
-- Chỉ mục cho bảng `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`LibrarianID`);

--
-- Chỉ mục cho bảng `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`LoanID`),
  ADD KEY `CustomersID` (`CustomersID`),
  ADD KEY `BookID` (`BookID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `book`
--
ALTER TABLE `book`
  MODIFY `BookID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomersID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `librarian`
--
ALTER TABLE `librarian`
  MODIFY `LibrarianID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loan`
--
ALTER TABLE `loan`
  MODIFY `LoanID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`CustomersID`) REFERENCES `customers` (`CustomersID`),
  ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`BookID`) REFERENCES `book` (`BookID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
