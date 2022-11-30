-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databases_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseId` int(11) NOT NULL,
  `semesterId` int(11) DEFAULT NULL,
  `courseName` text DEFAULT NULL,
  `courseNumber` int(11) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `professor` text DEFAULT NULL,
  `creditHours` int(11) DEFAULT NULL,
  `days` text DEFAULT NULL,
  `time` text DEFAULT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseId`, `semesterId`, `courseName`, `courseNumber`, `subject`, `professor`, `creditHours`, `days`, `time`, `location`) VALUES
(10761, 1228, 'Introduction to Social Psychology', 2600, 'PSYC', 'Christopher Mazurek', 3, 'TuTh', '11:00-12:15', 'McLeod Hall 1020'),
(10762, 1228, 'Research Methods and Data Analysis I', 2005, 'PSYC', 'Chandra Mason', 3, 'MoWe', '5:00-6:15', 'Minor Hall 125'),
(10763, 1228, 'Research Methods and Data Analysis II', 3006, 'PSYC', 'Karen Schmidt', 4, 'Tu', '2:00-4:30', 'Claude Moore Nursing Educ G010'),
(10764, 1228, 'Abnormal Psychology', 2410, 'PSYC', 'Robert Emery', 3, 'TuTh', '2:00-3:15', 'McLeod Hall 1020'),
(10766, 1228, 'Distinguished Major Thesis I', 4970, 'PSYC', 'Chad Dodson', 3, 'Tu', '6:30-7:30', 'Dell 2 100'),
(10768, 1228, 'Quantitative Methods I: Probability and Statistical Inference', 7710, 'PSYC', 'Hudson Golino', 4, 'We', '9:00-11:30', 'Thornton Hall A207'),
(10838, 1228, 'Introduction to Statistical Analysis', 2120, 'STAT', 'Justin Weinstock', 4, 'MoWe', '8:00-8:50', 'Wilson Hall 402'),
(10839, 1228, 'Introduction to Statistical Analysis', 2120, 'STAT', 'Justin Weinstock', 4, 'MoWe', '9:00-9:50', 'Wilson Hall 402'),
(11462, 1228, 'Introduction to Child Psychology', 2700, 'PSYC', 'Angeline Lillard', 3, 'TuTh', '2:00-3:15', 'Chemistry Bldg 402'),
(11463, 1228, 'Neural Mechanisms of Behavior', 4200, 'PSYC', 'Adema Ribic', 3, 'TuTh', '5:00-6:15', 'Astronomy Bldg 265'),
(11556, 1228, 'Introduction to Mathematical Statistics', 6190, 'STAT', 'Tianxi Li', 3, 'TuTh', '5:00-6:15', 'Ridley Hall G008'),
(11616, 1228, 'Introductory Psychology', 1010, 'PSYC', 'Chad Dodson', 3, 'TuTh', '5:00-6:15', 'Chemistry Bldg 402'),
(11793, 1228, 'Introduction to Mathematical Statistics', 3120, 'STAT', 'Richard Ross', 3, 'TuTh', '12:30-1:45', 'Campbell Hall 160'),
(11819, 1228, 'Introduction to Statistical Analysis', 2120, 'STAT', 'Justin Weinstock', 4, 'MoWe', '10:00-10:50', 'Wilson Hall 301'),
(11850, 1228, 'Statistical Computing with Python and R', 5430, 'STAT', 'Taylor Brown', 3, 'TuTh', '6:30-7:45', 'Monroe Hall 130'),
(11851, 1228, 'Statistics for Biologists', 2020, 'STAT', 'Maria Ferrara', 4, 'TuTh', '9:30-10:45', 'Wilson Hall 301'),
(11852, 1228, 'Applied Time Series', 5170, 'STAT', 'Dan Spitzner', 3, 'MoWeFr', '9:00-9:50', 'Olsson Hall 018'),
(11934, 1228, 'Statistics for Biologists', 2020, 'STAT', 'Maria Ferrara', 4, 'TuTh', '11:00-12:15', 'Wilson Hall 301'),
(12078, 1228, 'Chance: An Introduction to Statistics', 1100, 'STAT', 'Ga Ming Angus Chan', 3, 'MoWeFr', '9:00-9:50', 'Thornton Hall E304'),
(12125, 1228, 'Introduction to Regression Analysis', 3220, 'STAT', 'Krista Varanyak', 3, 'TuTh', '12:30-1:45', 'Ridley Hall G004'),
(12126, 1228, 'Introduction to Regression Analysis', 3220, 'STAT', 'Krista Varanyak', 3, 'TuTh', '9:30-10:45', 'Clark Hall 108'),
(12146, 1228, 'Statistics for Biologists', 2020, 'STAT', 'Maria Ferrara', 4, 'TuTh', '12:30-1:45', 'Wilson Hall 301'),
(12151, 1228, 'Linear Models', 6120, 'STAT', 'Shan Yu', 3, 'MoWeFr', '11:00-11:50', 'Dell 1 105'),
(12168, 1228, 'From Data to Knowledge', 3080, 'STAT', 'Gretchen Martinet', 3, 'TuTh', '9:30-10:45', 'Wilson Hall 325'),
(12239, 1228, 'Chance: An Introduction to Statistics', 1100, 'STAT', 'Mingyu Qi', 3, 'MoWeFr', '9:00-9:50', 'John W. Warner Hall 115'),
(12240, 1228, 'From Data to Knowledge', 3080, 'STAT', 'Gretchen Martinet', 3, 'TuTh', '11:00-12:15', 'Wilson Hall 325'),
(12345, 1228, 'Introduction to Social Psychology', 2600, 'PSYC', 'Jennifer MacCormack', 3, 'MoWe', '2:00-3:15', 'McLeod Hall 1020'),
(12460, 1228, 'From Data to Knowledge', 3080, 'STAT', 'Isabella Femia', 3, 'MoWe', '3:30-4:45', 'Monroe Hall 110'),
(12564, 1228, 'Introduction to Data Science with R', 1601, 'STAT', 'Prince Afriyie', 3, 'MoWeFr', '10:00-10:50', 'Monroe Hall 130'),
(12565, 1228, 'Introduction to Data Science with R', 1601, 'STAT', 'Prince Afriyie', 3, 'MoWeFr', '11:00-11:50', 'Monroe Hall 130'),
(12645, 1228, 'Introduction to Data Science with R', 1601, 'STAT', 'Prince Afriyie', 3, 'MoWeFr', '1:00-1:50', 'Minor Hall 125'),
(12802, 1228, 'Foundations of Statistics', 3110, 'STAT', 'Connor Celum', 3, 'TuTh', '3:30-4:45', 'John W. Warner Hall 115'),
(12803, 1228, 'Statistical Machine Learning', 4630, 'STAT', 'Jeffrey Woo', 3, 'TuTh', '12:30-1:45', 'Nau Hall 101'),
(12804, 1228, 'Statistical Machine Learning', 4630, 'STAT', 'Jeffrey Woo', 3, 'TuTh', '3:30-4:45', 'Nau Hall 101'),
(12840, 1228, 'Research Methods and Data Analysis I', 2005, 'PSYC', 'Jason Clark', 3, 'MoWe', '8:00-9:15', 'Olsson Hall 120'),
(12842, 1228, 'Cognitive Neuroscience', 3160, 'PSYC', 'Nicole Long', 3, 'TuTh', '3:30-4:45', 'Gilmer Hall 390'),
(12843, 1228, 'Animal Minds', 3240, 'PSYC', 'Daniel Meliza', 3, 'MoWeFr', '3:00-3:50', 'Gilmer Hall 390'),
(12849, 1228, 'RM: R Applications in Psychology', 3310, 'PSYC', 'M. Joseph Meyer', 3, 'We', '3:00-4:15', '-'),
(12851, 1228, 'Autism: From Neurons to Neighborhoods', 4155, 'PSYC', 'Vikram Jaswal', 3, 'TuTh', '11:00-12:15', 'Dell 2 101'),
(12996, 1228, 'Nonparametric and Rank-Based Statistics', 3480, 'STAT', 'Richard Ross', 3, 'TuTh', '8:00-9:15', 'John W. Warner Hall 104'),
(13326, 1228, 'Introduction to Cognition', 2150, 'PSYC', 'Daniel Willingham', 3, 'TuTh', '9:30-10:45', 'McLeod Hall 1020'),
(13422, 1228, 'Foundations of Statistics', 3110, 'STAT', 'Yifan Li', 3, 'MoWe', '3:30-4:45', 'Monroe Hall 116'),
(13423, 1228, 'Introduction to Mathematical Statistics', 3120, 'STAT', 'Richard Ross', 3, 'TuTh', '2:00-3:15', 'Campbell Hall 160'),
(13424, 1228, 'Introduction to Regression Analysis', 3220, 'STAT', 'Krista Varanyak', 3, 'TuTh', '2:00-3:15', 'Ridley Hall G004'),
(13517, 1228, 'Data Mining', 5330, 'STAT', 'Shan Yu', 3, 'MoWeFr', '10:00-10:50', 'Ridley Hall 179'),
(13918, 1228, 'Introduction to Data Science with Python', 1602, 'STAT', 'Sydney Campbell', 3, 'TuTh', '3:30-4:45', 'Campbell Hall 153'),
(13919, 1228, 'Introduction to Data Science with Python', 1602, 'STAT', 'Jesse Helman', 3, 'TuTh', '5:00-6:15', 'Clark Hall 108'),
(13920, 1228, 'Advanced Sports Analytics I', 4800, 'STAT', 'Jordan Rodu', 3, 'MoWeFr', '11:00-11:50', 'Olsson Hall 001'),
(13922, 1228, 'Data Visualization and Management', 3280, 'STAT', 'Noah Gade', 3, 'MoWeFr', '1:00-1:50', 'Nau Hall 101'),
(13923, 1228, 'Applied Multivariate Statistics', 6130, 'STAT', 'Tianxi Li', 3, 'TuTh', '12:30-1:45', 'Monroe Hall 116'),
(14077, 1228, 'Personality Psychology', 3400, 'PSYC', 'Erin Horn', 3, 'TuTh', '12:30-1:45', 'Gilmer Hall 390'),
(14078, 1228, 'Brain Systems Involved in Memory', 4250, 'PSYC', 'Cedric Williams', 3, 'TuTh', '9:30-10:45', 'Monroe Hall 118'),
(14178, 1228, 'Cognitive Aging', 4310, 'PSYC', 'Mariana Golino', 3, 'Tu', '9:00-11:30', 'Clinical Department Wing 2677'),
(14184, 1228, 'Research Methods in Developmental Psychology', 3415, 'PSYC', 'Vikram Jaswal', 3, 'TuTh', '9:30-10:45', 'Chemistry Bldg 306'),
(14185, 1228, 'RM: Brain Mapping with MRI', 4420, 'PSYC', 'John Van Horn', 3, 'TuTh', '9:30-10:45', 'Dell 2 101'),
(14392, 1228, 'Psychology of Inequality', 4645, 'PSYC', 'Jazmin Brown-Iannuzzi', 3, 'We', '2:00-4:30', 'Shannon House 111'),
(15525, 1228, 'Single Variable Calculus II', 1110, 'APMA', 'Stacie Pisano', 4, 'Tu', '1:00-1:50', 'Olsson Hall 009'),
(15526, 1228, 'Single Variable Calculus II', 1110, 'APMA', 'Stacie Pisano', 4, 'Tu', '8:30-9:20', 'Olsson Hall 005'),
(15527, 1228, 'Single Variable Calculus II', 1110, 'APMA', 'Farzad Shafiei Dizaji', 4, 'Tu', '8:30-9:20', 'Mechanical Engr Bldg 205'),
(15528, 1228, 'Single Variable Calculus II', 1110, 'APMA', 'Meiqin Li', 4, 'Tu', '1:00-1:50', 'Chemical Engineering Bldg 005'),
(15529, 1228, 'Single Variable Calculus II', 1110, 'APMA', 'Monika Abramenko', 4, 'Tu', '1:00-1:50', 'Olsson Hall 005'),
(15530, 1228, 'Multivariable Calculus', 2120, 'APMA', 'Christian Hellings', 4, 'Tu', '1:00-1:50', 'Mechanical Engr Bldg 339'),
(15531, 1228, 'Multivariable Calculus', 2120, 'APMA', 'Christian Hellings', 4, 'Tu', '8:30-9:20', 'Olsson Hall 011'),
(15532, 1228, 'Multivariable Calculus', 2120, 'APMA', 'Asif Mahmood', 4, 'Tu', '1:00-1:50', 'Mechanical Engr Bldg 205'),
(15533, 1228, 'Ordinary Differential Equations', 2130, 'APMA', 'Julie Spencer', 4, 'Th', '8:30-9:20', 'Olsson Hall 005'),
(15534, 1228, 'Ordinary Differential Equations', 2130, 'APMA', 'Gianluca Guadagni', 4, 'Th', '1:00-1:50', 'Mechanical Engr Bldg 339'),
(15535, 1228, 'Ordinary Differential Equations', 2130, 'APMA', 'Thiwanka Fernando', 4, 'Th', '8:30-9:20', 'Mechanical Engr Bldg 339'),
(15536, 1228, 'Ordinary Differential Equations', 2130, 'APMA', 'Farzad Shafiei Dizaji', 4, 'Th', '1:00-1:50', 'Mechanical Engr Bldg 341'),
(15537, 1228, 'Linear Algebra', 3080, 'APMA', 'Monika Abramenko', 3, 'MoWeFr', '12:00-12:50', 'Chemical Engineering Bldg 005'),
(15538, 1228, 'Linear Algebra', 3080, 'APMA', 'Marek-Jerzy Pindera', 3, 'MoWeFr', '1:00-1:50', 'Olsson Hall 009'),
(15539, 1228, 'Linear Algebra', 3080, 'APMA', 'Monika Abramenko', 3, 'MoWeFr', '11:00-11:50', 'Chemical Engineering Bldg 005'),
(15540, 1228, 'Probability', 3100, 'APMA', 'Hui Ma', 3, 'MoWeFr', '12:00-12:50', 'Olsson Hall 011'),
(15541, 1228, 'Probability', 3100, 'APMA', 'Roman Krzysztofowicz', 3, 'MoWeFr', '11:00-11:50', 'Thornton Hall D223'),
(15542, 1228, 'Probability', 3100, 'APMA', 'Cong Shen', 3, 'MoWeFr', '12:00-12:50', 'Thornton Hall E303'),
(15543, 1228, 'Applied Statistics and Probability', 3110, 'APMA', 'Deepyaman Maiti', 3, 'MoWeFr', '1:00-1:50', 'Olsson Hall 005'),
(15544, 1228, 'Applied Statistics and Probability', 3110, 'APMA', 'Julie Spencer', 3, 'MoWeFr', '12:00-12:50', 'Olsson Hall 018'),
(15545, 1228, 'Applied Statistics and Probability', 3110, 'APMA', 'Gary Koenig', 3, 'MoWeFr', '2:00-2:50', 'Olsson Hall 009'),
(15546, 1228, 'Statistics', 3120, 'APMA', 'James Lark', 3, 'TuTh', '11:00-12:15', 'Olsson Hall 005'),
(15547, 1228, 'Statistics', 3120, 'APMA', 'James Lark', 3, 'TuTh', '2:00-3:15', 'Olsson Hall 011'),
(15548, 1228, 'Applied Partial Differential Equations', 3140, 'APMA', 'Diana Morris', 3, 'MoWeFr', '9:00-9:50', 'Olsson Hall 011'),
(15560, 1228, 'Introduction to Programming', 1112, 'CS', 'Jim Cohoon', 3, 'MoWeFr', '2:00-3:15', 'Rice Hall 130'),
(15567, 1228, 'Program and Data Representation', 2150, 'CS', 'Aaron Bloomfield', 3, 'MoWeFr', '1:00-1:50', 'Olsson Hall 018'),
(15568, 1228, 'Computer Architecture', 3330, 'CS', 'Charles Reiss', 3, 'TuTh', '11:00-12:15', 'Gilmer Hall 301'),
(15569, 1228, 'Operating Systems', 4414, 'CS', 'Kevin Skadron', 3, 'TuTh', '2:00-3:15', 'Rice Hall 130'),
(15609, 1228, 'The Engineer, Ethics, and Professional Responsibility', 4600, 'STS', 'Kathryn Neeley', 3, 'TuTh', '9:30-10:45', 'Thornton Hall D222'),
(15631, 1228, 'New Product Development', 4810, 'STS', 'Rob Archer', 3, 'MoWe', '3:30-4:45', 'Mechanical Engr Bldg 339'),
(15651, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Peter Norton', 3, 'MoWe', '2:00-3:15', 'Thornton Hall D223'),
(15652, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Peter Norton', 3, 'MoWe', '3:30-4:45', 'Thornton Hall D223'),
(15653, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Peter Norton', 3, 'MoWe', '5:00-6:15', 'Thornton Hall D223'),
(15654, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Benjamin Laugelli', 3, 'Mo', '5:00-7:30', 'Wilsdorf Hall 101'),
(15660, 1228, 'Ordinary Differential Equations', 2130, 'APMA', 'Diana Morris', 4, 'Th', '8:30-9:20', 'Olsson Hall 011'),
(15884, 1228, 'Single Variable Calculus I', 1090, 'APMA', 'Thiwanka Fernando', 4, 'Tu', '8:30-9:20', 'Mechanical Engr Bldg 339'),
(15931, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Kent Wayland', 3, 'TuTh', '5:00-6:15', 'Thornton Hall D223'),
(15932, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Caitlin Wylie', 3, 'MoWe', '12:30-1:45', 'Wilsdorf Hall 101'),
(15933, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Bryn Seabrook', 3, 'TuTh', '11:00-12:15', 'Rice Hall 032'),
(15934, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Rider Foley', 3, 'MoWe', '3:30-4:45', 'Thornton Hall D115'),
(15935, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Catherine Baritaud', 3, 'TuTh', '11:00-12:15', 'Web-Based Course'),
(15936, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Catherine Baritaud', 3, 'TuTh', '2:00-3:15', 'Web-Based Course'),
(15937, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Rider Foley', 3, 'MoWe', '2:00-3:15', 'Thornton Hall D115'),
(15991, 1228, 'Advanced Software Development Techniques', 3240, 'CS', 'Paul McBurney', 3, 'TuTh', '3:30-4:45', 'Rice Hall 130'),
(16002, 1228, 'Science, Technology, and Contemporary Issues', 1500, 'STS', 'Benjamin Laugelli', 3, 'Mo', '1:00-1:50', 'Mechanical Engr Bldg 205'),
(16003, 1228, 'Introduction to Programming', 1110, 'CS', 'Raymond Pettit', 3, 'MoWeFr', '2:00-2:50', 'John W. Warner Hall 209'),
(16005, 1228, 'STS and Engineering Practice', 4500, 'STS', 'MC Forelle', 3, 'TuTh', '2:00-3:15', 'Thornton Hall D223'),
(16025, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Kent Wayland', 3, 'TuTh', '3:30-4:45', 'Thornton Hall D222'),
(16026, 1228, 'STS and Engineering Practice', 4500, 'STS', 'MC Forelle', 3, 'TuTh', '3:30-4:45', 'Thornton Hall D223'),
(16027, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Bryn Seabrook', 3, 'TuTh', '9:30-10:45', 'Rice Hall 032'),
(16038, 1228, 'Multivariable Calculus', 2120, 'APMA', 'Asif Mahmood', 4, 'Tu', '8:30-9:20', 'Olsson Hall 120'),
(16043, 1228, 'Science, Technology, and Contemporary Issues', 1500, 'STS', 'Benjamin Laugelli', 3, 'We', '1:00-1:50', 'Mechanical Engr Bldg 205'),
(16058, 1228, 'Multivariable Calculus', 2120, 'APMA', 'Asif Mahmood', 4, 'Tu', '8:30-9:20', 'Olsson Hall 120'),
(16080, 1228, 'Ordinary Differential Equations', 2130, 'APMA', 'Robert Williams', 4, 'Th', '1:00-1:50', 'Chemical Engineering Bldg 005'),
(16089, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Kent Wayland', 3, 'TuTh', '12:30-1:45', 'Rice Hall 032'),
(16090, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Joshua Earle', 3, 'MoWe', '12:30-1:45', 'Thornton Hall D222'),
(16095, 1228, 'HCI in Software Development', 3205, 'CS', 'Panagiotis Apostolellis', 3, 'TuTh', '12:30-1:45', 'Rice Hall 130'),
(16156, 1228, 'Artificial Intelligence', 4710, 'CS', 'Lu Feng', 3, 'TuTh', '5:00-6:15', 'Thornton Hall E316'),
(16161, 1228, 'Linear Algebra', 3080, 'APMA', 'Meiqin Li', 3, 'MoWeFr', '12:00-12:50', 'Thornton Hall E316'),
(16167, 1228, 'Ordinary Differential Equations', 2130, 'APMA', 'Julie Spencer', 4, 'Th', '1:00-1:50', 'Olsson Hall 009'),
(16181, 1228, 'Introduction to Programming', 1111, 'CS', 'Panagiotis Apostolellis', 3, 'MoWe', '3:30-4:45', 'Thornton Hall E316'),
(16189, 1228, 'Database Systems', 4750, 'CS', 'Upsorn Praphamontripong', 3, 'MoWeFr', '11:00-11:50', 'Rice Hall 130'),
(16221, 1228, 'From Data to Knowledge', 3150, 'APMA', 'Gianluca Guadagni', 3, 'MoWe', '3:30-4:45', 'Thornton Hall E304'),
(16222, 1228, 'Engineers & the Art of the Deal', 2730, 'STS', 'Milton Whitfield', 3, 'Tu', '3:30-6:00', 'Mechanical Engr Bldg 341'),
(16231, 1228, 'Introduction to Programming', 1110, 'CS', 'Briana Morrison', 3, 'MoWeFr', '12:00-12:50', 'Rice Hall 130'),
(16233, 1228, 'Computer Architecture', 6354, 'CS', 'Ashish Venkat', 3, 'MoWe', '12:30-1:45', 'Thornton Hall D223'),
(16258, 1228, 'Computer Architecture', 3330, 'CS', 'Charles Reiss', 3, 'TuTh', '9:30-10:45', 'Gilmer Hall 301'),
(16351, 1228, 'Introduction to Information Technology', 1010, 'CS', 'Derrick Stone', 3, 'MoWe', '5:00-6:15', 'Olsson Hall 009'),
(16352, 1228, 'Compilers', 4620, 'CS', 'Matthew Dwyer', 3, 'TuTh', '11:00-12:15', 'Thornton Hall E316'),
(16378, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Joshua Earle', 3, 'MoWe', '5:00-6:15', 'Thornton Hall D222'),
(16405, 1228, 'Introduction to Programming', 1110, 'CS', 'Raymond Pettit', 3, 'MoWeFr', '3:30-4:20', 'Rice Hall 130'),
(16421, 1228, 'Single Variable Calculus II', 1110, 'APMA', 'Farzad Shafiei Dizaji', 4, 'Tu', '8:30-9:20', 'Mechanical Engr Bldg 205'),
(16463, 1228, 'Single Variable Calculus I', 1090, 'APMA', 'Thiwanka Fernando', 4, 'Tu', '1:00-1:50', 'Mechanical Engr Bldg 341'),
(16484, 1228, 'Introduction to Programming', 1110, 'CS', 'Briana Morrison', 3, 'MoWeFr', '9:00-9:50', 'Rice Hall 130'),
(16496, 1228, 'Statistics', 3120, 'APMA', 'James Lark', 3, 'TuTh', '3:30-4:45', 'Olsson Hall 011'),
(16505, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Brad Campbell', 3, 'TuTh', '11:00-12:15', 'Rice Hall 340'),
(16521, 1228, 'Government and Entrepreneurship', 2850, 'STS', 'James Cheng', 3, 'MoWe', '3:30-4:45', 'Chemical Engineering Bldg 005'),
(16588, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Seongkook Heo', 3, 'MoWe', '5:00-6:15', 'Olsson Hall 011'),
(16589, 1228, 'Technology and Policy: Where Intent Meets Process', 2760, 'STS', 'Milton Whitfield', 3, 'Th', '2:00-3:15', 'Web-Based Course'),
(16590, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Joshua Earle', 3, 'MoWe', '3:30-4:45', 'Rice Hall 340'),
(16591, 1228, 'STS and Engineering Practice', 4500, 'STS', 'MC Forelle', 3, 'TuTh', '11:00-12:15', 'Thornton Hall D223'),
(16616, 1228, 'Introduction to Cybersecurity', 3710, 'CS', 'Angela Orebaugh', 3, 'MoWeFr', '10:00-10:50', 'Nau Hall 101'),
(16617, 1228, 'Software Testing', 3250, 'CS', 'Upsorn Praphamontripong', 3, 'TuTh', '11:00-12:15', 'Rice Hall 130'),
(16618, 1228, 'Machine Learning', 4774, 'CS', 'Rich Nguyen', 3, 'TuTh', '3:30-4:45', 'Mechanical Engr Bldg 205'),
(16620, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'Yixin Sun', 3, 'MoWe', '2:00-3:15', 'Thornton Hall E316'),
(16629, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'David Evans', 3, 'TuTh', '12:30-1:45', 'Olsson Hall 120'),
(16651, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Benjamin Laugelli', 3, 'Tu', '5:00-7:30', 'Wilsdorf Hall 101'),
(16814, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Catherine Baritaud', 3, 'TuTh', '9:30-10:45', 'Web-Based Course'),
(16815, 1228, 'Science and Technology in Social and Global Context', 2500, 'STS', 'Caitlin Wylie', 3, 'MoWe', '2:00-3:15', 'Wilsdorf Hall 101'),
(16818, 1228, 'Introduction to Cybersecurity', 3710, 'CS', 'William Shand', 3, 'MoWeFr', '1:00-1:50', 'Olsson Hall 120'),
(16819, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'Jack Davidson', 3, 'MoWe', '3:30-4:45', 'Olsson Hall 005'),
(16848, 1228, 'Linear Algebra', 3080, 'APMA', 'Meiqin Li', 3, 'MoWeFr', '1:00-1:50', 'Thornton Hall E316'),
(16849, 1228, 'Probability', 3100, 'APMA', 'Christian Hellings', 3, 'MoWeFr', '12:00-12:50', 'Olsson Hall 005'),
(16850, 1228, 'Applied Partial Differential Equations', 3140, 'APMA', 'Diana Morris', 3, 'MoWeFr', '11:00-11:50', 'Olsson Hall 011'),
(16866, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Nicola Bezzo', 3, 'We', '12:30-1:45', 'Rice Hall 120'),
(16867, 1228, 'Startup Operations for Entrepreneurs', 2830, 'STS', 'George Prpich', 3, 'TuTh', '12:30-1:45', 'Thornton Hall D223'),
(16913, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Farzad Hassanzadeh', 3, 'MoWe', '2:00-3:15', 'Mechanical Engr Bldg 339'),
(16919, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Tom Fletcher', 3, 'TuTh', '2:00-3:15', 'Olsson Hall 005'),
(16921, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Miaomiao Zhang', 3, 'MoWe', '3:30-4:45', 'Thornton Hall E303'),
(16926, 1228, 'Mobile Application Development', 4720, 'CS', 'Mark Sherriff', 3, 'MoWeFr', '2:00-2:50', 'Olsson Hall 018'),
(16938, 1228, 'Science and Technology in Social and Global Context', 2500, 'STS', 'William Davis', 3, 'TuTh', '2:00-3:15', 'Thornton Hall A207'),
(16957, 1228, 'Introduction to Sustainable Energy Systems', 2050, 'STS', 'James Groves', 3, 'TuTh', '2:00-3:15', 'Wilson Hall 301'),
(16967, 1228, 'Single Variable Calculus I', 1090, 'APMA', 'Hui Ma', 4, 'Tu', '1:00-1:50', 'Thornton Hall E304'),
(16972, 1228, 'Cloud Computing', 6111, 'CS', 'Haiying Shen', 3, 'TuTh', '3:30-4:45', 'Olsson Hall 120'),
(16979, 1228, 'Signal Processing, Machine Learning and Control', 6762, 'CS', 'Felix Lin', 3, 'TuTh', '12:30-1:45', 'Rice Hall 340'),
(17009, 1228, 'Discrete Mathematics and Theory 1', 2120, 'CS', 'Elizabeth Orrico', 3, 'MoWeFr', '2:00-2:50', 'Mechanical Engr Bldg 205'),
(17010, 1228, 'Discrete Mathematics and Theory 1', 2120, 'CS', 'Kevin Sullivan', 3, 'TuTh', '3:30-4:45', 'Minor Hall 125'),
(17011, 1228, 'Discrete Mathematics and Theory 1', 2120, 'CS', 'Elizabeth Orrico', 3, 'MoWeFr', '3:30-4:20', 'Mechanical Engr Bldg 205'),
(17012, 1228, 'Discrete Mathematics and Theory 1', 2120, 'CS', 'Nathan Brunelle', 3, 'MoWeFr', '11:00-11:50', 'Olsson Hall 120'),
(17068, 1228, 'Science, Technology, and Contemporary Issues', 1500, 'STS', 'Benjamin Laugelli', 3, 'Fr', '1:00-1:50', 'Mechanical Engr Bldg 205'),
(17077, 1228, 'Single Variable Calculus I', 1090, 'APMA', 'Hui Ma', 4, 'Tu', '8:30-9:20', 'Thornton Hall E303'),
(17083, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Afsaneh Doryab', 3, 'TuTh', '2:00-3:15', 'Rice Hall 340'),
(17128, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Brad Campbell', 3, 'TuTh', '9:30-10:45', 'Rice Hall 340'),
(17697, 1228, 'Foundations of Machine Learning', 3001, 'DS', 'Brian Wright', 3, 'Th', '3:30-6:00', 'Dell 1 105'),
(17703, 1228, 'Data Science Systems', 2002, 'DS', 'Jason Williamson', 3, 'MoWe', '5:00-6:15', 'John W. Warner Hall 115'),
(17704, 1228, 'Programming for Data Science', 1002, 'DS', 'Natalie Kupperman', 3, 'MoWe', '5:00-6:15', 'Monroe Hall 134'),
(17705, 1228, 'Communicating with Data', 2003, 'DS', 'Bruce Corliss', 3, 'TuTh', '9:30-10:45', 'Ridley Hall G006'),
(18329, 1228, 'Design and Analysis of Sample Surveys', 3130, 'STAT', 'Dan Spitzner', 3, 'MoWeFr', '11:00-11:50', 'Gibson Hall 211'),
(18330, 1228, 'Data Analysis with Python', 3250, 'STAT', 'Jeffrey Holt', 3, 'MoWe', '5:00-6:15', 'Clark Hall 108'),
(18331, 1228, 'Data Analysis with Python', 3250, 'STAT', '-', 3, 'MoWe', '3:30-4:45', 'Clark Hall 101'),
(18333, 1228, 'Capstone', 4996, 'STAT', 'Gretchen Martinet', 3, 'MoWe', '2:00-3:15', 'Dell 2 100'),
(18334, 1228, 'Applied Causal Inference', 5350, 'STAT', 'Jordan Rodu', 3, 'MoWe', '2:00-3:15', 'Monroe Hall 116'),
(18335, 1228, 'Introduction to Advanced Probability', 7200, 'STAT', 'Taylor Brown', 3, 'TuTh', '2:00-3:15', 'New Cabell Hall 323'),
(18336, 1228, 'Statistical Consulting', 7995, 'STAT', 'Karen Kafadar', 3, 'TuTh', '11:00-12:15', 'Chemistry Bldg 306'),
(18346, 1228, 'Adolescence: Theory and Development', 3480, 'PSYC', 'Joseph Allen', 3, 'TuTh', '11:00-12:15', 'Wilson Hall 402'),
(18347, 1228, 'RM: Social Psychology', 3439, 'PSYC', 'Jazmin Brown-Iannuzzi', 3, 'Tu', '2:00-4:30', 'Dell 1 105'),
(18348, 1228, 'Special Topics in Psychology', 4500, 'PSYC', 'Mariana Golino', 3, 'Th', '9:00-11:30', 'Clinical Department Wing 2677'),
(18353, 1228, 'Advanced Cognitive Psychology', 7120, 'PSYC', 'Daniel Willingham', 3, 'TuTh', '2:00-3:15', 'Shannon House 111'),
(18363, 1228, 'Psychological Assessment', 7430, 'PSYC', 'Patricia Llewellyn', 4, 'TuTh', '9:30-10:45', 'Pavilion V 109'),
(18365, 1228, 'Experimental Psychopathology', 7470, 'PSYC', 'Eric Turkheimer', 3, 'Tu', '3:30-6:00', 'Clinical Department Wing 2677'),
(18366, 1228, 'Dynamical Systems Analysis', 8730, 'PSYC', 'Steven Boker', 3, 'Mo', '9:00-11:30', 'Pavilion VIII 103'),
(18788, 1228, 'Data Structures and Algorithms 1', 2100, 'CS', 'Derrick Stone', 4, 'MoWeFr', '9:00-9:50', 'Gilmer Hall 301'),
(18789, 1228, 'Data Structures and Algorithms 1', 2100, 'CS', 'Tom Horton', 4, 'MoWeFr', '12:00-12:50', 'Olsson Hall 120'),
(18790, 1228, 'Data Structures and Algorithms 1', 2100, 'CS', 'Nada Basit', 4, 'MoWeFr', '1:00-1:50', 'Rice Hall 130'),
(18802, 1228, 'Software Development Essentials', 3140, 'CS', 'Paul McBurney', 3, 'TuTh', '12:30-1:45', 'Gilmer Hall 301'),
(18803, 1228, 'Software Development Essentials', 3140, 'CS', 'Rich Nguyen', 3, 'TuTh', '2:00-3:15', 'Gilmer Hall 301'),
(18804, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'Aaron Bloomfield', 3, 'MoWe', '2:00-3:15', 'Thornton Hall E303'),
(18805, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'Sebastian Elbaum', 3, 'MoWe', '3:30-4:45', 'Olsson Hall 011'),
(18806, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'Tianhao Wang', 3, 'MoWe', '3:30-4:45', 'Mechanical Engr Bldg 341'),
(18809, 1228, 'Machine Learning', 6316, 'CS', 'Aidong Zhang', 3, 'MoWe', '2:00-3:15', 'Olsson Hall 005'),
(18815, 1228, 'Quantified Cognition', 5332, 'PSYC', 'Per Sederberg', 3, 'Th', '2:00-4:30', 'Gilmer Hall 245'),
(18970, 1228, 'Science and Technology in Social and Global Context', 2500, 'STS', 'Jason Jones', 3, 'TuTh', '9:30-10:45', 'Elson Student Health Center'),
(18971, 1228, 'Science and Technology in Social and Global Context', 2500, 'STS', 'Rosalyn Berne', 3, 'MoWe', '2:00-3:15', 'Rice Hall 032'),
(18972, 1228, 'Science and Technology in Social and Global Context', 2500, 'STS', 'William Davis', 3, 'TuTh', '3:30-4:45', 'Thornton Hall A207'),
(18973, 1228, 'Probability', 3100, 'APMA', 'Megan Ryals', 3, 'MoWeFr', '1:00-1:50', 'Mechanical Engr Bldg 341'),
(19006, 1228, 'The Engineer, Ethics, and Professional Responsibility', 4600, 'STS', 'Kathryn Neeley', 3, 'TuTh', '11:00-12:15', 'Thornton Hall D222'),
(19016, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Madhur Behl', 3, 'TuTh', '2:00-3:15', 'Olsson Hall 120'),
(19017, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Shangtong Zhang', 3, 'TuTh', '9:30-10:45', 'Mechanical Engr Bldg 339'),
(19023, 1228, 'Data Science Systems', 2002, 'DS', 'Jon Tupitza', 3, 'MoWe', '6:30-7:45', 'John W. Warner Hall 115'),
(19026, 1228, 'Communicating with Data', 2003, 'DS', 'Natalie Kupperman', 3, 'TuTh', '2:00-3:15', 'Clark Hall G004'),
(19550, 1228, 'The Psychology of Inequality', 7645, 'PSYC', 'Jazmin Brown-Iannuzzi', 3, 'We', '2:00-4:30', 'Shannon House 111'),
(19555, 1228, 'Defense Against the Dark Arts', 4630, 'CS', 'Wajih Ul Hassan', 3, 'TuTh', '3:30-4:45', 'Thornton Hall E316'),
(19568, 1228, 'Psychology of Emotions', 4640, 'PSYC', 'Adrienne Wood', 3, 'TuTh', '2:00-3:15', 'Gilmer Hall 247'),
(19571, 1228, 'Neuroscience of Learning, Emotions and Motivation of Functional Behavior', 4100, 'PSYC', 'Cedric Williams', 3, 'TuTh', '8:00-9:15', 'Monroe Hall 124'),
(19630, 1228, 'Probability', 3100, 'APMA', 'Megan Ryals', 3, 'MoWeFr', '10:00-10:50', 'Thornton Hall E304'),
(19635, 1228, 'Multivariable Calculus', 2120, 'APMA', 'Megan Ryals', 4, 'Tu', '1:00-1:50', 'Thornton Hall E303'),
(19655, 1228, 'Data Structures and Algorithms 2', 3100, 'CS', 'Mark Floryan', 3, 'MoWeFr', '12:00-12:50', 'Gilmer Hall 301'),
(19656, 1228, 'Data Structures and Algorithms 2', 3100, 'CS', 'Mark Floryan', 3, 'MoWeFr', '1:00-1:50', 'Gilmer Hall 301'),
(19660, 1228, 'Advanced Software Development Techniques', 3240, 'CS', 'Mark Sherriff', 3, 'TuTh', '9:30-10:45', 'Rice Hall 130'),
(19682, 1228, 'Computer Systems and Organization 1', 2130, 'CS', 'Robbie Hott', 4, 'WeFr', '2:00-2:50', 'Chemistry Bldg 402'),
(19683, 1228, 'Computer Systems and Organization 1', 2130, 'CS', 'Robbie Hott', 4, 'WeFr', '3:00-3:50', 'Chemistry Bldg 402'),
(19740, 1228, 'Theory of Computation', 3102, 'CS', 'Nathan Brunelle', 3, 'MoWe', '3:30-4:45', 'John W. Warner Hall 209'),
(19741, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'Miaomiao Zhang', 3, 'MoWe', '3:30-4:45', 'Thornton Hall E303'),
(20041, 1228, 'Cloud Computing', 4740, 'CS', 'Neal Magee', 3, 'TuTh', '11:00-12:15', 'Thornton Hall E303'),
(20055, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'Hongning Wang', 3, 'TuTh', '9:30-10:45', 'Thornton Hall E303'),
(20058, 1228, 'Special Topics in Engineering and Sociotechnical Systems', 6592, 'STS', 'Bryn Seabrook', 3, 'MoWe', '12:30-1:45', 'Rice Hall 032'),
(20084, 1228, 'Special Topics in Psychology', 4500, 'PSYC', 'Lucy Guarnera', 3, 'Mo', '2:00-4:30', 'Clinical Department Wing 2677'),
(20134, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Richard Jacques', 3, 'MoWe', '12:30-1:45', 'Thornton Hall D115'),
(20135, 1228, 'STS and Engineering Practice', 4500, 'STS', 'Richard Jacques', 3, 'MoWe', '3:30-4:45', 'Thornton Hall D222'),
(20145, 1228, 'Practica in Community Psychology and Prevention Science', 7481, 'PSYC', 'Lucy Guarnera', 3, 'We', '9:00-11:30', 'Clark G043'),
(20174, 1228, 'Data Science Project Course', 4002, 'DS', 'Loreto Alonzi', 3, 'We', '5:00-7:30', 'Gibson Hall 211'),
(20180, 1228, 'Special Topics in Computer Science', 4501, 'CS', 'Farzad Hassanzadeh', 3, 'MoWe', '2:00-3:15', 'Mechanical Engr Bldg 339'),
(20250, 1228, 'Special Topics in Psychology', 4500, 'PSYC', 'Christina Carroll', 3, 'Mo', '9:00-11:30', 'Clinical Department Wing 2677'),
(20252, 1228, 'Special Topics in Psychology', 4500, 'PSYC', 'Yanbin Li', 3, 'Th', '3:30-6:00', 'Clinical Department Wing 2677'),
(20254, 1228, 'The Neuroscience of Social Relationships', 5326, 'PSYC', 'James Coan', 3, 'TuTh', '2:00-3:15', 'New Cabell Hall 303'),
(20275, 1228, 'Special Topics in Computer Science', 8501, 'CS', 'Yangfeng Ji', 3, 'MoWe', '12:30-1:45', 'Rice Hall 340'),
(20802, 1228, 'New Course in Psychology', 7559, 'PSYC', 'Tobias Grossmann', 3, 'We', '2:00-4:30', 'Contact Department'),
(21006, 1228, 'Introduction to Regression Analysis', 3220, 'STAT', 'Krista Varanyak', 3, 'TuTh', '8:00-9:15', 'Chemistry Bldg 206'),
(21120, 1228, 'Multivariable Calculus', 2120, 'APMA', 'Hamid Hosseinianfar', 4, 'Tu', '8:30-9:20', 'Thornton Hall D223'),
(21261, 1228, 'Special Topics in Computer Science', 6501, 'CS', 'Tianhao Wang', 3, 'MoWe', '3:30-4:45', 'Mechanical Engr Bldg 341'),
(21622, 1228, 'Current Topics in Psychology', 5500, 'PSYC', 'Erin Horn', 3, 'TuTh', '12:30-1:45', '-');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `studentId` varchar(7) NOT NULL,
  `semesterId` varchar(5) NOT NULL,
  `courseId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`studentId`, `semesterId`, `courseId`) VALUES
('asdasd', '1228', '17077'),
('asdasd', '1228', '17704');

-- --------------------------------------------------------

--
-- Table structure for table `friends_with`
--

CREATE TABLE `friends_with` (
  `studentId` varchar(7) NOT NULL,
  `friendId` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends_with`
--

INSERT INTO `friends_with` (`studentId`, `friendId`) VALUES
('asdasd', 'asdfgh'),
('asdfgh', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `pending_requests`
--

CREATE TABLE `pending_requests` (
  `studentId` varchar(7) NOT NULL,
  `senderId` varchar(7) NOT NULL,
  `sendDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_requests`
--

INSERT INTO `pending_requests` (`studentId`, `senderId`, `sendDate`) VALUES
('ewq321', 'asdasd', '2022-11-16 17:27:35'),
('mkonji', 'asdasd', '2022-11-16 17:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `prerequisites`
--

CREATE TABLE `prerequisites` (
  `courseId` varchar(20) NOT NULL,
  `prereqId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedulegeneral`
--

CREATE TABLE `schedulegeneral` (
  `studentId` varchar(7) NOT NULL,
  `semesterId` varchar(5) NOT NULL,
  `creditHours` int(11) DEFAULT NULL,
  `is_public` varchar(5) DEFAULT NULL CHECK (`is_public` in ('TRUE','FALSE'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `semestercourses`
--

CREATE TABLE `semestercourses` (
  `semesterId` varchar(5) NOT NULL,
  `courseId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` text DEFAULT NULL,
  `schoolYear` int(1) DEFAULT NULL,
  `major` text DEFAULT NULL,
  `minor` text DEFAULT NULL,
  `studentId` varchar(7) NOT NULL,
  `password` text NOT NULL
) ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `schoolYear`, `major`, `minor`, `studentId`, `password`) VALUES
('John Smith', 4, 'Biology', 'n/a', 'asdasd', '$2y$10$LCjYq9GG/j5lkjaJQtFk7.eJS/hGFHBWXWXRsezvx9kZIq5kd45V.'),
('Sharon Karen', 2, 'English', 'History', 'asdfgh', '$2y$10$X8rQw0SbCtQcUuNb8m5V.OQ86nTHFB6Xwta4QnV1ofhMT6/EaXW/q'),
('Febreeze Air', 1, 'Statistics', 'n/a', 'ewq321', '$2y$10$NmSS8hpCnEEPJz5.gCzKSucB2/2TpqDjiY5DGFNw7tXSp/QseTws6'),
('Jasmine Dent', 4, 'Psychology', 'Sociology', 'mkonji', '$2y$10$5ILuNnKUvoKHpyWT98a9/.o/QUKWjnB18OUwvhtttAJggkeYnwj0e'),
('Yilong Ma', 3, 'Computer Science', 'Data Science', 'qwerty', '$2y$10$hhBoxMZn/cWV1RhArU4yUuei0vu/S.vp7SIjX66LWfMxInuVeldDK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseId`);
  
ALTER TABLE course
  ADD CONSTRAINT chk_course
  CHECK (creditHours > 0 AND creditHours <= 12);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`studentId`,`semesterId`,`courseId`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `friends_with`
--
ALTER TABLE `friends_with`
  ADD PRIMARY KEY (`studentId`,`friendId`),
  ADD KEY `friendId` (`friendId`);

--
-- Indexes for table `pending_requests`
--
ALTER TABLE `pending_requests`
  ADD PRIMARY KEY (`studentId`,`senderId`),
  ADD KEY `senderId` (`senderId`);

--
-- Indexes for table `prerequisites`
--
ALTER TABLE `prerequisites`
  ADD PRIMARY KEY (`courseId`,`prereqId`),
  ADD KEY `prereqId` (`prereqId`);

--
-- Indexes for table `schedulegeneral`
--
ALTER TABLE `schedulegeneral`
  ADD KEY `studentId` (`studentId`);

--
-- Indexes for table `semestercourses`
--
ALTER TABLE `semestercourses`
  ADD PRIMARY KEY (`semesterId`,`courseId`),
  ADD KEY `courseId` (`courseId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`);
COMMIT;

CREATE PROCEDURE acceptFriendRequest @studentId VARCHAR(7), @senderId VARCHAR(7) AS
(
DELETE FROM Pending_Requests WHERE studentId = @studentId AND senderId = @senderId
INSERT INTO Friends_With (studentId, friendId) VALUES (@studentId, @senderId), (@senderId, @studentId)
)

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
