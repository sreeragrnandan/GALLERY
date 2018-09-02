-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 08:08 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `photos` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `album_id`, `name`, `thumb`, `photos`) VALUES
(1, 35, 'album/1533647605/6947c5b032229859e9c0a4c19aecc556.jpg', 'album/1533647605/thumb/14cf88dbc71a888763cace45cea9b3e4_thumbnail.jpg', 'album/1533647605/6947c5b032229859e9c0a4c19aecc556.jpg'),
(2, 35, 'album/1533647605/552240a68e749749f0f5a02aad65badf.jpg', 'album/1533647605/thumb/6fc9f37f353fbda4f382dffa5e7786b3_thumbnail.jpg', 'album/1533647605/552240a68e749749f0f5a02aad65badf.jpg'),
(3, 35, 'album/1533647605/02360b34c48463fa41972b1b2bc5cecc.jpg', 'album/1533647605/thumb/04b5b7258e5e2dbd55def0f5ded99de1_thumbnail.jpg', 'album/1533647605/02360b34c48463fa41972b1b2bc5cecc.jpg'),
(5, 36, 'album/1535910444/6ea8195190724154581dc44b7471ac79.jpg', 'album/1535910444/thumb/96f8767d5f9fc34cb33b5b4188ddad68_thumbnail.jpg', 'album/1535910444/6ea8195190724154581dc44b7471ac79.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
