-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 01:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `C_ID` varchar(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`C_ID`, `Name`, `Email`, `Balance`) VALUES
('C01', 'Nikhil', 'nikhil@gmail.com', 120000),
('C02', 'Naveen', 'naveen@gmail.com', 50000),
('C03', 'Rajesh', 'rajesh@gmail.com', 60000),
('C04', 'Vidya', 'vidya@gmail.com', 40000),
('C05', 'Supreeth', 'supreeth@gmail.com', 75000),
('C06', 'Sowmya', 'sowmya@gmail.com', 120000),
('C07', 'Suprabha', 'suprabha@gmail.com', 90000),
('C08', 'Swathi', 'swathi@gmail.com', 55000),
('C09', 'Neha', 'neha@gmail.com', 55000),
('C10', 'Rashmi', 'rashmi@gmail.com', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Sender` text NOT NULL,
  `Receiver` text NOT NULL,
  `Amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Sender`, `Receiver`, `Amount`) VALUES
( 'Nikhil', 'Naveen', 5000),
('Nikhil', 'Rajesh', 10000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
