-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 06:57 PM
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
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `email`, `password`) VALUES
('Soluta saepe ex est', 'jytomamyk@mailinator.com', 'Pa$$w0rd!'),
('Soluta saepe ex est', 'jytomamyk@mailinator.com', 'Pa$$w0rd!'),
('Lani Sri Agustin', 'lanisriagustin137@gmail.com', '12345'),
('lanisa', 'admin@gmail.com', '123'),
('kim', 'kim.lanisaa@gmail.com', '12345'),
('Est in qui nulla eiu', 'byvem@mailinator.com', 'Pa$$w0rd!'),
('Est in qui nulla eiu', 'byvem@mailinator.com', 'Pa$$w0rd!'),
('Ut consequuntur ad N', 'zarozefed@mailinator.com', 'Pa$$w0rd!'),
('Ut consequuntur ad N', 'zarozefed@mailinator.com', 'Pa$$w0rd!'),
('Ut consequuntur ad N', 'zarozefed@mailinator.com', 'Pa$$w0rd!'),
('Non non ad cillum no', 'vecu@mailinator.com', 'Pa$$w0rd!'),
('Non non ad cillum no', 'vecu@mailinator.com', 'Pa$$w0rd!'),
('Cillum voluptates qu', 'luzygyg@mailinator.com', 'Pa$$w0rd!'),
('Cillum voluptates qu', 'luzygyg@mailinator.com', 'Pa$$w0rd!'),
('Voluptatum eos qui ', 'lunul@mailinator.com', 'Pa$$w0rd!'),
('Trf', 'admin@laundry.com', 'qwerty'),
('Quia aliquam consequ', 'zokitoj@mailinator.com', 'Pa$$w0rd!'),
('Sed sed eius quibusd', 'sefy@mailinator.com', 'Pa$$w0rd!'),
('Tempor ad explicabo', 'fywap@mailinator.com', 'Pa$$w0rd!'),
('Tempor ad explicabo', 'fywap@mailinator.com', 'Pa$$w0rd!'),
('Fugiat aperiam labor', 'wymar@mailinator.com', 'Pa$$w0rd!'),
('Aspernatur reprehend', 'rohop@mailinator.com', 'Pa$$w0rd!'),
('jamal', 'lelang@test.com', 'qwe'),
('Corporis fugiat et r', 'dopegyr@mailinator.com', 'Pa$$w0rd!'),
('Corporis fugiat et r', 'dopegyr@mailinator.com', 'Pa$$w0rd!'),
('yu', 'yu@gmail.com', 'yu'),
('Lani Sri Agustin', 'lanisriagustin137@gmail.com', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
