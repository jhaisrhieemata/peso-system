-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 05:48 PM
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
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `skill_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `skill_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`skill_id`, `user_id`, `skill_name`) VALUES
(1, 1, 'Coding/Programming'),
(2, 4, 'Data Analysis'),
(3, 12, 'Digital Marketing'),
(4, 14, 'Communication'),
(5, 5, 'Project Management'),
(6, 3, 'Problem Solving'),
(7, 10, 'Adaptability'),
(8, 6, 'Customer Service'),
(9, 9, 'Creativity'),
(10, 8, 'Foreign Language Proficiency'),
(13, 7, 'Coding/Programming');

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
(2, NULL, 'Asiapro Cooperative', 'Camp Phillips, Bukidnon', '+63882233607', 'sample@mail.com', '2023-10-17'),
(3, NULL, 'SK General merchandise Virginia Food Inc. Distributor ', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(4, NULL, 'Good life Damayan Insurance agency ', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(5, NULL, 'RN QuiÃ±o Trucking Services Inc.', 'Lingi-on Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(6, NULL, 'FNK Realty Services Corporation ', 'Alae, Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(7, NULL, 'Pinutos sa Kanto', 'San Miguel, Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(8, NULL, 'Jollibee ', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(9, NULL, 'Sky high Manpower Recruitment ', 'Cagayan de Oro City', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(10, NULL, 'Prince hypermart', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20');

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
  `special_skill` varchar(256) DEFAULT NULL,
  `referred_to` varchar(256) DEFAULT NULL,
  `date_joined` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_employment`
--

INSERT INTO `mis_employment` (`employment_id`, `job_opening_id`, `user_id`, `claimclearance_id`, `or_no`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `special_skill`, `referred_to`, `date_joined`) VALUES
(1, NULL, 1, 1, '0017', 'Emata', 'Jhaisrhie', 'P', 'NA', '1992-04-21', 'Male', 'Zone 1', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'Seventh-day Adventist', 'Single', 'NA', 'NA', '5\'6\'\'', '9156583019', 'sample@mail.com', 'Employed', 'Self-employed (Freelancer)', 'NA', 'No', 'No', 'No', 'Support Technician', 'SULADS Radyo Manolo Fortich SDA Church', 'Cebuano', 'Yes', '4TH YEAR COLLEGE LEVEL', 'NA', 'SMAW ', '48', 'Tagoloan Vocational Institute', 'Welder', 'NCII', 'NA', 'Na', 'RRISMONDO', 'Welder', '48', 'Coding/Programming', 'SPES', '2023-10-24'),
(14, NULL, 8, NULL, '0019', 'Lumala ', 'Sarah ', 'B', 'NA', '1987-09-19', 'Female', 'Zone 1 ', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'Na', 'NA', '5\'0', '9346423891', 'sar@mail.com', 'Unemployed', 'NA', 'NA', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'BEED', 'Na', '1', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', '1', 'Foreign Language Proficiency ', 'SPES', '2023-11-16'),
(16, NULL, 9, NULL, '0018', 'Zambrano', 'Arian joy', 'M', 'NA', '2001-11-15', 'Female', 'Zone 1 ', 'Dalirig', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'Na', 'NA', '5\'0', '9876545464', 'arian@mail.com', 'Employed', 'Wage employed', 'NA', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'BSEE', 'Na', '1', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', 'Na', '1', 'Creativity', 'SPES', '2023-11-16'),
(20, NULL, 10, NULL, NULL, 'Caare', 'Daina', 'M', 'NA', '2006-06-15', 'Female', 'Zone5 ', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'na', 'NA', '5', '9376358689', 'daina@mail.com', 'Unemployed', 'NA', 'NA', 'No', 'No', 'No', 'na', 'na', 'Cebuano', 'Yes', '3RD YEAR COLLEGE LEVEL', 'Na', 'na', '0', 'na', 'Adaptability ', 'na', 'na', 'na', 'na', 'na', '0', 'Adaptability ', 'SPES', '2023-11-20'),
(21, NULL, 12, NULL, NULL, 'Javier', 'Dan Marc', 'p', 'NA', '2004-02-10', 'Male', 'zone1', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'na', 'NA', '5', '09837363726', 'mac@mail.com', 'Employed', 'Wage employed', 'NA', 'No', 'No', 'No', 'na', 'na', 'Cebuano', 'Yes', '1ST YEAR COLLEGE LEVEL', 'Na', 'na', '0', 'na', 'na', 'na', 'na', 'na', 'na', 'na', '0', 'Digital Marketing ', 'SPES', '2023-11-20'),
(22, NULL, NULL, NULL, NULL, 'Pongasi', 'Roldan', 'Gumonan', 'NA', '2000-01-08', 'Male', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '4321', 'NA', '5\'5', '09453810680', 'roldan@mail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'Driver', 'Sankanan ', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'Northern Bukidnon State college ', 'Computer ', '5', 'TESDA', 'Driving', '6 months ', 'N/A', 'N/A', 'Rebisco', 'Supervisor ', '9', 'Hardware ', 'GIP', '2023-11-20'),
(28, NULL, NULL, NULL, NULL, 'Pongasi ', 'Rina', 'Gumonan', 'NA', '2006-11-20', 'Female', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '4321', 'NA', '5\'5', '09453810680', 'rina@mail.com', 'Unemployed', 'NA', 'NA', 'No', 'No', 'No', 'Welder', 'Sankanan ', 'Cebuano', 'Yes', 'HIGH SCHOOL GRADUATE', 'Manolo Fortich National High school ', 'Computer ', '5', 'TESDA', 'Driving', '6 months ', 'N/A', 'N/A', 'DMPI', 'Production', '6', 'Hardware ', 'GIP', '2023-11-20'),
(31, NULL, NULL, NULL, NULL, 'Sayagnon ', 'Ronila', 'Gumonan ', 'NA', '1985-11-20', 'Female', 'Zone 4 ', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Married', '4321', 'NA', '5\'4', '09453810680', 'ronila@mail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'Driver', 'Sankanan ', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'Northern Bukidnon State college ', 'Computer ', '5', 'TESDA', 'Driving', '6 months ', 'N/A', 'N/A', 'Rebisco', 'Production', '9', 'Hardware ', 'GIP', '2023-11-20');

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
(1, 4, '01', 'Yes', 'For College', 'Sayagnon ', 'Joshua ', 'B', 'NA', '9156325865', 'Single', 'Male', '2001-07-18', '22', 'O', 'Zone 1 ', 'Lindaban', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Filipino ', 'Cebuano', 'Na', 'Na', 'Na', 'NA', '2', 'Na', 'Na', 'Na', 'NA', '2', 'Zone 2 ', 'Lindaban', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'Na', '2019', 'Na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2022', 'Na', 'Na', 'Public', 'BSIT ', 'Ba', '2023', 'Na', 'Na', 'Data Analysis ', '5,000 and below', '2023-11-14', 'Na', '2023-11-14'),
(2, 7, '02', 'Yes', 'For College', 'Sigongan', 'Jerome ', 'S', 'NA', '09159643182', 'Single', 'Male', '1994-07-06', NULL, 'O', 'Zone 1', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'Catholic', 'Filipino', 'Cebuano', 'na', 'na', 'na', 'NA', '4', 'na', 'na', 'na', 'NA', '3', 'Zone 1 ', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'na', '2015', 'na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2017', 'na', 'NBSC', 'Public', 'BSIT', 'Na', '2023', 'na', 'na', 'Coding/Programming ', '5,000 and below', '2023-11-20', 'na', '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `mis_job_opening`
--

CREATE TABLE `mis_job_opening` (
  `job_opening_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
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

INSERT INTO `mis_job_opening` (`job_opening_id`, `user_id`, `job_name`, `job_description`, `com_name`, `address`, `contact`, `email`, `date_posted`) VALUES
(1, NULL, 'Mechanical Techician', 'Plant Maintenance', 'SMC REPAIRS & MAINTENANCE', 'Manolo Fortich Bukidnon', 'NA', 'careers@rmi.sanmiguel.com.ph', '2023-09-27'),
(4, NULL, 'Warehouse Coordinator', 'Management inventory, maintaining accurate record ', 'VIENOVO FEED FOR LIFE', 'Manolo Fortich Bukidnon', '09178086976', 'sample@mail.com', '2023-10-17'),
(5, 1, 'Software Developer', 'Full stack dev', 'Amazon', 'USSR', '404', 'amazon@mail.com', '2023-11-19'),
(7, NULL, 'Data scientist ', 'mathematics ', 'Google', 'New york', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(8, NULL, 'Marketing Manager', 'mathematics ', 'Rebisco', 'Alae, manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(9, NULL, 'Project Manager ', 'mathematics ', 'Google', 'San Pedro Laguna', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(10, NULL, 'Problem Solver', 'mathematics ', 'Google', 'Cagayan de Oro City', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(11, NULL, 'Adaptability Specialist ', 'mathematics ', 'Google', 'Libona Bukidnon', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(12, NULL, 'Customer service ', 'mathematics ', 'Jollibee', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(13, NULL, 'Creative Designer', 'mathematics ', 'Google', 'Las Vegas', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(14, NULL, 'Language Interpreter ', 'Teacher', 'Google', 'Australia ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20');

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
(1, 2, '01', 'For College', 'Zulita ', 'Sharlene ', 'M', 'NA', '9464543431', 'Married', 'Female', '2000-06-10', '23', 'O', 'Zone 1 ', 'Ticala', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Filipino ', 'Cebuano', 'Na', 'Na', 'Na', 'NA', '5', 'Na', 'Na', 'Na', 'NA', '3', 'Zone 2 ', 'Ticala', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'Na', '2018', 'Na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2021', 'Na', 'Na', 'Public', 'BSIT ', 'Ba', '2023', 'Na', 'Na', 'Foreign Language Proficiency ', '5,000 and below', '2023-11-14', 'Na', '2023-11-14'),
(3, 6, '02', 'For Senior High School', 'Israel', 'Stephen', 'I', 'NA', '09158646431', 'Single', 'Male', '2006-09-01', '17', 'O', 'Zone4', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Filipino', 'Cebuano', 'na', 'na', 'na', 'NA', '2', 'na', 'na', 'na', 'NA', '2', 'Zone5', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'na', '2023', 'na', 'Public', 'ICT', '3RD YEAR HIGH SCHOOL/GRADE IX (FOR K TO 12)', '2023', 'na', 'MFNH', 'Public', 'Na', 'Na', '2023', 'na', 'na', 'Customer Service ', '5,000 and below', '2023-11-20', 'na', '2023-11-20');

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
(1, 3, '01', 'Yes', 'For College', 'Talipan ', 'Francis ', 'D', 'NA', '9234281363', 'Single', 'Male', '2000-06-15', '23', 'Ab', 'Zone 1 ', 'Lingion', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Filipino ', 'Cebuano', 'Na', 'Na', 'Na', 'Employed', '2', 'Na', 'Na', 'Na', 'Employed', '2', 'Zone 2 ', 'Lingion', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'Na', '1992', 'Na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2023', 'Na', 'Na', 'Public', 'BSIT ', 'Ba', '2023', 'Na', 'Na', 'Problem Solving ', '5,000 and below', '2023-11-14', 'Na', '2023-11-14'),
(2, 14, '02', 'Yes', 'For College', 'Martos', 'Jermae', 'M', 'NA', '9577576831', 'Single', 'Female', '2002-07-05', '21', 'AB+', 'Zone 4', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'Catholic', 'Filipino', 'Cebuano', 'na', 'na', 'na', 'NA', '3', 'na', 'na', 'na', 'NA', '3', 'Zone4', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'Na', 'Public', 'na', '2021', 'na', 'Public', 'ICT', 'HIGH SCHOOL GRADUATE', '2021', 'na', 'NBSC', 'Public', 'BSIT', 'MF', '2023', 'na', 'na', 'Communication', '5,000 and below', '2023-11-17', 'na', '2023-11-17');

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
  `special_skill` varchar(256) DEFAULT NULL,
  `referred_to` varchar(256) DEFAULT NULL,
  `date_joined` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_tesdatraining`
--

INSERT INTO `mis_tesdatraining` (`tesdatraining_id`, `user_id`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `special_skill`, `referred_to`, `date_joined`) VALUES
(1, 5, 'Montimar', 'James', 'M', 'NA', '2004-02-04', 'Male', 'Purok 13 ', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'SDA ', 'Single', 'N/A', 'NA', '5\'2', 'N/A', 'james.montimar@gmail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'English', 'No', '1ST YEAR COLLEGE LEVEL', 'BSIT', 'N/A', 'N/A', 'N/A', 'Project Management ', 'N/A', 'N/A', 'N/A', 'Computer shop', 'Cleaner', '10 days', 'Project Management', 'GIP', '2023-11-20 05:01:20.451403');

-- --------------------------------------------------------

--
-- Table structure for table `mis_tesda_course`
--

CREATE TABLE `mis_tesda_course` (
  `tesda_course_id` int(11) NOT NULL,
  `course_offered` varchar(256) DEFAULT NULL,
  `trainer_hours` varchar(256) DEFAULT NULL,
  `trainer` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_tesda_course`
--

INSERT INTO `mis_tesda_course` (`tesda_course_id`, `course_offered`, `trainer_hours`, `trainer`, `status`) VALUES
(1, 'Driving', '286', 'Not indicated', 'Available '),
(2, 'Welding', '186', 'Not indicated', 'Available '),
(3, 'Electrical', '186', 'Not indicated', 'Available '),
(4, 'Tailoring', '186', 'Not indicated', 'Available ');

-- --------------------------------------------------------

--
-- Table structure for table `mis_user`
--

CREATE TABLE `mis_user` (
  `user_id` int(11) NOT NULL,
  `regtype_id` int(11) DEFAULT NULL,
  `skill_id` int(11) DEFAULT NULL,
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

INSERT INTO `mis_user` (`user_id`, `regtype_id`, `skill_id`, `user_fname`, `user_lname`, `user_number`, `user_email`, `user_pwd`, `user_pwd_confirm`, `regtype`, `user_dpic`) VALUES
(1, 1, 1, 'jhaisrhie', 'Emata', '09156583019', 'jhai@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', '135866136_434805517706014_1505728466535786495_n.jpg'),
(2, 2, 10, 'Sharlene', 'Zulita', '09356748476', 'shar@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Scholarship', 'sharlene.png'),
(3, 3, 6, 'Francis', 'Talipan', '098756335421', 'fran@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'SPES', 'franz.png'),
(4, 4, 2, 'Joshua', 'Sayagnon', '09458736352', 'jos@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'GIP', 'joshua.png'),
(5, 5, 5, 'james', 'montimar', '09164527252', 'james@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'TesdaTraining', 'user1.jpg'),
(6, 2, 8, 'Stephen', 'Israel', '09158646431', 'step@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Scholarship', '16999740510351933569357333252198.jpg'),
(7, 4, NULL, 'Jerome ', 'Sigongan', '09159643182', 'jerome@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'GIP', '16999773405569113899911983231109.jpg'),
(8, 1, NULL, 'Sarah ', 'Lumala', '09162365852', 'sar@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'User Default.png'),
(9, 1, 9, 'Arian zoy ', 'Zambrano ', '09319431365', 'arian@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'user-default-2-min.png'),
(10, 1, NULL, 'Daina', 'Caare', '09376358689', 'daina@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'User Default.png'),
(11, 1, NULL, 'Von', 'salas', '09863683921', 'von@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'user1.jpg'),
(12, 1, NULL, 'dan marc', 'javier', '09837363726', 'mac@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'user1.jpg'),
(13, 1, NULL, 'Pj', 'Martinez', '9187674634', 'pj@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'user1.jpg'),
(14, 3, 4, 'Jermae', 'Martos', '09577576831', 'jermae@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'SPES', 'User Default.png'),
(15, NULL, NULL, 'Roldan', 'Pongasi', '09453810680', 'roldan@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'VID20231022135702.mp4'),
(16, NULL, NULL, 'Rina', 'Pongasi ', '09453810680', 'rina@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'IMG_20231105_164854.jpg'),
(17, NULL, NULL, 'Ronila', 'Sayagnon ', '09453810680', 'ronila@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Employment', 'IMG20230820133024.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `regtypes`
--

CREATE TABLE `regtypes` (
  `regtype_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `regtype_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regtypes`
--

INSERT INTO `regtypes` (`regtype_id`, `user_id`, `regtype_name`) VALUES
(1, 1, 'Employment'),
(2, 2, 'Scholarship'),
(3, 3, 'SPES'),
(4, 4, 'GIP'),
(5, 5, 'TesdaTraining'),
(6, 6, 'Scholarship'),
(7, 7, 'GIP'),
(8, 8, 'Employment'),
(9, 9, 'Employment'),
(10, 10, 'Employment'),
(11, 11, 'Employment'),
(12, 12, 'Employment'),
(13, 13, 'Employment'),
(14, 14, 'SPES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `user_id` (`user_id`);

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
  ADD PRIMARY KEY (`job_opening_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `mis_tesda_course`
--
ALTER TABLE `mis_tesda_course`
  ADD PRIMARY KEY (`tesda_course_id`);

--
-- Indexes for table `mis_user`
--
ALTER TABLE `mis_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `regtype_id` (`regtype_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- Indexes for table `regtypes`
--
ALTER TABLE `regtypes`
  ADD PRIMARY KEY (`regtype_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mis_admin`
--
ALTER TABLE `mis_admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_agency`
--
ALTER TABLE `mis_agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mis_claimclearance`
--
ALTER TABLE `mis_claimclearance`
  MODIFY `claimclearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mis_employment`
--
ALTER TABLE `mis_employment`
  MODIFY `employment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mis_gip`
--
ALTER TABLE `mis_gip`
  MODIFY `gip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mis_job_opening`
--
ALTER TABLE `mis_job_opening`
  MODIFY `job_opening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mis_scholarship`
--
ALTER TABLE `mis_scholarship`
  MODIFY `scholarship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `mis_tesda_course`
--
ALTER TABLE `mis_tesda_course`
  MODIFY `tesda_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mis_user`
--
ALTER TABLE `mis_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `regtypes`
--
ALTER TABLE `regtypes`
  MODIFY `regtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expertise`
--
ALTER TABLE `expertise`
  ADD CONSTRAINT `expertise_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mis_user` (`user_id`);

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
-- Constraints for table `mis_job_opening`
--
ALTER TABLE `mis_job_opening`
  ADD CONSTRAINT `mis_job_opening_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mis_user` (`user_id`);

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
  ADD CONSTRAINT `mis_user_ibfk_6` FOREIGN KEY (`regtype_id`) REFERENCES `regtypes` (`regtype_id`),
  ADD CONSTRAINT `mis_user_ibfk_7` FOREIGN KEY (`skill_id`) REFERENCES `expertise` (`skill_id`);

--
-- Constraints for table `regtypes`
--
ALTER TABLE `regtypes`
  ADD CONSTRAINT `regtypes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mis_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
