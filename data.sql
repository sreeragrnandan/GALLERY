-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 09:02 PM
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
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `Folder` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `caption` varchar(200) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `thumb` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `Folder`, `name`, `caption`, `pic`, `thumb`) VALUES
(51, '1538936361', 'Einstein Photos', '              Some rear photos of Albert  Einstein', 'album/1538936361/Einstein Photos.jpg', 'album/1538936361/thumb/Einstein Photos_thumbnail.jpg'),
(52, '1538937040', 'THOR', 'PHOTOS FROM MOVIE THE THOR', 'album/1538937040/THOR.jpg', 'album/1538937040/thumb/THOR_thumbnail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `photos` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `album_id`, `thumb`, `photos`, `status`) VALUES
(6, 51, 'album/1538936361/thumb/755e28e4905c53203900d27fa05776ed_thumbnail.jpg', 'album/1538936361/83074afccb0a71605476e478d9227283.jpg', 'Active'),
(7, 51, 'album/1538936361/thumb/a0974fd7e956253524b4a76a5f3cbe01_thumbnail.JPG', 'album/1538936361/661aea43b9528a59ef6187e33b3be428.JPG', 'Active'),
(8, 51, 'album/1538936361/thumb/d8dc6753c7db2312214a218ad27fd0d8_thumbnail.jpg', 'album/1538936361/7b7788c4f2c7ea2147dd5c7bb6cb8b1f.jpg', 'Active'),
(9, 52, 'album/1538937040/thumb/91f6b9c10573a2b18b1525f6771b3ef9_thumbnail.jpg', 'album/1538937040/3da0b2d4641833ec710bb5ec91611ede.jpg', 'Active'),
(10, 52, 'album/1538937040/thumb/836b87612631ca6e6ad282cdf8776aa0_thumbnail.jpg', 'album/1538937040/2dd3246de9ced1e4cd9fab15d4c30e64.jpg', 'Active'),
(11, 52, 'album/1538937040/thumb/7cffb439d61c211d3c15a5333c0f446f_thumbnail.jpg', 'album/1538937040/2dd3246de9ced1e4cd9fab15d4c30e64.jpgc96fb75bfdb91212f9672ef7fa9e9205.jpg', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
