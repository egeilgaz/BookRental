-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2020 at 12:51 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edusisco`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Id` int(11) NOT NULL,
  `BookName` varchar(50) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `photo` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `BookName`, `Author`, `photo`) VALUES
(1, 'Suc ve Ceza', 'Fyodor Dostoyevski', ''),
(2, 'Sefiller', 'Victor Hugo', ''),
(3, 'Anna Karenina', 'Ley Tolstoy', ''),
(4, 'Vadideki Zambak', 'Honoré de Balzac', ''),
(5, 'Notre Dame’ın Kamburu', 'Victor Hugo', ''),
(6, 'Aşk ve Gurur', 'Jane Austen', ''),
(7, 'Romeo ve Juliet', 'William Shakespeare', ''),
(8, 'Genç Werther’in Acıları', 'Johann Wolfgang Von Goethe', ''),
(9, 'Gazap Üzümleri', 'John Steinbeck', ''),
(10, 'Madame Bovary', 'Gustave Flaubert', ''),
(18, 'Game Of Thrones Kralların Çarpışması', 'George R. R. Martin', 0x303030303030303337363838332d312e6a7067),
(19, 'Zamanın Kısa Tarihi', 'Stephen Hawking ', 0x7a616d616e696e2d6b6973612d7461726968692d333930363233382d35382d4f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `renters`
--

CREATE TABLE `renters` (
  `Id` int(11) NOT NULL,
  `RenterName` varchar(50) NOT NULL,
  `RenterSurname` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `renters`
--

INSERT INTO `renters` (`Id`, `RenterName`, `RenterSurname`, `Date`) VALUES
(8, 'Bİlgehan', 'Kanatlı', '2020-04-16'),
(4, 'Melahat', 'Kanatlı', '2020-05-09'),
(2, 'Ege', 'Ilgaz', '2020-01-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
