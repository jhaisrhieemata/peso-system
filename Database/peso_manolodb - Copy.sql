-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 07:18 AM
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
-- Database: `peso_manolodb`
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
(1, 'System', 'Administrator', 'System@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'admin1.jpg'),
(2, 'Admin', 'Administrator', 'Admin@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'admin1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mis_agency`
--

CREATE TABLE `mis_agency` (
  `agency_id` int(11) NOT NULL,
  `employment_id` int(11) DEFAULT NULL,
  `agency_name` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `contact` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_agency`
--

INSERT INTO `mis_agency` (`agency_id`, `employment_id`, `agency_name`, `address`, `contact`, `email`, `date_created`) VALUES
(1, 1, 'General Services Cooperative', 'BORJA ROAD, DAMILAG, 8705 Manolo Fortich, Bukidnon', '0983893988938', 'sample@mail.com', '2023-10-17'),
(2, NULL, 'Asiapro Cooperative', 'Camp Phillips, Bukidnon', '+63882233607', 'sample@mail.com', '2023-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `mis_claimclearance`
--

CREATE TABLE `mis_claimclearance` (
  `claimclearance_id` int(11) NOT NULL,
  `employment_id` int(11) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `or_no` varchar(256) DEFAULT NULL,
  `date_issued` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_claimclearance`
--

INSERT INTO `mis_claimclearance` (`claimclearance_id`, `employment_id`, `agency_id`, `or_no`, `date_issued`) VALUES
(1, 1, 1, '0017', '2023-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `mis_employment`
--

CREATE TABLE `mis_employment` (
  `employment_id` int(11) NOT NULL,
  `job_opening_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `claimclearance_id` int(11) DEFAULT NULL,
  `or_no` varchar(20) DEFAULT NULL,
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

INSERT INTO `mis_employment` (`employment_id`, `job_opening_id`, `user_id`, `claimclearance_id`, `or_no`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `other_skills`, `referred_to`, `date_joined`) VALUES
(1, NULL, 1, 1, '0017', 'Emata', 'Jhaisrhie', 'P', 'NA', '1992-04-21', 'Male', 'Zone 1', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Single', 'NA', 'NA', '5\'6\'\'', '9156583019', 'sample@mail.com', 'Employed', 'Self-employed (Freelancer)', NULL, 'No', 'No', 'No', 'Support Technician', 'SULADS Radyo Manolo Fortich SDA Church', 'Cebuano', 'Yes', '4TH YEAR COLLEGE LEVEL', 'NA', 'SMAW ', '48', 'Tagoloan Vocational Institute', 'Welder', 'NCII', 'NA', 'Na', 'RRISMONDO', 'Welder', '48', 'Web dev', 'SPES', '2023-10-24'),
(14, NULL, 8, NULL, NULL, 'Lumala ', 'Sarah ', 'B', 'NA', '1987-09-19', 'Female', 'Zone 1 ', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'Na', 'NA', '5\'0\"', '09346423891', 'sar@mail.com', 'Unemployed', 'NA', 'NA', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'BEED', 'Na', '1', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', '1', 'Na', 'SPES', '2023-11-16'),
(16, NULL, NULL, NULL, NULL, 'Zambrano', 'Arian joy', 'M', 'NA', '2001-11-15', 'Female', 'Zone 1 ', 'Dalirig', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'Na', 'NA', '5\'0\"', '09876545464', 'arian@mail.com', 'Employed', 'Wage employed', 'NA', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'BSEE', 'Na', '1', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', '1', '1', 'SPES', '2023-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `mis_employment_backup`
--

CREATE TABLE `mis_employment_backup` (
  `employment_id` int(11) NOT NULL DEFAULT 0,
  `job_opening_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `claimclearance_id` int(11) DEFAULT NULL,
  `or_no` varchar(20) DEFAULT NULL,
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
-- Dumping data for table `mis_employment_backup`
--

INSERT INTO `mis_employment_backup` (`employment_id`, `job_opening_id`, `user_id`, `claimclearance_id`, `or_no`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `other_skills`, `referred_to`, `date_joined`) VALUES
(15, NULL, 11, NULL, NULL, 'Salas', 'Von', 'S', 'NA', '2003-02-05', 'Male', 'Zone 1 ', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'Na', 'NA', '5\'0\"', '09877563750', 'von@mail.com', 'Unemployed', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'Yes', 'HIGH SCHOOL LEVEL', 'na', 'Na', '1', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', '1', 'Na', 'SPES', '2023-11-16'),
(17, NULL, NULL, NULL, '', 'Caare', 'Daina', 'M', 'NA', '2004-05-27', 'Female', 'Zone 1 ', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'Na', 'NA', '5\'0', '9376358689', 'daina@mail.com', 'Employed', 'Wage employed', 'NA', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'Yes', '3RD YEAR COLLEGE LEVEL', 'na', 'Na', 'Na', 'Na', 'Teacher ', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', 'SPES', '2023-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `mis_gip`
--

CREATE TABLE `mis_gip` (
  `gip_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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
  `age_` varchar(256) DEFAULT NULL,
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
  `date_joined` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_gip`
--

INSERT INTO `mis_gip` (`gip_id`, `user_id`, `applicant_no`, `gip_compliant`, `type_of_application`, `surname`, `firstname`, `middlename`, `suffix`, `contact`, `civil_status`, `sex`, `date_of_birth`, `age_`, `blood_type`, `app_zone_no`, `app_barangay`, `app_municipality`, `app_province`, `religion`, `citizenship`, `language_dialect`, `father_surname`, `father_firstname`, `father_middlename`, `father_occupation`, `number_of_brother`, `mother_surname`, `mother_firstname`, `mother_middlename`, `mother_occupation`, `number_of_sister`, `pa_zone_no`, `pa_barangay`, `pa_municipality`, `pa_province`, `elementary_school`, `elem_type_of_school`, `elem_school_address`, `elem_year_graduated`, `high_school`, `hs_type_of_school`, `strand`, `hs_year_level`, `hs_lastyear_attended`, `hs_school_address`, `college`, `col_type_of_school`, `course`, `col_school_address`, `col_lastyear_attended`, `pre_strand_course`, `psc_school`, `special_skill`, `income_of_parent`, `date_of_application`, `recieved_by`, `date_joined`) VALUES
(1, 4, '01', 'Yes', 'For College', 'Sayagnon ', 'Joshua ', 'B', 'NA', '9156325865', 'Single', 'Male', '2001-07-18', '22', 'O', 'Zone 1 ', 'Lindaban', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Filipino ', 'Cebuano', 'Na', 'Na', 'Na', 'NA', '2', 'Na', 'Na', 'Na', 'NA', '2', 'Zone 2 ', 'Lindaban', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'Na', '2019', 'Na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2022', 'Na', 'Na', 'Public', 'BSIT ', 'Ba', '2023', 'Na', 'Na', 'Na', '5,000 and below', '2023-11-14', 'Na', '2023-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `mis_job_opening`
--

CREATE TABLE `mis_job_opening` (
  `job_opening_id` int(11) NOT NULL,
  `job_name` varchar(256) NOT NULL,
  `job_description` longtext NOT NULL,
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
(1, 'Mechanical Techician', 'Plant Maintenance', 'SMC REPAIRS & MAINTENANCE', 'Manolo Fortich Bukidnon', 'NA', 'careers@rmi.sanmiguel.com.ph', '2023-09-27'),
(4, 'Warehouse Coordinator', 'Management inventory, maintaining accurate record ', 'VIENOVO FEED FOR LIFE', 'Manolo Fortich Bukidnon', '09178086976', 'sample@mail.com', '2023-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `mis_scholarship`
--

CREATE TABLE `mis_scholarship` (
  `scholarship_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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
  `age_` varchar(256) DEFAULT NULL,
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
  `date_joined` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_scholarship`
--

INSERT INTO `mis_scholarship` (`scholarship_id`, `user_id`, `applicant_no`, `type_of_application`, `surname`, `firstname`, `middlename`, `suffix`, `contact`, `civil_status`, `sex`, `date_of_birth`, `age_`, `blood_type`, `app_zone_no`, `app_barangay`, `app_municipality`, `app_province`, `religion`, `citizenship`, `language_dialect`, `father_surname`, `father_firstname`, `father_middlename`, `father_occupation`, `number_of_brother`, `mother_surname`, `mother_firstname`, `mother_middlename`, `mother_occupation`, `number_of_sister`, `pa_zone_no`, `pa_barangay`, `pa_municipality`, `pa_province`, `elementary_school`, `elem_type_of_school`, `elem_school_address`, `elem_year_graduated`, `high_school`, `hs_type_of_school`, `strand`, `hs_year_level`, `hs_lastyear_attended`, `hs_school_address`, `college`, `col_type_of_school`, `course`, `col_school_address`, `col_lastyear_attended`, `pre_strand_course`, `psc_school`, `special_skill`, `income_of_parent`, `date_of_application`, `recieved_by`, `date_joined`) VALUES
(1, 2, '01', 'For College', 'Zulita ', 'Sharlene ', 'M', 'NA', '09464543431', 'Married', 'Female', '2000-06-10', '23', 'O', 'Zone 1 ', 'Ticala', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Filipino ', 'Cebuano', 'Na', 'Na', 'Na', 'NA', '5', 'Na', 'Na', 'Na', 'NA', '3', 'Zone 2 ', 'Ticala', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'Na', '2018', 'Na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2021', 'Na', 'Na', 'Public', 'BSIT ', 'Ba', '2023', 'Na', 'Na', 'Na', '5,000 and below', '2023-11-14', 'Na', '2023-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `mis_spes`
--

CREATE TABLE `mis_spes` (
  `spes_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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
  `age_` varchar(256) DEFAULT NULL,
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
  `date_joined` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_spes`
--

INSERT INTO `mis_spes` (`spes_id`, `user_id`, `applicant_no`, `spes_compliant`, `type_of_application`, `surname`, `firstname`, `middlename`, `suffix`, `contact`, `civil_status`, `sex`, `date_of_birth`, `age_`, `blood_type`, `app_zone_no`, `app_barangay`, `app_municipality`, `app_province`, `religion`, `citizenship`, `language_dialect`, `father_surname`, `father_firstname`, `father_middlename`, `father_occupation`, `number_of_brother`, `mother_surname`, `mother_firstname`, `mother_middlename`, `mother_occupation`, `number_of_sister`, `pa_zone_no`, `pa_barangay`, `pa_municipality`, `pa_province`, `elementary_school`, `elem_type_of_school`, `elem_school_address`, `elem_year_graduated`, `high_school`, `hs_type_of_school`, `strand`, `hs_year_level`, `hs_lastyear_attended`, `hs_school_address`, `college`, `col_type_of_school`, `course`, `col_school_address`, `col_lastyear_attended`, `pre_strand_course`, `psc_school`, `special_skill`, `income_of_parent`, `date_of_application`, `recieved_by`, `date_joined`) VALUES
(1, 3, '01', 'Yes', 'For College', 'Talipan ', 'Francis ', 'D', 'NA', '09234281363', 'Single', 'Male', '2000-06-15', '23', 'Ab', 'Zone 1 ', 'Lingion', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Filipino ', 'Cebuano', 'Na', 'Na', 'Na', 'Employed', '2', 'Na', 'Na', 'Na', 'Employed', '2', 'Zone 2 ', 'Lingion', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'Na', '1992', 'Na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2023', 'Na', 'Na', 'Public', 'BSIT ', 'Ba', '2023', 'Na', 'Na', 'Na', '5,000 and below', '2023-11-14', 'Na', '2023-11-14'),
(2, 14, '02', 'Yes', 'For College', 'Martos', 'Jermae', 'M', 'NA', '09577576831', 'Single', 'Female', '2002-07-05', '21', 'AB+', 'Zone 4', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'Catholic', 'Filipino', 'Cebuano', 'na', 'na', 'na', 'NA', '3', 'na', 'na', 'na', 'NA', '3', 'Zone4', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'na', '2021', 'na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2021', 'na', 'NBSC', 'Public', 'BSIT', 'MF', '2023', 'na', 'na', 'na', '5,000 and below', '2023-11-17', 'na', '2023-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `mis_tesdatraining`
--

CREATE TABLE `mis_tesdatraining` (
  `tesdatraining_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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

INSERT INTO `mis_tesdatraining` (`tesdatraining_id`, `user_id`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `other_skills`, `referred_to`, `date_joined`) VALUES
(1, 5, 'Montimar', 'James', 'M', 'NA', '2004-02-04', 'Male', 'Purok 13 ', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'SDA ', 'Single', 'N/A', 'NA', '5\'2', 'N/A', 'james.montimar@gmail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'English', 'No', '1ST YEAR COLLEGE LEVEL', 'BSIT', 'N/A', 'N/A', 'N/A', 'Tapulan ', 'N/A', 'N/A', 'N/A', 'Computer shop', 'Cleaner', '10 days', 'N/A', 'GIP', '2023-11-14 11:54:16.789052');

-- --------------------------------------------------------

--
-- Table structure for table `mis_user`
--

CREATE TABLE `mis_user` (
  `user_id` int(11) NOT NULL,
  `employment_id` int(11) DEFAULT NULL,
  `scholarship_id` int(11) DEFAULT NULL,
  `spes_id` int(11) DEFAULT NULL,
  `gip_id` int(11) DEFAULT NULL,
  `tesdatraining_id` int(11) DEFAULT NULL,
  `user_fname` varchar(200) DEFAULT NULL,
  `user_lname` varchar(200) DEFAULT NULL,
  `user_number` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_pwd` varchar(200) DEFAULT NULL,
  `user_pwd_confirm` varchar(200) DEFAULT NULL,
  `regtype` varchar(256) DEFAULT NULL,
  `user_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_user`
--

INSERT INTO `mis_user` (`user_id`, `employment_id`, `scholarship_id`, `spes_id`, `gip_id`, `tesdatraining_id`, `user_fname`, `user_lname`, `user_number`, `user_email`, `user_pwd`, `user_pwd_confirm`, `regtype`, `user_dpic`) VALUES
(1, 1, NULL, NULL, NULL, NULL, 'jhaisrhie', 'Emata', '09156583019', 'jhai@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', '135866136_434805517706014_1505728466535786495_n.jpg'),
(2, NULL, 1, NULL, NULL, NULL, 'Sharlene', 'Zulita', '09356748476', 'shar@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Scholarship', 'sharlene.png'),
(3, NULL, NULL, 1, NULL, NULL, 'Francis', 'Talipan', '098756335421', 'fran@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'SPES', 'franz.png'),
(4, NULL, NULL, NULL, 1, NULL, 'Joshua', 'Sayagnon', '09458736352', 'jos@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'GIP', 'joshua.png'),
(5, NULL, NULL, NULL, NULL, 1, 'james', 'montimar', '09164527252', 'james@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'TesdaTraining', 'user1.jpg'),
(6, NULL, NULL, NULL, NULL, NULL, 'Stephen', 'Israel', '09158646431', 'step@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Scholarship', '16999740510351933569357333252198.jpg'),
(7, NULL, NULL, NULL, NULL, NULL, 'Jerome ', 'Sigongan', '09159643182', 'jerome@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'GIP', '16999773405569113899911983231109.jpg'),
(8, NULL, NULL, NULL, NULL, NULL, 'Sarah ', 'Lumala', '09162365852', 'sar@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'FB_IMG_1700120969068.jpg'),
(9, NULL, NULL, NULL, NULL, NULL, 'Arian zoy ', 'Zambrano ', '09319431365', 'arian@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'IMG_20231115_190133_554.jpg'),
(10, NULL, NULL, NULL, NULL, NULL, 'Daina', 'Caare', '09376358689', 'daina@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'User Default.png'),
(11, NULL, NULL, NULL, NULL, NULL, 'Von', 'salas', '09863683921', 'von@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'user1.jpg'),
(12, NULL, NULL, NULL, NULL, NULL, 'dan marc', 'javier', '09837363726', 'mac@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'user1.jpg'),
(13, NULL, NULL, NULL, NULL, NULL, 'Pj', 'Martinez', '9187674634', 'pj@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'user1.jpg'),
(14, NULL, NULL, 2, NULL, NULL, 'Jermae', 'Martos', '09577576831', 'jermae@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'SPES', 'User Default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mis_admin`
--
ALTER TABLE `mis_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `mis_agency`
--
ALTER TABLE `mis_agency`
  ADD PRIMARY KEY (`agency_id`),
  ADD KEY `employment_id` (`employment_id`);

--
-- Indexes for table `mis_claimclearance`
--
ALTER TABLE `mis_claimclearance`
  ADD PRIMARY KEY (`claimclearance_id`),
  ADD KEY `fk_agency_id` (`agency_id`),
  ADD KEY `fk_employment_id` (`employment_id`);

--
-- Indexes for table `mis_employment`
--
ALTER TABLE `mis_employment`
  ADD PRIMARY KEY (`employment_id`),
  ADD KEY `job_opening_id` (`job_opening_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `claimclearance_id` (`claimclearance_id`);

--
-- Indexes for table `mis_gip`
--
ALTER TABLE `mis_gip`
  ADD PRIMARY KEY (`gip_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mis_job_opening`
--
ALTER TABLE `mis_job_opening`
  ADD PRIMARY KEY (`job_opening_id`);

--
-- Indexes for table `mis_scholarship`
--
ALTER TABLE `mis_scholarship`
  ADD PRIMARY KEY (`scholarship_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mis_spes`
--
ALTER TABLE `mis_spes`
  ADD PRIMARY KEY (`spes_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mis_tesdatraining`
--
ALTER TABLE `mis_tesdatraining`
  ADD PRIMARY KEY (`tesdatraining_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mis_user`
--
ALTER TABLE `mis_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `employment_id` (`employment_id`),
  ADD KEY `scholarship_id` (`scholarship_id`),
  ADD KEY `spes_id` (`spes_id`),
  ADD KEY `gip_id` (`gip_id`),
  ADD KEY `tesdatraining_id` (`tesdatraining_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mis_admin`
--
ALTER TABLE `mis_admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_agency`
--
ALTER TABLE `mis_agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_claimclearance`
--
ALTER TABLE `mis_claimclearance`
  MODIFY `claimclearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mis_employment`
--
ALTER TABLE `mis_employment`
  MODIFY `employment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mis_gip`
--
ALTER TABLE `mis_gip`
  MODIFY `gip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mis_job_opening`
--
ALTER TABLE `mis_job_opening`
  MODIFY `job_opening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mis_scholarship`
--
ALTER TABLE `mis_scholarship`
  MODIFY `scholarship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_spes`
--
ALTER TABLE `mis_spes`
  MODIFY `spes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_tesdatraining`
--
ALTER TABLE `mis_tesdatraining`
  MODIFY `tesdatraining_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_user`
--
ALTER TABLE `mis_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mis_agency`
--
ALTER TABLE `mis_agency`
  ADD CONSTRAINT `mis_agency_ibfk_1` FOREIGN KEY (`employment_id`) REFERENCES `mis_employment` (`employment_id`);

--
-- Constraints for table `mis_employment`
--
ALTER TABLE `mis_employment`
  ADD CONSTRAINT `mis_employment_ibfk_5` FOREIGN KEY (`job_opening_id`) REFERENCES `mis_job_opening` (`job_opening_id`),
  ADD CONSTRAINT `mis_employment_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `mis_user` (`user_id`),
  ADD CONSTRAINT `mis_employment_ibfk_7` FOREIGN KEY (`claimclearance_id`) REFERENCES `mis_claimclearance` (`claimclearance_id`);

--
-- Constraints for table `mis_gip`
--
ALTER TABLE `mis_gip`
  ADD CONSTRAINT `mis_gip_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mis_user` (`user_id`);

--
-- Constraints for table `mis_scholarship`
--
ALTER TABLE `mis_scholarship`
  ADD CONSTRAINT `mis_scholarship_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mis_user` (`user_id`);

--
-- Constraints for table `mis_spes`
--
ALTER TABLE `mis_spes`
  ADD CONSTRAINT `mis_spes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mis_user` (`user_id`);

--
-- Constraints for table `mis_tesdatraining`
--
ALTER TABLE `mis_tesdatraining`
  ADD CONSTRAINT `mis_tesdatraining_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mis_user` (`user_id`);

--
-- Constraints for table `mis_user`
--
ALTER TABLE `mis_user`
  ADD CONSTRAINT `mis_user_ibfk_1` FOREIGN KEY (`employment_id`) REFERENCES `mis_employment` (`employment_id`),
  ADD CONSTRAINT `mis_user_ibfk_2` FOREIGN KEY (`scholarship_id`) REFERENCES `mis_scholarship` (`scholarship_id`),
  ADD CONSTRAINT `mis_user_ibfk_3` FOREIGN KEY (`spes_id`) REFERENCES `mis_spes` (`spes_id`),
  ADD CONSTRAINT `mis_user_ibfk_4` FOREIGN KEY (`gip_id`) REFERENCES `mis_gip` (`gip_id`),
  ADD CONSTRAINT `mis_user_ibfk_5` FOREIGN KEY (`tesdatraining_id`) REFERENCES `mis_tesdatraining` (`tesdatraining_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
