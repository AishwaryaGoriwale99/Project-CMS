-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2016 at 11:28 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `email`, `address`, `phone_no`, `designation`, `date`) VALUES
(1, 'admin', 'admin', 'email@email.com', 'jalalabad', '9987678987', '', '2015-12-11 10:58:19'),
(5, 'hilal', 'hilal', 'hilal@gmail.com', 'Jbl', '0774590003', 'Smart Boy', '2016-01-02 01:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `cash`
--

CREATE TABLE `cash` (
  `cashID` int(11) NOT NULL auto_increment,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `debitCredit` enum('Dr','Cr') NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY  (`cashID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `cash`
--

INSERT INTO `cash` (`cashID`, `amount`, `date`, `debitCredit`, `description`) VALUES
(1, 10, '2015-12-05 21:53:31', 'Cr', 'D1'),
(2, 6543, '2015-12-03 21:58:55', 'Cr', 'dddd'),
(3, 6000, '2015-12-05 22:01:26', 'Dr', 'Des'),
(4, 6000, '2015-12-05 22:02:16', 'Dr', 'Des'),
(5, 454, '2015-12-06 05:24:52', 'Dr', ''),
(6, 555, '2015-12-07 05:25:13', 'Dr', '44asdf'),
(7, 20, '2015-12-06 09:40:16', 'Cr', 'D2'),
(8, 30, '2015-12-06 09:40:46', 'Cr', 'd3'),
(9, 88888, '2015-12-07 23:26:32', 'Cr', 'ddddddd'),
(10, 777, '2015-12-07 23:34:56', 'Cr', 'Salary of January for hamdard'),
(11, 7676, '2015-12-07 23:42:47', 'Cr', 'ddddd'),
(12, 200000, '2015-12-11 10:55:59', 'Cr', 'jjjjj'),
(13, 0, '2015-12-27 10:47:01', 'Cr', ''),
(14, 0, '2015-12-27 10:50:35', 'Cr', ''),
(15, 0, '2015-12-27 10:56:56', 'Cr', ''),
(16, 0, '2015-12-27 11:53:24', 'Cr', ''),
(17, 0, '2015-12-27 11:54:16', 'Cr', ''),
(18, 0, '2015-12-27 11:56:35', 'Cr', ''),
(19, 0, '2015-12-27 11:57:05', 'Cr', ''),
(20, 8787, '2015-12-27 20:45:57', 'Cr', 'ddddd'),
(21, 66666, '2015-12-28 05:17:21', 'Cr', 'cash'),
(22, 66666, '2015-12-28 05:19:46', 'Dr', 'ttttttt'),
(23, 500, '2015-12-28 05:21:02', 'Cr', 'tea for customer '),
(24, 0, '2016-01-01 23:33:20', 'Dr', 'eeee'),
(25, 0, '2016-01-01 23:34:31', 'Cr', ''),
(26, 0, '2016-01-02 00:05:03', 'Cr', ''),
(27, 0, '2016-01-02 00:09:31', 'Cr', ''),
(28, 0, '2016-01-02 00:10:56', 'Cr', ''),
(29, 30000, '2016-01-02 00:11:30', 'Dr', 'From KUNAR TO UK'),
(30, 30400, '2016-01-02 00:12:31', 'Dr', 'From KKR TO UKR'),
(31, 343434, '2016-01-02 00:42:09', 'Dr', 'TICKET FROM UK TO KUNAR'),
(32, 545454, '2016-01-15 23:16:47', 'Dr', 'dddddd');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `comments` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `company`, `email`, `topic`, `phone`, `comments`, `date`) VALUES
(1, 'khan', 'Company', 'Email *', 'Topic', 'Phone *', '', '0000-00-00 00:00:00'),
(2, 'Ali', 'home', 'aaa@gmail.com', 'we need ticket', '87777777', '', '0000-00-00 00:00:00'),
(3, 'kkkkk', 'kkkk', 'kkk', 'kkk', 'kkkkk', 'kkkkkkComments', '0000-00-00 00:00:00'),
(4, 'khan', 'HTC', 'khan@gmail.com', 'WE need visa', '9886786787', 'klasfj klajsfklj\r\n\r\nasfjksjkdadf\r\n\r\nas\r\nf\r\nsa\r\ndf\r\nss\r\na\r\n', '2015-12-04 10:31:16'),
(5, 'Amrullah', 'Home', 'amrullah@gmail.com', 'Visa Apply', '05678765455', ' i want to go usa for tour', '2015-12-04 23:34:23'),
(6, 'Name *', 'Company', 'Email *', 'Topic', 'Phone *', 'Comments', '2015-12-05 06:22:26'),
(7, 'khalid', 'CBS ', 'K@gmail.com', 'I need visa', '07776766767', 'i Need urjent', '2015-12-28 05:24:44');

-- --------------------------------------------------------

--
-- Table structure for table `costomer`
--

CREATE TABLE `costomer` (
  `costomer_id` int(11) NOT NULL auto_increment,
  `uploadimage` text NOT NULL,
  `full_name` varchar(60) NOT NULL,
  `son_of` varchar(60) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date_of_birth` varchar(15) NOT NULL,
  `place_of_birth` varchar(60) NOT NULL,
  `previous_nationality` varchar(30) NOT NULL,
  `present_nationality` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `marital_status` varchar(30) NOT NULL,
  `sect` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `place_of_issue` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `profession` varchar(40) NOT NULL,
  `home_address` varchar(90) NOT NULL,
  `telephone_no` varchar(30) NOT NULL,
  `purpose_of_travel` varchar(60) NOT NULL,
  `date_of_passport` varchar(15) NOT NULL,
  `passport_no` varchar(30) NOT NULL,
  `date_of_passport_expiry` varchar(15) NOT NULL,
  `duration_of_stay_in_kindom` float NOT NULL,
  `date_of_arrival` varchar(15) NOT NULL,
  `date_of_departure` varchar(15) NOT NULL,
  `mode_of_payment` varchar(30) NOT NULL,
  `relationship` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `carriers_name` varchar(30) NOT NULL,
  `visa_no` varchar(30) NOT NULL,
  `date_of_insertion` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `inserted_by` varchar(11) NOT NULL,
  PRIMARY KEY  (`costomer_id`),
  UNIQUE KEY `date_of_passport_expiry` (`date_of_passport_expiry`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `costomer`
--

INSERT INTO `costomer` (`costomer_id`, `uploadimage`, `full_name`, `son_of`, `status`, `date_of_birth`, `place_of_birth`, `previous_nationality`, `present_nationality`, `sex`, `marital_status`, `sect`, `religion`, `place_of_issue`, `qualification`, `profession`, `home_address`, `telephone_no`, `purpose_of_travel`, `date_of_passport`, `passport_no`, `date_of_passport_expiry`, `duration_of_stay_in_kindom`, `date_of_arrival`, `date_of_departure`, `mode_of_payment`, `relationship`, `destination`, `carriers_name`, `visa_no`, `date_of_insertion`, `inserted_by`) VALUES
(103, 'user/received_889448627790347.jpeg', 'Zabihullah Hayat', 'Hayatullah Hayat', 'APPROVED', '02/12/2015', 'Kabul', 'Afghani', 'Afghani', 'MALE', 'MARRIED', 'Sunni', 'Islam', 'Kabul', 'GRADUATION', 'Kabul Shahrenow ', 'Networking', '0789595299', 'VISIT', '02/12/2015', '9595299', '02/12/2015', 15, '03/12/2015', '02/12/2015', 'Account Transfer', 'Ikram Brother', 'Kabul', 'Zabih Hayat', 'visa_no', '2015-12-02 11:59:01', 'hilal'),
(104, 'user/CYMERA_20151109_130148.jpg', 'Asmat Safi', 'Haji wakeel', 'APPENDED', '08/12/1998', 'Kunar', 'Afghan', 'Afghan', 'MALE', 'MARRIED', 'Sunni', 'Islam', 'Kabul ', 'GRADUATION', 'Kunar Naria', 'Programer', '078787878', 'WORK', '08/12/2015', '989898', '13/12/2016', 12, '15/12/2015', '23/12/2015', 'Bank transfer', 'Uncle of Khalid SHerzad', 'Kabul Afghanistan', 'Attaullah', 'visa_no', '2015-12-27 10:45:13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `daily_expenditure`
--

CREATE TABLE `daily_expenditure` (
  `id` int(11) NOT NULL auto_increment,
  `voucher_no` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(60) NOT NULL,
  `amount` float NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `inserted_by` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `voucher_no` (`voucher_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `daily_expenditure`
--

INSERT INTO `daily_expenditure` (`id`, `voucher_no`, `title`, `description`, `amount`, `date`, `inserted_by`) VALUES
(1, 1, 'V1', 'D1', 100, '2015-12-07 23:44:42', '1'),
(2, 2, 'V2', 'D2', 20, '2015-12-06 09:40:16', '5'),
(3, 3, 'v3', 'd3', 30, '2015-12-06 09:40:46', '5'),
(4, 55, 'Tea ', 'tea for customer ', 500, '2015-12-28 05:21:02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(11) NOT NULL auto_increment,
  `costomer_id` int(11) NOT NULL,
  `document_type` varchar(30) NOT NULL,
  `document` text NOT NULL,
  `inserted_by` varchar(11) NOT NULL,
  PRIMARY KEY  (`document_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `costomer_id`, `document_type`, `document`, `inserted_by`) VALUES
(4, 103, 'jjjjjjj', 'user/CYMERA_20150919_145204.jpg', '5'),
(5, 103, 'PIC', 'user/IMG_5982.JPG', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(100) NOT NULL auto_increment,
  `emp_name` varchar(100) NOT NULL,
  `emp_picture` varchar(100) NOT NULL,
  `emp_contact` varchar(100) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_reference` varchar(100) NOT NULL,
  `emp_desc` varchar(100) NOT NULL,
  `emp_join` varchar(100) NOT NULL,
  `emp_close` varchar(100) NOT NULL,
  PRIMARY KEY  (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_picture`, `emp_contact`, `emp_email`, `emp_address`, `emp_reference`, `emp_desc`, `emp_join`, `emp_close`) VALUES
(65, 'Abdullah Hamdard', 'user/aslkdfjlk.jpg', '0799000033', 'Hamdard@gmail.com', 'Kabul Darulaman', 'CPTEAM-Afghanistan', 'Hamdard is a kind boy', '', 'Continue'),
(66, 'Haqdost', 'user/received_1945261712366464.jpeg', '07565756', 'ha@gmail.com', 'Mazar Shareef', 'Hayat saib', 'Started with low salary 300$', '2015-12-01', '2015-12-31'),
(70, 'ali', 'user/DSC03397.JPG', 'jan', 'uuuuu@gamil.com', 'jal', 'khan', '', '2015-12-23', ''),
(74, 'Sijdah', 'user/BeautyPlus_20150902105307_fast.jpg', '98888888', 'ee@gmail.com', 'kkkk', 'kkkkkk', 'jjjjj', '2016-01-12', '2016-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(100) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `page_type` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `description`, `page_type`, `picture`, `date`) VALUES
(22, 'TERM & CONDITION', '	\r\n1st contract will be for 2 years\r\nLodging will be free\r\nMedical facility will be free\r\nreturn ticket will be free after two year\r\novertime allowance will be according to local ï¿½Labour Law ï¿½ï¿½\r\nother term & condition will be according to Government Labor Laws', 'term_condition', '', '2015-12-04 09:48:45'),
(29, 'OUR SERVICES :', 'The main purpose of AL-Moqadas is to provide Honest, Efficient and Quick services to the Valued employers in the matter of recruitment and development of man power & To build up positive image/picture of Afghani workers in employment market We aaaarrange manpower on behalf of foreign principals/ employers through advertisement of vacancies in the daily newspaper/ office data after obtaining permission from government protectors office. CVÃ¯Â¿Â½s of interested candidate are short listed and sent to employers. Data and time of interviews are conveyed to the candidates of the required categories as per instruction of employer. Interviews are conducted for final selection of candidates by the representatives of the employer. for technical jobs the candidates are also sent for the trade test in reputed technical centers. selected candidates are advised to have their medical checkup from any GCC approved medical center. passport and other related documents of selected candidates are submitted to concerned embassy for endorsement of visa. recruited workers are registered with protectors of the emigrants government of Afghanistan. Air tickets are arranged for the workers and the employer is informed about the flight detail to make sure that the reprehensive of employer will receive them', 'services', 'services.png', '2015-12-08 22:30:23'),
(30, 'ABOUT ALMOQADAS TRAVEL AND TOUR:', 'The team at ALMOQADAS Travels is committed to delivering quality service to its clients with a personal touch. As a leading industry player', 'aboutus', 'aboutus.jpg', '2015-12-08 22:31:19'),
(31, 'Careers at ALMOQADAS Travels & Tours:', 'AL-MOQADAS Travels is rapidly growing organization, in terms of both people customers. To keep up with this rapid pace of growth, AB Travels is seeking talented & focused individuals who can contribute significantly and be a part of this growth process.', 'career', '1223305719383_image_.jpg', '2015-12-08 22:32:49'),
(32, 'Umra Package', 'Hello this is Umrah Pakage', 'packages', 'luxury-umrah.jpg', '2015-12-27 16:40:12'),
(33, 'ENJOY USA', 'Special Package of USA In this Package we have 15% off for 50 First Customers \r\n\r\nCall now and Chose Package ', 'packages', 'bannerAboard2.gif', '2015-12-27 10:46:26'),
(34, 'BOOK TRIP', 'Travel Now ALmoQadas Travel and Tour Agency 40% off\r\n', 'news', 'news.gif', '2015-12-27 10:54:57'),
(35, 'GOVA OFFER', '\r\nGova oFfer giev you 30% Discount up to October 9', 'news', 'goa-tour-packages-h.gif', '2015-12-27 11:00:49'),
(36, 'HAJ & UMRAH', 'Specail Haj and Umrah Offer now contact us we HURRY', 'news', 'hajj.gif', '2015-12-27 11:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL auto_increment,
  `costomer_id` int(11) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `description` varchar(60) NOT NULL,
  `date_of_insertion` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `inserted_by` varchar(11) NOT NULL,
  PRIMARY KEY  (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `costomer_id`, `payment_type`, `amount`, `description`, `date_of_insertion`, `inserted_by`) VALUES
(1, 103, 'Ticket', 6000, 'Des', '2015-12-05 22:01:26', '5'),
(2, 103, 'Ticket', 6000, 'Des', '2015-12-05 22:02:16', '5'),
(3, 103, 'Ticket', 454, '', '2015-12-06 05:24:52', '5'),
(4, 103, 'Visa', 555, '44asdf', '2015-12-06 05:25:13', '5'),
(5, 103, 'Ticket', 66666, 'ttttttt', '2015-12-28 05:19:45', '1'),
(6, 104, 'Ticket', 0, 'eeee', '2016-01-01 23:33:20', '1'),
(7, 104, 'Ticket', 30000, 'From KUNAR TO UK', '2016-01-02 00:11:30', '1'),
(8, 103, 'Ticket', 30400, 'From KKR TO UKR', '2016-01-02 00:12:31', '1'),
(9, 104, 'Ticket', 343434, 'TICKET FROM UK TO KUNAR', '2016-01-02 00:42:09', '1'),
(10, 103, 'Visa', 545454, 'dddddd', '2016-01-15 23:16:47', '1');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(100) NOT NULL auto_increment,
  `employee` varchar(50) NOT NULL,
  `month` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `inserted_by` varchar(11) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`salary_id`),
  KEY `emp_id` (`employee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `employee`, `month`, `amount`, `description`, `inserted_by`, `date`) VALUES
(1, 'Abdullah Ha', 'mar', 6543, 'dddd', '5', '2015-12-05 21:58:55'),
(2, 'Abdullah Ha', 'feb', 88888, 'ddddddd', '1', '2015-12-07 23:26:32'),
(3, 'Abdullah Ha', 'jan', 777, 'Salary of January for hamdard', '1', '2015-12-07 23:34:56'),
(4, 'Abdullah Hamdard', 'jan', 7676, 'ddddd', '1', '2015-12-07 23:42:47'),
(5, 'Abdullah Hamdard', 'jan', 200000, 'jjjjj', '2', '2015-12-11 10:55:59'),
(6, 'Haqdost', 'mar', 8787, 'ddddd', '1', '2015-12-27 20:45:57'),
(7, 'Abdullah Hamdard', 'feb', 66666, 'cash', '1', '2015-12-28 05:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL auto_increment,
  `ticket_no` int(11) NOT NULL,
  `costomer_id` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  `sector` varchar(30) NOT NULL,
  `sector_from` varchar(30) NOT NULL,
  `sector_to` varchar(30) NOT NULL,
  `airline_name` varchar(30) NOT NULL,
  `airline_no` varchar(30) NOT NULL,
  `pnr_no` varchar(30) NOT NULL,
  `date_of_insertion` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `inserted_by` varchar(11) NOT NULL,
  PRIMARY KEY  (`ticket_id`),
  UNIQUE KEY `ticket_no` (`ticket_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `ticket_no`, `costomer_id`, `date`, `sector`, `sector_from`, `sector_to`, `airline_name`, `airline_no`, `pnr_no`, `date_of_insertion`, `inserted_by`) VALUES
(15, 787888, 103, '02/12/2015', '', 'kabul', 'uae', 'pamir', '7', '87', '2015-12-02 12:19:28', '5'),
(16, 4545, 104, '15/12/2015', '', 'Kunar', 'jalalabad', 'Flyuae', '4', '66', '2015-12-27 10:47:00', '1'),
(17, 45465, 104, '15/12/2015', '', 'Kunar', 'jalalabad', 'Flyuae', '4', '66', '2015-12-27 10:50:35', '1'),
(18, 433, 104, '30/12/2015', '', 'Noristan', 'Badakhshan', 'ARYANA', '2', '22', '2015-12-27 10:56:56', '1'),
(19, 654, 104, '09/12/2015', '', 'Noristan', 'Badakhshan', 'Fly Dubai', '4', '66', '2015-12-27 11:53:24', '1'),
(20, 4533, 104, '22/12/2015', '', 'KABUL', 'JALALABAD', 'Fly Kabul', '4', '44', '2015-12-27 11:54:16', '1'),
(21, 121, 103, '30/12/2015', '', 'UK', 'USA', 'Fly UK', '9', '55', '2015-12-27 11:56:35', '1'),
(22, 44, 103, '15/12/2015', '', 'KABUL', 'jalalabad', 'Fly UK', '4', '22', '2015-12-27 11:57:05', '1'),
(23, 777, 104, '05/01/2016', '', 'Noristan', 'jalalabad', 'Fly UK', '4', '66', '2016-01-01 23:34:31', '1'),
(24, 6555, 103, '04/01/2016', '', 'UAE', 'KABUL', 'Aryana', '34', '56', '2016-01-02 00:05:03', '1'),
(25, 554, 103, '05/01/2016', '', 'JBL', 'KBL', 'HAYAT AIRLINE', '65', '34', '2016-01-02 00:09:31', '1'),
(26, 565, 104, '05/01/2016', '', 'KUNAR', 'UK', 'Safi Airline', '33', '45', '2016-01-02 00:10:56', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transactionID` int(11) NOT NULL auto_increment,
  `cashID` int(11) NOT NULL,
  `paymentID` int(11) default NULL,
  `expenseID` int(11) default NULL,
  `salaryID` int(11) default NULL,
  PRIMARY KEY  (`transactionID`),
  KEY `cashID` (`cashID`),
  KEY `paymentID` (`paymentID`),
  KEY `expenseID` (`expenseID`),
  KEY `salaryID` (`salaryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transactionID`, `cashID`, `paymentID`, `expenseID`, `salaryID`) VALUES
(1, 1, NULL, 1, NULL),
(2, 2, NULL, NULL, 1),
(3, 4, 2, NULL, NULL),
(4, 5, 3, NULL, NULL),
(5, 6, 4, NULL, NULL),
(6, 7, NULL, 2, NULL),
(7, 8, NULL, 3, NULL),
(8, 9, NULL, NULL, 2),
(9, 10, NULL, NULL, 3),
(10, 11, NULL, NULL, 4),
(11, 12, NULL, NULL, 5),
(12, 13, NULL, 0, NULL),
(13, 14, NULL, 0, NULL),
(14, 15, NULL, 0, NULL),
(15, 16, NULL, 0, NULL),
(16, 17, NULL, 0, NULL),
(17, 18, NULL, 0, NULL),
(18, 19, NULL, 0, NULL),
(19, 20, NULL, NULL, 6),
(20, 21, NULL, NULL, 7),
(21, 22, 5, NULL, NULL),
(22, 23, NULL, 4, NULL),
(23, 24, 6, NULL, NULL),
(24, 25, NULL, 0, NULL),
(25, 26, NULL, 0, NULL),
(26, 27, NULL, 0, NULL),
(27, 28, NULL, 0, NULL),
(28, 29, 7, NULL, NULL),
(29, 30, 8, NULL, NULL),
(30, 31, 9, NULL, NULL),
(31, 32, 10, NULL, NULL);
