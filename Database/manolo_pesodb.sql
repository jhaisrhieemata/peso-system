-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 12:36 AM
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
-- Database: `manolo_pesodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_fname` varchar(200) DEFAULT NULL,
  `ad_lname` varchar(200) DEFAULT NULL,
  `ad_email` varchar(200) DEFAULT NULL,
  `ad_pwd` varchar(200) DEFAULT NULL,
  `ad_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_fname`, `ad_lname`, `ad_email`, `ad_pwd`, `ad_dpic`) VALUES
(1, 'System', 'Administrator', 'System@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'admin1.jpg'),
(2, 'Admin', 'Administrator', 'Admin@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'admin1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `agency_id` int(11) NOT NULL,
  `job_seeker_id` int(11) NOT NULL DEFAULT 0,
  `agency_name` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `contact` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`agency_id`, `job_seeker_id`, `agency_name`, `address`, `contact`, `email`, `date_created`) VALUES
(1, 2, 'General Services Cooperative', 'BORJA ROAD, DAMILAG, 8705 Manolo Fortich', '0983893988938', 'sample@mail.com', '2023-10-17'),
(2, 0, 'Asiapro Cooperative', 'Camp Phillips, Bukidnon', '+63882233607', 'sample@mail.com', '2023-10-17'),
(3, 0, 'SK General merchandise Virginia Food Inc. Distributor ', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(4, 0, 'Good life Damayan Insurance agency ', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(5, 0, 'RN QuiÃ±o Trucking Services Inc.', 'Lingi-on Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(6, 0, 'FNK Realty Services Corporation ', 'Alae, Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(7, 0, 'Pinutos sa Kanto', 'San Miguel, Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(8, 0, 'Jollibee ', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(9, 0, 'Sky high Manpower Recruitment ', 'Cagayan de Oro City', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(10, 0, 'Prince Hypermart ', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `claim_clearance`
--

CREATE TABLE `claim_clearance` (
  `claim_clearance_id` int(11) NOT NULL,
  `job_seeker_id` int(11) NOT NULL DEFAULT 0,
  `agency_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim_clearance`
--

INSERT INTO `claim_clearance` (`claim_clearance_id`, `job_seeker_id`, `agency_id`) VALUES
(7, 3, NULL),
(8, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`skill_id`, `skill_name`) VALUES
(1, 'Coding/Programming'),
(2, 'Data Analysis'),
(3, 'Digital Marketing'),
(4, 'Communication'),
(5, 'Project Management'),
(6, 'Problem Solving'),
(7, 'Adaptability'),
(8, 'Customer Service'),
(9, 'Creativity'),
(10, 'Foreign Language Proficiency'),
(13, 'Coding/Programming');

-- --------------------------------------------------------

--
-- Table structure for table `gip`
--

CREATE TABLE `gip` (
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

-- --------------------------------------------------------

--
-- Table structure for table `job_posting`
--

CREATE TABLE `job_posting` (
  `job_posting_id` int(11) NOT NULL,
  `job_seeker_id` int(11) DEFAULT 0,
  `job_name` varchar(256) NOT NULL,
  `job_description` longtext NOT NULL,
  `com_name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `contact` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date_posted` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_posting`
--

INSERT INTO `job_posting` (`job_posting_id`, `job_seeker_id`, `job_name`, `job_description`, `com_name`, `address`, `contact`, `email`, `date_posted`) VALUES
(1, 1, 'Mechanical Techician', 'Plant Maintenance', 'SMC REPAIRS & MAINTENANCE', 'Manolo Fortich Bukidnon', 'NA', 'careers@rmi.sanmiguel.com.ph', '2023-09-27'),
(4, NULL, 'Warehouse Coordinator', 'Management inventory, maintaining accurate record ', 'VIENOVO FEED FOR LIFE', 'Manolo Fortich Bukidnon', '09178086976', 'sample@mail.com', '2023-10-17'),
(5, NULL, 'Software Developer', 'Full stack dev', 'Amazon', 'USSR', '404', 'amazon@mail.com', '2023-11-19'),
(7, 3, 'Data scientist ', 'mathematics ', 'Google', 'New york', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(8, NULL, 'Marketing Manager', 'mathematics ', 'Rebisco', 'Alae, manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(9, NULL, 'Project Manager ', 'mathematics ', 'Google', 'San Pedro Laguna', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(10, NULL, 'Problem Solver', 'mathematics ', 'Google', 'Cagayan de Oro City', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(11, NULL, 'Adaptability Specialist ', 'mathematics ', 'Google', 'Libona Bukidnon', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(12, NULL, 'Customer service ', 'mathematics ', 'Jollibee', 'Manolo Fortich Bukidnon ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(13, NULL, 'Creative Designer', 'mathematics ', 'Google', 'Las Vegas', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20'),
(14, NULL, 'Language Interpreter ', 'Teacher', 'Google', 'Australia ', '09453810680', 'joshuareysayagnon4@gmail.com', '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `job_seeker_id` int(11) NOT NULL,
  `job_posting_id` int(11) NOT NULL,
  `claim_clearance_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `ad_id` int(11) NOT NULL,
  `matched_job_id` int(11) NOT NULL,
  `or_no` varchar(20) DEFAULT NULL,
  `agency_name` varchar(256) NOT NULL,
  `date_issued` varchar(256) NOT NULL,
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
  `date_taken` varchar(256) DEFAULT NULL,
  `professional_licence` varchar(256) DEFAULT NULL,
  `valid_until` varchar(256) DEFAULT NULL,
  `company_name` varchar(256) DEFAULT NULL,
  `position` varchar(256) DEFAULT NULL,
  `number_of_months` varchar(256) DEFAULT NULL,
  `work_address` varchar(256) DEFAULT NULL,
  `work_status` varchar(256) DEFAULT NULL,
  `good_communication_skill` varchar(256) DEFAULT '1',
  `special_skill` varchar(256) DEFAULT NULL,
  `referred_to` varchar(256) DEFAULT NULL,
  `date_joined` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`job_seeker_id`, `job_posting_id`, `claim_clearance_id`, `agency_id`, `user_id`, `ad_id`, `matched_job_id`, `or_no`, `agency_name`, `date_issued`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `date_taken`, `professional_licence`, `valid_until`, `company_name`, `position`, `number_of_months`, `work_address`, `work_status`, `good_communication_skill`, `special_skill`, `referred_to`, `date_joined`) VALUES
(1, 0, 0, 0, 0, 0, 0, '000101', 'General Services multipurpose Cooperative', '2023-12-02', 'Sayagnon ', 'Joshua Rey', 'Gumonan', 'NA', '2001-12-25', 'Male', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '4321', 'NA', '5\'4', '9453810680', 'joshuareysayagnon4@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'Driver', 'Sankanan ', 'Cebuano', 'Yes', 'COLLEGE LEVEL', 'Northern Bukidnon State college ', 'Computer ', '5', 'TESDA', 'Software Developer', 'N/A', 'N/A', '2023-12-01', 'N/A', '2026-12-01', 'N/A', 'Coding/Programming', '36', 'Alae', 'Contractual', 'Yes', 'employmentStatus', 'GIP', '2023-12-01'),
(3, 0, 0, 0, 0, 0, 0, '000104', 'General Services Cooperative', '2023-12-02', 'Nadal', 'Kick', 'Pan', 'NA', '2023-12-01', 'Male', 'Zone 2', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'NA', 'Single', '', 'NA', '64.5', '9976222951', 'francisxaviernadal@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', '', '', 'Cebuano', 'Yes', 'HIGH SCHOOL GRADUATE', 'NA', 'NA', '12', 'NA', 'NA', 'NA', 'francisxaviernadal@gmail.com', '2023-12-01', 'francisxaviernadal@gmail.com', '2023-12-01', 'Osas', ' Data Analyst', '84', 'Alae', 'Part-time', 'Yes', 'NA', 'TUPAD', '2023-12-01'),
(5, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Taliban', 'Hamas', 'Pan', 'NA', '2023-12-10', 'Male', 'Zone5', 'Guilang-guilang', 'Manolo Fortich', 'Bukidnon', 'NA', 'Single', '', 'NA', '67.1', '9976222951', 'francisxaviernadal@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'NA', 'NA', '12', 'NA', 'NA', 'NA', 'francisxaviernadal@gmail.com', '2023-12-26', 'francisxaviernadal@gmail.com', '2023-12-05', 'Oasis', 'NA', '37', 'L.A', 'Part-time', 'No', 'NA', 'SPES', '2023-12-01'),
(6, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Void', 'Faceless ', 'Sayrax', 'NA', '2023-09-18', 'Male', 'Zone9', 'Lindaban', 'Manolo Fortich', 'Bukidnon', 'NA', 'Single', '', 'NA', '61.3', '09976222951', 'francisxaviernadal@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'Yes', 'MASTERAL/POST GRADUATE', 'NA', 'NA', '12', 'NA', 'NA', 'NA', 'francisxaviernadal@gmail.com', '2023-07-17', 'francisxaviernadal@gmail.com', '2023-07-16', 'Oasis', 'NA', '12', 'L A', 'Part-time', NULL, 'NA', 'NA', '2023-12-01'),
(7, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Dumay', 'Calvin', 'D', 'NA', '1998-12-01', 'Male', 'Zone 5', 'Lingion', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Married', '6789', 'NA', '', '61589456234', 'Calvin@mail.com', 'Unemployed', 'NA', 'NA', 'No', 'No', 'No', 'Driver', 'Tankulan', 'Cebuano', 'No', 'COLLEGE LEVEL', 'Northern Bukidnon State college ', 'Computer ', '5', 'TESDA', 'Programmer ', '6 months ', 'N/A', '2023-12-01', 'N/A', '2024-02-14', 'DMPI', 'Production', '9', 'Agusan', 'Permanent', 'Yes', 'Hardware ', 'TESDA Training', '2023-12-01'),
(8, 0, 0, 0, 0, 0, 0, NULL, '', '', 'George', 'Paul', 'Nowitzki', 'NA', '2023-06-18', 'Male', 'Zone2', 'Agusan Canyon', 'Manolo Fortich', 'Bukidnon', 'NA', 'Single', '', 'NA', '70.1', '09976222951', 'francisxaviernadal@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'Yes', 'MASTERAL/POST GRADUATE LEVEL', 'NA', 'NA', '12', 'Na', 'Na', 'Na', 'francisxaviernadal@gmail.com', '2023-05-20', 'francisxaviernadal@gmail.com', '2023-12-03', 'Oasis', 'Na', '11', 'L.A', 'Part-time', NULL, 'Na', 'NA', '2023-12-01'),
(9, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Libayao', 'Rahmat', 'S', 'NA', '2000-12-01', 'Male', 'Kihare', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'Muslim', 'Single', '3425', 'NA', '5\'5', '89456138794', 'Mattzy@mail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'Welder', 'Tankulan', 'Cebuano', 'No', 'HIGH SCHOOL LEVEL', 'N/A', 'ICT', '5', 'TESDA', 'Programmer ', '6 months ', 'N/A', '2023-12-01', 'N/A', '2026-12-01', 'DMPI', 'Production', '6', 'Sankanan ', 'Contractual', NULL, 'Hardware ', 'TESDA Training', '2023-12-01'),
(10, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Ebabacol', 'Christian ', 'C', 'NA', '2002-12-01', 'Male', 'Fatima Subdivision ', 'Alae', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '7892', 'NA', '5\'9', '9425165346', 'Ebacs@mail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'Welder', 'Tankulan', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'Northern Bukidnon State college ', 'ICT', '6', 'TESDA', 'Programmer ', '6 months ', 'N/A', '2023-12-01', 'N/A', '2027-12-01', 'Jollibee ', 'Production', '6', 'Tankulan ', 'Contractual', 'Yes', 'Hardware ', 'TESDA Training', '2023-12-01'),
(11, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Talipan ', 'Francis ', '-', 'NA', '2023-10-06', 'Male', 'Zone 1', 'Lingion', 'Manolo Fortich', 'Bukidnon', 'Na', 'Single', '', 'NA', '80 .2', '9976222951', 'francisxaviernadal@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'Na', 'Na', '12', 'Na', 'Na', 'Na', 'francisxaviernadal@gmail.com', '2023-09-10', 'francisxaviernadal@gmail.com', '2023-05-21', 'Oasis', 'Na', '12', 'L.A', 'Permanent', NULL, 'Na', 'NA', '2023-12-01'),
(12, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Maestrado', 'Jesse', 'A', 'NA', '2001-10-15', 'Female', 'Zone 2', 'Sto NiÃ±o', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '3567', 'NA', '5\'5', '09423184675', 'Jess@mail.com', 'Unemployed', 'NA', 'Finish Contract', 'No', 'No', 'No', 'IT programmer ', 'Tankulan', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'Northern Bukidnon State college ', 'Computer ', '5', 'TESDA', 'Programmer ', '6 months ', 'N/A', '2023-12-01', 'N/A', '2027-09-27', 'Mcdo', 'Production', '6', 'Cagayan de Oro City ', 'Contractual', NULL, 'Hardware ', 'TESDA Training', '2023-12-01'),
(13, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Pongasi', 'Roldan', 'G', 'NA', '2000-01-08', 'Male', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '2985', 'NA', '5\'7', '09453812654', 'Roldan@mail.com', 'Employed', 'Others', 'NA', 'No', 'No', 'No', 'IT programmer ', 'Tankulan', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'Northern Bukidnon State college ', 'ICT', '5', 'TESDA', 'Programmer ', '6 months ', 'N/A', '', 'N/A', '2031-12-01', 'Jollibee ', 'Production', '6', 'Tankulan ', 'Contractual', NULL, 'Hardware ', 'TESDA Training', '2023-12-01'),
(14, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Baconguis', 'Mayet', 'G', 'NA', '1991-02-05', 'Female', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '6012', 'NA', '5\'5', '09564186743', 'Mayet@mail.com', 'Employed', 'WageEmployed', 'NA', 'No', 'No', 'No', 'Teacher', 'MFCES', 'Cebuano', 'No', 'MASTERAL/POST GRADUATE LEVEL', 'USTP', 'Computer ', '5', 'TESDA', 'Programmer ', '6 months ', 'N/A', '2008-12-01', 'N/A', '2023-12-01', 'Mcdo', 'Supervisor ', '9', 'Cagayan de Oro City ', 'Permanent', NULL, 'Hardware ', 'TESDA Training', '2023-12-01'),
(16, 0, 0, 0, 0, 0, 0, NULL, '', '', 'uzumaki', 'saski', 'e', 'NA', '2022-04-01', 'Male', 'zone 2', 'San Miguel', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', '1231', 'NA', '69', '09976222951', 'joshuareysayagnon4@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Cebuano', 'Yes', 'MASTERAL/POST GRADUATE', 'N/A', 'N/A', '', 'N/A', 'N/A', 'N/A', 'N/A', '2023-12-03', 'N/A', '2024-01-19', 'oasis', 'IT Support Specialist', '35', 'Manolo Fortich', 'Contractual', 'Yes', 'N/A', 'SPES', '2023-12-03'),
(17, 0, 0, 0, 0, 0, 0, NULL, '', '', 'goat', 'Amore', 'y', 'NA', '2021-12-10', 'Female', 'Zone 4', 'Guilang-guilang', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', '234', 'NA', '78', '09976222951', 'jhaisrhieemata@gmail.com', 'Employed', 'WageEmployed', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Cebuano', 'Yes', 'MASTERAL/POST GRADUATE', 'N/A', 'N/A', '', 'N/A', 'N/A', 'N/A', 'N/A', '2023-05-26', 'N/A', '2022-09-07', 'N/A', 'N/A', '85', 'Manolo Fortich', 'Contractual', 'Yes', 'N/A', 'SPES', '2023-12-03'),
(18, 0, 0, 0, 0, 0, 0, NULL, '', '', 'void', 'Lovely', 'g', 'NA', '2022-01-04', 'Female', 'zone 2', 'Ticala', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', '56', 'NA', '70', '09976222951', 'joshuareysayagnon4@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', '', 'N/A', 'English', 'Yes', 'MASTERAL/POST GRADUATE LEVEL', 'N/A', 'N/A', '24', 'N/A', 'Driving', '35', 'N/A', '2022-07-02', 'N/A', '2022-08-10', 'oasis', 'N/A', '24', 'Manolo Fortich', 'Permanent', 'Yes', 'N/A', 'SPES', '2023-12-03'),
(19, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Humayag', 'Rodel', 'S', 'NA', '2000-07-11', 'Male', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '6193', 'NA', '5\'7', '09451287643', 'Rodmax@mail.com', 'Unemployed', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'Driver', 'Tankulan', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'Northern Bukidnon State college ', 'ICT', '5', 'TESDA', 'Programmer ', '36 months', 'N/A', '', 'N/A', '', 'Rebisco', 'Production', '6', 'Alae, Manolo Fortich Bukidnon ', 'Contractual', 'Yes', 'N/A', 'TESDA Training', '2023-12-04'),
(20, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Vitor', 'Arnel', 'Soco', 'NA', '2000-11-08', 'Male', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '7192', 'NA', '5\'7', '09364251285', 'Vitor@mail.com', 'Employed', 'SelfEmployedTransport', 'NA', 'No', 'No', 'No', 'Driver', 'Tankulan', 'Cebuano', 'No', 'HIGH SCHOOL GRADUATE', 'N/A', 'ICT', '6', 'TESDA', 'Driving', '6 months ', 'N/A', '', 'N/A', '', 'Jollibee ', 'Production', '6', 'Tankulan, Manolo Fortich Bukidnon ', 'Contractual', 'Yes', 'N/A', 'TESDA Training', '2023-12-04'),
(21, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Oras', 'Lawrence ', 'D', 'NA', '1998-04-20', 'Male', 'Zone 4 ', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Married', '3019', 'NA', '5\'9', '09452846318', 'Lawrence@gmail.com', 'Employed', 'WageEmployed', 'NA', 'No', 'No', 'No', 'Welder', 'Tankulan', 'Cebuano', 'No', 'SENIOR HIGH SCHOOL GRADUATE', 'N/A', 'Computer ', '5', 'TESDA', 'Driving', '6 months ', 'N/A', '', 'N/A', '', 'DMPI', 'Production', '9', 'Agusan Canyon, Manolo Fortich Bukidnon ', 'Contractual', 'Yes', 'N/A', 'TESDA Training', '2023-12-04'),
(22, 0, 0, 0, 0, 0, 0, NULL, '', '', 'Salva', 'Patrick', 'Eduria', 'NA', '1999-08-31', 'Male', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '4018', 'NA', '5\'5', '09364286712', 'Patrcik@gmail.com', 'Employed', 'Others', 'NA', 'No', 'No', 'No', 'Teacher', 'Tankulan', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'Bukidnon State University ', 'ICT', '5', 'TESDA', 'Programmer ', '6 months ', 'N/A', '', 'N/A', '', 'Jollibee ', 'Production', '6', 'Tankulan, Manolo Fortich Bukidnon ', 'Contractual', 'Yes', 'N/A', 'TESDA Training', '2023-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_backup`
--

CREATE TABLE `job_seeker_backup` (
  `job_seeker_id` int(11) NOT NULL DEFAULT 0,
  `job_posting_id` int(11) DEFAULT NULL,
  `claim_clearance_id` int(11) DEFAULT NULL,
  `agency_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ad_id` int(11) DEFAULT NULL,
  `matched_job_id` int(11) NOT NULL,
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
  `date_taken` varchar(256) DEFAULT NULL,
  `professional_licence` varchar(256) DEFAULT NULL,
  `valid_until` varchar(256) DEFAULT NULL,
  `company_name` varchar(256) DEFAULT NULL,
  `position` varchar(256) DEFAULT NULL,
  `number_of_months` varchar(256) DEFAULT NULL,
  `work_address` varchar(256) DEFAULT NULL,
  `work_status` varchar(256) DEFAULT NULL,
  `special_skill` varchar(256) DEFAULT NULL,
  `referred_to` varchar(256) DEFAULT NULL,
  `date_joined` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_seeker_backup`
--

INSERT INTO `job_seeker_backup` (`job_seeker_id`, `job_posting_id`, `claim_clearance_id`, `agency_id`, `user_id`, `ad_id`, `matched_job_id`, `or_no`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `date_taken`, `professional_licence`, `valid_until`, `company_name`, `position`, `number_of_months`, `work_address`, `work_status`, `special_skill`, `referred_to`, `date_joined`) VALUES
(15, NULL, NULL, NULL, 11, NULL, 0, NULL, 'Salas', 'Von', 'S', 'NA', '2003-02-05', 'Male', 'Zone 1 ', 'Tankulan', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'Na', 'NA', '5\0', '09877563750', 'von@mail.com', 'Unemployed', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'Yes', 'HIGH SCHOOL LEVEL', 'na', 'Na', '1', 'Na', 'Na', 'Na', 'Na', NULL, 'Na', NULL, 'Na', 'Na', '1', NULL, NULL, 'Na', 'SPES', '2023-11-16'),
(17, NULL, NULL, NULL, NULL, NULL, 0, '', 'Caare', 'Daina', 'M', 'NA', '2004-05-27', 'Female', 'Zone 1 ', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', 'Na', 'NA', '5\0', '9376358689', 'daina@mail.com', 'Employed', 'Wage employed', 'NA', 'No', 'No', 'No', 'Na', 'Na', 'Cebuano', 'Yes', '3RD YEAR COLLEGE LEVEL', 'na', 'Na', 'Na', 'Na', 'Teacher ', 'Na', 'Na', NULL, 'Na', NULL, 'Na', 'Na', 'Na', NULL, NULL, 'Na', 'SPES', '2023-11-16'),
(31, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'Sayagnon ', 'Ronila', 'Gumonan ', 'NA', '1985-11-20', 'Female', 'Zone 4 ', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Married', '4321', 'NA', '54', '09453810680', 'ronila@mail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'Driver', 'Sankanan ', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'Northern Bukidnon State college ', 'Computer ', '5', 'TESDA', 'Driving', '6 months ', 'N/A', NULL, 'N/A', NULL, 'Rebisco', 'Production', '9', NULL, NULL, 'Hardware ', 'GIP', '2023-11-20'),
(28, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'Pongasi ', 'Rina', 'Gumonan', 'NA', '2006-11-20', 'Female', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '4321', 'NA', '5\'5', '09453810680', 'rina@mail.com', 'Unemployed', 'NA', 'NA', 'No', 'No', 'No', 'Welder', 'Sankanan ', 'Cebuano', 'Yes', 'HIGH SCHOOL GRADUATE', 'Manolo Fortich National High school ', 'Computer ', '5', 'TESDA', 'Driving', '6 months ', 'N/A', NULL, 'N/A', NULL, 'DMPI', 'Production', '6', NULL, NULL, 'Hardware ', 'GIP', '2023-11-20'),
(22, 0, 0, 0, 0, 0, 0, NULL, 'Pongasi', 'Roldan', 'Gumonan', 'NA', '2000-01-08', 'Male', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Catholic ', 'Single', '4321', 'NA', '5\'5', '09453810680', 'roldan@mail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'Driver', 'Sankanan ', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'Northern Bukidnon State college ', 'Computer ', '5', 'TESDA', 'Driving', '6 months ', 'N/A', NULL, 'N/A', NULL, 'Rebisco', 'Supervisor ', '9', NULL, NULL, 'Hardware ', 'GIP', '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `lgu_scholarship`
--

CREATE TABLE `lgu_scholarship` (
  `lgu_scholarship_id` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `matched_job`
--

CREATE TABLE `matched_job` (
  `matchedjob_id` int(11) NOT NULL,
  `job_seeker_id` int(11) NOT NULL DEFAULT 0,
  `job_posting_id` int(11) NOT NULL DEFAULT 0,
  `job_name` varchar(256) DEFAULT NULL,
  `claim_clearance_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matched_job`
--

INSERT INTO `matched_job` (`matchedjob_id`, `job_seeker_id`, `job_posting_id`, `job_name`, `claim_clearance_id`) VALUES
(1, 1, 5, 'Sofware developer', 0),
(2, 3, 7, 'Data Scientist', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prediction`
--

CREATE TABLE `prediction` (
  `predict_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regtypes`
--

CREATE TABLE `regtypes` (
  `regtype_id` int(11) NOT NULL,
  `regtype_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regtypes`
--

INSERT INTO `regtypes` (`regtype_id`, `regtype_name`) VALUES
(1, 'Employment'),
(2, 'lgu_Scholarship'),
(3, 'SPES'),
(4, 'GIP'),
(5, 'TesdaTraining'),
(6, 'lgu_Scholarship'),
(7, 'GIP'),
(8, 'Employment'),
(9, 'Employment'),
(10, 'Employment'),
(11, 'Employment'),
(12, 'Employment'),
(13, 'Employment'),
(14, 'SPES');

-- --------------------------------------------------------

--
-- Table structure for table `spes`
--

CREATE TABLE `spes` (
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

-- --------------------------------------------------------

--
-- Table structure for table `tesda_applicant`
--

CREATE TABLE `tesda_applicant` (
  `tesda_applicant_id` int(11) NOT NULL,
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
-- Dumping data for table `tesda_applicant`
--

INSERT INTO `tesda_applicant` (`tesda_applicant_id`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `special_skill`, `referred_to`, `date_joined`) VALUES
(1, 'Montimar', 'James', 'M', 'NA', '2004-02-04', 'Male', 'Purok 13 ', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'SDA ', 'Single', 'N/A', 'NA', '52', 'N/A', 'james.montimar@gmail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'English', 'No', '1ST YEAR COLLEGE LEVEL', 'BSIT', 'N/A', 'N/A', 'N/A', 'Project Management ', 'N/A', 'N/A', 'N/A', 'Computer shop', 'Cleaner', '10 days', 'Problem Solving ', 'GIP', '2023-12-01 08:03:55.862219'),
(3, 'Jacamos', 'April Rose', 'Espinosa', 'NA', '2002-04-27', 'Female', 'N/a', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'Roman Catholic', 'Single', '1234', 'NA', '5\"2', '09658518396', 'april@gmail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'N/a', 'N/a', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'BSIT', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', '0', 'N/a', 'NA', '2023-12-01 08:31:36.342624'),
(4, 'Salento', 'Shanen', 'Valle', 'NA', '2001-10-17', 'Female', 'ZONE 1', 'Maluko', 'Manolo Fortich', 'Bukidnon', 'Roman Catholic', 'Single', '3837', 'NA', '4\"7', '09476262832', 'shanen@gmail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'Farming', 'Manolo Fortich bukidnon', 'Cebuano', 'No', 'HIGH SCHOOL GRADUATE', 'N/a', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 08:35:46.690165'),
(5, 'Bajao', 'Jayrald', 'Gomez', 'NA', '1999-07-20', 'Male', 'N/a', 'Alae', 'Manolo Fortich', 'Bukidnon', 'Roman Catholic', 'Single', '9362', 'NA', '5\"6', '09462826417', 'jayrald@mail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'Electrical', 'Manolo Fortich bukidnon', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'BSIT', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 08:38:40.225946'),
(6, 'Maestrado', 'Jesse', 'Abasolo', 'NA', '1996-07-11', 'Female', 'ZONE 3', 'Sto NiÃ±o', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', '1234', 'NA', '4\"8', '0383872994', 'jesse@gmail.com', 'NA', 'NA', 'Others', 'No', 'No', 'No', 'N/a', 'N/a', 'Cebuano', 'No', 'GRADE XI (FOR K TO 12)', 'Ict', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 08:41:47.669105'),
(7, 'Ebabacol', 'James', 'G.', 'Jr', '1998-05-23', 'Male', 'ZONE 1 ', 'Dalirig', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Married', '1726', 'NA', '5\"6', '02927262676', 'james@mail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'N/a', 'N/a', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'BSBA', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 08:46:05.016297'),
(8, 'Bayoc', 'Sharlene', 'Zulita', 'NA', '2002-07-30', 'Female', 'Zone 1 ', 'Tikala', 'Manolo Fortich', 'Bukidnon', 'Roman Catholic', 'Single', '1234', 'NA', '5\"6', '09057092589', 'sharlene@gmail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'N/a', 'N/a', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'BSIT', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 08:48:55.500358'),
(9, 'Pingol', 'Diessa ', 'Borja', 'NA', '1999-04-21', 'Female', 'Na', 'Agusan Canyon', 'Manolo Fortich', 'Bukidnon', 'Baptist', 'Married', '3837', 'NA', '5\"2', '0919182723', 'dess@mail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'N/a', 'N/a', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'BEED', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 08:53:16.839678'),
(10, 'Dumay', 'Calvin', 'Jay', 'NA', '1998-07-24', 'Male', 'Zone 1', 'Lingion', 'Manolo Fortich', 'Bukidnon', 'Roman Catholic', 'Single', '9362', 'NA', '5\"2', '09658518396', 'calv@gmail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'Farming', 'Manolo Fortich bukidnon', 'Cebuano', 'No', '2ND YEAR COLLEGE LEVEL', 'BSBA', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 08:56:17.107126'),
(11, 'Libayao', 'Ramat', 'Lugmay', 'NA', '2001-08-26', 'Male', 'Zone 2', 'Dicklum', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Married', '9362', 'NA', '5\"6', '0282728293', 'mat@mail.com', 'Unemployed', 'NA', 'Finish Contract', 'No', 'No', 'No', 'Electrical', 'Manolo Fortich bukidnon', 'Cebuano', 'Yes', '4TH YEAR COLLEGE LEVEL', 'BSBA', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 09:01:22.869622'),
(12, 'Binongcal', 'Edwin', 'Bantug', 'Jr', '2000-09-13', 'Male', 'Zone 1', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'Roman Catholic', 'Married', '3837', 'NA', '4\"8', '02717192478', 'edwin@gmail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'N/a', 'N/a', 'Cebuano', 'Yes', 'COLLEGE GRADUATE', 'BSIT', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 09:04:44.721113'),
(13, 'Linsahay', 'Frank', 'Danluyan', 'NA', '1999-09-15', 'Male', 'Zone 1', 'Guilang-guilang', 'Manolo Fortich', 'Bukidnon', 'Baptist', 'Single', '9362', 'NA', '5\"6', '2927381626', 'frank@mail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'N/a', 'N/a', 'Cebuano', 'No', 'COLLEGE GRADUATE', 'BEED', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'NA', '2023-12-01 09:07:33.953822'),
(14, 'Tacastacas', 'Quiniee', 'Sivilla', 'NA', '1997-10-15', 'Female', 'Zone 5', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'Roman Catholic', 'Single', '3837', 'NA', '5\"6', '092272762883', 'quin@gmail.com', 'NA', 'NA', 'New Emtrant/Fresh Graduate', 'No', 'No', 'No', 'N/a', 'N/a', 'Cebuano', 'Yes', '2ND YEAR COLLEGE LEVEL', 'BSIT', 'N/a', '0', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'SPES', '2023-12-01 09:12:16.616347'),
(15, 'nadal', 'osas', 'L.', 'NA', '2023-12-03', 'Male', 'Zone 4', 'Minsuro', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', '12', 'NA', '64', '09976222951', 'joshuareysayagnon4@gmail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Cebuano', 'Yes', 'VOCATIONAL UNDERGRADUATE', 'N/A', 'N/A', '', 'N/A', 'Driving', '35', 'N/A', '', 'N/A', 'Coding/Programming', '37', 'N/A', 'SPES', '2023-12-03 13:54:43.633123'),
(16, 'Wawe', 'george', '-', 'NA', '2022-11-17', 'Male', 'Zone 4', 'Sankanan', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Married', '3255', 'NA', '5\"5', '09976222951', 'lovely45@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Tagalog', 'Yes', 'HIGH SCHOOL GRADUATE', 'N/A', 'N/A', 'na', 'N/A', 'na', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '85', 'N/A', 'GIP', '2023-12-03 13:56:26.274466'),
(17, 'nadal', 'witziki', 'L.', 'NA', '2022-11-16', 'Male', 'Zone 4', 'Dalirig', 'Manolo Fortich', 'Bukidnon', 'Catholic', 'Married', '12', 'NA', '64', '09976222951', 'joshuareysayagnon4@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Tagalog', 'Yes', 'GRADE XI (FOR K TO 12)', 'N/A', 'N/A', 'na', 'N/A', 'N/A', '21', 'N/A', '', 'N/A', 'N/A', '35', 'Sofware developer', 'TESDA Training', '2023-12-03 14:01:18.520399'),
(18, 'nasa', 'rebacca', 's', 'NA', '2021-12-25', 'Female', 'Zone 4', 'Mambatangan', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', '45', 'Visual', '64', '09976222951', 'jhaisrhieemata@gmail.com', 'Employed', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Cebuano', 'Yes', 'GRADE III', 'N/A', 'N/A', 'na', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'oasis', 'N/A', '43', 'Sofware developer', 'DILEEP', '2023-12-03 14:04:02.769038'),
(19, 'paul', 'first', 'e', 'NA', '2020-04-08', 'Male', 'Zone 1', 'Maluko', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', '234', 'NA', '67', '09976222951', 'jhaisrhieemata@gmail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Cebuano', 'Yes', 'MASTERAL/POST GRADUATE', 'N/A', 'N/A', 'na', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'oasis', 'N/A', '123', 'N/A', 'GIP', '2023-12-03 14:05:58.188406'),
(20, 'jupiter', 'sheesh', 't', 'NA', '2025-05-02', 'Male', 'zone 8', 'Sto NiÃ±o', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Married', '1234', 'NA', '69', '09976222951', 'lovely45@gmail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Cebuano', 'Yes', 'MASTERAL/POST GRADUATE', 'N/A', 'N/A', 'na', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'oasis', 'N/A', '0', 'N/A', 'SPES', '2023-12-03 14:08:06.265474'),
(21, 'sur', 'nads', 'j', 'NA', '2022-08-10', 'Male', 'zone 8', 'Lindaban', 'Manolo Fortich', 'Bukidnon', 'SDA', 'Single', '1234', 'NA', '70', '09976222951', 'joshuareysayagnon4@gmail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'N/A', 'N/A', 'Cebuano', 'Yes', 'MASTERAL/POST GRADUATE', 'N/A', 'N/A', 'na', 'N/A', 'N/A', '35', 'N/A', 'N/A', 'N/A', 'N/A', '85', 'Sofware developer', 'SPES', '2023-12-03 14:10:03.410684');

-- --------------------------------------------------------

--
-- Table structure for table `tesda_training`
--

CREATE TABLE `tesda_training` (
  `tesda_training_id` int(11) NOT NULL,
  `course_offered` varchar(256) DEFAULT NULL,
  `training_hours` varchar(256) DEFAULT NULL,
  `training_discription` varchar(256) DEFAULT NULL,
  `trainer` varchar(256) DEFAULT NULL,
  `status` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_staff`
--

CREATE TABLE `user_staff` (
  `user_id` int(11) NOT NULL,
  `job_seeker_id` int(11) NOT NULL,
  `user_fname` varchar(200) DEFAULT NULL,
  `user_lname` varchar(200) DEFAULT NULL,
  `user_number` varchar(200) DEFAULT NULL,
  `user_email` varchar(200) DEFAULT NULL,
  `user_pwd` varchar(200) DEFAULT NULL,
  `user_pwd_confirm` varchar(200) DEFAULT NULL,
  `user_dpic` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_staff`
--

INSERT INTO `user_staff` (`user_id`, `job_seeker_id`, `user_fname`, `user_lname`, `user_number`, `user_email`, `user_pwd`, `user_pwd_confirm`, `user_dpic`) VALUES
(1, 1, 'user', 'peso', '09784765749', 'user@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Peso_logo.png'),
(3, 0, 'Jhaisrhie', 'Emata', '09156583019', 'jhai@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'Peso_logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`agency_id`),
  ADD KEY `job_seeker_id` (`job_seeker_id`);

--
-- Indexes for table `claim_clearance`
--
ALTER TABLE `claim_clearance`
  ADD PRIMARY KEY (`claim_clearance_id`),
  ADD KEY `fk_agency_id` (`agency_id`),
  ADD KEY `fk_job_seeker_id` (`job_seeker_id`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `gip`
--
ALTER TABLE `gip`
  ADD PRIMARY KEY (`gip_id`);

--
-- Indexes for table `job_posting`
--
ALTER TABLE `job_posting`
  ADD PRIMARY KEY (`job_posting_id`),
  ADD KEY `job_seeker_id` (`job_seeker_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`job_seeker_id`),
  ADD KEY `job_posting_id` (`job_posting_id`),
  ADD KEY `claim_clearance_id` (`claim_clearance_id`);

--
-- Indexes for table `lgu_scholarship`
--
ALTER TABLE `lgu_scholarship`
  ADD PRIMARY KEY (`lgu_scholarship_id`);

--
-- Indexes for table `matched_job`
--
ALTER TABLE `matched_job`
  ADD PRIMARY KEY (`matchedjob_id`),
  ADD KEY `job_seeker_id` (`job_seeker_id`),
  ADD KEY `job_posting_id` (`job_posting_id`);

--
-- Indexes for table `prediction`
--
ALTER TABLE `prediction`
  ADD PRIMARY KEY (`predict_id`);

--
-- Indexes for table `regtypes`
--
ALTER TABLE `regtypes`
  ADD PRIMARY KEY (`regtype_id`);

--
-- Indexes for table `spes`
--
ALTER TABLE `spes`
  ADD PRIMARY KEY (`spes_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tesda_applicant`
--
ALTER TABLE `tesda_applicant`
  ADD PRIMARY KEY (`tesda_applicant_id`);

--
-- Indexes for table `tesda_training`
--
ALTER TABLE `tesda_training`
  ADD PRIMARY KEY (`tesda_training_id`);

--
-- Indexes for table `user_staff`
--
ALTER TABLE `user_staff`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `job_seeker_id` (`job_seeker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `claim_clearance`
--
ALTER TABLE `claim_clearance`
  MODIFY `claim_clearance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gip`
--
ALTER TABLE `gip`
  MODIFY `gip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_posting`
--
ALTER TABLE `job_posting`
  MODIFY `job_posting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `job_seeker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lgu_scholarship`
--
ALTER TABLE `lgu_scholarship`
  MODIFY `lgu_scholarship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matched_job`
--
ALTER TABLE `matched_job`
  MODIFY `matchedjob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prediction`
--
ALTER TABLE `prediction`
  MODIFY `predict_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regtypes`
--
ALTER TABLE `regtypes`
  MODIFY `regtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `spes`
--
ALTER TABLE `spes`
  MODIFY `spes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tesda_applicant`
--
ALTER TABLE `tesda_applicant`
  MODIFY `tesda_applicant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tesda_training`
--
ALTER TABLE `tesda_training`
  MODIFY `tesda_training_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_staff`
--
ALTER TABLE `user_staff`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `claim_clearance`
--
ALTER TABLE `claim_clearance`
  ADD CONSTRAINT `claim_clearance_ibfk_1` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_posting`
--
ALTER TABLE `job_posting`
  ADD CONSTRAINT `job_posting_ibfk_1` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matched_job`
--
ALTER TABLE `matched_job`
  ADD CONSTRAINT `matched_job_ibfk_1` FOREIGN KEY (`job_seeker_id`) REFERENCES `job_seeker` (`job_seeker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `matched_job_ibfk_2` FOREIGN KEY (`job_posting_id`) REFERENCES `job_posting` (`job_posting_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
