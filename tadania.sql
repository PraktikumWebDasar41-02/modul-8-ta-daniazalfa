-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 10:54 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tadania`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `hobi` varchar(25) NOT NULL,
  `genre` varchar(25) NOT NULL,
  `wisata` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`nim`, `nama`, `tgl_lahir`, `email`, `kelas`, `hobi`, `genre`, `wisata`) VALUES
('6701126251', 'zalfa', '1998-09-19', 'daniazalfa65@yahoo.com', 'D3MI4101', 'nyanyi', 'Anime', 'Bali'),
('670117001', 'zalfadania', '1997-01-08', 'zalfa_dania@yahoo.co.id', 'D3MI4103', 'Berenang, musik', 'Anime, drama', 'Bali, Tanjungselor'),
('6701174129', 'DANIA', '1111-12-11', 'daniazalfa@gmail.com', 'D3MI4102', 'Nonton', 'Thriller', 'Bali'),
('6701174234', 'ifa', '1998-11-02', 'daniazalfa65@yahoo.com', 'D3MI4102', 'musik, nyanyi', 'drama', 'Tanjungselor, Lombok'),
('6701174321', 'da', '2111-12-27', 'daniazalfa@gmail.com', 'D3MI4104', 'Berenang', 'Anime', 'Tanjungselor, jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('dania', '6701174129');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
