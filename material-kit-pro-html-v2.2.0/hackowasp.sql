-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 07:33 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackowasp`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_table`
--

CREATE TABLE `attendance_table` (
  `att_id` int(11) NOT NULL,
  `att_event_id` int(11) NOT NULL,
  `att_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments_table`
--

CREATE TABLE `departments_table` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `dept_soc_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_table`
--

CREATE TABLE `events_table` (
  `event_id` int(10) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_poster` varchar(20) NOT NULL,
  `event_soc` int(10) NOT NULL,
  `event_des` varchar(1000) NOT NULL,
  `event_tags` int(100) NOT NULL,
  `event_type` int(10) NOT NULL,
  `event_venue` varchar(100) NOT NULL,
  `event_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_reg_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members_table`
--

CREATE TABLE `members_table` (
  `mem_id` int(10) NOT NULL,
  `mem_user_id` int(10) NOT NULL,
  `mem_soc_id` int(10) NOT NULL,
  `mem_dept` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `society_table`
--

CREATE TABLE `society_table` (
  `so_id` int(11) NOT NULL,
  `so_name` int(11) NOT NULL,
  `so_abbr` int(11) NOT NULL,
  `so_des` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_uname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_mobile` varchar(10) NOT NULL,
  `user_hash` varchar(100) NOT NULL,
  `user_role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_table`
--
ALTER TABLE `attendance_table`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `departments_table`
--
ALTER TABLE `departments_table`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `events_table`
--
ALTER TABLE `events_table`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `members_table`
--
ALTER TABLE `members_table`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `society_table`
--
ALTER TABLE `society_table`
  ADD PRIMARY KEY (`so_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_table`
--
ALTER TABLE `attendance_table`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments_table`
--
ALTER TABLE `departments_table`
  MODIFY `dept_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_table`
--
ALTER TABLE `events_table`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members_table`
--
ALTER TABLE `members_table`
  MODIFY `mem_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `society_table`
--
ALTER TABLE `society_table`
  MODIFY `so_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
