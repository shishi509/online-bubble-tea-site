-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 05:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `work_notes`
--

CREATE TABLE `work_notes` (
  `note_id` int(99) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `note` text NOT NULL,
  `datetime` datetime NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_notes`
--

INSERT INTO `work_notes` (`note_id`, `title`, `category`, `image`, `note`, `datetime`, `keywords`) VALUES
(6, 'Joined OT group and created a notepad to keep work notes', '11', '', '<p>Today I joined the OT group. The project name is Tyche and the group name is Optimus. We spent a long time coming up with a list of names including Baymax, Mulan, Gege, Mija, Optimus, Kori, Apex and so on. At the end of the day, we picked Optimus as it was proven more popular by the people passing by our room.</p>\r\n<p>At the start of the day, I farewelled with my ET team and moved to the war room with a laptop. We had a daily meeting at 11.30 and quickly made a task board with goals, backlog, in-progress and done rows with a few items generated. Then we brainstormed the data sources that we can get for creating personas. Then the PDs started querying data from database; Lorraine, Raymond and I tried to get some information from Google Analytics. I soon realized that there are some issues with GA and the data can not be trusted. We will look into that tomorrow. From 5 to 6, I attended the PHP CoP and Wei Ket taught us about lavarel and routing and so on which I do not really follow. I think I will learn that when making the bubble tea website with our bubble tea team.</p>\r\n<p>In the evening, I suddenly thought that it would be a nice to keep track of our items and activities in the OT group as well as practising my English writing skills. Thus I came up with the idea of taking notes using a notepad I write in localhost. I am not very sure about the security of localhost, thus I will just write about some progresses, reflections, learning and keep down some good links here. It can be handy for my daily work. After some time, I can look back my journey and also look up things quickly.</p>', '2016-09-29 17:01:21', 'notepad, first day, Optimus, php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `work_notes`
--
ALTER TABLE `work_notes`
  ADD PRIMARY KEY (`note_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `work_notes`
--
ALTER TABLE `work_notes`
  MODIFY `note_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
