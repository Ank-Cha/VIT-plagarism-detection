-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 16, 2018 at 12:25 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intra_vit`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_login`
--

DROP TABLE IF EXISTS `stud_login`;
CREATE TABLE IF NOT EXISTS `stud_login` (
  `Reg_No` varchar(15) NOT NULL,
  `Passwrd` varchar(15) NOT NULL,
  PRIMARY KEY (`Reg_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_login`
--

INSERT INTO `stud_login` (`Reg_No`, `Passwrd`) VALUES
('17BCE0778', 'qwerty'),
('17BEI0003', 'Sharan');

-- --------------------------------------------------------

--
-- Table structure for table `stud_reg`
--

DROP TABLE IF EXISTS `stud_reg`;
CREATE TABLE IF NOT EXISTS `stud_reg` (
  `Reg_No` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_reg`
--

INSERT INTO `stud_reg` (`Reg_No`, `Name`) VALUES
('17BCE0778', 'Ankush'),
('17BEI0003', 'Sharan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
