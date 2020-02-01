-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2020 at 05:52 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 5.6.40-15+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `event_poster` varchar(20) DEFAULT NULL,
  `event_des` varchar(1000) NOT NULL,
  `event_tags` varchar(100) NOT NULL,
  `event_type` int(10) NOT NULL,
  `event_venue` varchar(100) NOT NULL,
  `event_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `event_reg_link` varchar(100) NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `society_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_table`
--

INSERT INTO `events_table` (`event_id`, `event_name`, `event_poster`, `event_des`, `event_tags`, `event_type`, `event_venue`, `event_date`, `event_reg_link`, `event_time`, `society_id`) VALUES
(1, 'Code Strike', NULL, 'ARE YOU READY, YET AGAIN, TO TEST YOUR SKILLS AND FIGHT FOR WHAT YOU DESERVE? IF YES, THEN CCS BRINGS YOU THE PERFECT EVENT, CODE STRIKE. THE EVENT WILL PUT YOUR SPEED, LOGIC AND CODING SKILLS TO THE TEST AND GIVES YOU THE PERFECT OPPORTUNITY TO GIVE IT YOUR ALL AND STRIKE DOWN YOUR FOES. ATTEMPT QUESTIONS AND TARGET YOUR OPPONENTS TO SOLVE FURTHER QUESTIONS AND CLIMB UP THE LEADERBOARD. SO HOP ON THE HYPE TRAIN AND JOIN US TO WIN AMAZING GOODIES AND PRIZES. THE WEEK OF HELIX IS GOING TO BE PACKED WITH EXCITING EVENTS. DATE: 3RD FEBRUARY, 2020 (MONDAY) TIME: 5:30PM ONWARDS VENUE: GENERAL COMPUTING LAB I & II', '48', 1, 'GENERAL COMPUTING LAB I & II', '2020-02-02 18:30:00', 'http://bit.ly/code_strike', '2020-02-01 12:18:00', 1);

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
  `so_name` varchar(100) NOT NULL,
  `so_abbr` varchar(25) NOT NULL,
  `so_des` varchar(500) NOT NULL,
  `so_logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `society_table`
--

INSERT INTO `society_table` (`so_id`, `so_name`, `so_abbr`, `so_des`, `so_logo`) VALUES
(1, 'Creative Computing Society', 'CCS', 'Creative Computing Society (CCS) is one of the oldest and the most prestigious societies of Thapar Institute of Engineering and Technology. With the knowledge and experience of 15 years, the society aims to create and promote a healthy technical environment at TIET.', ''),
(2, 'Open Web Application Security Project', 'OWASP', 'The Project Management is a platform to learn expert techniques for building successful project teams, creating efficient plans and implementing effective tracking measures to ensure your projects come in on deadline and on budget. In one fast-paced, well-designed day, we’ll cover all the essential elements of project management.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tags_table`
--

CREATE TABLE `tags_table` (
  `tag_id` int(10) NOT NULL,
  `tag_name` varchar(30) NOT NULL
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
  `user_hash` varchar(100) DEFAULT NULL,
  `user_role` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_uname`, `user_email`, `user_password`, `user_mobile`, `user_hash`, `user_role`) VALUES
(1, 'Raghav', 'rags', 'rvirmani9@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '8279461972', NULL, NULL);

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
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `members_table`
--
ALTER TABLE `members_table`
  MODIFY `mem_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `society_table`
--
ALTER TABLE `society_table`
  MODIFY `so_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
