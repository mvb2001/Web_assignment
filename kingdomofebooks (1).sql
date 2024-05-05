-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 05, 2024 at 05:13 PM
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
-- Database: `kingdomofebooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Telephone_Number` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Issues` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`First_Name`, `Last_Name`, `Telephone_Number`, `Email`, `Issues`) VALUES
('Mithila', 'Rasanjith', 718657936, 'mithilarasanjith@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `faq_table`
--

CREATE TABLE `faq_table` (
  `Username` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `FAQs` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `Username` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments_tbl`
--

CREATE TABLE `payments_tbl` (
  `PID` int(11) NOT NULL,
  `Card_Number` int(16) NOT NULL,
  `Owner_Name` varchar(40) NOT NULL,
  `Expire_Date` varchar(6) NOT NULL,
  `Security_Code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments_tbl`
--

INSERT INTO `payments_tbl` (`PID`, `Card_Number`, `Owner_Name`, `Expire_Date`, `Security_Code`) VALUES
(1, 2147483647, 'mahima', '12/24', '324');

-- --------------------------------------------------------

--
-- Table structure for table `signup_tbl`
--

CREATE TABLE `signup_tbl` (
  `SID` int(11) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Age` int(5) NOT NULL,
  `Telephone_Number` char(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Re_Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_tbl`
--

INSERT INTO `signup_tbl` (`SID`, `First_Name`, `Last_Name`, `NIC`, `Age`, `Telephone_Number`, `Email`, `Password`, `Re_Password`) VALUES
(1, 'Mahima', 'Bhashitha', '200250604857', 22, '751144775', 'mahimabhashitha2001@gmail.com', 'Mahima@123', 'Mahima@123'),
(2, 'Mithila', 'Rasanjith', '200200301293', 22, '718657936', 'mithilarasanjith@gmail.com', '12345', '12345'),
(3, 'Lahiruni', 'Meegama', '200279700171', 22, '716363643', 'lahihansi2323@gmail.com', '123456', '123456'),
(4, 'Deeraka', 'Bihimuthu', '200236301950', 22, '714955645', 'deeraka@gmail.com', '12345', '12345'),
(5, 'Kemmi', 'Pujani', '200276101040', 22, '742348993', 'kethmi@gmail.com', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `payments_tbl`
--
ALTER TABLE `payments_tbl`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `signup_tbl`
--
ALTER TABLE `signup_tbl`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments_tbl`
--
ALTER TABLE `payments_tbl`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup_tbl`
--
ALTER TABLE `signup_tbl`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
