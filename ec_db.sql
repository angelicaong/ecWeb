-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 01:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ec_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `adminID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_profile`
--

INSERT INTO `admin_profile` (`adminID`, `userID`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cashier_profile`
--

CREATE TABLE `cashier_profile` (
  `cashierID` int(11) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier_profile`
--

INSERT INTO `cashier_profile` (`cashierID`, `userID`) VALUES
(1, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `con_account`
--

CREATE TABLE `con_account` (
  `con_accountID` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `con_adminID` int(11) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_mobileNum` varchar(11) NOT NULL,
  `con_balance` int(11) DEFAULT NULL,
  `con_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `con_account`
--

INSERT INTO `con_account` (`con_accountID`, `username`, `con_adminID`, `con_email`, `con_mobileNum`, `con_balance`, `con_status`) VALUES
(1, '20193', 1, '1213diner@gmail.com', '09777783279', 620, 'Active'),
(2, '20194', 2, 'cafearchive@gmail.com', '09777783279', 1550, 'Active'),
(3, '20192', 3, '3rdfloor@gmail.com', '09777783279', 0, 'Inactive'),
(4, '20191', 4, 'green@gmail.com', '09777783279', 0, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `con_adminprofile`
--

CREATE TABLE `con_adminprofile` (
  `con_adminID` int(11) NOT NULL,
  `con_adminFirstName` varchar(20) NOT NULL,
  `con_adminLastName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `con_adminprofile`
--

INSERT INTO `con_adminprofile` (`con_adminID`, `con_adminFirstName`, `con_adminLastName`) VALUES
(1, 'Hazel', 'Cruz'),
(2, 'Analiza', 'Mendez'),
(3, 'Cara', 'Hokkaido'),
(4, 'Jerry', 'Okinawa');

-- --------------------------------------------------------

--
-- Table structure for table `con_cashierprofile`
--

CREATE TABLE `con_cashierprofile` (
  `con_cashierID` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `con_accountID` int(11) NOT NULL,
  `con_cashierFirstName` varchar(20) NOT NULL,
  `con_cashierLastName` varchar(20) NOT NULL,
  `con_cashierStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `con_cashierprofile`
--

INSERT INTO `con_cashierprofile` (`con_cashierID`, `username`, `con_accountID`, `con_cashierFirstName`, `con_cashierLastName`, `con_cashierStatus`) VALUES
(1, '20234', 1, 'Amaya', 'Skye', 'Active'),
(2, '20241', 2, 'Ana', 'Dez', 'Active'),
(3, '20257', 3, 'Reno', 'Spread', 'Inactive'),
(4, '20254', 4, 'Century', 'Tuna', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `username` varchar(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`username`, `password`, `role`, `status`) VALUES
('16172000', '827ccb0eea8a706c4c34a16891f84e7b', 'cashier', 'Active'),
('16172001', '827ccb0eea8a706c4c34a16891f84e7b', 'cashier', 'Active'),
('17171630', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 'Active'),
('17171632', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 'Active'),
('17171696', '827ccb0eea8a706c4c34a16891f84e7b', 'student', 'Active'),
('18191002', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', 'Active'),
('20191', '827ccb0eea8a706c4c34a16891f84e7b', 'concessionaire-admin', 'Inactive'),
('20192', '827ccb0eea8a706c4c34a16891f84e7b', 'concessionaire-admin', 'Inactive'),
('20193', '827ccb0eea8a706c4c34a16891f84e7b', 'concessionaire-admin', 'Active'),
('20194', '827ccb0eea8a706c4c34a16891f84e7b', 'concessionaire-admin', 'Active'),
('20234', '827ccb0eea8a706c4c34a16891f84e7b', 'concessionaire-cashier', 'Active'),
('20241', '827ccb0eea8a706c4c34a16891f84e7b', 'concessionaire-cashier', 'Active'),
('20254', '827ccb0eea8a706c4c34a16891f84e7b', 'concessionaire-cashier', 'Inactive'),
('20257', '827ccb0eea8a706c4c34a16891f84e7b', 'concessionaire-cashier', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `con_accountID` int(11) DEFAULT NULL,
  `con_cashierID` int(11) DEFAULT NULL,
  `cashierID` int(11) DEFAULT NULL,
  `transaction_date` date DEFAULT NULL,
  `transaction_time` time DEFAULT NULL,
  `transaction_credit` int(11) DEFAULT NULL,
  `transaction_debit` int(11) DEFAULT NULL,
  `transaction_description` varchar(50) DEFAULT NULL,
  `transaction_refNum` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `userID` int(11) NOT NULL,
  `username` varchar(8) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileNum` varchar(11) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`userID`, `username`, `firstName`, `lastName`, `email`, `mobileNum`, `balance`) VALUES
(1, '17171696', 'Angelica', 'Ong', 'angelica.ong@ciit.edu.ph', '09777783279', 0),
(2, '17171632', 'Rissha', 'Alignay', 'rissha.alignay@ciit.edu.ph', '09777783279', 0),
(3, '17171630', 'Christine', 'Paez', 'christine.paez@ciit.edu.ph', '09777783279', 0),
(4, '18191002', 'Bryan', 'Yao', 'angelica.ong@ciit.edu.ph', '09777783279', 0),
(5, '16172000', 'Cashier', 'Yson', 'angelica.ong@ciit.edu.ph', '09777783279', 0),
(6, '16172001', 'Cashier2', 'Yamo', 'angelica.ong@ciit.edu.ph', '09777783279', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`adminID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `cashier_profile`
--
ALTER TABLE `cashier_profile`
  ADD PRIMARY KEY (`cashierID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `con_account`
--
ALTER TABLE `con_account`
  ADD PRIMARY KEY (`con_accountID`),
  ADD KEY `username` (`username`),
  ADD KEY `con_adminID` (`con_adminID`);

--
-- Indexes for table `con_adminprofile`
--
ALTER TABLE `con_adminprofile`
  ADD PRIMARY KEY (`con_adminID`);

--
-- Indexes for table `con_cashierprofile`
--
ALTER TABLE `con_cashierprofile`
  ADD PRIMARY KEY (`con_cashierID`),
  ADD KEY `username` (`username`),
  ADD KEY `con_accountID` (`con_accountID`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `con_accountID` (`con_accountID`),
  ADD KEY `con_cashierID` (`con_cashierID`),
  ADD KEY `cashierID` (`cashierID`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashier_profile`
--
ALTER TABLE `cashier_profile`
  MODIFY `cashierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `con_account`
--
ALTER TABLE `con_account`
  MODIFY `con_accountID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `con_adminprofile`
--
ALTER TABLE `con_adminprofile`
  MODIFY `con_adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `con_cashierprofile`
--
ALTER TABLE `con_cashierprofile`
  MODIFY `con_cashierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD CONSTRAINT `admin_profile_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user_profile` (`userID`);

--
-- Constraints for table `cashier_profile`
--
ALTER TABLE `cashier_profile`
  ADD CONSTRAINT `cashier_profile_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user_profile` (`userID`);

--
-- Constraints for table `con_account`
--
ALTER TABLE `con_account`
  ADD CONSTRAINT `con_account_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_info` (`username`),
  ADD CONSTRAINT `con_account_ibfk_2` FOREIGN KEY (`con_adminID`) REFERENCES `con_adminprofile` (`con_adminID`);

--
-- Constraints for table `con_cashierprofile`
--
ALTER TABLE `con_cashierprofile`
  ADD CONSTRAINT `con_cashierprofile_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_info` (`username`),
  ADD CONSTRAINT `con_cashierprofile_ibfk_2` FOREIGN KEY (`con_accountID`) REFERENCES `con_account` (`con_accountID`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user_profile` (`userID`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`con_accountID`) REFERENCES `con_account` (`con_accountID`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`con_cashierID`) REFERENCES `con_cashierprofile` (`con_cashierID`),
  ADD CONSTRAINT `transactions_ibfk_4` FOREIGN KEY (`cashierID`) REFERENCES `cashier_profile` (`cashierID`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login_info` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
