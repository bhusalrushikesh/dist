-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 03:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencyinfo`
--

CREATE TABLE `agencyinfo` (
  `aname` varchar(20) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pass` varchar(16) DEFAULT NULL,
  `cpass` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agencyinfo`
--

INSERT INTO `agencyinfo` (`aname`, `contact`, `address`, `city`, `state`, `email`, `pass`, `cpass`) VALUES
('Lux Auto', 2147483647, 'F Street Balewadi', 'PCMC', 'MH', 'rent@luxauto.com', 'luxauto123', 'luxauto123'),
('Rento', 2147483647, '16 No Baner', 'Nashik', 'MH', 'rent@rento.com', 'rento123', 'rento123'),
('Rapido', 1234567891, '33 Silicon Valley', 'Banglore', 'Telangana', 'rent@rapido.com', 'rapido123', 'rapida123');

-- --------------------------------------------------------

--
-- Table structure for table `cardata`
--

CREATE TABLE `cardata` (
  `name` varchar(10) DEFAULT NULL,
  `model` varchar(10) DEFAULT NULL,
  `capacity` int(36) DEFAULT NULL,
  `pnumber` varchar(20) DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `status` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardata`
--

INSERT INTO `cardata` (`name`, `model`, `capacity`, `pnumber`, `rate`, `status`) VALUES
('Tata', 'Safari', 7, 'MH12CD1111', 500, 0),
('Tata', 'Nan0', 4, 'GJ05FF2022', 200, 0),
('Mahindra', 'Thar', 5, 'DL01CD5545', 550, 0);

-- --------------------------------------------------------

--
-- Table structure for table `custinfo`
--

CREATE TABLE `custinfo` (
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pass` varchar(16) DEFAULT NULL,
  `cpass` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custinfo`
--

INSERT INTO `custinfo` (`fname`, `lname`, `address`, `city`, `state`, `email`, `pass`, `cpass`) VALUES
('rushi', 'bhusal', '28 fashion street', 'Pune', 'MH', 'rushi@gmail.com', 'password', 'password'),
('Amit', 'Bhuse', '20 Hirawadi', 'Nashik', 'MH', 'amit@gmail.com', 'amit123', 'amit123'),
('Sushant', 'Kumbhar', '20 Street Right', 'Pandharpur', 'MH', 'sushant@gmail.com', 'sushant', 'sushant'),
('Pratik', 'Mhaske', '19 NAgar', 'A Nagar', 'MH', 'pratik@gmail.com', 'pratik123', 'pratik123'),
('Mukund', 'Pokhale', '16 No Baner', 'Beed', 'MH', 'mukund@gmail.com', 'mukumd', 'mukumd'),
('Pratik', 'Mhaske', '19 NAgar', 'A Nagar', 'MH', 'pratik@gmail.com', 'pratik', 'pratik123'),
('Bhusahan', 'Varma', '33 nagpur', 'Nagpur', 'MH', 'bhusal@gmail.com', 'bhushan', 'bhushan'),
('a', 'b', 'c', 'd', 'e', 's', 'g', 'g'),
('a', 'b', 'c', 'd', 'e', 's', 'j', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `logincred`
--

CREATE TABLE `logincred` (
  `uname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logincred`
--

INSERT INTO `logincred` (`uname`, `pass`) VALUES
('rushi@gmail.com', 'password'),
('vikas@gmail.com', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `sam`
--

CREATE TABLE `sam` (
  `roll` int(10) DEFAULT NULL,
  `adate` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sam`
--

INSERT INTO `sam` (`roll`, `adate`) VALUES
(2, '2022-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `sample1`
--

CREATE TABLE `sample1` (
  `arrivaldate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sample1`
--

INSERT INTO `sample1` (`arrivaldate`) VALUES
('2022-11-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`id`) VALUES
(1),
(2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
