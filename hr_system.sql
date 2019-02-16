-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2019 at 06:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_ID` int(11) NOT NULL,
  `applicant_name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `applicant_address` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `applicant_contact_num` int(11) NOT NULL,
  `applicant_age` int(11) NOT NULL,
  `applicant_birthday` date NOT NULL,
  `applicant_email` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `applicant_sex` varchar(7) COLLATE utf8mb4_spanish_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `father_occupation` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mother_name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mother_occupation` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marital_status` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `application_date` date NOT NULL,
  `applicant_status` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `school_name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `school_address` int(100) NOT NULL,
  `school_year_graduated` year(4) NOT NULL,
  `job_order_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE `benefit` (
  `benefit_ID` int(11) NOT NULL,
  `benefit_name` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `benefit_info` tinytext COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `benefit`
--

INSERT INTO `benefit` (`benefit_ID`, `benefit_name`, `benefit_info`) VALUES
(1, 'Vincent Benefit', '9k per hour with free 3-meal course every day'),
(2, 'Absents Benefit', 'You will be fired!'),
(3, 'Sleep Benefit', 'Your salary will be deducted!'),
(4, 'Unli Rice ', 'Unlimited Bugas Wapa Lungaga');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_ID` int(11) NOT NULL,
  `dept_name` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `loc_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_ID`, `dept_name`, `loc_ID`) VALUES
(5, 'Department of Kwarta', 2),
(6, 'Department of Gian', 3),
(7, 'Department of Science', 4),
(8, 'Department of Mongi', 2),
(9, 'Deparment of Imong Lolo', 1),
(10, 'Gian Dapartment', 4);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_ID` int(11) NOT NULL,
  `emp_name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `emp_address` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `emp_contact_num` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `emp_age` int(11) NOT NULL,
  `emp_birthday` date NOT NULL,
  `emp_email` varchar(60) COLLATE utf8mb4_spanish_ci NOT NULL,
  `emp_sex` varchar(7) COLLATE utf8mb4_spanish_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `father_occupation` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mother_name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mother_occupation` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marital_status` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `start_date` date NOT NULL,
  `emp_status` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `school_name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `school_address` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `school_year_graduated` year(4) NOT NULL,
  `dept_ID` int(11) NOT NULL,
  `job_position_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_ID`, `emp_name`, `emp_address`, `emp_contact_num`, `emp_age`, `emp_birthday`, `emp_email`, `emp_sex`, `father_name`, `father_occupation`, `mother_name`, `mother_occupation`, `marital_status`, `start_date`, `emp_status`, `school_name`, `school_address`, `school_year_graduated`, `dept_ID`, `job_position_ID`) VALUES
(7, 'Vincent Paul Barruga', 'Mandaue', '09101515152', 20, '1998-03-16', 'barrugavincent@gmail.com', 'Male', 'Rudy Barruga Jr.', 'Manager', 'Alete Barruga', 'Teacher', 'Married', '2018-05-02', 'Hired', 'MNCHS', 'Masbate, Masbate', 2014, 5, 1),
(8, 'Qwerty', 'Qwerty Street', '123456', 25, '1997-10-16', 'qwerty@qwerty.com', 'Male', 'Qwerty Jr.', 'Hacker', 'Asdfg', 'Assistant', 'Widdowed', '2018-07-05', 'Hired', 'qwertyhns', 'Qwerty City', 0000, 6, 1),
(10, 'Carter Vince Jr.', 'Cebu City', '09096666666', 18, '2000-05-10', 'cartervince@gmail.com', 'Male', 'Carter Vince Sr.', 'Premium User', 'August Ames', 'Hooker', 'Married', '2018-10-12', 'Hired', 'USC', 'Talamban', 2014, 7, 2),
(11, 'Roel Paolo Galo', 'USCTC', '02465567', 17, '2020-07-09', 'roel@gmail.com', 'Male', 'sadasd', 'asda', 'asd', 'asdasd', 'asdsad', '2018-07-23', 'Terminated', 'asdasd', 'asdasd', 2013, 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `job_opening`
--

CREATE TABLE `job_opening` (
  `job_order_ID` int(11) NOT NULL,
  `dept_ID` int(11) NOT NULL,
  `benefit_ID` int(11) NOT NULL,
  `job_require` tinytext COLLATE utf8mb4_spanish_ci NOT NULL,
  `job_position_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `job_opening`
--

INSERT INTO `job_opening` (`job_order_ID`, `dept_ID`, `benefit_ID`, `job_require`, `job_position_ID`) VALUES
(10, 7, 1, 'Elementary Graduate', 2),
(11, 6, 1, 'Anyone who can clean', 3),
(12, 5, 1, 'Like Cardo', 4),
(13, 10, 1, 'May Mosayaw', 5);

-- --------------------------------------------------------

--
-- Table structure for table `job_position`
--

CREATE TABLE `job_position` (
  `job_position_ID` int(11) NOT NULL,
  `job_position_name` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `job_position`
--

INSERT INTO `job_position` (`job_position_ID`, `job_position_name`) VALUES
(1, 'Network Administrator'),
(2, 'Secretary'),
(3, 'Janitor'),
(4, 'Security Guard'),
(5, 'Club Dancer');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `loc_ID` int(11) NOT NULL,
  `loc_name` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `loc_address` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_ID`, `loc_name`, `loc_address`) VALUES
(1, 'Banilad', 'KS & E Suites'),
(2, 'Compostela', 'Bukid'),
(3, 'Colon', 'Sanchez Compound, Colon Street, Cebu City 6000'),
(4, 'USC-TC', 'Nasipit, Talamban'),
(5, 'Mandaue', '');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_ID` int(11) NOT NULL,
  `emp_ID` int(11) NOT NULL,
  `time_report_ID` int(11) NOT NULL,
  `basic_pay` float NOT NULL,
  `hour_rate` float NOT NULL,
  `gross_pay` float NOT NULL,
  `tax` float NOT NULL,
  `pag_ibig` float NOT NULL,
  `sss` float NOT NULL,
  `philhealth` float NOT NULL,
  `total_deductions` float NOT NULL,
  `total_adjustments` float NOT NULL,
  `net_pay` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_ID`, `emp_ID`, `time_report_ID`, `basic_pay`, `hour_rate`, `gross_pay`, `tax`, `pag_ibig`, `sss`, `philhealth`, `total_deductions`, `total_adjustments`, `net_pay`) VALUES
(1, 7, 2, 10000, 12.53, 13132.5, 1575.9, 1212.67, 1212.32, 29.13, 2454.12, 4030.02, 9102.48),
(2, 8, 3, 20000, 300, 50000, 6000, 1003.23, 132.44, 700.59, 1836.26, 7836.26, 42163.7),
(3, 10, 5, 12000, 300.14, 102042, 12245, 500.4, 700.23, 569.5, 1770.13, 14015.2, 88026.8);

-- --------------------------------------------------------

--
-- Table structure for table `payslip`
--

CREATE TABLE `payslip` (
  `payslip_ID` int(11) NOT NULL,
  `payroll_ID` int(11) NOT NULL,
  `cutoff_period` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_report`
--

CREATE TABLE `time_report` (
  `time_report_ID` int(11) NOT NULL,
  `report_status` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `report_date_issued` date NOT NULL,
  `total_work_hours` int(11) NOT NULL,
  `emp_ID` int(11) NOT NULL,
  `disapproval_reason` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `time_report`
--

INSERT INTO `time_report` (`time_report_ID`, `report_status`, `report_date_issued`, `total_work_hours`, `emp_ID`, `disapproval_reason`) VALUES
(2, 'APPROVED', '2018-07-18', 250, 7, NULL),
(3, 'APPROVED', '2018-07-18', 100, 8, NULL),
(4, 'APPROVED', '2018-07-18', 250, 10, NULL),
(5, 'APPROVED', '2018-07-18', 300, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `user_name` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_password` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_type` varchar(12) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_fname` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user_lname` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `user_name`, `user_password`, `user_type`, `user_fname`, `user_lname`) VALUES
(1, 'vincentpaulb', 'qweqwe', 'HR Manager', 'Vincent Paul', 'Barruga'),
(2, 'qwerty', 'qwerty', 'Recruiter', 'Qwe', 'Rty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_ID`),
  ADD KEY `jb_oid` (`job_order_ID`);

--
-- Indexes for table `benefit`
--
ALTER TABLE `benefit`
  ADD PRIMARY KEY (`benefit_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_ID`),
  ADD KEY `lc_id` (`loc_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_ID`),
  ADD KEY `empdp_id` (`dept_ID`),
  ADD KEY `jp_id` (`job_position_ID`);

--
-- Indexes for table `job_opening`
--
ALTER TABLE `job_opening`
  ADD PRIMARY KEY (`job_order_ID`),
  ADD KEY `dp_id` (`dept_ID`),
  ADD KEY `bn_id` (`benefit_ID`),
  ADD KEY `jojp_id` (`job_position_ID`);

--
-- Indexes for table `job_position`
--
ALTER TABLE `job_position`
  ADD PRIMARY KEY (`job_position_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loc_ID`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_ID`),
  ADD KEY `emppayroll_id` (`emp_ID`),
  ADD KEY `timereport_id` (`time_report_ID`);

--
-- Indexes for table `payslip`
--
ALTER TABLE `payslip`
  ADD PRIMARY KEY (`payslip_ID`),
  ADD KEY `pr_id` (`payroll_ID`);

--
-- Indexes for table `time_report`
--
ALTER TABLE `time_report`
  ADD PRIMARY KEY (`time_report_ID`),
  ADD KEY `emptr_id` (`emp_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicant_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `benefit`
--
ALTER TABLE `benefit`
  MODIFY `benefit_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job_opening`
--
ALTER TABLE `job_opening`
  MODIFY `job_order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job_position`
--
ALTER TABLE `job_position`
  MODIFY `job_position_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `loc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payslip`
--
ALTER TABLE `payslip`
  MODIFY `payslip_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_report`
--
ALTER TABLE `time_report`
  MODIFY `time_report_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `jb_oid` FOREIGN KEY (`job_order_ID`) REFERENCES `job_opening` (`job_order_ID`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `lc_id` FOREIGN KEY (`loc_ID`) REFERENCES `location` (`loc_ID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `empdp_id` FOREIGN KEY (`dept_ID`) REFERENCES `department` (`dept_ID`),
  ADD CONSTRAINT `jp_id` FOREIGN KEY (`job_position_ID`) REFERENCES `job_position` (`job_position_ID`);

--
-- Constraints for table `job_opening`
--
ALTER TABLE `job_opening`
  ADD CONSTRAINT `bn_id` FOREIGN KEY (`benefit_ID`) REFERENCES `benefit` (`benefit_ID`),
  ADD CONSTRAINT `dp_id` FOREIGN KEY (`dept_ID`) REFERENCES `department` (`dept_ID`),
  ADD CONSTRAINT `jojp_id` FOREIGN KEY (`job_position_ID`) REFERENCES `job_position` (`job_position_ID`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `emppayroll_id` FOREIGN KEY (`emp_ID`) REFERENCES `employee` (`emp_ID`),
  ADD CONSTRAINT `timereport_id` FOREIGN KEY (`time_report_ID`) REFERENCES `time_report` (`time_report_ID`);

--
-- Constraints for table `payslip`
--
ALTER TABLE `payslip`
  ADD CONSTRAINT `pr_id` FOREIGN KEY (`payroll_ID`) REFERENCES `payroll` (`payroll_ID`);

--
-- Constraints for table `time_report`
--
ALTER TABLE `time_report`
  ADD CONSTRAINT `emptr_id` FOREIGN KEY (`emp_ID`) REFERENCES `employee` (`emp_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
