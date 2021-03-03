-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 06:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `ConfirmPassword` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `DateOfBirth` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Email`, `UserName`, `Password`, `ConfirmPassword`, `Gender`, `DateOfBirth`) VALUES
('abuhasnat', 'chahad3340301@gmail.com', 'Abuhasnat01', '1234abcd*', '1234abcd*', 'Male', '2021-03-04'),
('hasnatjelani', '19-39734-1@student.aiub.edu', 'chahad08', 'qwer1234*', 'qwer1234*', 'Male', '2021-03-17'),
('hasnatjelani', 'hasannayem1108@protonmail.com', 'chahad111111', 'pop123098*', 'pop123098*', 'Male', '2021-03-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
