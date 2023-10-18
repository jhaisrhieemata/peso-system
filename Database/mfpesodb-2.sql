-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 06:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
  `date_joined` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_employment`
--

INSERT INTO `mis_employment` (`employment_id`, `surname`, `firstname`, `middlename`, `suffix`, `date_of_birth`, `sex`, `street_village`, `barangay`, `municipality`, `province`, `religion`, `civil_status`, `tin`, `disability`, `height`, `contact_number`, `email`, `employment_status`, `employment_status_employed`, `employment_status_unemployed`, `Are_you_ofw`, `are_you_a_former_ofw`, `beneficiary`, `prefered_occupation`, `prefered_work_location`, `language_dialect`, `currently_in_school`, `education_level`, `course`, `training`, `hours_of_training`, `training_institution`, `skill_acquired`, `certificates_received`, `eligibility_civil_service`, `professional_licence`, `company_name`, `position`, `number_of_months`, `other_skills`, `referred_to`, `date_joined`) VALUES
(1, ' Johnson', 'Emily', 'J', 'NA', '2001-12-25', 'Male', '7', 'Lunocan', 'Manolo Fortich', 'Bukidnon', 'Christian', 'Single', 'none', 'NA', '5\'7', '09873676473', 'emily@mail.com', 'Employed', 'Self-employed (Freelancer)', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'No', '4TH YEAR COLLEGE LEVEL', 'BEED', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '', '2023-09-22 09:00:52.354708'),
(2, 'Dela Cruz', 'Juan', 'M', 'NA', '1990-07-18', 'Male', 'Zone 4', 'Guilang-guilang', 'Manolo Fortich', 'Bukidnon', 'Christian', 'Single', 'NA', 'NA', '5\'7', '094667467224', 'juan@mail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'Yes', '4TH YEAR COLLEGE LEVEL', 'BSIT', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'SPES', '2023-09-21 22:23:21.698338'),
(3, 'Reyes ', 'Dave ', 'B', 'NA', '2000-07-12', 'Male', 'Zone 3', 'Damilag', 'Manolo Fortich', 'Bukidnon', 'Christian', 'Single', 'none', 'NA', '5\'7\"', '09873676473', 'dave@mail.com', 'NA', 'NA', 'NA', 'No', 'No', 'No', 'NA', 'NA', 'Cebuano', 'Yes', '4TH YEAR COLLEGE LEVEL', 'BEED', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'SPES', '2023-09-22 07:18:18.862031');

-- --------------------------------------------------------

--
-- Table structure for table `mis_job_opening`
--

CREATE TABLE `mis_job_opening` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mis_pwdresets`
--

CREATE TABLE `mis_pwdresets` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mis_scholarship`
--

CREATE TABLE `mis_scholarship` (
  `id` int(11) NOT NULL
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
(3, 'Franzcis', 'Xavier', 'ZB54P', 'franz@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'IT dept', 'franz.png'),
(4, 'Sharlene ', 'Zulita', 'C27ZF', 'shar@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'IT Dept', 'sharlene.png'),
(5, 'joshua', 'sayagnon', '2AR0U', 'josh@mai.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'IT dept', 'joshua.png'),
(8, 'jhai', 'emata', '5L3NX', 'jha@mail.com', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', 'IT dept', 'Jhaisrhie Emata .png');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `mis_employment`
--
ALTER TABLE `mis_employment`
  MODIFY `employment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

