-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 03:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `based`
--

-- --------------------------------------------------------

--
-- Table structure for table `pms_project`
--

CREATE TABLE `pms_project` (
  `id` varchar(40) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `language` varchar(256) NOT NULL,
  `year_id` varchar(40) NOT NULL,
  `term_id` varchar(40) NOT NULL,
  `course_id` varchar(40) NOT NULL,
  `discipline_id` varchar(40) NOT NULL,
  `teacher_id` varchar(40) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pms_project`
--

INSERT INTO `pms_project` (`id`, `title`, `description`, `link`, `language`, `year_id`, `term_id`, `course_id`, `discipline_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
('{07941F2C-322A-44C9-8865-39C82B47A138}', 'Improved CSE Discipline website (OOP)', 'refresh current website with the given template. \r\n\r\none group work with the new templating. \r\n\r\nOther group work with the admin part for the current database', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 15:53:19', '2017-08-23 15:53:19'),
('{1973E094-DA22-4AA8-9BF6-B40E113440B2}', 'Course Registration System', 'web based project that is used to register course in institution.', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:25:37', '2017-08-23 16:25:37'),
('{1A490C71-E150-4370-9096-56136540B160}', 'Transport Management System', 'Create vehicles as assets. Assign drivers, helpers to bus along with their contact information. \r\n\r\nCreate routes and the stopage along with the google map options \r\n\r\nAdd more features to it, be creative', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:15:46', '2017-08-23 16:15:46'),
('{2FEE10DB-D5C6-47BC-B5ED-98D9161E716E}', 'Diet Management System', 'The DFM Nutrition Management System allows for accurate and efficient nutritional analysis of ingredients, recipes, patient and cafeteria menus, as well as patient nutrient intake. This helps you to ensure that selected menu item combinations will offer the desired nutrients for a particular meal or diet order. No more manual calculations or updates ... DFM does it all for you!', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:31:45', '2017-08-23 16:31:45'),
('{3EBE6FDA-0601-4F6C-9F39-8B4E9FF012D9}', 'Meal Management', 'Meal system where you create meal at different times of the day, create menu, cost, SimTire user can subscribe and unsuscribe and pay for the meal to consume it\r\n\r\nIdeally it should be related to the housing. So a meal would created on a housing and consumed from there\r\n\r\nDaily, weekly, monthly consumption report, most likely menus, ranking of the meal should be also present', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:04:44', '2017-08-23 16:04:44'),
('{3FC6690A-D952-41A8-8FDC-6ED5F54DBBD7}', 'Improved advanced event calendar', 'apply SimTire on the available event calendar code and new features to it\r\n\r\nVarious types of searching', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 15:55:21', '2017-08-23 15:55:21'),
('{42181916-BAD5-4F67-BB55-73E5B9A6C51C}', 'Routine Genarator', 'Web based project that is used in generating routine.', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:27:41', '2017-08-23 16:27:41'),
('{4BFCB8A6-5CB5-45C5-8E8D-055637E44F15}', 'Medical Practioner\'s Information Site', 'Provides links to clinical practice guidelines developed for use in health care settings. \r\nNational Health and Medical Research Council', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:21:14', '2017-08-23 16:21:14'),
('{588562AA-9938-480A-A3B9-96E01E687C13}', 'Improved Admission Test System', 'Bring the current admission test system into the SimTire OOP model', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:14:05', '2017-08-23 16:14:05'),
('{5AE7DB3B-7A40-44A4-9A77-0E630808B891}', 'Payment Management System', 'First of all user can load his account with money. This is just dummy money\r\n\r\nPayment can be done by SimTire user related to different things may be medical bill, library fine, buying stuffs from canteen.\r\n\r\nThere will be a store of items and their price will be there. User can buy things from that store and pay using their balance from the account. \r\n\r\nFor buying something (e.g. book) from the store user will get credit and later credit can be converted to a balance using some forumla.', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:11:54', '2017-08-23 16:11:54'),
('{723F4FAE-0E80-410A-A424-C3ED5DECCC02}', 'Online Restaurant Food Management System', 'web based project used in ordering foods.', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:29:51', '2017-08-23 16:29:51'),
('{8510A805-9EAD-4826-AB70-C23A1FF6BEFA}', 'Medical Service Management', 'create doctors, nurse, medicine stock, university people assigned to doctor, doctor see patient, write prescriptions, and medicine \r\nthen medicine is given to a person and stock gets updated', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:08:04', '2017-08-23 16:08:04'),
('{923B1A19-7CB3-4C28-B6C6-6C8B167AB34B}', 'Library Management', 'create library, create books, create shelfs, assing book to shelfs to a specific library, search books different ways, student can take books and return books', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:03:15', '2017-08-23 16:03:15'),
('{9C876FE5-FB68-48ED-B6BB-FA905D3ACD0E}', 'Improved news module', 'improve the code of the news module and new features to it\r\n\r\nvarious types of searching', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 15:57:23', '2017-08-23 15:57:23'),
('{9E94E63E-6C0E-4D17-9919-610669C0E270}', 'Student Hall/Dorm/Teacher/Staff housing Management', 'CRUD of hall/dorm/teacher/staff housing, every hall/others will have rooms, each room will have seats. a student will be selected from the SimTire user and will be assigned to a seat\r\nVarious types of searching', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:00:00', '2017-08-23 16:00:00'),
('{9F8C22AE-9BEB-4F00-9247-D9AF4E3234DA}', 'Chatting and Group Communication System', '"User the SimTier users to form groups and build a javascript chatting system to chat with individuals or with a group\r\n\r\nSend group emails and other communication related stuffs"', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:17:50', '2017-08-23 16:17:50'),
('{D0476E47-5D15-453D-8751-3DF630B15AC0}', 'Project Archieve', 'improve current project module to SimTire based project. Project should also inclue member names and their partnership in the project\r\n\r\nA front page for the project module where all the projects along with their thumnail pictures and title are shown using pagination. You select one project and you can see the details of the project and the members of the project. Also, the partneship of project if applicable\r\n\r\nPersone wise project lists should also be there', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:10:25', '2017-08-23 16:10:25'),
('{F956390B-A789-4096-AA1B-3A370E254B8B}', 'Improved file-folder management system.', 'improve the available SimTire file folder system, File allocation, file versioning, file relation should be present\r\n\r\nCreate a beatiful file browsing system', 'https://github.com/search?utf8=%E2%9C%93&q=cseku&type=', 'PHP', '3', '{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', '5', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'teacher@gmail.com', '2017-08-23 16:06:18', '2017-08-23 16:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `pms_student_project`
--

CREATE TABLE `pms_student_project` (
  `id` varchar(40) NOT NULL,
  `student_id` varchar(40) NOT NULL,
  `project_id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pms_student_project`
--

INSERT INTO `pms_student_project` (`id`, `student_id`, `project_id`) VALUES
('{08E1B892-79BC-44AE-8426-E76DDC875932}', 'sakeef@gmail.com', '{D0476E47-5D15-453D-8751-3DF630B15AC0}'),
('{0B1AAA29-5BBF-4347-96F3-3A5ED86CFFB2}', 'swajon@gmail.com', '{07941F2C-322A-44C9-8865-39C82B47A138}'),
('{22EDE41D-A4BF-4BF4-BC42-9EEADBFB1C8C}', 'pranta.cse@gmail.com', '{D0476E47-5D15-453D-8751-3DF630B15AC0}'),
('{2AFFBE1F-E81D-4206-B4E4-A6B1ABE68260}', 'sudipto@gmail.com', '{3EBE6FDA-0601-4F6C-9F39-8B4E9FF012D9}'),
('{48511062-33F1-4B4B-ACFC-1651752B8E5C}', 'azoadahnaf@gmail.com', '{3EBE6FDA-0601-4F6C-9F39-8B4E9FF012D9}'),
('{5651EE59-55FA-4819-B6E4-B1A258F71131}', 'durjoy@gmail.com', '{F956390B-A789-4096-AA1B-3A370E254B8B}'),
('{8466BBC1-35F9-4507-9421-158C4449C036}', 'tanmai@gmail.com', '{D0476E47-5D15-453D-8751-3DF630B15AC0}'),
('{87BD8BDF-6915-40C1-9DE4-23243E433AE1}', 'ratul@gamil.com', '{9E94E63E-6C0E-4D17-9919-610669C0E270}'),
('{8E2DCFEF-BEE7-4200-84E5-0742A8225698}', 'sayed@gmail.com', '{1A490C71-E150-4370-9096-56136540B160}'),
('{8F1F7EB7-D960-45D0-A894-E49A78D992DD}', 'alamin@gmail.com', '{9E94E63E-6C0E-4D17-9919-610669C0E270}'),
('{9C617A3A-A6F0-4764-9A41-0E86C15797A3}', 'anik@gmail.com', '{1973E094-DA22-4AA8-9BF6-B40E113440B2}'),
('{A675B62C-AD4D-487B-AA3B-9106326477FA}', 'shuvo@gmail.com', '{07941F2C-322A-44C9-8865-39C82B47A138}'),
('{BBCF4B59-2CD1-428A-BDE3-DDE0380DAD5D}', 'imran@gmail.com', '{9E94E63E-6C0E-4D17-9919-610669C0E270}'),
('{F1500A3C-683C-45B4-B29F-EBC75B3B94DD}', 'shahidul@gmail.com', '{923B1A19-7CB3-4C28-B6C6-6C8B167AB34B}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `ID` varchar(40) NOT NULL,
  `CourseNo` varchar(40) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Credit` double NOT NULL,
  `CourseTypeID` varchar(40) NOT NULL,
  `DisciplineID` varchar(40) NOT NULL,
  `IsDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`ID`, `CourseNo`, `Title`, `Credit`, `CourseTypeID`, `DisciplineID`, `IsDeleted`) VALUES
('1', 'MATH 3218', 'Vector', 3, '1', '{0CF37516-06FE-41CD-93AD-D2D1652509D6}', 0),
('2', 'CSE 2101', 'Advanced Programming Laboratory', 1.5, '2', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 0),
('3', 'CSE 2201', 'Software Development Programming', 1.5, '4', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 0),
('4', 'CSE 3101', 'Database', 3, '3', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 0),
('5', 'CSE 3201', 'Web Programming Laboratory', 1.5, '1', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 0),
('6', 'CSE 3203', 'Software Engineering Laboratory', 1.5, '3', '{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_sessional_type`
--

CREATE TABLE `tbl_course_sessional_type` (
  `ID` varchar(40) NOT NULL,
  `Name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_sessional_type`
--

INSERT INTO `tbl_course_sessional_type` (`ID`, `Name`) VALUES
('1', 60),
('2', 30),
('3', 15),
('4', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_type`
--

CREATE TABLE `tbl_course_type` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `SessionalTypeID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_type`
--

INSERT INTO `tbl_course_type` (`ID`, `Name`, `SessionalTypeID`) VALUES
('1', 'Project', '1'),
('2', 'Thesis', '2'),
('3', 'Research', '3'),
('4', 'Project', '4'),
('5', 'Thesis', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discipline`
--

CREATE TABLE `tbl_discipline` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `ShortCode` varchar(20) DEFAULT NULL,
  `SchoolID` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discipline`
--

INSERT INTO `tbl_discipline` (`ID`, `Name`, `ShortCode`, `SchoolID`) VALUES
('{0CF37516-06FE-41CD-93AD-D2D1652509D6}', 'Mathematics', 'MATH', '39DDC0C2-CFC2-4246-8748-8812B1751A5C'),
('{560A0FC0-6221-497D-8D41-E584EE4BBEE3}', 'Architecture', 'ARCHI', '39DDC0C2-CFC2-4246-8748-8812B1751A5C'),
('{AF41CC9F-3BCD-4952-9D02-17184CC40C79}', 'Biotechnology & Genetic Engineering', 'BGE', '4D46079B-AFA3-40F1-B8D1-6CC9E9F56812'),
('{B34A0580-0B92-49BD-84FB-929297B104C5}', 'Pharmacy', 'PHA', '4D46079B-AFA3-40F1-B8D1-6CC9E9F56812'),
('{E03C2DC3-CAF3-477E-A851-0C11DF93FD3B}', 'Chemistry', 'CHEM', '39DDC0C2-CFC2-4246-8748-8812B1751A5C'),
('{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'Computer Science and Engineering', 'CSE', '39DDC0C2-CFC2-4246-8748-8812B1751A5C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion`
--

CREATE TABLE `tbl_discussion` (
  `ID` varchar(40) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `CategoryID` varchar(40) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Tag` varchar(200) NOT NULL,
  `CreationDate` datetime NOT NULL,
  `CreatorID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion`
--

INSERT INTO `tbl_discussion` (`ID`, `Title`, `CategoryID`, `Description`, `Tag`, `CreationDate`, `CreatorID`) VALUES
('{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'what is oop', '{3D212234-2F34-4AB0-83EF-1A772068403B}', 'describe oop', 'oop', '2017-04-29 00:00:00', 'mkazi078@uottawa.ca'),
('{DA408BD0-9C9E-46F6-8CF2-00A631B06A26}', 'what is c#', '{44CAEE8D-A9D7-48C8-A2EA-A7463E00FCD6}', 'this is c#', 'oop', '2017-04-29 00:00:00', 'mkazi078@uottawa.ca');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion_category`
--

CREATE TABLE `tbl_discussion_category` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion_category`
--

INSERT INTO `tbl_discussion_category` (`ID`, `Name`) VALUES
('{3D212234-2F34-4AB0-83EF-1A772068403B}', 'java'),
('{44CAEE8D-A9D7-48C8-A2EA-A7463E00FCD6}', 'c#'),
('{974DE90C-BCAC-4FA3-8B9B-518A3CE6834A}', 'programming contest');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discussion_comment`
--

CREATE TABLE `tbl_discussion_comment` (
  `CommentID` varchar(50) NOT NULL,
  `DiscussionID` varchar(40) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  `CreatorID` varchar(40) NOT NULL,
  `CommentTime` datetime NOT NULL,
  `CommentIDTop` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_discussion_comment`
--

INSERT INTO `tbl_discussion_comment` (`CommentID`, `DiscussionID`, `Comment`, `CreatorID`, `CommentTime`, `CommentIDTop`) VALUES
('{00AADED4-6799-4F2C-BECB-ED50F7B03DDE}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'new comment', 'mkazi078@uottawa.ca', '2017-06-26 19:18:08', NULL),
('{1634B01B-5F82-43EF-96F8-E6149F488424}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'it is PIE', 'mkazi078@uottawa.ca', '0000-00-00 00:00:00', NULL),
('{550A15FC-06B8-43DF-83EE-097E35920170}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'little difficult', 'mohidul@gmail.com', '0000-00-00 00:00:00', NULL),
('{A15517C2-883F-4E5E-B0AC-9A1DB556741F}', '{C9FB74F8-8341-4706-BE40-93BFDC3444D0}', 'Polymorphism, inheritence, encapsulation', 'mkazi078@uottawa.ca', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `ID` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`ID`, `Name`, `Category`) VALUES
('COURSE_C', 'COURSE_C', 'COURSE'),
('COURSE_D', 'COURSE_D', 'COURSE'),
('COURSE_R', 'COURSE_R', 'COURSE'),
('COURSE_U', 'COURSE_U', 'COURSE'),
('DISCIPLINE_C', 'DISCIPLINE_C', 'DISCIPLINE'),
('DISCIPLINE_D', 'DISCIPLINE_D', 'DISCIPLINE'),
('DISCIPLINE_R', 'DISCIPLINE_R', 'DISCIPLINE'),
('DISCIPLINE_U', 'DISCIPLINE_U', 'DISCIPLINE'),
('DISCUSSION_C', 'DISCUSSION_C', 'DISCUSSION'),
('DISCUSSION_CAT_C', 'DISCUSSION_CAT_C', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_D', 'DISCUSSION_CAT_D', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_R', 'DISCUSSION_CAT_R', 'DISCUSSION CATEGORY'),
('DISCUSSION_CAT_U', 'DISCUSSION_CAT_U', 'DISCUSSION CATEGORY'),
('DISCUSSION_COMMENT_C', 'DISCUSSION_COMMENT_C', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_D', 'DISCUSSION_COMMENT_D', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_R', 'DISCUSSION_COMMENT_R', 'DISCUSSION COMMENT'),
('DISCUSSION_COMMENT_U', 'DISCUSSION_COMMENT_U', 'DISCUSSION COMMENT'),
('DISCUSSION_D', 'DISCUSSION_D', 'DISCUSSION'),
('DISCUSSION_R', 'DISCUSSION_R', 'DISCUSSION'),
('DISCUSSION_U', 'DISCUSSION_U', 'DISCUSSION'),
('PERMISSION_C', 'PERMISSION_C', 'PERMISSION'),
('PERMISSION_D', 'PERMISSION_D', 'PERMISSION'),
('PERMISSION_R', 'PERMISSION_R', 'PERMISSION'),
('PERMISSION_U', 'PERMISSION_U', 'PERMISSION'),
('POSITION_C', 'POSITION_C', 'POSITION'),
('POSITION_D', 'POSITION_D', 'POSITION'),
('POSITION_R', 'POSITION_R', 'POSITION'),
('POSITION_U', 'POSITION_U', 'POSITION'),
('PROJECT_C', 'PROJECT_C', 'PROJECT'),
('PROJECT_D', 'PROJECT_D', 'PROJECT'),
('PROJECT_R', 'PROJECT_R', 'PROJECT'),
('PROJECT_U', 'PROJECT_U', 'PROJECT'),
('ROLE_C', 'ROLE_C', 'ROLE'),
('ROLE_D', 'ROLE_D', 'ROLE'),
('ROLE_R', 'ROLE_R', 'ROLE'),
('ROLE_U', 'ROLE_U', 'ROLE'),
('SCHOOL_C', 'SCHOOL_C', 'SCHOOL'),
('SCHOOL_D', 'SCHOOL_D', 'SCHOOL'),
('SCHOOL_R', 'SCHOOL_R', 'SCHOOL'),
('SCHOOL_U', 'SCHOOL_U', 'SCHOOL'),
('STUDENT_PROJECT_C', 'STUDENT_PROJECT_C', 'STUDENT PROJECT'),
('STUDENT_PROJECT_D', 'STUDENT_PROJECT_D', 'STUDENT PROJECT'),
('STUDENT_PROJECT_R', 'STUDENT_PROJECT_R', 'STUDENT PROJECT'),
('STUDENT_PROJECT_U', 'STUDENT_PROJECT_U', 'STUDENT PROJECT'),
('TERM_C', 'TERM_C', 'TERM'),
('TERM_D', 'TERM_D', 'TERM'),
('TERM_R', 'TERM_R', 'TERM'),
('TERM_U', 'TERM_U', 'TERM'),
('USER_C', 'USER_C', 'USER'),
('USER_D', 'USER_D', 'USER'),
('USER_R', 'USER_R', 'USER'),
('USER_U', 'USER_U', 'USER'),
('YEAR_C', 'YEAR_C', 'YEAR'),
('YEAR_D', 'YEAR_D', 'YEAR'),
('YEAR_R', 'YEAR_R', 'YEAR'),
('YEAR_U', 'YEAR_U', 'YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`ID`, `Name`) VALUES
('{1BFE76DB-C2AA-4FAA-A23B-F43E6150A2F6}', 'Section Officer'),
('{2E024DF5-BD45-4EF2-A5E3-43BCA3E9777F}', 'Pro-vice Chancellor'),
('{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}', 'Assistant Professor'),
('{7CDA1F32-A2F8-4469-B5A8-C2038FCE1F9A}', 'Lecturer'),
('{818DE12F-60CC-42E4-BAEC-48EAAED65179}', 'Dean of School'),
('{928EE9FF-E02D-470F-9A6A-AD0EB38B848F}', 'Vice Chancellor'),
('{92FDDA3F-1E91-4AA3-918F-EB595F85790C}', 'Daywise Worker'),
('{932CB0EE-76C2-448E-A40E-2D167EECC479}', 'Registrar'),
('{ADA027D3-21C1-47AF-A21D-759CAFCFE58D}', 'Assistant Registrar'),
('{B76EB035-EA26-4CEB-B029-1C6129574D98}', 'Librarian'),
('{B78C7A7B-4D38-4025-8170-7B8C9F291946}', 'Head of Discipline'),
('{C27B6BCF-FB83-4F3D-85CA-B7870D8B12D0}', 'Associate Professor'),
('{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}', 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`ID`, `Name`) VALUES
('administrator', 'Administrator'),
('registration coordinator', 'Registration Coordinator'),
('student', 'Student'),
('stuff', 'Stuff'),
('tabulator', 'Tabulator'),
('teacher', 'Teacher'),
('visitor', 'Visitor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_permission`
--

CREATE TABLE `tbl_role_permission` (
  `Row` int(11) NOT NULL,
  `RoleID` varchar(40) NOT NULL,
  `PermissionID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role_permission`
--

INSERT INTO `tbl_role_permission` (`Row`, `RoleID`, `PermissionID`) VALUES
(1558, 'administrator', 'COURSE_C'),
(1559, 'administrator', 'COURSE_D'),
(1560, 'administrator', 'COURSE_R'),
(1561, 'administrator', 'COURSE_U'),
(1562, 'administrator', 'DISCIPLINE_C'),
(1563, 'administrator', 'DISCIPLINE_D'),
(1564, 'administrator', 'DISCIPLINE_R'),
(1565, 'administrator', 'DISCIPLINE_U'),
(1566, 'administrator', 'DISCUSSION_C'),
(1567, 'administrator', 'DISCUSSION_D'),
(1568, 'administrator', 'DISCUSSION_R'),
(1569, 'administrator', 'DISCUSSION_U'),
(1570, 'administrator', 'DISCUSSION_CAT_C'),
(1571, 'administrator', 'DISCUSSION_CAT_D'),
(1572, 'administrator', 'DISCUSSION_CAT_R'),
(1573, 'administrator', 'DISCUSSION_CAT_U'),
(1574, 'administrator', 'DISCUSSION_COMMENT_C'),
(1575, 'administrator', 'DISCUSSION_COMMENT_D'),
(1576, 'administrator', 'DISCUSSION_COMMENT_R'),
(1577, 'administrator', 'DISCUSSION_COMMENT_U'),
(1578, 'administrator', 'PERMISSION_C'),
(1579, 'administrator', 'PERMISSION_D'),
(1580, 'administrator', 'PERMISSION_R'),
(1581, 'administrator', 'PERMISSION_U'),
(1582, 'administrator', 'POSITION_C'),
(1583, 'administrator', 'POSITION_D'),
(1584, 'administrator', 'POSITION_R'),
(1585, 'administrator', 'POSITION_U'),
(1586, 'administrator', 'PROJECT_C'),
(1587, 'administrator', 'PROJECT_D'),
(1588, 'administrator', 'PROJECT_R'),
(1589, 'administrator', 'PROJECT_U'),
(1590, 'administrator', 'ROLE_C'),
(1591, 'administrator', 'ROLE_D'),
(1592, 'administrator', 'ROLE_R'),
(1593, 'administrator', 'ROLE_U'),
(1594, 'administrator', 'SCHOOL_C'),
(1595, 'administrator', 'SCHOOL_D'),
(1596, 'administrator', 'SCHOOL_R'),
(1597, 'administrator', 'SCHOOL_U'),
(1598, 'administrator', 'STUDENT_PROJECT_C'),
(1599, 'administrator', 'STUDENT_PROJECT_D'),
(1600, 'administrator', 'STUDENT_PROJECT_R'),
(1601, 'administrator', 'STUDENT_PROJECT_U'),
(1602, 'administrator', 'TERM_C'),
(1603, 'administrator', 'TERM_D'),
(1604, 'administrator', 'TERM_R'),
(1605, 'administrator', 'TERM_U'),
(1606, 'administrator', 'USER_C'),
(1607, 'administrator', 'USER_D'),
(1608, 'administrator', 'USER_R'),
(1609, 'administrator', 'USER_U'),
(1610, 'administrator', 'YEAR_C'),
(1611, 'administrator', 'YEAR_D'),
(1612, 'administrator', 'YEAR_R'),
(1613, 'administrator', 'YEAR_U');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school`
--

CREATE TABLE `tbl_school` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DeanID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`ID`, `Name`, `DeanID`) VALUES
('39DDC0C2-CFC2-4246-8748-8812B1751A5C', 'Science Engineering and Technology', 'dean@gmail.com'),
('4D46079B-AFA3-40F1-B8D1-6CC9E9F56812', 'Life Science', 'dean@gmail.com'),
('86E0F021-B30D-48D2-B177-247180633C5E', 'Social Science', 'dean@gmail.com'),
('879375F7-0A15-4705-AC90-C6786D279EF1', 'Law and Humanities', 'dean@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_term`
--

CREATE TABLE `tbl_term` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_term`
--

INSERT INTO `tbl_term` (`ID`, `Name`) VALUES
('{19B15CDF-264C-4924-8608-258673BCC448}', 'B.Sc 1st'),
('{22EDE2D2-D36C-4160-9D2A-80184B8AD35B}', 'B.Sc 2nd'),
('{298E9628-8DE2-4742-8F93-0491C01BB152}', 'M.Sc 1st'),
('{9C84629E-11FA-4459-A593-C9AD9CF0D3F2}', 'M.Sc 2nd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` varchar(40) NOT NULL,
  `UniversityID` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `IsLogged` smallint(1) DEFAULT NULL,
  `IsArchived` smallint(1) DEFAULT NULL,
  `IsDeleted` smallint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `UniversityID`, `Email`, `Password`, `FirstName`, `LastName`, `Status`, `IsLogged`, `IsArchived`, `IsDeleted`) VALUES
('alamin@gmail.com', '150212', 'alamin@gmail.com', '123', 'Al', 'Amin', 'approved', NULL, NULL, NULL),
('anik@gmail.com', '150231', 'anik@gmail.com', '123', 'Ashfiqur', 'Rahman', 'approved', NULL, NULL, NULL),
('azoadahnaf@gmail.com', '150222', 'azoadahnaf@gmail.com', '123', 'Azoad', 'Ahnaf', 'approved', NULL, NULL, NULL),
('dean@gmail.com', '020202', 'dean@gmail.com', '123', 'I AM', 'DEAN ', 'approved', NULL, NULL, NULL),
('durjoy@gmail.com', '150229', 'durjoy@gmail.com', '123', 'Durjoy', 'Bapery', 'approved', NULL, NULL, NULL),
('imran@gmail.com', '150203', 'imran@gmail.com', '123', 'Imran', 'Hossain', 'approved', NULL, NULL, NULL),
('pranta.cse@gmail.com', '150215', 'pranta.cse@gmail.com', '123', 'Pranta', 'Protik', 'approved', NULL, NULL, NULL),
('ratul@gamil.com', '150226', 'ratul@gamil.com', '123', 'Siamul', 'Haque', 'approved', NULL, NULL, NULL),
('sakeef@gmail.com', '150217', 'sakeef@gmail.com', '123', 'Nazmus', 'Sakeef', 'approved', NULL, NULL, NULL),
('sayed@gmail.com', '150220', 'sayed@gmail.com', '123', 'Abu', 'Sayed', 'approved', NULL, NULL, NULL),
('shahidul@gmail.com', '150206', 'shahidul@gmail.com', '123', 'Shahidul', 'Islam', 'approved', NULL, NULL, NULL),
('shuvo@gmail.com', '150233', 'shuvo@gmail.com', '123', 'Wahid', 'Shuvo', 'approved', NULL, NULL, NULL),
('sudipto@gmail.com', '150223', 'sudipto@gmail.com', '123', 'Sudipto', 'Das', 'approved', NULL, NULL, NULL),
('swajon@gmail.com', '150214', 'swajon@gmail.com', '123', 'Swajon', 'Golder', 'approved', NULL, NULL, NULL),
('tanmai@gmail.com', '150232', 'tanmai@gmail.com', '123', 'Tanmai', 'Ghosh', 'approved', NULL, NULL, NULL),
('teacher@gmail.com', '020203', 'teacher@gmail.com', '123', 'I am', 'teacher', 'approved', NULL, NULL, NULL),
('test@test.com', '020201', 'test@test.com', '123', 'I am', 'admin', 'approved', NULL, NULL, NULL),
('zubayer@gmail.com', '150208', 'zubayer@gmail.com', '123', 'Zubayer', 'Rayhan', 'approved', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `ID` varchar(40) NOT NULL,
  `FatherName` varchar(100) DEFAULT NULL,
  `MotherName` varchar(100) DEFAULT NULL,
  `PermanentAddress` varchar(200) DEFAULT NULL,
  `HomePhone` varchar(20) DEFAULT NULL,
  `CurrentAddress` varchar(200) DEFAULT NULL,
  `MobilePhone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`ID`, `FatherName`, `MotherName`, `PermanentAddress`, `HomePhone`, `CurrentAddress`, `MobilePhone`) VALUES
('alamin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('anik@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('azoadahnaf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('dean@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('durjoy@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('imran@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('pranta.cse@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('ratul@gamil.com', NULL, NULL, NULL, NULL, NULL, NULL),
('sakeef@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('sayed@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('shahidul@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('shuvo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('sudipto@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('swajon@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('tanmai@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('teacher@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL),
('test@test.com', 'My father', 'My mother', 'My address', '04100000', 'Same', '0171100000'),
('zubayer@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_discipline`
--

CREATE TABLE `tbl_user_discipline` (
  `UserID` varchar(40) NOT NULL,
  `DisciplineID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_position`
--

CREATE TABLE `tbl_user_position` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(40) NOT NULL,
  `PositionID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_position`
--

INSERT INTO `tbl_user_position` (`ID`, `UserID`, `PositionID`) VALUES
(4, '{693F944F-328D-433A-9F94-459D92841645}', '{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}'),
(14, '{E0F0AE1A-AECF-46C1-A148-4485036F3CCF}', '{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}'),
(16, '{A4F96981-F014-46F6-BB93-87500C3CBB03}', '{7CDA1F32-A2F8-4469-B5A8-C2038FCE1F9A}'),
(17, '{0B2F4F89-2048-4504-AB17-0412CC624A05}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(19, '{8104FB4F-8E63-489D-8D90-DB45A9A2327B}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(21, '{8B24B76D-9969-4F71-ABC4-6EE59355C686}', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(24, '{9E2E6363-A0FF-4C0F-B58F-D162725FB702}', '{C27B6BCF-FB83-4F3D-85CA-B7870D8B12D0}'),
(30, 'mohidul@gmail.com', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(37, 'mkazi078@uottawa.ca', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}'),
(38, 'dean@gmail.com', '{818DE12F-60CC-42E4-BAEC-48EAAED65179}'),
(39, 'teacher@gmail.com', '{EB4880E2-01B3-4C6E-A2C9-89B6E5427C0A}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `ID` int(11) NOT NULL,
  `UserID` varchar(40) NOT NULL,
  `RoleID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`ID`, `UserID`, `RoleID`) VALUES
(98, 'test@test.com', 'administrator'),
(99, 'test@test.com', 'teacher'),
(104, 'dean@gmail.com', 'teacher'),
(106, 'teacher@gmail.com', 'teacher'),
(116, 'imran@gmail.com', 'student'),
(117, 'shahidul@gmail.com', 'student'),
(118, 'zubayer@gmail.com', 'student'),
(119, 'alamin@gmail.com', 'student'),
(120, 'swajon@gmail.com', 'student'),
(121, 'pranta.cse@gmail.com', 'student'),
(122, 'sakeef@gmail.com', 'student'),
(123, 'sayed@gmail.com', 'student'),
(124, 'azoadahnaf@gmail.com', 'student'),
(125, 'sudipto@gmail.com', 'student'),
(126, 'ratul@gamil.com', 'student'),
(127, 'durjoy@gmail.com', 'student'),
(128, 'anik@gmail.com', 'student'),
(129, 'tanmai@gmail.com', 'student'),
(130, 'shuvo@gmail.com', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `ID` varchar(40) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`ID`, `Name`) VALUES
('1', '1st'),
('2', '2nd'),
('3', '3rd'),
('4', '4th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pms_project`
--
ALTER TABLE `pms_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `year_id` (`year_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `discipline_id` (`discipline_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `pms_student_project`
--
ALTER TABLE `pms_student_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CourseTypeID` (`CourseTypeID`),
  ADD KEY `DisciplineID` (`DisciplineID`);

--
-- Indexes for table `tbl_course_sessional_type`
--
ALTER TABLE `tbl_course_sessional_type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_course_type`
--
ALTER TABLE `tbl_course_type`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SessionalTypeID` (`SessionalTypeID`);

--
-- Indexes for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `SchoolID` (`SchoolID`);

--
-- Indexes for table `tbl_discussion`
--
ALTER TABLE `tbl_discussion`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_discussion_category`
--
ALTER TABLE `tbl_discussion_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_discussion_comment`
--
ALTER TABLE `tbl_discussion_comment`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  ADD PRIMARY KEY (`Row`);

--
-- Indexes for table `tbl_school`
--
ALTER TABLE `tbl_school`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `DeanID` (`DeanID`);

--
-- Indexes for table `tbl_term`
--
ALTER TABLE `tbl_term`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UniversityID` (`UniversityID`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user_position`
--
ALTER TABLE `tbl_user_position`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_role_permission`
--
ALTER TABLE `tbl_role_permission`
  MODIFY `Row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1614;
--
-- AUTO_INCREMENT for table `tbl_user_position`
--
ALTER TABLE `tbl_user_position`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pms_project`
--
ALTER TABLE `pms_project`
  ADD CONSTRAINT `pms_project_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tbl_course` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pms_project_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `tbl_term` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pms_project_ibfk_3` FOREIGN KEY (`year_id`) REFERENCES `tbl_year` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pms_project_ibfk_4` FOREIGN KEY (`discipline_id`) REFERENCES `tbl_discipline` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pms_project_ibfk_5` FOREIGN KEY (`teacher_id`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pms_student_project`
--
ALTER TABLE `pms_student_project`
  ADD CONSTRAINT `pms_student_project_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pms_student_project_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `pms_project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD CONSTRAINT `tbl_course_ibfk_1` FOREIGN KEY (`CourseTypeID`) REFERENCES `tbl_course_type` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_course_ibfk_2` FOREIGN KEY (`DisciplineID`) REFERENCES `tbl_discipline` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_course_type`
--
ALTER TABLE `tbl_course_type`
  ADD CONSTRAINT `tbl_course_type_ibfk_1` FOREIGN KEY (`SessionalTypeID`) REFERENCES `tbl_course_sessional_type` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD CONSTRAINT `tbl_discipline_ibfk_1` FOREIGN KEY (`SchoolID`) REFERENCES `tbl_school` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_school`
--
ALTER TABLE `tbl_school`
  ADD CONSTRAINT `tbl_school_ibfk_1` FOREIGN KEY (`DeanID`) REFERENCES `tbl_user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
