-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 07:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dost_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `officer_record`
--

CREATE TABLE `officer_record` (
  `ID` int(11) NOT NULL,
  `DOC_TYPE` text DEFAULT NULL,
  `DOC_CATEG` text DEFAULT NULL,
  `DOC_TITLE` text DEFAULT NULL,
  `DOC_DESC` text DEFAULT NULL,
  `ATTACH` text DEFAULT NULL,
  `CREATED_BY_DESIG` text DEFAULT NULL,
  `CREATED_BY_ROLE` text DEFAULT NULL,
  `CREATED_BY_EMAIL` text DEFAULT NULL,
  `UPDATED_BY_NAME` text DEFAULT NULL,
  `UPDATED_BY_DESIG` text DEFAULT NULL,
  `UPDATED_BY_ROLE` text DEFAULT NULL,
  `UPDATED_BY_EMAIL` text DEFAULT NULL,
  `DATE_CREATED` date DEFAULT NULL,
  `DATE_UPDATED` date DEFAULT NULL,
  `FORWARD_TO_NAME` text DEFAULT NULL,
  `FORWARD_TO_ROLE` text DEFAULT NULL,
  `FORWARD_TO_DESIG` text DEFAULT NULL,
  `FORWARD_TO_EMAIL` text DEFAULT NULL,
  `ACTION` text DEFAULT NULL,
  `MESSAGE` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer_record`
--

INSERT INTO `officer_record` (`ID`, `DOC_TYPE`, `DOC_CATEG`, `DOC_TITLE`, `DOC_DESC`, `ATTACH`, `CREATED_BY_DESIG`, `CREATED_BY_ROLE`, `CREATED_BY_EMAIL`, `UPDATED_BY_NAME`, `UPDATED_BY_DESIG`, `UPDATED_BY_ROLE`, `UPDATED_BY_EMAIL`, `DATE_CREATED`, `DATE_UPDATED`, `FORWARD_TO_NAME`, `FORWARD_TO_ROLE`, `FORWARD_TO_DESIG`, `FORWARD_TO_EMAIL`, `ACTION`, `MESSAGE`) VALUES
(1, ' Financial Reports', 'This is the FR for TKDL project.', 'Internal', 'doc1.docx', 'Renante Bahala', 'Sr. SRS', 'Administrator', 'rgbahala@pchrd.dost.gov.ph', 'rgbahala@pchrd.dost.gov.ph', 'Sr. SRS ', 'Manager', 'kdsoldevilla@pchrd.dost.gov.ph', '2018-08-01', '2018-08-27', 'Mohamad Faidz Ubpon', 'Record Officer', 'SRS 2', 'muubpon@pchrd.dost.gov.ph', 'Uploaded fr1.docx', 'Please upload attachment.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officer_record`
--
ALTER TABLE `officer_record`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officer_record`
--
ALTER TABLE `officer_record`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
