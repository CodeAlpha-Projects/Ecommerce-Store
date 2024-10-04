-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 04:58 AM
-- Server version: 8.0.36
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zenith_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `SN` int NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(2000) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Reg_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`SN`, `First_Name`, `Last_Name`, `Phone`, `Email`, `Password`, `Reg_Date`) VALUES
(1, 'Ismael', 'Bett', '0727405667', 'kipkoechbettishamel@gmail.com', '@Bett1234', '2024-10-04 01:11:45');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `SN` int NOT NULL,
  `Product_Name` varchar(200) DEFAULT NULL,
  `Price` int DEFAULT NULL,
  `P_Image` varchar(200) DEFAULT NULL,
  `Quantity` int DEFAULT NULL,
  `Total` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`SN`, `Product_Name`, `Price`, `P_Image`, `Quantity`, `Total`) VALUES
(66, 'PS England Shoe', 3777, 'https://i.postimg.cc/8CmBZH5N/shoes.webp', NULL, NULL),
(71, 'Men Fashion shirt', 23333, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRVSGniXZQMuGpa_FfMRbQLRE2jnCHvIBaNQ&s', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `SN` int NOT NULL,
  `Customer_Name` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Product_Name` varchar(200) DEFAULT NULL,
  `Price` int DEFAULT NULL,
  `Order_Date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Order_Status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `SN` int NOT NULL,
  `P_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Category` varchar(2000) NOT NULL,
  `Price` int NOT NULL,
  `Stock` int DEFAULT NULL,
  `P_Image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`SN`, `P_Name`, `Category`, `Price`, `Stock`, `P_Image`) VALUES
(19, 'PS England Jacket', 'Clothing', 3000, NULL, 'https://i.postimg.cc/76X9ZV8m/Screenshot_from_2022-06-03_18-45-12.png'),
(20, 'PS England Shirt', 'Clothing', 4555, NULL, 'https://i.postimg.cc/j2FhzSjf/bs2.png'),
(21, 'PS England Shoez', 'shoes', 777, NULL, 'https://i.postimg.cc/QtjSDzPF/bs3.png'),
(26, 'Men Fashion shirt', 'Clothing', 23333, NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRVSGniXZQMuGpa_FfMRbQLRE2jnCHvIBaNQ&s');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SN` int NOT NULL,
  `P_Name` varchar(100) DEFAULT NULL,
  `Price` int DEFAULT NULL,
  `Sale_Date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SN` int NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Reg_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SN`, `First_Name`, `Last_Name`, `Phone`, `Email`, `Password`, `Reg_Date`) VALUES
(1, 'Ismael', 'Bett', '0727405667', 'kipkoechbettishmael@gmail.com', '@Bett2209', '2024-10-04 01:05:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `Name` (`P_Name`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
