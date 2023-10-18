-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 08:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mfpesodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mis_admin`
--

CREATE TABLE `mis_admin` (
  `ad_id` int(11) NOT NULL,
  `ad_fname` varchar(200) DEFAULT NULL,
  `ad_lname` varchar(200) DEFAULT NULL,
  `ad_email` varchar(200) DEFAULT NULL,
  `ad_pwd` varchar(200) DEFAULT NULL,
  `ad_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_admin`
--

INSERT INTO `mis_admin` (`ad_id`, `ad_fname`, `ad_lname`, `ad_email`, `ad_pwd`, `ad_dpic`) VALUES
(1, 'System', 'Admininstrator', 'System@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'admin1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mis_claimclearance`
--

CREATE TABLE `mis_claimclearance` (
  `id` int(11) NOT NULL,
  `claimclearance_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mis_employment`
--

CREATE TABLE `mis_employment` (
  `employment_id` int(11) NOT NULL,
  `surname` varchar(256) DEFAULT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `middlename` varchar(256) DEFAULT NULL,
  `suffix` varchar(256) DEFAULT NULL,
  `date_of_birth` varchar(256) DEFAULT NULL,
  `sex` varchar(256) DEFAULT NULL,
  `street_village` varchar(256) DEFAULT NULL,
  `barangay` varchar(256) DEFAULT NULL,
  `municipality` varchar(256) DEFAULT NULL,
  `province` varchar(256) DEFAULT NULL,
  `religion` varchar(256) DEFAULT NULL,
  `civil_status` varchar(256) DEFAULT NULL,
  `tin` varchar(256) DEFAULT NULL,
  `disability` varchar(256) DEFAULT NULL,
  `height` varchar(256) DEFAULT NULL,
  `contact_number` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `employment_status` varchar(256) DEFAULT NULL,
  `employment_status_employed` varchar(256) DEFAULT NULL,
  `employment_status_unemployed` varchar(256) DEFAULT NULL,
  `Are_you_ofw` varchar(256) DEFAULT NULL,
  `are_you_a_former_ofw` varchar(256) DEFAULT NULL,
  `beneficiary` varchar(256) DEFAULT NULL,
  `prefered_occupation` varchar(256) DEFAULT NULL,
  `prefered_work_location` varchar(256) DEFAULT NULL,
  `language_dialect` varchar(256) DEFAULT NULL,
  `currently_in_school` varchar(256) DEFAULT NULL,
  `education_level` varchar(256) DEFAULT NULL,
  `course` varchar(256) DEFAULT NULL,
  `training` varchar(256) DEFAULT NULL,
  `hours_of_training` varchar(256) DEFAULT NULL,
  `training_institution` varchar(256) DEFAULT NULL,
  `skill_acquired` varchar(256) DEFAULT NULL,
  `certificates_received` varchar(256) DEFAULT NULL,
  `eligibility_civil_service` varchar(256) DEFAULT NULL,
  `professional_licence` varchar(256) DEFAULT NULL,
  `company_name` varchar(256) DEFAULT NULL,
  `position` varchar(256) DEFAULT NULL,
  `number_of_months` varchar(256) DEFAULT NULL,
  `other_skills` varchar(256) DEFAULT NULL,
  `referred_to` varchar(256) DEFAULT NULL,
  `date_joined` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_employment`
--

INSERT INTO `mis_employment` (`employment_id`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `other_skills`, `referred_to`, `date_joined`) VALUES
(1, ' Johnson', 'Emily', 'J', 'NA', '2001-12-25', 'Female', '7', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Christian', 'Single', 'none', 'NA', '5\'7', '09873676473', 'emily@mail.com', 'Employed', 'Self-employed (Freelancer)', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'No', '4TH YEAR COLLEGE LEVEL', 'BEED', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '2023-09-22'),
(2, 'Dela Cruz', 'Juan', 'M', 'NA', '1990-07-18', 'Male', 'Zone 4', 'Guilang-guilang', 'Manolo Fortich', 'Bukidnon', 'Christian', 'Single', 'NA', 'NA', '5\'7', '094667467224', 'juan@mail.com', 'Unemployed', 'NA', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'No', '4TH YEAR COLLEGE LEVEL', 'BSIT', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'GIP', '2023-09-22'),
(4, 'Israel', 'Stephen', 'B', 'NA', '2007-07-13', 'Male', 'Zone', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Single', 'NA', 'NA', '5\'8', '09311073972', 'stephene@mail.com', 'Unemployed', 'NA', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'English', 'No', 'COLLEGE LEVEL', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Na', 'NA', 'NA', 'NA', 'NA', 'TUPAD', '2023-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `mis_gip`
--

CREATE TABLE `mis_gip` (
  `gip_id` int(11) NOT NULL,
  `applicant_no` varchar(256) DEFAULT NULL,
  `gip_compliant` varchar(256) DEFAULT NULL,
  `type_of_application` varchar(256) DEFAULT NULL,
  `surname` varchar(256) DEFAULT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `middlename` varchar(256) DEFAULT NULL,
  `suffix` varchar(256) DEFAULT NULL,
  `contact` varchar(256) DEFAULT NULL,
  `civil_status` varchar(256) DEFAULT NULL,
  `sex` varchar(256) DEFAULT NULL,
  `date_of_birth` varchar(256) DEFAULT NULL,
  `age` varchar(256) DEFAULT NULL,
  `blood_type` varchar(256) DEFAULT NULL,
  `app_zone_no` varchar(256) DEFAULT NULL,
  `app_barangay` varchar(256) DEFAULT NULL,
  `app_municipality` varchar(256) DEFAULT NULL,
  `app_province` varchar(256) DEFAULT NULL,
  `religion` varchar(256) DEFAULT NULL,
  `citizenship` varchar(256) DEFAULT NULL,
  `language_dialect` varchar(256) DEFAULT NULL,
  `father_surname` varchar(256) DEFAULT NULL,
  `father_firstname` varchar(256) DEFAULT NULL,
  `father_middlename` varchar(256) DEFAULT NULL,
  `father_occupation` varchar(256) DEFAULT NULL,
  `number_of_brother` varchar(256) DEFAULT NULL,
  `mother_surname` varchar(256) DEFAULT NULL,
  `mother_firstname` varchar(256) DEFAULT NULL,
  `mother_middlename` varchar(256) DEFAULT NULL,
  `mother_occupation` varchar(256) DEFAULT NULL,
  `number_of_sister` varchar(256) DEFAULT NULL,
  `pa_zone_no` varchar(256) DEFAULT NULL,
  `pa_barangay` varchar(256) DEFAULT NULL,
  `pa_municipality` varchar(256) DEFAULT NULL,
  `pa_province` varchar(256) DEFAULT NULL,
  `elementary_school` varchar(256) DEFAULT NULL,
  `elem_type_of_school` varchar(256) DEFAULT NULL,
  `elem_school_address` varchar(256) DEFAULT NULL,
  `elem_year_graduated` varchar(256) DEFAULT NULL,
  `high_school` varchar(256) DEFAULT NULL,
  `hs_type_of_school` varchar(256) DEFAULT NULL,
  `strand` varchar(256) DEFAULT NULL,
  `hs_year_level` varchar(256) DEFAULT NULL,
  `hs_lastyear_attended` varchar(256) DEFAULT NULL,
  `hs_school_address` varchar(256) DEFAULT NULL,
  `college` varchar(256) DEFAULT NULL,
  `col_type_of_school` varchar(256) DEFAULT NULL,
  `course` varchar(256) DEFAULT NULL,
  `col_school_address` varchar(256) DEFAULT NULL,
  `col_lastyear_attended` varchar(256) DEFAULT NULL,
  `pre_strand_course` varchar(256) DEFAULT NULL,
  `psc_school` varchar(256) DEFAULT NULL,
  `special_skill` varchar(256) DEFAULT NULL,
  `income_of_parent` varchar(256) DEFAULT NULL,
  `date_of_application` varchar(256) DEFAULT NULL,
  `recieved_by` varchar(256) DEFAULT NULL,
  `date_joined` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_gip`
--

INSERT INTO `mis_gip` (`gip_id`, `applicant_no`, `gip_compliant`, `type_of_application`, `surname`, `firstname`, `middlename`, `suffix`, `contact`, `civil_status`, `sex`, `date_of_birth`, `age`, `blood_type`, `app_zone_no`, `app_barangay`, `app_municipality`, `app_province`, `religion`, `citizenship`, `language_dialect`, `father_surname`, `father_firstname`, `father_middlename`, `father_occupation`, `number_of_brother`, `mother_surname`, `mother_firstname`, `mother_middlename`, `mother_occupation`, `number_of_sister`, `pa_zone_no`, `pa_barangay`, `pa_municipality`, `pa_province`, `elementary_school`, `elem_type_of_school`, `elem_school_address`, `elem_year_graduated`, `high_school`, `hs_type_of_school`, `strand`, `hs_year_level`, `hs_lastyear_attended`, `hs_school_address`, `college`, `col_type_of_school`, `course`, `col_school_address`, `col_lastyear_attended`, `pre_strand_course`, `psc_school`, `special_skill`, `income_of_parent`, `date_of_application`, `recieved_by`, `date_joined`) VALUES
(1, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 01:53:45.716346'),
(2, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:04:29.475469'),
(3, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:04:52.580712'),
(4, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:05:27.852896'),
(5, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:06:37.455412'),
(6, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:23:01.428053'),
(7, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:24:33.700522'),
(8, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:26:29.870684'),
(9, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:28:53.066059'),
(10, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 02:35:46.913843'),
(11, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 03:24:16.023205'),
(12, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 03:26:38.960707'),
(13, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 03:28:32.806715'),
(14, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 03:31:18.762558'),
(15, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 03:38:19.785586'),
(16, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 03:40:17.195418'),
(17, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 03:41:44.828377'),
(18, '01', NULL, 'For College', 'laag', 'James', 'B', 'NA', 'For College', 'Single', 'Male', '2003-10-21', '19', 'O', 'Zone 1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2020', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 03:44:55.919414'),
(19, '01', 'Yes', 'For College', 'Israel', 'Stephen', 'V', 'NA', 'For College', 'Single', 'Male', '2008-11-13', '16', 'O', 'Zone 1', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'Christian', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', 'NA', 'Manolo Fortich National High ', 'Public', 'STEM', 'GRADE XI (FOR K TO 12)', '2009', 'Manolo Fortich Bukidnon', 'NA', 'Public', 'NA', 'Manolo Fortich', 'NA', 'NA', 'NA', 'NA', '5,000 and below', '2023-10-09', 'NA', '2023-10-09 06:58:24.631350');

-- --------------------------------------------------------

--
-- Table structure for table `mis_job_opening`
--

CREATE TABLE `mis_job_opening` (
  `job_opening_id` int(11) NOT NULL,
  `job_name` varchar(256) NOT NULL,
  `job_description` varchar(256) NOT NULL,
  `com_name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `contact` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date_posted` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_job_opening`
--

INSERT INTO `mis_job_opening` (`job_opening_id`, `job_name`, `job_description`, `com_name`, `address`, `contact`, `email`, `date_posted`) VALUES
(1, 'Mechanical Techician', 'Plant Maintenance', 'SMC REPAIRS & MAINTENANCE', 'NA', 'NA', 'careers@rmi.sanmiguel.com.ph', '2023-09-27'),
(2, 'Mechanical Techician', 'Plant Maintenance', 'SMC REPAIRS & MAINTENANCE', 'NA', 'NA', 'careers@rmi.sanmiguel.com.ph', '2023-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `mis_pwdresets`
--

CREATE TABLE `mis_pwdresets` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_pwdresets`
--

INSERT INTO `mis_pwdresets` (`id`, `email`, `user_pwd`) VALUES
(1, 'jha@mail.com', '4KEG912hWn'),
(3, 'jha@mail.com', '0r2aJFpyqf'),
(4, 'jhaisrhieemata@gmail.com', 'FUPLub8wGP'),
(5, 'jhaisrhieemata@gmail.com', 'Vy2k8tT5vK'),
(6, 'jhaisrhieemata@gmail.com', 'Vy2k8tT5vK');

-- --------------------------------------------------------

--
-- Table structure for table `mis_scholarship`
--

CREATE TABLE `mis_scholarship` (
  `scholarship_id` int(11) NOT NULL,
  `applicant_no` varchar(256) DEFAULT NULL,
  `type_of_application` varchar(256) DEFAULT NULL,
  `surname` varchar(256) DEFAULT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `middlename` varchar(256) DEFAULT NULL,
  `suffix` varchar(256) DEFAULT NULL,
  `contact` varchar(256) DEFAULT NULL,
  `civil_status` varchar(256) DEFAULT NULL,
  `sex` varchar(256) DEFAULT NULL,
  `date_of_birth` varchar(256) DEFAULT NULL,
  `age` varchar(256) DEFAULT NULL,
  `blood_type` varchar(256) DEFAULT NULL,
  `app_zone_no` varchar(256) DEFAULT NULL,
  `app_barangay` varchar(256) DEFAULT NULL,
  `app_municipality` varchar(256) DEFAULT NULL,
  `app_province` varchar(256) DEFAULT NULL,
  `religion` varchar(256) DEFAULT NULL,
  `citizenship` varchar(256) DEFAULT NULL,
  `language_dialect` varchar(256) DEFAULT NULL,
  `father_surname` varchar(256) DEFAULT NULL,
  `father_firstname` varchar(256) DEFAULT NULL,
  `father_middlename` varchar(256) DEFAULT NULL,
  `father_occupation` varchar(256) DEFAULT NULL,
  `number_of_brother` varchar(256) DEFAULT NULL,
  `mother_surname` varchar(256) DEFAULT NULL,
  `mother_firstname` varchar(256) DEFAULT NULL,
  `mother_middlename` varchar(256) DEFAULT NULL,
  `mother_occupation` varchar(256) DEFAULT NULL,
  `number_of_sister` varchar(256) DEFAULT NULL,
  `pa_zone_no` varchar(256) DEFAULT NULL,
  `pa_barangay` varchar(256) DEFAULT NULL,
  `pa_municipality` varchar(256) DEFAULT NULL,
  `pa_province` varchar(256) DEFAULT NULL,
  `elementary_school` varchar(256) DEFAULT NULL,
  `elem_type_of_school` varchar(256) DEFAULT NULL,
  `elem_school_address` varchar(256) DEFAULT NULL,
  `elem_year_graduated` varchar(256) DEFAULT NULL,
  `high_school` varchar(256) DEFAULT NULL,
  `hs_type_of_school` varchar(256) DEFAULT NULL,
  `strand` varchar(256) DEFAULT NULL,
  `hs_year_level` varchar(256) DEFAULT NULL,
  `hs_lastyear_attended` varchar(256) DEFAULT NULL,
  `hs_school_address` varchar(256) DEFAULT NULL,
  `college` varchar(256) DEFAULT NULL,
  `col_type_of_school` varchar(256) DEFAULT NULL,
  `course` varchar(256) DEFAULT NULL,
  `col_school_address` varchar(256) DEFAULT NULL,
  `col_lastyear_attended` varchar(256) DEFAULT NULL,
  `pre_strand_course` varchar(256) DEFAULT NULL,
  `psc_school` varchar(256) DEFAULT NULL,
  `special_skill` varchar(256) DEFAULT NULL,
  `income_of_parent` varchar(256) DEFAULT NULL,
  `date_of_application` varchar(256) DEFAULT NULL,
  `recieved_by` varchar(256) DEFAULT NULL,
  `date_joined` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_scholarship`
--

INSERT INTO `mis_scholarship` (`scholarship_id`, `applicant_no`, `type_of_application`, `surname`, `firstname`, `middlename`, `suffix`, `contact`, `civil_status`, `sex`, `date_of_birth`, `age`, `blood_type`, `app_zone_no`, `app_barangay`, `app_municipality`, `app_province`, `religion`, `citizenship`, `language_dialect`, `father_surname`, `father_firstname`, `father_middlename`, `father_occupation`, `number_of_brother`, `mother_surname`, `mother_firstname`, `mother_middlename`, `mother_occupation`, `number_of_sister`, `pa_zone_no`, `pa_barangay`, `pa_municipality`, `pa_province`, `elementary_school`, `elem_type_of_school`, `elem_school_address`, `elem_year_graduated`, `high_school`, `hs_type_of_school`, `strand`, `hs_year_level`, `hs_lastyear_attended`, `hs_school_address`, `college`, `col_type_of_school`, `course`, `col_school_address`, `col_lastyear_attended`, `pre_strand_course`, `psc_school`, `special_skill`, `income_of_parent`, `date_of_application`, `recieved_by`, `date_joined`) VALUES
(1, '01', 'For College', 'javier', 'mac', 'P', 'NA', 'For College', 'Single', 'Male', '2003-10-12', '19', 'O', 'Zone 1', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'Employed', '4', 'ZONE1', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2010', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 to 7,000', '2023-09-29', 'NA', '2023-09-29 02:32:10.022169'),
(2, '01', 'For College', 'javier', 'mac', 'P', 'NA', 'For College', 'Single', 'Male', '2003-10-12', '19', 'O', 'Zone 1', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2010', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2020', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '5,000 to 7,000', '2023-09-29', 'NA', '2023-09-29 02:35:59.463092');

-- --------------------------------------------------------

--
-- Table structure for table `mis_spes`
--

CREATE TABLE `mis_spes` (
  `spes_id` int(11) NOT NULL,
  `applicant_no` varchar(256) DEFAULT NULL,
  `spes_compliant` varchar(256) DEFAULT NULL,
  `type_of_application` varchar(256) DEFAULT NULL,
  `surname` varchar(256) DEFAULT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `middlename` varchar(256) DEFAULT NULL,
  `suffix` varchar(256) DEFAULT NULL,
  `contact` varchar(256) DEFAULT NULL,
  `civil_status` varchar(256) DEFAULT NULL,
  `sex` varchar(256) DEFAULT NULL,
  `date_of_birth` varchar(256) DEFAULT NULL,
  `age` varchar(256) DEFAULT NULL,
  `blood_type` varchar(256) DEFAULT NULL,
  `app_zone_no` varchar(256) DEFAULT NULL,
  `app_barangay` varchar(256) DEFAULT NULL,
  `app_municipality` varchar(256) DEFAULT NULL,
  `app_province` varchar(256) DEFAULT NULL,
  `religion` varchar(256) DEFAULT NULL,
  `citizenship` varchar(256) DEFAULT NULL,
  `language_dialect` varchar(256) DEFAULT NULL,
  `father_surname` varchar(256) DEFAULT NULL,
  `father_firstname` varchar(256) DEFAULT NULL,
  `father_middlename` varchar(256) DEFAULT NULL,
  `father_occupation` varchar(256) DEFAULT NULL,
  `number_of_brother` varchar(256) DEFAULT NULL,
  `mother_surname` varchar(256) DEFAULT NULL,
  `mother_firstname` varchar(256) DEFAULT NULL,
  `mother_middlename` varchar(256) DEFAULT NULL,
  `mother_occupation` varchar(256) DEFAULT NULL,
  `number_of_sister` varchar(256) DEFAULT NULL,
  `pa_zone_no` varchar(256) DEFAULT NULL,
  `pa_barangay` varchar(256) DEFAULT NULL,
  `pa_municipality` varchar(256) DEFAULT NULL,
  `pa_province` varchar(256) DEFAULT NULL,
  `elementary_school` varchar(256) DEFAULT NULL,
  `elem_type_of_school` varchar(256) DEFAULT NULL,
  `elem_school_address` varchar(256) DEFAULT NULL,
  `elem_year_graduated` varchar(256) DEFAULT NULL,
  `high_school` varchar(256) DEFAULT NULL,
  `hs_type_of_school` varchar(256) DEFAULT NULL,
  `strand` varchar(256) DEFAULT NULL,
  `hs_year_level` varchar(256) DEFAULT NULL,
  `hs_lastyear_attended` varchar(256) DEFAULT NULL,
  `hs_school_address` varchar(256) DEFAULT NULL,
  `college` varchar(256) DEFAULT NULL,
  `col_type_of_school` varchar(256) DEFAULT NULL,
  `course` varchar(256) DEFAULT NULL,
  `col_school_address` varchar(256) DEFAULT NULL,
  `col_lastyear_attended` varchar(256) DEFAULT NULL,
  `pre_strand_course` varchar(256) DEFAULT NULL,
  `psc_school` varchar(256) DEFAULT NULL,
  `special_skill` varchar(256) DEFAULT NULL,
  `income_of_parent` varchar(256) DEFAULT NULL,
  `date_of_application` varchar(256) DEFAULT NULL,
  `recieved_by` varchar(256) DEFAULT NULL,
  `date_joined` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_spes`
--

INSERT INTO `mis_spes` (`spes_id`, `applicant_no`, `spes_compliant`, `type_of_application`, `surname`, `firstname`, `middlename`, `suffix`, `contact`, `civil_status`, `sex`, `date_of_birth`, `age`, `blood_type`, `app_zone_no`, `app_barangay`, `app_municipality`, `app_province`, `religion`, `citizenship`, `language_dialect`, `father_surname`, `father_firstname`, `father_middlename`, `father_occupation`, `number_of_brother`, `mother_surname`, `mother_firstname`, `mother_middlename`, `mother_occupation`, `number_of_sister`, `pa_zone_no`, `pa_barangay`, `pa_municipality`, `pa_province`, `elementary_school`, `elem_type_of_school`, `elem_school_address`, `elem_year_graduated`, `high_school`, `hs_type_of_school`, `strand`, `hs_year_level`, `hs_lastyear_attended`, `hs_school_address`, `college`, `col_type_of_school`, `course`, `col_school_address`, `col_lastyear_attended`, `pre_strand_course`, `psc_school`, `special_skill`, `income_of_parent`, `date_of_application`, `recieved_by`, `date_joined`) VALUES
(1, '01', 'Yes', 'For College', 'Smith', 'Hans', 'V', 'NA', 'For College', 'Married', 'Male', '1990-07-12', '32', 'O', 'Zone 1', 'Mambatangan', 'Manolo Fortich', 'Bukidnon', 'Christian', 'Filipino', 'Cebuano', 'NA', 'NA', 'NA', 'NA', '5', 'NA', 'NA', 'NA', 'NA', '4', 'ZONE1', 'Mambatangan', 'Manolo Fortich', 'Bukidnon', 'Manolo Fortich Elemtary school', 'Public', 'Manolo Fortich Bukidnon', '2002', 'Manolo Fortich National High ', 'Public', 'STEM', 'HIGH SCHOOL GRADUATE', '2009', 'Manolo Fortich Bukidnon', 'NBSC', 'Public', 'BSIT', 'Manolo Fortich', '2022', 'BSIT', 'NBSC', 'NA', '7,000 to 10,000', '2023-09-29', 'NA', '2023-09-29 06:14:15.254672');

-- --------------------------------------------------------

--
-- Table structure for table `mis_tesdatraining`
--

CREATE TABLE `mis_tesdatraining` (
  `tesdatraining_id` int(11) NOT NULL,
  `surname` varchar(256) DEFAULT NULL,
  `firstname` varchar(256) DEFAULT NULL,
  `middlename` varchar(256) DEFAULT NULL,
  `suffix` varchar(256) DEFAULT NULL,
  `date_of_birth` varchar(256) DEFAULT NULL,
  `sex` varchar(256) DEFAULT NULL,
  `street_village` varchar(256) DEFAULT NULL,
  `barangay` varchar(256) DEFAULT NULL,
  `municipality` varchar(256) DEFAULT NULL,
  `province` varchar(256) DEFAULT NULL,
  `religion` varchar(256) DEFAULT NULL,
  `civil_status` varchar(256) DEFAULT NULL,
  `tin` varchar(256) DEFAULT NULL,
  `disability` varchar(256) DEFAULT NULL,
  `height` varchar(256) DEFAULT NULL,
  `contact_number` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `employment_status` varchar(256) DEFAULT NULL,
  `employment_status_employed` varchar(256) DEFAULT NULL,
  `employment_status_unemployed` varchar(256) DEFAULT NULL,
  `Are_you_ofw` varchar(256) DEFAULT NULL,
  `are_you_a_former_ofw` varchar(256) DEFAULT NULL,
  `beneficiary` varchar(256) DEFAULT NULL,
  `prefered_occupation` varchar(256) DEFAULT NULL,
  `prefered_work_location` varchar(256) DEFAULT NULL,
  `language_dialect` varchar(256) DEFAULT NULL,
  `currently_in_school` varchar(256) DEFAULT NULL,
  `education_level` varchar(256) DEFAULT NULL,
  `course` varchar(256) DEFAULT NULL,
  `training` varchar(256) DEFAULT NULL,
  `hours_of_training` varchar(256) DEFAULT NULL,
  `training_institution` varchar(256) DEFAULT NULL,
  `skill_acquired` varchar(256) DEFAULT NULL,
  `certificates_received` varchar(256) DEFAULT NULL,
  `eligibility_civil_service` varchar(256) DEFAULT NULL,
  `professional_licence` varchar(256) DEFAULT NULL,
  `company_name` varchar(256) DEFAULT NULL,
  `position` varchar(256) DEFAULT NULL,
  `number_of_months` varchar(256) DEFAULT NULL,
  `other_skills` varchar(256) DEFAULT NULL,
  `referred_to` varchar(256) DEFAULT NULL,
  `date_joined` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_tesdatraining`
--

INSERT INTO `mis_tesdatraining` (`tesdatraining_id`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `other_skills`, `referred_to`, `date_joined`) VALUES
(1, ' Johnson', 'Dave ', 'B', 'NA', '1998-12-24', 'Male', '7', 'Mambatangan', 'Manolo Fortich', 'Bukidnon', 'Christian', 'Single', 'none', 'NA', '5\'7', '098736764', 'Johnson@mail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'No', '3RD YEAR COLLEGE LEVEL', 'BEED', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'TUPAD', '2023-09-25 05:10:41.386705');

-- --------------------------------------------------------

--
-- Table structure for table `mis_user`
--

CREATE TABLE `mis_user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(200) DEFAULT NULL,
  `user_lname` varchar(200) DEFAULT NULL,
  `user_number` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_pwd` varchar(200) DEFAULT NULL,
  `user_dept` varchar(200) DEFAULT NULL,
  `user_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_user`
--

INSERT INTO `mis_user` (`user_id`, `user_fname`, `user_lname`, `user_number`, `user_email`, `user_pwd`, `user_dept`, `user_dpic`) VALUES
(3, 'Franzcis', 'Xavier', '09263534546', 'franz@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'IT dept', 'franz.png'),
(4, 'Sharlene ', 'Zulita', '09263534343', 'shar@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'IT Dept', 'sharlene.png'),
(5, 'joshua', 'sayagnon', '091646474345', 'josh@mai.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'IT dept', 'joshua.png'),
(8, 'jhai', 'emata', '09156583019', 'jhai@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'IT dept', 'User Default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mis_admin`
--
ALTER TABLE `mis_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `mis_claimclearance`
--
ALTER TABLE `mis_claimclearance`
  ADD PRIMARY KEY (`claimclearance_id`);

--
-- Indexes for table `mis_employment`
--
ALTER TABLE `mis_employment`
  ADD PRIMARY KEY (`employment_id`);

--
-- Indexes for table `mis_gip`
--
ALTER TABLE `mis_gip`
  ADD PRIMARY KEY (`gip_id`);

--
-- Indexes for table `mis_job_opening`
--
ALTER TABLE `mis_job_opening`
  ADD PRIMARY KEY (`job_opening_id`);

--
-- Indexes for table `mis_pwdresets`
--
ALTER TABLE `mis_pwdresets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mis_scholarship`
--
ALTER TABLE `mis_scholarship`
  ADD PRIMARY KEY (`scholarship_id`);

--
-- Indexes for table `mis_spes`
--
ALTER TABLE `mis_spes`
  ADD PRIMARY KEY (`spes_id`);

--
-- Indexes for table `mis_tesdatraining`
--
ALTER TABLE `mis_tesdatraining`
  ADD PRIMARY KEY (`tesdatraining_id`);

--
-- Indexes for table `mis_user`
--
ALTER TABLE `mis_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mis_admin`
--
ALTER TABLE `mis_admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mis_employment`
--
ALTER TABLE `mis_employment`
  MODIFY `employment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mis_gip`
--
ALTER TABLE `mis_gip`
  MODIFY `gip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mis_job_opening`
--
ALTER TABLE `mis_job_opening`
  MODIFY `job_opening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_pwdresets`
--
ALTER TABLE `mis_pwdresets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mis_scholarship`
--
ALTER TABLE `mis_scholarship`
  MODIFY `scholarship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_spes`
--
ALTER TABLE `mis_spes`
  MODIFY `spes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mis_tesdatraining`
--
ALTER TABLE `mis_tesdatraining`
  MODIFY `tesdatraining_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mis_user`
--
ALTER TABLE `mis_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
