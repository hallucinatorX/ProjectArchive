-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 05:45 PM
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
('{0CF37516-06FE-41CD-93AD-D2D1652509D6}', 'Mathematics', 'MATH', '{39DDC0C2-CFC2-4246-8748-8812B1751A5C}'),
('{560A0FC0-6221-497D-8D41-E584EE4BBEE3}', 'Architecture', 'ARCH', '{39DDC0C2-CFC2-4246-8748-8812B1751A5C}'),
('{63F3C00B-6168-4FBD-AB01-7A1FE413BDDE}', 'Forestry and Wood Technology', 'FWT', '{4D46079B-AFA3-40F1-B8D1-6CC9E9F56812}'),
('{AF41CC9F-3BCD-4952-9D02-17184CC40C79}', 'Urban and Rural Planning', 'URP', '{4D46079B-AFA3-40F1-B8D1-6CC9E9F56812}'),
('{E065BBA7-D0C5-4DFA-9768-81B6F056EB4A}', 'Foresty and Marine Resource Technology', 'FMRT', '{4D46079B-AFA3-40F1-B8D1-6CC9E9F56812}'),
('{E7280448-E379-424E-A11D-357F4334AC8D}', 'Physics', 'PHY', '{39DDC0C2-CFC2-4246-8748-8812B1751A5C}'),
('{FFDB1CB8-AF34-4381-8971-9784DCB516C5}', 'Computer Science and Engineering', 'CSE', '{39DDC0C2-CFC2-4246-8748-8812B1751A5C}');

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
('ROLE_C', 'ROLE_C', 'ROLE'),
('ROLE_D', 'ROLE_D', 'ROLE'),
('ROLE_R', 'ROLE_R', 'ROLE'),
('ROLE_U', 'ROLE_U', 'ROLE'),
('SCHOOL_C', 'SCHOOL_C', 'SCHOOL'),
('SCHOOL_D', 'SCHOOL_D', 'SCHOOL'),
('SCHOOL_R', 'SCHOOL_R', 'SCHOOL'),
('SCHOOL_U', 'SCHOOL_U', 'SCHOOL'),
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
('teacher', 'Teacher');

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
(1514, 'administrator', 'DISCIPLINE_C'),
(1515, 'administrator', 'DISCIPLINE_D'),
(1516, 'administrator', 'DISCIPLINE_R'),
(1517, 'administrator', 'DISCIPLINE_U'),
(1518, 'administrator', 'DISCUSSION_C'),
(1519, 'administrator', 'DISCUSSION_D'),
(1520, 'administrator', 'DISCUSSION_R'),
(1521, 'administrator', 'DISCUSSION_U'),
(1522, 'administrator', 'DISCUSSION_CAT_C'),
(1523, 'administrator', 'DISCUSSION_CAT_D'),
(1524, 'administrator', 'DISCUSSION_CAT_R'),
(1525, 'administrator', 'DISCUSSION_CAT_U'),
(1526, 'administrator', 'DISCUSSION_COMMENT_C'),
(1527, 'administrator', 'DISCUSSION_COMMENT_D'),
(1528, 'administrator', 'DISCUSSION_COMMENT_R'),
(1529, 'administrator', 'DISCUSSION_COMMENT_U'),
(1530, 'administrator', 'PERMISSION_C'),
(1531, 'administrator', 'PERMISSION_D'),
(1532, 'administrator', 'PERMISSION_R'),
(1533, 'administrator', 'PERMISSION_U'),
(1534, 'administrator', 'POSITION_C'),
(1535, 'administrator', 'POSITION_D'),
(1536, 'administrator', 'POSITION_R'),
(1537, 'administrator', 'POSITION_U'),
(1538, 'administrator', 'ROLE_C'),
(1539, 'administrator', 'ROLE_D'),
(1540, 'administrator', 'ROLE_R'),
(1541, 'administrator', 'ROLE_U'),
(1542, 'administrator', 'SCHOOL_C'),
(1543, 'administrator', 'SCHOOL_D'),
(1544, 'administrator', 'SCHOOL_R'),
(1545, 'administrator', 'SCHOOL_U'),
(1546, 'administrator', 'TERM_C'),
(1547, 'administrator', 'TERM_D'),
(1548, 'administrator', 'TERM_R'),
(1549, 'administrator', 'TERM_U'),
(1550, 'administrator', 'USER_C'),
(1551, 'administrator', 'USER_D'),
(1552, 'administrator', 'USER_R'),
(1553, 'administrator', 'USER_U'),
(1554, 'administrator', 'YEAR_C'),
(1555, 'administrator', 'YEAR_D'),
(1556, 'administrator', 'YEAR_R'),
(1557, 'administrator', 'YEAR_U');

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
('{39DDC0C2-CFC2-4246-8748-8812B1751A5C}', 'Science Engineering and Technology', ''),
('{4D46079B-AFA3-40F1-B8D1-6CC9E9F56812}', 'Life Science', ''),
('{86E0F021-B30D-48D2-B177-247180633C5E}', 'Social Science', ''),
('{879375F7-0A15-4705-AC90-C6786D279EF1}', 'Law and Humanities', ''),
('{CE09AA38-205B-4F50-A0E0-14DB8686C912}', 'Fine Arts', '');

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
('{6DE3CF58-3A1A-4D6A-88CF-83F22C27E0BA}', 'Special'),
('{AF8B217E-4E76-41B8-A02A-7115BD4A6BE6}', '2nd'),
('{F9121C67-1E89-4F0B-80AA-89FD3B6BD665}', '1st');

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
('test@test.com', '020201', 'test@test.com', '123', 'I AM', 'ADMIN', 'approved', NULL, NULL, NULL);

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
('test@test.com', 'My father', 'My mother', 'My address', '04100000', 'Same', '0171100000');

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
(37, 'mkazi078@uottawa.ca', '{64D25DDA-16B6-47B8-BBFC-4E2AAF5680C7}');

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
(99, 'test@test.com', 'teacher');

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
('{1FAC0F1A-9D60-43F6-AB07-C933D5A4AA30}', 'Phd 1st'),
('{326B168F-58CC-42F3-B71A-DFE8DBBC05E8}', 'MSc 1st'),
('{6780C884-E112-4F58-9503-E2110B615547}', '4th'),
('{9F3A6CBC-0115-4EC2-ABB3-8CCA431F6C2B}', '1st'),
('{A21965E4-4FE4-43AC-A77F-DABAC9B356F2}', '3rd'),
('{ADBEDD3E-D8EA-47AA-A068-C4C703DB4AE6}', 'MSc 2nd'),
('{B9D6CC05-7AD4-4666-80AB-80797A872743}', 'Phd 2nd'),
('{CBE08035-94CD-4610-B4E2-A0E844184056}', 'Phd 4th'),
('{E3823AA6-6BE5-4A07-93EA-FA59DE4F616F}', 'Phd 3rd'),
('{EA335D18-A1A8-4D15-9C7B-4A4700AD4543}', '2nd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD PRIMARY KEY (`ID`);

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
  MODIFY `Row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1558;
--
-- AUTO_INCREMENT for table `tbl_user_position`
--
ALTER TABLE `tbl_user_position`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
