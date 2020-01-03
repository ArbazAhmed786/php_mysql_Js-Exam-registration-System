-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 09:46 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `email`, `password`) VALUES
('anitha', 'anitha12@gmail.com', '123456'),
('arbaz ahmed', 'arbazcs786@gmail.com', 'admin'),
('basavaraju', 'basava123@gmail.com', '9740846126'),
('hemanth', 'hemanthkumar007@gmail.com', 'hema'),
('Hemanth kumar', 'hemanthkumarvc@gmail.com', 'hemanth'),
('HOD', 'hodcs@gmail.com', 'cshod'),
('jayanth', 'jaypark@gmail.com', 'junaid'),
('junaid', 'junaid@gmail.com', 'junaid'),
('junaid', 'junaidcs@gmail.com', 'admin'),
('Kshitij', 'kshitijraman2001@gmail.com', '6362876810'),
('poojitha', 'poojitha@gmail.com ', '123456'),
('praveen Kumar', 'praveen34@gmail.com', '123456'),
('savitha', 'savitha@gmail.com', '123456'),
('sss', 'sss@gmail', 'sss'),
('thulase', 'thulase66@gmail.com', '654321'),
('vvv', 'vvv@gmail', 'vv'),
('yaseen', 'yaseen@gmail.com', 'aaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(25) NOT NULL,
  `usn` varchar(50) NOT NULL,
  `challan` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `ph` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `lname`, `bday`, `gender`, `usn`, `challan`, `email`, `ph`, `Password`, `confirm_password`) VALUES
('ASdasd', 'asdasd', '0000-00-00', 'on', 'ibm0578', '5986852157865', 'arbaz@78ygbnf', '1111', '', 'qqqqq'),
('Arbaz', 'Ahmed', '0000-00-00', 'on', 'ibmcs009', '2019856322', 'Arbazcs786@gmail.com', '6361389456', '', 'asasas'),
('yaseen', 'ahmed', '0000-00-00', 'on', '1BM19000', '201900001630', 'yaseenmd@bmsce', '9108735020', '', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `usn` (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
