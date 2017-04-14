-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 03:14 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `a5mmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_uname` varchar(10) NOT NULL,
  `admin_pass` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_uname`, `admin_pass`) VALUES
(1, 'admin', 'proja5mms');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE IF NOT EXISTS `announcement` (
  `ann_id` int(11) NOT NULL AUTO_INCREMENT,
  `ann_desc` varchar(100) NOT NULL,
  `ann_location` varchar(50) NOT NULL,
  `ann_startDate` date NOT NULL,
  `ann_startTime` time NOT NULL,
  `ann_dateTimePosted` datetime NOT NULL,
  PRIMARY KEY (`ann_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_lname` varchar(80) NOT NULL,
  `app_fname` varchar(80) NOT NULL,
  `app_mname` varchar(50) NOT NULL,
  `app_nickname` varchar(20) NOT NULL,
  `app_address` varchar(150) NOT NULL,
  `app_addrZip` int(11) NOT NULL,
  `app_provAddress` varchar(150) NOT NULL,
  `app_provZip` int(11) NOT NULL,
  `app_birthDate` date NOT NULL,
  `app_birthPlace` varchar(150) NOT NULL,
  `app_contactNo` varchar(20) NOT NULL,
  `app_civilStatus` varchar(10) NOT NULL,
  `app_status` varchar(50) NOT NULL,
  `app_image` varchar(50) NOT NULL,
  `app_college` varchar(100) NOT NULL,
  `app_course` varchar(150) NOT NULL,
  `app_incCollDateFrom` date NOT NULL,
  `app_incCollDateTo` date NOT NULL,
  `app_highSchool` varchar(100) NOT NULL,
  `app_hsDegree` varchar(150) NOT NULL,
  `app_incHSDateFrom` date NOT NULL,
  `app_incHSDateTo` date NOT NULL,
  `app_elem` varchar(100) NOT NULL,
  `app_elemDegree` varchar(150) NOT NULL,
  `app_incElemDateFrom` date NOT NULL,
  `app_incElemDateTo` date NOT NULL,
  `app_company1` varchar(150) NOT NULL,
  `app_job1` varchar(100) NOT NULL,
  `app_salary1` int(11) NOT NULL,
  `app_incJob1DateFrom` date NOT NULL,
  `app_incJob1DateTo` date NOT NULL,
  `app_company2` varchar(150) NOT NULL,
  `app_job2` varchar(100) NOT NULL,
  `app_salary2` int(11) NOT NULL,
  `app_incJob2DateFrom` date NOT NULL,
  `app_incJob2DateTo` date NOT NULL,
  `app_company3` varchar(150) NOT NULL,
  `app_job3` varchar(100) NOT NULL,
  `app_salary3` int(11) NOT NULL,
  `app_incJob3DateFrom` date NOT NULL,
  `app_incJob3DateTo` date NOT NULL,
  `app_skill1` varchar(100) NOT NULL,
  `app_yearsSkill1` int(11) NOT NULL,
  `app_skill2` varchar(100) NOT NULL,
  `app_yearsSkill2` int(11) NOT NULL,
  `app_skill3` varchar(100) NOT NULL,
  `app_yearsSkill3` int(11) NOT NULL,
  `app_father` varchar(100) NOT NULL,
  `app_fatherDOB` date NOT NULL,
  `app_mother` varchar(100) NOT NULL,
  `app_motherDOB` date NOT NULL,
  `app_spouse` varchar(100) NOT NULL,
  `app_spouseDOB` date NOT NULL,
  `app_child1` varchar(100) NOT NULL,
  `app_child1DOB` date NOT NULL,
  `app_child1civil` varchar(100) NOT NULL,
  `app_child2` varchar(100) NOT NULL,
  `app_child2DOB` date NOT NULL,
  `app_child2civil` varchar(100) NOT NULL,
  `app_child3` varchar(100) NOT NULL,
  `app_child3DOB` date NOT NULL,
  `app_child3civil` varchar(100) NOT NULL,
  `app_ref1` varchar(100) NOT NULL,
  `app_ref1Posi` varchar(100) NOT NULL,
  `app_ref1CompAddr` varchar(100) NOT NULL,
  `app_ref1Contact` varchar(100) NOT NULL,
  `app_ref2` varchar(100) NOT NULL,
  `app_ref2Posi` varchar(100) NOT NULL,
  `app_ref2CompAddr` varchar(100) NOT NULL,
  `app_ref2Contact` varchar(100) NOT NULL,
  `app_ref3` varchar(100) NOT NULL,
  `app_ref3Posi` varchar(100) NOT NULL,
  `app_ref3CompAddr` varchar(100) NOT NULL,
  `app_ref3Contact` varchar(100) NOT NULL,
  `app_piceName` varchar(80) NOT NULL,
  `app_piceRelationship` varchar(20) NOT NULL,
  `app_piceAddress` varchar(45) NOT NULL,
  `app_piceContactNo` varchar(20) NOT NULL,
  `app_attEduc` varchar(100) NOT NULL,
  `app_gambling` varchar(50) NOT NULL,
  `app_training` varchar(50) NOT NULL,
  `app_hobbySport` varchar(200) NOT NULL,
  `app_SSS` varchar(20) NOT NULL,
  `app_TIN` varchar(20) NOT NULL,
  `app_PAGIBIG` varchar(20) NOT NULL,
  `app_PHILHEALTH` varchar(20) NOT NULL,
  `app_uname` varchar(10) NOT NULL,
  `app_pass` varchar(10) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `client_contactPerson` varchar(100) NOT NULL,
  `client_contactNo` varchar(20) NOT NULL,
  `client_zipCode` int(11) NOT NULL,
  `client_city` varchar(50) NOT NULL,
  `client_street` varchar(50) NOT NULL,
  `client_licenseNo` varchar(50) NOT NULL,
  `client_dateContract` date NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(50) NOT NULL,
  `job_status` varchar(20) NOT NULL,
  `job_slots` int(11) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `job_history`
--

CREATE TABLE IF NOT EXISTS `job_history` (
  `his_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  PRIMARY KEY (`his_id`),
  KEY `job_history_ibfk_1` (`app_id`),
  KEY `job_history_ibfk_2` (`job_id`),
  KEY `job_history_ibfk_3` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE IF NOT EXISTS `requirement` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `mandRequire` varchar(50) NOT NULL,
  `interview` varchar(50) NOT NULL,
  `orientation` varchar(50) NOT NULL,
  `training` varchar(50) NOT NULL,
  `app_id` int(11) NOT NULL,
  PRIMARY KEY (`req_id`),
  KEY `requirement_ibfk_1` (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

--
-- Constraints for table `job_history`
--
ALTER TABLE `job_history`
  ADD CONSTRAINT `job_history_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `applicant` (`app_id`),
  ADD CONSTRAINT `job_history_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job` (`job_id`),
  ADD CONSTRAINT `job_history_ibfk_3` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `requirement`
--
ALTER TABLE `requirement`
  ADD CONSTRAINT `requirement_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `applicant` (`app_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
