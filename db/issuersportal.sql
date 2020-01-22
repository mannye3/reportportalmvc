-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 06:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `issuersportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(255) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `company` varchar(150) NOT NULL,
  `address` varchar(225) NOT NULL,
  `role` varchar(30) NOT NULL,
  `website` varchar(100) NOT NULL,
  `last_login` int(11) NOT NULL,
  `reg_date` varchar(50) NOT NULL,
  `date_made` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_title` varchar(225) NOT NULL,
  `page_keywords` text NOT NULL,
  `page_description` text NOT NULL,
  `page_content` text NOT NULL,
  `author` varchar(65) NOT NULL,
  `image` varchar(100) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `date_published` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients_accounts`
--

CREATE TABLE `clients_accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(255) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `company` varchar(150) NOT NULL,
  `address` varchar(225) NOT NULL,
  `role` varchar(30) NOT NULL,
  `website` varchar(100) NOT NULL,
  `last_login` int(11) NOT NULL,
  `reg_date` varchar(50) NOT NULL,
  `date_made` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients_accounts2`
--

CREATE TABLE `clients_accounts2` (
  `id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `firstname` varchar(120) NOT NULL,
  `lastname` varchar(65) NOT NULL,
  `company` varchar(150) NOT NULL,
  `address1` varchar(225) NOT NULL,
  `address2` varchar(225) NOT NULL,
  `town` varchar(50) NOT NULL,
  `country` varchar(40) NOT NULL,
  `postcode` varchar(15) NOT NULL,
  `telnum` varchar(30) NOT NULL,
  `email` varchar(65) NOT NULL,
  `date_made` int(11) NOT NULL,
  `pword` varchar(255) NOT NULL,
  `chn` varchar(225) NOT NULL,
  `chn2` varchar(225) NOT NULL,
  `last_login` int(11) NOT NULL,
  `Timestamp` int(11) NOT NULL,
  `role` varchar(11) NOT NULL,
  `group` varchar(225) NOT NULL,
  `member_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `EXTERNAL TICKET` varchar(225) NOT NULL,
  `TO MEMBER` varchar(225) NOT NULL,
  `TO ACCOUNT` varchar(225) NOT NULL,
  `TO REFERENCE` varchar(225) NOT NULL,
  `TO FREEZE ID` varchar(225) NOT NULL,
  `FROM MEMBER` varchar(225) NOT NULL,
  `FROM ACCOUNT` varchar(225) NOT NULL,
  `FROM REFERENCE` varchar(225) NOT NULL,
  `FROM FREEZE ID` varchar(225) NOT NULL,
  `SYMBOL` varchar(225) NOT NULL,
  `VOLUME` varchar(225) NOT NULL,
  `PRICE` varchar(225) NOT NULL,
  `TRADE DATE` varchar(22) NOT NULL,
  `TRADE TIME` varchar(225) NOT NULL,
  `SETTLEMENT DATE` varchar(225) NOT NULL,
  `TOTAL VALUE` varchar(225) NOT NULL,
  `INTEREST VALUE` varchar(225) NOT NULL,
  `TRADE STATUS` varchar(225) NOT NULL,
  `NEW EXTERNAL TICKET` varchar(225) NOT NULL,
  `AMEND TIME` varchar(225) NOT NULL,
  `st` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dealing_member`
--

CREATE TABLE `dealing_member` (
  `sn` int(3) NOT NULL,
  `member_name` varchar(51) DEFAULT NULL,
  `member_code` varchar(4) DEFAULT NULL,
  `registration_type` varchar(13) DEFAULT NULL,
  `registered_ Address` varchar(159) DEFAULT NULL,
  `rc_number` int(7) DEFAULT NULL,
  `website` varchar(36) DEFAULT NULL,
  `date_of_incorporation` varchar(10) DEFAULT NULL,
  `phone` varchar(46) DEFAULT NULL,
  `sec_registered` varchar(3) DEFAULT NULL,
  `p_contact_name` varchar(27) DEFAULT NULL,
  `p_contact_phone` varchar(34) DEFAULT NULL,
  `p_contact_email` varchar(64) DEFAULT NULL,
  `enq_contact_name` varchar(28) DEFAULT NULL,
  `enq_contact_phone` varchar(23) DEFAULT NULL,
  `enq_email_com` varchar(395) DEFAULT NULL,
  `c_contact_name` varchar(27) DEFAULT NULL,
  `c_contact_phone` varchar(24) DEFAULT NULL,
  `c_contact_email` varchar(58) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general_market_summary`
--

CREATE TABLE `general_market_summary` (
  `Date` date NOT NULL,
  `Board` varchar(15) DEFAULT NULL,
  `Security` varchar(15) NOT NULL DEFAULT '',
  `Security Name` varchar(100) DEFAULT NULL,
  `Issued Shares` varchar(255) NOT NULL,
  `Ref Price` decimal(18,2) DEFAULT NULL,
  `Quote Basis` decimal(18,2) DEFAULT NULL,
  `Bid Depth` int(18) DEFAULT NULL,
  `Bid Price` decimal(18,2) DEFAULT NULL,
  `Offer Price` decimal(18,2) DEFAULT NULL,
  `Offer Depth` int(18) DEFAULT NULL,
  `Open Price` decimal(18,2) DEFAULT NULL,
  `High Price` decimal(18,2) DEFAULT NULL,
  `Low Price` decimal(18,2) DEFAULT NULL,
  `Change Price` decimal(18,2) DEFAULT NULL,
  `Change Percent` decimal(5,2) DEFAULT NULL,
  `Open Qty` int(50) DEFAULT NULL,
  `Daily Volume` bigint(70) DEFAULT NULL,
  `Daily Value` decimal(18,2) DEFAULT NULL,
  `Number of Bids` int(18) DEFAULT NULL,
  `Number of Offers` int(18) DEFAULT NULL,
  `Orders` int(18) DEFAULT NULL,
  `Avg Price` decimal(18,2) DEFAULT NULL,
  `Close Price` decimal(18,2) DEFAULT NULL,
  `Change LTP` decimal(18,2) DEFAULT NULL,
  `Last Price` decimal(18,2) DEFAULT NULL,
  `Last Auction Price` decimal(18,2) DEFAULT NULL,
  `52 Week High Price` decimal(18,2) DEFAULT NULL,
  `52 Week Low Price` decimal(18,2) DEFAULT NULL,
  `Security Remarks` varchar(100) DEFAULT NULL,
  `TOP` decimal(18,2) DEFAULT NULL,
  `Number of Trades` int(18) DEFAULT NULL,
  `Accrued Interest` decimal(18,2) DEFAULT NULL,
  `Last Auction Yield` decimal(5,2) DEFAULT NULL,
  `ISIN` varchar(30) DEFAULT NULL,
  `Unadjusted Prev Price` decimal(18,2) DEFAULT NULL,
  `Currency` varchar(15) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox_messages`
--

CREATE TABLE `inbox_messages` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `sender_username` varchar(200) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_symbol` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `receiver_symbol` varchar(100) NOT NULL,
  `receiver_email` varchar(100) NOT NULL,
  `read_status` varchar(10) NOT NULL DEFAULT '1',
  `msg_status` varchar(100) NOT NULL,
  `msg_date` varchar(200) NOT NULL,
  `msg_code` varchar(20) NOT NULL,
  `num` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuers_accounts`
--

CREATE TABLE `issuers_accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(255) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `company` varchar(150) NOT NULL,
  `address` varchar(225) NOT NULL,
  `role` varchar(30) NOT NULL,
  `website` varchar(100) NOT NULL,
  `last_login` int(11) NOT NULL,
  `reg_date` varchar(50) NOT NULL,
  `date_made` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuers_admin`
--

CREATE TABLE `issuers_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(255) NOT NULL,
  `symbol` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `company` varchar(150) NOT NULL,
  `address` varchar(225) NOT NULL,
  `role` varchar(30) NOT NULL,
  `website` varchar(100) NOT NULL,
  `last_login` int(11) NOT NULL,
  `reg_date` varchar(50) NOT NULL,
  `date_made` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuers_annual_report`
--

CREATE TABLE `issuers_annual_report` (
  `id` int(11) NOT NULL,
  `symbol` varchar(100) NOT NULL,
  `annual_report` text NOT NULL,
  `upload_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuers_blog`
--

CREATE TABLE `issuers_blog` (
  `id` int(11) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `page_title` varchar(225) NOT NULL,
  `page_keywords` text NOT NULL,
  `page_description` text NOT NULL,
  `page_content` text NOT NULL,
  `author` varchar(65) NOT NULL,
  `image` varchar(100) NOT NULL,
  `picture` varchar(45) NOT NULL,
  `date_published` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuers_fin_statement`
--

CREATE TABLE `issuers_fin_statement` (
  `id` int(11) NOT NULL,
  `symbol` varchar(100) NOT NULL,
  `financial_statement` text NOT NULL,
  `upload_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuers_inbox_messages`
--

CREATE TABLE `issuers_inbox_messages` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `sender_username` varchar(200) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_symbol` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `receiver_symbol` varchar(100) NOT NULL,
  `receiver_email` varchar(100) NOT NULL,
  `read_status` varchar(10) NOT NULL DEFAULT '1',
  `msg_status` varchar(100) NOT NULL,
  `msg_date` varchar(200) NOT NULL,
  `msg_code` varchar(20) NOT NULL,
  `num` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuers_messages`
--

CREATE TABLE `issuers_messages` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `sender_username` varchar(200) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_symbol` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `receiver_symbol` varchar(100) NOT NULL,
  `receiver_email` varchar(100) NOT NULL,
  `read_status` varchar(10) NOT NULL DEFAULT '1',
  `msg_status` varchar(100) NOT NULL,
  `msg_date` varchar(200) NOT NULL,
  `msg_code` varchar(20) NOT NULL,
  `num` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issuers_report_sheet`
--

CREATE TABLE `issuers_report_sheet` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `year` varchar(100) NOT NULL,
  `symbol` varchar(200) NOT NULL,
  `report_sheet` text NOT NULL,
  `upload_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `market_activity_sheet`
--

CREATE TABLE `market_activity_sheet` (
  `id` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `SECURITY` varchar(225) NOT NULL,
  `SYMBOL` varchar(225) NOT NULL,
  `CLOSE_PRICE` float NOT NULL,
  `DEALS` int(20) NOT NULL,
  `VOLUME` bigint(70) NOT NULL,
  `VALUE` bigint(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `sender_username` varchar(200) NOT NULL,
  `sender_email` varchar(100) NOT NULL,
  `sender_symbol` varchar(100) NOT NULL,
  `receiver_username` varchar(100) NOT NULL,
  `receiver_symbol` varchar(100) NOT NULL,
  `receiver_email` varchar(100) NOT NULL,
  `read_status` varchar(10) NOT NULL DEFAULT '1',
  `msg_status` varchar(100) NOT NULL,
  `msg_date` varchar(200) NOT NULL,
  `msg_code` varchar(20) NOT NULL,
  `num` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_account`
--

CREATE TABLE `new_account` (
  `na_sn` int(6) NOT NULL,
  `MEMBER_CODE` text NOT NULL,
  `ACCOUNT` text NOT NULL,
  `CHN` text NOT NULL,
  `NAME` text NOT NULL,
  `ADDRESS1` text NOT NULL,
  `ADDRESS2` text NOT NULL,
  `ADDRESS3` text NOT NULL,
  `STATE` text NOT NULL,
  `COUNTRY` text NOT NULL,
  `TELEPHONE` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `new_account2`
--

CREATE TABLE `new_account2` (
  `na_sn` int(6) NOT NULL,
  `MEMBER_CODE` text NOT NULL,
  `ACCOUNT` text NOT NULL,
  `CHN` text NOT NULL,
  `NAME` text NOT NULL,
  `ADDRESS1` text NOT NULL,
  `ADDRESS2` text NOT NULL,
  `ADDRESS3` text NOT NULL,
  `STATE` text NOT NULL,
  `COUNTRY` text NOT NULL,
  `TELEPHONE` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `security_code` varchar(225) NOT NULL,
  `closeprice` decimal(7,2) NOT NULL,
  `refprice` decimal(7,2) NOT NULL,
  `date` int(11) NOT NULL,
  `date2` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `num` int(11) NOT NULL,
  `cd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `security_to_be_traded`
--

CREATE TABLE `security_to_be_traded` (
  `id` int(11) NOT NULL,
  `COL 1` varchar(2) DEFAULT NULL,
  `COL 2` varchar(42) DEFAULT NULL,
  `COL 3` varchar(40) DEFAULT NULL,
  `COL 4` varchar(9) DEFAULT NULL,
  `COL 5` varchar(66) DEFAULT NULL,
  `COL 6` varchar(32) DEFAULT NULL,
  `COL 7` varchar(12) DEFAULT NULL,
  `COL 8` varchar(29) DEFAULT NULL,
  `COL 9` varchar(17) DEFAULT NULL,
  `COL 10` varchar(10) DEFAULT NULL,
  `COL 11` varchar(18) DEFAULT NULL,
  `COL 12` varchar(11) DEFAULT NULL,
  `COL 13` varchar(37) DEFAULT NULL,
  `COL 14` varchar(9) DEFAULT NULL,
  `COL 15` varchar(19) DEFAULT NULL,
  `COL 16` varchar(22) DEFAULT NULL,
  `COL 17` varchar(9) DEFAULT NULL,
  `COL 18` varchar(9) DEFAULT NULL,
  `COL 19` varchar(14) DEFAULT NULL,
  `COL 20` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `security_to_traded`
--

CREATE TABLE `security_to_traded` (
  `id` int(11) NOT NULL,
  `COL 1` varchar(2) DEFAULT NULL,
  `COL 2` varchar(42) DEFAULT NULL,
  `COL 3` varchar(40) DEFAULT NULL,
  `COL 4` varchar(9) DEFAULT NULL,
  `COL 5` varchar(66) DEFAULT NULL,
  `COL 6` varchar(32) DEFAULT NULL,
  `COL 7` varchar(12) DEFAULT NULL,
  `COL 8` varchar(29) DEFAULT NULL,
  `COL 9` varchar(17) DEFAULT NULL,
  `COL 10` varchar(10) DEFAULT NULL,
  `COL 11` varchar(19) DEFAULT NULL,
  `COL 12` varchar(11) DEFAULT NULL,
  `COL 13` varchar(37) DEFAULT NULL,
  `COL 14` varchar(9) DEFAULT NULL,
  `COL 15` varchar(19) DEFAULT NULL,
  `COL 16` varchar(22) DEFAULT NULL,
  `COL 17` varchar(9) DEFAULT NULL,
  `COL 18` varchar(9) DEFAULT NULL,
  `COL 19` varchar(14) DEFAULT NULL,
  `COL 20` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `smsnewaccount`
--

CREATE TABLE `smsnewaccount` (
  `MEMBERCODE` varchar(255) DEFAULT NULL,
  `SHAREHOLDERSNAME` varchar(255) DEFAULT NULL,
  `DATEOFBIRTH` varchar(255) DEFAULT NULL,
  `NAMEOFGUARDIAN` varchar(255) DEFAULT NULL,
  `CHN` varchar(255) DEFAULT NULL,
  `ACCOUNTNUMBER` varchar(255) DEFAULT NULL,
  `ADDRESSLINE1` varchar(255) DEFAULT NULL,
  `ADDRESSLINE2` varchar(255) DEFAULT NULL,
  `ADDRESSLINE3` varchar(255) DEFAULT NULL,
  `CITYSTATE` varchar(255) DEFAULT NULL,
  `TELEPHONENO` varchar(255) DEFAULT NULL,
  `EMAILADDRESS` varchar(255) DEFAULT NULL,
  `COUNTRYCODE` varchar(255) DEFAULT NULL,
  `DATECREATED` varchar(255) DEFAULT NULL,
  `O` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smsnewaccount2`
--

CREATE TABLE `smsnewaccount2` (
  `MEMBERCODE` varchar(255) DEFAULT NULL,
  `SHAREHOLDERSNAME` varchar(255) DEFAULT NULL,
  `DATEOFBIRTH` varchar(255) DEFAULT NULL,
  `NAMEOFGUARDIAN` varchar(255) DEFAULT NULL,
  `CHN` varchar(255) DEFAULT NULL,
  `ACCOUNTNUMBER` varchar(255) DEFAULT NULL,
  `ADDRESSLINE1` varchar(255) DEFAULT NULL,
  `ADDRESSLINE2` varchar(255) DEFAULT NULL,
  `ADDRESSLINE3` varchar(255) DEFAULT NULL,
  `CITYSTATE` varchar(255) DEFAULT NULL,
  `TELEPHONENO` varchar(255) DEFAULT NULL,
  `EMAILADDRESS` varchar(255) DEFAULT NULL,
  `COUNTRYCODE` varchar(255) DEFAULT NULL,
  `DATECREATED` varchar(255) DEFAULT NULL,
  `O` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_accounts`
--
ALTER TABLE `clients_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_accounts2`
--
ALTER TABLE `clients_accounts2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealing_member`
--
ALTER TABLE `dealing_member`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `general_market_summary`
--
ALTER TABLE `general_market_summary`
  ADD PRIMARY KEY (`Date`,`Security`),
  ADD KEY `Security` (`Security`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox_messages`
--
ALTER TABLE `inbox_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuers_annual_report`
--
ALTER TABLE `issuers_annual_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuers_report_sheet`
--
ALTER TABLE `issuers_report_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `market_activity_sheet`
--
ALTER TABLE `market_activity_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_to_be_traded`
--
ALTER TABLE `security_to_be_traded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_to_traded`
--
ALTER TABLE `security_to_traded`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients_accounts`
--
ALTER TABLE `clients_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients_accounts2`
--
ALTER TABLE `clients_accounts2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dealing_member`
--
ALTER TABLE `dealing_member`
  MODIFY `sn` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inbox_messages`
--
ALTER TABLE `inbox_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issuers_annual_report`
--
ALTER TABLE `issuers_annual_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issuers_report_sheet`
--
ALTER TABLE `issuers_report_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `market_activity_sheet`
--
ALTER TABLE `market_activity_sheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `security_to_be_traded`
--
ALTER TABLE `security_to_be_traded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `security_to_traded`
--
ALTER TABLE `security_to_traded`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
