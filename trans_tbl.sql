-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 08:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordstrans_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `trans_tbl`
--

CREATE TABLE `trans_tbl` (
  `id` int(20) NOT NULL,
  `Ikinyarwanda` varchar(50) NOT NULL,
  `English` varchar(55) NOT NULL,
  `French` varchar(55) NOT NULL,
  `Kiswahili` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_tbl`
--

INSERT INTO `trans_tbl` (`id`, `Ikinyarwanda`, `English`, `French`, `Kiswahili`) VALUES
(0, 'kanda', 'press', 'presse', 'sukuma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trans_tbl`
--
ALTER TABLE `trans_tbl`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
