-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 07:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pixie`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `Category`) VALUES
(6, 'Jeans'),
(7, 'Shirts'),
(11, 'HandBag'),
(12, 'shoes');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Product_title` varchar(15) NOT NULL,
  `ProductName` varchar(10) NOT NULL,
  `ProductDetails` varchar(255) NOT NULL,
  `InStock` int(11) NOT NULL,
  `DateAndTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ProductUniqueCode` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Category` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Product_title`, `ProductName`, `ProductDetails`, `InStock`, `DateAndTime`, `ProductUniqueCode`, `image`, `Category`, `Price`) VALUES
(6, 'new2', 'new3', 'ghghf', 11, '2006-10-22 14:27:33', '193233', '1665077253cir.png', 4, 150),
(7, 'Mic', 'music', 'The best music', 16, '2006-10-22 15:34:16', '0d78d4', '1665077408music.jpg', 5, 200),
(8, 'Jeans', 'Denim jean', 'Best in quality  ', 18, '2012-10-22 03:42:36', '3777dc', '16656001564.jpg', 5, 3000),
(9, '1', 'Denim jean', 'best in quality', 6, '2017-10-22 02:48:27', '9eb416', '1666028907item-02.jpg', 6, 3000),
(10, '2', 'shirt', 'best in quality', 7, '2017-10-22 02:49:01', 'ba5631', '1666028941item-03.jpg', 7, 3000),
(11, 'jean', 'ladies jea', 'weodfqwuefqilewgf', 6, '2004-11-22 02:06:27', 'd952aa', '1667585187jeans.jpg', 6, 3000),
(12, 'purse', 'purse1', 'best in quality', 3, '2017-10-22 02:56:48', '736a28', '1666029408item-04.jpg', 11, 3000),
(13, 'shoes', 'joggers', 'greyf,ito;lito76eruig;oitidlr8', 4, '2004-11-22 02:08:24', '0f660c', '1667585304item-06.jpg', 12, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `CNumber` int(11) NOT NULL,
  `Expiry` varchar(30) NOT NULL,
  `CW` int(11) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `ZipCode` int(11) NOT NULL,
  `PTitle` varchar(50) NOT NULL,
  `PName` varchar(50) NOT NULL,
  `PDesc` text NOT NULL,
  `Pimg` varchar(50) NOT NULL,
  `PCat` varchar(20) NOT NULL,
  `PQun` int(11) NOT NULL,
  `PPrice` int(11) NOT NULL,
  `TPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`ID`, `Name`, `Email`, `Phone`, `CNumber`, `Expiry`, `CW`, `Street`, `City`, `State`, `ZipCode`, `PTitle`, `PName`, `PDesc`, `Pimg`, `PCat`, `PQun`, `PPrice`, `TPrice`) VALUES
(76, 'abdullah', 'mhamidshaikh@outlook.com', '03163881640', 2147483647, '12/9/2022', 2021, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(77, 'abdullah', 'mhamidshaikh@outlook.com', '03163881640', 2147483647, '12/9/2022', 2021, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(78, 'Abdllah', '122334545', '03163881640', 0, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(79, 'Abdllah', '122334545', '03163881640', 0, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(80, 'Abdllah', '122334545', '03163881640', 0, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(81, 'Abdllah', '122334545', '03163881640', 0, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(82, 'Abdllah', '1233444', '03163881640', 0, '12/9/2022', 2021, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(83, 'Abdllah', '1233444', '03163881640', 0, '12/9/2022', 2021, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(84, 'Abdllah', '1233444', '03163881640', 0, '12/9/2022', 2021, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(85, 'Abdllah', '1233444', '03163881640', 0, '12/9/2022', 2021, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(86, 'Abdllah', 'mhamidshaikh@outlook.com', '03163881640', 123456, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(87, 'Abdllah', 'mhamidshaikh@outlook.com', '03163881640', 123456, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(88, 'Abdllah', 'mhamidshaikh@outlook.com', '03163881640', 123456, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(89, 'Abdllah', 'mhamidshaikh@outlook.com', '03163881640', 123456, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(90, 'Abdllah', 'abdullahkhan@gmail.com', '03163881640', 2147483647, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(91, 'Abdllah', 'abdullahkhan@gmail.com', '03163881640', 2147483647, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(92, 'hamid', 'hamidshaikhs095@gmail.com', '03163881640', 123456, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(93, 'hamid', 'hamidshaikhs095@gmail.com', '03163881640', 123456, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '2', 'shirt', 'best in quality', '16656077591.jpg', 'Shirts', 1, 3000, 3000),
(94, 'waqar', 'ayanbaba321@gmail.com', '03163881640', 2147483647, '12/9/2022', 25, 'unit #9 block E', 'hyderabad', 'sindh', 71000, '1', 'Denim jean', 'best in quality', '16656076342.jpg', 'Jeans', 1, 3000, 3000),
(95, 'CASH ON DELIEVERY', 'VISA', '03163881640', 0, '12/9/2022', 2021, 'unit #9 block E', 'hyderabad', 'sindh', 71000, 'shoes', 'joggers', 'greyf,ito;lito76eruig;oitidlr8', '1667585304item-06.jpg', 'shoes', 1, 3000, 3000),
(96, 'Abdllah', 'hamidshaikhs095@gmail.com', '03163881640', 2147483647, '12/9/2022', 2021, 'unit #9 block E', 'hyderabad', 'sindh', 71000, 'shoes', 'joggers', 'greyf,ito;lito76eruig;oitidlr8', '1667585304item-06.jpg', 'shoes', 1, 3000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `RoleType` varchar(50) NOT NULL,
  `V_Code` varchar(20) NOT NULL,
  `pPassword` varchar(50) NOT NULL,
  `verify` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `UserName`, `Name`, `Email`, `RoleType`, `V_Code`, `pPassword`, `verify`) VALUES
(1, 'Hamid12', 'Hamid', 'hamidshaikhs095@gmail.com', 'Admin', '56545', '12345', 1),
(2, 'ali12', 'alikhan', 'ali12@gmail.com', 'User', '6a5f9e', '12345', 0),
(5, 'uneeb12', 'uneeb', 'uneeb@gmail.com', 'User', '364bd2', '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productorder`
--
ALTER TABLE `productorder`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `productorder`
--
ALTER TABLE `productorder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
