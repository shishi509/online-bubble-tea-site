-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 01:53 AM
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
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `tea` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `sugar` varchar(255) NOT NULL,
  `id` int(100) NOT NULL,
  `toppings` varchar(255) NOT NULL,
  `Ntoppings` int(11) NOT NULL,
  `unitprice` float(12,2) NOT NULL,
  `quantity` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`tea`, `size`, `sugar`, `id`, `toppings`, `Ntoppings`, `unitprice`, `quantity`) VALUES
('Honey Milk Tea', 'L', '25% Sugar', 393, 'Jelly/', 1, 4.20, 1),
('Assam Black Tea', 'L', '50% Sugar', 400, 'Grass Jelly/', 1, 4.20, 1),
('Honey Milk Tea', 'L', '50% Sugar', 401, 'Grass Jelly/', 1, 4.20, 1),
('Honey Milk Tea', 'M', '25% Sugar', 404, 'Jelly/', 1, 3.80, 1),
('KOI Cafe', 'L', '50% Sugar', 405, 'Grass Jelly/', 1, 4.20, 1),
('Chocolate Milk Tea', 'L', '50% Sugar', 406, 'Grass Jelly/', 1, 4.20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `category` varchar(255) NOT NULL,
  `price` float(4,2) NOT NULL,
  `prodid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`category`, `price`, `prodid`) VALUES
('S', 2.80, 1),
('M', 3.50, 2),
('L', 4.20, 3),
('Bubbles', 0.30, 4);

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

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(100) NOT NULL,
  `type_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_title`) VALUES
(1, 'Tea'),
(2, 'Milk Tea'),
(3, 'Bubble'),
(4, 'Handmade Cafe'),
(5, 'Fruit'),
(6, 'Macchiato');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'shishi509', 'Shishi509'),
(9, 'shishi001', 'Shishi001'),
(10, 'shishi002', 'Shishi002'),
(11, 'shishi001', 'Shishi001'),
(12, 'shishi002', 'Shishi002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`prodid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`tea_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=407;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `prodid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `tea_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
