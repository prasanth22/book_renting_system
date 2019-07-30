-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 12:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `author` varchar(30) NOT NULL,
  `gener` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `cover_page` varbinary(1000) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author`, `gener`, `description`, `cover_page`, `cost`) VALUES
(2, 'The Story Of My Experiments With Truth', 'M.K.Gandhi', 'Biographies and Auto Biographies', 'This is an auto biography of gandhi', 0x42494f2d382e6a7067, 20),
(3, 'Revolution 2020', 'Chetan bhagat', 'Literature and Fiction', 'Nice Novel ', 0x4c49542d31392e6a7067, 10),
(5, 'Harry potter & The goblet of fire', 'J.K.Rowling', 'Literature and Fiction', 'Nice Novel ', 0x4c49542d33332e6a7067, 15),
(6, 'Your Dreams Are Mine Now', 'Ravinder singh', 'Literature and Fiction', 'Nice Novel ', 0x4c49542d32342e6a7067, 15),
(7, 'Till The Last Breath', 'Durjoy Datta', 'Literature and Fiction', 'Novel', 0x4c49542d31352e6a7067, 10),
(8, 'I Am Malala', 'malala yousufzai', 'Biographies and Auto Biographies', 'this is an auto biography of malala', 0x42494f2d362e6a7067, 15),
(9, 'Wings Of Fire ', 'A.P.J.Abdul Kalam', 'Biographies and Auto Biographies', 'This is an auto biography of A.P.J.Abdul kalam', 0x42494f2d312e6a7067, 20),
(10, 'LOL', 'Rahul Srinivasan', 'Literature and Fiction', 'Nice book', 0x4c49542d32312e6a7067, 10),
(11, 'Getting a Coding Job for Dummies', 'Nikhil Abraham', 'Academic and Professional', 'nice book for job interview', 0x4143412d312e6a7067, 15),
(12, 'IIT-Foundation for Class 10', 'GKPs', 'Entrance Exam', 'nice book IIT foundation ', 0x4143412d322e6a7067, 15),
(13, '365 Bedtime Stories', '', 'Children and Teens', 'good collection of stories', 0x4348494c442d312e6a7067, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `User_Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `Password`, `User_Id`) VALUES
('prasanth22', 'king@22', 1),
('', 'root', 2),
('', 'root', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
