-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 01:56 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bubble tea`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `tea` varchar(255) NOT NULL,
  `tea_type` varchar(255) NOT NULL,
  `tea_des` text NOT NULL,
  `tea_keywords` text NOT NULL,
  `tea_image` text NOT NULL,
  `tea_id` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`tea`, `tea_type`, `tea_des`, `tea_keywords`, `tea_image`, `tea_id`) VALUES
('Honey Green Tea', '1', '<p>A delicious source of antioxidants and other phytonutrients.</p>', 'green tea honey fresh low calories', 'greentea.jpg', 2),
('Yakult Green Tea', '1', '<p>Helps digestive system and contains antioxidant.</p>', 'Yakult Green Tea digestive antioxidant', 'yakulttea.jpg', 3),
('Assam Black Tea ', '1', '<p>Improves blood circulation and oral health.</p>', 'blood circulation Assam Black Tea oral health', 'blacktea.jpg', 4),
('Hazelnut Milk Tea ', '2', '<p>Low in sodium and high in healthy fats</p>', 'Hazelnut Milk Tea healthy fats', 'hazelnuttea.jpg', 7),
('Chocolate Milk Tea', '2', '<p>Improve blood flow, help lower the blood pressure.</p>', 'blood pressure blood flow Chocolate Milk Tea', 'choctea.jpg', 8),
('Honey Milk Tea', '2', '<p>I used to drink hot water almost a litre in the morning.</p>', 'Honey Milk Tea', 'honeytea.jpg', 9),
('Konjac Jelly Milk Tea', '2', '<p>I used to drink hot water almost a litre in the morning.</p>', 'Konjac Jelly Milk Tea', 'kongjacjelly.jpg', 10),
('Black Tea Macchiato', '6', '<p>I used to drink hot water almost a litre in the morning.</p>', 'Black Tea Macchiato ', 'blackmacchiato.jpg', 11),
('Green Tea Macchiato', '6', '<p>I used to drink hot water almost a litre in the morning.</p>', 'Green Tea Macchiato', 'greenmacchiato.jpg', 12),
('KOI Cafe', '4', '<p>I used to drink hot water almost a litre in the morning.</p>', 'KOI Cafe ', 'koicafe.png', 13),
('Peach Green Tea', '5', '<p>I used to drink hot water almost a litre in the morning.</p>', 'Peach Green Tea ', 'peachgreen.jpg', 14),
('Honey Aloe Vera', '3', '<p>I used to drink hot water almost a litre in the morning.</p>', 'Honey Aloe Vera', 'honeyaloevera.jpg', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`tea_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `tea_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
