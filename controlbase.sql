-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 يوليو 2021 الساعة 23:31
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base`
--

-- --------------------------------------------------------

--
-- بنية الجدول `controlbase`
--

CREATE TABLE `controlbase` (
  `control_forward` varchar(10) NOT NULL,
  `control_right` varchar(10) NOT NULL,
  `control_left` varchar(10) NOT NULL,
  `control_stop` varchar(10) NOT NULL,
  `control_backward` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `controlbase`
--

INSERT INTO `controlbase` (`control_forward`, `control_right`, `control_left`, `control_stop`, `control_backward`) VALUES
('', '', '', 'stop', ''),
('', '', '', 'stop', ''),
('forward', '', '', '', ''),
('forward', '', '', '', ''),
('', '', '', 'stop', ''),
('forward', '', '', '', ''),
('', '', 'left', '', ''),
('', '', '', '', 'backward'),
('', '', '', '', 'backward'),
('', '', '', '', 'backward'),
('', 'right', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
