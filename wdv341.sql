-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 02:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdv341`
--

-- --------------------------------------------------------

--
-- Table structure for table `wdv341_events`
--

CREATE TABLE `wdv341_events` (
  `events_id` int(11) NOT NULL,
  `events_name` varchar(250) NOT NULL,
  `events_description` longtext NOT NULL,
  `events_presenter` varchar(100) NOT NULL,
  `events_date` date NOT NULL,
  `events_time` time NOT NULL,
  `events_date_inserted` date NOT NULL,
  `events_date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wdv341_events`
--

INSERT INTO `wdv341_events` (`events_id`, `events_name`, `events_description`, `events_presenter`, `events_date`, `events_time`, `events_date_inserted`, `events_date_updated`) VALUES
(1, 'WDV341 Intro PHP', 'Introduction to the PHP programming language used in web applications.', 'Jeff Gullion', '2024-10-01', '13:00:00', '2024-10-01', '2024-10-01'),
(2, 'WDV221 Intro JavaScript', 'Introduction to JavaScript and the Document Object Model.', 'Matt Hall', '2024-10-03', '18:00:00', '2024-10-01', '2024-10-01'),
(3, 'IT Career Fair', 'Career fair for Business and IT internship opportunities.', 'DMACC Career Center', '2024-09-26', '11:30:00', '2024-09-11', '2024-10-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wdv341_events`
--
ALTER TABLE `wdv341_events`
  ADD PRIMARY KEY (`events_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wdv341_events`
--
ALTER TABLE `wdv341_events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
