-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 02:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spees`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_status`
--

CREATE TABLE `active_status` (
  `Id` int(11) NOT NULL,
  `Doctor_Id` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  `Last_Update_On` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `active_status`
--

INSERT INTO `active_status` (`Id`, `Doctor_Id`, `Status`, `Last_Update_On`) VALUES
(1, 26, 0, '2021-10-01 11:16:27'),
(2, 32, 0, '2021-10-14 05:40:57'),
(3, 33, 1, '2021-10-01 11:56:22'),
(4, 24, 1, '2021-10-05 05:35:42'),
(5, 29, 1, '2022-01-01 18:34:32'),
(6, 30, 0, '2021-10-20 07:32:45'),
(7, 23, 1, '2022-01-29 15:27:11'),
(8, 35, 0, '2022-02-01 15:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `adult_case_history`
--

CREATE TABLE `adult_case_history` (
  `Id` int(11) NOT NULL,
  `HCRHS_Status` varchar(150) NOT NULL,
  `HCRHS_RLB` varchar(150) NOT NULL,
  `HCRHS_Since` varchar(150) NOT NULL,
  `HCRHS_Onset` varchar(150) NOT NULL,
  `HCRHS_Nature` varchar(150) NOT NULL,
  `HCBS_Status` varchar(150) NOT NULL,
  `HCBS_RLB` varchar(150) NOT NULL,
  `HCBS_Since` varchar(150) NOT NULL,
  `HCBS_Associated` varchar(150) NOT NULL,
  `HCEP_Status` varchar(150) NOT NULL,
  `HCEP_RLB` varchar(150) NOT NULL,
  `HCEP_Since` varchar(150) NOT NULL,
  `HCEP_Nature` varchar(150) NOT NULL,
  `HCED_Status` varchar(150) NOT NULL,
  `HCED_RLB` varchar(150) NOT NULL,
  `HCED_Since` varchar(150) NOT NULL,
  `HCED_Type` varchar(150) NOT NULL,
  `HCED_Episode` varchar(150) NOT NULL,
  `HCT_Status` varchar(150) NOT NULL,
  `HCT_RLB` varchar(150) NOT NULL,
  `HCT_Since` varchar(150) NOT NULL,
  `HCT_Type` varchar(150) NOT NULL,
  `HCT_Nature` varchar(150) NOT NULL,
  `HCT_Duration` varchar(150) NOT NULL,
  `HCVG_Status` varchar(150) NOT NULL,
  `HCVG_Since` varchar(150) NOT NULL,
  `HCVG_Nature` varchar(150) NOT NULL,
  `COSUD_Status` varchar(150) NOT NULL,
  `COSUD_Situation` varchar(150) NOT NULL,
  `HOEN_Status` varchar(150) NOT NULL,
  `HOEN_Noise` varchar(150) NOT NULL,
  `HOEN_Hour_Day` varchar(150) NOT NULL,
  `HOEN_Since` varchar(150) NOT NULL,
  `HOEN_Details` varchar(150) NOT NULL,
  `HOT_Status` varchar(150) NOT NULL,
  `HOT_To_Ear` varchar(150) NOT NULL,
  `HOT_To_Head` varchar(150) NOT NULL,
  `HOT_Details` varchar(150) NOT NULL,
  `COILS_Status` varchar(150) NOT NULL,
  `COILS_Noise` varchar(150) NOT NULL,
  `COILS_Since` varchar(150) NOT NULL,
  `HOOTD_Status` varchar(150) NOT NULL,
  `HOOTD_Details` varchar(150) NOT NULL,
  `HOD_Status` varchar(150) NOT NULL,
  `HOD_Since` varchar(150) NOT NULL,
  `HOBVI_Status` varchar(150) NOT NULL,
  `HOBVI_Details` varchar(150) NOT NULL,
  `ASA_Status` varchar(150) NOT NULL,
  `ASA_Details` varchar(150) NOT NULL,
  `AOAP_Status` varchar(150) NOT NULL,
  `AOAP_Details` varchar(150) NOT NULL,
  `HOPTI` varchar(150) NOT NULL,
  `HOUHA_Status` varchar(150) NOT NULL,
  `HOUHA_Details` varchar(150) NOT NULL,
  `HOUHA_Duration` varchar(150) NOT NULL,
  `ENT_findings` varchar(150) NOT NULL,
  `Audiological_Evaluation` varchar(150) NOT NULL,
  `ENT_Review` varchar(150) NOT NULL,
  `Follow_Up` varchar(150) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adult_case_history`
--

INSERT INTO `adult_case_history` (`Id`, `HCRHS_Status`, `HCRHS_RLB`, `HCRHS_Since`, `HCRHS_Onset`, `HCRHS_Nature`, `HCBS_Status`, `HCBS_RLB`, `HCBS_Since`, `HCBS_Associated`, `HCEP_Status`, `HCEP_RLB`, `HCEP_Since`, `HCEP_Nature`, `HCED_Status`, `HCED_RLB`, `HCED_Since`, `HCED_Type`, `HCED_Episode`, `HCT_Status`, `HCT_RLB`, `HCT_Since`, `HCT_Type`, `HCT_Nature`, `HCT_Duration`, `HCVG_Status`, `HCVG_Since`, `HCVG_Nature`, `COSUD_Status`, `COSUD_Situation`, `HOEN_Status`, `HOEN_Noise`, `HOEN_Hour_Day`, `HOEN_Since`, `HOEN_Details`, `HOT_Status`, `HOT_To_Ear`, `HOT_To_Head`, `HOT_Details`, `COILS_Status`, `COILS_Noise`, `COILS_Since`, `HOOTD_Status`, `HOOTD_Details`, `HOD_Status`, `HOD_Since`, `HOBVI_Status`, `HOBVI_Details`, `ASA_Status`, `ASA_Details`, `AOAP_Status`, `AOAP_Details`, `HOPTI`, `HOUHA_Status`, `HOUHA_Details`, `HOUHA_Duration`, `ENT_findings`, `Audiological_Evaluation`, `ENT_Review`, `Follow_Up`, `FormId`, `CreatedOn`) VALUES
(1, 'Present', 'Both', 'kjh', 'sudden', 'progressive', 'Present', 'Both', 'kjkh', 'cold', 'Present', 'Both', 'okpjihb', 'intermittent', 'Present', 'Rt', 'jhb', 'purulent/ blood stained', 'recurrent', 'Present', 'Rt', 'ijbh', 'roaring', 'continuous', 'ijuhg', 'Present', 'hbj', ' light headedness', 'Present', 'In all situation', 'Present', ' continuous loud noise', 'klnjbh', 'njbhg', 'jhbv', 'Yes', 'Rt', 'Rt', 'jiuhgv', 'Present', 'specific sound', 'kjiuhgv', 'Absent', 'jhbg', 'Present', 'hbjgvb ', 'Absent', 'jihygf', 'Absent', 'kjhbjgv', 'Absent', 'ojiubh', 'bhb ', 'Absent', 'iuygv', 'oijhbj', 'ijohbnjkhb', 'ijubhjtydfxtygfcv ', ' ijuhbj', 'dedrsfvugytrdfgh', 38, '2022-01-06 04:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `aphasia_other_neuro_disorder_poforma`
--

CREATE TABLE `aphasia_other_neuro_disorder_poforma` (
  `Id` int(11) NOT NULL,
  `Language_Commonly_Use` varchar(1000) NOT NULL,
  `Occupation` varchar(1000) NOT NULL,
  `Motor_Shysical_Status` varchar(1000) NOT NULL,
  `Gait` varchar(1000) NOT NULL,
  `Premorbid_Hobbies_Intrests` varchar(1000) NOT NULL,
  `Postmorbid_Hobbies_Intrests` varchar(1000) NOT NULL,
  `Communication_Behaviour` varchar(1000) NOT NULL,
  `Changes_In_Speech_Mechanism` varchar(1000) NOT NULL,
  `Associated_Problem` varchar(1000) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aphasia_other_neuro_disorder_poforma`
--

INSERT INTO `aphasia_other_neuro_disorder_poforma` (`Id`, `Language_Commonly_Use`, `Occupation`, `Motor_Shysical_Status`, `Gait`, `Premorbid_Hobbies_Intrests`, `Postmorbid_Hobbies_Intrests`, `Communication_Behaviour`, `Changes_In_Speech_Mechanism`, `Associated_Problem`, `FormId`, `CreatedOn`) VALUES
(2, 'hewfd', 'jewfdedwfdfc', 'ldew', 'edwfd', '', 'eewfredsdefredsf', 'efrseeds', 'ewfredsf', '', 19, '2022-01-03 04:03:44'),
(3, 'dws', '', '', 'efdv', '', '', '', 'ewfdvrfd', 'rfdv', 20, '2022-01-03 04:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `appoitment`
--

CREATE TABLE `appoitment` (
  `Id` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Doctor_Type` int(11) NOT NULL,
  `Doctor_Id` int(11) NOT NULL,
  `Procedure_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Slot_Id` varchar(10) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 2,
  `Referred_From` varchar(100) NOT NULL,
  `Fees` varchar(200) NOT NULL,
  `Fees_Paid_Type` varchar(100) NOT NULL,
  `Note` text NOT NULL,
  `Branch_Id` int(11) NOT NULL,
  `Remark` text NOT NULL,
  `Follow_Date` varchar(100) NOT NULL,
  `Recurring_Appointment_Id` int(11) DEFAULT NULL,
  `Appointment_Type` int(11) NOT NULL DEFAULT 1,
  `Created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoitment`
--

INSERT INTO `appoitment` (`Id`, `Patient_Id`, `User_Id`, `Doctor_Type`, `Doctor_Id`, `Procedure_Id`, `Date`, `Slot_Id`, `Status`, `Referred_From`, `Fees`, `Fees_Paid_Type`, `Note`, `Branch_Id`, `Remark`, `Follow_Date`, `Recurring_Appointment_Id`, `Appointment_Type`, `Created_on`) VALUES
(1, 1, 25, 2, 24, 22, '2021-10-08', NULL, 1, '2', '500', '', '', 2, 'demo purpose', '', NULL, 1, '2021-10-08 05:22:52'),
(2, 5, 22, 2, 29, 1, '2021-10-01', NULL, 1, '-', '400', '', '', 1, 'B/L MILD TO MODERATELY SEV SNHL', '2022-03-01', NULL, 1, '2021-10-09 05:15:43'),
(3, 4, 22, 2, 29, 1, '2021-10-01', NULL, 0, '-', '400', '', '', 1, 'NOT ATTENDED BY IRSHAD IKV', '', NULL, 1, '2021-10-09 05:16:06'),
(4, 4, 22, 2, 29, 1, '2021-10-01', NULL, 0, '-', '400', '', '', 1, 'DOUBLE ENTRY', '', NULL, 1, '2021-10-09 05:16:06'),
(5, 6, 22, 2, 29, 1, '2021-10-01', NULL, 0, '-', '400', '', '', 1, 'PTA CANCELED / NOT DONE PTA', '', NULL, 1, '2021-10-09 05:20:27'),
(6, 8, 22, 3, 27, 12, '2021-10-05', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-09 05:25:59'),
(7, 8, 22, 3, 28, 12, '2021-10-06', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-09 05:26:35'),
(8, 9, 22, 3, 33, 15, '2021-10-01', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-09 05:35:51'),
(9, 9, 22, 3, 33, 15, '2021-10-01', NULL, 0, '-', '400', '', '', 1, 'DOUBLE ENTRY\r\n', '', NULL, 1, '2021-10-09 05:43:33'),
(10, 11, 22, 3, 33, 15, '2021-10-01', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-09 05:43:48'),
(11, 12, 22, 2, 30, 9, '2021-10-01', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-09 05:52:21'),
(12, 13, 22, 2, 30, 9, '2021-10-01', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-09 05:53:27'),
(13, 18, 22, 2, 23, 11, '2021-10-09', NULL, 2, '-', '7000', '', '', 1, '', '', NULL, 1, '2021-10-09 07:24:21'),
(14, 14, 22, 2, 30, 25, '2021-10-09', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-09 07:26:01'),
(15, 15, 22, 3, 28, 26, '2021-10-09', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-09 07:33:23'),
(16, 19, 22, 2, 24, 4, '2021-10-09', NULL, 1, '-', '1750', '', '', 1, 'Right : Moderate to moderately severe hearing loss\r\nLeft : moderately severe to severe hearing loss', '', NULL, 1, '2021-10-09 07:51:03'),
(17, 20, 22, 3, 33, 27, '2021-10-09', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-09 07:51:57'),
(18, 22, 22, 3, 27, 12, '2021-10-09', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-09 07:53:28'),
(19, 23, 22, 3, 26, 26, '2021-10-09', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-09 07:57:43'),
(20, 24, 22, 2, 24, 1, '2021-10-09', NULL, 1, '-', '400', '', '', 1, 'Right : severe mixed hearing loss\r\nLeft : Mild low frequency conductive hearing loss', '', NULL, 1, '2021-10-09 09:54:17'),
(21, 25, 22, 2, 30, 25, '2021-10-09', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-09 09:54:38'),
(22, 4, 22, 2, 24, 1, '2021-10-01', NULL, 1, '-', '400', '', '', 1, 'Bilateral moderate conductive hearing loss', '', NULL, 1, '2021-10-09 12:55:04'),
(23, 26, 22, 2, 29, 1, '2021-10-04', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-11 05:06:40'),
(24, 27, 22, 2, 29, 1, '2021-10-04', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-11 05:11:00'),
(25, 28, 22, 2, 29, 1, '2021-10-04', NULL, 2, '-', '400', '', 'PTA AMD HEARING AID ADVANCE .', 1, '', '', NULL, 1, '2021-10-11 05:30:41'),
(26, 29, 22, 2, 29, 1, '2021-10-05', NULL, 1, '-', '400', '', '', 1, 'RT:mil to mod CDHL Tending to MHL\r\nLT: MIL TO MOD.SEV CDHL Tending to MHL', '2022-04-05', NULL, 1, '2021-10-11 05:48:08'),
(27, 29, 22, 2, 29, 2, '2021-10-05', NULL, 1, '-', '600', '', '', 1, 'RT:  MILD TO MOD. CONDUCTIVE TENDING TO MHL\r\nLT: MOD TO MOD.SEV CONDUCTIVE TENDING TO MHL', '2022-04-05', NULL, 1, '2021-10-11 05:48:08'),
(28, 30, 22, 2, 29, 1, '2021-10-06', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-11 05:51:30'),
(29, 31, 22, 2, 29, 1, '2021-10-06', NULL, 1, '-', '400', '', '', 1, 'B/L MIL TO MOD.SEV SLOPING SNHL', '2022-04-06', NULL, 1, '2021-10-11 05:51:52'),
(30, 33, 22, 3, 33, 15, '2021-10-11', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-11 06:12:22'),
(31, 34, 22, 2, 23, 25, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 06:12:49'),
(32, 36, 22, 2, 29, 4, '2021-10-07', NULL, 2, '-', '1750', '', '', 1, '', '', NULL, 1, '2021-10-11 06:51:17'),
(33, 37, 22, 2, 29, 1, '2021-10-07', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-11 07:00:17'),
(34, 39, 22, 2, 29, 1, '2021-10-08', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-11 07:54:08'),
(35, 40, 22, 2, 29, 1, '2021-10-08', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-11 07:56:30'),
(36, 41, 22, 2, 24, 1, '2021-10-09', NULL, 1, '-', '400', '', '', 1, 'Bilateral minimal to mild high frequency SNHL', '', NULL, 1, '2021-10-11 08:01:28'),
(37, 41, 22, 2, 24, 2, '2021-10-09', NULL, 1, '-', '600', '', '', 1, 'Bilateral \'Ad\' type tympanogram suggestive of flaccid tympanic membrane', '', NULL, 1, '2021-10-11 08:01:28'),
(38, 44, 22, 3, 32, 27, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 10:51:01'),
(39, 20, 22, 3, 26, 26, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 10:51:34'),
(40, 45, 22, 3, 26, 26, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 10:54:29'),
(41, 46, 22, 2, 23, 10, '2021-10-11', NULL, 2, '-', '400', '', 'NO FEES TAKEN', 1, '', '', NULL, 1, '2021-10-11 11:10:01'),
(42, 47, 22, 2, 23, 10, '2021-10-11', NULL, 2, '-', '400', '', 'NO FEES TAKEN', 1, '', '', NULL, 1, '2021-10-11 11:10:30'),
(43, 48, 22, 3, 26, 26, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 11:12:11'),
(44, 49, 22, 2, 24, 24, '2021-10-11', NULL, 0, '-', '300', '', '', 1, 'HE WAS SPEECH PATIENT AND ATTENDED BY NAGESH PAWAR', '', NULL, 1, '2021-10-11 11:13:49'),
(45, 49, 22, 2, 30, 25, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 11:15:30'),
(46, 9, 22, 3, 33, 27, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 11:16:06'),
(47, 50, 22, 3, 33, 27, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 11:18:18'),
(48, 51, 22, 2, 30, 25, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 11:22:07'),
(49, 52, 22, 2, 30, 25, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 11:25:05'),
(50, 53, 22, 3, 26, 26, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 11:28:44'),
(51, 0, 22, 2, 30, 25, '2021-10-11', NULL, 2, '-', '0', '', 'FEES PAID ADVANCE 4000\n', 1, '', '', NULL, 1, '2021-10-11 12:17:15'),
(52, 54, 22, 2, 23, 25, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 12:38:08'),
(53, 55, 22, 3, 26, 26, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 12:40:39'),
(54, 55, 22, 3, 26, 26, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 12:46:45'),
(55, 11, 22, 3, 33, 27, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-11 12:47:05'),
(56, 56, 22, 2, 24, 1, '2021-10-11', NULL, 1, '-', '400', '', '', 1, 'Right : Hearing sensitivity within normal limits except at 4 KHz\r\nLeft : Mild conductive hearing loss', '', NULL, 1, '2021-10-11 13:11:14'),
(57, 14, 22, 2, 30, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:29:49'),
(58, 45, 22, 2, 30, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:30:15'),
(59, 25, 22, 2, 30, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:30:36'),
(60, 9, 22, 2, 30, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:31:08'),
(61, 44, 22, 2, 30, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:31:29'),
(62, 12, 22, 2, 30, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:31:44'),
(63, 18, 22, 3, 33, 16, '2021-10-12', NULL, 2, '-', '1200', '', '', 1, '', '', NULL, 1, '2021-10-12 05:32:14'),
(64, 20, 22, 3, 33, 27, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:32:30'),
(65, 10, 22, 3, 33, 27, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:32:55'),
(66, 55, 22, 3, 33, 27, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:33:21'),
(67, 23, 22, 3, 26, 26, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:33:52'),
(68, 51, 22, 3, 26, 26, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:34:08'),
(69, 50, 22, 3, 26, 26, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:34:31'),
(70, 53, 22, 2, 23, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:35:24'),
(71, 15, 22, 3, 28, 26, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:35:59'),
(72, 15, 22, 3, 28, 26, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:36:20'),
(73, 15, 22, 3, 28, 26, '2021-10-09', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:36:39'),
(74, 15, 22, 3, 28, 26, '2021-10-08', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:36:53'),
(75, 15, 22, 3, 28, 26, '2021-10-07', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:37:08'),
(76, 58, 22, 3, 32, 27, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 05:41:02'),
(77, 59, 22, 2, 24, 1, '2021-10-12', NULL, 1, '-', '400', '', '', 1, 'Right : Minimal to profound precipitously sloping sensorineural hearing loss\r\nLeft : Hearing sensitivity within normal limits', '', NULL, 1, '2021-10-12 06:31:00'),
(78, 61, 22, 2, 23, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 11:13:47'),
(79, 62, 22, 2, 23, 25, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 11:16:27'),
(80, 50, 22, 3, 26, 26, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-12 11:18:05'),
(81, 47, 22, 2, 23, 9, '2021-10-12', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-12 11:19:26'),
(82, 46, 22, 2, 23, 10, '2021-10-12', NULL, 2, '-', '400', '', 'FEES PAID ADVANCE 4000', 1, '', '', NULL, 1, '2021-10-12 11:24:12'),
(83, 18, 22, 3, 33, 27, '2021-10-13', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:04:29'),
(84, 48, 22, 3, 27, 26, '2021-10-13', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:12:03'),
(85, 58, 22, 2, 30, 25, '2021-10-13', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:13:03'),
(86, 49, 22, 2, 30, 25, '2021-10-13', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:13:54'),
(87, 51, 22, 2, 30, 25, '2021-10-13', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:16:10'),
(88, 52, 22, 2, 30, 25, '2021-10-13', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:16:49'),
(89, 13, 22, 2, 30, 25, '2021-10-13', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:17:28'),
(90, 12, 22, 2, 30, 25, '2021-10-13', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:17:53'),
(91, 14, 22, 3, 33, 27, '2021-10-13', NULL, 2, '10', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:19:43'),
(92, 23, 22, 3, 33, 27, '2021-10-13', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 05:22:39'),
(93, 34, 22, 2, 23, 25, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 07:14:40'),
(94, 64, 22, 2, 24, 1, '2021-10-13', NULL, 1, '5', '400', '', '', 1, 'Right : Hearing sensitivity within normal limits except at 4 KHz\r\nLeft : Mild high frequency SNHL', '', NULL, 1, '2021-10-13 08:09:06'),
(95, 65, 22, 3, 28, 26, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 08:21:57'),
(96, 15, 22, 3, 28, 26, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 08:22:35'),
(97, 67, 22, 2, 29, 4, '2021-10-14', NULL, 2, '-', '1750', '', '', 1, '', '', NULL, 1, '2021-10-13 09:19:53'),
(98, 68, 22, 2, 23, 10, '2021-10-13', NULL, 2, '7', '400', '', '', 1, '', '', NULL, 1, '2021-10-13 09:21:59'),
(99, 70, 22, 2, 23, 10, '2021-10-13', NULL, 2, '7', '400', '', '', 1, '', '', NULL, 1, '2021-10-13 09:54:42'),
(100, 71, 22, 2, 23, 10, '2021-10-15', NULL, 2, '14', '400', '', '', 1, '', '', NULL, 1, '2021-10-13 12:41:19'),
(101, 55, 22, 3, 26, 27, '2021-10-13', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 12:41:39'),
(102, 11, 22, 3, 33, 27, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-13 12:51:31'),
(103, 14, 22, 2, 30, 25, '2021-10-14', NULL, 2, '10', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:37:29'),
(104, 45, 22, 2, 30, 25, '2021-10-14', NULL, 2, '12', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:37:59'),
(105, 25, 22, 2, 30, 25, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:38:23'),
(106, 9, 22, 2, 30, 25, '2021-10-14', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:38:54'),
(107, 72, 22, 2, 30, 25, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:41:58'),
(108, 44, 22, 2, 30, 25, '2021-10-14', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:42:32'),
(109, 12, 22, 2, 30, 25, '2021-10-14', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:44:36'),
(110, 20, 22, 3, 33, 27, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:47:41'),
(111, 10, 22, 3, 33, 27, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:48:30'),
(112, 73, 22, 3, 33, 27, '2021-10-14', NULL, 0, '7', '0', '', '', 1, 'LEAVE', '', NULL, 1, '2021-10-14 05:51:03'),
(113, 74, 22, 3, 33, 27, '2021-10-14', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 05:54:27'),
(114, 23, 22, 3, 26, 27, '2021-10-14', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:30:18'),
(115, 51, 22, 3, 26, 27, '2021-10-14', NULL, 2, '15', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:30:54'),
(116, 50, 22, 3, 26, 27, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:31:34'),
(117, 76, 22, 3, 26, 26, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:34:47'),
(118, 75, 25, 2, 24, 22, '2021-10-14', NULL, 0, '2', '500', '', '', 2, 'DATE ENTERED AS WRONG', '', NULL, 1, '2021-10-14 06:35:19'),
(119, 55, 22, 3, 26, 26, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:35:29'),
(120, 18, 22, 2, 23, 25, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:36:16'),
(121, 61, 22, 2, 23, 25, '2021-10-14', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:37:05'),
(122, 46, 22, 2, 23, 25, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:37:39'),
(123, 75, 25, 2, 24, 22, '2021-10-01', NULL, 1, '2', '500', '', '', 2, 'BILATERAL MINIMAL TO MODERATELY SEVERE CONDUCTIVE TENDING TO MIXED HEARING LOSS', '', NULL, 1, '2021-10-14 06:37:41'),
(124, 47, 22, 2, 23, 25, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 06:37:59'),
(125, 77, 25, 2, 24, 22, '2021-10-02', NULL, 1, '2', '500', '', '', 2, 'BILATERAL MINIMAL TO MODERATELY SEVERE HIGH FREQUENCY SLOPING SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-14 06:41:23'),
(126, 78, 25, 2, 24, 22, '2021-10-02', NULL, 1, '2', '500', '', '', 2, 'Right- Hearing Sensitivity Within Normal Limits Except at 4 KHz\r\nLeft : Hearing sensitivity within normal limits except at 4 KHz & 8 KHz', '', NULL, 1, '2021-10-14 06:43:36'),
(127, 79, 25, 2, 24, 22, '2021-10-14', NULL, 1, '2', '500', '', '', 2, 'Mis enterd... This patient is on 02/10/2021', '', NULL, 1, '2021-10-14 06:59:15'),
(128, 79, 25, 2, 24, 22, '2021-10-02', NULL, 1, '2', '500', '', '', 2, 'RIGHT : SEVERE SENSORINEURAL HEARING LOSS\r\nLEFT : MILD HIGH FREQUENCY SNHL', '', NULL, 1, '2021-10-14 06:59:30'),
(129, 80, 25, 2, 24, 22, '2021-10-02', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MILD TO SEVERE HIGH FREQUENCY SLOPING MIXED HEARING LOSS\r\nLEFT : MILD TO PROFOUND HIGH FREQUENCY SLOPING MIXED HEARING LOSS', '', NULL, 1, '2021-10-14 07:01:34'),
(130, 81, 25, 2, 24, 22, '2021-10-05', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MINIMAL TO MODERATE CONDUCTIVE TENDING TO MIXED HEARING LOSS \r\nLEFT : MILD CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-14 07:03:34'),
(131, 82, 25, 2, 24, 22, '2021-10-05', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MINIMAL TO SEVERE SLOPING CONDUCTIVE TENDING TO MIXED HEARING LOSS\r\nLEFT : MILD CONDUCTIVE TENDING TO MIXED HEARING LOSS', '', NULL, 1, '2021-10-14 07:05:08'),
(132, 83, 25, 2, 24, 22, '2021-10-05', NULL, 1, '2', '500', '', '', 2, 'Right : Moderate conductive hearing loss\r\nLeft : Minimal to mild high frequency conductive hearing loss', '', NULL, 1, '2021-10-14 07:11:05'),
(133, 84, 22, 2, 23, 10, '2021-10-14', NULL, 2, '14', '400', '', '', 1, '', '', NULL, 1, '2021-10-14 07:11:55'),
(134, 85, 25, 2, 24, 22, '2021-10-08', NULL, 1, '2', '500', '', '', 2, 'Right : Minimal to moderately severe sloping mixed hearing loss\r\nLeft : Minimal to moderate high frequency SNHL', '', NULL, 1, '2021-10-14 07:13:07'),
(135, 62, 22, 2, 23, 25, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 07:14:14'),
(136, 53, 22, 2, 23, 25, '2021-10-14', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 07:14:35'),
(137, 86, 25, 2, 24, 22, '2021-10-08', NULL, 1, '2', '500', '', '', 2, 'Right : Hearing sensitivity within normal limits\r\nLeft : Mild high frequency conductive hearing loss', '', NULL, 1, '2021-10-14 07:14:40'),
(138, 15, 22, 3, 28, 26, '2021-10-14', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-14 07:14:57'),
(139, 16, 25, 2, 24, 22, '2021-10-09', NULL, 1, '2', '500', '', '', 2, 'BILATERAL HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-14 07:15:19'),
(140, 35, 25, 2, 24, 22, '2021-10-11', NULL, 1, '2', '500', '', '', 2, 'Right : Minimal hearing loss (conductive type)\r\nLeft : Hearing sensitivity within normal limits except at 8 KHz', '', NULL, 1, '2021-10-14 07:15:47'),
(141, 38, 25, 2, 24, 22, '2021-10-11', NULL, 1, '2', '500', '', '', 2, 'Right : Mild conductive hearing loss (? dip at 2 KHz)\r\nLeft : Mild to moderate conductive hearing loss with a dip at 2 KHz\r\n\r\nRecommended for follow up after 6 month', '2022-04-11', NULL, 1, '2021-10-14 07:16:12'),
(142, 42, 25, 2, 24, 22, '2021-10-11', NULL, 1, '2', '500', '', '', 2, 'Right : Hearing sensitivity within normal limits\r\nLeft : Mild conductive hearing loss', '', NULL, 1, '2021-10-14 07:16:54'),
(143, 60, 25, 2, 24, 22, '2021-10-11', NULL, 1, '2', '500', '', '', 2, 'Right : Mild high frequency SNHL\r\nLeft : Mild to severe conductive tending to mixed hearing loss', '', NULL, 1, '2021-10-14 07:17:22'),
(144, 87, 25, 2, 24, 22, '2021-10-14', NULL, 1, '2', '500', '', '', 2, 'Right : hearing sensitivity within normal limits\r\nLeft : Mild high frequency snhl', '', NULL, 1, '2021-10-14 07:20:16'),
(145, 88, 31, 2, 24, 1, '2021-10-01', NULL, 1, '1', '400', '', '', 3, 'Right : Mild conductive hearing loss\r\nLeft : hearing sensitivity within normal limits except at 4 KHz & 8 KHz', '', NULL, 1, '2021-10-14 08:48:17'),
(146, 89, 25, 2, 24, 22, '2021-10-14', NULL, 1, '2', '500', '', '', 2, 'Bilateral moderately severe SNHL', '', NULL, 1, '2021-10-14 09:28:32'),
(147, 90, 31, 2, 24, 1, '2021-10-02', NULL, 1, '1', '400', '', '', 3, 'Right : Hearing Sensitivity Within Normal Limits\r\nLeft : Mild conductive hearing loss', '', NULL, 1, '2021-10-14 13:24:12'),
(148, 91, 31, 2, 24, 1, '2021-10-04', NULL, 1, '1', '400', '', '', 3, 'Right : Minimal to mild conductive hearing loss\r\nLeft : Minimal high frequency hearing loss', '', NULL, 1, '2021-10-14 13:27:07'),
(149, 92, 31, 2, 24, 1, '2021-10-07', NULL, 1, '1', '400', '', '', 3, 'Right : Mild high frequency SNHL\r\nLeft : Moderate conductive tending to mixed hearing loss', '', NULL, 1, '2021-10-14 13:30:23'),
(150, 65, 22, 2, 30, 25, '2021-10-15', NULL, 2, '19', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 05:04:55'),
(151, 58, 22, 2, 30, 25, '2021-10-15', NULL, 2, '19', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 05:05:51'),
(152, 18, 22, 3, 32, 27, '2021-10-15', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 09:57:25'),
(153, 61, 22, 2, 23, 25, '2021-10-15', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 09:57:50'),
(154, 14, 22, 3, 33, 27, '2021-10-15', NULL, 2, '10', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 09:58:14'),
(155, 15, 22, 3, 28, 27, '2021-10-15', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 09:58:43'),
(156, 65, 22, 2, 30, 25, '2021-10-15', NULL, 2, '19', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 09:59:20'),
(157, 44, 22, 3, 32, 27, '2021-10-15', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 09:59:42'),
(158, 20, 22, 3, 26, 26, '2021-10-15', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 10:00:09'),
(159, 23, 22, 3, 33, 27, '2021-10-15', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 10:00:34'),
(160, 93, 22, 2, 24, 28, '2021-10-15', NULL, 1, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 10:02:41'),
(161, 94, 22, 2, 24, 28, '2021-10-15', NULL, 1, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 10:04:35'),
(162, 62, 22, 3, 26, 26, '2021-10-15', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 10:21:04'),
(163, 45, 22, 2, 30, 25, '2021-10-14', NULL, 2, '12', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 10:36:04'),
(164, 95, 22, 2, 24, 28, '2021-10-15', NULL, 1, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 10:42:48'),
(165, 96, 22, 2, 29, 28, '2021-10-14', NULL, 2, '14', '0', '', 'ENQUIRY', 1, '', '', NULL, 1, '2021-10-15 11:16:59'),
(166, 97, 22, 2, 29, 28, '2021-10-15', NULL, 0, '14', '0', '', '210 PAID ( BATTERY 312)', 1, 'WRONG ENTRY', '', NULL, 1, '2021-10-15 11:19:00'),
(167, 97, 22, 2, 29, 28, '2021-10-14', NULL, 2, '14', '0', '', '210 PAID ( BATTERY 312)', 1, '', '', NULL, 1, '2021-10-15 11:19:08'),
(168, 76, 22, 3, 26, 26, '2021-10-13', NULL, 2, '14', '0', '', 'PAID 400 (SPT ASST)', 1, '', '', NULL, 1, '2021-10-15 11:20:24'),
(169, 76, 22, 2, 23, 10, '2021-10-13', NULL, 2, '14', '400', '', 'PAID 400 (SPT ASST)', 1, '', '', NULL, 1, '2021-10-15 11:20:24'),
(170, 50, 22, 3, 33, 27, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:20:58'),
(171, 53, 22, 3, 26, 26, '2021-10-13', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:21:42'),
(172, 46, 22, 2, 23, 25, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:22:04'),
(173, 47, 22, 2, 23, 25, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:22:19'),
(174, 9, 22, 3, 33, 27, '2021-10-13', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:22:47'),
(175, 25, 22, 3, 26, 26, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:23:13'),
(176, 69, 22, 2, 24, 28, '2021-10-13', NULL, 1, '-', '0', '', 'BATTERY 13 AU ( PAID 210)', 1, '', '', NULL, 1, '2021-10-15 11:24:26'),
(177, 20, 22, 3, 26, 26, '2021-10-13', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:24:55'),
(178, 61, 22, 2, 23, 25, '2021-10-13', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:25:30'),
(179, 72, 22, 2, 30, 25, '2021-10-12', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:26:06'),
(180, 72, 22, 2, 30, 25, '2021-10-09', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:26:39'),
(181, 72, 22, 2, 30, 25, '2021-10-07', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:27:15'),
(182, 72, 22, 2, 30, 25, '2021-10-05', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:27:34'),
(183, 72, 22, 2, 30, 25, '2021-10-02', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:28:29'),
(184, 44, 22, 2, 30, 25, '2021-10-12', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:34:17'),
(185, 74, 22, 3, 33, 27, '2021-10-12', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 11:35:15'),
(186, 98, 22, 2, 24, 1, '2021-10-12', NULL, 1, '-', '400', '', '', 1, 'Right : Hearing sensitivity within normal limits except at 4 KHz\r\nLeft : Moderate to severe sloping sensorineural hearing loss', '', NULL, 1, '2021-10-15 12:50:29'),
(187, 98, 22, 2, 24, 2, '2021-10-12', NULL, 1, '-', '600', '', '', 1, 'Bilateral \'A\' Type tympanogram (done by sharvari Deshmukh)', '', NULL, 1, '2021-10-15 12:50:29'),
(188, 99, 22, 2, 29, 1, '2021-10-12', NULL, 2, '14', '400', '', '', 1, '', '', NULL, 1, '2021-10-15 12:51:01'),
(189, 100, 22, 2, 24, 1, '2021-10-12', NULL, 1, '5', '400', '', '', 1, 'Right : Hearing sensitivity within normal limits\r\nLeft : Minimal conductive hearing loss', '', NULL, 1, '2021-10-15 12:51:24'),
(190, 15, 22, 3, 28, 26, '2021-10-12', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-15 12:51:52'),
(191, 101, 22, 2, 29, 1, '2021-10-12', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-15 13:05:49'),
(192, 101, 22, 2, 29, 2, '2021-10-12', NULL, 2, '-', '600', '', '', 1, '', '', NULL, 1, '2021-10-15 13:05:49'),
(193, 18, 22, 2, 23, 25, '2021-10-16', NULL, 0, '14', '0', '', '', 1, 'double entry', '', NULL, 1, '2021-10-16 05:05:05'),
(194, 18, 22, 2, 23, 25, '2021-10-16', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:05:25'),
(195, 102, 22, 2, 29, 28, '2021-10-12', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:17:35'),
(196, 76, 22, 3, 26, 26, '2021-10-11', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:21:48'),
(197, 76, 22, 3, 26, 26, '2021-10-09', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:22:04'),
(198, 76, 22, 3, 26, 26, '2021-10-08', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:22:19'),
(199, 76, 22, 3, 26, 26, '2021-10-07', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:22:32'),
(200, 76, 22, 3, 26, 26, '2021-10-06', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:22:52'),
(201, 76, 22, 3, 26, 26, '2021-10-05', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:23:07'),
(202, 76, 22, 3, 26, 26, '2021-10-04', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:23:24'),
(203, 76, 22, 3, 26, 26, '2021-10-02', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:23:38'),
(204, 104, 22, 2, 29, 1, '2021-10-11', NULL, 2, '5', '400', '', '', 1, '', '', NULL, 1, '2021-10-16 05:26:24'),
(205, 13, 22, 2, 30, 25, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:27:06'),
(206, 13, 22, 2, 30, 25, '2021-10-06', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:27:57'),
(207, 57, 22, 2, 24, 28, '2021-10-11', NULL, 1, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:29:17'),
(208, 44, 22, 3, 32, 27, '2021-10-11', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:32:52'),
(209, 106, 22, 2, 30, 25, '2021-10-01', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:59:37'),
(210, 106, 22, 2, 30, 25, '2021-10-02', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 05:59:54'),
(211, 106, 22, 2, 30, 25, '2021-10-04', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:00:05'),
(212, 107, 22, 3, 28, 26, '2021-10-01', NULL, 2, '-', '0', '', 'ENQUIRY', 1, '', '', NULL, 1, '2021-10-16 06:04:38'),
(213, 108, 22, 2, 30, 25, '2021-10-01', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:07:17'),
(214, 48, 22, 2, 30, 25, '2021-10-01', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:07:50'),
(215, 58, 22, 2, 30, 25, '2021-10-01', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:08:43'),
(216, 61, 22, 2, 23, 25, '2021-10-01', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:09:51'),
(217, 61, 22, 2, 23, 25, '2021-10-04', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:10:14'),
(218, 61, 22, 2, 23, 25, '2021-10-05', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:10:25'),
(219, 61, 22, 2, 23, 25, '2021-10-06', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:10:39'),
(220, 61, 22, 2, 23, 25, '2021-10-07', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:10:50'),
(221, 61, 22, 2, 23, 25, '2021-10-08', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:10:59'),
(222, 61, 22, 2, 23, 25, '2021-10-09', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:11:22'),
(223, 61, 22, 2, 23, 25, '2021-10-11', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:11:32'),
(224, 5, 22, 2, 29, 1, '2021-10-01', NULL, 1, '14', '400', '', '', 1, 'b/l normal demo', '2022-01-01', NULL, 1, '2021-10-16 06:14:46'),
(225, 63, 22, 3, 33, 27, '2021-10-01', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:15:12'),
(226, 63, 22, 3, 33, 27, '2021-10-04', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:15:27'),
(227, 63, 22, 3, 33, 27, '2021-10-06', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:15:42'),
(228, 63, 22, 3, 33, 27, '2021-10-08', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:15:59'),
(229, 23, 22, 3, 33, 27, '2021-10-01', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:16:42'),
(230, 49, 22, 2, 30, 25, '2021-10-01', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:17:10'),
(231, 49, 22, 2, 30, 25, '2021-10-04', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:17:33'),
(232, 49, 22, 2, 30, 25, '2021-10-06', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:17:49'),
(233, 49, 22, 2, 30, 25, '2021-10-08', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:18:08'),
(234, 25, 22, 3, 26, 26, '2021-10-01', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:19:00'),
(235, 51, 22, 2, 30, 25, '2021-10-01', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:19:25'),
(236, 62, 22, 2, 30, 25, '2021-10-01', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:19:58'),
(237, 52, 22, 2, 30, 25, '2021-10-01', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:20:30'),
(238, 73, 22, 2, 23, 25, '2021-10-01', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:22:35'),
(239, 53, 22, 3, 26, 26, '2021-10-01', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:23:10'),
(240, 55, 22, 3, 26, 26, '2021-10-01', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:24:24'),
(241, 14, 22, 3, 33, 27, '2021-10-01', NULL, 2, '10', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 06:24:53'),
(242, 110, 22, 2, 24, 1, '2021-10-01', NULL, 1, '-', '400', '', '', 1, 'Right : Moderate to severe sensorineural hearing loss\r\nLeft : Mild to severe sloping mixed hearing loss', '', NULL, 1, '2021-10-16 06:26:40'),
(243, 115, 25, 2, 24, 22, '2021-10-16', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MODERATE CONDUCTIVE TENDING TO MIXED HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS EXCEPT AT 4 KHz & 8 KHz', '', NULL, 1, '2021-10-16 07:32:18'),
(244, 115, 25, 2, 24, 22, '2021-10-16', NULL, 1, '2', '500', '', '', 2, 'Right : Moderate conductive tending to mixed hearing loss\r\nLeft : hearing sensitivity within normal limits except at 4 KHz & 8 KHz', '', NULL, 1, '2021-10-16 07:32:31'),
(245, 14, 22, 3, 33, 27, '2021-10-14', NULL, 2, '10', '6000', '', '', 1, '', '', 1, 2, '2021-10-16 08:44:01'),
(246, 14, 22, 3, 33, 27, '2021-10-15', NULL, 2, '10', '2000', '', '', 1, '', '', 1, 2, '2021-10-16 08:44:01'),
(247, 14, 22, 2, 30, 25, '2021-10-14', NULL, 2, '10', '500', '', '', 1, '', '', 1, 2, '2021-10-16 08:44:01'),
(248, 14, 22, 2, 30, 25, '2021-10-15', NULL, 2, '10', '0', '', '', 1, '', '', 1, 2, '2021-10-16 08:44:01'),
(249, 61, 22, 2, 23, 25, '2021-10-16', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 08:45:40'),
(250, 14, 22, 2, 30, 25, '2021-10-16', NULL, 2, '10', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 08:46:07'),
(251, 15, 22, 3, 28, 26, '2021-10-16', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 08:46:24'),
(252, 58, 22, 3, 33, 16, '2021-10-16', NULL, 2, '-', '1200', '', '', 1, '', '', NULL, 1, '2021-10-16 08:46:45'),
(253, 94, 22, 2, 24, 28, '2021-10-16', NULL, 1, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 08:47:10'),
(254, 23, 22, 3, 26, 26, '2021-10-16', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 08:48:28'),
(255, 117, 22, 2, 24, 4, '2021-10-16', NULL, 1, '-', '1750', '', '', 1, '? Auditory Maturation Delay', '2022-01-02', NULL, 1, '2021-10-16 09:20:25'),
(256, 118, 22, 3, 28, 26, '2021-10-16', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 09:25:01'),
(257, 21, 22, 2, 24, 28, '2021-10-16', NULL, 1, '-', '0', '', '50 RUPEES PAID', 1, '', '', NULL, 1, '2021-10-16 09:25:46'),
(258, 119, 22, 2, 24, 1, '2021-10-16', NULL, 1, '-', '400', '', '', 1, 'Bilateral Moderately severe to severe sensorineural hearing loss', '', NULL, 1, '2021-10-16 09:31:01'),
(259, 120, 22, 2, 24, 3, '2021-10-16', NULL, 1, '-', '500', '', '', 1, 'Bilateral OAE Present suggestive of normal hearing upto outer hair cells', '2021-12-15', NULL, 1, '2021-10-16 09:35:30'),
(260, 121, 22, 2, 23, 10, '2021-10-16', NULL, 2, '6', '400', '', '', 1, '', '', NULL, 1, '2021-10-16 09:43:59'),
(261, 122, 22, 2, 24, 1, '2021-10-16', NULL, 1, '14', '400', '', '', 1, 'Right : Moderate conductive hearing loss\r\nLeft : Moderately severe conductive hearing loss\r\nNB: Came for hearing aid.did bilateral trial with volta pt', '', NULL, 1, '2021-10-16 09:46:16'),
(262, 122, 22, 2, 24, 1, '2021-10-16', NULL, 1, '14', '400', '', '', 1, 'Right : Moderate Conductive hearing loss\r\nLeft : Moderately Severe Conductive hearing loss\r\n\r\nNB: Came for hearing aid.did trial with volta pt (bilateral), Will buy after dome days', '', NULL, 1, '2021-10-16 10:46:21'),
(263, 9, 22, 2, 30, 25, '2021-10-16', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 10:46:41'),
(264, 10, 22, 3, 33, 27, '2021-10-16', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 10:47:12'),
(265, 10, 22, 3, 33, 27, '2021-10-09', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 10:48:10'),
(266, 10, 22, 3, 33, 27, '2021-10-07', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 10:48:34'),
(267, 10, 22, 3, 33, 27, '2021-10-05', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-16 10:49:07'),
(268, 123, 25, 2, 24, 22, '2021-10-19', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MODERATE CONDUCTIVE HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-19 06:01:26'),
(269, 124, 25, 2, 24, 22, '2021-10-19', NULL, 1, '2', '500', '', '', 2, 'RIGHT : SEVERE SENSORINEURAL HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-19 07:23:45'),
(270, 124, 25, 2, 24, 22, '2021-10-19', NULL, 1, '2', '500', '', '', 2, 'RIGHT : SEVERE SENSORINEURAL HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-19 07:23:54'),
(271, 58, 22, 2, 30, 25, '2021-10-20', NULL, 1, '7', '0', '', '', 1, 'on 20th spt done', '2021-10-21', NULL, 1, '2021-10-20 05:19:20'),
(272, 49, 22, 2, 30, 25, '2021-10-20', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:28:21'),
(273, 51, 22, 2, 30, 25, '2021-10-20', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:28:44'),
(274, 125, 25, 2, 24, 22, '2021-10-19', NULL, 1, '2', '500', '', '', 2, 'RIGHT : HEARING SENSITIVITY WITHIN NORMAL LIMITS\r\nLEFT : NORMAL HEARING SENSITIVITY WITH MILD CONDUCTIVE COMPONENT AT 2 KHz', '', NULL, 1, '2021-10-20 05:41:40'),
(275, 126, 25, 2, 24, 22, '2021-10-19', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MODERATE CONDUCTIVE TENDING TO MIXED HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS EXCEPT AT 4 KHz & 8 KHz', '', NULL, 1, '2021-10-20 05:43:21'),
(276, 127, 25, 2, 24, 22, '2021-10-19', NULL, 1, '2', '500', '', '', 2, 'RIGHT : HEARING SENSITIVTY WITHIN NORMAL LIMITS\r\nLEFT : PROFOUND HEARING LOSS', '', NULL, 1, '2021-10-20 05:45:10'),
(277, 128, 25, 2, 24, 22, '2021-10-19', NULL, 1, '2', '500', '', '', 2, 'BILATERAL MINIMAL TO MODERATE HIGH FREQUENCY SENSORINEURAL HEARING LOSS.', '', NULL, 1, '2021-10-20 05:47:05'),
(278, 52, 22, 2, 30, 25, '2021-10-20', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:49:44'),
(279, 13, 22, 2, 30, 25, '2021-10-20', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:50:06'),
(280, 14, 22, 3, 33, 27, '2021-10-20', NULL, 2, '10', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:50:56'),
(281, 63, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:51:17'),
(282, 23, 22, 3, 33, 27, '2021-10-20', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:51:57'),
(283, 9, 22, 3, 33, 27, '2021-10-20', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:52:31'),
(284, 50, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:53:11'),
(285, 11, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:53:29'),
(286, 20, 22, 3, 26, 26, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:55:17'),
(287, 25, 22, 3, 26, 26, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:55:41'),
(288, 62, 22, 3, 26, 26, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:56:11'),
(289, 53, 22, 3, 26, 26, '2021-10-20', NULL, 2, '7', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:57:08'),
(290, 76, 22, 3, 26, 26, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:58:32'),
(291, 55, 22, 3, 26, 26, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:59:09'),
(292, 34, 22, 2, 23, 25, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:59:40'),
(293, 61, 22, 2, 23, 25, '2021-10-20', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 05:59:52'),
(294, 54, 22, 2, 23, 25, '2021-10-20', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 06:00:55'),
(295, 46, 22, 2, 23, 25, '2021-10-20', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 06:01:27'),
(296, 47, 22, 2, 23, 25, '2021-10-20', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 06:01:38'),
(297, 15, 22, 3, 28, 26, '2021-10-20', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2021-10-20 06:01:58'),
(298, 129, 25, 2, 24, 22, '2021-10-20', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MILD CONDUCTIVE HEARING LOSS\r\nLEFT : MODERATE CONDUCTIVE TENDING TO MIXED HEARING LOSS', '', NULL, 1, '2021-10-20 06:07:08'),
(299, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(300, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(301, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(302, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(303, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(304, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(305, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(306, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(307, 10, 22, 3, 33, 27, '2021-10-20', NULL, 2, '14', '0', '', 'DAILY PAYMENT', 1, '', '', 2, 2, '2021-10-20 06:25:05'),
(308, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '4000', '', 'ALTERNATE DAY ', 1, 'test', '', 3, 2, '2021-10-20 06:43:29'),
(309, 13, 22, 2, 30, 29, '2021-10-06', NULL, 0, '14', '0', '', 'ALTERNATE DAY ', 1, '8/10/2021 LUBNA WAS ABSENT', '', 3, 2, '2021-10-20 06:43:29'),
(310, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, 'cancel due to rain', '2021-10-20', 3, 2, '2021-10-20 06:43:29'),
(311, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, 'FOLLUP DATE', '2021-10-22', 3, 2, '2021-10-20 06:43:29'),
(312, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, 'ATTENED', '2021-10-20', 3, 2, '2021-10-20 06:43:29'),
(313, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, '5PM', '2021-10-18', 3, 2, '2021-10-20 06:43:29'),
(314, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, '5PM\r\n', '2021-10-18', 3, 2, '2021-10-20 06:43:29'),
(315, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, '5PM', '2021-10-15', 3, 2, '2021-10-20 06:43:29'),
(316, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, '5PM ', '2021-10-13', 3, 2, '2021-10-20 06:43:29'),
(317, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, '5PM', '2021-10-11', 3, 2, '2021-10-20 06:43:29'),
(318, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, 'ABSENT', '2021-10-08', 3, 2, '2021-10-20 06:43:29'),
(319, 13, 22, 2, 30, 29, '2021-10-06', NULL, 1, '14', '0', '', 'ALTERNATE DAY ', 1, '5PM', '2021-10-08', 3, 2, '2021-10-20 06:43:29'),
(320, 131, 31, 2, 24, 1, '2021-10-07', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MODERATE SENSORINEURAL HEARING LOSS \r\nLEFT: MODERATELY SEVERE SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-20 14:37:34'),
(321, 133, 31, 2, 24, 1, '2021-10-09', NULL, 1, '1', '400', '', '', 3, 'SAME PATIENT DOUBLE ENTERED BY UMESH', '', NULL, 1, '2021-10-20 14:50:57'),
(322, 134, 31, 2, 24, 1, '2021-10-11', NULL, 1, '1', '400', '', '', 3, 'SAME PATIENT DOUBLE ENTERED BY UMESH', '', NULL, 1, '2021-10-20 14:57:02'),
(323, 133, 31, 2, 24, 1, '2021-10-09', NULL, 1, '1', '400', '', '', 3, 'SAME PATIENT DOUBLE ENTERED BY UMESH', '', NULL, 1, '2021-10-20 15:28:54'),
(324, 133, 31, 2, 24, 1, '2021-10-09', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MILD TO MODERATE CONDUCTIVE HEARING LOSS\r\nLEFT: HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-20 15:28:54'),
(325, 134, 31, 2, 24, 1, '2021-10-11', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MILD TO MODERATELY SEVERE SENSORINEURAL HEARING LOSS\r\n', '', NULL, 1, '2021-10-20 15:29:56'),
(326, 135, 31, 2, 24, 1, '2021-10-12', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MODERATE CONDUCTIVE HEARING LOSS\r\nLEFT: MILD CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-20 15:30:30'),
(327, 136, 31, 2, 24, 1, '2021-10-13', NULL, 1, '1', '400', '', '', 3, 'BILATERAL MILD CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-20 15:30:53'),
(328, 137, 31, 2, 24, 1, '2021-10-13', NULL, 1, '1', '400', '', '', 3, 'RIGHT: HEARING SENSITIVITY WITHIN NORMAL LIMITS\r\nLEFT: MILD CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-20 15:31:10'),
(329, 138, 31, 2, 24, 1, '2021-10-13', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MILD TO SEVERE HIGH FREQUENCY SLOPING MIXED HEARING LOSS\r\nLEFT: MILD TO SEVERE HIGH FREQUENCY SLOPING SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-20 15:31:34'),
(330, 139, 31, 2, 24, 1, '2021-10-13', NULL, 1, '1', '400', '', '', 3, 'RIGHT: HEARING SENSITIVITY WITHIN NORMAL LIMITS\r\nLEFT : MINIMAL LOW FREQUENCY HEARING LOSS', '', NULL, 1, '2021-10-20 15:32:03'),
(331, 140, 31, 2, 24, 1, '2021-10-14', NULL, 1, '1', '400', '', '', 3, 'RIGHT: HEARING SENSITIVITY WITHIN NORMAL LIMITS EXCEPT AT 4KHz & 8 KHz\r\nLEFT: MODERATE CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-20 15:32:27'),
(332, 141, 31, 2, 24, 1, '2021-10-14', NULL, 1, '1', '400', '', '', 3, 'BILATERAL MINIMAL TO MODERATELY SEVERE HIGH FEQUENCY SLOPING SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-20 15:32:46'),
(333, 142, 31, 2, 24, 1, '2021-10-14', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MODERATE CONDUCTIVE HEARING LOSS\r\nLEFT: MODERATELY SEVERE CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-20 15:33:06'),
(334, 143, 31, 2, 24, 1, '2021-10-16', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MILD SENSORINEURAL HEARING LOSS\r\nLEFT: PROFOUND HEARING LOSS', '', NULL, 1, '2021-10-20 15:33:27'),
(335, 144, 31, 2, 24, 1, '2021-10-16', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MODERATELY SEVERE MIXED HEARING LOSS\r\nLEFT: SEVERE MIXED HEARING LOSS', '', NULL, 1, '2021-10-20 15:33:45'),
(336, 145, 31, 2, 24, 1, '2021-10-18', NULL, 1, '1', '400', '', '', 3, 'RIGHT: MODERATE CONDUCTIVE HEARING LOSS\r\nLEFT: PROFOUND MIXED HEARING LOSS', '', NULL, 1, '2021-10-20 15:34:33'),
(337, 147, 31, 2, 24, 1, '2021-10-18', NULL, 1, '1', '400', '', '', 3, 'RIGHT : MODERATE CONDUCTIVE HEARING LOSS\r\nLEFT: MODERATELY SEVERE MIXED HEARING LOSS', '', NULL, 1, '2021-10-20 15:34:59'),
(338, 148, 31, 2, 24, 1, '2021-10-19', NULL, 1, '1', '400', '', '', 3, 'RIGHT : HEARING SENSITIVITY WITHIN NORMAL LIMITS\r\nLEFT    : MILD CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-20 15:35:21'),
(339, 149, 31, 2, 24, 1, '2021-10-19', NULL, 1, '1', '400', '', '', 3, 'BILATERAL MILD TO SEVERE SLOPING SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-20 15:35:39'),
(340, 150, 31, 2, 24, 1, '2021-10-18', NULL, 1, '1', '400', '', '', 3, 'RIGHT: HEARING SENSITIVITY WITHIN NORMAL LIMITS\r\nLEFT: MODERATELY SEVERE TO MILD HIGH FREQUENCY RISING SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-20 15:37:54'),
(341, 151, 31, 2, 24, 1, '2021-10-21', NULL, 1, '1', '400', '', '', 3, 'RIGHT : MILD TO PROFOUND SLOPING SNHL\r\nLEFT : MODERATE TO PROFOUND SLOPING SNHL', '', NULL, 1, '2021-10-21 07:48:51'),
(342, 152, 25, 2, 24, 22, '2021-10-21', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MILD TO MODERATELY SEVERE SENSORINEURAL HEARING LOSS\r\nLEFT : MODERATE HIGH FREQUENCY SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-21 09:46:15'),
(343, 153, 25, 2, 24, 22, '2021-10-21', NULL, 1, '2', '500', '', '', 2, 'BILATERAL HEARING SENSITIVITY WITHIN NORMAL LIMITS EXCEPT AT 4KHz AND 8KHz.', '', NULL, 1, '2021-10-21 09:47:39'),
(344, 154, 25, 2, 24, 22, '2021-10-23', NULL, 1, '2', '500', '', '', 2, 'RIGHT : HEARING SENSITIVITY WITHIN NORMAL LIMITS\r\nLEFT : PROFOUND SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-23 08:26:31'),
(345, 155, 25, 2, 24, 22, '2021-10-23', NULL, 1, '2', '500', '', '', 2, 'BILATERAL SEVERE TO PROFOUND MIXED HEARING LOSS', '', NULL, 1, '2021-10-23 10:22:10'),
(346, 156, 25, 2, 24, 22, '2021-10-23', NULL, 1, '2', '500', '', '', 2, 'BILATERAL HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-23 10:24:03'),
(347, 157, 25, 2, 24, 22, '2021-10-25', NULL, 1, '2', '500', '', '', 2, 'RIGHT : HEARING SENSITIVITY WITHIN NORMAL LIMITS\r\nLEFT : MILD CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-25 07:01:52'),
(348, 158, 25, 2, 24, 22, '2021-10-25', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MODERATE CONDUCTIVE HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-25 08:34:43'),
(349, 159, 25, 2, 24, 22, '2021-10-25', NULL, 1, '2', '500', '', '', 2, 'RIGHT : HEARING SENSITIVITY WITHIN NORMAL LIMITS EXCEPT AT 4KHz & 8 KHz\r\nLEFT : MILD CONDUCTIVE HEARING LOSS', '', NULL, 1, '2021-10-25 08:36:04'),
(350, 160, 25, 2, 24, 22, '2021-10-25', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MILD CONDUCTIVE HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-25 08:37:21'),
(351, 161, 25, 2, 24, 22, '2021-10-26', NULL, 1, '2', '500', '', '', 2, 'RIGHT : HEARING SENSITIVITY WITHIN NORMAL LIMITS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS EXCEPT AT 8 KHz', '', NULL, 1, '2021-10-26 07:44:54'),
(352, 162, 31, 2, 24, 1, '2021-10-25', NULL, 1, '-', '400', '', '', 3, 'RIGHT : MODERATE CONDUCTIVE HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-26 12:10:40'),
(353, 163, 31, 2, 24, 1, '2021-10-26', NULL, 1, '1', '400', '', '', 3, 'RIGHT : MODERATELY SEVERE TO SEVERE SENSORINEURAL HEARING LOSS\r\nLEFT :  MODERATELY SEVERE TO PROFOUND SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-26 12:11:00'),
(354, 162, 31, 2, 24, 1, '2021-10-25', NULL, 1, '1', '400', '', '', 3, 'SAME PATIENT DOUBLE ENTERED BY UMESH', '', NULL, 1, '2021-10-26 12:11:26'),
(355, 164, 25, 2, 24, 22, '2021-10-27', NULL, 1, '2', '500', '', '', 2, 'BILATERAL MILD SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-27 10:29:43'),
(356, 165, 25, 2, 24, 22, '2021-10-27', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MILD CONDUCTIVE HEARING LOSS\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS ECXEPT AT 8 KHz', '', NULL, 1, '2021-10-27 10:30:47'),
(357, 166, 25, 2, 24, 22, '2021-10-27', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MODERATE CONDUCTIVE TENDING TO MIXED HEARING LOSS (? DIP AT 2 KHz)\r\nLEFT : MILD CONDUCTIVE TENDING TO MIXED HEARING LOSS', '', NULL, 1, '2021-10-27 10:32:00'),
(358, 167, 25, 2, 24, 22, '2021-10-28', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-28 07:45:46'),
(359, 168, 25, 2, 24, 22, '2021-10-28', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-28 08:49:31'),
(360, 169, 25, 2, 24, 22, '2021-10-28', NULL, 1, '2', '500', '', '', 2, 'RIGHT : MINIMAL HEARING LOSS (CONDUCTIVE TYPE)\r\nLEFT : HEARING SENSITIVITY WITHIN NORMAL LIMITS', '', NULL, 1, '2021-10-28 08:50:48'),
(361, 170, 25, 2, 24, 22, '2021-10-29', NULL, 1, '2', '500', '', '', 2, 'BILATERAL MILD TO MODERATE HIGH FREQUENCY SLOPING SENSORINEURAL HEARING LOSS.', '', NULL, 1, '2021-10-29 08:20:12'),
(362, 171, 25, 2, 24, 22, '2021-10-29', NULL, 1, '2', '500', '', '', 2, 'BILATERAL MODERATE MIXED HEARING LOSS', '', NULL, 1, '2021-10-29 09:50:06'),
(363, 172, 31, 2, 24, 1, '2021-10-28', NULL, 1, '1', '400', '', '', 3, 'BILATERAL HEARING SENSITIVITY WITHIN NORMAL LIMITS WITH A MILD DIP AT 4 KHz', '', NULL, 1, '2021-10-29 12:09:03'),
(364, 173, 31, 2, 24, 1, '2021-10-28', NULL, 1, '1', '400', '', '', 3, 'RIGHT: HEARING SENSITIVITY WITHIN NORMAL LIMITS WTH A MODERATE DIP AT 4 KHz\r\nLEFT : MILD TO MODERATELY SEVERE HIGH FREQUENCY SLOPING SENSORINEURAL HEARING LOSS', '', NULL, 1, '2021-10-29 12:09:30'),
(365, 88, 31, 2, 24, 1, '2021-10-01', NULL, 2, '1', '400', '', '', 3, '', '', NULL, 1, '2021-10-29 13:27:13'),
(366, 90, 31, 2, 24, 1, '2021-10-02', NULL, 2, '1', '400', '', '', 3, '', '', NULL, 1, '2021-10-29 13:28:06'),
(367, 91, 31, 2, 24, 1, '2021-10-04', NULL, 2, '1', '400', '', '', 3, '', '', NULL, 1, '2021-10-29 13:28:49'),
(368, 92, 31, 2, 24, 1, '2021-10-07', NULL, 2, '1', '400', '', '', 3, '', '', NULL, 1, '2021-10-29 13:29:25'),
(369, 132, 31, 2, 24, 1, '2021-10-09', NULL, 2, '1', '400', '', '', 3, '', '', NULL, 1, '2021-10-29 13:30:13');
INSERT INTO `appoitment` (`Id`, `Patient_Id`, `User_Id`, `Doctor_Type`, `Doctor_Id`, `Procedure_Id`, `Date`, `Slot_Id`, `Status`, `Referred_From`, `Fees`, `Fees_Paid_Type`, `Note`, `Branch_Id`, `Remark`, `Follow_Date`, `Recurring_Appointment_Id`, `Appointment_Type`, `Created_on`) VALUES
(370, 174, 22, 2, 24, 1, '2021-10-29', NULL, 2, '-', '400', '', '', 1, '', '', NULL, 1, '2021-10-30 06:12:36'),
(371, 176, 25, 2, 24, 22, '2021-10-30', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-30 06:17:07'),
(372, 23, 22, 3, 33, 27, '2021-10-02', NULL, 1, '-', '0', '', '', 1, '', '2021-10-23', 4, 2, '2021-10-30 06:35:04'),
(373, 23, 22, 3, 33, 27, '2021-10-02', NULL, 2, '-', '0', '', '', 1, '', '', 4, 2, '2021-10-30 06:35:04'),
(374, 23, 22, 3, 33, 27, '2021-10-02', NULL, 2, '-', '0', '', '', 1, '', '', 4, 2, '2021-10-30 06:35:04'),
(375, 23, 22, 3, 26, 26, '2021-10-27', NULL, 2, '-', '0', '', '', 1, '', '', 4, 2, '2021-10-30 06:35:04'),
(376, 23, 22, 3, 26, 26, '2021-10-27', NULL, 2, '-', '0', '', '', 1, '', '', 4, 2, '2021-10-30 06:35:04'),
(377, 23, 22, 3, 26, 26, '2021-10-27', NULL, 2, '-', '0', '', '', 1, '', '', 4, 2, '2021-10-30 06:35:04'),
(378, 1, 22, 2, 23, 11, '2021-10-30', '1', 2, '-', '0', '', 'testing entry', 1, '', '', 5, 2, '2021-10-30 06:37:19'),
(379, 177, 25, 2, 24, 22, '2021-10-30', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-30 08:32:27'),
(380, 178, 25, 2, 24, 22, '2021-10-30', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-30 08:34:10'),
(381, 179, 25, 2, 24, 22, '2021-10-30', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-30 09:30:58'),
(382, 180, 25, 2, 24, 22, '2021-10-30', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-30 10:30:46'),
(383, 182, 25, 2, 24, 22, '2021-10-30', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-30 10:32:08'),
(384, 183, 25, 2, 24, 22, '2021-10-30', NULL, 2, '2', '500', '', '', 2, '', '', NULL, 1, '2021-10-30 10:34:01'),
(385, 1, 22, 2, 24, 0, '2022-01-01', NULL, 2, '', '', '', 'THERAPY\r\n', 1, '', '', NULL, 1, '2022-01-01 18:30:38'),
(386, 1, 22, 2, 23, 25, '2021-12-28', '1', 2, '1', '0', '', 'speech therapy', 1, '', '', 6, 2, '2022-01-28 11:55:43'),
(387, 1, 22, 3, 26, 26, '2021-12-29', NULL, 2, '1', '0', '', 'speech therapy', 1, '', '', 6, 2, '2022-01-28 11:55:43'),
(388, 1, 22, 3, 26, 26, '2021-12-29', NULL, 2, '1', '1000', '', 'speech therapy', 1, '', '', 7, 2, '2022-01-28 11:55:45'),
(389, 1, 22, 2, 23, 25, '2021-12-28', '1', 2, '1', '0', '', 'speech therapy', 1, '', '', 7, 2, '2022-01-28 11:55:45'),
(390, 184, 22, 2, 23, 11, '2022-01-28', NULL, 2, '14', '7000', '', '', 1, '', '', NULL, 1, '2022-01-28 12:05:28'),
(391, 9, 22, 3, 33, 27, '2022-01-28', NULL, 2, '3', '0', '', '', 1, '', '', NULL, 1, '2022-01-28 12:07:01'),
(392, 14, 22, 3, 26, 26, '2022-01-28', NULL, 1, '10', '0', '', '', 1, '', '2022-01-31', NULL, 1, '2022-01-28 12:07:31'),
(393, 26, 22, 2, 24, 1, '2022-01-28', NULL, 2, '4', '400', '', '', 1, '', '', NULL, 1, '2022-01-28 12:07:49'),
(394, 4, 22, 2, 29, 2, '2022-01-28', NULL, 2, '1', '600', '', '', 1, '', '', NULL, 1, '2022-01-28 12:08:02'),
(395, 10, 22, 3, 33, 15, '2022-01-28', NULL, 2, '14', '400', '', '', 1, '', '', NULL, 1, '2022-01-28 12:34:33'),
(396, 4, 22, 2, 24, 30, '2022-01-28', NULL, 2, '14', '210', '', '312', 1, '', '', NULL, 1, '2022-01-28 15:18:52'),
(397, 6, 22, 2, 24, 30, '2022-01-28', NULL, 2, '6', '210', '', '312', 1, '', '', NULL, 1, '2022-01-28 15:20:05'),
(398, 25, 22, 2, 23, 9, '2022-01-29', NULL, 2, '14', '400', '', '', 1, '', '', NULL, 1, '2022-01-29 10:27:57'),
(399, 53, 22, 3, 32, 15, '2022-01-29', NULL, 2, '11', '400', '', '', 1, '', '', NULL, 1, '2022-01-29 10:29:23'),
(400, 23, 22, 3, 26, 26, '2022-01-29', NULL, 2, '23', '0', '', '', 1, '', '', NULL, 1, '2022-01-29 10:29:51'),
(401, 55, 22, 3, 33, 17, '2022-01-29', NULL, 2, '5', '1900', '', '', 1, '', '', NULL, 1, '2022-01-29 10:31:16'),
(402, 46, 22, 2, 23, 29, '2022-02-05', '1', 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(403, 46, 22, 2, 23, 29, '2022-02-05', '1', 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(404, 46, 22, 2, 23, 25, '2022-01-29', '1', 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(405, 46, 22, 2, 23, 25, '2022-01-29', '2', 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(406, 46, 22, 2, 23, 25, '2022-01-29', '1', 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(407, 46, 22, 2, 23, 25, '2022-01-29', '1', 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(408, 46, 22, 2, 23, 25, '2022-01-29', '3', 0, '14', '0', '', '', 1, 'CAME LATE ', '', 8, 2, '2022-01-29 10:51:55'),
(409, 46, 22, 2, 23, 25, '2022-01-29', '1', 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(410, 46, 22, 2, 23, 25, '2022-01-29', '1', 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(411, 46, 22, 3, 26, 0, '2022-02-03', NULL, 2, '14', '0', '', '', 1, '', '', 8, 2, '2022-01-29 10:51:55'),
(412, 46, 22, 2, 23, 25, '2022-01-29', '1', 0, '14', '0', '', '', 1, 'DOUBLE ENTRY', '', 8, 2, '2022-01-29 10:51:55'),
(413, 46, 22, 2, 23, 25, '2022-01-29', NULL, 0, '14', '0', '', '', 1, 'DOUBLE ENTRY', '', 8, 2, '2022-01-29 10:51:55'),
(414, 46, 22, 2, 23, 25, '2022-01-29', '1', 1, '14', '0', '', '', 1, '', '0001-01-01', 8, 2, '2022-01-29 10:51:55'),
(415, 46, 22, 2, 23, 25, '2022-01-29', '1', 1, '14', '10000', 'Online', '', 1, 'NA', '2022-03-26', 8, 2, '2022-01-29 10:51:55'),
(416, 9, 22, 3, 33, 25, '2022-01-31', NULL, 2, '3', '0', '', '250 fees', 1, '', '', NULL, 1, '2022-01-31 10:28:07'),
(417, 14, 22, 3, 26, 26, '2022-01-31', NULL, 0, '10', '0', '', '', 1, 'INSTEAD TOOK PT SESSION', '', NULL, 1, '2022-01-31 10:28:33'),
(418, 49, 22, 3, 32, 31, '2022-01-31', NULL, 2, '-', '0', '', '', 1, '', '', NULL, 1, '2022-01-31 10:28:53'),
(419, 14, 22, 2, 23, 25, '2022-02-01', NULL, 2, '10', '0', '', '', 1, '', '', NULL, 1, '2022-02-01 10:37:15'),
(420, 18, 22, 2, 23, 25, '2022-02-01', NULL, 2, '14', '0', '', '', 1, '', '', NULL, 1, '2022-02-01 10:37:52'),
(421, 12, 22, 3, 33, 15, '2022-02-01', NULL, 2, '3', '400', '', '', 1, '', '', NULL, 1, '2022-02-01 10:38:13'),
(422, 9, 22, 3, 32, 31, '2022-02-01', NULL, 0, '9', '0', '', '', 1, 'NOT FEELING WELL', '', NULL, 1, '2022-02-01 10:38:32'),
(423, 53, 22, 2, 23, 25, '2022-02-04', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(424, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(425, 53, 22, 3, 26, 26, '2022-02-03', NULL, 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(426, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(427, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(428, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(429, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(430, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(431, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(432, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(433, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(434, 53, 22, 2, 23, 29, '2022-02-02', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(435, 53, 22, 2, 23, 25, '2022-02-04', '4', 2, '14', '0', '', '', 1, '', '', 9, 2, '2022-02-01 10:55:28'),
(436, 18, 22, 3, 32, 15, '2022-02-01', NULL, 2, '14', '400', '', '', 1, '', '', NULL, 1, '2022-02-01 14:59:31'),
(437, 18, 22, 3, 32, 31, '0000-00-00', NULL, 2, '14', '0', '', '', 1, '', '', 10, 2, '2022-02-01 15:03:23'),
(438, 18, 22, 3, 32, 31, '0000-00-00', NULL, 2, '14', '0', '', '', 1, '', '', 10, 2, '2022-02-01 15:03:23'),
(439, 18, 22, 3, 32, 31, '0000-00-00', NULL, 2, '14', '0', '', '', 1, '', '', 10, 2, '2022-02-01 15:03:23'),
(440, 18, 22, 3, 32, 31, '0000-00-00', NULL, 2, '14', '0', '', '', 1, '', '', 10, 2, '2022-02-01 15:03:23'),
(441, 18, 22, 3, 32, 31, '2022-02-02', NULL, 2, '9', '0', '', '', 1, '', '', NULL, 1, '2022-02-01 15:07:31'),
(442, 18, 22, 3, 32, 31, '2022-02-01', NULL, 2, '2', '0', '', '', 1, '', '', NULL, 1, '2022-02-01 15:08:23'),
(443, 18, 22, 3, 32, 31, '0000-00-00', NULL, 2, '2', '0', '', '', 1, '', '', 11, 2, '2022-02-01 15:10:06'),
(444, 18, 22, 3, 32, 31, '0000-00-00', NULL, 2, '2', '0', '', '', 1, '', '', 11, 2, '2022-02-01 15:10:06'),
(445, 6, 22, 2, 30, 9, '2022-02-01', NULL, 2, '6', '400', '', '', 1, '', '', NULL, 1, '2022-02-01 15:30:49'),
(446, 6, 22, 2, 30, 25, '0000-00-00', NULL, 2, '2', '0', '', '', 1, '', '', 13, 2, '2022-02-01 15:32:31'),
(447, 6, 22, 2, 30, 25, '0000-00-00', NULL, 0, '2', '0', '', '', 1, 'NOT FEELLING WELL\r\n', '', 13, 2, '2022-02-01 15:32:31'),
(448, 7, 22, 2, 35, 15, '2022-02-01', NULL, 2, '3', '400', '', '', 1, '', '', NULL, 1, '2022-02-01 15:34:39'),
(449, 16, 22, 3, 26, 27, '2022-02-02', NULL, 2, '-', '0', '', 'HOME TRAINING', 1, '', '', 14, 2, '2022-02-02 11:20:14'),
(450, 16, 22, 3, 26, 27, '2022-02-02', NULL, 2, '-', '0', '', 'HOME TRAINING', 1, '', '', 14, 2, '2022-02-02 11:20:14'),
(451, 16, 22, 3, 26, 27, '2022-02-02', NULL, 2, '-', '0', '', 'HOME TRAINING', 1, '', '', 15, 2, '2022-02-02 11:20:15'),
(452, 16, 22, 3, 26, 27, '2022-02-02', NULL, 2, '-', '0', '', 'HOME TRAINING', 1, '', '', 15, 2, '2022-02-02 11:20:15'),
(453, 5, 22, 3, 32, 27, '2022-02-05', NULL, 2, '1', '500', '', '', 1, '', '', NULL, 1, '2022-02-05 10:28:18'),
(454, 8, 22, 3, 32, 15, '2022-02-10', NULL, 0, '2', '0', '', '', 1, 'testingg', '', 16, 2, '2022-02-05 10:29:08'),
(455, 8, 22, 3, 32, 15, '2022-02-10', NULL, 0, '2', '0', '', '', 1, 'Testing', '', 17, 2, '2022-02-05 10:29:10'),
(456, 18, 22, 3, 32, 31, '2022-02-07', NULL, 0, '3', '0', '', '', 1, 'CAME LATE', '', 18, 2, '2022-02-07 11:02:06'),
(457, 1, 22, 2, 24, 2, '2022-02-11', NULL, 2, '1', '0', '', 'NA', 1, '', '', 19, 2, '2022-02-11 11:34:43'),
(458, 1, 22, 2, 24, 2, '2022-02-11', NULL, 2, '1', '0', '', 'NA', 1, '', '', 19, 2, '2022-02-11 11:34:43'),
(459, 1, 22, 2, 24, 1, '2022-02-11', NULL, 2, '1', '0', '', 'NA', 1, '', '', 19, 2, '2022-02-11 11:34:43'),
(460, 1, 22, 2, 24, 2, '2022-02-11', NULL, 2, '1', '0', '', 'NA', 1, '', '', 19, 2, '2022-02-11 11:34:43'),
(461, 1, 22, 3, 26, 15, '2022-02-11', NULL, 2, '1', '0', '', 'NA', 1, '', '', 20, 2, '2022-02-11 11:40:45'),
(462, 1, 22, 3, 26, 15, '2022-02-12', NULL, 2, '1', '0', '', 'NA', 1, '', '', 20, 2, '2022-02-11 11:40:45'),
(463, 1, 22, 3, 26, 18, '2022-02-11', NULL, 2, '1', '0', '', 'NA', 1, '', '', 20, 2, '2022-02-11 11:40:45'),
(466, 1, 22, 2, 24, 5, '2022-02-18', NULL, 2, '1', '0', '', 'NA', 1, '', '', 21, 2, '2022-02-16 15:09:19'),
(467, 1, 22, 2, 24, 5, '2022-02-23', NULL, 2, '1', '0', '', 'NA', 1, '', '', 21, 2, '2022-02-16 15:09:19'),
(468, 1, 22, 2, 24, 5, '2022-02-21', NULL, 2, '1', '0', '', 'NA', 1, '', '', 21, 2, '2022-02-16 15:09:19'),
(469, 1, 22, 2, 24, 5, '2022-02-22', NULL, 2, '1', '0', '', 'NA', 1, '', '', 21, 2, '2022-02-16 15:09:19'),
(470, 1, 22, 2, 24, 5, '2022-02-19', NULL, 2, '1', '0', '', 'NA', 1, '', '', 21, 2, '2022-02-16 15:09:19'),
(471, 1, 22, 2, 24, 5, '2022-02-24', NULL, 2, '1', '0', '', 'NA', 1, '', '', 21, 2, '2022-02-16 15:09:19'),
(472, 1, 22, 2, 24, 5, '2022-02-25', '5', 2, '1', '0', '', 'NA', 1, '', '', 21, 2, '2022-02-16 15:09:19'),
(473, 1, 22, 3, 26, 14, '2022-02-16', NULL, 2, '-', '0', '', 'NA', 1, '', '', 22, 2, '2022-02-16 16:07:38'),
(474, 1, 22, 2, 23, 10, '2022-02-16', NULL, 2, '-', '0', '', 'NA', 1, '', '', 22, 2, '2022-02-16 16:07:38'),
(475, 1, 22, 2, 24, 7, '2022-02-16', NULL, 2, '-', '0', '', 'NA', 1, '', '', 22, 2, '2022-02-16 16:07:38'),
(476, 1, 22, 2, 24, 5, '2022-02-05', '7', 2, '1', '0', '', 'NAAAA', 1, '', '', 23, 2, '2022-02-16 16:20:56'),
(477, 1, 22, 2, 24, 5, '2022-02-05', '7', 2, '1', '0', '', 'NAAAA', 1, '', '', 23, 2, '2022-02-16 16:20:56'),
(478, 3, 22, 2, 24, 3, '2022-02-22', '7', -1, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(479, 3, 22, 2, 24, 3, '2022-02-18', '7', 2, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(480, 3, 22, 2, 24, 3, '2022-02-17', '6', 2, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(481, 3, 22, 2, 24, 3, '2022-02-19', '5', 2, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(482, 3, 22, 2, 24, 3, '2022-02-23', '7', 2, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(483, 3, 22, 2, 24, 3, '2022-02-21', '7', 2, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(484, 3, 22, 2, 24, 3, '2022-02-24', '7', 2, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(485, 3, 22, 2, 24, 3, '2022-02-25', '7', 2, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(486, 3, 22, 2, 24, 3, '2022-02-26', '6', 2, '1', '0', '', 'NA', 1, '', '', 24, 2, '2022-02-16 16:27:56'),
(487, 7, 22, 2, 24, 3, '2022-02-22', '7', 2, '1', '300', 'Online', 'NA', 1, 'SuccessFully Payent', '', 25, 2, '2022-02-16 16:49:03'),
(488, 5, 22, 2, 24, 3, '2022-02-18', '6', 2, '2', '0', '', 'NA', 1, '', '', 26, 2, '2022-02-17 13:44:59'),
(489, 5, 22, 2, 24, 3, '2022-02-19', '6', 2, '2', '0', '', 'NA', 1, '', '', 26, 2, '2022-02-17 13:44:59'),
(490, 5, 22, 2, 24, 3, '2022-02-22', '6', 2, '2', '0', '', 'NA', 1, '', '', 26, 2, '2022-02-17 13:44:59'),
(491, 5, 22, 2, 24, 3, '2022-02-21', '6', 2, '2', '0', '', 'NA', 1, '', '', 26, 2, '2022-02-17 13:44:59'),
(492, 2, 22, 2, 23, 11, '2022-03-02', '17', 0, '2', '0', '', '', 1, '', '', 27, 2, '2022-03-02 16:40:34'),
(493, 2, 22, 2, 23, 11, '2022-03-03', '16', 0, '2', '0', '', '', 1, '', '', 27, 2, '2022-03-02 16:40:34'),
(494, 2, 22, 2, 23, 11, '2022-03-07', '16', 0, '2', '0', '', '', 1, '', '', 27, 2, '2022-03-02 16:40:34'),
(495, 3, 22, 2, 24, 2, '2022-03-21', NULL, 1, '-', '600', '', '', 1, '', '', NULL, 1, '2022-03-21 13:34:31'),
(496, 3, 22, 2, 24, 1, '2022-03-21', NULL, 1, '-', '400', 'Online', '', 1, 'SuccessFully Payment', '', NULL, 1, '2022-03-21 13:34:31'),
(497, 3, 22, 2, 24, 4, '0000-00-00', '6', 0, '3', '0', '', '100', 1, '', '', 28, 2, '2022-03-22 14:37:23'),
(498, 3, 22, 2, 24, 4, '0000-00-00', '6', 0, '3', '0', '', '100', 1, '', '', 28, 2, '2022-03-22 14:37:23'),
(499, 3, 22, 2, 24, 8, '2022-03-24', '7', 1, '4', '200', '', '400', 1, '', '', 29, 2, '2022-03-22 14:39:16'),
(500, 8, 22, 2, 24, 6, '0000-00-00', '5', 0, '3', '1000', 'Cash', 'NA', 1, 'SuccessFully Payment', '', 30, 2, '2022-03-22 16:15:42'),
(501, 8, 22, 2, 24, 6, '0000-00-00', '7', 1, '3', '0', '', 'NA', 1, '', '', 30, 2, '2022-03-22 16:15:42'),
(502, 3, 22, 2, 23, 10, '0000-00-00', '17', 2, '5', '0', '', 'kbhjnk', 1, '', '', 31, 2, '2022-03-22 16:45:17'),
(503, 3, 22, 2, 23, 10, '0000-00-00', '16', 2, '5', '0', '', 'kbhjnk', 1, '', '', 31, 2, '2022-03-22 16:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `articulation_proforma`
--

CREATE TABLE `articulation_proforma` (
  `Id` int(11) NOT NULL,
  `Articulatory_errors_associated_with_structural_deficits` varchar(500) NOT NULL,
  `Self_Awareness_about_the_problem` varchar(500) NOT NULL,
  `Parent_Awareness_about_the_problem` varchar(500) NOT NULL,
  `Self_Reaction_to_the_problem` varchar(500) NOT NULL,
  `Parent_Reaction_to_the_problem` varchar(500) NOT NULL,
  `Self_Avoidance_Behaviour` varchar(500) NOT NULL,
  `Parent_Avoidance_Behaviour` varchar(500) NOT NULL,
  `Self_Articulation_Defect` varchar(500) NOT NULL,
  `Parent_Articulation_Defect` varchar(500) NOT NULL,
  `Rhyming` varchar(500) NOT NULL,
  `Blending` varchar(500) NOT NULL,
  `Syllabification_Segmentation` varchar(500) NOT NULL,
  `Consistancy_errors` varchar(500) NOT NULL,
  `Rate_Speech` varchar(500) NOT NULL,
  `Rate_Speech_Word` varchar(500) NOT NULL,
  `Intelligibility_Ratin_Scale` varchar(500) NOT NULL,
  `Auditory_Discrimination` varchar(500) NOT NULL,
  `Auditory` varchar(500) NOT NULL,
  `Audio_Visual` varchar(500) NOT NULL,
  `Audio_Visual_Graphic` varchar(500) NOT NULL,
  `Motokinesthetic` varchar(500) NOT NULL,
  `DDK_Rate` varchar(500) NOT NULL,
  `Phonological_Process_Error_Analysis` varchar(500) NOT NULL,
  `Recording_Date` date NOT NULL,
  `Reference_No` varchar(500) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  `Recommendations` varchar(500) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articulation_proforma`
--

INSERT INTO `articulation_proforma` (`Id`, `Articulatory_errors_associated_with_structural_deficits`, `Self_Awareness_about_the_problem`, `Parent_Awareness_about_the_problem`, `Self_Reaction_to_the_problem`, `Parent_Reaction_to_the_problem`, `Self_Avoidance_Behaviour`, `Parent_Avoidance_Behaviour`, `Self_Articulation_Defect`, `Parent_Articulation_Defect`, `Rhyming`, `Blending`, `Syllabification_Segmentation`, `Consistancy_errors`, `Rate_Speech`, `Rate_Speech_Word`, `Intelligibility_Ratin_Scale`, `Auditory_Discrimination`, `Auditory`, `Audio_Visual`, `Audio_Visual_Graphic`, `Motokinesthetic`, `DDK_Rate`, `Phonological_Process_Error_Analysis`, `Recording_Date`, `Reference_No`, `Remarks`, `Recommendations`, `FormId`, `CreatedOn`) VALUES
(1, 'wdecsfsdewesdfrwrfb frv                                                                                                ', '', '', 'wdesdes', 'jhbjh n', '', '', 'e3rwgtfh', 'rfegdtfvb', 'desdes', '', '', 'des', 'slow', 'odemskocx', '0', '', 'defddesc', '', 'qwdewfewds', '', '', '', '2022-01-13', 'edfvedfdedfdesdfvc', 'dewqds', 'wdewqds', 23, '2022-01-03 05:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `City` varchar(200) DEFAULT NULL,
  `Pin` int(11) DEFAULT NULL,
  `Is_Active` int(11) NOT NULL DEFAULT 1,
  `Contact_Name` varchar(100) DEFAULT NULL,
  `Contact_Mobile` varchar(100) DEFAULT NULL,
  `Contact_Email` varchar(200) DEFAULT NULL,
  `Contact_Designation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Id`, `Name`, `Address`, `City`, `Pin`, `Is_Active`, `Contact_Name`, `Contact_Mobile`, `Contact_Email`, `Contact_Designation`) VALUES
(1, 'SPees Early Intervention Centre', 'Near Seven Hills Signal, opp Nupur Mukta Talkies', 'AURANGABAD', 431001, 1, 'Shahed shaikh', 'Shahed870@gmail.com', '8446851130', 'Director'),
(2, 'Lambodar Speech & Hearing Clinic', 'Mehkar', 'Mehkar', 443301, 1, 'vinay', 'vinayspees3110@gmail.com', '9689891058', 'TRC MANAGER'),
(3, 'Saoji\'s Hospital', '', 'AURANGABAD', 431001, 1, 'Umesh', '1199umesh@gmail.com', '9325182292', 'TRC MANAGER');

-- --------------------------------------------------------

--
-- Table structure for table `case_history`
--

CREATE TABLE `case_history` (
  `Id` int(11) NOT NULL,
  `Convcern` varchar(1000) DEFAULT NULL,
  `Birth_History` varchar(1000) DEFAULT NULL,
  `Neck_Holding` varchar(1000) DEFAULT NULL,
  `Crawling` varchar(1000) DEFAULT NULL,
  `Walking` varchar(1000) DEFAULT NULL,
  `Speech` varchar(1000) DEFAULT NULL,
  `Sentence` varchar(1000) DEFAULT NULL,
  `Past_History` varchar(1000) DEFAULT NULL,
  `School_History` varchar(1000) DEFAULT NULL,
  `Present_Class` varchar(1000) DEFAULT NULL,
  `Observations` varchar(1000) DEFAULT NULL,
  `Plan` varchar(1000) DEFAULT NULL,
  `Recommendation` varchar(1000) DEFAULT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_history`
--

INSERT INTO `case_history` (`Id`, `Convcern`, `Birth_History`, `Neck_Holding`, `Crawling`, `Walking`, `Speech`, `Sentence`, `Past_History`, `School_History`, `Present_Class`, `Observations`, `Plan`, `Recommendation`, `FormId`, `CreatedOn`) VALUES
(1, 'Convcern :\r\nwdsfewdsfwdsc', 'Birth History :\r\n', 'Neck Holding :', 'Crawling :', 'Walking :', 'Speech :', 'Sentence :', 'Past History :\r\n', 'School History :\r\n', 'Present Class :', 'Observations :\r\n', 'Plan :desfdedsf\r\n', 'Recommendation :\r\n', 3, '2022-01-03 04:17:00'),
(2, 'k/c/o ankyloglossia', 'nil', '3months', '5months', '1 year', '1 not completed', '2 not completed', 'nil', 'nil', '5', 'obsevation demo', 'plan nil', 'detailed evaluation', 4, '2022-01-04 11:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Branch_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Id`, `Name`, `Branch_Id`) VALUES
(1, 'Audiology', 1),
(2, 'Physiotherapy', 1),
(3, 'Psychology', 1),
(4, 'Speech Language Pathology', 1),
(5, 'Audiology', 2),
(6, 'Audiology', 3),
(7, 'Audiology & Speech Language Pathology', 1),
(8, 'MUSIC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departmentformstrans`
--

CREATE TABLE `departmentformstrans` (
  `Id` int(11) NOT NULL,
  `FormsId` int(11) NOT NULL,
  `DepertmentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departmentformstrans`
--

INSERT INTO `departmentformstrans` (`Id`, `FormsId`, `DepertmentId`) VALUES
(1, 1, 4),
(2, 2, 4),
(3, 3, 4),
(4, 3, 1),
(5, 1, 1),
(6, 10, 1),
(7, 9, 1),
(8, 1, 4),
(9, 2, 4),
(10, 11, 4),
(11, 7, 4),
(12, 8, 4),
(13, 6, 4),
(14, 5, 4),
(15, 4, 4),
(16, 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `feeding_proforma`
--

CREATE TABLE `feeding_proforma` (
  `Id` int(11) NOT NULL,
  `Feeding_Concerns` varchar(100) NOT NULL,
  `Problem_Noticed_First` varchar(100) NOT NULL,
  `Nasal_Regurgitation` varchar(100) NOT NULL,
  `Pneumonia` varchar(100) NOT NULL,
  `Aspiration` varchar(100) NOT NULL,
  `Ear_Infection` varchar(100) NOT NULL,
  `URTI` varchar(100) NOT NULL,
  `Respiratory_Stridor` varchar(100) NOT NULL,
  `Wheezing` varchar(100) NOT NULL,
  `Asthma` varchar(100) NOT NULL,
  `Nasal_Chest_Congestion` varchar(100) NOT NULL,
  `Feeding_Milestones_1` varchar(100) NOT NULL,
  `Feeding_Milestones_2` varchar(100) NOT NULL,
  `Feeding_Milestones_3` varchar(100) NOT NULL,
  `Feeding_Milestones_4` varchar(100) NOT NULL,
  `Feeding_Milestones_5` varchar(100) NOT NULL,
  `Feeding_Milestones_6` varchar(100) NOT NULL,
  `Feeding_Milestones_7` varchar(100) NOT NULL,
  `Feeding_Milestones_8` varchar(100) NOT NULL,
  `Sensory_Issue_1` varchar(100) NOT NULL,
  `Sensory_Issue_2` varchar(100) NOT NULL,
  `Sensory_Issue_3` varchar(100) NOT NULL,
  `Sensory_Issue_4` varchar(100) NOT NULL,
  `Sensory_Issue_5` varchar(100) NOT NULL,
  `Sensory_Issue_6_Checked` varchar(100) NOT NULL,
  `Sensory_Issue_6` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_1` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_2` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_3` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_4` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_5` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_6` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_7` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_8` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_9` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_10` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_11` varchar(100) NOT NULL,
  `Meal_Time_Behaviour_Checklist_12` varchar(100) NOT NULL,
  `Opme_Lip_1` varchar(100) NOT NULL,
  `Opme_Lip_2` varchar(100) NOT NULL,
  `Opme_Lip_3` varchar(100) NOT NULL,
  `Opme_Jaw_1` varchar(100) NOT NULL,
  `Opme_Jaw_2` varchar(100) NOT NULL,
  `Opme_Jaw_3` varchar(100) NOT NULL,
  `Opme_Tongue_1` varchar(100) NOT NULL,
  `Opme_Tongue_2` varchar(100) NOT NULL,
  `Opme_Tongue_3` varchar(100) NOT NULL,
  `Oral_Cavity_1` varchar(100) NOT NULL,
  `Oral_Cavity_2` varchar(100) NOT NULL,
  `Poster_While_Feeding_1` varchar(100) NOT NULL,
  `Poster_While_Feeding_2` varchar(100) NOT NULL,
  `Dry_1` varchar(100) NOT NULL,
  `Dry_2` varchar(100) NOT NULL,
  `Dry_3` varchar(100) NOT NULL,
  `Dry_4` varchar(100) NOT NULL,
  `Dry_5` varchar(100) NOT NULL,
  `Dry_6` varchar(100) NOT NULL,
  `Dry_7` varchar(100) NOT NULL,
  `Semiliquid_1` varchar(100) NOT NULL,
  `Semiliquid_2` varchar(100) NOT NULL,
  `Semiliquid_3` varchar(100) NOT NULL,
  `Semiliquid_4` varchar(100) NOT NULL,
  `Semiliquid_5` varchar(100) NOT NULL,
  `Semiliquid_6` varchar(100) NOT NULL,
  `Semiliquid_7` varchar(100) NOT NULL,
  `Liquid_1` varchar(100) NOT NULL,
  `Liquid_2` varchar(100) NOT NULL,
  `Liquid_3` varchar(100) NOT NULL,
  `Liquid_4` varchar(100) NOT NULL,
  `Liquid_5` varchar(100) NOT NULL,
  `Liquid_6` varchar(100) NOT NULL,
  `Liquid_7` varchar(100) NOT NULL,
  `Solid_1` varchar(100) NOT NULL,
  `Solid_2` varchar(100) NOT NULL,
  `Solid_3` varchar(100) NOT NULL,
  `Solid_4` varchar(100) NOT NULL,
  `Solid_5` varchar(100) NOT NULL,
  `Solid_6` varchar(100) NOT NULL,
  `Solid_7` varchar(100) NOT NULL,
  `Tube_Feeding_Info_1` varchar(100) NOT NULL,
  `Tube_Feeding_Info_2` varchar(100) NOT NULL,
  `Tube_Feeding_Info_3` varchar(100) NOT NULL,
  `Tube_Feeding_Info_4` varchar(100) NOT NULL,
  `Tube_Feeding_Info_5` varchar(100) NOT NULL,
  `Tube_Feeding_Shedule_1` varchar(100) NOT NULL,
  `Tube_Feeding_Shedule_2` varchar(100) NOT NULL,
  `Nutrition_1` varchar(100) NOT NULL,
  `Nutrition_2` varchar(100) NOT NULL,
  `Nutrition_3` varchar(200) NOT NULL,
  `Remarks` varchar(100) NOT NULL,
  `Recommendations` varchar(100) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feeding_proforma`
--

INSERT INTO `feeding_proforma` (`Id`, `Feeding_Concerns`, `Problem_Noticed_First`, `Nasal_Regurgitation`, `Pneumonia`, `Aspiration`, `Ear_Infection`, `URTI`, `Respiratory_Stridor`, `Wheezing`, `Asthma`, `Nasal_Chest_Congestion`, `Feeding_Milestones_1`, `Feeding_Milestones_2`, `Feeding_Milestones_3`, `Feeding_Milestones_4`, `Feeding_Milestones_5`, `Feeding_Milestones_6`, `Feeding_Milestones_7`, `Feeding_Milestones_8`, `Sensory_Issue_1`, `Sensory_Issue_2`, `Sensory_Issue_3`, `Sensory_Issue_4`, `Sensory_Issue_5`, `Sensory_Issue_6_Checked`, `Sensory_Issue_6`, `Meal_Time_Behaviour_Checklist_1`, `Meal_Time_Behaviour_Checklist_2`, `Meal_Time_Behaviour_Checklist_3`, `Meal_Time_Behaviour_Checklist_4`, `Meal_Time_Behaviour_Checklist_5`, `Meal_Time_Behaviour_Checklist_6`, `Meal_Time_Behaviour_Checklist_7`, `Meal_Time_Behaviour_Checklist_8`, `Meal_Time_Behaviour_Checklist_9`, `Meal_Time_Behaviour_Checklist_10`, `Meal_Time_Behaviour_Checklist_11`, `Meal_Time_Behaviour_Checklist_12`, `Opme_Lip_1`, `Opme_Lip_2`, `Opme_Lip_3`, `Opme_Jaw_1`, `Opme_Jaw_2`, `Opme_Jaw_3`, `Opme_Tongue_1`, `Opme_Tongue_2`, `Opme_Tongue_3`, `Oral_Cavity_1`, `Oral_Cavity_2`, `Poster_While_Feeding_1`, `Poster_While_Feeding_2`, `Dry_1`, `Dry_2`, `Dry_3`, `Dry_4`, `Dry_5`, `Dry_6`, `Dry_7`, `Semiliquid_1`, `Semiliquid_2`, `Semiliquid_3`, `Semiliquid_4`, `Semiliquid_5`, `Semiliquid_6`, `Semiliquid_7`, `Liquid_1`, `Liquid_2`, `Liquid_3`, `Liquid_4`, `Liquid_5`, `Liquid_6`, `Liquid_7`, `Solid_1`, `Solid_2`, `Solid_3`, `Solid_4`, `Solid_5`, `Solid_6`, `Solid_7`, `Tube_Feeding_Info_1`, `Tube_Feeding_Info_2`, `Tube_Feeding_Info_3`, `Tube_Feeding_Info_4`, `Tube_Feeding_Info_5`, `Tube_Feeding_Shedule_1`, `Tube_Feeding_Shedule_2`, `Nutrition_1`, `Nutrition_2`, `Nutrition_3`, `Remarks`, `Recommendations`, `FormId`, `CreatedOn`) VALUES
(2, 'klj', 'ml;;', 'Absent', 'Absent', 'Present', 'Present', 'Absent', 'Present', 'Absent', 'Present', 'Present', '', 'jn', 'l;mkn', 'kl;mkn ', 'l;kj', 'l;kj', 'n kl;km', 'n l;k', 'n bnkl', 'mn l,;', 'n bl', 'kn bl;', 'mn ', 'Present', 'l,;n n', 'l;mn ', 'l;,n ', 'nl;,', 'klml', 'km', 'nkm', 'bk', 'mj', 'kk;lj', 'l;jn', 'klmnn', 'kjnn', 'kj', 'kmn', 'kj', ';', 'Inadequate', 'mkjn', 'kjn', 'k', 'jn', 'knj', 'k', 'jnb', 'k', 'km', 'lkjn', 'kmjn', 'nkm', 'bkml', 'kmj', 'nkm', 'jnhkml', 'j', 'klmjhgfg', 'hjklkit', 'hjk', 'f', 'hjmkknbgv', 'c vbhnjki', 'hbgvhjmkp', 'ijgvfgh', 'mkpkbvf', 'ghjmk,lkmn', 'bgvmk,l', 'knbgg', 'hjoiijbgg', 'jnihbg', 'vfghnjni', 'gvfhj', 'mnfg', 'hjbvf', 'ghjmjo', 'vfghnjn', 'bgvfghj', 'mobgvf', 'hjnbg', 'hjmnbgvf', 'hjnhbg', 'vfghnjni', 'gvghj', 'nhbgvhj', 'hgvgjihbjbhjkikn', 'kojihugfvhjkl;lpkoihygf', 'jmkojiygtdrsfhui2134567890-908765', 37, '2022-01-06 03:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `formsmaster`
--

CREATE TABLE `formsmaster` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Preview` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formsmaster`
--

INSERT INTO `formsmaster` (`Id`, `Name`, `Preview`) VALUES
(1, 'Speech Progress Report', 'SPEECH- Progress Report'),
(2, 'Speech Lesson Plan', 'SPEECH- Lesson Plan'),
(3, 'Case History', 'Case History sample'),
(4, 'Aphasia & other neuro disorder-poforma', 'Aphasia & other neuro disorder-poforma'),
(5, 'Articulation Proforma', 'Articulation Proforma'),
(6, 'Stuttering Proforma', 'Stuttering Proforma'),
(7, 'Speech Pre-Therapy', 'SPEECH- Pre-Therapy'),
(8, 'Feeding Proforma', 'Feeding Proforma'),
(9, 'Audio Case History Adult', 'AUDIO Case History Adult'),
(10, 'Audio Case History Pediatrics', 'AUDIO Case History Pediatrics'),
(11, 'Speech Case History', 'SPEECH CASE HISTORY'),
(12, 'Sample report MISIC', 'Sample report MISIC - Copy'),
(13, 'Sample report Report VABS - Copy', 'Sample report Report VABS - Copy');

-- --------------------------------------------------------

--
-- Table structure for table `formsrecords`
--

CREATE TABLE `formsrecords` (
  `Id` int(11) NOT NULL,
  `FormId` int(11) DEFAULT NULL,
  `PatientId` int(11) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Occupation` varchar(200) DEFAULT NULL,
  `Mobile` varchar(200) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Reffered_By` varchar(200) DEFAULT NULL,
  `Informant` varchar(200) NOT NULL,
  `Relation_With_Patient` varchar(200) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Clinician` varchar(200) DEFAULT NULL,
  `ProvisionalDiagnosis` varchar(200) DEFAULT NULL,
  `NumberOfWeeksSession` varchar(200) DEFAULT NULL,
  `Languages_Known` varchar(200) DEFAULT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `formsrecords`
--

INSERT INTO `formsrecords` (`Id`, `FormId`, `PatientId`, `PatientName`, `Age`, `Gender`, `Address`, `Occupation`, `Mobile`, `DOB`, `Reffered_By`, `Informant`, `Relation_With_Patient`, `Date`, `Time`, `Clinician`, `ProvisionalDiagnosis`, `NumberOfWeeksSession`, `Languages_Known`, `CreatedOn`) VALUES
(1, 1, 1, 'SIRAJ DEMO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, 'Dr Rakesh Kumar', 'NEW', '8', '', '2022-01-02 02:17:01'),
(15, 2, 1, 'SIRAJ DEMO', 25, 'Male', NULL, NULL, NULL, NULL, NULL, '', '', '2022-01-13', NULL, 'Dr Rakesh Kumar', 'ok', '8', '', '2022-01-02 06:49:28'),
(16, 3, 1, 'SIRAJ DEMO', 25, NULL, 'Pune CIty', NULL, NULL, '2022-01-14', 'Rohit', '', '', '2022-01-02', NULL, NULL, NULL, NULL, '', '2022-01-02 09:04:28'),
(17, 3, 47, 'KHIZAR KHAN', 5, NULL, 'N-3 CIDCO', NULL, NULL, '2022-01-21', 'desfc', '', '', '2022-01-05', NULL, NULL, NULL, NULL, '', '2022-01-02 10:30:30'),
(19, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'frdfg', NULL, '', '2022-01-03 03:38:06'),
(20, 4, 47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, 'frgfbhtgregtfh', NULL, '', '2022-01-03 04:05:53'),
(23, 5, 1, 'SIRAJ DEMO', 25, 'Male', NULL, NULL, NULL, NULL, NULL, '', '', '2022-01-01', NULL, NULL, 'wdsf', NULL, '', '2022-01-06 02:05:22'),
(28, 6, 1, 'SIRAJ DEMO', 25, 'Male', NULL, NULL, NULL, NULL, NULL, '', '', '2022-01-11', NULL, NULL, 'hjkol', NULL, '', '2022-01-04 02:30:45'),
(37, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-05 03:33:19'),
(38, 9, 1, 'SIRAJ DEMO', 25, 'Male', NULL, 'kjhbgvfgcvhbjnkm', NULL, NULL, 'IIIIIIIIIIIIII', '', '', '2022-01-07', '19:00:00', NULL, NULL, NULL, NULL, '2022-01-05 09:14:34'),
(48, 10, 1, 'SIRAJ DEMO', 25, 'Male', NULL, NULL, NULL, NULL, 'ihbjiojkn', 'kmjhbgjk', '', '2022-01-19', '12:35:00', NULL, NULL, NULL, NULL, '2022-01-06 01:59:34'),
(49, 11, 1, 'SIRAJ DEMO', 25, 'Male', NULL, NULL, '998877667788', NULL, NULL, 'jko', 'ijhgh', '2022-01-07', '17:20:00', NULL, 'jmkjnhb', NULL, 'hbj', '2022-01-06 06:31:14'),
(50, 11, 53, 'ANIRUDH BAHURE', 6, 'Male', NULL, NULL, '9652354422', NULL, NULL, 'SUMAIYYA', 'MOTHER', '2022-02-01', '14:00:00', NULL, '-', NULL, 'HINDI', '2022-02-01 09:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `Id` int(11) NOT NULL,
  `Branch_Id` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Total_Qty` int(11) NOT NULL,
  `Total_Total` int(11) NOT NULL,
  `Total_Discount` int(11) NOT NULL,
  `Total_Final_Amount` int(11) NOT NULL,
  `Created_At` datetime NOT NULL DEFAULT current_timestamp(),
  `Updated_At` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Id`, `Branch_Id`, `Patient_Id`, `Total_Qty`, `Total_Total`, `Total_Discount`, `Total_Final_Amount`, `Created_At`, `Updated_At`) VALUES
(1, 0, 1, 4, 207970, 15, 188914, '2022-03-23 13:32:39', '2022-03-23 13:32:39'),
(2, 1, 4, 1, 34810, 0, 34810, '2022-03-23 14:10:09', '2022-03-23 14:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_items`
--

CREATE TABLE `invoice_items` (
  `Id` int(11) NOT NULL,
  `Invoice_Id` int(11) DEFAULT NULL,
  `Item_Id` int(11) DEFAULT NULL,
  `MRP` int(11) DEFAULT NULL,
  `Qty` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL,
  `Final_Amount` int(11) DEFAULT NULL,
  `Created_At` datetime NOT NULL DEFAULT current_timestamp(),
  `Updated_At` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Item_Name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_items`
--

INSERT INTO `invoice_items` (`Id`, `Invoice_Id`, `Item_Id`, `MRP`, `Qty`, `Total`, `Discount`, `Final_Amount`, `Created_At`, `Updated_At`, `Item_Name`) VALUES
(1, 1, 3, 29500, 1, 34810, 5, 33070, '2022-03-23 13:32:39', '2022-03-23 13:32:39', 'verto'),
(2, 1, 2, 52000, 3, 173160, 10, 155844, '2022-03-23 13:32:39', '2022-03-23 13:32:39', 'audio M'),
(3, 2, 3, 29500, 1, 34810, 0, 34810, '2022-03-23 14:10:09', '2022-03-23 14:10:09', 'verto');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_Id` int(11) NOT NULL,
  `Item_Code` varchar(100) NOT NULL,
  `Item_Name` varchar(200) NOT NULL,
  `Description` text NOT NULL,
  `Item_Company` text NOT NULL,
  `Item_Model` text NOT NULL,
  `Sale_Rate` double NOT NULL,
  `MRP` double NOT NULL,
  `Available_Stock` int(11) DEFAULT NULL,
  `Min_Stock` int(11) NOT NULL,
  `Max_Stock` int(11) NOT NULL,
  `GST_Applicable` varchar(11) NOT NULL DEFAULT 'No',
  `GST` int(11) NOT NULL,
  `Category` varchar(200) NOT NULL,
  `Platform` varchar(200) NOT NULL,
  `Serial_Number` varchar(200) NOT NULL,
  `Supplier_Selection` int(11) NOT NULL,
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_Id`, `Item_Code`, `Item_Name`, `Description`, `Item_Company`, `Item_Model`, `Sale_Rate`, `MRP`, `Available_Stock`, `Min_Stock`, `Max_Stock`, `GST_Applicable`, `GST`, `Category`, `Platform`, `Serial_Number`, `Supplier_Selection`, `Created_On`) VALUES
(1, '006', 'audio M', 'new stock', 'phonak india pvt ltd', '', 50000, 52000, 0, 4, 20, 'Yes', 10, 'hearing aids', 'paradise', '987654321', 1, '2022-02-26 18:57:30'),
(2, '006', 'audio M', '', 'phonak india pvt ltd', '', 50000, 52000, 0, 4, 20, 'Yes', 11, 'hearing aids', 'paradise', '123456789', 1, '2022-02-26 19:10:34'),
(3, '006', 'verto', '', 'phonak india pvt ltd', '', 28000, 29500, 2, 4, 20, 'Yes', 18, 'hearing aids', 'belong', '0000000', 1, '2022-02-26 19:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `language_history`
--

CREATE TABLE `language_history` (
  `Id` int(11) NOT NULL,
  `Language_Known` varchar(1000) NOT NULL,
  `Pre_Comprehend` varchar(1000) NOT NULL,
  `Pre_Speak` varchar(1000) NOT NULL,
  `Pre_Read` varchar(1000) NOT NULL,
  `Pre_Write` varchar(1000) NOT NULL,
  `Post_Comprehend` varchar(1000) NOT NULL,
  `Post_Speak` varchar(1000) NOT NULL,
  `Post_Read` varchar(1000) NOT NULL,
  `Post_Write` varchar(1000) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language_history`
--

INSERT INTO `language_history` (`Id`, `Language_Known`, `Pre_Comprehend`, `Pre_Speak`, `Pre_Read`, `Pre_Write`, `Post_Comprehend`, `Post_Speak`, `Post_Read`, `Post_Write`, `FormId`, `CreatedOn`) VALUES
(1, 'uhijkm', 'yguhjmkl', 'yguhjimkol', 'gybhnjmk,l', 'ygvbhnjmk,l', 'ygbhnjmkolp', 'vgbhnjmko,lp', 'yguhnjmko', 'lygvbhnjik', 19, '2022-01-03 03:38:06'),
(2, 'ubhjnk', 'hjnkmlj', 'hihjbhuj', 'ijojkh', 'njmknkkn', 'nknk', 'nnkj', 'njknjk', 'nkjnk', 19, '2022-01-03 04:02:51'),
(3, 'hjnkml', 'bhjnkml,;', 'hbbjnkml,;', 'hbjnkml', ',;hbjnkm', 'l,;hjnkm', 'ljnmkl', 'hnjkml,', 'bhjnkml', 20, '2022-01-03 04:05:53'),
(4, 'erdgtfefdg', 'jbhnkml', 'ugyhjio', 'kubhjn', 'mkluhbjn', 'kmliu', 'jkuh', 'jiki', 'jnkml', 20, '2022-01-03 04:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Near_Branch` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Remark` text NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Follow_Date` date DEFAULT NULL,
  `Follow_Time` time DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 0 COMMENT '0 New\r\n1 Counselled\r\n2 Visiting HQ\r\n3 Visiting Branch\r\n4 Postponed\r\n5 Followup\r\n6 Unable to Counselled\r\n7 Escalate',
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`Id`, `Name`, `Mobile`, `Email`, `City`, `Near_Branch`, `Date`, `Remark`, `User_Id`, `Follow_Date`, `Follow_Time`, `Status`, `Created_On`) VALUES
(1, 'SIRAJ P', '8086506071', 'sirajpchalil@gmail.com', '', '', '0000-00-00', '', 0, NULL, NULL, 0, '2021-12-30 13:34:58'),
(2, 'SIRAJ P', '', 'sirajpchalil@gmail.com', '', '', '0000-00-00', 'DEMO', 0, NULL, NULL, 0, '2021-12-30 18:01:49'),
(3, 'SIRAJ P', '', 'sirajpchalil@gmail.com', '', '', '0000-00-00', 'demo', 0, NULL, NULL, 0, '2021-12-30 19:05:02'),
(4, 'jagdish pandhare', '', 'jagdishpandhare678@gmail.com', '', '', '0000-00-00', '', 0, NULL, NULL, 0, '2022-01-05 08:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `leave_trans`
--

CREATE TABLE `leave_trans` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Reason` text NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 2 COMMENT '0: Rejected\r\n1: Granted\r\n2: Pending\r\n3: Cancelled',
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Id` int(11) NOT NULL,
  `Branch_Id` int(11) NOT NULL,
  `Prefix` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Profile_Image` varchar(100) NOT NULL DEFAULT 'user.png',
  `Age` int(11) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Occupation` varchar(15) DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Alternate_Mobile` varchar(15) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Aadhar` varchar(15) NOT NULL,
  `Pan` varchar(15) DEFAULT NULL,
  `Marriage_Status` varchar(100) DEFAULT NULL,
  `DOA` varchar(100) DEFAULT NULL,
  `Father_Name` varchar(100) DEFAULT NULL,
  `Father_Education` varchar(100) DEFAULT NULL,
  `Father_Occupation` varchar(100) DEFAULT NULL,
  `Mother_Name` varchar(100) DEFAULT NULL,
  `Income` varchar(200) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `District` varchar(100) DEFAULT NULL,
  `Taluka` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Pin` int(11) DEFAULT NULL,
  `Reffered_By` varchar(100) DEFAULT NULL,
  `Reffered_To` varchar(100) DEFAULT NULL,
  `Language` varchar(100) DEFAULT NULL,
  `Source` varchar(100) DEFAULT NULL,
  `Telecaller_Id` int(11) DEFAULT NULL,
  `Is_Active` int(11) NOT NULL DEFAULT 1,
  `Created_By` int(11) NOT NULL,
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Id`, `Branch_Id`, `Prefix`, `Name`, `Profile_Image`, `Age`, `Gender`, `DOB`, `Occupation`, `Mobile`, `Alternate_Mobile`, `Email`, `Aadhar`, `Pan`, `Marriage_Status`, `DOA`, `Father_Name`, `Father_Education`, `Father_Occupation`, `Mother_Name`, `Income`, `Address`, `District`, `Taluka`, `State`, `Pin`, `Reffered_By`, `Reffered_To`, `Language`, `Source`, `Telecaller_Id`, `Is_Active`, `Created_By`, `Created_On`) VALUES
(1, 2, 'Mr', 'SIRAJ DEMO', 'user.png', 25, 'Male', '0000-00-00', 'AUDIOLOGIST', '1234567891', NULL, '', '', NULL, 'Single', '', 'EFG', 'NIL', 'FARMER', 'ABC', 'Less than 1 Lakh', '', 'AURANGABAD', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 0, 25, '2021-10-08 05:11:55'),
(2, 2, 'Mr', 'SIRAJ DEMO', 'user.png', 25, 'Male', '0000-00-00', 'NIL', '123456789', NULL, '', '', NULL, 'Single', '', 'ABC', 'FARMER', 'BCX', 'ABCD', 'Less than 1 Lakh', '', 'AURANGABAD', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Google', NULL, 1, 25, '2021-10-08 05:14:28'),
(3, 2, 'Mr', 'ANIRUDHA DHAVTEKAR', 'user.png', 12, 'Male', '0000-00-00', 'STUDENT', '9822733012', NULL, 'VIN32@GMAIL.COM', '12345', NULL, 'Single', '', 'RAMESHWAR', 'FARMER', 'FARMER', 'YASHODA', 'Less than 1 Lakh', 'PARTAPUR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 443301, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-08 05:57:33'),
(4, 1, 'Mr', 'ANKUSH LOKHANDE', 'user.png', 35, 'Male', '0000-00-00', 'FARMING', '9049120039', NULL, 'ANKU@8', '1234567892549', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'CHIKLI', 'JALNA', 'AMBAD', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-09 05:09:23'),
(5, 1, 'Mr', 'R.M KALE', 'user.png', 75, 'Male', '0000-00-00', 'RETIRED', '9767401319', NULL, 'R.MKALE@3', '123456789115234', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SENDURWADI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-09 05:14:26'),
(6, 1, 'Mr', 'ANANDRAO JAISWAL', 'user.png', 55, 'Male', '0000-00-00', 'RETIRED', '9665116575', NULL, 'ANAND@75', '85946284246255', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SILLOD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-09 05:19:46'),
(7, 1, 'Mr', 'AZIZ KHAN', 'user.png', 68, 'Male', '0000-00-00', 'LABOUR', '9960315449', NULL, 'AZIZ@78', '4468765016861', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JALNA', 'JALNA', 'JALNA', 'MAHARAHTRA', 431203, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-09 05:23:07'),
(8, 1, 'Mr', 'DYANESHWAR KHARDE', 'user.png', 54, 'Male', '0000-00-00', 'RETIRED', '9422212548', NULL, 'DYANESHWAR@52', '485939861819689', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'CIDCO', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', NULL, NULL, 1, 22, '2021-10-09 05:25:30'),
(9, 1, 'Mr', 'SULEMAN SHAIKH', 'user.png', 4, NULL, '0000-00-00', 'SHOPKEEPER', '9860969368', NULL, 'SULEMAN@78', '485961302211513', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'HARSUL', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-09 05:35:14'),
(10, 1, 'Mr', 'UMAR SHAIKH', 'user.png', 8, 'Male', '0000-00-00', 'SHOPKEEPER', '9860969368', NULL, 'UMAR@5', '12354569997992', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'HARSUL', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', NULL, NULL, 1, 22, '2021-10-09 05:39:36'),
(11, 1, 'Miss', 'APURVA PHULWARE', 'user.png', 15, 'Female', '0000-00-00', 'SERVICE MAN', '9422996933', NULL, 'APU@23', '85964859652348', NULL, 'Single', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, '', NULL, NULL, 1, 22, '2021-10-09 05:42:42'),
(12, 1, 'Mr', 'SAKIB SHAIKH', 'user.png', 9, 'Male', '0000-00-00', 'FARMING', '9021211114', NULL, 'SAKI@95', '1464', NULL, 'Single', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JALNA', 'JALNA', 'JALNA', 'MAHARAHTRA', 431203, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-09 05:48:54'),
(13, 1, 'Miss', 'LUBNA SHAIKH', 'user.png', 20, 'Female', '0000-00-00', 'STUDENT', '9823205091', NULL, 'LUBNA@85', '6461496461644', NULL, 'Single', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BAIJIPURA', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', 'Other', NULL, 1, 22, '2021-10-09 05:51:09'),
(14, 1, 'Mr', 'BILAL QUADARI', 'user.png', 4, 'Male', '0000-00-00', 'JOB', '8087070071', NULL, 'BILAL@5', '4564132168461', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-09 05:56:26'),
(15, 1, 'Mrs', 'PARVEEN QUADARI', 'user.png', 35, 'Female', '0000-00-00', 'HOUSEWIFE', '9168065070', NULL, 'PARVI@2', '5525525484646', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', 'Other', NULL, 1, 22, '2021-10-09 05:59:19'),
(16, 2, 'Mrs', 'LAXMI PATOLE', 'user.png', 45, 'Female', '0000-00-00', 'HOUSEWIFE', '9767931098', NULL, '', '', NULL, 'Married', '', 'EFG', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'BIBI', 'BULDHANA', '', 'MAHARASHTRA', 443301, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-09 06:22:56'),
(17, 1, 'Mr', 'KANTA BURKAL', 'user.png', 56, 'Male', '0000-00-00', 'RETIRED', '7709908434', NULL, 'KANTA@45', '646316846125', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BHULDHANA', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', 'Other', NULL, 1, 22, '2021-10-09 06:48:17'),
(18, 1, 'Mr', 'RISHANSH TRIBHUVAN', 'user.png', 3, 'Male', '0000-00-00', 'JOB', '7385708895', NULL, 'RISHANSH@4', '54451587456165', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'HUDCO', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-09 06:49:36'),
(19, 1, 'Mr', 'VIRAJ JANDHALE', 'user.png', 5, 'Male', '0000-00-00', 'BUSINESS', '8485069592', NULL, 'VIRAJ@7', '5465146', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JAWAHAR COLONY', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-09 07:40:42'),
(20, 1, 'Miss', 'PRAPTI MODI', 'user.png', 3, NULL, '0000-00-00', 'DOCTOR', '7020687003', NULL, 'PRAPTI@3', '56843465413469', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JALNA', 'JALNA', 'JALNA', 'MAHARAHTRA', 431203, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-09 07:42:41'),
(21, 1, 'Mrs', 'LAXMIBAI BANKAR', 'user.png', 55, 'Female', '0000-00-00', 'HOUSEWIFE', '9767184453', NULL, 'LAXMI@1', '54536468635149', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SHAHBAJAR', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 0, 22, '2021-10-09 07:49:05'),
(22, 1, 'Mr', 'DHYANESHWAR KHARDE', 'user.png', 54, 'Male', '0000-00-00', 'RETIRED', '9422212548', NULL, 'DHYNESHWAR@5', '584654698654', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'CIDCO', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-09 07:50:45'),
(23, 1, 'Mr', 'ABU BAKR ', 'user.png', 6, 'Male', '0000-00-00', 'BUSINESS', '9970277924', NULL, 'Abu@54', '5468796469764', NULL, NULL, '', '-', '-', 'business', '-', 'Less than 1 Lakh', 'JALNA', 'JALNA', 'jalna', 'MAHARAHTRA', 431203, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-09 07:55:45'),
(24, 1, 'Mrs', 'TANU PRIYA AJAY PRASAD', 'user.png', 27, 'Female', '0000-00-00', 'HOUSEWIFE', '8779837126', NULL, 'TANU@7', '564316843516461', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'PAITHAN', '', '', 'MAHARAHTRA', 0, NULL, NULL, '', NULL, NULL, 1, 22, '2021-10-09 09:52:42'),
(25, 1, 'Mr', 'ISHAN WARMA', 'user.png', 4, 'Male', '0000-00-00', 'BUSINESS', '9822331777', NULL, 'ISHAN@5', '541684316413164', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-09 09:54:02'),
(26, 1, 'Mrs', 'BHAGUBAI RAJBUNDE', 'user.png', 55, 'Female', '0000-00-00', 'HOUSEWIFE', '8275520141', NULL, 'BHAGU@2', '546943686698', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JAWALA', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 05:03:38'),
(27, 1, 'Mrs', 'PUSHPA GUNJAWALE', 'user.png', 60, 'Female', '0000-00-00', 'RETIRED', '8975903917', NULL, 'PUSHPA@5', '68465196651', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JINTUR', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', NULL, NULL, 1, 22, '2021-10-11 05:10:33'),
(28, 1, 'Mr', 'PAWAN PALASIKAR', 'user.png', 25, 'Male', '0000-00-00', 'FARMING', '9823094207', NULL, 'PAWAN@5', '546384764646', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'PALSI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 05:29:42'),
(29, 1, 'Mr', 'SHAIKH MEHBOOB', 'user.png', 40, 'Male', '0000-00-00', 'SHOPKEEPER', '9545965555', NULL, 'MEHBOOB@4', '56768467975', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BEED', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 05:36:43'),
(30, 1, 'Mr', 'SUMIT VAIKAS', 'user.png', 20, 'Male', '0000-00-00', 'ARCHITECTURE', '8411913972', NULL, 'SUMIT@7', '69465496846541', NULL, 'Single', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'CANNOT', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI, ENGLISH AND MARATHI', 'Other', NULL, 1, 22, '2021-10-11 05:49:53'),
(31, 1, 'Mrs', 'SALMA CHOUS', 'user.png', 70, 'Female', '0000-00-00', 'RETIRED', '', NULL, 'SALMA@8', '5498465464651', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ROSHAN GATE', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 05:51:04'),
(32, 1, 'Mr', 'JAMEER PATHAN', 'user.png', 34, 'Male', '0000-00-00', '-', '9921786633', NULL, 'JAMEER@7', '5687651697456', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SATARA', '-', '-', '-', 0, NULL, NULL, 'HINDI, ENGLISH AND MARATHI', 'Other', NULL, 1, 22, '2021-10-11 05:56:24'),
(33, 1, 'Mrs', 'NEHA CHANDAK', 'user.png', 27, 'Female', '0000-00-00', 'JOB', '8275521173', NULL, 'NEHA@4', '96861695461694', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'GARKHEDA', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 06:07:44'),
(34, 1, 'Mr', 'GANDHARV JAVAKAR', 'user.png', 3, 'Male', '0000-00-00', 'SERVICE', '7276725307', NULL, 'GANDHARV@78', '892164346464', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'PAHADI CORNER', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-11 06:11:20'),
(35, 2, 'Mr', 'HARSHAL DESHMUKH', 'user.png', 23, 'Male', '0000-00-00', 'STUDENT', '123456789', NULL, '', '', NULL, NULL, '', 'aaaa', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'ANDHRUD', 'BULDHANA', '', 'MAHARASHTRA', 443301, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-11 06:43:14'),
(36, 1, 'Mr', 'RAM DASHRAT', 'user.png', 5, 'Male', '0000-00-00', 'FARMING', '9049777145', NULL, 'RAM@7', '54684546846546', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'PARBHANI', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-11 06:50:45'),
(37, 1, 'Mrs', 'SAFIYA BEG', 'user.png', 62, 'Male', '0000-00-00', 'RETIRED', '9975236354', NULL, 'SAFIYA@7', '5878461586164', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SHRIRAMPUR', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 06:53:03'),
(38, 1, 'Mr', 'RAMCHANDRA CHAVHAN', 'user.png', 33, 'Male', '0000-00-00', 'DRIVER', '8010987894', NULL, '', '', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'PANGRA DOLE', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 0, 25, '2021-10-11 07:34:56'),
(39, 1, 'Mr', 'LAXMAN MHASKE', 'user.png', 70, 'Male', '0000-00-00', 'RETIRED', '9405798245', NULL, 'LAXMAN@7', '5746854687654', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JALNA', 'JALNA', 'JALNA', 'MAHARAHTRA', 431203, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 07:52:08'),
(40, 1, 'Mr', 'BABARAO TATE', 'user.png', 63, 'Male', '0000-00-00', 'FARMING', '9767509703', NULL, 'BABARAO@3', '567465168743561', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'lonar', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Call', NULL, 1, 22, '2021-10-11 07:56:02'),
(41, 1, 'Mr', 'MANOJ BAKLIWAL', 'user.png', 48, 'Male', '0000-00-00', 'BUSINESS', '9422206760', NULL, 'MANOJ@7', '574846514846351', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BHAGYANAGAR', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 08:01:01'),
(42, 1, 'Mrs', 'LILABAI SONALKAR', 'user.png', 55, 'Female', '0000-00-00', 'HOUSEWIFE', '1234567890', NULL, '', '', NULL, 'Married', '', 'EFG', 'FARMER', 'BCX', 'YASHODA', 'Less than 1 Lakh', 'SHENLA', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-11 08:35:37'),
(43, 2, 'Mrs', 'LILABAI SONALKAR', 'user.png', 55, 'Female', '0000-00-00', 'HOUSEWIFE', '1234567890', NULL, '', '', NULL, 'Married', '', 'ABC', 'NIL', 'BCX', 'ABC', 'Less than 1 Lakh', 'SHENLA', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 443301, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-11 09:02:20'),
(44, 1, 'Mrs', 'AKSA ANSARI', 'user.png', 6, 'Female', '0000-00-00', '-', '9890523035', NULL, 'AKSA@4', '6584651686546', NULL, 'Other', '', '-', '-', '-', '-', '-', 'BABAR COLONY', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-11 10:50:25'),
(45, 1, 'Mr', 'NOMAN KHAN', 'user.png', 4, 'Male', '0000-00-00', 'SERVICE MAN', '9920281698', NULL, 'NOMAN@4', '657465187465165', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-11 10:54:10'),
(46, 1, 'Mr', 'ASHAR KHAN', 'user.png', 5, 'Male', '0000-00-00', 'DOCTOR', '9823199479', NULL, 'ASHAR@8', '684316843613654', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'N-3 CIDCO', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI, ENGLISH', 'Other', NULL, 1, 22, '2021-10-11 10:56:10'),
(47, 1, 'Mr', 'KHIZAR KHAN', 'user.png', 5, 'Male', '0000-00-00', 'DOCTOR', '9823199479', NULL, 'KHIZAR@7', '56768468765416', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'N-3 CIDCO', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI, ENGLISH', 'Other', NULL, 1, 22, '2021-10-11 11:09:09'),
(48, 1, 'Mrs', 'YASHMITA MELGAVE', 'user.png', 4, 'Female', '0000-00-00', '-', '9404128550', NULL, 'YASHU@5', '468435498456476', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'HUDCO', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 11:11:52'),
(49, 1, 'Mr', 'ARHAAN SHAIKH', 'user.png', 4, 'Male', '0000-00-00', 'ONLINE', '7057002014', NULL, 'ARHAAN@3', '248643514686516', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', NULL, NULL, 1, 22, '2021-10-11 11:13:35'),
(50, 1, 'Mr', 'VEDANT GHOGRE', 'user.png', 7, 'Male', '0000-00-00', 'LECTURER', '9730463715', NULL, 'VEDANT@3', '546413746413657', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 11:17:57'),
(51, 1, 'Mr', 'DHAIRYA GAIKWAD', 'user.png', 4, 'Male', '0000-00-00', '-', '9404676078', NULL, 'DHAIRYA@6', '574984654986549', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-11 11:21:47'),
(52, 1, 'Mr', 'DEEPESH TAKE', 'user.png', 7, NULL, '0000-00-00', 'BUSINESS', '9158730073', NULL, 'DEEPSH@8', '546549684635146', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'LASUR', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', NULL, NULL, 1, 22, '2021-10-11 11:23:40'),
(53, 1, 'Mr', 'ANIRUDH BAHURE', 'user.png', 6, 'Male', '0000-00-00', 'SERVICE MAN', '9765233300', NULL, 'ANIRUSH@8', '56789656646887', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'MAYUR PARK', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 11:27:47'),
(54, 1, 'Mr', 'SANJAY DESHMUKH', 'user.png', 37, 'Male', '0000-00-00', '-', '9823194594', NULL, 'SANJAY@7', '257468513546513', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', 'Other', NULL, 1, 22, '2021-10-11 12:37:54'),
(55, 1, 'Miss', 'NIARA  TAYDE', 'user.png', 7, 'Female', '0000-00-00', '-', '9766500444', NULL, 'NIARA@8', '257654657658', NULL, 'Other', '', '-', '-', '-MANAGER ( CANCER DEPARTMENT)', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI, ENGLISH', 'Other', NULL, 1, 22, '2021-10-11 12:40:17'),
(56, 1, 'Mrs', 'MEENAJ SHAIKH', 'user.png', 25, 'Female', '0000-00-00', '-', '9579714964', NULL, 'MEENAJ@7', '6896146465165', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'LONI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-11 13:11:02'),
(57, 1, 'Mr', 'ABHIMAN SINGH PATLL', 'user.png', 8, 'Male', '0000-00-00', '-', '8007152222', NULL, 'ABHIMAN@5', '545546451', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BASIYA NAGAR', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-11 13:14:48'),
(58, 1, 'Mrs', 'ALISHBA SHAIKH', 'user.png', 3, 'Female', '0000-00-00', '-', '8454083805', NULL, 'ALISHAB@7', '254584545842547', NULL, NULL, '', '-', '-', 'DOCTOR', '-', 'Less than 1 Lakh', 'AURNAGABAD', 'AURANGABAD', 'AURNAGABAD', 'MAHARASHTRA', 431001, NULL, NULL, 'HINDI', 'Google', NULL, 1, 22, '2021-10-12 05:40:42'),
(59, 1, 'Mr', 'AJINATH NAGARGOJE', 'user.png', 45, 'Male', '0000-00-00', '-', '8275706838', NULL, 'AJINATH@8', '545614684615684', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BEED BY PASS', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-12 06:30:46'),
(60, 2, 'Mr', 'RAMESH MAPARI', 'user.png', 45, 'Male', '0000-00-00', 'FARMER', '9763045758', NULL, '', '', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'LONAR', 'BULDHANA', 'LONAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-12 07:40:49'),
(61, 1, 'Miss', 'AMENA SHAIKH', 'user.png', 4, 'Female', '0000-00-00', '-', '9421671978', NULL, 'AMENA@8', '567519451484654', NULL, 'Other', '', '-', '-', 'SHOPKEEPER', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI ', 'Other', NULL, 1, 22, '2021-10-12 11:13:30'),
(62, 1, 'Miss', 'DEVASHREE MOTUKUMAR', 'user.png', 6, 'Female', '0000-00-00', '-', '8308846500', NULL, 'DEVASHREE@7', '567498673654666', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI ', 'Other', NULL, 1, 22, '2021-10-12 11:15:55'),
(63, 1, 'Mr', 'DEVASHISH SHINDE', 'user.png', 4, NULL, '0000-00-00', '-', '9665588435', NULL, 'DEVASHISH@3', '247596874576987', NULL, 'Other', '', '-', '-', 'ONLINE', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-13 05:28:38'),
(64, 1, 'Mr', 'MUNIR KHAN', 'user.png', 35, 'Male', '0000-00-00', 'SHOPKEEPER', '7507904171', NULL, 'MUNIR@3', '324968435649', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'KATKATI GATE', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-13 08:08:52'),
(65, 1, 'Mr', 'ARSALAN SHAIKH', 'user.png', 3, 'Male', '0000-00-00', '-', '9359464022', NULL, 'ARSALAN@7', '5796874657684', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BAIJIPURA', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-13 08:10:48'),
(66, 1, 'Mr', 'SHAURYA DANVADE', 'user.png', 2, NULL, '0000-00-00', '-', '9223777512', NULL, 'SHAURYA@7', '646486846946516', NULL, 'Other', '', 'DINESH DANVANE', '-', 'FARMING', 'JYOTI DANVANE', '-', 'BHULDHANA', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-13 08:27:46'),
(67, 1, 'Mr', 'PRANAV VETAL', 'user.png', 4, 'Male', '0000-00-00', '-', '9970379930', NULL, 'PRANAV@5', '3254984354968', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JADHAV WADI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-13 09:19:32'),
(68, 1, 'Mr', 'SHARYA DANDADE', 'user.png', 2, 'Male', '0000-00-00', '-', '9223777513', NULL, 'SHARYA@4', '54684654984651', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BHULDHANA', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 22, '2021-10-13 09:21:42'),
(69, 1, 'Mr', 'KUNAL GAYAKW', 'user.png', 12, 'Male', '0000-00-00', '-', '9022794592', NULL, 'KUNAL@7', '57468435746541', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'KANCHANWADI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-13 09:48:48'),
(70, 1, 'Mr', 'ABDULLAH SHAIKH', 'user.png', 5, 'Male', '0000-00-00', '-ACCOUNTING', '8559010333', NULL, 'ABDULAAH28@7', '25746851435643', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'MALEGAON', 'NASHIK', 'MALEGAON', 'MAHARAHTRA', 423105, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-13 09:54:23'),
(71, 1, 'Mr', 'AKASH FUKE', 'user.png', 21, 'Male', '0000-00-00', 'STUDENT', '9307360127', NULL, 'AKASH@7', '576843587654832', NULL, 'Single', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI, MARATHI AND ENGLISH', 'Other', NULL, 1, 22, '2021-10-13 12:40:44'),
(72, 1, 'Miss', 'ASBA SHAIKH', 'user.png', 4, NULL, '0000-00-00', '-', '9960505982', NULL, 'ASBA@9', '156798468974651', NULL, NULL, '', '-', '-', 'MANAGER', '-', 'Less than 1 Lakh', 'REHMANIYA COLONY', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-14 05:41:34'),
(73, 1, 'Mr', 'RUDRA HADE', 'user.png', 6, 'Male', '0000-00-00', '-', '9850929298', NULL, 'RUDRA@7', '576841658768514', NULL, 'Other', '', '-', '-', 'FARMING', '-', 'Less than 1 Lakh', 'BIDKIN', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-14 05:50:24'),
(74, 1, 'Mr', 'ADHVIT NILKHAM', 'user.png', 4, 'Male', '0000-00-00', '-', '8308407383', NULL, 'ADHVIT@3', '12765143564123', NULL, 'Other', '', '-', '-', 'PROFEESIONAL', '-', 'Less than 1 Lakh', 'UTTAMNAGAR', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-14 05:53:19'),
(75, 2, 'Mrs', 'VIJAYA MALI', 'user.png', 50, 'Female', '0000-00-00', 'HOUSEWIFE', '1234569879', NULL, '', '', NULL, 'Married', '', 'ABC', 'NIL', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'D.MALI', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 443301, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 06:33:49'),
(76, 1, 'Mr', 'siddhant kapadia', 'user.png', 2, NULL, '0000-00-00', '-', '8275326283', NULL, 'sid@23', '257698413576531', NULL, 'Other', '', '-', '-', 'business', '-', 'Less than 1 Lakh', 'SHAHGANJ', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI ', 'Other', NULL, 1, 22, '2021-10-14 06:34:19'),
(77, 2, 'Mrs', 'SHANTABAI KHARATE', 'user.png', 62, 'Male', '0000-00-00', 'FARMER', '12234569879', NULL, '', '', NULL, 'Married', '', 'ABC', 'NIL', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'KWNWAD', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 06:40:37'),
(78, 2, 'Mrs', 'SANDHYA DAKHORE', 'user.png', 45, 'Female', '0000-00-00', 'HOUSEWIFE', '9423519440', NULL, '', '', NULL, 'Married', '', 'EFG', 'FARMER', 'BCX', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 06:42:43'),
(79, 2, 'Mrs', 'NAJMA BI', 'user.png', 60, 'Female', '0000-00-00', 'HOUSEWIFE', '8975714325', NULL, '', '', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'LONAR', 'BULDHANA', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 06:57:33'),
(80, 2, 'Mrs', 'MAHADEVI RAJAPU', 'user.png', 71, 'Female', '0000-00-00', 'HOUSEWIFE', '1234569875', NULL, '', '', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'SOLAPUR', 'SOLAPUR', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 07:01:09'),
(81, 2, 'Mrs', 'JYOTI GEHLOD', 'user.png', 38, 'Female', '0000-00-00', 'NIL', '8805027758', NULL, '', '', NULL, 'Married', '', 'EFG', 'NIL', 'BCX', 'ABC', 'Less than 1 Lakh', 'TALNI', 'BULDHANA', 'LONAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 07:02:58'),
(82, 2, 'Mr', 'MADHUKAR LAMBHAD', 'user.png', 48, 'Male', '0000-00-00', 'FARMER', '9689603256', NULL, '', '', NULL, 'Married', '', 'ABC', 'NIL', 'FARMER', 'ABC', 'Less than 1 Lakh', 'AAREGAON', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 07:04:41'),
(83, 2, 'Mrs', 'GAYATRI IKKAR', 'user.png', 12, 'Female', '0000-00-00', 'STUDENT', '1236547985', NULL, '', '', NULL, 'Single', '', 'EFG', 'FARMER', 'BCX', 'ABCD', 'Less than 1 Lakh', 'KOKARMBA', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 07:10:34'),
(84, 1, 'Mr', 'swaraj vivekar', 'user.png', 3, 'Male', '0000-00-00', '-', '9867819899', NULL, 'swaraj@8', '327896413687653', NULL, 'Other', '', '-', '-', 'mobile shop', '-', 'Less than 1 Lakh', 'waluj', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-14 07:11:29'),
(85, 2, 'Mr', 'UTTAM BAJAD', 'user.png', 71, 'Male', '0000-00-00', 'FARMER', '9765659060', NULL, '', '', NULL, 'Married', '', 'EFG', 'NIL', 'BCX', 'ABCD', 'Less than 1 Lakh', 'JANEFAL', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 07:12:38'),
(86, 2, 'Mr', 'ANIRUDH DHAVTE', 'user.png', 12, 'Male', '0000-00-00', 'STUDENT', '', NULL, '', '', NULL, 'Single', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'PARTAPUR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 07:14:16'),
(87, 2, 'Mr', 'D.S.JAITALKAR', 'user.png', 51, 'Male', '0000-00-00', 'NIL', '9764962668', NULL, '', '', NULL, 'Married', '', 'EFG', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 443301, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 07:19:53'),
(88, 3, 'Mr', 'SUMIT S. KULKARNI', 'user.png', 8, 'Male', '0000-00-00', 'STUDENT', '9503316503', NULL, 'email@gmail.com', '111111', NULL, 'Single', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-14 08:47:22'),
(89, 2, 'Mr', 'PAVAN BORKAR', 'user.png', 23, 'Male', '0000-00-00', 'FARMER', '9011991481', NULL, '', '', NULL, 'Single', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'MALALA', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-14 09:28:08'),
(90, 3, 'Mr', 'SANDEEP B. WANNARE', 'user.png', 33, 'Male', '0000-00-00', 'Employee', '9730228335', NULL, 'email@gmail.com', '11111111', NULL, 'Married', '', 'B', '10', 'F', 'AAA', 'Less than 1 Lakh', 'WALUNJ', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-14 13:23:16'),
(91, 1, 'Mr', 'GANPAT B. DUDHE', 'user.png', 50, 'Male', '0000-00-00', 'Employee', '9049276998', NULL, 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'BAJAJ NAGAR', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-14 13:26:27'),
(92, 1, 'Mr', 'NAMDEV K. PAWAR', 'user.png', 64, 'Male', '0000-00-00', '   RE-OFFICER', '8698975178', NULL, 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', '1 Lakh - 2.5 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-14 13:29:38'),
(93, 1, 'Mr', 'BABAN KUBER', 'user.png', 59, 'Male', '0000-00-00', 'RETIRED', '9970101316', NULL, 'BABAN@3', '5468456876846', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'GEORAI', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-15 10:02:12'),
(94, 1, 'Miss', 'ZARA MOIN SHAIKH', 'user.png', 7, 'Female', '0000-00-00', '-', '9370222877', NULL, 'ZARA@3', '5468436574646', NULL, NULL, '', '-', '-', 'SHOPKEEPER', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-15 10:04:07'),
(95, 1, 'Mrs', 'ANANDABAI SONAWNE', 'user.png', 82, 'Female', '0000-00-00', 'HOUSEWIFE', '8208976512', NULL, 'ANANDI@3', '567984365169876', NULL, 'Married', '', '-', '-', '-', '-', '-', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-15 10:38:52'),
(96, 1, 'Mr', 'VIJAY SANGAVIKAR', 'user.png', 80, 'Male', '0000-00-00', 'RETIRED', '9822610760', NULL, 'VIJAY@5', '536798463516486', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-15 11:01:43'),
(97, 1, 'Mr', 'UDDHAV DHAPATE', 'user.png', 69, 'Male', '0000-00-00', 'RETIRED', '9011285500', NULL, 'UDDHAV@4', '124684631689464', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'MAZALGAON', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-15 11:18:13'),
(98, 1, 'Mrs', 'SUBHADRA KHANDEBHARAD', 'user.png', 48, 'Female', '0000-00-00', 'HOUSEWIFE', '8888593531', NULL, 'SUBHADRA@3', '168431698465', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BADNAPUR', '-', 'AURANGABAD', 'MAHARAHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 22, '2021-10-15 12:47:47'),
(99, 1, 'Mrs', 'FARZANA PATHAN', 'user.png', 30, 'Female', '0000-00-00', '-', '8390161130', NULL, 'FARZANA@3', '1687651646132', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BEED BY PASS', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-15 12:48:55'),
(100, 1, 'Mr', 'ASHOK THAPAD', 'user.png', 30, 'Male', '0000-00-00', '-', '9673319319', NULL, 'ASHOK@3', '126786513213218', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'KANCHANWADI', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', NULL, NULL, 1, 22, '2021-10-15 12:50:00'),
(101, 1, 'Mrs', 'SWETA BHANSALI', 'user.png', 23, 'Female', '0000-00-00', '-', '7385383517', NULL, 'SWETA@3', '156761256874632', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'PARALI', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-15 12:53:17'),
(102, 1, 'Miss', 'AMISHA PATHARE', 'user.png', 18, 'Female', '0000-00-00', '-', '9970538668', NULL, 'AMISHA@9', '321468746319846', NULL, 'Single', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'RAMNAGAR', '-', '-', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-15 12:54:24'),
(103, 1, 'Mr', 'LAXMAN DIXIT', 'user.png', 75, 'Male', '0000-00-00', 'RETIRED', '9404241730', NULL, 'LAXMAN@3', '213678614689465', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'MAZALGAON', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 05:19:18'),
(104, 1, 'Mrs', 'MAYURA KALE', 'user.png', 45, 'Male', '0000-00-00', '-', '8888836430', NULL, 'MAYURA@8', '157498674159687', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'TILAK NAGAR', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', 'Other', NULL, 1, 22, '2021-10-16 05:26:01'),
(105, 1, 'Mr', 'VIRAJ JANDHALE', 'user.png', 5, 'Male', '0000-00-00', 'BUSINESS', '8485069592', NULL, 'VIRAJ@7', '574987436561496', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'JAWAHAR COLONY', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', 'Other', NULL, 1, 22, '2021-10-16 05:30:52'),
(106, 1, 'Mr', 'SAYYAD MOIZ', 'user.png', 3, 'Male', '0000-00-00', '-', '9923729792', NULL, 'SAYYAD@6', '54687968651325', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 05:59:02'),
(107, 1, 'Miss', 'PRIYA RAJPUT', 'user.png', 19, 'Female', '0000-00-00', 'STUDENT', '7588431714', NULL, 'PRIYA@32', '578686212787966', NULL, 'Single', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'CHISTIYA COLONY', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI, ENGLISH AND MARATHI', 'Other', NULL, 1, 22, '2021-10-16 06:04:09'),
(108, 1, 'Mr', 'YUWANSH DESHMUKH', 'user.png', 2, 'Male', '0000-00-00', '-', '8007207777', NULL, 'YUWANSH@4', '56786896836836', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'KHADKESHWAR ', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'MARATHI', 'Other', NULL, 1, 22, '2021-10-16 06:06:16'),
(109, 1, 'Mr', 'R.M KALE', 'user.png', 75, 'Male', '0000-00-00', 'RETIRED', '9767401319', NULL, 'RM@32', '3254984654684', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SHENDURWADA', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 06:13:45'),
(110, 1, 'Mr', 'SURJIT KAUR', 'user.png', 65, 'Male', '0000-00-00', '-', '9822470770', NULL, 'SURJIT@3', '3258981254686', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'USMANPURA', 'AURANGABAD', '-', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 06:26:09'),
(111, 1, 'Mr', 'SANDU SHELKE', 'user.png', 43, 'Male', '0000-00-00', 'TEACHER', '9423452711', NULL, 'SANDU@8', '56798413576', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SAWANGI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 06:28:45'),
(112, 1, 'Mr', 'AZHAAN KHAN', 'user.png', 1, 'Male', '0000-00-00', '-', '9326222279', NULL, 'AZHAAN@8', '274684365121', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'ROSHAN GATE', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 06:53:05'),
(113, 1, 'Mr', 'VITTHALRAO RITHE', 'user.png', 81, 'Male', '0000-00-00', 'RETIRED', '9922148949', NULL, 'VITTHAL@3', '325465543', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'MUKUNDWADI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 06:55:41'),
(114, 1, 'Mrs', 'KAMALBAI NAGLOT', 'user.png', 58, 'Female', '0000-00-00', '-', '8725942303', NULL, 'KAMAL@7', '246876413216584', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'MAYUR PARK', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 06:56:58'),
(115, 2, 'Mrs', ' INDUBAI BAJAD', 'user.png', 45, 'Female', '0000-00-00', 'HOUSEWIFE', '9011211491', NULL, '', '', NULL, 'Married', '', 'EFG', 'NIL', 'FARMER', 'YASHODA', 'Less than 1 Lakh', 'LONAR', 'BULDHANA', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-16 07:31:46'),
(116, 1, 'Mrs', 'SHARVARI SAHANE', 'user.png', 5, 'Female', '0000-00-00', '-', '94039838278', NULL, 'SHARVARI@6', '56746543641654', NULL, 'Other', '', '-', '-', 'CENTRAL GOVERMENT EMPLOYEE', '-', '1 Lakh - 2.5 Lakh', 'HARSUL', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 08:50:43'),
(117, 1, 'Miss', 'AHMEN SHAIKH', 'user.png', 1, 'Female', '0000-00-00', '-', '8793537477', NULL, 'AHMEN@3', '1', NULL, 'Other', '', '-', '-', 'CENTRALING', '-', 'Less than 1 Lakh', 'JALNA', 'JALNA', 'JALNA', 'MAHARAHTRA', 431203, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-16 09:12:38'),
(118, 1, 'Mr', 'RAVI JAIN', 'user.png', 49, 'Male', '0000-00-00', '-', '9822284936', NULL, 'RAVI@7', '1', NULL, NULL, '', '-', '-', '-', '-', '-', 'COMPANY', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 09:24:30'),
(119, 1, 'Mr', 'RAJENDRA BARSKAR', 'user.png', 56, NULL, '0000-00-00', 'RETIRED', '9420332259', NULL, 'RAJENDRA@3', '1', NULL, NULL, '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SAUDGIRNI CHOWK', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', 'Other', NULL, 1, 22, '2021-10-16 09:27:57'),
(120, 1, 'Miss', 'B/O BHARTI SONAWNE', 'user.png', -1, 'Male', '0000-00-00', '-', '8806221985', NULL, 'BABY@8', '1', NULL, 'Other', '', '-', '-', 'HOSPITAL MEMBERS', '-', 'Less than 1 Lakh', 'PISADEVI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 09:34:53'),
(121, 1, 'Mr', 'SOHAM MUNJAL', 'user.png', 9, 'Male', '0000-00-00', '-', '9325106727', NULL, 'SOHAM@3', '12856', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SATARA  PARISAR', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', 'Other', NULL, 1, 22, '2021-10-16 09:42:04'),
(122, 1, 'Mr', 'MOSIN BAGWAN', 'user.png', 38, 'Male', '0000-00-00', 'DRIVER', '9860813796', NULL, 'MOSIN@7', '1', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'LADSAWANGI', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , MARATHI', NULL, NULL, 1, 22, '2021-10-16 09:45:43'),
(123, 2, 'Mrs', 'VANDANA BORE', 'user.png', 28, 'Female', '0000-00-00', 'HOUSEWIFE', '9067334772', NULL, '', '', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-19 06:00:58'),
(124, 2, 'Mrs', 'SANGITA LATE', 'user.png', 40, 'Female', '0000-00-00', 'HOUSEWIFE', '9922673760', NULL, '', '', NULL, 'Other', '', 'EFG', 'NIL', 'BCX', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', '', 'MAHARASHTRA', 443301, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-19 07:23:19'),
(125, 2, 'Mrs', 'MIRA BHAGYWANT', 'user.png', 35, 'Female', '0000-00-00', 'HOUSEWIFE', '9975468245', '', '', '123465466646', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'VENI', 'BULDHANA', 'LONAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-20 05:40:59'),
(126, 2, 'Mrs', 'GANGUBAI TONCHA', 'user.png', 47, 'Female', '0000-00-00', 'HOUSEWIFE', '9359992680', '', '', '465469656323', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'JAVALA', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-20 05:42:52'),
(127, 2, 'Mr', 'MOHAMMAD ', 'user.png', 13, 'Male', '0000-00-00', 'STUDENT', '7517392313', '', '', '798956336563', NULL, 'Single', '', 'ABC', 'NIL', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-20 05:44:54'),
(128, 2, 'Mr', 'ARJUN THORAT ', 'user.png', 43, 'Male', '0000-00-00', 'FARMER', '9657385712', '', '', '6466623265636', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-20 05:46:36'),
(129, 2, 'Mr', 'MALTI SANGLE', 'user.png', 42, 'Female', '0000-00-00', 'HOUSEWIFE', '9767454589', '', '', '465632326563', NULL, 'Married', '', 'ABC', 'NIL', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'LONAR', 'BULDHANA', 'LONAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-20 06:03:52'),
(130, 1, 'Miss', 'LUBNA SHAIKH', 'user.png', 20, 'Female', '0000-00-00', 'STUDENT', '9823205091', '', '', '844685113011', NULL, 'Single', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'BAIJIPURA', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', 'Other', NULL, 1, 22, '2021-10-20 06:33:11'),
(131, 3, 'Mrs', 'GAJRABAI P. RAJPUT', 'user.png', 85, 'Female', '0000-00-00', 'ABC', '9975917767', '', 'email@gmail.com', '11111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'CHINCHOLI', 'CHINCHOLI', 'CHINCHOLI', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 14:36:22'),
(132, 1, 'Mr', 'BHASKAR Y. DESHMUKH', 'user.png', 71, 'Male', '0000-00-00', 'RETIRED', '9422708264', '', 'email@gmail.com', '1111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'LASUR', 'AURANGABAD', 'LASUR', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 14:41:05'),
(133, 3, 'Mr', 'SUKHDEV K. KAKDE', 'user.png', 32, 'Male', '0000-00-00', 'FARMER', '8459535346', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'KACHRU', 'AAA', 'BBB', 'AAA', '1 Lakh - 2.5 Lakh', 'SILLOD', 'SILLOD', 'SILLOD', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 14:50:16'),
(134, 3, 'Mr', 'MUKESH M. BORA', 'user.png', 63, 'Male', '0000-00-00', 'BUSINESS', '9881081008', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'WALUNJ', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 14:55:53'),
(135, 3, 'Mr', 'KISHOR J. TUPE', 'user.png', 50, 'Male', '0000-00-00', 'FARMER', '8605555644', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', '2.5 Lakh - 5 Lakh', 'WALUNJ', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 14:59:51'),
(136, 3, 'Miss', 'ALIYA A. SHAIKH', 'user.png', 15, 'Female', '0000-00-00', 'STUDENT', '9822252598', '', 'email@gmail.com', '111111', NULL, 'Single', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'GANGAPUR', 'GANGAPUR', 'GANGAPUR', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:04:30'),
(137, 3, 'Miss', 'NIKITA A. SARODE', 'user.png', 19, 'Female', '0000-00-00', 'STUDENT', '9975609925', '', 'email@gmail.com', '111111', NULL, 'Single', '', 'ARUN', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'PARBHANI', 'PARBHANI', 'PARBHANI', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:07:05'),
(138, 3, 'Mr', 'ASHOK R. RATHOD', 'user.png', 65, 'Male', '0000-00-00', 'BUSINESS', '9028061437', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', '1 Lakh - 2.5 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:09:05'),
(139, 3, 'Mrs', 'FARZANA A. SHAIKH', 'user.png', 24, 'Female', '0000-00-00', 'H-WIFE', '787570881', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', '1 Lakh - 2.5 Lakh', 'PADEGAON', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:10:40'),
(140, 3, 'Mrs', 'SHAKUNTALA GANGURDE', 'user.png', 55, 'Female', '0000-00-00', 'H-WIFE', '9923775277', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'GANGAPUR', 'GANGAPUR', 'GANGAPUR', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:12:15'),
(141, 3, 'Mr', 'CHAITRAM BORSE', 'user.png', 64, 'Male', '0000-00-00', 'RETIRED', '7620523612', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', '1 Lakh - 2.5 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:13:35'),
(142, 3, 'Mr', 'RAJU B. KAJALKAR', 'user.png', 60, 'Male', '0000-00-00', 'RETIRED', '9823372080', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'BHIKANRAO', 'AAA', 'BBB', 'AAA', '1 Lakh - 2.5 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:15:29'),
(143, 3, 'Mrs', 'CHANDRAVATI M. KANKATE', 'user.png', 78, 'Female', '0000-00-00', 'ABC', '9637453547', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', '1 Lakh - 2.5 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:17:22'),
(144, 3, 'Mrs', 'GAYABAI P. PAWAR', 'user.png', 70, 'Female', '0000-00-00', 'ABC', '9860752760', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'DAULTABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:18:44'),
(145, 3, 'Mrs', 'PARVATI J. GAIKWAD', 'user.png', 65, 'Female', '0000-00-00', 'H-WIFE', '967993337', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:20:17'),
(146, 3, 'Mrs', 'PARVATIBAI HORSHIL', 'user.png', 35, 'Female', '0000-00-00', 'H-WIFE', '9049708867', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'WALUNJ', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:21:41'),
(147, 3, 'Mrs', 'PARVATIBAI HORSHIL', 'user.png', 35, 'Female', '0000-00-00', 'H-WIFE', '9049708867', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'WALUNJ', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:21:41'),
(148, 3, 'Mrs', 'KAVITA D. NAROTE', 'user.png', 26, 'Female', '0000-00-00', 'H-WIFE', '8459154294', '', 'email@gmail.com', '111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'BULDHANA', 'BULDHANA', 'BULDHANA', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:23:10'),
(149, 3, 'Mr', 'SHESHRAO B. NAROTE', 'user.png', 73, 'Male', '0000-00-00', 'ABC', '9604234487', '', 'email@gmail.com', '1111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'BULDHANA', 'BULDHANA', 'BULDHANA', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:24:49'),
(150, 3, 'Mrs', 'MAYA RAVINDRA DONGARDIVE', 'user.png', 27, 'Female', '0000-00-00', 'H-WIFE', '9604200903', '', 'email@gmail.com', '1111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-20 15:37:36'),
(151, 3, 'Mr', 'SANDU L. RATHOD', 'user.png', 65, 'Male', '0000-00-00', 'FARMER', '9860211471', '', 'email@gmail.com', '1111111', NULL, 'Married', '', 'ABC', 'AAA', 'BBB', 'AAA', 'Less than 1 Lakh', 'PHULAMBRI', 'JALNA', 'PHULAMBRI', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-21 07:48:24'),
(152, 2, 'Mr', 'UDDHAV INGLE', 'user.png', 50, 'Male', '0000-00-00', 'NIL', '8669372202', '', '', '46563556263565', NULL, NULL, '', 'ABC', 'NIL', 'FARMER', 'ABC', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-21 09:45:36'),
(153, 2, 'Mr', ' SANJAB KHARAT', 'user.png', 50, 'Male', '0000-00-00', 'FARMER', '7387558334', '', '', '9946656232623', NULL, 'Married', '', 'ABC', 'NIL', 'BCX', 'ABC', 'Less than 1 Lakh', 'SULTANPUR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-21 09:47:22'),
(154, 2, 'Mr', 'RAMESH THAKARE', 'user.png', 44, 'Male', '0000-00-00', 'FARMER', '9325371613', '', '', '9595665956326', NULL, 'Married', '', 'EFG', 'NIL', 'FARMER', 'ABC', 'Less than 1 Lakh', 'AAKOLA THAKRE', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-23 08:26:11'),
(155, 2, 'Mr', 'SHESHARAO WANKHEDE', 'user.png', 60, 'Male', '0000-00-00', 'NIL', '9921426813', '', '', '46563655622', NULL, 'Married', '', 'EFG', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'BELGAON', 'BULDHANA', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-23 10:01:36'),
(156, 2, 'Miss', 'ABOLI THAKRE', 'user.png', 28, 'Female', '0000-00-00', 'NIL', '7066790988', '', '', '6465463236526', NULL, 'Single', '', 'EFG', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', 'MEHKAR', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-23 10:23:45'),
(157, 2, 'Mr', 'SUSHANT GUNG', 'user.png', 12, 'Male', '0000-00-00', 'NIL', '9545827415', '', '', '6526565632632', NULL, 'Single', '', 'EFG', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'MEHKAR', 'BULDHANA', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-25 07:01:34');
INSERT INTO `patient` (`Id`, `Branch_Id`, `Prefix`, `Name`, `Profile_Image`, `Age`, `Gender`, `DOB`, `Occupation`, `Mobile`, `Alternate_Mobile`, `Email`, `Aadhar`, `Pan`, `Marriage_Status`, `DOA`, `Father_Name`, `Father_Education`, `Father_Occupation`, `Mother_Name`, `Income`, `Address`, `District`, `Taluka`, `State`, `Pin`, `Reffered_By`, `Reffered_To`, `Language`, `Source`, `Telecaller_Id`, `Is_Active`, `Created_By`, `Created_On`) VALUES
(158, 2, 'Mrs', 'MEENAKSHI DAHALKE', 'user.png', 29, 'Female', '0000-00-00', 'HOUSEWIFE', '9850926563', '', '', '4645623232', NULL, 'Married', '', 'ABC', 'FARMER', 'BCX', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-25 08:34:28'),
(159, 2, 'Mrs', 'RUPALI AWCHAR', 'user.png', 25, 'Female', '0000-00-00', 'NIL', '9637265788', '', '', '4466355663', NULL, 'Married', '', 'ABC', 'NIL', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-25 08:35:51'),
(160, 2, 'Mr', 'AATISH DHAVASE', 'user.png', 25, 'Male', '0000-00-00', 'NIL', '9403959597', '', '', '46565865632632', NULL, 'Single', '', 'ABC', 'NIL', 'FARMER', 'ABC', 'Less than 1 Lakh', 'RISOD', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-25 08:37:06'),
(161, 2, 'Mr', 'PRAVIN MORE', 'user.png', 29, 'Male', '0000-00-00', 'NIL', '8329708160', '', '', '64566354656', NULL, 'Single', '', 'EFG', 'FARMER', 'BCX', 'ABC', 'Less than 1 Lakh', 'ANTRI DESHMUKH', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-26 07:44:07'),
(162, 3, 'Mrs', 'SANGEETA P. KHAJEKAR', 'user.png', 35, 'Female', '0000-00-00', 'H-WIFE', '8446628334', '', 'email@gmail.com', '11111', NULL, 'Married', '', 'ABC', 'EFG', 'AAA', 'ASD', '1 Lakh - 2.5 Lakh', 'GANGAPUR', 'GANGAPUR', 'GANGAPUR', 'MAHARASHTRA', 12345, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-26 12:06:00'),
(163, 3, 'Mr', 'BIHARILAL MELWANI', 'user.png', 81, 'Male', '0000-00-00', 'ABC', '9923158472', '', 'email@gmail.com', '111', NULL, 'Married', '', 'A', 'EFG', 'AAA', 'DCB', '2.5 Lakh - 5 Lakh', 'AURANGABAD', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-26 12:10:02'),
(164, 2, 'Mr', ' RUBED ALI', 'user.png', 10, 'Male', '0000-00-00', 'STUDENT', '9822599018', '', '', '464562632', NULL, 'Single', '', 'ABC', 'FARMER', 'BCX', 'ABCD', 'Less than 1 Lakh', 'ANJANI', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', NULL, NULL, 1, 25, '2021-10-27 10:29:23'),
(165, 2, 'Mrs', 'SAVITA BENDWALE', 'user.png', 24, 'Female', '0000-00-00', 'HOUSEWIFE', '8766979189', '', '', '466356566323', NULL, 'Married', '', 'EFG', 'NIL', 'FARMER', 'ABC', 'Less than 1 Lakh', 'MEHKAR', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-27 10:30:34'),
(166, 2, 'Mrs', 'HEMA VALEKAR', 'user.png', 50, 'Female', '0000-00-00', 'HOUSEWIFE', '9767613937', '', '', '795656356323', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'LONAR', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-27 10:31:43'),
(167, 2, 'Mrs', 'ANITA DHAKAD', 'user.png', 30, 'Female', '0000-00-00', 'HOUSEWIFE', '7499600068', '', '', '465656263263', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-28 07:45:23'),
(168, 2, 'Mrs', 'JANABAI MADANKAR', 'user.png', 70, 'Female', '0000-00-00', 'NIL', '7350384170', '', '', '4323652656526', NULL, 'Married', '', 'ABC', 'FARMER', 'BCX', 'ABCD', 'Less than 1 Lakh', 'LONAR', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-28 08:49:18'),
(169, 2, 'Mrs', 'PRATIBHA DHOLE', 'user.png', 25, 'Female', '0000-00-00', 'HOUSEWIFE', '9552906456', '', '', '423263265656263', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', '', '', 'MAHARASHTRA', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-28 08:50:33'),
(170, 2, 'Mr', 'BHASKAR MORE', 'user.png', 55, 'Male', '0000-00-00', 'NIL', '9921416641', '', '', '989525659656', NULL, 'Married', '', 'EFG', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'MEHKAR', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-29 08:19:31'),
(171, 2, 'Mrs', 'KALPANA VAIDYA', 'user.png', 48, 'Female', '0000-00-00', 'NIL', '989663256546', '', '', '56565656323', NULL, 'Married', '', 'EFG', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'MEHKAR', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-29 09:49:52'),
(172, 3, 'Mr', 'PRAFUL S. GAIKWAD', 'user.png', 38, 'Male', '0000-00-00', 'Labor', '9459943383', '', 'eamil@gamil.com', '1111', NULL, 'Married', '', 'Abc', 'Asd', 'Asg', 'Hcb', '1 Lakh - 2.5 Lakh', 'Aurangabad', 'Aurangabad', 'Aurangabad', 'MAHARASHTRA ', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-29 12:06:25'),
(173, 3, 'Mrs', 'ANJALI V. KOTHALE', 'user.png', 51, 'Female', '0000-00-00', 'Teacher', '9422686570', '', 'eamil@gamil.com', '111', NULL, 'Married', '', 'Abc', 'Asd', 'Asg', 'Hcb', '2.5 Lakh - 5 Lakh', 'Aurangabad', 'Aurangabad', 'Aurangabad', 'MAHARASHTRA ', 431001, NULL, NULL, '', 'Other', NULL, 1, 31, '2021-10-29 12:08:15'),
(174, 1, 'Mrs', 'SUSHILA CHAUDHARI', 'user.png', 46, 'Female', '0000-00-00', 'HOUSEWIFE', '9049368719', '', 'SUSHILA@8', '1', NULL, 'Married', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'SATARA  PARISAR', 'AURANGABAD', 'AURANGABAD', 'MAHARAHTRA', 431001, NULL, NULL, 'HINDI , ENGLISH,MARATHI', NULL, NULL, 1, 22, '2021-10-30 06:06:11'),
(175, 1, 'Mr', 'RUTVIK KAMBLE', 'user.png', 2, NULL, '0000-00-00', 'JOB', '7420025994', '', 'RUTVIK@3', '1', NULL, 'Other', '', '-', '-', '-', '-', 'Less than 1 Lakh', 'NANDED', '-', 'NANDED', 'MAHARAHTRA', 0, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2021-10-30 06:16:40'),
(176, 2, 'Mrs', 'CHAYA CHINCHOLE', 'user.png', 38, 'Female', '0000-00-00', 'HOUSEWIFE', '9922522204', '', '', '7966565656526', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'MUNGSURI', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-30 06:16:45'),
(177, 2, 'Mr', 'KHANDU ZATE', 'user.png', 46, 'Male', '0000-00-00', 'FARMER', '7887344796', '', '', '8464646485', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'SAVLAD', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-30 08:32:06'),
(178, 2, 'Mrs', 'SAKHUBAI DHANVA', 'user.png', 50, 'Female', '0000-00-00', 'HOUSEWIFE', '9307189766', '', '', '346854654654', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'YASHODA', 'Less than 1 Lakh', 'MOTHA MERA', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-30 08:33:32'),
(179, 2, 'Mr', 'GAJANAN SIRSAT', 'user.png', 50, 'Male', '0000-00-00', 'NIL', '9545783597', '', '', '7896434564', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'PARDI', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-30 09:30:45'),
(180, 2, 'Mr', 'SAHEBRAO GAIKWAD', 'user.png', 57, 'Male', '0000-00-00', 'NIL', '8308023653', '', '', '436546465465', NULL, 'Married', '', 'EFG', 'FARMER', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'ANJANI', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-30 09:32:39'),
(181, 2, 'Mr', 'SAHEBRAO GAIKWAD', 'user.png', 57, 'Male', '0000-00-00', 'NIL', '8308023653', '', '', '46635656', NULL, 'Married', '', 'ABC', 'NIL', 'FARMER', 'ABCD', 'Less than 1 Lakh', 'ANJANI', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 0, 25, '2021-10-30 10:30:34'),
(182, 2, 'Mr', 'GOPAL AANDHLE', 'user.png', 27, 'Male', '0000-00-00', 'NIL', '9359568329', '', '', '4689665689656', NULL, 'Married', '', 'ABC', 'FARMER', 'FARMER', 'ABC', 'Less than 1 Lakh', 'UTI', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-30 10:31:56'),
(183, 2, 'Mr', ' BHARAT JOGI', 'user.png', 36, 'Male', '0000-00-00', 'NIL', '7775932108', '', '', '3574684648', NULL, 'Married', '', 'EFG', 'NIL', 'FARMER', 'YASHODA', 'Less than 1 Lakh', 'HARAL', '', '', '', 0, NULL, NULL, '', 'Other', NULL, 1, 25, '2021-10-30 10:33:46'),
(184, 1, 'Miss', 'dhanashree dede', 'user.png', 6, 'Female', '0000-00-00', 'social work', '7038032437', '', 'dhanshree@7', '56465169843', NULL, 'Other', '', 'arun dede', 'b.a pass', 'social arts drawing', 'pooja dede', 'Less than 1 Lakh', 'varud quazi shendra', 'JALNA', 'JALNA', 'maharashtra ', 4310012, NULL, NULL, 'HINDI,MARATHI', 'Other', NULL, 1, 22, '2022-01-28 12:03:52'),
(185, 1, 'Mr', 'Ashar Khan', 'user.png', 4, 'Male', '2018-01-01', '.', '9637992640', '9689200910', 'Ash@7', '4566244451313', NULL, 'Single', '0001-01-01', 'Khayuum khan', 'ENGINEERING COMPLETED', 'ENGINEER', 'SALMA KHAN', 'Less than 1 Lakh', 'PAITHAN GATE', 'AURANGABAD', 'AURANGABAD', 'MAHARASHTRA', 431001, NULL, NULL, 'HINDI', 'Other', NULL, 1, 22, '2022-01-29 11:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `payment_receipt`
--

CREATE TABLE `payment_receipt` (
  `Id` int(11) NOT NULL,
  `Appointment_Id` int(11) NOT NULL,
  `Branch_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_receipt`
--

INSERT INTO `payment_receipt` (`Id`, `Appointment_Id`, `Branch_Id`) VALUES
(1, 496, 0),
(2, 495, 0),
(4, 501, 0),
(5, 501, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pediatric_case_history`
--

CREATE TABLE `pediatric_case_history` (
  `Id` int(11) NOT NULL,
  `Complaints` varchar(150) NOT NULL,
  `Complaints_Other` varchar(150) NOT NULL,
  `Responds_To_Sound` varchar(150) NOT NULL,
  `Responds_To_Level` varchar(150) NOT NULL,
  `Type_Of_Response` varchar(150) NOT NULL,
  `Type_Of_Other_Response` varchar(150) NOT NULL,
  `NCR_Status` varchar(150) NOT NULL,
  `Mode_Of_Communication` varchar(150) NOT NULL,
  `Any_IDD_Select` varchar(150) NOT NULL,
  `Any_IDD` varchar(150) NOT NULL,
  `Exposure_Radiatiopn_Select` varchar(150) NOT NULL,
  `Exposure_Radiatiopn` varchar(150) NOT NULL,
  `Any_Medications_Select` varchar(150) NOT NULL,
  `Any_Medications` varchar(150) NOT NULL,
  `Any_KOTA_Select` varchar(150) NOT NULL,
  `Any_KOTA` varchar(150) NOT NULL,
  `RFI_Select` varchar(150) NOT NULL,
  `RFI` varchar(150) NOT NULL,
  `Delivery_Place` varchar(150) NOT NULL,
  `Term_Select` varchar(150) NOT NULL,
  `Term` varchar(150) NOT NULL,
  `Type_Of_Delivery` varchar(150) NOT NULL,
  `Birth_Color` varchar(150) NOT NULL,
  `Birth_Cry` varchar(150) NOT NULL,
  `Birth_Weight` varchar(150) NOT NULL,
  `Postnatal_History` varchar(150) NOT NULL,
  `Neck_Control` varchar(150) NOT NULL,
  `Turn_Over` varchar(150) NOT NULL,
  `Crawling` varchar(150) NOT NULL,
  `Sitting` varchar(150) NOT NULL,
  `Standing` varchar(150) NOT NULL,
  `Walking` varchar(150) NOT NULL,
  `Handedness` varchar(150) NOT NULL,
  `Cooing` varchar(150) NOT NULL,
  `Babbling` varchar(150) NOT NULL,
  `First_Word` varchar(150) NOT NULL,
  `Word_Phases` varchar(150) NOT NULL,
  `Sentence_Level` varchar(150) NOT NULL,
  `Family_History` varchar(150) NOT NULL,
  `History_IPT` varchar(150) NOT NULL,
  `History_Seizures_Radio` varchar(150) NOT NULL,
  `History_Seizures` varchar(150) NOT NULL,
  `Currently_Studying_In` varchar(150) NOT NULL,
  `Academic_Performance` varchar(150) NOT NULL,
  `Remarks` varchar(150) NOT NULL,
  `DCFET_To_Scratch` varchar(150) NOT NULL,
  `DCFET_To_Putting` varchar(150) NOT NULL,
  `HCED_Status` varchar(150) NOT NULL,
  `HCED_RLB` varchar(150) NOT NULL,
  `HCED_Since` varchar(150) NOT NULL,
  `Right_Ear_Pinna` varchar(150) NOT NULL,
  `Left_Ear_Pinna` varchar(150) NOT NULL,
  `Right_Ear_EAM` varchar(150) NOT NULL,
  `Left_Ear_EAM` varchar(150) NOT NULL,
  `Right_Ear_Tympanic_Membrane` varchar(150) NOT NULL,
  `Left_Ear_Tympanic_Membrane` varchar(150) NOT NULL,
  `Any_Remarks` varchar(150) NOT NULL,
  `ENT_Findings` varchar(150) NOT NULL,
  `Recommendations` varchar(150) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pediatric_case_history`
--

INSERT INTO `pediatric_case_history` (`Id`, `Complaints`, `Complaints_Other`, `Responds_To_Sound`, `Responds_To_Level`, `Type_Of_Response`, `Type_Of_Other_Response`, `NCR_Status`, `Mode_Of_Communication`, `Any_IDD_Select`, `Any_IDD`, `Exposure_Radiatiopn_Select`, `Exposure_Radiatiopn`, `Any_Medications_Select`, `Any_Medications`, `Any_KOTA_Select`, `Any_KOTA`, `RFI_Select`, `RFI`, `Delivery_Place`, `Term_Select`, `Term`, `Type_Of_Delivery`, `Birth_Color`, `Birth_Cry`, `Birth_Weight`, `Postnatal_History`, `Neck_Control`, `Turn_Over`, `Crawling`, `Sitting`, `Standing`, `Walking`, `Handedness`, `Cooing`, `Babbling`, `First_Word`, `Word_Phases`, `Sentence_Level`, `Family_History`, `History_IPT`, `History_Seizures_Radio`, `History_Seizures`, `Currently_Studying_In`, `Academic_Performance`, `Remarks`, `DCFET_To_Scratch`, `DCFET_To_Putting`, `HCED_Status`, `HCED_RLB`, `HCED_Since`, `Right_Ear_Pinna`, `Left_Ear_Pinna`, `Right_Ear_EAM`, `Left_Ear_EAM`, `Right_Ear_Tympanic_Membrane`, `Left_Ear_Tympanic_Membrane`, `Any_Remarks`, `ENT_Findings`, `Recommendations`, `FormId`, `CreatedOn`) VALUES
(2, 'other', 'wdefsrfwdegfbrfedwefsdgsf ', 'consistent', 'soft', 'other', 'edjifdhjksfjicvh', 'Absent', 'non verbal', 'present', 'edchbddecn', 'present', 'edgftrfedfscg', 'present', 'sdfbgfrfedwsderfdgb', 'present', 'edfrvfggfrfdwderfve3wfdv', 'present', 'xsadsvgfbfdesfvb', 'hospital', 'time duration', 'ecfvdecfedc', 'normal', 'normal', 'immediate', 'swdefrfdc', 'kijhbnj', 'kopijnh', 'io', 'jhb', 'jkio', 'hjb', 'jiohb', 'Rt', 'ibh', 'uihb', 'gh', 'ijhbhjio', 'j', 'ojj', 'ob', 'Absent', 'hugvswdefrrfefrd', 'hu', 'poor', 'bbui', 'No', 'No', 'Absent', 'Both', 'fwdsf', 'ujihb', 'njuibh', 'uiihb', 'gbh', 'gvy', 'hg', 'yhuyg', 'bhuih', 'bui', 48, '2022-01-06 03:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `procedures`
--

CREATE TABLE `procedures` (
  `Procedures_Id` int(11) NOT NULL,
  `Procedure_Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Fees` varchar(100) NOT NULL,
  `Department_Id` int(11) NOT NULL,
  `Created_On` datetime NOT NULL DEFAULT current_timestamp(),
  `Last_Update_On` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `procedures`
--

INSERT INTO `procedures` (`Procedures_Id`, `Procedure_Name`, `Description`, `Fees`, `Department_Id`, `Created_On`, `Last_Update_On`) VALUES
(1, 'PTA', '', '400', 1, '2021-10-01 05:57:33', '2021-10-01 05:57:33'),
(2, 'IA ', 'Impedence Audiometry', '600', 1, '2021-10-01 05:57:59', '2021-10-01 05:57:59'),
(3, 'OAE', '', '500', 1, '2021-10-01 05:58:10', '2021-10-01 05:58:10'),
(4, 'BERA', '', '1800', 1, '2021-10-01 05:58:28', '2022-01-28 12:58:47'),
(5, 'BERA+ASSR', '', '2400', 1, '2021-10-01 05:59:11', '2021-10-01 06:09:37'),
(6, 'Special test', '', '200', 1, '2021-10-01 05:59:41', '2021-10-01 06:00:15'),
(7, 'HAT', '', '200', 1, '2021-10-01 06:00:59', '2021-10-01 06:00:59'),
(8, 'HAT outside', '', '600', 1, '2021-10-01 06:01:10', '2021-10-01 06:01:10'),
(9, 'Speech Therapy', 'ASSESSMENT\r\n', '400', 4, '2021-10-01 06:01:45', '2022-01-29 10:33:38'),
(10, 'Speech Evaluation', '', '400', 4, '2021-10-01 06:02:00', '2021-10-01 06:02:00'),
(11, 'Speech Therapy', 'advance of full month', '350 per session ', 4, '2021-10-01 06:03:36', '2022-01-28 13:00:29'),
(12, 'Physiotherapy Assessment', 'First Consultation\r\nASSESSMENT', '400', 2, '2021-10-01 06:04:25', '2022-01-29 10:39:56'),
(13, 'Physiotherapy', 'Advance of full month', '350 per session ', 2, '2021-10-01 06:06:21', '2022-01-28 13:02:39'),
(14, 'HOME TRAINING', '.', '500', 2, '2021-10-01 06:06:38', '2022-01-28 13:03:53'),
(15, 'Behavioural  CONSULTATION', 'ASSESSMENT', '400', 3, '2021-10-01 06:07:07', '2022-01-29 10:39:11'),
(16, 'SQ', 'TEST\r\n', '1200', 3, '2021-10-01 06:07:18', '2022-01-29 10:34:00'),
(17, 'IQ', 'TEST', '1900', 3, '2021-10-01 06:07:32', '2022-01-29 10:34:10'),
(18, 'DP', 'TEST', '600', 3, '2021-10-01 06:07:48', '2022-01-29 10:34:20'),
(19, 'developmental ', '', '500', 3, '2021-10-01 06:08:08', '2021-10-01 06:08:08'),
(20, 'Learning training', '', '500', 3, '2021-10-01 06:08:52', '2021-10-01 06:08:52'),
(21, 'BOA/ PALY AUD/ CONDT. AUD', '', '500', 1, '2021-10-01 06:09:08', '2021-10-01 06:09:08'),
(22, 'PTA', 'Pure tone audiometry', '400', 1, '2021-10-07 09:44:47', '2022-01-28 13:14:22'),
(23, 'ACCESSORIES', '', '0', 1, '2021-10-09 06:33:06', '2022-01-28 15:15:21'),
(24, 'PTA', 'DISCOUNT', '300', 1, '2021-10-09 06:33:46', '2021-10-09 06:33:46'),
(25, 'Speech Therapy', 'SESSION\r\n', '0', 4, '2021-10-09 07:20:33', '2022-01-29 10:33:19'),
(26, 'Physiotherapy', 'SESSION', '0', 2, '2021-10-09 07:22:12', '2022-01-29 10:35:16'),
(27, 'HOME TRAINING', '', '500', 3, '2021-10-09 07:24:58', '2022-01-28 13:52:50'),
(28, 'HEARING AID REPAIR', '', '0', 1, '2021-10-12 11:38:48', '2021-10-12 11:38:48'),
(29, 'Speech Therapy', 'SESSION', '0', 4, '2021-10-12 11:45:49', '2022-01-29 10:34:39'),
(30, 'BATTERY ', '', '210', 1, '2022-01-28 15:17:04', '2022-01-28 15:18:17'),
(31, 'PYSCHOLOGY', 'SESSION\r\n', '0', 3, '2022-01-29 10:32:34', '2022-01-29 10:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `progress_report_table`
--

CREATE TABLE `progress_report_table` (
  `Id` int(11) NOT NULL,
  `BaseLine` varchar(200) NOT NULL,
  `Goal` varchar(200) NOT NULL,
  `Progress` varchar(200) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress_report_table`
--

INSERT INTO `progress_report_table` (`Id`, `BaseLine`, `Goal`, `Progress`, `FormId`, `CreatedOn`) VALUES
(1, 'Condition True', 'New Goals', '80% progress', 1, '2022-01-03 04:04:34'),
(2, 'ok computer', 'New Goals', '90%', 1, '2022-01-03 04:05:07'),
(3, 'New COnsition', 'IJ', '50%', 1, '2022-01-03 04:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `recommend_patient`
--

CREATE TABLE `recommend_patient` (
  `Id` int(11) NOT NULL,
  `Department_Id` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Doctor_Id` int(11) NOT NULL,
  `Branch_Id` int(11) NOT NULL,
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recommend_patient`
--

INSERT INTO `recommend_patient` (`Id`, `Department_Id`, `Patient_Id`, `Doctor_Id`, `Branch_Id`, `Created_On`) VALUES
(1, 4, 13, 30, 1, '2021-10-20 07:05:20'),
(2, 4, 13, 30, 1, '2021-10-20 07:06:48'),
(3, 4, 13, 30, 1, '2021-10-20 07:08:02'),
(4, 4, 13, 30, 1, '2021-10-20 07:08:51'),
(5, 4, 13, 30, 1, '2021-10-20 07:09:30'),
(6, 4, 13, 30, 1, '2021-10-20 07:10:49'),
(7, 4, 13, 30, 1, '2021-10-20 07:11:24'),
(8, 4, 13, 30, 1, '2021-10-20 07:12:51'),
(9, 4, 13, 30, 1, '2021-10-20 07:28:10'),
(10, 3, 58, 30, 1, '2021-10-20 07:37:09'),
(11, 2, 23, 22, 1, '2021-10-30 06:39:31'),
(12, 4, 13, 30, 1, '2022-01-04 16:51:05'),
(13, 2, 46, 22, 1, '2022-01-29 10:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `recurring_appointment`
--

CREATE TABLE `recurring_appointment` (
  `Id` int(11) NOT NULL,
  `Patient_Id` int(11) NOT NULL,
  `Branch_Id` int(11) NOT NULL,
  `Referred_From` int(11) DEFAULT NULL,
  `Start_Date` date NOT NULL,
  `Days` varchar(10) DEFAULT NULL,
  `Extra_Days` varchar(10) DEFAULT NULL,
  `Fees` float NOT NULL,
  `Note` text NOT NULL,
  `Status` int(11) NOT NULL COMMENT '0: Cancel, 1: Active',
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recurring_appointment`
--

INSERT INTO `recurring_appointment` (`Id`, `Patient_Id`, `Branch_Id`, `Referred_From`, `Start_Date`, `Days`, `Extra_Days`, `Fees`, `Note`, `Status`, `Created_On`) VALUES
(1, 14, 1, 10, '2021-10-13', '25', '02', 6000, '', 1, '2021-10-16 08:44:01'),
(2, 10, 1, 14, '2021-10-20', '', '', 250, 'DAILY PAYMENT', 1, '2021-10-20 06:25:05'),
(3, 13, 1, 14, '2021-10-06', '', '', 4000, 'ALTERNATE DAY ', 1, '2021-10-20 06:43:29'),
(4, 23, 1, 0, '2021-10-22', '', '', 6500, '', 1, '2021-10-30 06:35:04'),
(5, 1, 1, 0, '2021-10-30', '', '', 10000, 'testing entry', 1, '2021-10-30 06:37:19'),
(6, 1, 1, 1, '2022-01-28', '', '', 3480, 'speech therapy', 1, '2022-01-28 11:55:43'),
(7, 1, 1, 1, '2022-01-28', '', '', 3480, 'speech therapy', 1, '2022-01-28 11:55:45'),
(8, 46, 1, 14, '2022-01-29', '', '', 6720, '', 1, '2022-01-29 10:51:55'),
(9, 53, 1, 14, '2022-02-02', '', '', 3360, '', 1, '2022-02-01 10:55:28'),
(10, 18, 1, 14, '2022-02-01', '', '', 2800, '', 1, '2022-02-01 15:03:23'),
(11, 18, 1, 2, '2022-02-01', '', '', 2799, '', 1, '2022-02-01 15:10:06'),
(12, 18, 1, 2, '2022-02-01', '', '', 2799, '', 1, '2022-02-01 15:10:08'),
(13, 6, 1, 2, '2022-02-02', '', '', 800, '', 1, '2022-02-01 15:32:31'),
(14, 16, 1, 0, '2022-02-02', '', '', 500, 'HOME TRAINING', 1, '2022-02-02 11:20:14'),
(15, 16, 1, 0, '2022-02-02', '', '', 500, 'HOME TRAINING', 1, '2022-02-02 11:20:15'),
(16, 8, 1, 2, '2022-02-10', '', '', 400, '', 1, '2022-02-05 10:29:08'),
(17, 8, 1, 2, '2022-02-10', '', '', 400, '', 1, '2022-02-05 10:29:10'),
(18, 18, 1, 3, '2022-02-07', '', '', 350, '', 1, '2022-02-07 11:02:06'),
(19, 1, 1, 1, '2022-02-11', '', '', 100, 'NA', 1, '2022-02-11 11:34:43'),
(20, 1, 1, 1, '2022-02-11', '', '', 300, 'NA', 1, '2022-02-11 11:40:45'),
(21, 1, 1, 1, '2022-02-16', '', '', 400, 'NA', 1, '2022-02-16 15:09:19'),
(22, 1, 1, 0, '2022-02-16', '', '', 700, 'NA', 1, '2022-02-16 16:07:38'),
(23, 1, 1, 1, '2022-02-16', '', '', 400, 'NAAAA', 1, '2022-02-16 16:20:56'),
(24, 3, 1, 1, '2022-02-16', '', '', 900, 'NA', 1, '2022-02-16 16:27:56'),
(25, 7, 1, 1, '2022-02-16', '', '', 900, 'NA', 1, '2022-02-16 16:49:03'),
(26, 5, 1, 2, '2022-02-17', '', '', 800, 'NA', 1, '2022-02-17 13:44:59'),
(27, 2, 1, 2, '2022-03-02', '', '', 100, '', 0, '2022-03-02 16:40:34'),
(28, 3, 1, 3, '2022-03-22', '', '', 100, '100', 0, '2022-03-22 14:37:23'),
(29, 3, 1, 4, '2022-03-22', '', '', 400, '400', 0, '2022-03-22 14:39:16'),
(30, 8, 1, 3, '2022-03-22', '', '', 2000, 'NA', 0, '2022-03-22 16:15:41'),
(31, 3, 1, 5, '2022-03-22', '', '', 400, 'kbhjnk', 0, '2022-03-22 16:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `referred_master`
--

CREATE TABLE `referred_master` (
  `Id` int(11) NOT NULL,
  `Hospital_Name` varchar(100) NOT NULL,
  `Doctor_Name` varchar(100) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Mobile` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Reward` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `DOA` date DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Created_On` datetime NOT NULL DEFAULT current_timestamp(),
  `Last_Update_On` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referred_master`
--

INSERT INTO `referred_master` (`Id`, `Hospital_Name`, `Doctor_Name`, `Address`, `Mobile`, `Email`, `Reward`, `DOB`, `DOA`, `Username`, `Password`, `Created_On`, `Last_Update_On`) VALUES
(1, 'saoji\'s Hospital', 'Dr. saoji', 'Aurangabad', '9822314113', 'saoji@gmail.com', '1', '1985-01-01', '0010-01-01', 'saojihospital', '123456789', '2021-09-25 06:32:14', '2021-09-25 12:13:40'),
(2, 'Chatre Hospital', 'Dr. Chatre', 'Mehkar', '1', '123@gmail.com', '1', '0001-01-01', '0011-01-01', 'chatre', 'chatrespees', '2021-10-07 09:49:26', '2021-10-07 09:49:57'),
(3, 'MGM Hospital', 'Dr. Trupti', '', '8097321687', '123@gmail.com', '1', '2000-01-01', '0001-01-01', '123', '123', '2021-10-12 11:36:25', '2021-10-12 11:36:25'),
(4, ' HOSPITAL', 'Dr. Bilagi', '', '9422207148', '123@gmail.com', '1', '2000-01-01', '0001-01-01', '123', '123', '2021-10-12 11:37:16', '2021-10-12 11:37:16'),
(5, 'HOSPITAL', 'Dr. Rohiwal', '', '9823061251', '123@gmail.com', '1', '2000-01-01', '0001-01-01', '123', '123', '2021-10-12 11:38:13', '2021-10-12 11:38:13'),
(6, 'HOSPITAL', 'Dr. Bhole', '', '9422202663', '123@gmail.com', '1', '0010-01-01', '0001-01-01', '123', '123', '2021-10-12 11:40:02', '2021-10-12 11:40:02'),
(7, 'KPOND', 'Dr. Varsha Vaidya', '', '9326382779', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-12 11:41:30', '2021-10-12 11:41:30'),
(8, 'HOSPITAL', 'Dr. Rajiv Khedkar', '', '9822451255', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-12 11:42:29', '2021-10-12 11:42:29'),
(9, 'HOSPITAL', 'Dr. Ayesh Junaid', '', '9552243531', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-12 11:43:22', '2021-10-12 11:43:22'),
(10, 'HOSPITAL', 'Dr. Iqbal', '', '9028989299', '123@gmail.com', '1', '0001-01-01', '0001-10-01', '123', '123', '2021-10-12 11:44:11', '2021-10-12 11:44:11'),
(11, 'HOSPITAL', 'Dr. Sunil Patki', '', '9623614015', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-12 11:44:52', '2021-10-12 11:44:52'),
(12, 'HOSPITAL', 'Dr. Zoha', '', '1', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-13 06:39:12', '2021-10-13 06:39:12'),
(13, 'HOSPITAL', 'Dr. Laturiya', '', '1', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-13 06:40:05', '2021-10-13 06:40:05'),
(14, 'Self', 'Self', '1', '1', '123@gmail.com', '1', '0011-11-01', '0001-01-01', '123', '123', '2021-10-13 06:43:29', '2021-10-13 06:43:29'),
(15, 'Chirayu Hospital', 'Dr. Vinod Totla', '', '1', '123@gmail.com', '1', '1010-01-01', '0001-01-01', '123', '123', '2021-10-13 06:55:32', '2021-10-13 06:55:32'),
(16, 'HOSPITAL', 'Nagesh Pawar', '', '1', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-13 06:59:47', '2021-10-13 06:59:47'),
(17, 'Shruthy palsikar', 'Shruthy palsikar', '', '1', '123@gmail.com', '1', '0010-10-01', '0001-01-01', '123', '123', '2021-10-13 07:03:15', '2021-10-13 07:03:15'),
(18, 'HOSPITAL', 'Mayur Janghale', '', '1', '123@gmail.com', '1', '0010-01-01', '0001-01-01', '123', '123', '2021-10-13 07:03:48', '2021-10-13 07:03:48'),
(19, 'online', 'Just Dial', '', '1', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-13 11:27:44', '2021-10-13 11:27:44'),
(20, 'Sai Super Speciality Hospital', 'Dr.Sandeep Saraf', '', '1', '123@gmail.com', '1', '0001-01-01', '0001-01-01', '123', '123', '2021-10-13 11:32:35', '2021-10-13 11:32:35'),
(21, 'Aarogyam Bal Rugnalay Hospital', 'Dr.Sunil Sarode', '', '123', '123@gmail.com', 'aa', '1980-01-01', '2021-01-01', 'sunilsarode', 'sunilsarode', '2021-10-18 10:07:05', '2021-10-18 10:07:05'),
(22, 'VIJAY GAJENDRAGADKAR ENT HOSPITAL , JALNA', 'Dr.Gajendragadkar', 'JALNA', '123', '123@gmail.com', '1', '0011-01-01', '0012-01-01', 'gajendragadkar', 'gajendragadkar', '2021-10-18 10:09:20', '2021-10-18 10:10:27'),
(23, 'NOBLE HOSPITAL', 'DR AYESHA JUNAID', 'AURNAGABAD', '9011521218', '123@GMIAL', '-', '1990-11-23', '0001-01-01', '-', '-', '2022-01-28 14:22:18', '2022-01-28 14:22:18'),
(24, '-', 'DR HIMAYATULLAH', '-', '9766224424', '123@GMAIL', '-', '0001-01-01', '0001-01-01', '-', '-', '2022-01-28 15:08:14', '2022-01-28 15:08:14'),
(25, '-', 'CAMP', '-', '9697353510', '123@GMIAL', '-', '0001-01-01', '0001-01-01', '-', '-', '2022-01-28 15:09:05', '2022-01-28 15:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Appoitment_Id` int(11) NOT NULL,
  `Points` int(11) NOT NULL,
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`Id`, `User_Id`, `Appoitment_Id`, `Points`, `Created_On`) VALUES
(1, 29, 2, 1, '2021-10-09 12:51:33'),
(2, 29, 27, 1, '2021-10-13 05:22:25'),
(3, 29, 26, 1, '2021-10-14 05:55:29'),
(4, 29, 29, 1, '2021-10-14 06:10:43'),
(5, 24, 1, 1, '2021-10-15 08:10:51'),
(6, 24, 123, 1, '2021-10-16 05:33:19'),
(7, 24, 126, 1, '2021-10-16 05:39:14'),
(8, 24, 149, 1, '2021-10-16 05:41:41'),
(9, 24, 148, 1, '2021-10-16 11:39:38'),
(10, 24, 145, 1, '2021-10-16 11:41:20'),
(11, 24, 144, 1, '2021-10-16 11:50:12'),
(12, 24, 143, 1, '2021-10-16 11:54:47'),
(13, 24, 142, 1, '2021-10-16 11:56:22'),
(14, 24, 141, 1, '2021-10-16 11:59:47'),
(15, 24, 140, 1, '2021-10-16 12:01:16'),
(16, 24, 146, 1, '2021-10-16 12:03:42'),
(17, 24, 137, 1, '2021-10-16 12:05:14'),
(18, 24, 134, 1, '2021-10-16 12:08:11'),
(19, 24, 132, 1, '2021-10-16 12:09:52'),
(20, 24, 131, 1, '2021-10-16 12:11:36'),
(21, 24, 130, 1, '2021-10-16 12:13:29'),
(22, 24, 129, 1, '2021-10-16 12:14:34'),
(23, 24, 125, 1, '2021-10-16 12:17:37'),
(24, 24, 262, 1, '2021-10-16 12:27:35'),
(25, 24, 189, 1, '2021-10-16 12:37:36'),
(26, 24, 261, 1, '2021-10-16 12:46:45'),
(27, 24, 94, 1, '2021-10-16 12:48:56'),
(28, 24, 164, 1, '2021-10-16 12:49:35'),
(29, 24, 253, 1, '2021-10-16 12:49:55'),
(30, 24, 207, 1, '2021-10-16 12:50:04'),
(31, 24, 161, 1, '2021-10-16 12:50:19'),
(32, 24, 160, 1, '2021-10-16 12:50:30'),
(33, 24, 259, 1, '2021-10-18 10:13:29'),
(34, 24, 257, 1, '2021-10-18 10:13:39'),
(35, 24, 255, 1, '2021-10-18 10:15:06'),
(36, 24, 176, 1, '2021-10-18 10:15:15'),
(37, 24, 258, 1, '2021-10-18 10:17:12'),
(38, 24, 244, 1, '2021-10-18 10:23:40'),
(39, 24, 243, 1, '2021-10-18 10:24:38'),
(40, 24, 139, 1, '2021-10-19 05:29:23'),
(41, 24, 128, 1, '2021-10-19 05:30:26'),
(42, 24, 127, 1, '2021-10-19 05:32:26'),
(43, 24, 16, 1, '2021-10-19 11:42:22'),
(44, 24, 20, 1, '2021-10-19 11:44:00'),
(45, 24, 22, 1, '2021-10-19 11:44:48'),
(46, 24, 37, 1, '2021-10-19 11:46:20'),
(47, 24, 36, 1, '2021-10-19 11:47:04'),
(48, 24, 56, 1, '2021-10-19 11:48:31'),
(49, 24, 77, 1, '2021-10-19 11:51:44'),
(50, 24, 186, 1, '2021-10-19 11:53:39'),
(51, 24, 187, 1, '2021-10-19 11:58:42'),
(52, 24, 242, 1, '2021-10-19 12:00:37'),
(53, 24, 268, 1, '2021-10-19 12:17:31'),
(54, 24, 269, 1, '2021-10-19 12:18:53'),
(55, 24, 270, 1, '2021-10-19 12:19:29'),
(56, 30, 319, 1, '2021-10-20 07:05:20'),
(57, 30, 318, 1, '2021-10-20 07:06:48'),
(58, 30, 317, 1, '2021-10-20 07:08:02'),
(59, 30, 316, 1, '2021-10-20 07:08:51'),
(60, 30, 315, 1, '2021-10-20 07:09:30'),
(61, 30, 314, 1, '2021-10-20 07:10:17'),
(62, 30, 313, 1, '2021-10-20 07:10:49'),
(63, 30, 312, 1, '2021-10-20 07:11:24'),
(64, 30, 311, 1, '2021-10-20 07:12:51'),
(65, 30, 310, 1, '2021-10-20 07:28:10'),
(66, 30, 271, 1, '2021-10-20 07:37:09'),
(67, 24, 298, 1, '2021-10-20 09:38:27'),
(68, 24, 277, 1, '2021-10-20 09:39:02'),
(69, 24, 276, 1, '2021-10-20 09:40:03'),
(70, 24, 275, 1, '2021-10-20 09:40:57'),
(71, 24, 274, 1, '2021-10-20 09:41:55'),
(72, 24, 350, 1, '2021-10-25 09:38:22'),
(73, 24, 349, 1, '2021-10-25 09:39:39'),
(74, 24, 347, 1, '2021-10-25 09:42:09'),
(75, 24, 346, 1, '2021-10-25 09:42:56'),
(76, 24, 348, 1, '2021-10-25 11:24:51'),
(77, 24, 351, 1, '2021-10-26 11:59:58'),
(78, 24, 345, 1, '2021-10-26 12:00:36'),
(79, 24, 344, 1, '2021-10-26 12:01:52'),
(80, 24, 343, 1, '2021-10-26 12:02:29'),
(81, 24, 342, 1, '2021-10-26 12:03:28'),
(82, 24, 320, 1, '2021-10-26 12:16:51'),
(83, 24, 324, 1, '2021-10-26 12:18:35'),
(84, 24, 323, 1, '2021-10-26 12:19:26'),
(85, 24, 321, 1, '2021-10-26 12:19:37'),
(86, 24, 325, 1, '2021-10-26 12:21:32'),
(87, 24, 322, 1, '2021-10-26 12:22:34'),
(88, 24, 326, 1, '2021-10-26 12:23:26'),
(89, 24, 327, 1, '2021-10-26 12:24:09'),
(90, 24, 328, 1, '2021-10-26 12:25:06'),
(91, 24, 329, 1, '2021-10-26 12:44:08'),
(92, 24, 330, 1, '2021-10-26 12:53:07'),
(93, 24, 331, 1, '2021-10-26 12:54:06'),
(94, 24, 332, 1, '2021-10-26 12:54:44'),
(95, 24, 333, 1, '2021-10-26 12:55:56'),
(96, 24, 334, 1, '2021-10-26 12:57:03'),
(97, 24, 335, 1, '2021-10-26 12:58:00'),
(98, 24, 340, 1, '2021-10-26 13:13:01'),
(99, 24, 336, 1, '2021-10-26 13:14:04'),
(100, 24, 337, 1, '2021-10-26 13:14:55'),
(101, 24, 338, 1, '2021-10-26 13:15:45'),
(102, 24, 339, 1, '2021-10-26 13:16:21'),
(103, 24, 341, 1, '2021-10-26 13:17:02'),
(104, 24, 352, 1, '2021-10-26 13:17:47'),
(105, 24, 354, 1, '2021-10-26 13:18:31'),
(106, 24, 353, 1, '2021-10-26 13:19:08'),
(107, 24, 364, 1, '2021-10-29 12:39:56'),
(108, 24, 363, 1, '2021-10-29 12:40:28'),
(109, 24, 362, 1, '2021-10-29 12:40:56'),
(110, 24, 361, 1, '2021-10-29 12:41:25'),
(111, 24, 360, 1, '2021-10-29 12:42:35'),
(112, 24, 357, 1, '2021-10-29 12:45:37'),
(113, 24, 356, 1, '2021-10-29 12:46:23'),
(114, 24, 355, 1, '2021-10-29 12:46:52'),
(115, 22, 372, 1, '2021-10-30 06:39:31'),
(116, 29, 224, 1, '2021-11-18 16:44:40'),
(117, 30, 308, 1, '2022-01-04 16:51:05'),
(118, 22, 415, 1, '2022-01-29 10:53:12'),
(119, 22, 414, 1, '2022-01-29 10:58:20'),
(120, 22, 392, 1, '2022-01-29 11:02:48'),
(121, 22, 496, 1, '2022-03-21 13:35:37'),
(122, 22, 495, 1, '2022-03-21 13:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `rewards_settle`
--

CREATE TABLE `rewards_settle` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Remark` varchar(250) NOT NULL,
  `Points` int(11) NOT NULL,
  `Total_Amount` varchar(10) NOT NULL,
  `Per_Point` varchar(10) NOT NULL,
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slot_master`
--

CREATE TABLE `slot_master` (
  `Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Open_Time` varchar(100) DEFAULT NULL,
  `Close_Time` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot_master`
--

INSERT INTO `slot_master` (`Id`, `User_Id`, `Open_Time`, `Close_Time`) VALUES
(5, 24, '10:00', '11:00'),
(6, 24, '11:00', '12:00'),
(7, 24, '12:00', '13:00'),
(16, 23, '16:06', '16:24'),
(17, 23, '14:24', '16:22');

-- --------------------------------------------------------

--
-- Table structure for table `speech_case_history`
--

CREATE TABLE `speech_case_history` (
  `Id` int(11) NOT NULL,
  `Complaints` varchar(100) NOT NULL,
  `Family_History` varchar(100) NOT NULL,
  `Mother_Health_Pregrancy` varchar(100) NOT NULL,
  `Any_Medications` varchar(100) NOT NULL,
  `Any_Kind_Of_Trauma` varchar(100) NOT NULL,
  `X_Ray_Exposure` varchar(100) NOT NULL,
  `Rh_Factor` varchar(100) NOT NULL,
  `Hypertension` varchar(100) NOT NULL,
  `BP` varchar(100) NOT NULL,
  `Others_Prenatal` varchar(100) NOT NULL,
  `Delivery_Place` varchar(100) NOT NULL,
  `Term_Select` varchar(100) NOT NULL,
  `No_Of_Weeks` varchar(100) NOT NULL,
  `Type_Of_Delivery` varchar(100) NOT NULL,
  `Birth_Color` varchar(100) NOT NULL,
  `Birth_Cry` varchar(100) NOT NULL,
  `Birth_Weight` varchar(100) NOT NULL,
  `Other_Perinatal` varchar(100) NOT NULL,
  `Feeding` varchar(100) NOT NULL,
  `Other_Feeding` varchar(100) NOT NULL,
  `Any_Complications` varchar(100) NOT NULL,
  `Any_Remarks` varchar(100) NOT NULL,
  `Neck_Control` varchar(100) NOT NULL,
  `Turn_Over` varchar(100) NOT NULL,
  `Crawling` varchar(100) NOT NULL,
  `Sitting` varchar(100) NOT NULL,
  `Standing` varchar(100) NOT NULL,
  `Walking` varchar(100) NOT NULL,
  `Handedness` varchar(100) NOT NULL,
  `Toilet_Control` varchar(100) NOT NULL,
  `Hand_Preference` varchar(100) NOT NULL,
  `Undressing` varchar(100) NOT NULL,
  `Dressing` varchar(100) NOT NULL,
  `Remarks_Motor` varchar(100) NOT NULL,
  `Pincer_Grasp` varchar(100) NOT NULL,
  `Palmer_Grasp` varchar(100) NOT NULL,
  `Eye_Hand_Coordination` varchar(100) NOT NULL,
  `Cooing` varchar(100) NOT NULL,
  `Babbling` varchar(100) NOT NULL,
  `First_Word` varchar(100) NOT NULL,
  `Word_Phases` varchar(100) NOT NULL,
  `Sentence_Level` varchar(100) NOT NULL,
  `Remarks_Sl_Dev` varchar(100) NOT NULL,
  `History_IPT` varchar(100) NOT NULL,
  `Vision` varchar(100) NOT NULL,
  `Remarks_Vision` varchar(100) NOT NULL,
  `Hearing` varchar(100) NOT NULL,
  `Remarks_Hearing` varchar(100) NOT NULL,
  `Blowing` varchar(100) NOT NULL,
  `Swallowing` varchar(100) NOT NULL,
  `V_Chewing` varchar(100) NOT NULL,
  `Sucking` varchar(100) NOT NULL,
  `V_Biting` varchar(100) NOT NULL,
  `Lip_Structure` varchar(100) NOT NULL,
  `Puckering` varchar(100) NOT NULL,
  `Rounding` varchar(100) NOT NULL,
  `Spreading` varchar(100) NOT NULL,
  `Teeth_Structure` varchar(100) NOT NULL,
  `T_Biting` varchar(100) NOT NULL,
  `T_Chewing` varchar(100) NOT NULL,
  `Tongue_Structure` varchar(100) NOT NULL,
  `Elevation` varchar(100) NOT NULL,
  `Lateral_Movements` varchar(100) NOT NULL,
  `Protrusion` varchar(100) NOT NULL,
  `Retraction` varchar(100) NOT NULL,
  `Hard_Palate_Structure` varchar(100) NOT NULL,
  `Hard_Palate_Function` varchar(100) NOT NULL,
  `Soft_Palate_Structure` varchar(100) NOT NULL,
  `Symmetrical_Movements` varchar(100) NOT NULL,
  `Uvula_Structure` varchar(100) NOT NULL,
  `Uvula_Function` varchar(100) NOT NULL,
  `Jaw_Structure` varchar(100) NOT NULL,
  `Jaw_Function` varchar(100) NOT NULL,
  `Drooling` varchar(100) NOT NULL,
  `Attention` varchar(100) NOT NULL,
  `Eye_Contact` varchar(100) NOT NULL,
  `Name_Call_Response` varchar(100) NOT NULL,
  `Sitting_Tolerance` varchar(100) NOT NULL,
  `Compliance` varchar(100) NOT NULL,
  `Pointing` varchar(100) NOT NULL,
  `Turn_Taking` varchar(100) NOT NULL,
  `Language_Comprehension` varchar(100) NOT NULL,
  `Language_Expression` varchar(100) NOT NULL,
  `Mode_Of_Communication` varchar(100) NOT NULL,
  `Greetings` varchar(100) NOT NULL,
  `Engages_In_Interaction` varchar(100) NOT NULL,
  `Initiate_Interaction` varchar(100) NOT NULL,
  `Social_Smile` varchar(100) NOT NULL,
  `Solo_Play` varchar(100) NOT NULL,
  `Peer_Play` varchar(100) NOT NULL,
  `Instrumental_Play` varchar(100) NOT NULL,
  `Imaginative_Play` varchar(100) NOT NULL,
  `Narration` varchar(100) NOT NULL,
  `Topic_Initiation` varchar(100) NOT NULL,
  `Topic_Maintenance` varchar(100) NOT NULL,
  `Topic_Termination` varchar(100) NOT NULL,
  `Object_Permanence` varchar(100) NOT NULL,
  `Object_Use` varchar(100) NOT NULL,
  `Sequencing` varchar(100) NOT NULL,
  `Selection` varchar(100) NOT NULL,
  `Object_To_Object` varchar(100) NOT NULL,
  `Object_To_Picture` varchar(100) NOT NULL,
  `Categorization` varchar(100) NOT NULL,
  `Reasoning` varchar(100) NOT NULL,
  `Judgment` varchar(100) NOT NULL,
  `Gender_Concept` varchar(100) NOT NULL,
  `Money_Concept` varchar(100) NOT NULL,
  `Appearance_Disappearance` varchar(100) NOT NULL,
  `Possession` varchar(100) NOT NULL,
  `Rejection` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Denial` varchar(100) NOT NULL,
  `Imitation` varchar(100) NOT NULL,
  `Language_Test_Results` varchar(100) NOT NULL,
  `Articulation` varchar(100) NOT NULL,
  `Voice` varchar(100) NOT NULL,
  `Fluency` varchar(100) NOT NULL,
  `Speech_Test_Results` varchar(100) NOT NULL,
  `Academic_Skils` varchar(100) NOT NULL,
  `Reading` varchar(100) NOT NULL,
  `Writing` varchar(100) NOT NULL,
  `Arithmetic` varchar(100) NOT NULL,
  `Copying` varchar(100) NOT NULL,
  `Behavioural_Skills` varchar(100) NOT NULL,
  `Diagnostic_Formulation` varchar(100) NOT NULL,
  `Recommendations` varchar(100) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speech_case_history`
--

INSERT INTO `speech_case_history` (`Id`, `Complaints`, `Family_History`, `Mother_Health_Pregrancy`, `Any_Medications`, `Any_Kind_Of_Trauma`, `X_Ray_Exposure`, `Rh_Factor`, `Hypertension`, `BP`, `Others_Prenatal`, `Delivery_Place`, `Term_Select`, `No_Of_Weeks`, `Type_Of_Delivery`, `Birth_Color`, `Birth_Cry`, `Birth_Weight`, `Other_Perinatal`, `Feeding`, `Other_Feeding`, `Any_Complications`, `Any_Remarks`, `Neck_Control`, `Turn_Over`, `Crawling`, `Sitting`, `Standing`, `Walking`, `Handedness`, `Toilet_Control`, `Hand_Preference`, `Undressing`, `Dressing`, `Remarks_Motor`, `Pincer_Grasp`, `Palmer_Grasp`, `Eye_Hand_Coordination`, `Cooing`, `Babbling`, `First_Word`, `Word_Phases`, `Sentence_Level`, `Remarks_Sl_Dev`, `History_IPT`, `Vision`, `Remarks_Vision`, `Hearing`, `Remarks_Hearing`, `Blowing`, `Swallowing`, `V_Chewing`, `Sucking`, `V_Biting`, `Lip_Structure`, `Puckering`, `Rounding`, `Spreading`, `Teeth_Structure`, `T_Biting`, `T_Chewing`, `Tongue_Structure`, `Elevation`, `Lateral_Movements`, `Protrusion`, `Retraction`, `Hard_Palate_Structure`, `Hard_Palate_Function`, `Soft_Palate_Structure`, `Symmetrical_Movements`, `Uvula_Structure`, `Uvula_Function`, `Jaw_Structure`, `Jaw_Function`, `Drooling`, `Attention`, `Eye_Contact`, `Name_Call_Response`, `Sitting_Tolerance`, `Compliance`, `Pointing`, `Turn_Taking`, `Language_Comprehension`, `Language_Expression`, `Mode_Of_Communication`, `Greetings`, `Engages_In_Interaction`, `Initiate_Interaction`, `Social_Smile`, `Solo_Play`, `Peer_Play`, `Instrumental_Play`, `Imaginative_Play`, `Narration`, `Topic_Initiation`, `Topic_Maintenance`, `Topic_Termination`, `Object_Permanence`, `Object_Use`, `Sequencing`, `Selection`, `Object_To_Object`, `Object_To_Picture`, `Categorization`, `Reasoning`, `Judgment`, `Gender_Concept`, `Money_Concept`, `Appearance_Disappearance`, `Possession`, `Rejection`, `Location`, `Denial`, `Imitation`, `Language_Test_Results`, `Articulation`, `Voice`, `Fluency`, `Speech_Test_Results`, `Academic_Skils`, `Reading`, `Writing`, `Arithmetic`, `Copying`, `Behavioural_Skills`, `Diagnostic_Formulation`, `Recommendations`, `FormId`, `CreatedOn`) VALUES
(1, 'jkoof', 'lkjhgv', 'ikop', 'iutfy', 'yhjko', 'piy', 'fc', 'hjk', 'opgcd', 'xfghjk', 'home', 'full term', '', 'forceps', 'normal', 'immediate', 'hji', 'gvf', 'other', 'dedgfhtgrewdsf ', 'jio', 'gufy', 'gyhuji', 'hgutf', 'gyhjiko', 'pgtf', '8', 'u97678', 'Rt', 'partial', 'Right', 'ojhgv', 'hujio', 'uyt67', 'possible', 'possible', 'adequate', 'vhjk', 'jkbh', 'jk', 'ojhg', 'ikop', 'Sdredsfgvb', 'iokp', 'Normal', 'jk', 'Normal', 'ghjik', 'opugy', 'uhu', 'jko', 'hg', 'hko', 'jhgvjij', 'gyg', 'yi9876', '89', '768', '6578', '9iouh', 'jkjkbh', 'jkljhygu', 'tygu9i08', '76787', '675yuio', 'jhbjk', 'jihyg', 'yhujio9', '8768976y', 'iopiu', 'hjikij', 'hbji', 'kojygu', 'ij', 'ij', 'ogyuy', 'ijjo', 'i', 'jyt', 'gyhujiko', 'gvfcgh', 'jklokp', 'gfcv', 'Verbal', 'gvfc', 'gvhjkl', 'hbgv', 'bhnkl', 'jhbgvg', 'bhkl[', 'kiohgvg', 'hjklo', 'kiugg', 'jkoki', 'gvh', 'jikopij', 'hgv', 'jkp', 'hbgvyf', 'ygh', 'jkoibgv', '', 'kpooi', 'ugt', '09876', '689', 'uh', 'jkhb', 'gvhji', 'koiuhy', 'g78', 'u9jk', 'khbgv', 'hjkpoib', 'ghji', '90u87', '88u9ygu', 'kkpiu', 'ytghj', 'kbgv', 'hji', 'kjhb', 'huy767', 'yi', 'ijugvh', 'jkkpjnhb', 49, '2022-01-06 06:31:38'),
(2, 'DOES NOT COMMUNICATE , DOES NOT REPEAT', 'SINGLE CHILD ', 'GOOD', 'NO', 'NO', 'NO', 'NO', 'NO', 'NORMAL', '-', 'hospital', 'full term', '0', 'LSCS', 'normal', 'immediate', '3.7KG', '-', 'breast feeding', '', '-', '-', '-', '-', '-', '-', '-', '-', 'Rt', 'partial', 'Right', '-', '-', '-', 'possible', 'possible', 'adequate', '-', '-', '-', '-', '-', '-', '-', 'Normal', '-', 'Normal', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'INADEQUATE', 'POOR', 'NO', 'INADEQUATE', 'NO', 'NO', 'NO', '-', '-', 'Verbal', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 50, '2022-02-01 09:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `speech_lesson_plan_table`
--

CREATE TABLE `speech_lesson_plan_table` (
  `Id` int(11) NOT NULL,
  `Goal` varchar(200) NOT NULL,
  `BaseLine` varchar(200) NOT NULL,
  `Activity` varchar(200) NOT NULL,
  `Reinforcement` varchar(200) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speech_lesson_plan_table`
--

INSERT INTO `speech_lesson_plan_table` (`Id`, `Goal`, `BaseLine`, `Activity`, `Reinforcement`, `FormId`, `CreatedOn`) VALUES
(1, 'New Goals', 'Condition True', 'New Activity', 'Reforce', 2, '2022-01-03 04:13:57'),
(2, 'ded', 'hoiugyhjn', 'uhijniuyh', '57687', 2, '2022-01-03 04:14:12'),
(3, '3erfdvc', '123123123', '12123123', '23534534', 2, '2022-01-03 04:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `speech_pre_therapy`
--

CREATE TABLE `speech_pre_therapy` (
  `Id` int(11) NOT NULL,
  `Brief_History` varchar(200) NOT NULL,
  `Lip_Structure` varchar(200) NOT NULL,
  `Puckering` varchar(200) NOT NULL,
  `Rounding` varchar(200) NOT NULL,
  `Spreading` varchar(200) NOT NULL,
  `Teeth_Structure` varchar(200) NOT NULL,
  `T_Biting` varchar(200) NOT NULL,
  `T_Chewing` varchar(200) NOT NULL,
  `Tongue_Structure` varchar(200) NOT NULL,
  `Elevation` varchar(200) NOT NULL,
  `Lateral_Movements` varchar(200) NOT NULL,
  `Protrusion` varchar(200) NOT NULL,
  `Retraction` varchar(200) NOT NULL,
  `Hard_Palate_Structure` varchar(200) NOT NULL,
  `Hard_Palate_Function` varchar(200) NOT NULL,
  `Soft_Palate_Structure` varchar(200) NOT NULL,
  `Symmetrical_Movements` varchar(200) NOT NULL,
  `Uvula_Structure` varchar(200) NOT NULL,
  `Uvula_Function` varchar(200) NOT NULL,
  `Jaw_Structure` varchar(200) NOT NULL,
  `Jaw_Function` varchar(200) NOT NULL,
  `Drooling` varchar(200) NOT NULL,
  `Blowing` varchar(200) NOT NULL,
  `Swallowing` varchar(200) NOT NULL,
  `V_Chewing` varchar(200) NOT NULL,
  `Sucking` varchar(200) NOT NULL,
  `V_Biting` varchar(200) NOT NULL,
  `Attention` varchar(200) NOT NULL,
  `Eye_Contact` varchar(200) NOT NULL,
  `Name_Call_Response` varchar(200) NOT NULL,
  `Sitting_Tolerance` varchar(200) NOT NULL,
  `Compliance` varchar(200) NOT NULL,
  `Pointing` varchar(200) NOT NULL,
  `Turn_Taking` varchar(200) NOT NULL,
  `Language_Comprehension` varchar(200) NOT NULL,
  `Language_Expression` varchar(200) NOT NULL,
  `Mode_Of_Communication` varchar(200) NOT NULL,
  `Greetings` varchar(200) NOT NULL,
  `Engages_In_Interaction` varchar(200) NOT NULL,
  `Initiate_Interaction` varchar(200) NOT NULL,
  `Social_Smile` varchar(200) NOT NULL,
  `Solo_Play` varchar(200) NOT NULL,
  `Peer_Play` varchar(200) NOT NULL,
  `Instrumental_Play` varchar(200) NOT NULL,
  `Imaginative_Play` varchar(200) NOT NULL,
  `Narration` varchar(200) NOT NULL,
  `Topic_Initiation` varchar(200) NOT NULL,
  `Topic_Maintenance` varchar(200) NOT NULL,
  `Topic_Termination` varchar(200) NOT NULL,
  `Object_Permanence` varchar(200) NOT NULL,
  `Object_Use` varchar(200) NOT NULL,
  `Sequencing` varchar(200) NOT NULL,
  `Selection` varchar(200) NOT NULL,
  `Object_To_Object` varchar(200) NOT NULL,
  `Object_To_Picture` varchar(200) NOT NULL,
  `Categorization` varchar(200) NOT NULL,
  `Reasoning` varchar(200) NOT NULL,
  `Judgment` varchar(200) NOT NULL,
  `Gender_Concept` varchar(200) NOT NULL,
  `Money_Concept` varchar(200) NOT NULL,
  `Appearance_Disappearance` varchar(200) NOT NULL,
  `Possession` varchar(200) NOT NULL,
  `Rejection` varchar(200) NOT NULL,
  `Location` varchar(400) NOT NULL,
  `Denial` varchar(200) NOT NULL,
  `Imitation` varchar(200) NOT NULL,
  `Language_Test_Results` varchar(200) NOT NULL,
  `Articulation` varchar(200) NOT NULL,
  `Voice` varchar(200) NOT NULL,
  `Fluency` varchar(200) NOT NULL,
  `Speech_Test_Results` varchar(200) NOT NULL,
  `Academic_Skils` varchar(200) NOT NULL,
  `Remarks` varchar(200) NOT NULL,
  `Selected_Goals` varchar(200) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `speech_pre_therapy`
--

INSERT INTO `speech_pre_therapy` (`Id`, `Brief_History`, `Lip_Structure`, `Puckering`, `Rounding`, `Spreading`, `Teeth_Structure`, `T_Biting`, `T_Chewing`, `Tongue_Structure`, `Elevation`, `Lateral_Movements`, `Protrusion`, `Retraction`, `Hard_Palate_Structure`, `Hard_Palate_Function`, `Soft_Palate_Structure`, `Symmetrical_Movements`, `Uvula_Structure`, `Uvula_Function`, `Jaw_Structure`, `Jaw_Function`, `Drooling`, `Blowing`, `Swallowing`, `V_Chewing`, `Sucking`, `V_Biting`, `Attention`, `Eye_Contact`, `Name_Call_Response`, `Sitting_Tolerance`, `Compliance`, `Pointing`, `Turn_Taking`, `Language_Comprehension`, `Language_Expression`, `Mode_Of_Communication`, `Greetings`, `Engages_In_Interaction`, `Initiate_Interaction`, `Social_Smile`, `Solo_Play`, `Peer_Play`, `Instrumental_Play`, `Imaginative_Play`, `Narration`, `Topic_Initiation`, `Topic_Maintenance`, `Topic_Termination`, `Object_Permanence`, `Object_Use`, `Sequencing`, `Selection`, `Object_To_Object`, `Object_To_Picture`, `Categorization`, `Reasoning`, `Judgment`, `Gender_Concept`, `Money_Concept`, `Appearance_Disappearance`, `Possession`, `Rejection`, `Location`, `Denial`, `Imitation`, `Language_Test_Results`, `Articulation`, `Voice`, `Fluency`, `Speech_Test_Results`, `Academic_Skils`, `Remarks`, `Selected_Goals`, `FormId`, `CreatedOn`) VALUES
(1, 'hjgfcvhbj', 'hbgbjn', 'hbj', 'nnhb', 'nkjbh', 'k', 'hbgbj', 'nhj ', 'nkmjnhb', 'oij', 'nh', 'inhjn', 'kihb', 'jioj', 'nhj', 'inh', 'jjn', 'no', 'ewfrvgrfd', 'oihj', 'kjn', 'kkjb', 'kj', 'bk', 'bjj', 'nkb', 'kn', '', 'nohb', 'guihg', 'hui', 'gvhi', 'jough', 'uihg', 'ijuhgtytftguhjik', 'ouiygijuhg', 'Verbal', 'gijouhijokpl', 'hbjio', 'hbb', 'jiohbh', 'jiu', 'ijou', 'bhhui', 'hgi', 'gh', 'juhg', 'uhyg', 'hijh', 'hjb', 'j', 'vjjh', 'jhb', 'iuhb', 'jio', 'bhgh', 'iojhbj', 'hjiofrdgrewfdvefrdg', 'hbji', 'obhg', 'jiobh', 'hjj', 'bb', 'nkbj', 'vhij', 'ikl', 'mn jb', 'uhg', 'kj', 'hbb', 'j njk', 'hbgjwerfgtfyghj', 'nhb', 'rfegthyujjggtfrftyuyiyggvf', 32, '2022-01-04 06:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `stuttering_proforma`
--

CREATE TABLE `stuttering_proforma` (
  `Id` int(11) NOT NULL,
  `Onset` varchar(500) NOT NULL,
  `Age_Onset` varchar(500) NOT NULL,
  `First_Notice_By` varchar(500) NOT NULL,
  `Relationship` varchar(500) NOT NULL,
  `How_Long` varchar(500) NOT NULL,
  `When_Do` varchar(500) NOT NULL,
  `Self_Reaction_to_the_problem` varchar(500) NOT NULL,
  `Parent_Reaction_to_the_problem` varchar(500) NOT NULL,
  `More_Situations` varchar(500) NOT NULL,
  `Less_Situations` varchar(500) NOT NULL,
  `Same_Situations` varchar(500) NOT NULL,
  `More_Individuals` varchar(500) NOT NULL,
  `Less_Individuals` varchar(500) NOT NULL,
  `Same_Individuals` varchar(500) NOT NULL,
  `At_Begining_Other_Sentence` varchar(500) NOT NULL,
  `Some_Spcific_SWL` varchar(500) NOT NULL,
  `Anticipation` varchar(500) NOT NULL,
  `Avoidance_Behaviour` varchar(500) NOT NULL,
  `Reported` varchar(500) NOT NULL,
  `Observed` varchar(500) NOT NULL,
  `Recording_Date` date NOT NULL,
  `Reference_No` varchar(500) NOT NULL,
  `Speak_No_Of_Prolongations` int(11) NOT NULL,
  `Read_No_Of_Prolongations` int(11) NOT NULL,
  `Speak_No_Of_Repetitions` int(11) NOT NULL,
  `Read_No_Of_Repetitions` int(11) NOT NULL,
  `Speak_No_Of_Hesitations` int(11) NOT NULL,
  `Read_No_Of_Hesitations` int(11) NOT NULL,
  `Speak_Total_No_Of_Blocks` int(11) NOT NULL,
  `Read_Total_No_Of_Blocks` int(11) NOT NULL,
  `Rate_Of_Speech` varchar(500) NOT NULL,
  `Behaviour_Observed_During_Silent_Reading` varchar(500) NOT NULL,
  `MPD` varchar(500) NOT NULL,
  `Secondaries` varchar(500) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  `FormId` int(11) NOT NULL,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuttering_proforma`
--

INSERT INTO `stuttering_proforma` (`Id`, `Onset`, `Age_Onset`, `First_Notice_By`, `Relationship`, `How_Long`, `When_Do`, `Self_Reaction_to_the_problem`, `Parent_Reaction_to_the_problem`, `More_Situations`, `Less_Situations`, `Same_Situations`, `More_Individuals`, `Less_Individuals`, `Same_Individuals`, `At_Begining_Other_Sentence`, `Some_Spcific_SWL`, `Anticipation`, `Avoidance_Behaviour`, `Reported`, `Observed`, `Recording_Date`, `Reference_No`, `Speak_No_Of_Prolongations`, `Read_No_Of_Prolongations`, `Speak_No_Of_Repetitions`, `Read_No_Of_Repetitions`, `Speak_No_Of_Hesitations`, `Read_No_Of_Hesitations`, `Speak_Total_No_Of_Blocks`, `Read_Total_No_Of_Blocks`, `Rate_Of_Speech`, `Behaviour_Observed_During_Silent_Reading`, `MPD`, `Secondaries`, `Remarks`, `FormId`, `CreatedOn`) VALUES
(1, 'gradual', '34', 'gbhjn', 'gybhj', 'kgvhb', 'jnkg', 'bhjnkgy', 'vbhjnk', 'gvbhnm', 'gvybhj', 'kgb', 'hjnm', 'gbhnm', 'bgghj', '', 'bhunj', 'hnj', 'huj', 'uhj', 'jub', '2022-01-13', '', 300, 788, 89, 99, 881, 90, 1270, 977, 'uyhijkm', 'nijmk', 'uhnj', 'kuhnijm', 'khbnjmk', 28, '2022-01-04 02:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Billing_Address` text NOT NULL,
  `City` text NOT NULL,
  `State` varchar(200) NOT NULL,
  `Pin` varchar(10) NOT NULL,
  `Contact_Name` varchar(200) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_Id`, `Name`, `Billing_Address`, `City`, `State`, `Pin`, `Contact_Name`, `Designation`, `Mobile`, `Email`, `Created_On`) VALUES
(1, 'name demo', 'SEVEN HILL', 'Aurangabad', 'Maharashtra', '431001', 'IRSHAD', 'Audiologist', '1234567899', '', '2022-01-03 18:09:22'),
(2, 'sonova', 'spees, aurangabad', 'mumbai', 'maharashtra', '', 'sanket', 'marketing manager', '', '', '2022-01-04 15:23:03'),
(3, 'sivantos', 'spees aurangabd', 'mumbai', 'maharashtra', '', 'ayaz', 'marketing manager', '', '', '2022-01-04 15:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Branch_Id` int(11) DEFAULT NULL,
  `Department_Id` int(11) DEFAULT NULL,
  `Aadhar` varchar(20) DEFAULT NULL,
  `Pan` varchar(15) DEFAULT NULL,
  `Designation` varchar(100) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Profile_Image` varchar(200) DEFAULT NULL,
  `RCI` varchar(100) NOT NULL DEFAULT 'document.png',
  `Address` text DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `DOJ` varchar(100) DEFAULT NULL,
  `DOA` varchar(100) DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Weekly_Off` varchar(100) DEFAULT NULL,
  `Morning_Open_Time` time DEFAULT NULL,
  `Morning_Close_Time` time DEFAULT NULL,
  `Noon_Open_Time` time DEFAULT NULL,
  `Noon_Close_Time` time DEFAULT NULL,
  `Evening_Open_Time` time DEFAULT NULL,
  `Evening_Close_Time` time DEFAULT NULL,
  `Hospital_Name` varchar(200) DEFAULT NULL,
  `Hospital_Address` text DEFAULT NULL,
  `Leave` int(11) DEFAULT NULL,
  `Target` int(11) DEFAULT NULL,
  `Is_Active` int(11) NOT NULL DEFAULT 1,
  `Role` int(11) NOT NULL DEFAULT 0 COMMENT '0: Wrong\r\n1:Admin\r\n2:Internal Doctor\r\n3:External Doctor\r\n4:Reception\r\n5:Telecaller',
  `Created_On` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Branch_Id`, `Department_Id`, `Aadhar`, `Pan`, `Designation`, `Name`, `Username`, `Password`, `Email`, `Profile_Image`, `RCI`, `Address`, `State`, `City`, `Gender`, `DOB`, `DOJ`, `DOA`, `Mobile`, `Weekly_Off`, `Morning_Open_Time`, `Morning_Close_Time`, `Noon_Open_Time`, `Noon_Close_Time`, `Evening_Open_Time`, `Evening_Close_Time`, `Hospital_Name`, `Hospital_Address`, `Leave`, `Target`, `Is_Active`, `Role`, `Created_On`) VALUES
(1, NULL, NULL, '', '', '', 'shahed shaikh', 'admin', 'admin', '', NULL, 'document.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-06-29 07:01:07'),
(22, 1, NULL, '', NULL, '', 'Sahiba Shaikh', 'reception', 'reception', '', 'user.png', 'document.png', 'Pundlik nagar, husain colony, lane no.9 garkheda parisar, aurangabad', 'MAHARASHTRA', 'AURANGABAD', 'Female', '', '', '', '9923650286', '', '10:00:00', '07:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 0, NULL, 1, 4, '2021-09-25 06:29:16'),
(23, 1, 4, '908025540313', NULL, 'Audiologist & Speech Language Pathologist', 'SHARVARI DESHMUKH', 'sharvari', 'sharvari03', 'deshmukhshar@gmail.com', 'user.png', 'document.png', 'C/O Mukndarao deshmukh, Sonala PO, Sangrampur, Buldhana - 445204', 'Maharashtra', 'Aurangabad', 'Female', '1999-09-06', '2021-08-17', '', '9404508424', '', '10:00:00', '19:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 0, 0, 1, 2, '2021-10-01 05:28:13'),
(24, 1, 1, '277388394454', NULL, 'Audiologist', 'SIRAJ P', 'sirajp', 'sirajpsirajp', 'sirajpchalil@gmail.com', '6544f765d2a22b04526aa94eb36fb77a.jpeg', 'document.png', '', 'Kerala', 'Calicut', 'Male', '1996-06-02', '2020-11-11', '', '8086506071', '', '10:00:00', '19:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 0, 0, 1, 2, '2021-10-01 05:33:54'),
(25, 2, NULL, '', NULL, '', 'Vinay', 'vinaysarkatte', 'vinay3110', 'vinayspees3110@gmail.com', 'user.png', 'document.png', '', 'Maharashtra', 'Mehkar', 'Male', '', '', '', '9689891058', '', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 0, 0, 1, 6, '2021-10-01 05:43:49'),
(26, 1, 2, '764365296468', NULL, 'Physiotherapist', 'SHRUTI', 'shruti', 'shruti008', 'shruti.palshikar17@gmail.com', '97f492978b4f9a5fee39dcece892890d.jpeg', 'document.png', '', 'Maharashtra', 'Aurangabad', 'Female', '1995-03-17', '2020-01-20', '', '9834631517', '', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'SPees early Intervention Centre', 'ni', 0, 0, 1, 3, '2021-10-01 05:46:20'),
(27, 1, 2, '', NULL, 'Physiotherapist', 'MAYUR JANGALE', 'mayurjangale', 'mayur111', '', 'user.png', 'document.png', '', 'Maharashtra', 'Aurangabad', NULL, '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'SPees Early Intervention Centre', 'ni', 0, 0, 1, 3, '2021-10-01 05:47:38'),
(28, 1, 2, '', NULL, 'Physiotherapist', 'NEHA', 'neha123', 'neha123', '', 'user.png', 'document.png', '', 'Maharashtra', 'Aurangabad', 'Female', '', '', '', '', '', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'nil', 'nil', 0, 0, 1, 3, '2021-10-01 05:50:11'),
(29, 1, 1, '', NULL, 'Audiologist', 'IRSHAD K V', 'irshad', 'aslp015', 'audiologist1317@gmail.com', 'user.png', 'document.png', '', 'Kerala', 'Malappuram', 'Male', '', '', '', '6238032611', '', '10:00:00', '19:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 0, 0, 1, 2, '2021-10-01 05:51:57'),
(30, 1, 4, '', NULL, 'speech therapist', 'NAGESH PAWAR', 'nagesh', 'NAGESH12', 'ngpawar1989@gmail.com', 'user.png', 'document.png', 'Pra. Dangri. Tel- Amalner DIST- Jalgoan  425402', 'Maharashtra', 'Jalgaon', 'Male', '1989-08-06', '', '', '8605207895', '', '10:00:00', '19:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 0, 0, 1, 2, '2021-10-01 05:54:32'),
(31, 3, NULL, '', NULL, '', 'UMESH', 'umeshhirwale', 'UMESH111', '1199umesh@gmail.com', 'user.png', 'document.png', '', 'Maharashtra', 'Aurangabad', 'Male', '', '', '', '0', '', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 0, 0, 1, 6, '2021-10-01 06:16:36'),
(32, 1, 3, '768856879734', NULL, 'Psychologist', 'Apoorva Govindrao Shelke', 'apoorva', 'apoorva19', 'apurva1921999@gmail.com', '0190e9a73cbe699791ee45be5638ee5d.jpg', 'document.png', 'MIDC, Railway station, Chakravani Colony- 431005', 'Maharashtra', 'Aurangabad', 'Female', '1999-02-19', '2021-09-27', '', '8983995653', '', '10:00:00', '14:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'NA', 'NA', 0, 0, 1, 3, '2021-10-01 11:27:23'),
(33, 1, 2, '-3', NULL, 'Psychologist', 'KANHAIYA SOLANKE', 'kanhaiya', 'kanhaiya9921', 'kanhaiyasolanke18@gmail.com', 'df196c411bf940b155d83dd7e5c7b4bc.jpeg', 'document.png', 'AT POST NAGHTHANA, TALUKA WASHIM,444510', 'Maharashtra', 'Aurangabad', 'Male', '1992-07-18', '', '', '9921939672', '', '10:00:00', '19:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 'SPees Early Intervention Centre', 'NA', 0, 0, 1, 3, '2021-10-01 11:55:57'),
(34, 1, NULL, '410264828162', NULL, '', 'MANSI SANJAY KADAM', 'mansi', 'mansi@123', 'manseesanjaykadam@gmail.com', 'user.png', 'document.png', 'Waluj', 'MAHARASHTRA', 'AURANGABAD', 'Female', '', '2021-09-06', '', '7058068709', '', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', NULL, NULL, 0, NULL, 1, 4, '2021-10-19 06:12:31'),
(35, 1, 3, '123456789', NULL, 'GRADUATION IN PSYCHOLOGY', 'APURVA GOVINDRAO SHELKE', 'APURVA', 'APURVA05', 'apurva1921999@GMAIL.COM', 'user.png', 'document.png', 'CHAKRAPANI SOCIETY MIDC COLONY RAILWAY STATION ROAD AURNAGABAD', '', '', 'Female', '1999-02-19', '2021-09-25', '', '8983995653', '', '10:00:00', '11:00:00', '12:00:00', '14:00:00', '16:00:00', '19:00:00', NULL, NULL, 1, 1, 1, 2, '2022-02-01 14:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `websitecontacts`
--

CREATE TABLE `websitecontacts` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Phone` varchar(200) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `SupportOptions` varchar(200) DEFAULT NULL,
  `HospitalName` varchar(200) DEFAULT NULL,
  `Root` varchar(200) NOT NULL,
  `Status` int(10) NOT NULL DEFAULT 0,
  `CreatedOn` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `websitecontacts`
--

INSERT INTO `websitecontacts` (`Id`, `Name`, `Email`, `Phone`, `Message`, `SupportOptions`, `HospitalName`, `Root`, `Status`, `CreatedOn`) VALUES
(4, 'Rohit Pandit', 'rohit@gmail.com', '7038415053', '3wertdgv', NULL, NULL, 'Contact Us', 1, '2021-12-31 07:30:32'),
(5, 'Sunita', 'sunita@gmail.com', '9898099887', 'New Lines', 'Physiotherapy', NULL, 'Support', 1, '2022-01-01 07:59:45'),
(6, 'Adesh MIshra', 'adesh@gmail.com', '8787676788', 'New Comments', NULL, 'Shree Hospital', 'Partner', 1, '2022-01-01 12:03:49'),
(7, 'SIRAJ P', 'sirajpchalil@gmail.com', '', 'testing', NULL, 'demo', 'Partner', 1, '2022-01-04 09:50:11'),
(8, 'SIRAJ P', 'sirajpchalil@gmail.com', '', 'checking demo', NULL, NULL, 'Contact Us', 1, '2022-01-04 09:50:10'),
(9, 'Ritesh', 'karitesh@gmail.com', '8379906666', 'this is testing msg', NULL, 'Ritesh Hospital', 'Partner', 1, '2022-01-04 09:50:13'),
(10, 'Waymn', '5qr94cs1@icloud.com', '81893733727', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/yyccj9hw', NULL, NULL, 'Contact Us', 0, '2022-01-04 12:27:37'),
(11, 'Waymn', '60b3i1m7@icloud.com', '88316858697', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/y3kvhlaw', NULL, NULL, 'Contact Us', 0, '2022-01-04 23:46:27'),
(12, 'jagdish pandhare', 'jagdishpandhare678@gmail.com', '', 'i am 18 years old but i can\'t speak clearly. Unable to prononce somewords properly. What should i do please tell me. ', NULL, NULL, 'Contact Us', 0, '2022-01-05 03:17:19'),
(13, 'Waymn', 'akvpxnqj@gmail.com', '87286767461', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/yxl7rqto', NULL, NULL, 'Contact Us', 0, '2022-01-11 04:29:56'),
(14, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Hey, this is Eric and I ran across speeshearing.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE https://jumboleadmagnet.co', NULL, NULL, 'Contact Us', 0, '2022-01-12 00:59:09'),
(15, 'reodaws', 'bt895ncx@gmail.com', '89492882384', 'Cryptocurrency rates are breaking records, which means you have the opportunity to make money on cryptocurrencies. Join our system and start making money with us. Go to system: https://tinyurl.com/y5gj48b7', NULL, NULL, 'Contact Us', 0, '2022-01-12 14:48:13'),
(16, 'Olivia Pointon', 'avaolivia2747@gmail.com', '02079460433', 'Hi,\r\n\r\nWe\'d like to introduce to you our explainer video service which we feel can benefit your site speeshearing.com.\r\n\r\nCheck out some of our existing videos here:\r\nhttps://www.youtube.com/watch?v=oYoUQjxvhA0\r\nhttps://www.youtube.com/watch?v=MOnhn77TgDE\r\nhttps://www.youtube.com/watch?v=NKY4a3hvmUc\r\n\r\nAll of our videos are in a similar animated format as the above examples and we have voice over artists with US/UK/Australian accents.\r\n\r\nThey can show a solution to a problem or simply promote one of your products or services. They are concise, can be uploaded to video such as Youtube, and can be embedded into your website or featured on landing pages.\r\n\r\nOur prices are as follows depending on video length:\r\n1 minute = $189\r\n1-2 minutes = $289\r\n2-3 minutes = $389\r\n\r\n*All prices above are in USD and include an engaging, captivating video with full script and voice-over.\r\n\r\nIf this is something you would like to discuss further, don\'t hesitate to reply back.\r\n\r\nKind Regards,\r\nOlivia', NULL, NULL, 'Contact Us', 0, '2022-01-14 21:53:22'),
(17, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Hey, this is Eric and I ran across speeshearing.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://jumboleadmagnet.com', NULL, NULL, 'Contact Us', 0, '2022-01-15 03:39:36'),
(18, 'Kylie Hart', 'kyliehartila@yahoo.com', '04105 14 62 50', 'Hi, \r\n\r\nWe\'re wondering if you\'d be interested in a \'dofollow\' backlink to speeshearing.com from our website that has a Moz Domain Authority of 50?\r\n\r\nWe charge just $50 (USD) to be paid via Paypal, card, or Payoneer. This is a one-time fee, so there are no extra charges and the link is permanent.\r\n\r\nIf you\'d like to know more about the site, please reply to this email and we can discuss further.\r\n\r\nKind Regards,\r\nKylie', NULL, NULL, 'Contact Us', 0, '2022-01-17 00:04:54'),
(19, 'Stephen Dunning', 'bchakka111975s@ronell.me', '06-30156109', 'I was wondering if you wanted to submit your new site to our free business directory? https://bit.ly/submityoursite1000', NULL, NULL, 'Contact Us', 0, '2022-01-17 21:42:00'),
(20, 'Mariasob', 'elenasob@mail.com', '+1 2308834567', 'Hello all, guys! I know, my message may be too specific, \r\nBut my sister found nice man here and they married, so how about me?! :) \r\nI am 26 years old, Maria, from Romania, know English and Russian languages also \r\nAnd... I have specific disease, named nymphomania. Who know what is this, can understand me (better to say it immediately) \r\nAh yes, I cook very tasty! and I love not only cook ;)) \r\nIm real girl, not prostitute, and looking for serious and hot relationship... \r\nAnyway, you can find my profile here: http://exacgelecon.ml/chk/1', NULL, NULL, 'Contact Us', 0, '2022-01-19 17:08:57'),
(21, 'Eric Jones', 'eric.jones.z.mail@gmail.com', '555-555-1212', 'Hey, this is Eric and I ran across speeshearing.com a few minutes ago.\r\n\r\nLooks great… but now what?\r\n\r\nBy that I mean, when someone like me finds your website – either through Search or just bouncing around – what happens next?  Do you get a lot of leads from your site, or at least enough to make you happy?\r\n\r\nHonestly, most business websites fall a bit short when it comes to generating paying customers. Studies show that 70% of a site’s visitors disappear and are gone forever after just a moment.\r\n\r\nHere’s an idea…\r\n \r\nHow about making it really EASY for every visitor who shows up to get a personal phone call you as soon as they hit your site…\r\n \r\nYou can –\r\n  \r\nTalk With Web Visitor is a software widget that’s works on your site, ready to capture any visitor’s Name, Email address and Phone Number.  It signals you the moment they let you know they’re interested – so that you can talk to that lead while they’re literally looking over your site.\r\n\r\nCLICK HERE http://jumboleadmagnet.com', NULL, NULL, 'Contact Us', 0, '2022-01-21 01:20:46'),
(22, 'Waymn', '8o4p95ez@icloud.com', '86158529891', 'Play for free and win real money! Claim (3) Free Spins Below https://tinyurl.com/yawv9m7n', NULL, NULL, 'Contact Us', 0, '2022-01-21 17:26:41'),
(23, 'nem6471284krya', 'kiddgeerarddo@gmail.com', '89921424625', 'mks6471284rttyneg 0lstdol dGYl 6v3MGgK', NULL, NULL, 'Contact Us', 0, '2022-01-24 02:04:04'),
(24, 'Waymn', '7ie7zwyz@icloud.com', '89844341699', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y7p3qtxc', NULL, NULL, 'Contact Us', 0, '2022-01-30 15:54:39'),
(25, 'Eloisa Ruiz', '5hoss@gmailup.com', '519-881-5296', 'Submit your site to over 1000 directories all with one click here> https://bit.ly/submityoursite1000', NULL, NULL, 'Contact Us', 0, '2022-01-31 01:14:36'),
(26, 'Mark Brown', 'markbrown3049@gmail.com', '02079460433', 'Hi,\r\n\r\nWe\'d like to introduce to you our logo design service that we feel would benefit your site speeshearing.com.\r\n\r\nYou can view some of our previously designed logos here:\r\nhttps://imgur.com/a/39n0lTz\r\n\r\nOur price is $159 (USD) that includes:\r\n\r\n* 2 logo concepts (we send you different designs from 2 of our designers)\r\n* Logo transparency (the main benefit here is your logo will go with any background)\r\n* Source file\r\n* Printable file\r\n* 2 revisions (99% of the time, customers only ever need one at the most)\r\n\r\nIf this is something you may be interested in, reply and we can discuss further.\r\n\r\nKind Regards,\r\nMark', NULL, NULL, 'Contact Us', 0, '2022-02-01 23:22:51'),
(27, 'Blythe Maier', 'jaouadhifarah0@bebekpenyet.buzz', '070 1988 4261', 'Give your new site a boost, submit your site now to our free directory and start getting more clients https://bit.ly/submityoursite1000', NULL, NULL, 'Contact Us', 0, '2022-02-02 23:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_status`
--
ALTER TABLE `active_status`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `adult_case_history`
--
ALTER TABLE `adult_case_history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `aphasia_other_neuro_disorder_poforma`
--
ALTER TABLE `aphasia_other_neuro_disorder_poforma`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `appoitment`
--
ALTER TABLE `appoitment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `articulation_proforma`
--
ALTER TABLE `articulation_proforma`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `case_history`
--
ALTER TABLE `case_history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `departmentformstrans`
--
ALTER TABLE `departmentformstrans`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feeding_proforma`
--
ALTER TABLE `feeding_proforma`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `formsmaster`
--
ALTER TABLE `formsmaster`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `formsrecords`
--
ALTER TABLE `formsrecords`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `invoice_items`
--
ALTER TABLE `invoice_items`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_Id`);

--
-- Indexes for table `language_history`
--
ALTER TABLE `language_history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `leave_trans`
--
ALTER TABLE `leave_trans`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment_receipt`
--
ALTER TABLE `payment_receipt`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pediatric_case_history`
--
ALTER TABLE `pediatric_case_history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`Procedures_Id`);

--
-- Indexes for table `progress_report_table`
--
ALTER TABLE `progress_report_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `recommend_patient`
--
ALTER TABLE `recommend_patient`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `recurring_appointment`
--
ALTER TABLE `recurring_appointment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `referred_master`
--
ALTER TABLE `referred_master`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `rewards_settle`
--
ALTER TABLE `rewards_settle`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `slot_master`
--
ALTER TABLE `slot_master`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `speech_case_history`
--
ALTER TABLE `speech_case_history`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `speech_lesson_plan_table`
--
ALTER TABLE `speech_lesson_plan_table`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `speech_pre_therapy`
--
ALTER TABLE `speech_pre_therapy`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stuttering_proforma`
--
ALTER TABLE `stuttering_proforma`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Branch_Id` (`Branch_Id`),
  ADD KEY `Department_Id` (`Department_Id`);

--
-- Indexes for table `websitecontacts`
--
ALTER TABLE `websitecontacts`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_status`
--
ALTER TABLE `active_status`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `adult_case_history`
--
ALTER TABLE `adult_case_history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aphasia_other_neuro_disorder_poforma`
--
ALTER TABLE `aphasia_other_neuro_disorder_poforma`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appoitment`
--
ALTER TABLE `appoitment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `articulation_proforma`
--
ALTER TABLE `articulation_proforma`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `case_history`
--
ALTER TABLE `case_history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departmentformstrans`
--
ALTER TABLE `departmentformstrans`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feeding_proforma`
--
ALTER TABLE `feeding_proforma`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formsmaster`
--
ALTER TABLE `formsmaster`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `formsrecords`
--
ALTER TABLE `formsrecords`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice_items`
--
ALTER TABLE `invoice_items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `language_history`
--
ALTER TABLE `language_history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leave_trans`
--
ALTER TABLE `leave_trans`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `payment_receipt`
--
ALTER TABLE `payment_receipt`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pediatric_case_history`
--
ALTER TABLE `pediatric_case_history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `procedures`
--
ALTER TABLE `procedures`
  MODIFY `Procedures_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `progress_report_table`
--
ALTER TABLE `progress_report_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recommend_patient`
--
ALTER TABLE `recommend_patient`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `recurring_appointment`
--
ALTER TABLE `recurring_appointment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `referred_master`
--
ALTER TABLE `referred_master`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `rewards_settle`
--
ALTER TABLE `rewards_settle`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slot_master`
--
ALTER TABLE `slot_master`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `speech_case_history`
--
ALTER TABLE `speech_case_history`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `speech_lesson_plan_table`
--
ALTER TABLE `speech_lesson_plan_table`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `speech_pre_therapy`
--
ALTER TABLE `speech_pre_therapy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stuttering_proforma`
--
ALTER TABLE `stuttering_proforma`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Supplier_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `websitecontacts`
--
ALTER TABLE `websitecontacts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leave_trans`
--
ALTER TABLE `leave_trans`
  ADD CONSTRAINT `leave_trans_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`);

--
-- Constraints for table `rewards`
--
ALTER TABLE `rewards`
  ADD CONSTRAINT `rewards_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`Id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Branch_Id`) REFERENCES `branch` (`Id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`Department_Id`) REFERENCES `department` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
