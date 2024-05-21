-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 03:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtechsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinfo`
--

CREATE TABLE `bookinfo` (
  `sl` int(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `bookfile` varchar(100) NOT NULL,
  `bookcopy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookinfo`
--

INSERT INTO `bookinfo` (`sl`, `id`, `title`, `author`, `edition`, `categories`, `bookfile`, `bookcopy`) VALUES
(1, '1250773429', 'A Prayer for Owen Meany', 'John Irving', '3rd edition', 'Bildungsroman', '', '5'),
(2, '1250773563', 'A Tree Grows in Brooklyn', 'Betty Smith', '14th edition', 'semi-autobiographical ', '', '7'),
(3, '1250773888', 'The Alchemist', 'Paulo Coelho', '4th edition', 'Quest, adventure, fantasy', '', '3'),
(4, '1250773970', 'Get Real and Get In: How to Get Into the College of Your Dreams by Bei', 'Dr. Aviva Legatt', '3rd edition', 'Fiction', '', '22'),
(5, '1250773975', 'A Child Called \"It\" : One Child\'s Courage To Survive', 'elzer, David J', '2n edition', 'Fiction', '', '12'),
(6, '1250773980', 'I Know Why The Caged Bird Sings', 'Angelou, Maya', '9th edition\r\n', 'Autobiography, Biography', '', '9'),
(7, '1250773990', 'Aristotle and Dante Discover the Secrets of the Universe', 'Benjamin Alire Sáenz', '12th edition', 'Novel, Young adult fiction, Bildungsroman', '', '29');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `class`, `description`) VALUES
('1', 'bangla', '6', 'asda'),
('100', 'ict', '10', 'nice'),
('2', 'english', '8', 'asdsa'),
('60', 'C++', '9', 'good'),
('7', 'math', '8', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `password`) VALUES
('2', 'MD MOSTOFA HASIB', 'ff', 'ff', 'female', '2024-05-13', 'f'),
('2000', 'asdsad', 'asdas', 'sadasdas', 'female', '2024-05-16', '22222'),
('3', 'g', 'g', 'g', 'male', '2024-05-01', 'g'),
('96', 'aasd', 'adsa', 'asd', 'male', '2024-05-17', '5');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` varchar(20) NOT NULL,
  `notice` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `date`) VALUES
('1', 'no class today', '2024-05-17'),
('33', 'fdsfsdfsd', '2024-05-16'),
('5', 'event is comming soon tomorrow', '2024-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `fees` decimal(10,2) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL,
  `paid` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `password`, `address`, `class`, `section`, `roll`, `fees`, `amount`, `balance`, `paid`) VALUES
('2001', 'Nafiz', 'nafiz@gmail.com', '01743375744', 'male', '2024-05-02', '1', 'Dhaka', '10', 'B', '10', 2000.00, 4000.00, -2000.00, NULL),
('2002', 'doly', 'asdsadas', '01782212314', 'female', '2024-05-15', 'a', 'aa', '8', 'B', '20', 3000.00, 6000.00, -3000.00, NULL),
('2330', 'Akash', 'akash@gmail.com', '01743375744', 'male', '2024-05-02', '2', 'Dhaka', '7', 'B', '66', 4000.00, 9000.00, -5000.00, NULL),
('90', 'jak', 'jak@gmail.com', '01782212314', 'male', '2024-05-02', 'h', 'Dhaka', '7', 'B', '22', 2000.00, 8000.00, -6000.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `gender`, `dob`, `subject`, `password`) VALUES
('2004', 'nasum', 'b', 'b', 'male', '2024-05-10', 'Bangladesha and Global Study', 'b'),
('2005', 'akon', 'aasdasd', 'asadsd', 'female', '2024-05-08', 'Science', 'a'),
('2006', 'laky', 'ka@gmail.com', '0147566547', 'female', '2024-05-09', 'Math', '12345678@'),
('44', 'asdaaa', 'aa', 'sad', 'female', '2024-05-16', 'Bangladesha and Global Study', '00'),
('90', 'sdsad', 'asdsd', 'asd', 'male', '2024-05-16', 'Science', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
('1001', 'MD MOSTOFA HASIB', 'hasib@gmail.comaa', '12345678@', 'admin'),
('1002', 'MD MOSTOFA HASIB', 'hasibammostofahasib@gmail.com', '12345678@', 'admin'),
('1008', 'Rabi', 'rabi@gmail.com', '12345678@', 'admin'),
('2001', 'shimul', 'shimul@gmail.com', '12345678@', 'teacher'),
('3001', 'nafiz', 'nafiz@gmail.com', '12345678@', 'student'),
('4001', 'altaf', 'altaf@gmail.com', '12345678@', 'librarian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
