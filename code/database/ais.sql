-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 02:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ais`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_surname` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_pic` longblob,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_pass`, `admin_name`, `admin_surname`, `admin_email`, `admin_pic`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', 'Mentor', 'Sinanaj', 'career@epoka.edu.al', NULL, '2019-05-25 18:30:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_pic` longblob,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `st_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `educ_history`
--

CREATE TABLE `educ_history` (
  `eh_id` int(11) NOT NULL,
  `eh_school` varchar(255) NOT NULL,
  `eh_major` varchar(255) NOT NULL,
  `eh_rdate` date DEFAULT NULL,
  `eh_gdate` date DEFAULT NULL,
  `st_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `event_location` varchar(10) NOT NULL,
  `event_time` time DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_pic` longblob,
  `event_ticket` varchar(255) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `fr_id` int(11) DEFAULT NULL,
  `st_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_description`, `event_location`, `event_time`, `event_date`, `event_pic`, `event_ticket`, `admin_id`, `fr_id`, `st_id`) VALUES
(1, 'Reunion Alumni', '\r\nYou are invited to network, learn, brainstorm, and share in the first Social Business Day at Epoka University. The day kicks off at 9:00 with networking opportunities with social business entrepreneurs in the Foyer of the A Building. At 10:00, in the Conference Hall of the E Building,\r\nspecial guest speakers will share insights on the social business ecosystem, including the legislative framework and financing opportunities. At 11:15, guests have the opportunity to meet with Epoka academic staff and brainstorm collaborative class and research projects. We wrap up the day with presentations of compelling student research in the Meeting Room of the A Building at 12:30. You may find further program details in the attached document.\r\n\r\nThe Social Business Day is organized by The Yunus Center for Social Business and Sustainability with valuable support from many partners, students, and staff. \r\n\r\nWe invite you to participate in the Social Business Day and work toward a more prosperous, just, and sustainable future!  ', 'Epoka Univ', '19:00:00', '2019-05-10', NULL, ' Contact: career@epoka.edu.al', NULL, NULL, NULL),
(2, 'Open Forum -- IT opportunities -- Raiffeisen Bank', ' Dear Students,\r\n\r\nWe would like to inform you that Today May 28, 2019 Career Planning and Alumni Office in collaboration with Raiffeisen Bank are organizing an Open Forum with topic IT opportunities.\r\n\r\nThe guest will be Ms. Enkeleda Tupa (Human Resources Division), which will talk about the opportunities that Raiffeisen Bank offers and in particular for vacant positions for IT students.', 'Epoka Univ', '11:30:00', '2019-05-28', NULL, ' ', NULL, NULL, NULL),
(3, 'Open Forum -- IT opportunities -- Raiffeisen Bank', ' Dear Students,\r\n\r\nWe would like to inform you that Today May 28, 2019 Career Planning and Alumni Office in collaboration with Raiffeisen Bank are organizing an Open Forum with topic IT opportunities.\r\n\r\nThe guest will be Ms. Enkeleda Tupa (Human Resources Division), which will talk about the opportunities that Raiffeisen Bank offers and in particular for vacant positions for IT students.', 'Epoka Univ', '12:30:00', '2019-05-28', NULL, ' No Ticket needed', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_status`
--

CREATE TABLE `event_status` (
  `es_id` int(11) NOT NULL,
  `st_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fr_id` int(11) NOT NULL,
  `fr_name` varchar(255) NOT NULL,
  `fr_surname` varchar(255) NOT NULL,
  `fr_fac` varchar(10) NOT NULL,
  `fr_dep` varchar(10) NOT NULL,
  `fr_phone` varchar(10) NOT NULL,
  `fr_email` varchar(10) NOT NULL,
  `fr_username` varchar(255) NOT NULL,
  `fr_pass` varchar(255) NOT NULL,
  `fr_pic` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fr_id`, `fr_name`, `fr_surname`, `fr_fac`, `fr_dep`, `fr_phone`, `fr_email`, `fr_username`, `fr_pass`, `fr_pic`) VALUES
(1, 'Erjon', 'Gjoci', 'FEAS', 'BAF', '0698574456', 'egjoci@epo', 'egjoci', '7428d3c7baa1472fc9ac86918355755b', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `google_users`
--

CREATE TABLE `google_users` (
  `google_id` decimal(21,0) NOT NULL,
  `google_name` varchar(60) NOT NULL,
  `google_email` varchar(60) NOT NULL,
  `google_link` varchar(60) NOT NULL,
  `google_picture_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_comp` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_desc` text NOT NULL,
  `job_skills` text NOT NULL,
  `job_exp` varchar(255) NOT NULL,
  `job_ph` varchar(10) NOT NULL,
  `job_email` varchar(255) NOT NULL,
  `job_deadline` date DEFAULT NULL,
  `st_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_comp`, `job_title`, `job_desc`, `job_skills`, `job_exp`, `job_ph`, `job_email`, `job_deadline`, `st_id`, `admin_id`) VALUES
(1, '\"SPEFIN.IT and SABICOM SRL\"', 'Job opportunities in Companies \"SPEFIN.IT and SABICOM SRL\"', ' ompanies SPEFIN.IT and SABICOM SRL has opened a call for jobs:\r\n\r\nSPEFIN.IT requests to work students for the following possibilities:\r\n- 3 PHP developer software\r\n- 1 JAVA developer, junior or superior', ' PHP developers should have these competencies:\r\n- Apache\r\n- PHP\r\n- MySQL\r\n- Javascript / JQuery / Angular JS\r\n- CSS / Bootstrap\r\n- Rest API', '1 year', '0675485963', 'career@epoka.edu.al', NULL, NULL, NULL),
(6, 'Deloitte', 'Internship/ Job opportunity -- Financial Advisory Services at Deloitte.', ' Deloitte is expanding their team in M&A, Corporate Finance, Valuation and Financial Modeling services in our Financial Advisory Services (FAS) Department. This is a unique opportunity for you, fresh graduates or expected to graduate soon in the next months in Engineering, Finance, Accounting, Business Administration, Economics or related fields of studies.\r\n\r\nTheir  FAS Department is the only place you could master investment banking capabilities in our country, at the same professional standards as the most developed countries and financial markets.\r\n\r\nTwo months of training will be provided to the finalists, followed by a job opportunity to the top candidates! We believe in talented people with an critical thinking and analytical mindset regardless the field of studies and as such our agile and effective proven training curricula will support the finalists to gain knowledge and start the professional career. ', ' Good knowledge of a second EU language is an advantage.', 'Not specified', '', 'alrecruiting@deloittece.com', NULL, NULL, NULL),
(7, 'AMD', 'Java Internship -- AMD', 'AMD has opened a call for Internship in JAVA.\r\n\r\nIf you are a Master student of the following study fields:\r\nComputer Engineering\r\nElectronics and Communication Engineering  \r\nApply now at hr@amdtia.com.\r\n', ' ', 'Not specified', '', 'hr@amdtia.com', '2004-06-05', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_history`
--

CREATE TABLE `job_history` (
  `jh_id` int(11) NOT NULL,
  `jh_ttl` varchar(255) NOT NULL,
  `jh_comp` varchar(255) NOT NULL,
  `jh_sd` date DEFAULT NULL,
  `jh_ed` date DEFAULT NULL,
  `st_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job_status`
--

CREATE TABLE `job_status` (
  `js_id` int(11) NOT NULL,
  `st_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_surname` varchar(255) NOT NULL,
  `st_gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `epoka_id` int(11) DEFAULT NULL,
  `st_email` varchar(255) DEFAULT NULL,
  `st_gDate` date DEFAULT NULL,
  `st_rDate` date DEFAULT NULL,
  `st_location` varchar(255) DEFAULT NULL,
  `st_company` varchar(255) DEFAULT NULL,
  `st_job` varchar(255) DEFAULT NULL,
  `st_fos` varchar(255) DEFAULT NULL,
  `st_pic` longblob,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st_surname`, `st_gender`, `dob`, `epoka_id`, `st_email`, `st_gDate`, `st_rDate`, `st_location`, `st_company`, `st_job`, `st_fos`, `st_pic`, `created_at`, `updated_at`) VALUES
(1, 'Sara', 'Makishti', 'F', '1998-03-20', 1051616, 'smakishti16@epoka.edu.al', '2019-06-22', '2016-10-20', 'Tirane', 'Softmogul', 'Full Stack Developer', 'Business Informatics', NULL, '2019-05-27 16:35:15', '0000-00-00 00:00:00'),
(2, 'Xhovana', 'Gjinaj', 'F', '1997-05-22', 1051608, 'xgjinaj16@epoka.edu.al', '2019-06-22', '2016-10-20', 'Tirane', 'Softmogul', 'Full Stack Developer', 'Business Informatics', NULL, '2019-05-28 11:31:56', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `st_id` (`st_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `educ_history`
--
ALTER TABLE `educ_history`
  ADD PRIMARY KEY (`eh_id`),
  ADD KEY `st_id` (`st_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `fr_id` (`fr_id`),
  ADD KEY `st_id` (`st_id`);

--
-- Indexes for table `event_status`
--
ALTER TABLE `event_status`
  ADD PRIMARY KEY (`es_id`),
  ADD KEY `st_id` (`st_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fr_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`),
  ADD UNIQUE KEY `job_email` (`job_email`),
  ADD KEY `st_id` (`st_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `job_history`
--
ALTER TABLE `job_history`
  ADD PRIMARY KEY (`jh_id`),
  ADD KEY `st_id` (`st_id`);

--
-- Indexes for table `job_status`
--
ALTER TABLE `job_status`
  ADD PRIMARY KEY (`js_id`),
  ADD KEY `st_id` (`st_id`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educ_history`
--
ALTER TABLE `educ_history`
  MODIFY `eh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_status`
--
ALTER TABLE `event_status`
  MODIFY `es_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_history`
--
ALTER TABLE `job_history`
  MODIFY `jh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_status`
--
ALTER TABLE `job_status`
  MODIFY `js_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `educ_history`
--
ALTER TABLE `educ_history`
  ADD CONSTRAINT `educ_history_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`fr_id`) REFERENCES `faculty` (`fr_id`),
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);

--
-- Constraints for table `event_status`
--
ALTER TABLE `event_status`
  ADD CONSTRAINT `event_status_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`),
  ADD CONSTRAINT `event_status_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`),
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `job_history`
--
ALTER TABLE `job_history`
  ADD CONSTRAINT `job_history_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`);

--
-- Constraints for table `job_status`
--
ALTER TABLE `job_status`
  ADD CONSTRAINT `job_status_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`st_id`),
  ADD CONSTRAINT `job_status_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
