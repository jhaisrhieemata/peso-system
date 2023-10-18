-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 10:04 AM
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
(1, 'System', 'Administrator', 'System@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'admin1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mis_agency`
--

CREATE TABLE `mis_agency` (
  `agency_id` int(11) NOT NULL,
  `agency_name` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `contact` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_agency`
--

INSERT INTO `mis_agency` (`agency_id`, `agency_name`, `address`, `contact`, `email`, `date_created`) VALUES
(1, 'General Services Cooperative', 'BORJA ROAD, DAMILAG, 8705 Manolo Fortich, Bukidnon', '0983893988938', 'sample@mail.com', '2023-10-17'),
(2, 'Asiapro Cooperative', 'Camp Phillips, Bukidnon', '+63882233607', 'sample@mail.com', '2023-10-17');

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

-- --------------------------------------------------------

--
-- Table structure for table `mis_employment`
--

CREATE TABLE `mis_employment` (
  `employment_id` int(11) NOT NULL,
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
-- Table structure for table `mis_pwdresets`
--

CREATE TABLE `mis_pwdresets` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`agency_id`);

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
-- AUTO_INCREMENT for table `mis_agency`
--
ALTER TABLE `mis_agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mis_claimclearance`
--
ALTER TABLE `mis_claimclearance`
  MODIFY `claimclearance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mis_employment`
--
ALTER TABLE `mis_employment`
  MODIFY `employment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mis_gip`
--
ALTER TABLE `mis_gip`
  MODIFY `gip_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mis_job_opening`
--
ALTER TABLE `mis_job_opening`
  MODIFY `job_opening_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mis_pwdresets`
--
ALTER TABLE `mis_pwdresets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mis_scholarship`
--
ALTER TABLE `mis_scholarship`
  MODIFY `scholarship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mis_spes`
--
ALTER TABLE `mis_spes`
  MODIFY `spes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mis_tesdatraining`
--
ALTER TABLE `mis_tesdatraining`
  MODIFY `tesdatraining_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mis_user`
--
ALTER TABLE `mis_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
