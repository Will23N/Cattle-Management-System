-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 09:43 AM
-- Server version: 8.0.22
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `code` mediumint NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `code`) VALUES
(1, 'William', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'nyanja59@gmail.com', 0),
(2, 'Chola', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'william.nyanja@cs.unza.zm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE `breed` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`id`, `name`) VALUES
(1, 'Angoni'),
(2, 'Barotse'),
(3, 'Tonga'),
(4, 'Baila'),
(5, 'Boran');

-- --------------------------------------------------------

--
-- Table structure for table `breeding`
--

CREATE TABLE `breeding` (
  `id` int NOT NULL,
  `cattleno` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `expected_date` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `breed_date` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `breed_status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breeding`
--

INSERT INTO `breeding` (`id`, `cattleno`, `type`, `expected_date`, `breed_date`, `breed_status`, `comments`) VALUES
(1, 'cat-tag-9550', 'Artificial Insemination', '20-06-2023', '13-09-2022', 'Observation', 'Waiting to see signs of any pregnancy'),
(2, 'cat-tag-5', 'Artificial Insemination', '24-07-2023', '24-10-2022', 'Success', 'The cow has shown signs of pregnancy'),
(3, 'cat-tag-10', 'Natural Insemination', '19-08-2023', '20-11-2022', 'Observation', 'Cow being monitored.'),
(4, 'cat-tag-22', 'Artificial Insemination', '08-07-2023', '09-10-2022', 'Failed', 'Showed no signs of pregnancy'),
(5, 'cat-tag-8', 'Natural Insemination', '21-06-2023', '20-09-2022', 'Success', 'Showed signs of pregnancy'),
(6, 'cat-tag-22', 'Artificial Insemination', '04-11-2022', '04-08-2023', 'Observation', 'Still observing cattle');

-- --------------------------------------------------------

--
-- Table structure for table `cattles`
--

CREATE TABLE `cattles` (
  `id` int NOT NULL,
  `cattleno` varchar(255) NOT NULL,
  `breed_id` int NOT NULL,
  `weight` varchar(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `arrived` varchar(10) NOT NULL,
  `remark` text NOT NULL,
  `health_status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cattles`
--

INSERT INTO `cattles` (`id`, `cattleno`, `breed_id`, `weight`, `img`, `gender`, `arrived`, `remark`, `health_status`) VALUES
(1, 'cat-tag-9550', 1, '520kg', 'uploadfolder/female angoni black.jpg', 'female', '07-09-2022', 'Black Female', 'active'),
(2, 'cat-tag-75', 1, '525kg', 'uploadfolder/male angoni black and white.jpg', 'male', '08-08-2022', 'Black and White ', 'active'),
(3, 'cat-tag-53', 2, '400kg', 'uploadfolder/brown barotse male.jpg', 'male', '15-09-2022', 'brown', 'active'),
(4, 'cat-tag-10', 2, '400 kg', 'uploadfolder/cow.jpg', 'female', '09-10-2022', 'Brown ', 'active'),
(5, 'cat-tag-22', 5, '460 kg', 'uploadfolder/female 2.jpg', 'female', '14-09-2022', 'Brown and White', 'active'),
(6, 'cat-tag-5', 1, '600 kg ', 'uploadfolder/female.jpg', 'female', '25-10-2022', 'Brown', 'active'),
(7, 'cat-tag-8', 1, '540 kg', 'uploadfolder/white and blavk female.jpg', 'female', '05-09-2022', 'White and Black', 'active'),
(8, 'cat-tag-35', 3, '440 kg ', 'uploadfolder/female 3.jpg', 'female', '25-08-2022', 'Black', 'active'),
(9, 'cat-tag-4', 5, '250 kg', 'uploadfolder/brown and white female.jpg', 'female', '02-09-2022', 'Mixture of brown and patches of white', 'sick'),
(10, 'cat-tag-31', 1, '120 kg', 'uploadfolder/white male calf.jpg', 'male', '18-11-2022', 'White calf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `feeding`
--

CREATE TABLE `feeding` (
  `id` int NOT NULL,
  `nocattle` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `feed` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `quantity` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `feed_time` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feeding`
--

INSERT INTO `feeding` (`id`, `nocattle`, `feed`, `quantity`, `feed_time`, `comments`) VALUES
(1, '3', 'Dry Grass', '60 - 75 kg', '09 : 00 Hours', 'Should be fed again in the afternoon'),
(2, '8', 'Dry Grass', '160 - 200 kg', '08 : 00 Hours', 'Note the consumption.'),
(3, '4', 'Dry Grass', '120 - 150 kg', '12 : 00 Hours', 'Check if all cattle are feeding and note if some are sick');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int NOT NULL,
  `cattleno` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `identify_date` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `start_date` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `end_date` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `next_date` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dose` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comments` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `cattleno`, `identify_date`, `start_date`, `end_date`, `next_date`, `type`, `dose`, `comments`) VALUES
(1, 'cat-tag-75', '13-09-2022', '16-09-2022', '30-09-2022', '20-09-2022', 'De-wormer', '5ml/kg', 'Next dosage in 2 days time'),
(2, 'cat-tag-31', '20-11-2022', '21-11-2022', '26-11-2022', '22-11-2022', 'Antibiotic', '10 mg/kg', 'Scheduled medication 3-5 days.'),
(3, 'cat-tag-53', '10-10-2022', '12-10-2022', '19-10-2022', '14-10-2022', 'De-wormer', '5ml/kg', 'Showing signs of improvement');

-- --------------------------------------------------------

--
-- Table structure for table `pregnant`
--

CREATE TABLE `pregnant` (
  `id` int NOT NULL,
  `cattle_no` varchar(50) NOT NULL,
  `date` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `breed` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pregnant`
--

INSERT INTO `pregnant` (`id`, `cattle_no`, `date`, `breed`) VALUES
(1, 'cat-tag-5', '20-11-2022', 'Angoni'),
(2, 'cat-tag-8', '20-11-2022', 'Angoni'),
(3, 'cat-tag-5', '25-11-2022', 'Angoni');

-- --------------------------------------------------------

--
-- Table structure for table `quarantine`
--

CREATE TABLE `quarantine` (
  `id` int NOT NULL,
  `cattle_no` varchar(50) NOT NULL,
  `date_q` varchar(10) NOT NULL,
  `reason` text NOT NULL,
  `breed` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quarantine`
--

INSERT INTO `quarantine` (`id`, `cattle_no`, `date_q`, `reason`, `breed`) VALUES
(1, 'cat-tag-75', '13-09-2022', 'Showing signs of foot and mouth disease', 'Angoni'),
(2, 'cat-tag-31', '20-11-2022', 'Inactive and slow in responding. Needs to be monitored.', 'Angoni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breeding`
--
ALTER TABLE `breeding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cattles`
--
ALTER TABLE `cattles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeding`
--
ALTER TABLE `feeding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pregnant`
--
ALTER TABLE `pregnant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quarantine`
--
ALTER TABLE `quarantine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `breed`
--
ALTER TABLE `breed`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `breeding`
--
ALTER TABLE `breeding`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cattles`
--
ALTER TABLE `cattles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feeding`
--
ALTER TABLE `feeding`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pregnant`
--
ALTER TABLE `pregnant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quarantine`
--
ALTER TABLE `quarantine`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
